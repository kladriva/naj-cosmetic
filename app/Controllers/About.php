<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Notre Histoire - NAJ COSMETIC',
            'founder' => [
                'name' => 'Anyssa Joelle NTONGESSA',
                'title' => 'Fondatrice de NAJ COSMETIC',
                'image' => 'anyssa-joelle.jpg',
                'story' => 'Ancienne gestionnaire en ressources humaines, Anyssa Joelle a toujours été passionnée par la cosmétique naturelle. Après des années à conseiller les autres dans leur carrière, elle a décidé de suivre sa passion et de créer NAJ COSMETIC, une marque dédiée aux femmes qui souhaitent prendre soin de leur peau de manière naturelle et authentique.',
                'philosophy' => 'Notre philosophie repose sur la conviction que la beauté naturelle mérite des soins naturels. Chaque produit NAJ COSMETIC est conçu avec amour et respect pour votre peau, en utilisant uniquement des ingrédients naturels et efficaces.',
                'values' => [
                    'Naturel' => 'Des ingrédients 100% naturels, sans compromis',
                    'Douceur' => 'Des formules respectueuses de votre peau',
                    'Éclat' => 'Mettre en valeur votre beauté naturelle',
                    'Simplicité' => 'Des soins simples mais efficaces',
                    'Efficacité' => 'Des résultats visibles et durables'
                ]
            ]
        ];

        return view('about/index', $data);
    }
}
