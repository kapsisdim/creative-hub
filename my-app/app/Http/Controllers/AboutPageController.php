<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    public function index(){
        return view('pages.about');
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
