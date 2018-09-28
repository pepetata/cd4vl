@extends('layouts.app')
@section('title', '')
@section('headernav')
@parent
<div class="text-center">
   <h1>Sistema Auxiliar ao VoiceLink - Configurar</h1>
</div>
<div>
   <nav class="float-right">
      <a href="index.php">Voltar</a>
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
   ?>
   <h1 class="text-center">Acessando o bando de dados do VoiceLink</h1>
   <h2 class="text-center">Aguarde...</h2>
   <br>
</section>
@endsection

@section('endofhtml')
@parent
<script>
function gup( name, url ) {
    if (!url) url = location.href;
    name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
    var regexS = "[\\?&]"+name+"=([^&#]*)";
    var regex = new RegExp( regexS );
    var results = regex.exec( url );
    return results == null ? null : results[1];
}


location.href = gup('p');
</script>
@endsection