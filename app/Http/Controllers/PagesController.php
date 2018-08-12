<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function index(){
    $title = 'Vvisheshta - A Concept';
    return view('pages.index')-> with('title',$title);  
   }
   public function services(){
    $title = 'Vvisheshta - Services';
    return view('pages.services')-> with('title',$title);
   }
   public function portfolio(){
    $title = 'Vvisheshta - Portfolio';
    return view('pages.portfolio')-> with('title',$title);
   }
   public function contact(){
    $title = 'Vvisheshta - Contact Us';
    return view('pages.contact')-> with('title',$title);
   }
   public function admin(){
    $title = 'Vvisheshta - Admin';
    return view('admin.index')-> with('title',$title);
   }
}
