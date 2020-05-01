<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GlobalController extends Controller
{
    //
    public function index()
    {
        return view('home');
    }

    public function tentang()
    {
        return view('tentang');
    }

    public function staff()
    {
        return view('staff');
    }

    public function staff_detail()
    {
        return view('staff_detail');
    }

    public function kontak()
    {
        return view('kontak');
    }

    public function gallery()
    {
        return  view('gallery');
    }
}
