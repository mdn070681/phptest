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

    public function search(Request $request){

        $search = $request->search;
        $search .= '%';


        $data = Applicant::where('status', 1 )->where('name', $search)->paginate(2);

        return view('index')->withData($data)->withTitle('phpTest | search');

    }
}
