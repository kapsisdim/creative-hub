<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Services\SaveFormEntryService;
use App\Models\MenuItem;
use App\Models\HomePage;
use App\Models\Social;
use App\Models\Info;
use App\Models\AboutPage;

class AboutPageController extends Controller
{
    public function index(){
        $active = 'ABOUT US';
        $menuItems = MenuItem::orderBy('lft', 'asc')->where('main_menu', 1)->get();
        $footerItems = MenuItem::orderBy('lft', 'asc')->get();
        $socials = Social::orderBy('lft', 'asc')->get();
        $info = Info::first();
        $homePage = HomePage::first();
        $page = AboutPage::first();
        return view('pages.about', [
            'active' => $active,
            'menuItems' => $menuItems,
            'footerItems' => $footerItems,
            'socials' => $socials,
            'info' => $info,
            'homePage' => $homePage,
            'page' => $page,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'firstname' => 'required|min:2',
                'lastname' => 'required|min:2',
                'email' => 'required|email',
                'message' => 'required|min:10',
            ],
            [
                '*.required'    => 'Required Field',
                '*.min'    => 'More characters required',
            ]
        );

        if ($validator->fails()) {
            return redirect('/#contact')->withErrors($validator)->withInput();
        }

        $messages = [
            'successes' => [],
            'errors' => [],
        ];

        $saveFormService = new SaveFormEntryService();
        if ($saveFormService->save($request->firstname, $request->lastname, $request->email, $request->message)) {
            $messages['successes'][] = 'Your message has been sent. <br> Thank for contacting us!';
        }

        if ($messages['errors']) {
            return redirect()->to('/#contact')
                ->withErrors($messages['errors'], 'customErrors')
                ->withErrors($messages['successes'], 'customSuccesses')
                ->withInput($request->input());
        } else {
            return redirect::back()->withErrors($messages['successes'], 'customSuccesses');
        }

    }
}
