<?php

namespace App\Models;

use CodeIgniter\Model;

class SantriModel extends Model
{
    protected $table = 'tb_santri';
    protected $primaryKey = 'nis';
    protected $allowedFields = ['nis', 'nama', 'qrcode', 'kelas', 'asrama', 'kamar', 'foto'];
}
