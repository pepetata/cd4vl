<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\DVLocations;
use App\VLLocations;
use Carbon\Carbon;

class DVController extends Controller {

   function dvGen($i, $numdigits) {
      $dv = "00000" . strval(rand(0, intval(str_repeat("9", $numdigits))));
      $dv1 = substr($dv, strlen($dv) - $numdigits, $numdigits);
      return $dv1;
   }

   function checkSameSlot($i, $dv, $dvSlot) {
      if ($i === 0)
         return false;
      for ($j = 0; $j < $i; $j++) {
         if ($dvSlot[$j] === $dv)
            return true;
      }
      return false;
   }

   function checkNeighborsSlot($dv, $location) {
      // is there level? 3c -> check 3b 3d 2c 4c
      // there is not level 3 -> check 2 4
      $slot = $location[0]['slot'];
      $level = preg_match('/\D/', $slot);
      if ($level)
         return $this->hasLevel($dv, $location);
      else
         return $this->hasNoLevel($dv, $location);
      return false;
   }

   function hasLevel($dv, $location) {
      // is there level? 3c -> check 3b 3d 2c 4c
      $levels = '-abcdefghijk-ABCDEFGHIJK';
      $slot = $location[0]['slot'];
      $i = preg_match('/(\d+)/', $slot, $s);
      $num = $s[0];
      $i = preg_match('/\D/', $slot, $s);
      $level = $s[0];
//         echo "\r\n" . $slot . '  tem nivel ' . $num . '-' . $level . "\r\n";
      // one slot up
      $newlevel = substr($levels, strpos($levels, $level) + 1, 1);
      $newslot = $num . $newlevel;
      $res = $this->checkThisLoc($dv, $location[0]['preAisle'], $location[0]['aisle'], $location[0]['postAisle'], $newslot);
      if ($res)
         return true;
      // one slot down
      $newlevel = substr($levels, strpos($levels, $level) - 1, 1);
      $newslot = $num . $newlevel;
      $res = $this->checkThisLoc($dv, $location[0]['preAisle'], $location[0]['aisle'], $location[0]['postAisle'], $newslot);
      if ($res)
         return true;
      // one slot left
      $newlevel = substr($levels, strpos($levels, $level) - 1, 1);
      $newslot = (strval($num) - 1) . $level;
      $res = $this->checkThisLoc($dv, $location[0]['preAisle'], $location[0]['aisle'], $location[0]['postAisle'], $newslot);
      if ($res)
         return true;
      // one slot right
      $newlevel = substr($levels, strpos($levels, $level) - 1, 1);
      $newslot = (strval($num) + 1) . $level;
      $res = $this->checkThisLoc($dv, $location[0]['preAisle'], $location[0]['aisle'], $location[0]['postAisle'], $newslot);
      if ($res)
         return true;
      return false;
   }

   function hasNoLevel($dv, $location) {
      // there is not level 3 -> check 2 4
      $slot = $location[0]['slot'];
//         echo $slot . ' nao tem nivel' . "\r\n";
      // one slot left
      $newslot = strval((int) $slot - 1);
      $res = $this->checkThisLoc($dv, $location[0]['preAisle'], $location[0]['aisle'], $location[0]['postAisle'], $newslot);
      if ($res)
         return true;
      // two slot left --> in case odds are in one side of the aisle and even in the other side
      $newslot = strval((int) $slot - 2);
      $res = $this->checkThisLoc($dv, $location[0]['preAisle'], $location[0]['aisle'], $location[0]['postAisle'], $newslot);
      if ($res)
         return true;
      // one slot right
      $newslot = strval((int) $slot + 1);
      return $this->checkThisLoc($dv, $location[0]['preAisle'], $location[0]['aisle'], $location[0]['postAisle'], $newslot);
      // two slot right--> in case odds are in one side of the aisle and even in the other side
      $newslot = strval((int) $slot + 1);
      return $this->checkThisLoc($dv, $location[0]['preAisle'], $location[0]['aisle'], $location[0]['postAisle'], $newslot);
   }

