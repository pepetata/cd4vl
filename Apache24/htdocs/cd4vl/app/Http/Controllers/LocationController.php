<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\DVLocations;

class LocationController extends Controller {

   public function copyFromVL(Request $request) {
      set_time_limit(0);
      //      ob_implicit_flush(true);
      // get only the locations that does not exist in the DV system
      $siteId = $request->input('siteId');
      $newLocs = DB::select('select * from core_locations l, core_location_tag t where tag_id = ' . $siteId . ' AND tagged_id = locationid AND scannedVerification not in (select locid from dv_locations)');
      foreach ($newLocs as $newLoc) {
         DB::table('dv_locations')->insert(
                 ['site' => $siteId, 'locid' => $newLoc->scannedVerification, 'aisle' => $newLoc->aisle, 'created_at' => date('Y-m-d H:i:s')]
         );
         //                  ob_flush();
      }
      return sizeof($newLocs);
   }

   public function getAisles(Request $request) {
      set_time_limit(0);
//      DB::enableQueryLog();
      // get only the locations with aisle x
      $siteId = $request->input('siteId');
      $aisles = DVLocations::distinct()->where('site', '=', $siteId)->orderByRaw('aisle')->get(['aisle']);
//      dd(DB::getQueryLog());
      return $aisles;
   }

   public function getLocs(Request $request) {
      set_time_limit(0);
      // get only the locations with aisle x
      $siteId = $request->input('siteId');
      $aisle = $request->input('aisle');
      $list = json_decode($request->input('list'));
      if (!$aisle) {
         DB::connection()->enableQueryLog();
         $data = DVLocations::where('site', $siteId)->whereIn('locid', $list)->get();
//         var_dump(DB::getQueryLog());
//         dd(DB::getQueryLog());
         return $data;
      } else
         return DVLocations::where([['site', '=', $siteId], ['aisle', '=', $aisle]])->get();
   }

   public function updateData(Request $request) {
      $id = $request->input('id');
      $field = $request->input('field');
      $data = $request->input('data');
//      echo "id=$id field=$field data=$data"."\r\n";
      return DVLocations::where('id', $id)->update([$field => $data]);
   }

   public function updateLocation(Request $request) {
//      DB::connection()->enableQueryLog();


      set_time_limit(0);
      $id = $request->input('id');
      $fields = $request->input('fields');
      $update = array('preaisle' => $fields['preaisle'],
          'postaisle' => $fields['postaisle'],
          'slot' => $fields['slot']);
      $loc = DVLocations::where('id', $id)->update($update);
//            dd($loc);
//      $queries = DB::getQueryLog();
//      var_dump($queries);
      return;
   }

   public function importCSV(Request $request) {
      set_time_limit(0);

//      $siteId = $request->input('siteId');
      $formData = $request->input();
      $path = $request->file('csv_file')->getRealPath();
//      echo $siteId;
//      var_dump($formData);
      var_dump($path);

//      if ($request->hasFile('sample_file')) {
//         $path = $request->file('sample_file')->getRealPath();
//         $data = \Excel::load($path)->get();
//         if ($data->count()) {
//            foreach ($data as $key => $value) {
//               $arr[] = ['name' => $value->name, 'details' => $value->details];
//            }
//            if (!empty($arr)) {
//               \DB::table('products')->insert($arr);
//               dd('Insert Record successfully.');
//            }
//         }
//      }
//      dd('Request data does not have any files to import.');
//      $newLocs = DB::select('select * from core_locations l, core_location_tag t where tag_id = '.$siteId.' AND tagged_id = locationid AND scannedVerification not in (select locid from dv_locations)');
//      foreach ($newLocs as $newLoc) {
//         DB::table('dv_locations')->insert(
//                 ['site' => $siteId, 'locid' => $newLoc->scannedVerification, 'aisle' => $newLoc->aisle, 'created_at' => date('Y-m-d H:i:s')]
//         );
//         //                  ob_flush();
//      }
      return 'abc';
   }

}
