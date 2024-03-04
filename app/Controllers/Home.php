<?php

namespace App\Controllers;

use App\Models\Model_gejala;
use App\Models\Model_penyakit;
use App\Models\Model_pencegahan;
use App\Models\Model_riwayat;
use App\Models\Model_kategori;

class Home extends BaseController
{
    public function __construct()
    {
        $this->gejala = new Model_gejala(); // another method to call model
        $this->penyakit = new Model_penyakit();
        $this->pencegahan = new Model_pencegahan();
        $this->kategori = new Model_kategori();
        $this->riwayat = new Model_riwayat();
    }

    public function index()
    {
        return view('home');
    }

    public function diagnosis()
    {
        $data['gejala'] = $this->gejala->orderBy('id_kategori','ASC')->findAll();
        $data['penyakit'] = $this->penyakit->orderBy('id','ASC')->findAll();
        $data['kategori'] = $this->kategori->orderBy('id','ASC')->findAll();
        $data['sama'] = $this->gejala
                            ->select('id_kategori, COUNT(id_kategori) AS count')
                            ->groupBy('id_kategori')
                            ->having('COUNT(id_kategori) > 0')
                            ->orderBy('id_kategori','ASC')
                            ->findAll();
        for ($i=0; $i<count($data['penyakit']); $i++) {
            $data['penyakit'][$i]['gejala_penyakit'] = $this->toArray($data['penyakit'][$i]['gejala_penyakit']);
        }
        for ($z=0; $z<count($data['kategori']); $z++) {
            $data['kategori'][$z]['sama'] = $data['sama'][$z]['count'];
        }
        // Sort the array based on the "sama" values in descending order
        usort($data['kategori'], function ($a, $b) {
            return $b['sama'] - $a['sama'];
        });
        return view('diagnosis', $data);
        
    }

    public function toArray($str) 
    {
        // Using str_replace() function
        // to replace the word
        $replace = str_replace( array('[', ']'),'', $str);
        $explode = explode(",",$replace);
   
        // Returning the result
        return $explode;
    }

    public function getSolusi()
    {
        $post = $this->request->getPost('id');
        $data = $this->pencegahan->where('id_penyakit', $post)->findAll();
        return json_encode($data);
    }

    public function postRiwayat()
    {
        $post = $this->request->getPost();
        if($this->riwayat->post_riwayat($post))
        {
            $data['request'] = [
                'status' => 'sukses',
                'message' => 'riwayat berhasil ditambahkan'
            ];
        }
        else{
            $data['request'] = [
                'status' => 'failed',
                'message' => 'SQL Error'
            ];
        }
        return json_encode($data);
    }
}
