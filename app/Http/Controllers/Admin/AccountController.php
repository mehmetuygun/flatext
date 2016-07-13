<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\UpdateAccountRequest;
use App\User;
use Illuminate\Http\Request;
use Auth;

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

    	$user->update($request->all());		
		Auth::setUser(User::find($user_id));

    	$request->flash();
    	return view('admin/profile');
    }
}
