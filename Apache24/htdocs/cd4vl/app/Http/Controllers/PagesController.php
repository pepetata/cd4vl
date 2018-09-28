<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\DVLocations;
use Maatwebsite\Excel\Excel;

class PagesController extends Controller {

   public function index() {
      return view('welcome');
   }

   public function endereco() {
      try {
         $sites = \App\Voc_Sites::orderBy('name')->pluck('name', 'siteId');
      } catch (\Exception $e) {
         return view('errordb');
      }
//      return View::make('home', compact('users'));
      return view('endereco', compact('sites'));
   }

   public function dv() {
      try {
         $sites = \App\Voc_Sites::orderBy('name')->pluck('name', 'siteId');
      } catch (\Exception $e) {
         return view('errordb');
      }
      return view('dv', compact('sites'));
   }

   public function configurar() {
      return view('configurar');
   }

   public function acessandodb(Request $request) {
      $p= $request->input('p');
//redirect()->route('acessandobd', ['p' => $p]);
      return view('acessandobd',['p' => $p]);
   }

}
