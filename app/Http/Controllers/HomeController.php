<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'Home';
        return view('home', compact('title'));
    }

    public function create()
    {
        $title = 'Create a post...';
        return view('home', compact('title'));
    }

    public function store()
    {
        return "ok";
    }
}
