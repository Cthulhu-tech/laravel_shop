<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function login (Request $request) {

        if(Auth::check()) {
            return redirect()-> intended(route('home'));
        }

        $formFaileds = $request->only(['email', 'password']);

        if(Auth::attempt($formFaileds)){
            return redirect()->intended(route('home'));
        }

        return redirect(route('user.login'))->withErrors([
            'formError' => 'Ошибка в логине или пароле'
        ]);

    }
}
