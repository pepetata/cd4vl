<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\DVLocations;
use Maatwebsite\Excel\Excel;
use App;

class PagesController extends Controller {

   public function index(Request $request) {
      return view('welcome');
   }

   public function welcome() {
      return view('welcome');
   }

   public function endereco(Request $request) {
      try {
//         $sites = \App\Voc_Sites::orderBy('name')->pluck('name', 'siteId');
         $allsites = DB::select("SELECT * FROM voc_site with (nolock)");
         $sites = collect($allsites)->pluck('name', 'siteId');
      } catch (\Exception $e) {
         echo $e->getMessage();
//         return view('errordb');
      }
//      return View::make('home', compact('users'));
      return view('endereco', compact('sites'));
   }

   public function dv(Request $request) {
      try {
//         $sites = \App\Voc_Sites::orderBy('name')->pluck('name', 'siteId');
         $allsites = DB::select("SELECT * FROM voc_site with (nolock)");
         $sites = collect($allsites)->pluck('name', 'siteId');
      } catch (\Exception $e) {
         return view('errordb');
      }
      return view('dv', compact('sites'));
   }

   public function configurar(Request $request) {
      return view('configurar');
   }

   public function acessandodb(Request $request) {
      $p = $request->input('p');
      return view('acessandobd', ['p' => $p]);
   }

}
