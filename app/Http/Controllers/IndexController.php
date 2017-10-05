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

    public function sortByNameUp()
    {
        $data = Applicant::getApplicantsByNameUp();
        return view('index')->withData($data)->withTitle('phpTest | index');
    }

    public function sortByNameDown()
    {
        $data = Applicant::getApplicantsByNameDown();
        return view('index')->withData($data)->withTitle('phpTest | index');
    }

    public function sortBySurnameUp()
    {
        $data = Applicant::getApplicantsBySurnameUp();
        return view('index')->withData($data)->withTitle('phpTest | index');
    }

    public function sortBySurnameDown()
    {
        $data = Applicant::getApplicantsBySurnameDown();
        return view('index')->withData($data)->withTitle('phpTest | index');
    }

    public function sortByNumberUp()
    {
        $data = Applicant::getApplicantsByNumberUp();
        return view('index')->withData($data)->withTitle('phpTest | index');
    }

    public function sortByNumberDown()
    {
        $data = Applicant::getApplicantsByNumberDown();
        return view('index')->withData($data)->withTitle('phpTest | index');
    }

    public function sortByScoreUp()
    {
        $data = Applicant::getApplicantsByScoreUp();
        return view('index')->withData($data)->withTitle('phpTest | index');
    }

    public function sortByScoreDown()
    {
        $data = Applicant::getApplicantsByScoreDown();
        return view('index')->withData($data)->withTitle('phpTest | index');
    }
}
