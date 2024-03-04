<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_riwayat extends Model
{
    protected $table            = 'tb_riwayat';
    protected $primaryKey       = 'id';
    
    protected $allowedFields    = ['id','nama','id_penyakit','gejala_input','presentase'];

    public function post_riwayat($post)
    {
        $builder = $this->db->table($this->table);

        $data = [
            'nama'        => $post['nama'],
            'id_penyakit' => $post['id_penyakit'],
            'gejala_input'=> $post['gejala_input'],
            'presentase'  => $post['presentase']
        ];
        
        return $builder->insert($data);
    }
}
