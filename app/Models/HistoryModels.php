<?php

namespace App\Models;

use CodeIgniter\Model;

class HistoryModels extends Model
{
    protected $table = 'list_history';

    // protected $useSoftDeletes = true;
    protected $useTimestamps = true;
    protected $allowedFields = ['itemmaterial_h', 'uom_h', 'satuan_h', 'harga_h', 'total_h', 'ket_h'];
}
