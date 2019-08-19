<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersRequest;
use Illuminate\Http\Request;
use App\User;
class UsersController extends Controller
{
    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }

    public function edit(User $user)
    {
        return view('users.edit',compact('user'));
    }

    public function update(Request $request,User $user)
    {
        $this->validate($request,[
            'name' => 'required|max:50',
            'introduction' => 'required',
            'password' => 'nullable|confirmed|min:3'
        ]);

        $datas = [];
        $datas['name'] = $request->name;
        $datas['introduction'] = $request->introduction;
        if ($request->password){
            $datas['password'] = bcrypt($request->password);
        }

        $user->update($datas);
        return redirect(url('users',$user));
    }
}
