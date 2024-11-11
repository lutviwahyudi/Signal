<?php

namespace App\Controllers;
use App\Models\ProjectModel;

class Project extends BaseController
{
    // public function index(): string
    // {
    //     return view('welcome_message');
    // }
    protected $ProjectModel;
    public function __construct() {

        $this->ProjectModel = new ProjectModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Halaman | Projek',
            'projek' => $this->ProjectModel->findAll()
        ];

        return view('page/projek', $data);
    }
}
