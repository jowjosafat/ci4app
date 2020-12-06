<?php

namespace App\Models;

use \CodeIgniter\Model;

class AuthModels extends Model
{
    protected $table = 'gudang_login';

    // protected $useSoftDeletes = true;
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'email', 'password', 'image', 'role_id', 'is_active'];
}
