<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    // Get all Contacts

    public function index()
    {
        $users = User::all();

        return view('user.list', ['users' => $users]);
    }

    // Add a contact

    public function create()
    {
        return view('user.create');

    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Fname' => 'required',
            'Lname' => 'required',
            'mobile' => 'required',

        ]);
        if ($validator->passes()) {
            $user = new User();
            $user->Fname = $request->Fname;
            $user->Lname = $request->Lname;
            $user->email = $request->email;
            $user->mobile = $request->mobile;
            $user->pwd = bcrypt($request->input('pwd'));
            $user->mobile2 = $request->mobile2;
            $user->country = $request->country;
            $user->createdAt = date('Y-m-d H:i:s');
            $user->updatedAt = date('Y-m-d H:i:s');
            $user->region = $request->region;
            $user->city = $request->city;
            $user->bldgFloor = $request->bldgFloor;
            $user->gender = $request->gender;
            $user->clientTypeId = $request->clientTypeId;
            $user->save();
            // $user->session()->flash('success','User created successfully!');

            return redirect()->route('users.index');

        } else {
            // return with errors
            return redirect()->route('users.create')->withErrors($validator)->withInput();
        }
    }

}
