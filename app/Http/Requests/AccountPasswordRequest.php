<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class AccountPasswordRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'password' => 'required|min:8|max:64|confirmed',
            'current_password' => 'required|old_password:'. Auth::user()->password,
        ];
    }
}
