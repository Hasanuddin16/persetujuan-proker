<?php

namespace App\Models;

use CodeIgniter\Model;

class PersetujuanModel extends Model
{
    protected $table = 'pengajuan';
    protected $primaryKey = "id_pengajuan";
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $allowedFields = ['judul', 'tema', 'dasar', 'tgl_kegiatan', 'susunan', 'estimasi dana'];

    public $id_pengajuan;
    public $judul;
    public $tema;
    public $dasar;
    public $tgl_kegiatan;
    public $susunan;
    public $estimasi_dana;
    public $tgl_pengajuan;
    public $status;
    public $tgl_persetujuan;


    public function getById($id)
    {
        return $this->db->table($this->table)
            ->where('id_pengajuan', $id)->get()->getRowArray();
        // $this->db->join('pengajuan', 'pengajuan.id_pengajuan = persetujuan.id_pengajuan');
        // return $this->db->get_where($this->table, ["persetujuan.id_pengajuan" => $id])->row();
    }

    

}
