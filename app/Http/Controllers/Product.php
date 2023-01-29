<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Product extends Controller
{
    public function view($id) {
        return view('product', ['data' => DB::table('products')->where('id', '=' , $id)->get()]);
    }
}
