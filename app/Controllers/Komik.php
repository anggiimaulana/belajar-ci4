<?php

namespace App\Controllers;

use App\Models\KomikModel;
use CodeIgniter\Controller;

class Komik extends BaseController
{
    protected $komikModel;

    public function __construct()
    {
        $this->komikModel = new KomikModel();
    }

    public function index() 
    {
        $komik = $this->komikModel->findAll();

        $data = [
            'title' => 'Daftar Komik',
            'komik' => $komik
        ];

        // $komikModel = new \App\Models\KomikModel();
        // $komikModel = new KomikModel();
        

        // cara konek db tanpa model
        // $db = \Config\Database::connect();
        // $komik = $db->query("SELECT * FROM komik");
        // foreach($komik->getResultArray() as $row);
        // d($row);

        return view('komik/index', $data);
    }
}

