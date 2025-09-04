<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'NAJ COSMETIC - Prenez soin de votre peau, naturellement',
            'slogan' => 'Prenez soin de votre peau, naturellement.',
            'philosophy' => 'NAJ COSMETIC vous accompagne dans votre routine beauté avec des produits naturels, doux et efficaces, spécialement conçus pour les peaux mixtes.',
            'featured_products' => [
                [
                    'id' => 1,
                    'name' => 'Lait Hydratant Corps',
                    'price' => 20.000,
                    'image' => 'lait-corps.jpg',
                    'description' => 'Hydratation naturelle et douceur incomparable'
                ],
                [
                    'id' => 2,
                    'name' => 'Crème Visage Éclat',
                    'price' => 30.000,
                    'image' => 'creme-visage.jpg',
                    'description' => 'Éclat naturel et protection quotidienne'
                ]
            ]
        ];

        return view('home/index', $data);
    }
}
