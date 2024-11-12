<?php

namespace App\Models;

use CodeIgniter\Model;

class FeedbackModel extends Model
{
    protected $table = 'tb_kontak';
    protected $primaryKey = 'id_user';
    protected $allowedFields = ['nama', 'email', 'deskripsi'];
}
