<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function landing()
    {
        return view('pages.landing');
    }

    public function profile()
    {
        return view('pages.profile');
    }
}