<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function show(){
        $users = User::orderBy("name","asc")->paginate(30);
        return view('users.users-show',compact('users'));
    }
    public function update(Request $request, $id){
        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect('/users');

    }
    public function edit($id){
        $user = User::findOrFail($id);
        return view('users.edit-user',compact('user'));
    }
    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back();
    }
}
