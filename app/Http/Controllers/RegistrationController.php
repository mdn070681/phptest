<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    //

    public function show(Request $request)
    {
        if (view()->exists('registration')) {
            $request->flash();
            return view('registration')->withTitle('phpTest | registration');
        }
        return view('welcome')->withTitle('not found view');
    }
}
