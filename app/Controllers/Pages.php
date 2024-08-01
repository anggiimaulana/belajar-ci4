<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Pages extends Controller
{
    public function index()
    {
        $data['title'] = 'Home Page';
        $data['test'] = 'some value'; // Contoh data yang akan ditampilkan

        return view('pages/home', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About Me',
        ];

        return view('pages/about', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
                    'kota' => 'Indramayu'
                ],
                [
                    'tipe' => 'Kampus',
                    'alamat' => 'Politeknik Negeri Indramayu',
                    'kota' => 'Indramayu'
                ]
            ]
        ];

        return view('pages/contact', $data);
    }
}

