<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
   public function showHome(){
    return view('Welcome');
   }

   
   public function showUser(){
    return view('user');

   }
   public function showBlog(){
      return view('blog');
   }
}
