<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function user($user = null)
    {
//        dd($user);
        dd(['dfsdsa', 'sdfasdf']);
        echo 12341334;
    }
}
