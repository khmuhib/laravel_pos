<?php

namespace App\Http\Controllers;

use App\Models\UserGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use PHPUnit\TextUI\XmlConfiguration\Group;

class UserGroupController extends Controller
{

    public function index()
    {
        $user_groups = UserGroup::all();
        return view('admin.group.index', compact('user_groups'));
    }

    public function create()
    {

        return view('admin.group.create');
    }


    public function store(Request $request)
    {
        $user_group = $request->all();

        if(UserGroup::create($user_group)){
            Session::flash('message', 'User Group Created Successfully');
        };

        return redirect()->route('user-groups.index');
    }


    public function show(UserGroup $userGroup)
    {
        //
    }


    public function edit(UserGroup $userGroup)
    {
        return view('admin.group.edit', compact('userGroup'));
    }


    public function update(Request $request, UserGroup $userGroup)
    {

        $userGroup->title = $request->title;

        if (!$userGroup->save()){
            return redirect()-back();
        }else {
            return redirect()->route('user-groups.index')->with('message', 'User Group Updated Successfully');
        }


    }


    public function destroy(UserGroup $userGroup)
    {
        $userGroup->delete();

        return redirect()->back()->with('message', 'User Group Deleted Successfully');
    }
}
