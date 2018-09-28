@extends('layouts.app')
@section('title', '')
@section('headernav')
@parent
<div class="text-center">
   <h1>Sistema Auxiliar ao VoiceLink - Endereçamento</h1>
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
   <?php
//            $regions = DB::select('select siteId, name from voc_site');
//   $sites = DB::table('voc_site')->get();
//   $rows = ['voc_site' => $sites];
   $sites[''] = "Selection o CD";
//   echo gettype($sites);
//   dump($sites);
//   dump($rows);
//   $site = [];
   ?>
   <section id='locationFunctions'>
      <div class="row text-center divBorder">
         <div class='col vertical'>
            <div id="siteInput">
               @if (sizeof($sites) === 1)
               {!! Form::select('site', $sites, 'Default',['selected', 'hidden', 'id="site"']) !!}
               @endif

               @if (sizeof($sites) > 1)
               {!!  Form::label('site','Centro de Distribuição: ')  !!}
               {!! Form::select('site', $sites, null) !!}
               @endif
            </div>
         </div>
         <div class='col vertical'>
            <div id="copyButton">
               <button type="button" onclick="copyFromVL()" class="myButton">Copiar endereços do VoiceLink</button>
               <label id="copying" class="blink_me">Aguarde!! Copiando endereços do VoiceLink</label>
            </div>
         </div>
         <div class='col vertical'>
            <div id="copyFromAisleDiv" class='invisible'>
               <label>Copiar do corredor: 
                  <select id="fromAisle" name="aisle">
                     <option value=""></option>
                  </select>
               </label>
               <button type="button" onclick="copyFromAisle()" class="myButton">Copiar do corredor</button>
               <label id="copyingFromAisle" class="blink_me">Aguarde!! Copiando endereços do corredor</label>
            </div>
         </div>
         <!--         <div class='col vertical'>
                     <div id="importButton">
                        <form id="formImportCSV" method="post" action="importCSV" enctype="multipart/form-data">
                           <label>Importe os endereços de um arquivo CSV</label>
                           <input type="file" id="file" name='importCSV' accept=".csv">
                           <br><br>
                           <button type="submit" ">Importar aquivo cvs</button>
                                             <button type="button" onclick="importCSV()">Importar aquivo cvs</button>
                           <label id="importing" class="blink_me">Aguarde!! Importando endereços do arquivo.</label>
                        </form>
                     </div>
                  </div>-->
      </div>
   </section>
   <section id='filterAisles'>
      <div class="row">
         <div class='col'>
            <div id="filterInput" class='invisible'>
               <label>Filtrar por corredor: 
                  <select id="aisle" name="aisle">
                     <option value=""></option>
                  </select>
               </label>
            </div>
         </div>
      </div>
   </section>
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