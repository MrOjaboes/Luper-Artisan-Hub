<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        return view('search-result');
    }
    public function query(Request $request)
    {
      $input = $request->all();

        $data = Profile::select("location")
                  ->where("location","LIKE","%{$input['query']}%")
                  ->get();

        return response()->json($data);
    }
}
