<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;

class ResultController extends Controller
{
    public function about(){
       
        return view('frontend.pages.about');
    }

    public function case(){
       
        return view('frontend.pages.case');
    }


    public function client(){
       
        return view('frontend.pages.client');
    }



    public function information(){
       
        return view('frontend.pages.information');
    }


    public function service(){
       
        return view('frontend.pages.service');
    }

    public function contact(){
       
        return view('frontend.pages.contact');
 
    }

    public function index(){
       
        return view('frontend.layout.subpage');
 
    }

    public function admin(){
       
        return view('backend.layout.main');
    }
}
