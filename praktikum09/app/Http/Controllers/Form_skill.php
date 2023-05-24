<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Form_skill extends Controller
{
    // Fungsi untuk menampilkan form
    public function index()
    {
        return view('skill');
    }
    // Fungsi untuk menampilkan hasil
    public function hasil_skill(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|min:5|max:20',
            'email' => 'required|email',
            'lokasi' => 'required',
            'jenis_kelamin' => 'required',
            'skill' => 'required|array',
        ]);
        return view('hasil_skill', ['skl' => $request]);
    }
}
