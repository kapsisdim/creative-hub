<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioPageController extends Controller
{
    public function index(){
        return view('pages.portfolio');
    }

    public function project($project){

        if ($project == 'project-video') {
            return view('pages.project-video');
        }

        return view('pages.project');
    }
}
