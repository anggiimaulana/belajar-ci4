<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        echo 'ini controller coba';
    }

    // mengembalikan nilai dari url
    public function about($nama = '', $umur = 0) 
    {
        echo "nama saya $nama, saya berumur $umur tahun";
    }
}
