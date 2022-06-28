<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    public function newsletter()
    {
        return redirect('/')->with('success', 'Te-ai abonat la newsletter!');
    }
}
