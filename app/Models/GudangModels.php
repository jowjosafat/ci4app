<?php

namespace App\Models;

use CodeIgniter\Model;

class GudangModels extends Model
{
    protected $table = 'list_material';

    // protected $useSoftDeletes = true;
    protected $useTimestamps = true;
    protected $allowedFields = ['itemmaterial', 'uom', 'satuan', 'harga', 'total', 'ket'];
}
