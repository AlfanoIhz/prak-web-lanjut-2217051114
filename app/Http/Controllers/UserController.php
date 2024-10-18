<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\UserModel;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    
    public $userModel;
    public $kelasModel;


    public function __construct(){
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    public function index(){
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser(),
        ];
    
        return view('list_user', $data);
    }

    public function profile($nama= "", $npm="", $kelas = ""){
        $data = [
            'nama' => $nama,
            'npm' => $npm,
            'kelas' => $kelas
        ];
        
        return view('profile', $data);
    }
    
    public function create(){
        $kelasModel = new Kelas();

        $kelas = $this->kelasModel->getKelas();
        
        $data = [
            'title'=>'Create User',
            'kelas'=>$kelas
        ];

        return view('create_user', $data);
    }

    public function store(Request $request){
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:255',
            'kelas_id' => 'required|integer',
            'foto' => 'image|file|max:2048',
        ]);

        // Meng-handle upload foto
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoName = time() . '_' . $foto->getClientOriginalName();
            // Menyimpan file foto di folder 'uploads'
            $fotoPath = $foto->move(public_path('upload/img'), $fotoName);
        } else {
            $fotoPath = null;
            }

        // Menyimpan data ke database termasuk path foto
        $this->userModel->create([
            'nama' => $request->input('nama'),
            'npm' => $request->input('npm'),
            'kelas_id' => $request->input('kelas_id'),
            'foto' => $fotoName, // Menyimpan path foto
        ]);

        return redirect()->to('/user')->with('success', 'Userberhasil ditambahkan');
    }

    public function show($id)
    {
        $user = $this->userModel->getUser($id);

        $data = [
            'title' => 'Profile',
            'user'  => $user,
        ];

        return view('profile', $data);
    }

}
