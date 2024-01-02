<?php

namespace App\Models;

use CodeIgniter\Model;

class BeritaModel extends Model
{
    protected $table      = 'berita';
    protected $primaryKey = 'id_berita';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    // protected $useSoftDeletes = true;
    // protected $allowedFields = ['name', 'email'];

    // Dates
    protected $useTimestamps = true;
    protected $allowedFields = ['judul','isi','gambar','tanggal','waktu','ket_tambahan'];
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    
    public function getBeritaController($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }

    // Tambah tapi gak ketemu controllernya
    // public function tambah ($data) {
    //    return $this->db->table('berita')->insert($data);
    // }

    // public function getBeritaController($slug = false) {
    //     if ($slug == false) {
    //         return $this->findAll();
    //     }

    //     return $this->where(['slug' => $slug])->first();
    // }
}
