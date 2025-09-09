<?php

namespace App\Controllers;

class Products extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Tous Nos Soins - NajCosmetic'
        ];

        return view('products/index', $data);
    }

    public function detail($id): string
    {
        $data = [
            'title' => 'Détail du Produit - NajCosmetic'
        ];

        return view('products/detail', $data);
    }
}
