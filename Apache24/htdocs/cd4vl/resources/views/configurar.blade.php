@extends('layouts.app')
@section('title')
@section('headernav')
@parent
<div class="text-center">
   <h1>@lang('lang.configurar.title')</h1>
</div>
<div>
   <nav class="float-right">
      <a href="index.php">@lang('lang.back')</a>
   </nav>
</div>
@endsection

@section('main')
@parent
<section id='SetupSection'>
   <hr>
   <?php
//   $value=config('database.connections.mysql.database');
   config('database.connections.sqlsrv.host');
   $host = env('DB_HOST');
   $port = env('DB_PORT');
   $db = env('DB_DATABASE');
   $user = env('DB_USERNAME');
   $pass = env('DB_PASSWORD');
   $url = env('VL_URL');
   $clientId = env('VL_CLIENT_ID');
   $clientSecret = env('VL_CLIENT_SECRET');
   ?>
   <div id="configurarDiv">
      <h2 class="text-center">@lang('lang.configurar.dbparam')</h2>
      <br>
      <div class="input-group">
         <div class="input-group-prepend">
            <span class="input-group-text">Database Host</span>
         </div>
         <input id="host" class="form-control" value="<?php echo $host ?>" required>
      </div>
      <div class="input-group">
         <div class="input-group-prepend">
            <span class="input-group-text">Port</span>
         </div>
         <input id="port" class="form-control" value="<?php echo $port ?>" required>
      </div>
      <div class="input-group">
         <div class="input-group-prepend">
            <span class="input-group-text">Database</span>
         </div>
         <input id="db" class="form-control" value="<?php echo $db ?>" required>
      </div>
      <div class="input-group">
         <div class="input-group-prepend">
            <span class="input-group-text">Username</span>
         </div>
         <input id="user" class="form-control" value="<?php echo $user ?>" required>
      </div>
      <div class="input-group">
         <div class="input-group-prepend">
            <span class="input-group-text">Password</span>
         </div>
         <input id="pass" class="form-control" value="<?php echo $pass ?>" required>
      </div>
      <br>
      
      <h2 class="text-center">@lang('lang.configurar.vlparam')</h2>
      <br>
      <div class="input-group">
         <div class="input-group-prepend">
            <span class="input-group-text">VoiceLink URL</span>
         </div>
         <input id="url" class="form-control" value="<?php echo $url ?>" required>
      </div>
      <div class="input-group">
         <div class="input-group-prepend">
            <span class="input-group-text">API Credential - Client Id</span>
         </div>
         <input id="clientid" class="form-control" value="<?php echo $clientId ?>" required>
      </div>
      <div class="input-group">
         <div class="input-group-prepend">
            <span class="input-group-text">API Credential - Client Secret</span>
         </div>
         <input id="clientsecret" class="form-control" value="<?php echo $clientSecret ?>" required>
      </div>
      <br>
      <div class="text-center">
         <button type="button" onclick="saveConf()" class="myButton">@lang('lang.configurar.save')</button>
         <button type="button" onclick="location.href = 'index.php'" class="myButton">@lang('lang.configurar.cancel')</button>
         <br><br>
         <label id="configuring" class="blink_me">Aguarde!! Gravando os parametros informados!!!</label>
      </div>

   </div>
</section>
@endsection

@section('endofhtml')
@parent
<script>
   var locationsArray;
   var locsFrom;
   var numDigitsDefault = 2;
   $('document').ready(function () {
      $('#site').on('change', changedSite);
      $('#aisle').on('change', changedAisleDV);

      document.onkeydown = tabup;
   });

   var alertMsg = (function () {
      return {
         1: "@lang('lang.configurar.alert1')",
         2: "@lang('lang.configurar.alert2')"
      }
   }());

</script>
@endsection