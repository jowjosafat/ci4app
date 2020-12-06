<?php

namespace App\Models;

use CodeIgniter\Model;

class Material_outModel extends Model
{
    protected $table = 'material_out';

    // protected $useSoftDeletes = true;
    protected $useTimestamps = true;
    protected $allowedFields = ['itemmaterial_out', 'uom_out', 'satuan_out', 'harga_out', 'total_out', 'ket_out'];
}
