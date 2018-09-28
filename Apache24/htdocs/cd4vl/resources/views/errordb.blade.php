@extends('layouts.app')
@section('title', '')
@section('headernav')
@parent
<div class="text-center">
   Sistema Auxiliar ao VoiceLink
</div>
<div>
<nav class="float-right">
   <a href="index.php">Voltar</a>
</nav>
   </div>
@endsection



@section('main')
@parent
<header>
   <h1 class="text-center">Houve um error para acessar o bando de dados!!!</h1>
</header>

<section id='LocationSections' class="invisible">
   <hr>
   <div class="row text-center">
      <!--         <div class='col'>
                  <input id='cbheader' type="checkbox" >
               </div>-->
      <div class='col'>
         <label>Código</label>
      </div>
      <div id='preaisleL' class='col'>
         <button type="button" onclick="fillPreAisle()" class="myButton mb-2"
                 data-toggle="tooltip" data-placement="bottom" title="Preencher o pré-corredor com o conteúdo informado">Pré-corredor</button>
         <button type="button" onclick="emptyPreAisle()" class="myButton text-danger mb-2"
                 data-toggle="tooltip" data-placement="bottom" title="Apagar o conteúdo existente no pré-corredor">X</button>
         <input id="fillPreAisleData">
      </div>
      <div class='col'>
         <label>Corredor</label>
      </div>
      <div id='postaisleL' class='col'>
         <button type="button" onclick="fillPostAisle()" class="myButton mb-2"
                 data-toggle="tooltip" data-placement="bottom" title="Preencher o pós-corredor com o conteúdo informado">Pós-corredor</button>
         <button type="button" onclick="emptyPostAisle()" class="myButton text-danger mb-2"
                 data-toggle="tooltip" data-placement="bottom" title="Apagar o conteúdo existente no pós-corredor">X</button>
         <input id="fillPostAisleData">
      </div>
      <div class='col'>
         <label>Endereço</label>
         <button type="button" onclick="fillSlot()" class="myButton mb-2"
                 data-toggle="tooltip" data-placement="bottom" title="Alterar o conteúdo de todos os endereços iniciando pelo número que vai ser informado" >+1 Todos</button>
      </div>
      <div class='col-1'>
      </div>
      <!--      <div class='col-3'>
               <label>Dígitos de Verificação</label>
            </div>-->
   </div>
   <hr>
   <div id='dynamicLocs'>
   </div>
</section>
@endsection

@section('endofhtml')
@parent
<script>
   var locationsArray;
   $('document').ready(function () {
      $('#site').on('change', changedSite);
      $('#aisle').on('change', changedAisle);

      document.onkeydown = tabup;
   });
</script>
@endsection