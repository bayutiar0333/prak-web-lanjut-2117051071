<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function index()
    {
        //
    }

    public function profile($nama = "", $kelas = "", $npm = "")
    {
        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm,
        ];
        return view('profile', $data);
    }


    public function create()
    {
        return view('create_user');
    }

    public function store()
    {
        $nama = $this->request->getPost('nama');
        $kelas = $this->request->getPost('kelas');
        $npm = $this->request->getPost('npm');
        $alamat = $this->request->getPost('alamat');
        $data=[
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm,
            'alamat' => $alamat
        ];
        return view('profile', $data);
    }

}