   function checkThisLoc($dv, $preAisle, $aisle, $postAisle, $slot) {
//         echo ' procurando ' . 'preAisle ' . $preAisle . ' aisle ' . $aisle . ' postAisle ' . $postAisle . ' slot ' . $slot . "\r\n";
//         $queries = DB::getQueryLog();
//         var_dump($queries);
      $newlocation = DVLocations::where([['preAisle', $preAisle],
                  ['aisle', $aisle], ['postAisle', $postAisle],
                  ['slot', $slot]])->get();

      if ($newlocation->count() === 0)
         return false;

      if ($dv === $newlocation[0]['dv1'] || $dv === $newlocation[0]['dv2'] ||
              $dv === $newlocation[0]['dv3'] || $dv === $newlocation[0]['dv4'] ||
              $dv === $newlocation[0]['dv5'])
         return true;
      return false;
   }

   function checkSameSlotDifferentAisle($dv, $location) {
      $slot = $location[0]['slot'];
      $sameSlots = DVLocations::where([['preAisle', $location[0]['preAisle']],
                  ['aisle', '!=', $location[0]['aisle']], ['postAisle', $location[0]['postAisle']],
                  ['slot', $slot]])->get();
//          var_dump($sameSlots);
      $geNewDV = false;
      foreach ($sameSlots as $sameSlot) {
//            echo ' ----' . $sameSlot->locid . ' dv= ' . $sameSlot->dv1 . ' ' . $sameSlot->dv2 . ' ' . $sameSlot->dv3 . ' ' . $sameSlot->dv4 . ' ' . $sameSlot->dv5;
         $geNewDV = ($dv === $sameSlot->dv1 || $dv === $sameSlot->dv2 ||
                 $dv === $sameSlot->dv3 || $dv === $sameSlot->dv4 ||
                 $dv === $sameSlot->dv5);
         if ($geNewDV)
            break;
      };
      return $geNewDV;
   }

   public function generateDV(Request $request) {

//      DB::connection()->enableQueryLog();

      set_time_limit(0);
      $ids = $request->input('ids');
      $numdigits = $request->input('numdigits');
      foreach ($ids as $id) {
         $dvSlot = [];
         $location = DVLocations::where('id', $id)->get();
         $slot = $location[0]['slot'];
         if ($slot) {
            for ($i = 0; $i <= 4; $i++) {
               $geNewDV = true;
               while ($geNewDV) {
                  $dv = $this->dvGen($i, $numdigits);
//                  echo "\r\n" . "slot $slot dv $i =" . $dv . "\r\n";
                  $geNewDV = $this->checkSameSlot($i, $dv, $dvSlot);
                  if (!$geNewDV)
                     $geNewDV = $this->checkNeighborsSlot($dv, $location);
                  if (!$geNewDV)
                     $geNewDV = $this->checkSameSlotDifferentAisle($dv, $location);
               }
               $dvSlot[] = $dv;
            }
            $loc = DVLocations::where('id', $id)->update([
                'dv1' => $dvSlot[0], 'dv2' => $dvSlot[1],
                'dv3' => $dvSlot[2], 'dv4' => $dvSlot[3], 'dv5' => $dvSlot[4]
            ]);
         }
      }
      return;
   }

