<?php

namespace App\Controllers;

class Products extends BaseController
{
    public function index(): string
    {
        // Données des produits
        $products = [
            [
                'id' => 1,
                'name' => 'Lait Hydratant Corps',
                'price' => 20.000,
                'image' => 'lait-corps.jpg',
                'description' => 'Un lait hydratant naturel pour nourrir et adoucir votre peau',
                'ingredients' => ['Beurre de karité', 'Huile d\'argan', 'Aloe vera', 'Vitamine E'],
                'usage' => 'Appliquer sur peau propre et sèche, masser délicatement jusqu\'à absorption complète.'
            ],
            [
                'id' => 2,
                'name' => 'Crème Visage Éclat',
                'price' => 30.000,
                'image' => 'creme-visage.jpg',
                'description' => 'Une crème visage naturelle pour illuminer et protéger votre peau',
                'ingredients' => ['Huile de rose musquée', 'Extrait de thé vert', 'Hyaluronate de sodium', 'Beurre de cacao'],
                'usage' => 'Appliquer matin et soir sur visage et cou nettoyés, en évitant le contour des yeux.'
            ]
        ];

        $data = [
            'title' => 'Nos Produits - NAJ COSMETIC',
            'products' => $products
        ];

        return view('products/index', $data);
    }

    public function detail($id): string
    {
        // Données des produits (en réalité, cela viendrait de la base de données)
        $products = [
            1 => [
                'id' => 1,
                'name' => 'Lait Hydratant Corps',
                'price' => 20.000,
                'image' => 'lait-corps.jpg',
                'description' => 'Notre lait hydratant corps allie douceur et efficacité pour nourrir votre peau en profondeur. Formulé avec des ingrédients 100% naturels, il apporte hydratation et souplesse à votre peau tout au long de la journée.',
                'ingredients' => ['Beurre de karité', 'Huile d\'argan', 'Aloe vera', 'Vitamine E', 'Extrait de calendula'],
                'usage' => 'Appliquer sur peau propre et sèche, masser délicatement jusqu\'à absorption complète. Utiliser quotidiennement après la douche pour une hydratation optimale.',
                'benefits' => ['Hydratation intense', 'Peau douce et souple', 'Formule naturelle', 'Parfum délicat']
            ],
            2 => [
                'id' => 2,
                'name' => 'Crème Visage Éclat',
                'price' => 30.000,
                'image' => 'creme-visage.jpg',
                'description' => 'Notre crème visage éclat est spécialement conçue pour les peaux mixtes. Elle hydrate sans graisser, illumine le teint et protège des agressions extérieures grâce à ses actifs naturels.',
                'ingredients' => ['Huile de rose musquée', 'Extrait de thé vert', 'Hyaluronate de sodium', 'Beurre de cacao', 'Extrait de réglisse'],
                'usage' => 'Appliquer matin et soir sur visage et cou nettoyés, en évitant le contour des yeux. Masser du centre vers l\'extérieur du visage.',
                'benefits' => ['Éclat naturel', 'Hydratation équilibrée', 'Anti-âge naturel', 'Protection quotidienne']
            ]
        ];

        if (!isset($products[$id])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Produit non trouvé');
        }

        $data = [
            'title' => $products[$id]['name'] . ' - NAJ COSMETIC',
            'product' => $products[$id]
        ];

        return view('products/detail', $data);
    }
}
