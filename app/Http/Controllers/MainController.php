<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function storeFront()
    {
        return view('shop.storeFront');
    }
}
