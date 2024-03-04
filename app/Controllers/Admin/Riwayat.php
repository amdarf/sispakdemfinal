<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\Model_riwayat;
use App\Models\Model_gejala;

class Riwayat extends BaseController
{
    public function __construct()
    {
        $this->riwayat = new Model_riwayat();
        $this->gejala = new Model_gejala();
    }

    public function index()
    {
        $data['gejala'] = $this->gejala->orderBy('id_kategori','ASC')->findAll();
        $data['riwayat'] = $this->riwayat->select('tb_riwayat.*,tb_penyakit.penyakit')->join('tb_penyakit', 'tb_penyakit.id=tb_riwayat.id_penyakit', 'LEFT')->orderBy('id', 'ASC')->findAll();
        for ($i=0; $i<count($data['riwayat']); $i++) {
            $data['riwayat'][$i]['gejala_input'] = $this->toArray($data['riwayat'][$i]['gejala_input']);
        }
        return view('admin/riwayat/list', $data);
    }

    public function delete($id=null) {
        if (!isset($id)) {
            throw PageNotFoundException::forPageNotFound();
        }
        
        if ($this->riwayat->delete($id)) {
            session()->setFlashdata('message', 'Delete data success');
            return redirect('admin/riwayat');
        } 
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
}
