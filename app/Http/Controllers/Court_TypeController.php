<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Court_Type;

class Court_TypeController extends Controller
{
   public function index(){

        $types = Court_Type::all();
        // return $types;

        return view('MCourt_Type', compact('types'));
   }

   public function store(){
        // return view('MCourt_Type');
   }

}
