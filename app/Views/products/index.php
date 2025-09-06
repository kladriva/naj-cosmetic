<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Header Section -->
<section class="hero-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h1 class="hero-title">
                    Nos Produits
                </h1>
                <p class="hero-subtitle">
                    Découvrez notre gamme de cosmétiques naturels, spécialement conçus pour les peaux mixtes
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Products Grid -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row g-4 mb-5">
            <?php foreach ($products as $product): ?>
            <div class="col-lg-6">
                <div class="card card-naj h-100">
                    <!-- Product Image -->
                    <div class="product-image" style="height: 300px;">
                        <i class="fas <?= $product['id'] == 1 ? 'fa-tint' : 'fa-gem' ?>" style="font-size: 5rem;"></i>
                    </div>
                    
                    <!-- Product Info -->
                    <div class="card-body">
                        <h3 class="text-dark-brown mb-3">
                            <?= $product['name'] ?>
                        </h3>
                        
                        <p class="text-muted mb-4">
                            <?= $product['description'] ?>
                        </p>
                        
                        <!-- Key Ingredients -->
                        <div class="mb-4">
                            <h5 class="text-dark-brown mb-3">
                                <i class="fas fa-leaf me-2"></i>Ingrédients clés :
                            </h5>
                            <div class="d-flex flex-wrap gap-2">
                                <?php foreach (array_slice($product['ingredients'], 0, 3) as $ingredient): ?>
                                <span class="ingredient-tag">
                                    <?= $ingredient ?>
                                </span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        
                        <!-- Price and CTA -->
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="product-price">
                                <?= number_format($product['price'], 2) ?> €
                            </div>
                            <a href="/produit/<?= $product['id'] ?>" class="btn btn-naj-primary">
                                <i class="fas fa-eye me-2"></i>Voir le détail
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <!-- Philosophy Section -->
        <div class="card card-naj rounded-naj" style="background: linear-gradient(135deg, var(--color-beige) 0%, var(--color-cream) 100%);">
            <div class="card-body text-center p-5">
                <h2 class="text-dark-brown mb-4">
                    Pourquoi choisir NAJ COSMETIC ?
                </h2>
                
                <div class="row g-4 mb-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="text-center">
                            <div class="feature-icon">
                                <i class="fas fa-leaf"></i>
                            </div>
                            <h5 class="text-dark-brown mb-2">100% Naturel</h5>
                            <p class="text-muted small">Aucun ingrédient synthétique</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="text-center">
                            <div class="feature-icon">
                                <i class="fas fa-user-md"></i>
                            </div>
                            <h5 class="text-dark-brown mb-2">Formulé par des experts</h5>
                            <p class="text-muted small">Créé par Anyssa Joëlle, passionnée de cosmétique</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="text-center">
                            <div class="feature-icon">
                                <i class="fas fa-recycle"></i>
                            </div>
                            <h5 class="text-dark-brown mb-2">Respectueux de l'environnement</h5>
                            <p class="text-muted small">Emballages recyclables et ingrédients durables</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="text-center">
                            <div class="feature-icon">
                                <i class="fas fa-star"></i>
                            </div>
                            <h5 class="text-dark-brown mb-2">Résultats visibles</h5>
                            <p class="text-muted small">Efficacité prouvée dès les premières utilisations</p>
                        </div>
                    </div>
                </div>
                
                <a href="/notre-histoire" class="btn btn-naj-secondary">
                    <i class="fas fa-heart me-2"></i>Découvrir notre histoire
                </a>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
