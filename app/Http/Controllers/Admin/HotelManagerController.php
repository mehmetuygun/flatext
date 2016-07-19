<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\UpdateHotelDetailRequest;
use App\Http\Controllers\Controller;
use Auth;
use App\User;

class HotelManagerController extends Controller
{	
	/**
	 * Display update hotel detail page.
	 */
    public function getHotelDetail()
    {
    	return view('admin/hotel_detail');
    }

    /**
     * Update hotel deetail.
     */
    public function postHotelDetail(UpdateHotelDetailRequest $request)
    {
    	$hotel = User::find(Auth::user()->id)->hotel;

    	if ($hotel->update($request->all())) {
    		$request->session()->flash('alert_success', 'Your hotel has been successfuly updated.');
    	}

    	return view('admin/hotel_detail');
    }
}
