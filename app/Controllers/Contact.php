<?php

namespace App\Controllers;

class Contact extends BaseController
{
    // public function index(): string
    // {
    //     return view('welcome_message');
    // }

    public function index()
    {
        $data = [
            'title' => 'Halaman | Kontak'
        ];

        return view('page/contact', $data);
    }
}
