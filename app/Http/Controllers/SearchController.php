<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applicant;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->search;
        $search .= '%';
        $data = Applicant::where('status', 1)->where('name', 'like', $search)->orWhere('surname', 'like', $search)->orWhere('group_number', 'like', $search)->orWhere('score_vno', 'like', $search)->paginate(100500);
        return view('index')->withData($data)->withTitle('phpTest | search');
    }
}
