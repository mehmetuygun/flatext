<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\AccountPasswordRequest;
use App\Http\Requests\UpdateAccountRequest;
use App\User;
use Auth;
use Hash;

class AccountController extends Controller
{
    public function getEditAccount()
    {
    	return view('admin/profile');
    }

    public function postEditAccount(UpdateAccountRequest $request)
    {
    	$user_id = Auth::user()->id;
    	$user = User::find($user_id);

    	$first_name = ucfirst(strtolower($request->first_name));
    	$last_name = ucfirst(strtolower($request->last_name));
    	$request->replace(['first_name' => $first_name, 'last_name' => $last_name]);

    	if ($user->update($request->all())) {
    		$request->session()->flash('alert_success', 'Your account has been successfuly updated.');
    	}		

		Auth::setUser(User::find($user_id));

    	// $request->flash();
    	return view('admin/profile');
    }

    public function getAccountPassword()
    {
    	return view('admin/password');
    }

    public function postAccountPassword(AccountPasswordRequest $request)
    {
    	$user = User::find(Auth::user()->id);
    	$user->password = Hash::make($request->password);

    	if ($user->save()) {
    		$request->session()->flash('alert_success', 'Your account has been successfuly updated.');
    	}
    	$request->flash();
    	return view('admin/password');
    }
}
