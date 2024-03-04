<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\Model_gejala;
use App\Models\Model_penyakit;
use App\Models\Model_pencegahan;
use App\Models\Model_riwayat;
use App\Models\Model_kategori;

class Dashboard extends BaseController
{
    public function __construct()
    {
        $this->gejala = new Model_gejala(); // another method to call model
        $this->penyakit = new Model_penyakit();
        $this->pencegahan = new Model_pencegahan();
        $this->riwayat = new Model_riwayat();
        $this->kategori = new Model_kategori();
    }

    public function index()
    {
        $data['riwayat'] = $this->riwayat->countAll();
        $data['gejala'] = $this->gejala->countAll();
        $data['penyakit'] = $this->penyakit->countAll();
        $data['pencegahan'] = $this->pencegahan->countAll();
        $data['kategori'] = $this->kategori->countAll();
        return view('admin/dashboard', $data);
    }
}
