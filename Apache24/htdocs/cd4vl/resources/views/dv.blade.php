@extends('layouts.app')
@section('title', '')
@section('headernav')
@parent
<div class="text-center">
   <h1>Sistema Auxiliar ao VoiceLink - Dígito de Verificação</h1>
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
   $sites[''] = "Selection o CD";
   ?>

   <section id='CD-Copy'>
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
            <div id="updateButton" class='invisible'>
               <div class="text-center divBorder updateDV">
                  <label>Atualizar DVs no VoiceLink</label>
                  <br>
                  <button type="button" onclick="updateDVVLSel('dv1')" class="myButton dv">
                     <img class="dvBut" src="images/dv1.png" alt="Digito Verificador">
                  </button>
                  <button type="button" onclick="updateDVVLSel('dv2')" class="myButton dv">
                     <img class="dvBut" src="images/dv2.png" alt="Digito Verificador">
                  </button>
                  <button type="button" onclick="updateDVVLSel('dv3')" class="myButton dv">
                     <img class="dvBut" src="images/dv3.png" alt="Digito Verificador">
                  </button>
                  <button type="button" onclick="updateDVVLSel('dv4')" class="myButton dv">
                     <img class="dvBut" src="images/dv4.png" alt="Digito Verificador">
                  </button>
                  <button type="button" onclick="updateDVVLSel('dv5')" class="myButton dv">
                     <img class="dvBut" src="images/dv5.png" alt="Digito Verificador">
                  </button>
               </div>
               <!--               <div class="text-center divBorder updateDV">
                                 <label>Atualizar DVs (hoje) no VoiceLink</label>
                                 <br>
                                 <button type="button" onclick="updateDVVLToday('dv1')">DV1</button>
                                 <button type="button" onclick="updateDVVLToday('dv2')">DV2</button>
                                 <button type="button" onclick="updateDVVLToday('dv3')">DV3</button>
                                 <button type="button" onclick="updateDVVLToday('dv4')">DV4</button>
                                 <button type="button" onclick="updateDVVLToday('dv5')">DV5</button>
                              </div>-->
               <button type="button" onclick="printDVSel()" class="myButton mb-3">Impimir DVs selecionados</button>
               <button type="button" onclick="printDVToday()" class="myButton mb-3">Imprimir DVs criados hoje</button>
               <label id="updating" class="blink_me">Aguarde!! Atualizandos os DVs no VoiceLink</label>
               <label id="printing" class="blink_me">Aguarde!! Imprimindo as etiquetas.</label>
            </div>
         </div>
         <div class='col vertical'>
            <div id="listButton" class='invisible'>
               <textarea id="slotList" rows="6"></textarea>
               <br>
               <button type="button" onclick="loadTextLocs()" class="myButton">Buscar endereços da lista</button>
               <label id="listing" class="blink_me">Aguarde!! Buscando endereços da lista</label>
            </div>
         </div>
      </div>
   </section>
   <section id='filterAisles' class='invisible'>
      <div class="row">
         <div class='col'>
            <div id="filterInput">
               <label>Filtrar por corredor: 
                  <select id="aisle" name="aisle">
                     <option value=""></option>
                  </select>
               </label>
            </div>
         </div>
         <div class='col'>
            <button type="button" onclick="generateDV()" class="myButton">Gerar DVs</button>
            <label id="generating" class="blink_me">Aguarde!! Gerandos DVs para os endereços selecionados</label>
         </div>
      </div>
   </section>
</header>

<section id='LocationSections' class="invisible">
   <hr>
   <div>
      <div class="row text-center locationRow">
         <div class='col-1'>
            <input id="cbloc" type="checkbox" onclick="clickLocCB(this)">
         </div>
         <div class='col'>
            <label>Código</label>
         </div>
         <div class='col'>
            <label">Pré-corredor</label>
         </div>
         <div class='col'>
            <label>Corredor</label>
         </div>
         <div class='col'>
            <label>Pós-corredor</label>
         </div>
         <div class='col'>
            <label>Endereço</label>
         </div>
         <div class='col-3'>
            <label>Dígitos de Verificação</label>
         </div>
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
   var locsFrom;
   var numDigitsDefault = 2;
   $('document').ready(function () {
      $('#site').on('change', changedSite);
      $('#aisle').on('change', changedAisleDV);

      document.onkeydown = tabup;
   });
</script>
@endsection