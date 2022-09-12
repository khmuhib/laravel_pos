<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Users;
use App\Models\UserGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{

    public function index()
    {
        $users = Users::all();
        return view('admin.user.index', compact('users'));
    }

    public function create()
    {
        $userGroups = UserGroup::all();
        $admins = Admin::all();
        return view('admin.user.create', compact('userGroups', 'admins'));
    }


    public function store(Request $request)
    {
        $users = $request->all();

        if(Users::create($users)){
            Session::flash('message', 'User Created Successfully');
        };

        return redirect()->route('users.index');
    }


    public function show(Users $users)
    {
        //
    }


    public function edit(Users $user)
    {
        $userGroups = UserGroup::all();
        $admins = Admin::all();
        return view('admin.user.edit', compact('user', 'userGroups', 'admins'));
    }


    public function update(Request $request, Users $user)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;

        if (!$user->save()){
            return redirect()-back();
        }else {
            return redirect()->route('users.index')->with('message', 'User Updated Successfully');
        }
    }


    public function destroy(Users $user)
    {
        $user->delete();

        return redirect()->back()->with('message', 'User Deleted Successfully');
    }
}
