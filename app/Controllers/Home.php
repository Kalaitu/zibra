<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return redirect()->to(base_url('zibra'));
    }
    public function login()
    {
        return view('sign-in');
    }
    public function loginproses()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        dd($username . '|' . $password);
        return view('sign-in');
    }
    public function register()
    {
        return view('sign-up');
    }
    public function proses_register()
    {
        session()->setFlashdata('register-berhasil', 'register-berhasil');
        return redirect()->to(base_url('register'));
    }
}
