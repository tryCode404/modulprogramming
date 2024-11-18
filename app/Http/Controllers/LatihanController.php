<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function getTabel()
    {
        $data = [
            ['no' => 1, 'nim' => 'NIM 1', 'nama' => 'Nama Lengkap 1', 'kelas' => 'Kelas 1'],
            ['no' => 2, 'nim' => 'NIM 2', 'nama' => 'Nama Lengkap 2', 'kelas' => 'Kelas 2'],
        ];

        return view('tabel', ['data' => $data]);
    }

    public function getForm()
    {
        return view('form');
    }
}
