@extends('layouts.app')
@section('title', '')
@section('headernav')
@parent
<div class="text-center">
   <h1>@lang('lang.dv.title')</h1>
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
   $sites[''] = __('lang.dv.selectcd');
   ?>

   <section id='CD-Copy'>
      <div class="row text-center divBorder">
         <div class='col vertical'>
            <div id="siteInput">
               @if (sizeof($sites) === 1)
               {!! Form::select('site', $sites, 'Default',['selected', 'hidden', 'id="site"']) !!}
               @endif

               @if (sizeof($sites) > 1)
               {!!  Form::label('site',__('lang.dv.dc'))  !!}
               {!! Form::select('site', $sites, null) !!}
               @endif
            </div>
            <br>
            <div id='printDiv' class='invisible updateDV pt-3'>
               <button type="button" onclick="printDVSel()" class="myButton mb-3">@lang('lang.dv.printselected')</button>
               <button type="button" onclick="printDVToday()" class="myButton mb-3">@lang('lang.dv.printtoday')</button>
               <p id="printing" class="blink_me">@lang('lang.dv.printing')</p>
            </div>
            <br>
            <div id='genDVDiv' class='invisible updateDV pt-3'>
               <button type="button" onclick="generateDVAllLocs()" class="myButton mb-3">@lang('lang.dv.genDVAllLocs')</button>
               <p id="generatingAll" class="blink_me">@lang('lang.dv.generatingAll')</p>
            </div>
         </div>
         <div class='col vertical'>
            <div id="updateButton" class='invisible'>
               <div class="text-center divBorder updateDV">
                  <label>@lang('lang.dv.updateVL')</label>
                  <br>
                  <button type="button" onclick="updateDVVLSel('dv1')" class="myButton dv">
                     <img class="dvBut" src="{{ URL::asset('images/dv1.png')}}" alt="Digito Verificador">
                  </button>
                  <button type="button" onclick="updateDVVLSel('dv2')" class="myButton dv">
                     <img class="dvBut" src="{{ URL::asset('images/dv2.png')}}" alt="Digito Verificador">
                  </button>
                  <button type="button" onclick="updateDVVLSel('dv3')" class="myButton dv">
                     <img class="dvBut" src="{{ URL::asset('images/dv3.png')}}" alt="Digito Verificador">
                  </button>
                  <button type="button" onclick="updateDVVLSel('dv4')" class="myButton dv">
                     <img class="dvBut" src="{{ URL::asset('images/dv4.png')}}" alt="Digito Verificador">
                  </button>
                  <button type="button" onclick="updateDVVLSel('dv5')" class="myButton dv">
                     <img class="dvBut" src="{{ URL::asset('images/dv5.png')}}" alt="Digito Verificador">
                  </button>
               </div>
               <div class="text-center divBorder updateDV">
                  <label>@lang('lang.dv.exportFix')</label>
                  <br>
                  <button type="button" onclick="exportCDFix('dv1')" class="myButton dv">
                     <img class="dvBut" src="{{ URL::asset('images/dv1.png')}}" alt="Digito Verificador">
                  </button>
                  <button type="button" onclick="exportCDFix('dv2')" class="myButton dv">
                     <img class="dvBut" src="{{ URL::asset('images/dv2.png')}}" alt="Digito Verificador">
                  </button>
                  <button type="button" onclick="exportCDFix('dv3')" class="myButton dv">
                     <img class="dvBut" src="{{ URL::asset('images/dv3.png')}}" alt="Digito Verificador">
                  </button>
                  <button type="button" onclick="exportCDFix('dv4')" class="myButton dv">
                     <img class="dvBut" src="{{ URL::asset('images/dv4.png')}}" alt="Digito Verificador">
                  </button>
                  <button type="button" onclick="exportCDFix('dv5')" class="myButton dv">
                     <img class="dvBut" src="{{ URL::asset('images/dv5.png')}}" alt="Digito Verificador">
                  </button>
               </div>
               <div class="text-center divBorder updateDV">
                  <label>@lang('lang.dv.exportTable')</label>
                  <br>
                  <button type="button" onclick="exportCDTable('dv1')" class="myButton dv">
                     <img class="dvBut" src="{{ URL::asset('images/dv1.png')}}" alt="Digito Verificador">
                  </button>
                  <button type="button" onclick="exportCDTable('dv2')" class="myButton dv">
                     <img class="dvBut" src="{{ URL::asset('images/dv2.png')}}" alt="Digito Verificador">
                  </button>
                  <button type="button" onclick="exportCDTable('dv3')" class="myButton dv">
                     <img class="dvBut" src="{{ URL::asset('images/dv3.png')}}" alt="Digito Verificador">
                  </button>
                  <button type="button" onclick="exportCDTable('dv4')" class="myButton dv">
                     <img class="dvBut" src="{{ URL::asset('images/dv4.png')}}" alt="Digito Verificador">
                  </button>
                  <button type="button" onclick="exportCDTable('dv5')" class="myButton dv">
                     <img class="dvBut" src="{{ URL::asset('images/dv5.png')}}" alt="Digito Verificador">
                  </button>
               </div>
               <div class="text-center divBorder updateDV">
                  <label>@lang('lang.dv.exportRest')</label>
                  <br>
                  <button type="button" onclick="exportCDRest('dv1')" class="myButton dv">
                     <img class="dvBut" src="{{ URL::asset('images/dv1.png')}}" alt="Digito Verificador">
                  </button>
                  <button type="button" onclick="exportCDRest('dv2')" class="myButton dv">
                     <img class="dvBut" src="{{ URL::asset('images/dv2.png')}}" alt="Digito Verificador">
                  </button>
                  <button type="button" onclick="exportCDRest('dv3')" class="myButton dv">
                     <img class="dvBut" src="{{ URL::asset('images/dv3.png')}}" alt="Digito Verificador">
                  </button>
                  <button type="button" onclick="exportCDRest('dv4')" class="myButton dv">
                     <img class="dvBut" src="{{ URL::asset('images/dv4.png')}}" alt="Digito Verificador">
                  </button>
                  <button type="button" onclick="exportCDRest('dv5')" class="myButton dv">
                     <img class="dvBut" src="{{ URL::asset('images/dv5.png')}}" alt="Digito Verificador">
                  </button>
               </div>
               <label id="updating" class="blink_me">@lang('lang.dv.updating')</label>
            </div>
         </div>
         <div class='col vertical'>
            <div id="listButton" class='invisible'>
               <textarea id="slotList" rows="8" cols='35'></textarea>
               <br>
               <button type="button" onclick="loadTextLocs()" class="myButton">@lang('lang.dv.searchlist')</button>
               <label id="listing" class="blink_me">@lang('lang.dv.listing')</label>
            </div>
         </div>
      </div>
   </section>
   <section id='filterAisles' class='invisible'>
      <div class="row">
         <div class='col'>
            <div id="filterInput">
               <label>@lang('lang.dv.filter')
                  <select id="aisle" name="aisle">
                     <option value=""></option>
                  </select>
               </label>
            </div>
         </div>
         <div class='col'>
            <button type="button" onclick="generateDV()" class="myButton">@lang('lang.dv.generate')</button>
            <label id="generating" class="blink_me">@lang('lang.dv.generating')</label>
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
            <label><strong>@lang('lang.dv.id')</strong></label>
         </div>
         <div class='col'>
            <label"><strong>@lang('lang.dv.preaisle')</strong></label>
         </div>
         <div class='col'>
            <label><strong>@lang('lang.dv.aisle')</strong></label>
         </div>
         <div class='col'>
            <label><strong>@lang('lang.dv.postaisle')</strong></label>
         </div>
         <div class='col'>
            <label><strong>@lang('lang.dv.slot')</strong></label>
         </div>
         <div class='col-3'>
            <label><strong>@lang('lang.dv.cd')</strong></label>
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

   var alertMsg = (function () {
      return {
         1: "@lang('lang.dv.alert1')",
         2: "@lang('lang.dv.alert2')",
         3: "@lang('lang.dv.alert3')",
         4: "@lang('lang.dv.alert4')",
         5: "@lang('lang.dv.alert5')",
         6: "@lang('lang.dv.alert6')",
         7: "@lang('lang.dv.alert7')",
         8: "@lang('lang.dv.alert8')",
         9: "@lang('lang.dv.alert9')",
         10: "@lang('lang.dv.alert10')",
         11: "@lang('lang.dv.alert11')"
         , 12: "@lang('lang.dv.alert12')"
         , 13: "@lang('lang.dv.alert13')"
         , 14: "@lang('lang.dv.alert14')"
         , 15: "@lang('lang.dv.alert15')"
         , 16: "@lang('lang.dv.alert16')"
         , 17: "@lang('lang.dv.alert17')"
      }
   }());
</script>
@endsection