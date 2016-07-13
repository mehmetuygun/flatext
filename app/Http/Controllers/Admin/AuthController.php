<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function postLogin(Request $request) 
    {
    	$conditions = [
    		'email' => $request->input('email'),
    		'password' => $request->input('password'),
    		'is_admin' => 1,
    	];
    	if (Auth::attempt($conditions)) {
    		return redirect('admin/home');
    	}
    	return redirect('admin/login')->with('error', trans('auth.failed'))->withInput();
    }
}
