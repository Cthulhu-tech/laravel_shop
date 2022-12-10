<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class RegistrationController extends Controller
{
    function save(Request $request) {

        if(Auth::check()) {
            return redirect(route('home'));
        }

        $validate = $request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
        ],[
            'required'  => ':attribute должен быть заполнен',
            'unique'    => ':attribute уже используется'
        ]);

        $user = User::create($validate);

        if($user){
            auth()->login($user);
            return redirect()->to(route('home'));
        }

        return redirect()->to(route('user.registration'))->withErrors([
            'formError' => 'Ошибка. Повторите заного'
        ]);

    }
}
