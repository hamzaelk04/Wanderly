<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $rules = [
            'firstname' => 'required|string|max:20'
        ];

        $messages = [
            'firstname.required' => 'Le prénom est obligatoire',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput(); // keep user input
        }
        return view('test');
    }

    public function login(Request $request)
    {

    }

    public function logout()
    {

    }
}
