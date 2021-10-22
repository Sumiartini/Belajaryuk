<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Menampilkan halaman awal
     */
    public function index()
    {
        return view ('belajar_laravel.index');
    }

    /**
     * Menampilkan halaman about
     */
    public function About()
    {
        return view('belajar_laravel.about', ['nama' => 'Sumiartini Sri Rahayu']);
    }

}
