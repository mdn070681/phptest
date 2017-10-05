<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applicant;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Response;

class RegistrationController extends Controller
{
    public function show(Request $request)
    {
        if (view()->exists('registration')) {
            if ($request->isMethod('post')) {
                $messages = [];
                $rules = [
                    'name' => 'required|max:100|alpha',
                    'surname' => 'required|max:100|alpha',
                    'gender' => 'required|max:10|alpha',
                    'group_number' => 'required|alpha_num|between:2,5',
                    'email' => 'required|email',
                    'score_vno' => 'required|integer|between:100,200',
                    'year' => 'required|integer|between:1981,2017',
                    'local_or_foreigner' => 'required|max:10|alpha'
                ];
//                $validator = Validator::make($request->all(), $rules, $messages);
//                if ($validator->fails()) {
//                    redirect()->route('registration')->withErrors($validator)->withInput();
//                }
                $this->validate($request, $rules);
                if ($request->has('name')) {
                    Applicant::addApplicant($request);
                    $request->flash();
//                $cookie = cookie('email', $request->email, 5256000);
                }
            }
            return view('registration')->withTitle('phpTest | registration');
        }
        return view('welcome')->withTitle('not found view');
    }
}
