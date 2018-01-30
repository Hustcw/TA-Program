<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomePageController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest',[
            'only'=>['home']
        ]);
    }

    public function home()
    {
        return view('home');
    }
}
