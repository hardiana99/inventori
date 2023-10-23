<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailPembelianModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'detail_pembelian';
    protected $primaryKey       = 'id_detail_pembelian';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_barang', 'id_pembelian', 'gty', 'jumlah'];
}
