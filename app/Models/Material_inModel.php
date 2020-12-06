<?php

namespace App\Models;

use CodeIgniter\Model;

class Material_inModel extends Model
{
    protected $table = 'material_in';

    // protected $useSoftDeletes = true;
    protected $useTimestamps = true;
    protected $allowedFields = ['itemmaterial_in', 'uom_in', 'satuan_in', 'harga_in', 'total_in', 'ket_in'];
}
