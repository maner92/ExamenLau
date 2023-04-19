<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class userController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'curp' => 'required|string|min:18',
                'password' => 'required|string|min:8|regex:/^(?=.*[A-Z])/',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = new User();

        $user->curp = $request->curp;
        $user->password =  Hash::make($request->password);

        $user->save();

        Auth::login($user);

        return redirect(route('validado'));
    }
}
