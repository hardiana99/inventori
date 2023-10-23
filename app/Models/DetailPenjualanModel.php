<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailPenjualanModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'detail_penjualan';
    protected $primaryKey       = 'id_detail_penjualan';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_barang', 'id_penjualan', 'gty', 'jumlah'];
}
