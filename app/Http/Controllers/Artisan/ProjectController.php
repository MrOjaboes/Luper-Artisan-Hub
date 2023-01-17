<?php

namespace App\Http\Controllers\Artisan;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::where('user_id',auth()->user()->id)->orderBy('created_at','DESC')->get();
        return view('Users.Projects.index',compact('projects'));
    }

    public function store(Request $request)
    {
        if ($request->file('file')) {
            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();
            $request->file->storeAs('Projects', $fileName, 'public');
            $request['file'] = $fileName;
        }
        Project::create([
            'title' => $request->title,
            'file' => $fileName,
            'description' => $request->description,
            'profile_id' => auth()->user()->profile->id,
            'user_id' => auth()->user()->id,
        ]);
        return redirect()->back()->with('message','Project Added Successfully!');
    }
}
