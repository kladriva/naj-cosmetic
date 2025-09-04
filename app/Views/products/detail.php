<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Product Detail Section -->
<section class="py-5 bg-white">
    <div class="container">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/produits" class="text-sage text-decoration-none">
                        <i class="fas fa-arrow-left me-1"></i>Retour aux produits
                    </a>
                </li>
            </ol>
        </nav>
        
        <div class="row g-5">
            <!-- Product Image -->
            <div class="col-lg-6">
                <div class="product-image">
                    <i class="fas <?= $product['id'] == 1 ? 'fa-tint' : 'fa-gem' ?>" style="font-size: 8rem;"></i>
                </div>
            </div>
            
            <!-- Product Info -->
            <div class="col-lg-6">
                <h1 class="text-dark-brown mb-3">
                    <?= $product['name'] ?>
                </h1>
                
                <div class="product-price mb-4">
                    <?= number_format($product['price'], 2) ?> €
                </div>
                
                <p class="fs-5 text-muted mb-4">
                    <?= $product['description'] ?>
                </p>
                
                <!-- Add to Cart Button -->
                <div class="mb-5">
                    <button class="btn btn-naj-primary btn-lg w-100">
                        <i class="fas fa-shopping-cart me-2"></i>Ajouter au panier
                    </button>
                </div>
                
                <!-- Key Benefits -->
                <div class="mb-4">
                    <h3 class="text-dark-brown mb-4">
                        <i class="fas fa-check-circle me-2"></i>Bienfaits :
                    </h3>
                    <div class="row g-3">
                        <?php foreach ($product['benefits'] as $benefit): ?>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check text-sage me-3"></i>
                                <span class="text-muted"><?= $benefit ?></span>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Ingredients Section -->
<section class="py-5" style="background: linear-gradient(135deg, var(--color-beige) 0%, var(--color-cream) 100%);">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="text-dark-brown">
                    <i class="fas fa-leaf me-3"></i>Ingrédients Naturels
                </h2>
            </div>
        </div>
        
        <div class="row g-4 mb-5">
            <?php foreach ($product['ingredients'] as $ingredient): ?>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="ingredient-card">
                    <div class="ingredient-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h5 class="text-dark-brown mb-2">
                        <?= $ingredient ?>
                    </h5>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <div class="card card-naj rounded-naj">
            <div class="card-body text-center p-5">
                <h3 class="text-dark-brown mb-3">
                    <i class="fas fa-certificate me-2"></i>Tous nos ingrédients sont 100% naturels
                </h3>
                <p class="fs-5 text-muted">
                    Nous sélectionnons rigoureusement chaque ingrédient pour garantir la qualité et l'efficacité de nos produits, 
                    tout en respectant votre peau et l'environnement.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Usage Instructions Section -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <h2 class="text-dark-brown mb-4">
                    <i class="fas fa-info-circle me-2"></i>Conseils d'utilisation
                </h2>
                
                <div class="usage-card">
                    <h4 class="text-dark-brown mb-3">
                        <i class="fas fa-book me-2"></i>Mode d'emploi :
                    </h4>
                    <p class="fs-5 text-muted">
                        <?= $product['usage'] ?>
                    </p>
                </div>
                
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="time-card">
                            <div class="time-icon">
                                <i class="fas fa-sun"></i>
                            </div>
                            <h5 class="text-dark-brown mb-2">Matin</h5>
                            <p class="text-muted small">Après le nettoyage</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="time-card">
                            <div class="time-icon">
                                <i class="fas fa-moon"></i>
                            </div>
                            <h5 class="text-dark-brown mb-2">Soir</h5>
                            <p class="text-muted small">Avant le coucher</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="card card-naj rounded-naj" style="background: linear-gradient(135deg, var(--color-sage) 0%, var(--color-brown) 100%); color: var(--color-white);">
                    <div class="card-body text-center p-5">
                        <h3 class="mb-4">
                            <i class="fas fa-star me-2"></i>Résultat garanti
                        </h3>
                        <p class="fs-5 mb-4">
                            Utilisez quotidiennement pour des résultats visibles dès la première semaine
                        </p>
                        <div class="d-flex justify-content-center gap-4 fs-1">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-gem"></i>
                            <i class="fas fa-heart"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Products Section -->
<section class="py-5" style="background: linear-gradient(135deg, var(--color-beige) 0%, var(--color-cream) 100%);">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="text-dark-brown mb-4">
                    <i class="fas fa-shopping-bag me-2"></i>Découvrez aussi
                </h2>
                <a href="/produits" class="btn btn-naj-primary btn-lg">
                    <i class="fas fa-eye me-2"></i>Voir tous nos produits
                </a>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
