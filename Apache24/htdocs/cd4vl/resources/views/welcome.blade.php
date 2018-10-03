@extends('layouts.app')
@section('title', '')


@section('main')
@parent
<section>
   <div class="flags">
      @if (app()->getLocale() !== 'pt')
      <a href="locale/pt"><img alt="Portugues" src="images/pt.png"></a>
      @endif

      @if (app()->getLocale() !== 'es')
      <a href="locale/es"><img alt="Espanhol" src="images/es.png"></a>
      @endif
      @if (app()->getLocale() !== 'en')
      <a href="locale/en"><img alt="Ingles" src="images/en.png"></a>
      @endif
   </div>
   <div >
      <h1>@lang('lang.welcome.title')</h1>
      <h2>@lang('lang.welcome.subtitle')</h2>
      <br>
   </div>
</section>
<section>
   <div class="row text-center">
      <div class="col">
         <a href="configurar">
            @if (app()->getLocale() === 'pt')
            <img class="border" src="images/configurar.png" class="img-fluid" alt="Configurar">
            @endif
            @if (app()->getLocale() === 'en')
            <img class="border" src="images/setup.png" class="img-fluid" alt="Setup">
            @endif
            @if (app()->getLocale() === 'es')
            <img class="border" src="images/configurar.png" class="img-fluid" alt="Configurar">
            @endif
         </a>
      </div>
      <div class="col">
         <a href="acessandodb?p=endereco">
            @if (app()->getLocale() === 'pt')
            <img class="border" src="images/enderecos.png" class="img-fluid" alt="Endereço">
            @endif
            @if (app()->getLocale() === 'en')
            <img class="border" src="images/location.png" class="img-fluid" alt="Address">
            @endif
            @if (app()->getLocale() === 'es')
            <img class="border" src="images/ubicacion.png" class="img-fluid" alt="Ubicacion">
            @endif
         </a>
      </div>
      <div class="col">
         <a href="acessandodb?p=dv">
            @if (app()->getLocale() === 'pt')
            <img class="border" src="images/dv.png" class="img-fluid" alt="Dígito de Verificação">
            @endif
            @if (app()->getLocale() === 'en')
            <img class="border" src="images/cd.png" class="img-fluid" alt="Check Digit">
            @endif
            @if (app()->getLocale() === 'es')
            <img class="border" src="images/dv.png" class="img-fluid" alt="Digito de Verificacion">
            @endif
         </a>
      </div>
   </div>
</section>
<br>
<hr>
<section id="instructions">
   <header>
      <h3>@lang('lang.welcome.instruction.title')</h3>
   </header>
   <div class="accordion" id="accordionExample">
      <div class="card">
         <div class="card-header" id="headingOne">
            <h5 class="mb-0">
               <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  @lang('lang.welcome.instruction.setup')
               </button>
            </h5>
         </div>

         <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
               <ul>
                  <li>@lang('lang.welcome.instruction.setup.line1')</li>
                  <li>@lang('lang.welcome.instruction.setup.line2')</li>
                  <li>@lang('lang.welcome.instruction.setup.line3')</li>
                  <li>@lang('lang.welcome.instruction.setup.line4')</li>
                  <li>@lang('lang.welcome.instruction.setup.line5')</li>
                  <li>@lang('lang.welcome.instruction.setup.line6')</li>
               </ul>
            </div>
         </div>
      </div>
      <div class="card">
         <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
               <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  @lang('lang.welcome.instruction.location')
               </button>
            </h5>
         </div>
         <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
               <ul>
                  <li>@lang('lang.welcome.instruction.location.line1')</li>
                  <li>@lang('lang.welcome.instruction.location.line2')</li>
                  <li>@lang('lang.welcome.instruction.location.line3')</li>
                  <li>@lang('lang.welcome.instruction.location.line4')</li>
                  <li>@lang('lang.welcome.instruction.location.line5')</li>
                  <li><strong>@lang('lang.welcome.instruction.location.line6')</strong></li>
                  @if (app()->getLocale() === 'pt')
                  <img alt='endreços' src='images/addresses.png'>
                  @endif
                  @if (app()->getLocale() === 'en')
                  <img alt='endreços' src='images/locations.png'>
                  @endif
                  @if (app()->getLocale() === 'es')
                  <img alt='endreços' src='images/ubicaciones.png'>
                  @endif
                  <li><strong>@lang('lang.welcome.instruction.location.line7')</strong></li>
               </ul>
            </div>
         </div>
      </div>
      <div class="card">
         <div class="card-header" id="headingThree">
            <h5 class="mb-0">
               <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  @lang('lang.welcome.instruction.cd')
               </button>
            </h5>
         </div>
         <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
               <ul>
                  <li>@lang('lang.welcome.instruction.cd.line1')</li>
                  <li>@lang('lang.welcome.instruction.cd.line2')</li>
                  <li>@lang('lang.welcome.instruction.cd.line3')</li>
                  <li>@lang('lang.welcome.instruction.cd.line4')</li>
                  <li>@lang('lang.welcome.instruction.cd.line5')</li>
                  <li>@lang('lang.welcome.instruction.cd.line6')</li>
                  <ul>
                     <li>@lang('lang.welcome.instruction.cd.line7')</li>
                     <li>@lang('lang.welcome.instruction.cd.line8')</li>
                     <li>@lang('lang.welcome.instruction.cd.line9')</li>
                  </ul>
                  <li class='text-danger'><strong>@lang('lang.welcome.instruction.cd.line10')</strong></li>
                  <li>@lang('lang.welcome.instruction.cd.line11')</li>
                  <li>@lang('lang.welcome.instruction.cd.line12')</li>
                  <ul>
                     <li>@lang('lang.welcome.instruction.cd.line13')</li>
                     <li>@lang('lang.welcome.instruction.cd.line14')</li>
                  </ul>
                  <li class='text-danger'><strong>@lang('lang.welcome.instruction.cd.line15')</strong></li>
                  <li>@lang('lang.welcome.instruction.cd.line16')</li>
                  <li>@lang('lang.welcome.instruction.cd.line17')</li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection
