<?php

namespace App\Controllers;
use App\Models\ProjectModel;

class Home extends BaseController
{
    // public function index(): string
    // {
    //     return view('welcome_message');
    // }

    protected $ProjectModel;
    public function __construct()
    {

        $this->ProjectModel = new ProjectModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Halaman | Home',
            'projek' => $this->ProjectModel->getLatestProjects()
        ];

        return view('page/home', $data);
    }

    public function layanan()
    {
        $data = [
            'title' => 'Halaman | Layanan'
        ];

        return view('page/layanan', $data);
    }
}
