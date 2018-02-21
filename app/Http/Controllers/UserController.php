<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showEdit(Request $request)
    {
    	$user = Auth::user();
    	return view('user.edit', compact('user'));
    }

    public function saveData(Request $request, User $user)
    {
    	if (!$user->update($request->all())) {
    		flash('Failed to update that user data.')->error();
    		return back();
    	}

    	flash('User data updated successfully.')->success();
    	return redirect('/home');
    }

    public function showPasswordEdit()
    {
    	$user = Auth::user();
    	return view('user.password', compact('user'));
    }

    public function updatePassword(Request $request, User $user)
    {
    	$this->validate($request, $this->rules());
    	$password = $request->password;
    	$result = $user->forceFill([
			            'password' => bcrypt($password),
			            'remember_token' => Str::random(60),
			        ])->save();

    	if (!$result) {
    		flash("Failed to update password.")->error();
    		return back();
    	}
    	flash("Password updated successfully.")->success();
    	return redirect('/home');
    }

    protected function rules()
    {
        return [
            'password' => 'required|confirmed|min:6',
        ];
    }
}
