<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function landing()
    {
        $title = 'Halaman Utama';
        return view('pages.landing', compact('title'));
    }

    public function profile()
    {
        $title = 'Profil Usaha';
        return view('pages.profile', compact('title'));
    }

    public function menu()
    {
        $title = 'Halaman menu kuliner';
        return view('pages.menu', compact('title'));
    }

    public function blog()
    {
        $title = 'Halaman Artikel dan Blog';
        return view('pages.blog', compact('title'));
    }

    public function contact()
    {
        $title = 'Halaman Kontak Kami';
        return view('pages.contact', compact('title'));
    }
}