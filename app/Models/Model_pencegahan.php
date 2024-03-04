<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_pencegahan extends Model
{
    protected $table            = 'tb_pencegahan';
    protected $primaryKey       = 'id';
    
    protected $allowedFields    = ['id','id_penyakit','pencegahan'];
}
