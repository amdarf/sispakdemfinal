<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_penyakit extends Model
{
    protected $table            = 'tb_penyakit';
    protected $primaryKey       = 'id';
    
    protected $allowedFields    = ['id','penyakit','gejala_penyakit'];
}
