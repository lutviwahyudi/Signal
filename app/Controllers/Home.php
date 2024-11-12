<?php

namespace App\Controllers;
use App\Models\ProjectModel;
use App\Models\FeedbackModel;

class Home extends BaseController
{
    // public function index(): string
    // {
    //     return view('welcome_message');
    // }

    protected $ProjectModel;
    protected $FeedbackModel;
    public function __construct()
    {

        $this->ProjectModel = new ProjectModel();
        $this->FeedbackModel = new FeedbackModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Halaman | Home',
            'projek' => $this->ProjectModel->getLatestProjects(),
            'feedback' => $this->FeedbackModel->findAll()
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
