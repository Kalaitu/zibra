<?php

namespace App\Models;

use CodeIgniter\Model;

class PromoModel extends Model
{
    protected $table            = 'promo';
    protected $primaryKey       = 'id_promo';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['nama_promo', 'poin', 'diskon'];

    // Dates
    protected $returnType = 'object';
}
