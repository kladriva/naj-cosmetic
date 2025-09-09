<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Product Detail Section -->
<section class="section-padding">
    <div class="container">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/produits" class="text-forest text-decoration-none">
                        <i class="fas fa-arrow-left me-1"></i>Retour aux produits
                    </a>
                </li>
            </ol>
        </nav>
        
        <div class="row g-5 align-items-center">
            <!-- Product Image -->
            <div class="col-lg-6">
                <div class="product-image text-center">
                    <img src="/assets/images/produits.jpg" alt="Produit NajCosmetic" class="img-fluid rounded">
                </div>
            </div>
            
            <!-- Product Info -->
            <div class="col-lg-6">
                <h1 class="mb-3" id="product-title">Crème Visage Éclat</h1>
                
                <p class="h3 text-forest mb-4" id="product-price">29,90 €</p>
                
                <p class="lead mb-4" id="product-description">
                    Une crème hydratante enrichie en huiles essentielles de rose et d'argan pour révéler l'éclat naturel de votre peau. Formule 100% naturelle adaptée aux peaux mixtes.
                </p>
                
                <!-- Add to Cart Form -->
                <div class="mb-5">
                    <form id="addToCartForm" class="d-flex align-items-center gap-3">
                        <input type="hidden" id="product_id" value="1">
                        <div class="d-flex align-items-center">
                            <label class="me-2">Quantité:</label>
                            <input type="number" id="quantity" value="1" min="1" class="form-control me-3" style="width: 80px;">
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg">
                            <i class="fas fa-shopping-cart me-2"></i>Ajouter au panier
                        </button>
                    </form>
                </div>
                
                <!-- Key Benefits -->
                <div class="mb-4">
                    <h3 class="mb-4">
                        <i class="fas fa-check-circle me-2 text-forest"></i>Bienfaits :
                    </h3>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check text-forest me-3"></i>
                                <span class="text-muted">Hydratation intense</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check text-forest me-3"></i>
                                <span class="text-muted">Éclat naturel</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check text-forest me-3"></i>
                                <span class="text-muted">Formule 100% naturelle</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check text-forest me-3"></i>
                                <span class="text-muted">Adaptée aux peaux mixtes</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Ingredients Section -->
<section class="section-padding bg-cream">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2>
                    <i class="fas fa-leaf me-3 text-forest"></i>Ingrédients Naturels
                </h2>
            </div>
        </div>
        
        <div class="row g-4 mb-5">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card text-center h-100">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="fas fa-leaf text-forest" style="font-size: 2rem;"></i>
                        </div>
                        <h5 class="text-forest">Huile de Rose Musquée</h5>
                        <p class="text-muted small">Régénérante et anti-âge</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card text-center h-100">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="fas fa-leaf text-forest" style="font-size: 2rem;"></i>
                        </div>
                        <h5 class="text-forest">Huile d'Argan</h5>
                        <p class="text-muted small">Nourrissante et protectrice</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card text-center h-100">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="fas fa-leaf text-forest" style="font-size: 2rem;"></i>
                        </div>
                        <h5 class="text-forest">Aloe Vera</h5>
                        <p class="text-muted small">Apaisante et hydratante</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card text-center h-100">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="fas fa-leaf text-forest" style="font-size: 2rem;"></i>
                        </div>
                        <h5 class="text-forest">Vitamine E</h5>
                        <p class="text-muted small">Antioxydante et protectrice</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="card">
            <div class="card-body text-center p-5">
                <h3 class="mb-3">
                    <i class="fas fa-certificate me-2 text-forest"></i>Tous nos ingrédients sont 100% naturels
                </h3>
                <p class="lead text-muted">
                    Nous sélectionnons rigoureusement chaque ingrédient pour garantir la qualité et l'efficacité de nos produits, 
                    tout en respectant votre peau et l'environnement.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Usage Instructions Section -->
<section class="section-padding">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <h2 class="mb-4">
                    <i class="fas fa-info-circle me-2 text-forest"></i>Conseils d'utilisation
                </h2>
                
                <div class="card mb-4">
                    <div class="card-body">
                        <h4 class="mb-3">
                            <i class="fas fa-book me-2 text-forest"></i>Mode d'emploi :
                        </h4>
                        <p class="lead text-muted">
                            Appliquer matin et soir sur visage et cou nettoyés, en évitant le contour des yeux. 
                            Masser délicatement du centre vers l'extérieur du visage jusqu'à absorption complète.
                        </p>
                    </div>
                </div>
                
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="card text-center">
                            <div class="card-body">
                                <div class="mb-3">
                                    <i class="fas fa-sun text-forest" style="font-size: 2rem;"></i>
                                </div>
                                <h5 class="text-forest">Matin</h5>
                                <p class="text-muted small">Après le nettoyage</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="card text-center">
                            <div class="card-body">
                                <div class="mb-3">
                                    <i class="fas fa-moon text-forest" style="font-size: 2rem;"></i>
                                </div>
                                <h5 class="text-forest">Soir</h5>
                                <p class="text-muted small">Avant le coucher</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="card bg-forest text-white">
                    <div class="card-body text-center p-5">
                        <h3 class="mb-4">
                            <i class="fas fa-star me-2"></i>Résultat garanti
                        </h3>
                        <p class="lead mb-4">
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
<section class="section-padding bg-cream">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="mb-4">
                    <i class="fas fa-shopping-bag me-2 text-forest"></i>Découvrez aussi
                </h2>
                <a href="/produits" class="btn btn-primary btn-lg">
                    <i class="fas fa-eye me-2"></i>Voir tous nos produits
                </a>
            </div>
        </div>
    </div>
</section>

<script>
// Script pour changer le contenu selon l'ID du produit et gérer l'ajout au panier
document.addEventListener('DOMContentLoaded', function() {
    const urlParams = new URLSearchParams(window.location.search);
    const productId = window.location.pathname.split('/').pop();
    
    const products = {
        '1': {
            title: 'Crème Visage Éclat',
            price: '29,90 €',
            description: 'Une crème hydratante enrichie en huiles essentielles de rose et d\'argan pour révéler l\'éclat naturel de votre peau. Formule 100% naturelle adaptée aux peaux mixtes.'
        },
        '2': {
            title: 'Lait Hydratant Corps',
            price: '24,90 €',
            description: 'Un lait hydratant enrichi en beurre de karité et huile d\'argan pour nourrir et adoucir votre peau. Formule 100% naturelle pour une hydratation intense et durable.'
        }
    };
    
    if (products[productId]) {
        document.getElementById('product-title').textContent = products[productId].title;
        document.getElementById('product-price').textContent = products[productId].price;
        document.getElementById('product-description').textContent = products[productId].description;
        document.getElementById('product_id').value = productId;
    }

    // Gestion de l'ajout au panier
    document.getElementById('addToCartForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const productId = document.getElementById('product_id').value;
        const quantity = document.getElementById('quantity').value;
        
        fetch('/cart/add', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: `product_id=${productId}&quantity=${quantity}`
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Mettre à jour le compteur du panier dans la navbar
                const cartBadge = document.querySelector('.badge');
                if (cartBadge) {
                    cartBadge.textContent = data.cart_count;
                }
                
                // Afficher un message de succès
                alert(data.message);
            } else {
                alert('Erreur: ' + data.message);
            }
        })
        .catch(error => {
            console.error('Erreur:', error);
            alert('Une erreur est survenue lors de l\'ajout au panier');
        });
    });
});
</script>

<?= $this->endSection() ?>