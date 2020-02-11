<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
    	$user = User::all();

    	return view('user.user',compact('user'));
    }


     public function edit(User $user)
    {
        return view('user.edit',compact('user'));
    }
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->role = $request->role;
        $user->update();

        return redirect('/user');
    }

    public function destroy(User $user)
    {
        $user->delete($user);
        return back();
    }

}
