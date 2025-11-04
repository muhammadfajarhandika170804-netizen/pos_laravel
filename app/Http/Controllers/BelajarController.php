<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarController extends Controller
{
    public function index()
    {
        return view('belajar');
    }

    public function tambah()
    {
        return view('tambah');
    }

    public function storeTambah(Request $request)
    {
        // $angka1 = $_POST['agka1'];
        $angka1 = $request->angka1;
        $angka2 = $request->post('angka2');

        $jumlah = $angka1 + $angka2;
        return view('tambah', compact('jumlah'));
    }
}
