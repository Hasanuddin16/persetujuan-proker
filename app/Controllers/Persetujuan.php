<?php

namespace App\Controllers;

use App\Models\PersetujuanModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Persetujuan extends BaseController
{
    protected $persetujuan;
    public function __construct()
    {
        $this->pengajuan = new PersetujuanModel();
    }

    public function index()
    {
        // echo "ini adalah method index pada controller produk";
        // echo "<br><a href=' ".route_to('detailproduk')." '> Link ke detail produk</a>";
        // return view('mobil');

        // $pengajuan = new PersetujuanModel();
        $dataPengajuan = $this->pengajuan->findAll();

        $data = [
            'title' => 'Pengajuan | Daftar Persetujuan Proker',
            // 'dataPersetujuan' => $dataPersetujuan
            'dataPengajuan' => $dataPengajuan
        ];

        echo view('layout/header', $data);
        echo view('persetujuan');
        echo view('layout/footer');
        // return view('persetujuan', $data);
    }



    public function preview($id)
    {
        $pengajuan = new PersetujuanModel();
        // $dataPengajuan = $this->pengajuan->where('id_pengajuan', $id)->first();
        $dataPengajuan = $this->pengajuan->getById($id);

        $data = [
            'title' => 'Detail',
            'dp' => $dataPengajuan
        ];



        if (!$dataPengajuan) {
            throw PageNotFoundException::forPageNotFound();
        }
        echo view('edit_form', $data);
    }

    public function edit($id)
    {

        $pengajuan = new PersetujuanModel();
        $data['pengajuan'] = $pengajuan->where('id_pengajuan', $id)->first();

        $dataPengajuan = $this->pengajuan->getById($id);

        $data = [
            'title' => 'Edit',
            'dp' => $dataPengajuan
        ];

        // lakukan validasi data artikel
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'id_pengajuan' => 'required'
            // ,'title' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data vlid, maka simpan ke database
        if ($isDataValid) {
            $pengajuan->update($id, [
                "judul" => $this->request->getPost('judul'),
                "tema" => $this->request->getPost('tema'),
                "dasar" => $this->request->getPost('dasar'),
                "tujuan" => $this->request->getPost('tujuan'),
                "tempat" => $this->request->getPost('tempat'),
                "tgl_kegiatan" => $this->request->getPost('tgl_kegiatan'),
                "estimasi_dana" => $this->request->getPost('estimasi_dana'),
                "organisasi" => $this->request->getPost('organisasi')
                
                
            ]);
            return redirect('persetujuan');
        }

        // tampilkan form edit
        echo view('edit_form', $data);

    }

    

    public function delete($id)
    {
        $pengajuan = new PersetujuanModel();
        $pengajuan->delete($id);
        return redirect('persetujuan');
    }


}
