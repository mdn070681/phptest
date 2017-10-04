<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applicant;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Response;



class RegistrationController extends Controller
{
    //

    public function show(Request $request)
    {
        if (view()->exists('registration')) {

            $value = $request->cookie('email');

            if($request->has('name')){
                Applicant::addApplicant($request);
                $request->flash();
                $cookie = cookie('email', $request->email, 5256000);
            }



            return view('registration')->withTitle('phpTest | registration')->withCookie($cookie);
        }
        return view('welcome')->withTitle('not found view');
    }

}