   public function generateDVAllLocs(Request $request) {


//      DB::connection()->enableQueryLog();


      set_time_limit(0);
      $numdigits = $request->input('numdigits');
      $ids = DVLocations::all();
//      print_r($ids);
      $iii = 0;
      foreach ($ids as $location){
         $id = $location->id;
         $dvSlot = [];
         $slot = $location->slot;
//         echo "iii=$iii id=$id slot = $slot \r\n";
         $iii++;
//         if ($iii > 3) break;
         if ($slot) {
            for ($i = 0; $i <= 4; $i++) {
               $geNewDV = true;
               while ($geNewDV) {
                  $dv = $this->dvGen($i, $numdigits);
//                  echo "\r\n" . "slot $slot dv $i =" . $dv . "\r\n";
                  $geNewDV = $this->checkSameSlot($i, $dv, $dvSlot);
                  if (!$geNewDV)
                     $geNewDV = $this->checkNeighborsSlot($dv, $location);
                  if (!$geNewDV)
                     $geNewDV = $this->checkSameSlotDifferentAisle($dv, $location);
               }
               $dvSlot[] = $dv;
            }
            $loc = DVLocations::where('id', $id)->update([
                'dv1' => $dvSlot[0], 'dv2' => $dvSlot[1],
                'dv3' => $dvSlot[2], 'dv4' => $dvSlot[3], 'dv5' => $dvSlot[4]
            ]);
         }
      }
      return "end";
   }

   public function updateVL(Request $request) {
      set_time_limit(0);
//      DB::connection()->enableQueryLog();

      $siteId = $request->input('siteId');
      $dv = $request->input('dv');
      $locations = DVLocations::where('site', $siteId)->get();
      foreach ($locations as $location) {
//         echo 'DV locid=' . $location['locid'] . "\r\n";
         $loc = VLLocations::where('scannedVerification', $location['locid'])->update([
             'checkDigits' => $location[$dv],
             'preAisle' => $location['preAisle'],
             'aisle' => $location['aisle'],
             'postAisle' => $location['postAisle'],
             'slot' => $location['slot'],
         ]);
//         var_dump(DB::getQueryLog());
      }
   }

   public function exportCDFix(Request $request) {
      set_time_limit(0);
//      DB::connection()->enableQueryLog();

      $siteId = $request->input('siteId');
      $dv = $request->input('dv');
      $locations = DVLocations::where('site', $siteId)->get();

      $date = new \DateTime("now", new \DateTimeZone('America/Araguaina')); //first argument "must" be a string
//      $date = new \DateTime();
      $filename = "..\..\..\..\coreloc" . $date->format('Y_m_d_H_i_s') . '.dat';
      $file = fopen($filename, "w");
      foreach ($locations as $location) {
         $line = substr(($location['preAisle'] !== "NULL" ? $location['preAisle'] : " ") . str_repeat(" ", 50), 0, 50);
         $line .= substr(($location['aisle'] !== "NULL" ? $location['aisle'] : " ") . str_repeat(" ", 50), 0, 50);
         $line .= substr(($location['slot'] !== "NULL" ? $location['slot'] : " ") . str_repeat(" ", 50), 0, 50);
         $line .= substr(($location['locid'] !== "NULL" ? $location['locid'] : " ") . str_repeat(" ", 50), 0, 50);
         $line .= substr(($location['spokenVerification'] !== "NULL" ? $location['spokenVerification'] : " ") . str_repeat(" ", 50), 0, 50);
         $line .= substr(($location[$dv] !== "NULL" ? $location[$dv] : " ") . str_repeat(" ", 50), 0, 5);
         $line .= substr(($location['postAisle'] !== "NULL" ? $location['postAisle'] : " ") . str_repeat(" ", 50), 0, 50);
         $line .= "\n";
         fwrite($file, $line);
      }
   }

   public function exportCDTable(Request $request) {
      set_time_limit(0);

      $siteId = $request->input('siteId');
      $siteName = $request->input('siteName');
      $dv = $request->input('dv');
      $locations = DVLocations::where('site', $siteId)->get();

      DB::table('core_location_import_data')->delete();
      foreach ($locations as $location) {
//         insert into vw_import_location (importID, siteName, preAisle, aisle, postAisle,
//         slot, checkDigits, spokenVerification, locationIdentifier) Values (999999,
//         'Default', 'Building 9999', '9999', 'Bay 9999', '9999', '9999', '99',
//         '999999999')
//         DB::connection()->enableQueryLog();
         DB::table('vw_import_location')->insert([
             'importID' => $location['id'],
             'siteName' => $siteName,
             'preAisle' => $location['preAisle'],
             'aisle' => $location['aisle'],
             'postAisle' => $location['postAisle'],
             'slot' => $location['slot'],
             'checkDigits' => $location[$dv],
             'spokenVerification' => $location['spokenVerification'],
             'locationIdentifier' => $location['locid']]);
//         var_dump(DB::getQueryLog());
      }
   }

