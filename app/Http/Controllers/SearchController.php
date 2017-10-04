<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applicant;

class SearchController extends Controller
{
    //

    public function search(Request $request)
    {
        $search = $request->search;
        $search .= '%';
        $data = Applicant::where('name', 'like', $search)->paginate(5);

        return view('index')->withData($data)->withTitle('phpTest | search');
    }
}
