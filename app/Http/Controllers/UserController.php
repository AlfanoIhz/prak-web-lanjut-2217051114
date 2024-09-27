<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile($nama= "", $npm="", $kelas = ""){
        $data = [
            'nama' => $nama,
            'npm' => $npm,
            'kelas' => $kelas
        ];
        
        return view('profile', $data);
    }
    
    public function create(){
        
        return view('create_user');
    }
    
    public function store(Request $request){
        $data = [
            'nama' => $request->input('nama'),
            'kelas' => $request->input('kelas'),
            'npm' => $request->input('npm'),
           ];
        return view('profile', $data);
    }
    
}
