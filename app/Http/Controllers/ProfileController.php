<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($nama = "", $npm="", $kelas = "", $jurusan = ""){
        $data = [
            'nama' => $nama,
            'npm' => $npm,
            'kelas' => $kelas,
            'jurusan' => $jurusan
        ];
        
        return view('profile', $data);
    }
}
