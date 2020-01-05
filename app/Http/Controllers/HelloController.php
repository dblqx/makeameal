<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    /*function showHello($name){
      return '<h1>Make A Meal:'.$name.'</h1>';
    }*/

    function show(){
      return view('create.users')
      ->with('name','fried egg')
      ->with('title','recipe');
    }

    /*function resultProduct($product) {
      return '<h1>Recipe:'.$product.'</h1>';
    }*/


}