   public function exportCDRest(Request $request) {
      set_time_limit(0);

      $url = env('VL_URL');
      $clientId = env('VL_CLIENT_ID');
      $clientSecret = env('VL_CLIENT_SECRET');
      // eliminate / at the end of the url
      if (substr($url, -1) === "/")
         $url = rtrim($url, "/");

      $siteId = $request->input('siteId');
      $siteName = $request->input('siteName');
      $dv = $request->input('dv');
      $locations = DVLocations::where('site', $siteId)->get();

      $i = 0;
      $data = array();
      foreach ($locations as $location) {
         $i++;
         if ($i > 5)
            break;
         $data[] = (object) array(
                     "LocationIdentifier" => $location['locid'] ? $location['locid'] : '',
                     "SpokenLocation" => $location['spokenVerification'] ? $location['spokenVerification'] : '',
                     "CheckDigits" => $location[$dv] ? $location[$dv] : '',
                     "PreAisleDirection" => $location['preAisle'] ? $location['preAisle'] : '',
                     "Aisle" => $location['aisle'] ? $location['aisle'] : '',
                     "PostAisleDirection" => $location['postAisle'] ? $location['postAisle'] : '',
                     "Slot" => $location['slot'] ? $location['slot'] : ''
         );
      }

      // get token ------------------------------------------------------------
      $data_token = "client_id=" . $clientId
              . "&client_secret=" . $clientSecret
              . "&expiresIn=60000"
              . "&grant_type=client_credentials";
      $urlAPI = $url . "/services/oauth/token";
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $urlAPI);
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data_token);
      $result = curl_exec($ch);
      $res = (array) json_decode($result);
      $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
      curl_close($ch);

      if ($httpCode != 200) {
         return json_encode(['code' => $httpCode]);
      }

      // send data ------------------------------------------------------------
      $site = array();
      array_push($site, (object) array(
                  "siteName" => "Default",
                  "data" => $data
      ));
//      array_push($site, (object) array(
//                  "siteName" => "xxx",
//                  "data" => $data
//      ));
      $importData = (object) array(
                  "importData" => $site
      );


      $urlAPI = $url . "/services/locationService/import";
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $urlAPI);
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
      curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($importData));
      curl_setopt($ch, CURLOPT_HTTPHEADER, array(
          "Content-Type: application/json",
          "Authorization: " . $res['tokenType'] . ' ' . $res['tokenKey']
      ));
      $result = curl_exec($ch);
      $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
