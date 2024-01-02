<?php

namespace App\Controllers;
Use App\Models\BeritaModel;

class BeritaController extends BaseController
{
    protected $beritaModel;
    public function __construct() {
        $this->beritaModel = new BeritaModel();
    }

    public function berita() {   
        // $berita = $this->beritaModel->findAll();

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
            'berita' => $this->beritaModel->getBeritaController()
            // 'berita' => $berita
            // 'berita' => $this->beritaModel->getberita()
        ];

        //Jika data tidak ditemukan pada tabel
        // if(empty($data['berita'])) {
        //     throw new \CodeIgneter\Exceptions\PageNotFoundException()
        // }

        return view('adminside/pages/berita', $data);
    }

    public function save () 
    {
        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->beritaModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'isi' => $this->request->getVar('isi'),
            'gambar' => $this->request->getVar('gambar'),
            'tanggal' => $this->request->getVar('tanggal'),
            'waktu' => $this->request->getVar('waktu'),
            'ket_tambahan' => $this->request->getVar('ket_tambahan')
        ]);
        // dd($this->request->getVar('judul'));
        // dd($this->request->getVar());

        // return redirect()->to('adminside/pages/berita.php');
        // return redirect()->to('BeritaController/berita');
        // return redirect()->to('berita');
        return redirect()->to('/berita', null, 'refresh');
    }

    // public function tambah()
    // {
    //     $data = [
    //         'judul' => $this->request->getPost('judul'),
    //         'isi' => $this->request->getPost('isi'),
    //         'gambar' => $this->request->getPost('gambar'),
    //         'tanggal' => $this->request->getPost('tanggal'),
    //         'waktu' => $this->request->getPost('waktu'),
    //         'ket_tambahan' => $this->request->getPost('ket_tambahan')
    //     ];

    //     //insert data
    //     $success = $this->beritaModel->tambah($data);
    //     if ($success) {
    //         return redirect()->to(base_url('berita'));
    //     }
    // }

    //////////// slug //////////////
    // public function detail ($slug) {
    //     $berita = $this->beritaModel->where(['slug'=> $slug])->first();
    // }

    // public function pop_up() {
    //     $data = [
    //         'title' => 'Pop up Berita'
    //     ];

    //     return view('adminside/pages/berita', $data);
    // }
}
