<?php

namespace App\Http\Controllers;

class Web extends Controller
{
    public function home()
    {
        return '<h1>Ini adalah Controllers Web</h1>';
    }

    public function profil(string $nama)
    {
        return '<h2>Laman Profile ' . e($nama) . '</h2>';
    }
}
