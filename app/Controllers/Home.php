<?php

namespace App\Controllers;

use App\Models\PersetujuanModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Home extends BaseController
{
    protected $persetujuan;
    public function __construct()
    {
        $this->pengajuan = new PersetujuanModel();
    }

    public function index()
    {
        //return view('welcome_message');
        $dataPengajuan = $this->pengajuan->findAll();

        $data = [
            'title' => 'Pengajuan | Daftar Persetujuan Proker',
            // 'dataPersetujuan' => $dataPersetujuan
            'dataPengajuan' => $dataPengajuan
        ];

        echo view('layout/header', $data);
        echo view('pages/index');
        echo view('layout/footer');
        // return view('persetujuan', $data);


        // echo view('layout/header',$data);
        // echo view('home');
        // echo view('footer');
        
        // return view('pages/index');
    }
}
