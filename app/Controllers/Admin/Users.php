<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        echo 'ini controller admin';
    }

    // mengembalikan nilai dari url
    public function about($nama = '', $umur = 0) 
    {
        echo "nama saya $nama, saya berumur $umur tahun";
    }
}
