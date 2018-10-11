@extends('layouts.app')
@section('title', '')
@section('headernav')
@parent
<div class="text-center">
   <h1>@lang('lang.endereco.title')</h1>
</div>
<div>
   <nav class="float-right">
      <a href="index.php">@lang('lang.back')</a>
   </nav>
</div>
@endsection



@section('main')
@parent
<header>
   <?php
   $sites[''] = __('lang.endereco.selectcd');
   ?>
   <section id='locationFunctions'>
      <div class="row text-center divBorder">
         <div class='col-3 vertical'>
            <div id="siteInput">
               @if (sizeof($sites) === 1)
               {!! Form::select('site', $sites, 'Default',['selected', 'hidden', 'id="site"']) !!}
               @endif

               @if (sizeof($sites) > 1)
               {!!  Form::label('site',__('lang.endereco.cd'))  !!}
               {!! Form::select('site', $sites, null) !!}
               @endif
            </div>
            <div id="copyFromAisleDiv" class='invisible'>
               <hr>
               <label>@lang('lang.endereco.copyaisle')
                  <select id="fromAisle" name="aisle">
                     <option value=""></option>
                  </select>
               </label>
               <button type="button" onclick="copyFromAisle()" class="myButton">@lang('lang.endereco.copyaisleB')</button>
               <label id="copyingFromAisle" class="blink_me">@lang('lang.endereco.copyingaisle')</label>
            </div>

         </div>
         <div id="copyButtonDiv" class='col-9 text-center'>
            <div id="importVLDiv" class="row text-center">
               <div class='col vertical'>
                  <div id="copyButton">
                     <button type="button" onclick="copyFromVL()" class="myButton">@lang('lang.endereco.importVL')</button>
                  </div>
               </div>
               <div id="importFixDiv" class='col vertical'>
                  <div id="copyFixButton">
                     <form id="flatfileForm" enctype="multipart/form-data">
                        {{ csrf_field() }} <!-- form-data in laravel needs this -->
                        <label>@lang('lang.endereco.importFix')</label>
                        <input type="file" id="flatfile" name='flatfile' accept=".dat,.txt">
                     </form>
                     <button type="button" onclick="copyFromVLFix()" class="myButton">@lang('lang.endereco.import')</button>
                  </div>
               </div>
               <div id="importCSVDiv" class='col vertical'>
                  <div id="copyCSVButton">
                     <form id="csvfileForm" enctype="multipart/form-data">
                        {{ csrf_field() }} <!-- form-data in laravel needs this -->
                        <p>@lang('lang.endereco.importCSV')</p>
                        <input type="file" id="csvfile" name='csvfile' accept=".csv">
                     </form>
                     <button type="button" onclick="copyFromVLCSV()" class="myButton">@lang('lang.endereco.import')</button>
                  </div>
               </div>
            </div>
            <p id="copying" class="blink_me">@lang('lang.endereco.copying')</p>
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
                        </form> -->
      </div>
   </section>
   <section id='filterAisles'>
      <div class="row">
         <div class='col'>
            <div id="filterInput" class='invisible'>
               <label>@lang('lang.endereco.filter')
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
         <label><strong>@lang('lang.endereco.id')</strong></label>
      </div>
      <div id='preaisleL' class='col'>
         <button type="button" onclick="fillPreAisle()" class="myButton mb-2"
                 data-toggle="tooltip" data-placement="bottom" title="@lang('lang.endereco.preaisleH')">@lang('lang.endereco.preaisle')</button>
         <button type="button" onclick="emptyPreAisle()" class="myButton text-danger mb-2"
                 data-toggle="tooltip" data-placement="bottom" title="@lang('lang.endereco.preaisleXH')">X</button>
         <input id="fillPreAisleData">
      </div>
      <div class='col'>
         <label><strong>@lang('lang.endereco.aisle')</strong></label>
      </div>
      <div id='postaisleL' class='col'>
         <button type="button" onclick="fillPostAisle()" class="myButton mb-2"
                 data-toggle="tooltip" data-placement="bottom" title="@lang('lang.endereco.postaisleH')">@lang('lang.endereco.postaisle')</button>
         <button type="button" onclick="emptyPostAisle()" class="myButton text-danger mb-2"
                 data-toggle="tooltip" data-placement="bottom" title="@lang('lang.endereco.postaisleXH')">X</button>
         <input id="fillPostAisleData">
      </div>
      <div class='col'>
         <label><strong>@lang('lang.endereco.slot')</strong></label>
         <button type="button" onclick="fillSlot()" class="myButton mb-2"
                 data-toggle="tooltip" data-placement="bottom" title="@lang('lang.endereco.add1H')" >@lang('lang.endereco.add1')</button>
      </div>
      <div class='col-1'>
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
   $('document').ready(function () {
      $('#site').on('change', changedSite);
      $('#aisle').on('change', changedAisle);

      document.onkeydown = tabup;
   });

   var alertMsg = (function () {
      return {
         1: "@lang('lang.endereco.alert1')",
         2: "@lang('lang.endereco.alert2')",
         3: "@lang('lang.endereco.alert3')",
         4: "@lang('lang.endereco.alert4')",
         5: "@lang('lang.endereco.alert5')",
         6: "@lang('lang.endereco.alert6')",
         7: "@lang('lang.endereco.alert7')",
         8: "@lang('lang.endereco.alert8')",
         9: "@lang('lang.endereco.alert9')",
         10: "@lang('lang.endereco.alert10')",
         11: "@lang('lang.endereco.alert11')",
         12: "@lang('lang.endereco.alert12')",
         13: "@lang('lang.endereco.alert13')",
         14: "@lang('lang.endereco.alert14')"
         , 15: "@lang('lang.endereco.alert15')"
         , 16: "@lang('lang.endereco.alert16')"
         , 17: "@lang('lang.endereco.alert17')"
         , 18: "@lang('lang.endereco.alert18')"
      }
   }());

</script>
@endsection