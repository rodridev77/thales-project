<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [];
        return view('home.index', $data);
    }

    public function home()
    {
        $data = [];
        return view('template', $data);
    }
}
