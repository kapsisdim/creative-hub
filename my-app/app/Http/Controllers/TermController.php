<?php

namespace App\Http\Controllers;

use App\Models\Term;
use Illuminate\Http\Request;
use App\Models\MenuItem;
use App\Models\HomePage;
use App\Models\Social;
use App\Models\Info;
use App\Models\Legal;

class TermController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($term)
    {
        $active = '';
        $menuItems = MenuItem::orderBy('lft', 'asc')->where('main_menu', 1)->get();
        $footerItems = MenuItem::orderBy('lft', 'asc')->get();
        $socials = Social::orderBy('lft', 'asc')->get();
        $info = Info::first();
        $homePage = HomePage::first();
        $term = Legal::where(['slug' => $term])->first();
        if ($term) {
            return view('pages.term', [
                'active' => $active,
                'menuItems' => $menuItems,
                'footerItems' => $footerItems,
                'socials' => $socials,
                'info' => $info,
                'homePage' => $homePage,
                'term' => $term,
            ]);

        } else {
            abord(404);
        }
    }
}
