<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applicant;

class IndexController extends Controller
{
    public function show()
    {
        if (view()->exists('index')) {
            $data = Applicant::getApplicants();
            return view('index')->withData($data)->withTitle('phpTest | index');
        }
        return view('welcome')->withTitle('View not found');
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $search .= '%';
        $data = Applicant::where('status', 1)->where('name', $search)->paginate(2);

        return view('index')->withData($data)->withTitle('phpTest | search');
    }

    public function sortByName()
    {
        $data = Applicant::getApplicantsByName();
        return view('index')->withData($data)->withTitle('phpTest | index');
    }

    public function sortBySurname()
    {
        $data = Applicant::getApplicantsBySurname();
        return view('index')->withData($data)->withTitle('phpTest | index');
    }

    public function sortByNumber()
    {
        $data = Applicant::getApplicantsByNumber();
        return view('index')->withData($data)->withTitle('phpTest | index');
    }

    public function sortByScore()
    {
        $data = Applicant::getApplicantsByScore();
        return view('index')->withData($data)->withTitle('phpTest | index');
    }
}
