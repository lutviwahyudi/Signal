<?php

namespace App\Controllers;
use App\Models\FeedbackModel;
class Contact extends BaseController
{
    // public function index(): string
    // {
    //     return view('welcome_message');
    // }
    protected $FeedbackModel;
    
    public function __construct() {
        $this->FeedbackModel = new FeedbackModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Halaman | Kontak'
        ];

        return view('page/contact', $data);
    }

    public function feedback()
    {
        $data = [
            'title' => 'Halaman | Kontak',
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'deskripsi' => $this->request->getPost('deskripsi')
        ];
        if ($this->FeedbackModel->insert($data)) {
            return view('page/contact', $data);
        }else{
            echo 'data tidak terkirim';
        }
    }
}
