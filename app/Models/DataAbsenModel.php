<?php

namespace App\Models;

use CodeIgniter\Model;

class DataAbsenModel extends Model
{
    protected $table = 'tb_dataabsen';
    protected $primaryKey = 'id_dataabsen';
    protected $allowedFields = ['tanggal', 'waktu', 'keterangan'];
}
