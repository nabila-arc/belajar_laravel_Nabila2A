<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    public function segitiga(Request $request)
    {
        $hasil = null;
        $alas = null;
        $tinggi = null;

        if ($request->isMethod('post')) {
            $data = $request->validate([
                'alas' => ['required', 'numeric', 'gt:0'],
                'tinggi' => ['required', 'numeric', 'gt:0'],
            ]);

            $alas = (float) $data['alas'];
            $tinggi = (float) $data['tinggi'];
            $hasil = ($alas * $tinggi) / 2;
        }

        return view('kalkulator.segitiga', compact('alas', 'tinggi', 'hasil'));
    }
}
