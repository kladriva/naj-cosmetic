<?php

namespace App\Controllers;

class Cart extends BaseController
{
    public function index(): string
    {
        $cart = session()->get('cart') ?? [];
        $total = 0;
        
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        $data = [
            'title' => 'Mon Panier - NajCosmetic',
            'cart' => $cart,
            'total' => $total
        ];

        return view('cart/index', $data);
    }

    public function add()
    {
        $productId = $this->request->getPost('product_id');
        $quantity = $this->request->getPost('quantity') ?? 1;
        
        // Données des produits (en réalité, cela viendrait de la base de données)
        $products = [
            1 => [
                'id' => 1,
                'name' => 'Crème Visage Éclat',
                'price' => 29.90,
                'image' => '/assets/images/produits.jpg'
            ],
            2 => [
                'id' => 2,
                'name' => 'Lait Hydratant Corps',
                'price' => 24.90,
                'image' => '/assets/images/produits.jpg'
            ]
        ];

        if (!isset($products[$productId])) {
            return $this->response->setJSON(['success' => false, 'message' => 'Produit non trouvé']);
        }

        $cart = session()->get('cart') ?? [];
        
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += $quantity;
        } else {
            $cart[$productId] = [
                'id' => $productId,
                'name' => $products[$productId]['name'],
                'price' => $products[$productId]['price'],
                'image' => $products[$productId]['image'],
                'quantity' => $quantity
            ];
        }

        session()->set('cart', $cart);
        
        return $this->response->setJSON([
            'success' => true, 
            'message' => 'Produit ajouté au panier',
            'cart_count' => array_sum(array_column($cart, 'quantity'))
        ]);
    }

    public function remove($productId)
    {
        $cart = session()->get('cart') ?? [];
        
        if (isset($cart[$productId])) {
            unset($cart[$productId]);
            session()->set('cart', $cart);
        }

        return redirect()->to('/panier');
    }

    public function update()
    {
        $productId = $this->request->getPost('product_id');
        $quantity = $this->request->getPost('quantity');
        
        $cart = session()->get('cart') ?? [];
        
        if (isset($cart[$productId])) {
            if ($quantity <= 0) {
                unset($cart[$productId]);
            } else {
                $cart[$productId]['quantity'] = $quantity;
            }
            session()->set('cart', $cart);
        }

        return redirect()->to('/panier');
    }
}
