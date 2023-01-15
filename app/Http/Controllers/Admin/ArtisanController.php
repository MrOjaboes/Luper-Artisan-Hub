<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class ArtisanController extends Controller
{
    public function index()
    {
       return view('Admin.Artisan.index');
    }

    public function details(Profile $profile)
    {
        return view('Admin.Artisan.details',compact('profile'));
    }
}
