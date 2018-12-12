<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use App\Classes\CreateDvlocationsTable;

class EnvController extends Controller {

   public function saveConf(Request $request) {

      function setEnvironmentValue($envKey, $envValue) {
         $envFile = app()->environmentFilePath();
         $str = file_get_contents($envFile);
         $oldValue = env($envKey);

         $str = str_replace("{$envKey}={$oldValue}", "{$envKey}={$envValue}", $str);

         $fp = fopen($envFile, 'w');
         fwrite($fp, $str);
         fclose($fp);
      }

      $host = $request->input('host');
      $port = $request->input('port');
      $db = $request->input('db');
      $user = $request->input('user');
      $pass = $request->input('pass');
      setEnvironmentValue('DB_HOST', $host);
      config(['database.connections.sqlsrv.host' => $host]);

      setEnvironmentValue('DB_PORT', $port);
      config(['database.connections.sqlsrv.port' => $port]);

      setEnvironmentValue('DB_DATABASE', $db);
      config(['database.connections.sqlsrv.database' => $db]);

      setEnvironmentValue('DB_USERNAME', $user);
      config(['database.connections.sqlsrv.username' => $user]);

      setEnvironmentValue('DB_PASSWORD', $pass);
      config(['database.connections.sqlsrv.password' => $pass]);

      $url = $request->input('url');
      $clientId = $request->input('clientid');
      $clientSecret = $request->input('clientsecret');
      setEnvironmentValue('VL_URL', $url);
      setEnvironmentValue('VL_CLIENT_ID', $clientId);
      setEnvironmentValue('VL_CLIENT_SECRET', $clientSecret);

      // check connection
      try {
         if (Schema::hasTable('core_locations')) {
            //
         }
      } catch (\Exception $e) {
         return json_encode(['error' => 1, 'desc' => __('lang.connection.failed.parms') . ' -> ' . $e->getMessage()]);
      }


      // check if table exists
      try {
         if (Schema::hasTable('dv_locations')) {
            return json_encode(['error' => 1, 'desc' => __('lang.configurar.saved')]);
         }
      } catch (\Exception $e) {
         return json_encode(['error' => 1, 'desc' => __('lang.connection.failed.parms') . ' -> ' . $e->getMessage()]);
      }

      // create table
      try {
         $x = new CreateDvlocationsTable();
         $x->up();
      } catch (\Exception $e) {
         echo $e->getMessage();
         return json_encode(['error' => 1, 'desc' => __('lang.configurar.permission') . ' -> ' . $e->getMessage()]);
      }


      return json_encode(['error' => 0]);
   }

}
