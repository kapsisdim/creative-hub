<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function home(){
        return view('pages.index');
    }
    public function index(){
        return view('pages.index');
    }
}
