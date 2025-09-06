<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h1 class="hero-title fade-in-up">
                    <?= $slogan ?>
                </h1>
                <p class="hero-subtitle fade-in-up">
                    <?= $philosophy ?>
                </p>
                <div class="d-flex gap-3 justify-content-center flex-wrap fade-in-up">
                    <a href="/produits" class="btn btn-naj-primary">
                        <i class="fas fa-shopping-bag me-2"></i>Découvrir nos produits
                    </a>
                    <a href="/notre-histoire" class="btn btn-naj-outline" style="background-color: rgba(255, 255, 255, 0.9); border: 2px solid var(--color-gold); color: var(--color-gold-dark); font-weight: 500;">
                        <i class="fas fa-heart me-2"></i>Notre histoire
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Philosophy Section -->
<section class="philosophy-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="text-dark-brown">Notre Philosophie</h2>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="philosophy-card">
                    <div class="philosophy-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h4 class="text-dark-brown mb-3">Nature</h4>
                    <p class="text-muted">Des ingrédients 100% naturels, sans compromis sur la qualité</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="philosophy-card">
                    <div class="philosophy-icon">
                        <i class="fas fa-spa"></i>
                    </div>
                    <h4 class="text-dark-brown mb-3">Douceur</h4>
                    <p class="text-muted">Des formules respectueuses de votre peau, même la plus sensible</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="philosophy-card">
                    <div class="philosophy-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="text-dark-brown mb-3">Éclat</h4>
                    <p class="text-muted">Mettre en valeur votre beauté naturelle et votre éclat</p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="philosophy-card">
                    <div class="philosophy-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h4 class="text-dark-brown mb-3">Efficacité</h4>
                    <p class="text-muted">Des résultats visibles et durables pour votre routine beauté</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Products Section -->
<section class="py-5" style="background: linear-gradient(135deg, var(--color-beige) 0%, var(--color-cream) 100%);">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="text-dark-brown">Nos Produits Phares</h2>
            </div>
        </div>
        
        <div class="row g-4 justify-content-center">
            <?php foreach ($featured_products as $product): ?>
            <div class="col-lg-4 col-md-6">
                <div class="card card-naj h-100">
                    <div class="card-body text-center">
                        <div class="product-icon mb-4">
                            <i class="fas <?= $product['id'] == 1 ? 'fa-tint' : 'fa-gem' ?>"></i>
                        </div>
                        
                        <h3 class="text-dark-brown mb-3">
                            <?= $product['name'] ?>
                        </h3>
                        
                        <p class="text-muted mb-4 fst-italic">
                            <?= $product['description'] ?>
                        </p>
                        
                        <div class="product-price mb-4">
                            <?= number_format($product['price'], 2) ?> €
                        </div>
                        
                        <a href="/produit/<?= $product['id'] ?>" class="btn btn-naj-primary w-100">
                            <i class="fas fa-eye me-2"></i>Découvrir
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <div class="row mt-5">
            <div class="col-12 text-center">
                <a href="/produits" class="btn btn-naj-secondary">
                    <i class="fas fa-shopping-bag me-2"></i>Voir tous nos produits
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="py-5" style="background: linear-gradient(135deg, var(--color-gold-dark) 0%, var(--color-brown) 100%);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="text-white mb-4 fw-bold" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.3);">
                    <i class="fas fa-users me-2"></i>Rejoignez l'aventure NAJ COSMETIC
                </h2>
                <p class="fs-5 text-white mb-4" style="opacity: 0.95; text-shadow: 1px 1px 2px rgba(0,0,0,0.2);">
                    Découvrez l'histoire d'Anyssa Joelle, fondatrice de NAJ COSMETIC, et plongez dans l'univers de la cosmétique naturelle authentique.
                </p>
                <div class="d-flex gap-3 justify-content-center flex-wrap">
                    <a href="/notre-histoire" class="btn btn-naj-primary">
                        <i class="fas fa-heart me-2"></i>Découvrir notre histoire
                    </a>
                    <a href="/produits" class="btn btn-naj-outline">
                        <i class="fas fa-shopping-bag me-2"></i>Nos produits
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
