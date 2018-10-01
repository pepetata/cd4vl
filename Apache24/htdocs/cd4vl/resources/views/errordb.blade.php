@extends('layouts.app')
@section('title', '')
@section('headernav')
@parent
<div class="text-center">
   <h1>@lang('lang.errordb.title')</h1>
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
   <h1 class="text-center">@lang('lang.errordb.h1')</h1>
</header>

@endsection

@section('endofhtml')
@parent
@endsection