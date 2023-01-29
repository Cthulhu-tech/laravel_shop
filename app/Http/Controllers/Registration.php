<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Registration extends Controller
{
    public function registration(Request $request){
        $content = json_decode($request->getContent());

        if(DB::table('users')->where('email', '=', $content->email)->exists())
            return '{"error": "Пользователь существует!"}';

        $user = new User();
        $user->password = Hash::make($content->password);
        $user->email = $content->email;
        $user->name = $content->name;
        $user->save();

        return '{"message": "Пользователь создан!"}';
    }
    public function view() {
        return view('reg');
    }
}
