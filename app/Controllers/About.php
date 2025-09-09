<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'La Philosophie NajCosmetic'
        ];

        return view('about/index', $data);
    }
}
