<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Catalog extends Controller
{
    public function view() {
        return view('catalog', ["data" => DB::table('products')->limit(5)->orderByDesc('updated_at')->get()]);
    }
}
