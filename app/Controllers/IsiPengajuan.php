<?php

namespace App\Controllers;

class IsiPengajuan extends BaseController
{
    public function index()
    {
        // echo "ini adalah method index pada controller produk";
        // echo "<br><a href=' ".route_to('detailproduk')." '> Link ke detail produk</a>";
        // return view('mobil');
        $data = [
            'title' => 'Pengajuan | Formulir Pengajuan Proker'
        ];
        echo view('layout/header', $data);
        echo view('isipengajuan');
        echo view('layout/footer');
    }
    public function detail_merek($param1 = '')
    {
        echo "ini adalah method detail pada controller produk $param1";
    }

    // function index() dan detail() disebut dengan method.
    // sdngkan Home atau Produk disebut controller
    // localhost:8080/produk/detail -> produk = controller, detail = method

    public function detail_model($param1 = '', $param2 = '' ){
        echo "ini adalah method detail pada controller produk merek $param1 model"; 
    }

}
