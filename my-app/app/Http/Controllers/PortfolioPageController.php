<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioPageController extends Controller
{
    public function index(){
        return view('pages.portfolio');
    }
}