//      var_dump(curl_getinfo($ch));
      curl_close($ch);
      return json_encode(['code' => $httpCode]);
   }

   public function printDVSel(Request $request) {

      function centralizeDV($dv) {
         $dvl = strlen($dv);
         switch ($dvl) {
            case 4:
               return " " . $dv;
            case 3:
               return " " . $dv;
            case 2:
               return "  " . $dv;
         }
      }

      function justifyR($s) {
         $b = substr("          ", strlen($s));
         return $b . $s;
      }

      set_time_limit(0);
      $dir = str_replace("app\Http\Controllers", '', __DIR__) . "public" . DIRECTORY_SEPARATOR . "labels" . DIRECTORY_SEPARATOR;
      $file = $dir . "etiqueta.txt";
      $myfile = fopen($file, "r") or die("Unable to open file!");
      $dataorig = fread($myfile, filesize($file));
      fclose($myfile);

      $ids = $request->input('ids');
      $dns = $request->input('printer');
      try {
         $fp = pfsockopen($dns);
      } catch (\Exception $e) {
         return json_encode(['error' => 1, 'desc' => __('lang.dv.error.printing') . ' -> ' . $e->getMessage()]);
      }
      foreach ($ids as $id) {
         $location = DVLocations::where('id', $id)->get();

         $data = $dataorig;
         $data = str_replace("{preAisle}", $location[0]['preAisle'], $data);
         $data = str_replace("{aisle}", $location[0]['aisle'], $data);
         $data = str_replace("{postAisle}", $location[0]['postAisle'], $data);
         $data = str_replace("{locid}", $location[0]['locid'], $data);
         $data = str_replace("{slot}", justifyR($location[0]['slot']), $data);
         $data = str_replace("{dv1}", centralizeDV($location[0]['dv1']), $data);
         $data = str_replace("{dv2}", centralizeDV($location[0]['dv2']), $data);
         $data = str_replace("{dv3}", centralizeDV($location[0]['dv3']), $data);
         $data = str_replace("{dv4}", centralizeDV($location[0]['dv4']), $data);
         $data = str_replace("{dv5}", centralizeDV($location[0]['dv5']), $data);

         try {
            // print
            fputs($fp, $data);
         } catch (\Exception $e) {
            return json_encode(['error' => 1, 'desc' => __('lang.dv.error.printing') . ' -> ' . $e->getMessage()]);
         }
      }
      fclose($fp);
      return json_encode(['error' => 0, 'desc' => '']);
   }

   public function printDVToday(Request $request) {

      function centralizeDV($dv) {
         $dvl = strlen($dv);
         switch ($dvl) {
            case 4:
               return " " . $dv;
            case 3:
               return " " . $dv;
            case 2:
               return "  " . $dv;
         }
      }

      function justifyR($s) {
         $b = substr("          ", strlen($s));
         return $b . $s;
      }

      $dir = str_replace("app\Http\Controllers", '', __DIR__) . "public" . DIRECTORY_SEPARATOR . "labels" . DIRECTORY_SEPARATOR;
      $file = $dir . "etiqueta.txt";
      $myfile = fopen($file, "r") or die("Unable to open file!");
      $dataorig = fread($myfile, filesize($file));
      fclose($myfile);

      $dns = $request->input('printer');
      $siteId = $request->input('siteId');

      DB::connection()->enableQueryLog();
      $ids = DVLocations::whereDate('updated_at', Carbon::today())->where('site', $siteId)->get();
      var_dump(DB::getQueryLog());

      try {
         $fp = pfsockopen($dns);
      } catch (\Exception $e) {
         return json_encode(['error' => 1, 'desc' => __('lang.dv.error.printing') . ' -> ' . $e->getMessage()]);
      }
      foreach ($ids as $location) {
//         var_dump($location);

         $data = $dataorig;
         $data = str_replace("{preAisle}", $location['preAisle'], $data);
         $data = str_replace("{aisle}", $location['aisle'], $data);
         $data = str_replace("{postAisle}", $location['postAisle'], $data);
         $data = str_replace("{locid}", $location['locid'], $data);
         $data = str_replace("{slot}", justifyR($location['slot']), $data);
         $data = str_replace("{dv1}", centralizeDV($location['dv1']), $data);
         $data = str_replace("{dv2}", centralizeDV($location['dv2']), $data);
         $data = str_replace("{dv3}", centralizeDV($location['dv3']), $data);
         $data = str_replace("{dv4}", centralizeDV($location['dv4']), $data);
         $data = str_replace("{dv5}", centralizeDV($location['dv5']), $data);
         try {
            // print
            fputs($fp, $data);
         } catch (\Exception $e) {
            return json_encode(['error' => 1, 'desc' => __('lang.dv.error.printing') . ' -> ' . $e->getMessage()]);
         }
      }
      fclose($fp);
      return json_encode(['error' => 0, 'desc' => '']);
   }

}
