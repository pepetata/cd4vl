<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\DVLocations;
use App\VLLocations;
use Carbon\Carbon;

class DVController extends Controller {

   public function generateDV(Request $request) {

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
            return hasLevel($dv, $location);
         else
            return hasNoLevel($dv, $location);
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
         $res = checkThisLoc($dv, $location[0]['preAisle'], $location[0]['aisle'], $location[0]['postAisle'], $newslot);
         if ($res)
            return true;
         // one slot down
         $newlevel = substr($levels, strpos($levels, $level) - 1, 1);
         $newslot = $num . $newlevel;
         $res = checkThisLoc($dv, $location[0]['preAisle'], $location[0]['aisle'], $location[0]['postAisle'], $newslot);
         if ($res)
            return true;
         // one slot left
         $newlevel = substr($levels, strpos($levels, $level) - 1, 1);
         $newslot = (strval($num) - 1) . $level;
         $res = checkThisLoc($dv, $location[0]['preAisle'], $location[0]['aisle'], $location[0]['postAisle'], $newslot);
         if ($res)
            return true;
         // one slot right
         $newlevel = substr($levels, strpos($levels, $level) - 1, 1);
         $newslot = (strval($num) + 1) . $level;
         $res = checkThisLoc($dv, $location[0]['preAisle'], $location[0]['aisle'], $location[0]['postAisle'], $newslot);
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
         $res = checkThisLoc($dv, $location[0]['preAisle'], $location[0]['aisle'], $location[0]['postAisle'], $newslot);
         if ($res)
            return true;
         // two slot left --> in case odds are in one side of the aisle and even in the other side
         $newslot = strval((int) $slot - 2);
         $res = checkThisLoc($dv, $location[0]['preAisle'], $location[0]['aisle'], $location[0]['postAisle'], $newslot);
         if ($res)
            return true;
         // one slot right
         $newslot = strval((int) $slot + 1);
         return checkThisLoc($dv, $location[0]['preAisle'], $location[0]['aisle'], $location[0]['postAisle'], $newslot);
         // two slot right--> in case odds are in one side of the aisle and even in the other side
         $newslot = strval((int) $slot + 1);
         return checkThisLoc($dv, $location[0]['preAisle'], $location[0]['aisle'], $location[0]['postAisle'], $newslot);
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
                  $dv = dvGen($i, $numdigits);
//                  echo "\r\n" . "slot $slot dv $i =" . $dv . "\r\n";
                  $geNewDV = checkSameSlot($i, $dv, $dvSlot);
                  if (!$geNewDV)
                     $geNewDV = checkNeighborsSlot($dv, $location);
                  if (!$geNewDV)
                     $geNewDV = checkSameSlotDifferentAisle($dv, $location);
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
         return $b.$s;
      }

      $client = \Graze\TelnetClient\TelnetClient::factory();

      set_time_limit(0);
      $dir = str_replace("app\Http\Controllers", '', __DIR__) . "public" . DIRECTORY_SEPARATOR . "labels" . DIRECTORY_SEPARATOR;
      $file = $dir . "etiqueta.txt";
      $myfile = fopen($file, "r") or die("Unable to open file!");
      $data = fread($myfile, filesize($file));
//      fclose($myfile);

      $ids = $request->input('ids');
      $printer = $request->input('printer');
      foreach ($ids as $id) {
         $location = DVLocations::where('id', $id)->get();

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
            $client->connect($printer);
            var_dump($client);
            $resp = $client->execute($data);
         } catch (\Exception $e) {
            return json_encode(['error' => 1, 'desc' => __('lang.dv.error.printing') . ' -> ' . $e->getMessage()]);
         }



//         var_dump($resp);
         return json_encode(['error' => 0, 'desc' => '']);
      }
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

      $client = \Graze\TelnetClient\TelnetClient::factory();

      set_time_limit(0);
      $dir = str_replace("app\Http\Controllers", '', __DIR__) . "public" . DIRECTORY_SEPARATOR . "labels" . DIRECTORY_SEPARATOR;
      $file = $dir . "etiqueta.txt";
      $myfile = fopen($file, "r") or die("Unable to open file!");
      $data = fread($myfile, filesize($file));
//      fclose($myfile);

      $ids = $request->input('ids');
      $printer = $request->input('printer');

//      DB::connection()->enableQueryLog();
      $ids = DVLocations::whereDate('updated_at', Carbon::today())->get();
//      var_dump(DB::getQueryLog());

      foreach ($ids as $location) {
//         var_dump($location);

         $data = str_replace("{preAisle}", $location['preAisle'], $data);
         $data = str_replace("{aisle}", $location['aisle'], $data);
         $data = str_replace("{postAisle}", $location['postAisle'], $data);
         $data = str_replace("{locid}", $location['locid'], $data);
         $data = str_replace("{slot}", $location['slot'], $data);
         $data = str_replace("{dv1}", centralizeDV($location['dv1']), $data);
         $data = str_replace("{dv2}", centralizeDV($location['dv2']), $data);
         $data = str_replace("{dv3}", centralizeDV($location['dv3']), $data);
         $data = str_replace("{dv4}", centralizeDV($location['dv4']), $data);
         $data = str_replace("{dv5}", centralizeDV($location['dv5']), $data);

         $dsn = $printer;
         $client->connect($dsn);
//         $resp = $client->execute($data);
//         var_dump($resp);
      }
   }

}
