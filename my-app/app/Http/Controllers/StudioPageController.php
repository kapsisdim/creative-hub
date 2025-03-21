<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudioPageController extends Controller
{
    public function index(){
        return view('pages.studio');
    }
}
