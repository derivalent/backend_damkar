<?php

namespace App\Controllers;
Use App\Models\BeritaModel;

class BeritaController extends BaseController
{
    protected $beritaModel;
    public function __construct() {
        $this->beritaModel = new BeritaModel();
    }

    public function berita()
    {   
        $berita = $this->beritaModel->findAll();

        // Cara Connect ke Database manual
        // $db = \Config\Database::connect();
        // $berita = $db->query("SELECT * FROM berita");
        // foreach ($berita->getResultArray() as $row) {
        //     d($row);
        // }

        // $beritaModel = new \App\Models\BeritaModel();
        // atau pakai dibawah ini tapi di atas harus diberikan keterangan namespace use lokasi BeritaModel nya

        // $beritaModel = new BeritaModel();
        // $berita = $this->beritaModel->findAll();
        // dd($berita);

        $data = [
            'berita' => $berita
        ];

        return view('adminside/pages/berita', $data);
    }

    //////////////////////////////////////////////////////////////
    // public function bulan() 
    // {
    //     $bulan = $this->beritaModel->findAll();
    //     $data = [
    //         'bulan_kalender' => $bulan
    //     ];

    //     return view('adminside/pages/berita', $data);
    // }
}
