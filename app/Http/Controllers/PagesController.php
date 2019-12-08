<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //root url
    public function index()
    {
        //show beranda
        return view('pages.beranda');
    }

    public function menu()
    {
        //show menu
        return view('pages.menu');
    }

    public function kontak()
    {
        //show kontak
        return view('pages.kontak');
    }
}
