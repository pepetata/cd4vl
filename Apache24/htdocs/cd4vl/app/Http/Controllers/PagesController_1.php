<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\DVLocations;
use Maatwebsite\Excel\Excel;
use App;

class PagesController extends Controller {

   public function index(Request $request, $locale) {
       App::setLocale($locale);
      return view($locale.'/welcome');
   }

   public function welcome() {
      return view('welcome');
   }

   public function endereco(Request $request, $locale) {
      try {
         $sites = \App\Voc_Sites::orderBy('name')->pluck('name', 'siteId');
      } catch (\Exception $e) {
         return view($locale.'/errordb');
      }
//      return View::make('home', compact('users'));
      return view($locale.'/endereco', compact('sites'));
   }

   public function dv(Request $request, $locale) {
      try {
         $sites = \App\Voc_Sites::orderBy('name')->pluck('name', 'siteId');
      } catch (\Exception $e) {
         return view($locale.'/errordb');
      }
       App::setLocale($locale);
      return view($locale.'/dv', compact('sites'));
   }

   public function configurar(Request $request, $locale) {
       App::setLocale($locale);
      return view($locale.'/configurar');
   }

   public function acessandodb(Request $request, $locale) {
      $p = $request->input('p');
//redirect()->route('acessandobd', ['p' => $p]);
      return view($locale.'/acessandobd', ['p' => $p]);
   }

}
