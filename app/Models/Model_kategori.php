<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_kategori extends Model
{
    protected $table            = 'tb_kategori';
    protected $primaryKey       = 'id';
    
    protected $allowedFields    = ['id','kategori'];
}
