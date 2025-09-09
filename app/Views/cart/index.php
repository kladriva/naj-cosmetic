<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Header Section -->
<section class="bg-cream py-5">
    <div class="container text-center">
        <h1>Mon Panier</h1>
        <p class="lead">Vérifiez vos articles avant de finaliser votre commande.</p>
    </div>
</section>

<!-- Cart Content -->
<section class="section-padding">
    <div class="container">
        <?php if (empty($cart)): ?>
        <!-- Empty Cart Message -->
        <div class="text-center py-5">
            <div class="mb-4">
                <i class="fas fa-shopping-cart text-muted" style="font-size: 4rem;"></i>
            </div>
            <h3 class="text-muted mb-3">Votre panier est vide</h3>
            <p class="text-muted mb-4">Découvrez nos produits naturels et ajoutez-les à votre panier.</p>
            <a href="/produits" class="btn btn-primary btn-lg">
                <i class="fas fa-shopping-bag me-2"></i>Découvrir nos produits
            </a>
        </div>
        <?php else: ?>
        <!-- Cart Items -->
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Articles dans votre panier</h4>
                    </div>
                    <div class="card-body">
                        <?php foreach ($cart as $item): ?>
                        <div class="row align-items-center mb-4 pb-4 border-bottom">
                            <div class="col-md-2">
                                <img src="<?= $item['image'] ?>" alt="<?= $item['name'] ?>" class="img-fluid rounded">
                            </div>
                            <div class="col-md-4">
                                <h5 class="mb-1"><?= $item['name'] ?></h5>
                                <p class="text-muted mb-0">Prix unitaire: <?= number_format($item['price'], 2) ?> €</p>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex align-items-center justify-content-between">
                                    <form method="POST" action="/cart/update" class="d-flex align-items-center">
                                        <input type="hidden" name="product_id" value="<?= $item['id'] ?>">
                                        <label class="me-2 small">Quantité:</label>
                                        <input type="number" name="quantity" value="<?= $item['quantity'] ?>" min="1" class="form-control me-2" style="width: 70px;">
                                        <button type="submit" class="btn btn-outline-primary btn-sm me-3" title="Mettre à jour">
                                            <i class="fas fa-check"></i>
                                        </button>
                                    </form>
                                    <div class="text-end">
                                        <h5 class="text-forest mb-0"><?= number_format($item['price'] * $item['quantity'], 2) ?> €</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 text-end">
                                <a href="/cart/remove/<?= $item['id'] ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet article ?')">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            
            <!-- Order Summary -->
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Résumé de la commande</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3">
                            <span>Sous-total:</span>
                            <span><?= number_format($total, 2) ?> €</span>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <span>Livraison:</span>
                            <span class="text-success">Gratuite</span>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between mb-4">
                            <strong>Total:</strong>
                            <strong class="text-forest"><?= number_format($total, 2) ?> €</strong>
                        </div>
                        <button class="btn btn-primary w-100 mb-3">
                            <i class="fas fa-credit-card me-2"></i>Passer la commande
                        </button>
                        <a href="/produits" class="btn btn-outline-primary w-100">
                            <i class="fas fa-arrow-left me-2"></i>Continuer mes achats
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>

<!-- Featured Products Section -->
<section class="section-padding bg-cream">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2>Nos Produits Recommandés</h2>
                <p class="text-muted">Découvrez nos soins d'exception</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                    <img src="/assets/images/produits.jpg" class="card-img-top" alt="Crème Visage Éclat">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Crème Visage Éclat</h5>
                        <p class="card-text">Une crème hydratante enrichie en huiles essentielles de rose et d'argan pour révéler l'éclat naturel de votre peau.</p>
                        <p class="h5 text-forest mb-3">29,90 €</p>
                        <div class="mt-auto">
                            <a href="/products/detail/1" class="btn btn-outline-primary">Voir le produit</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                    <img src="/assets/images/produits.jpg" class="card-img-top" alt="Lait Hydratant Corps">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Lait Hydratant Corps</h5>
                        <p class="card-text">Un lait hydratant enrichi en beurre de karité et huile d'argan pour nourrir et adoucir votre peau.</p>
                        <p class="h5 text-forest mb-3">24,90 €</p>
                        <div class="mt-auto">
                            <a href="/products/detail/2" class="btn btn-outline-primary">Voir le produit</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                    <img src="/assets/images/produits.jpg" class="card-img-top" alt="Masque Purifiant">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Masque Purifiant</h5>
                        <p class="card-text">Un masque à l'argile verte et aux huiles essentielles de menthe pour purifier et revitaliser votre peau.</p>
                        <p class="h5 text-forest mb-3">19,90 €</p>
                        <div class="mt-auto">
                            <a href="/products/detail/1" class="btn btn-outline-primary">Voir le produit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
