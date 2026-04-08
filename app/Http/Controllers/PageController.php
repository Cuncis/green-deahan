<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function beranda()
    {
        return view('beranda');
    }

    public function galeri()
    {
        return view('galeri');
    }

    public function blog()
    {
        return view('blog');
    }

    public function kontak()
    {
        return view('kontak');
    }
}
