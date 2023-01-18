<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function homePage()
    {
        $professions = Profile::where('status',0)->get();
        $locations = Profile::where('status',0)->get();
        return view('search');
    }
    public function index(Request $request)
    {
        $request->validate([
            'location' =>'required',
            'artisan' =>'required',
                    ]);
                    $result = Profile::where('location','LIKE','%'.$request['location'].'%')->get();
                    // dd($result);

        return view('search-result',compact('result'));
    }
    public function query(Request $request)
    {
      $input = $request->all();

        $data = Profile::select("profession")
                  ->where("profession","LIKE","%{$input['query']}%")
                  ->get();

        return response()->json($data);
    }
}
