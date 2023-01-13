<?php

namespace App\Http\Controllers\Artisan;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Location;
use App\Models\Profession;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $professions = Profession::all();
        $locations = Location::all();
       return view('Users.profile',compact('professions','locations'));
    }
    public function updateProfile(Request $request)
    {
        //dd($request->all());
        DB::table('profiles')
        ->where('user_id',auth()->user()->id)
        ->update([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'contact_one' => $request->contact_one,
            'contact_two' => $request->contact_two,
            'gender' => $request->gender,
            'work_address' => $request->work_address,
            'marital_status' => $request->marital_status,
            'birth_date' => $request->birth_date,
            'yrs_of_experience' => $request->yrs_of_experience,
            'location' => $request->location,
            'state_of_origin' => $request->state_of_origin,
            'profession' => $request->profession,
            'education' => $request->education,
            'notes' => $request->notes,

        ]);
        return redirect()->back()->with('message', 'Details Updated Successfully.');

    }
    public function updateDetails(Request $request)
    {
        $request->validate([
            'email' => '',
            'name' => '',
        ]);
        User::find(auth()->user()->id)->update([
            'email' => $request->email,
            'name' => $request->name,
        ]);
        return redirect()->back()->with('message', 'Details updated succesfully');
    }

    public function updatePassword(Request $request)
    {
        $validate = $request->validate([
            'oldpassword' => 'required',
            'new_password' => 'required|required_with:confirm_password',
        ]);
        $user = User::find(Auth::user()->id);
        if ($user)
            if (Hash::check($request['oldpassword'], $user->password) && $validate) {
                $user->password = Hash::make($request['new_password']);
                $user->save();
                return redirect()->back()->with('message', 'Password Updated successfully');
            } else {
                return redirect()->back()->with('error', 'Password do not match');
            }
    }
}
