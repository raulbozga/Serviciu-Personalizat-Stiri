<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategorysController extends Controller
{
    public function business()
    {
        return view('categories.business');
    }

    public function weather()
    {
        return view('categories.weather');
    }

    public function sport()
    {
        return view('categories.sports');
    }
    public function environment()
    {
        return view('categories.environment');
    }
    public function food()
    {
        return view('categories.food');
    }
    public function health()
    {
        return view('categories.health');
    }
    public function politics()
    {
        return view('categories.politics');
    }
    public function science()
    {
        return view('categories.science');
    }
    public function technology()
    {
        return view('categories.technology');
    }
    public function top()
    {
        return view('categories.top');
    }
    public function world()
    {
        return view('categories.world');
    }
}
