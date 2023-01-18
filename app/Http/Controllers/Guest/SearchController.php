<?php

namespace App\Http\Controllers\Guest;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Project;

class SearchController extends Controller
{
    public function homePage()
    {
        $professions = Profile::where('status',0)->get();
        $locations = Profile::where('status',0)->get();
        return view('welcome');
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
public function searchDetails(Profile $profile)
{
    $projects = Project::where('profile_id',2)->get();
    //dd($projects);
   return view('search-details',compact('profile','projects'));
}

    public function professionSearch(Request $request)
    {

        $query = $request->get('query');
        $filterResult = Profile::where('profession', 'LIKE', '%'. $query. '%')->pluck('profession');
        return response()->json($filterResult);
    }
    public function location(Request $request)
    {
        $query = $request->get('search');
        $Result = Profile::where('location', 'LIKE', '%'. $query. '%')->pluck('location');
        return response()->json($Result);
    }

}
