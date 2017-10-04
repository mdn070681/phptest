<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applicant;

class RegistrationController extends Controller
{
    //

    public function show(Request $request)
    {
        if (view()->exists('registration')) {

            if($request->name){
                Applicant::addApplicant($request);
                $request->flash();
            }
            return view('registration')->withTitle('phpTest | registration');
        }
        return view('welcome')->withTitle('not found view');
    }

}
