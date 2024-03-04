<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_user extends Model
{
    protected $table            = 'user';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = false;
    protected $returnType       = 'array'; //type hasil query
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id', 'username', 'password', 'role', 'created_at', 'updated_at'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'username'     => 'required|is_unique[user.username,id_user,{id_user}]|min_length[3]',
        'email'        => 'required|valid_email|is_unique[user.email,id_user,{id_user}]',
        'password'     => 'required|min_length[8]'
    ];
    // protected $validationMessages   = [];
    protected $skipValidation       = false;
}
