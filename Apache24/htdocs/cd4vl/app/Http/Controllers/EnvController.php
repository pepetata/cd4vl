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


      // check connection
      try {
         if (Schema::hasTable('core_locations')) {
            //
         }
      } catch (\Exception $e) {
         return json_encode(['error' => 1, 'desc' => "Falha na conexão ao banco de dados. Reveja os parametros informados"]);
      }


      // check if table exists
      try {
         if (Schema::hasTable('dv_locations')) {
            return json_encode(['error' => 1, 'desc' => "Parâmetros gravados com sucesso. Tabela já existe!!!"]);
         }
      } catch (\Exception $e) {
         return json_encode(['error' => 1, 'desc' => "Falha na conexão ao banco de dados. Reveja os parametros informados"]);
      }
            
      // create table
      try {
         $x = new CreateDvlocationsTable();
         $x->up();
      } catch (\Exception $e) {
         echo $e->getMessage();;
         return json_encode(['error' => 1, 'desc' => "Não foi possível criar a tabela necessária!! Possível problema de permissão."]);
      }


      return json_encode(['error' => 0]);
   }

}
