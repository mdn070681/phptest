<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applicant;

class IndexController extends Controller
{
    //

    public function show()
    {
        if (view()->exists('index')) {
            $data = Applicant::getApplicants();
            return view('index')->withData($data)->withTitle('phpTest | index');
        }
        return view('welcome')->withTitle('View not found');
    }
}
