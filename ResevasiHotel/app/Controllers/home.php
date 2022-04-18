<?php

namespace App\Controllers;

use App\Models\pemesananModels;

class home extends BaseController
{

    protected $pemesananModels;
    public function __construct()
    {
        $this->pemesananModels = new pemesananModels();
    }

    public function index()
    {
        $data = [
            'title' => 'Home'
        ];
        return view('/pages/home', $data,);
    }
    public function pesanform()
    {
        $data = [
            'title' => 'Pemesanan'
        ];
        return view('/pages/form_pemesanan', $data,);
    }

    public function save()
    {
        $this->pemesananModels->save([
            'nama_pemesan' => $this->request->getVar('nama_pemesan'),
            'email' => $this->request->getVar('email'),
            'noHP' => $this->request->getVar('noHP'),
            'nama_tamu' => $this->request->getVar('nama_tamu'),
            'jenis_kamar' => $this->request->getVar('jenis_kamar'),
            'tgl_cekin' => $this->request->getVar('cek_in'),
            'tgl_ceout' => $this->request->getVar('cek_out'),
            'jml_kamar' => $this->request->getVar('jumlah_kamar')


        ]);
        session()->setFlashdata('Message', "Data telah berhasil ditambahkan");
        return redirect()->to('/home');
    }
}
