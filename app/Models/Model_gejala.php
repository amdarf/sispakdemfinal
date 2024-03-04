<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_gejala extends Model
{
    protected $table            = 'tb_gejala';
    protected $primaryKey       = 'id';
    
    protected $allowedFields    = ['id','gejala','id_kategori','level'];
}
