<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Applicant;
use Illuminate\Cookie\CookieJar;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Response;

class RegistrationController extends Controller
{
    public function show()
    {
        $email = Cookie::get('email');
        $applicant = [];
        if ($email) {
            $applicant = Applicant::getApplicantFromEmail($email);
        }
        return view('registration')->withApplicant($applicant)->withTitle('phpTest | registration');
    }

    public function formHandler(CookieJar $cookieJar, Request $request)
    {
        if ($request->isMethod('post')) {
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
            $request->flash();

            $this->validate($request, $rules);

            $oldApplicant = Applicant::oldApplicant($request);

            if ($request->email == Cookie::get('email')) {
                Applicant::updateApplicant($request);
            } elseif($request->email !=  (isset($oldApplicant->email) ? $oldApplicant->email : null)) {
                Applicant::addApplicant($request);
                $cookieJar->queue(cookie('email', $request->email, 5256000));
            }
            return redirect()->route('index');
        }
        return view('registration')->withTitle('phpTest | registration');
    }
}
