<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectModel extends Model
{
    protected $table = 'tb_proyek';
    protected $primaryKey = 'id_proyek';
    protected $allowedFields = ['img', 'judul', 'date', 'deskripsi'];

    public function getLatestProjects($limit = 3)
    {
        return $this->orderBy('date', 'DESC')->limit($limit)->findAll();
    }
}
