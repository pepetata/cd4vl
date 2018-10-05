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
         <div class="card-header" id="heading1">
            <h5 class="mb-0">
               <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                  @lang('lang.welcome.instruction.cd4vl')
               </button>
            </h5>
         </div>

         <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordionExample">
            <div class="card-body">
               @for ($i = 1; $i <=  __('lang.welcome.instruction.cd4vl.nlines'); $i++)
                  <?php $line = 'lang.welcome.instruction.cd4vl.line' . $i ?>
                  {!! __($line) !!}
               @endfor
            </div>
         </div>
      </div>
      <div class="card">
         <div class="card-header" id="heading2">
            <h5 class="mb-0">
               <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                  @lang('lang.welcome.instruction.instalation')
               </button>
            </h5>
         </div>

         <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordionExample">
            <div class="card-body">
               @for ($i = 1; $i <=  __('lang.welcome.instruction.instalation.nlines'); $i++)
                  <?php $line = 'lang.welcome.instruction.instalation.line' . $i ?>
                  {!! __($line) !!}
               @endfor
            </div>
         </div>
      </div>
      <div class="card">
         <div class="card-header" id="heading3">
            <h5 class="mb-0">
               <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                  @lang('lang.welcome.instruction.bplocation')
               </button>
            </h5>
         </div>

         <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionExample">
            <div class="card-body">
               @for ($i = 1; $i <=  __('lang.welcome.instruction.bplocation.nlines'); $i++)
                  <?php $line = 'lang.welcome.instruction.bplocation.line' . $i ?>
                  {!! __($line) !!}
               @endfor
            </div>
         </div>
      </div>
      <div class="card">
         <div class="card-header" id="heading4">
            <h5 class="mb-0">
               <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                  @lang('lang.welcome.instruction.bpcd')
               </button>
            </h5>
         </div>

         <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionExample">
            <div class="card-body">
               @for ($i = 1; $i <=  __('lang.welcome.instruction.bpcd.nlines'); $i++)
                  <?php $line = 'lang.welcome.instruction.bpcd.line' . $i ?>
                  {!! __($line) !!}
               @endfor
            </div>
         </div>
      </div>
      <div class="card">
         <div class="card-header" id="heading5">
            <h5 class="mb-0">
               <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                  @lang('lang.welcome.instruction.setup')
               </button>
            </h5>
         </div>
         <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionExample">
            <div class="card-body">
               @for ($i = 1; $i <=  __('lang.welcome.instruction.setup.nlines'); $i++)
                  <?php $line = 'lang.welcome.instruction.setup.line' . $i ?>
                  {!! __($line) !!}
               @endfor
            </div>
         </div>
      </div>
      <div class="card">
         <div class="card-header" id="heading6">
            <h5 class="mb-0">
               <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                  @lang('lang.welcome.instruction.location')
               </button>
            </h5>
         </div>
         <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordionExample">
            <div class="card-body">
               @for ($i = 1; $i <=  __('lang.welcome.instruction.location.nlines'); $i++)
                  <?php $line = 'lang.welcome.instruction.location.line' . $i ?>
                  {!! __($line) !!}
               @endfor
            </div>
         </div>
      </div>
      <div class="card">
         <div class="card-header" id="heading7">
            <h5 class="mb-0">
               <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                  @lang('lang.welcome.instruction.cd')
               </button>
            </h5>
         </div>
         <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordionExample">
            <div class="card-body">
               @for ($i = 1; $i <=  __('lang.welcome.instruction.cd.nlines'); $i++)
                  <?php $line = 'lang.welcome.instruction.cd.line' . $i ?>
                  {!! __($line) !!}
               @endfor
            </div>
         </div>
      </div>
   </div>
</section>
@endsection
