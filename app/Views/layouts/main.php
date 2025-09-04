<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'NAJ COSMETIC' ?></title>
    <meta name="description" content="NAJ COSMETIC - Cosmétiques naturels pour peaux mixtes. Prenez soin de votre peau, naturellement.">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    
    <!-- Bootstrap CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@300;400;500;600&family=Source+Sans+Pro:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="/assets/css/naj-cosmetic.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand naj-logo" href="/">
                <i class="fas fa-leaf me-2"></i>NAJ COSMETIC
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">
                            <i class="fas fa-home me-1"></i>Accueil
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/produits">
                            <i class="fas fa-shopping-bag me-1"></i>Nos Produits
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/notre-histoire">
                            <i class="fas fa-heart me-1"></i>Notre Histoire
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main style="margin-top: 76px;">
        <?= $this->renderSection('content') ?>
    </main>

    <!-- Footer -->
    <footer class="bg-dark-brown text-white py-5 mt-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h4 class="naj-logo mb-3">
                        <i class="fas fa-leaf me-2"></i>NAJ COSMETIC
                    </h4>
                    <p class="text-beige mb-4">Prenez soin de votre peau, naturellement.</p>
                    
                    <div class="d-flex justify-content-center gap-4 mb-4 flex-wrap">
                        <a href="/" class="text-beige text-decoration-none">
                            <i class="fas fa-home me-1"></i>Accueil
                        </a>
                        <a href="/produits" class="text-beige text-decoration-none">
                            <i class="fas fa-shopping-bag me-1"></i>Nos Produits
                        </a>
                        <a href="/notre-histoire" class="text-beige text-decoration-none">
                            <i class="fas fa-heart me-1"></i>Notre Histoire
                        </a>
                    </div>
                    
                    <hr class="border-brown">
                    <p class="text-beige mb-0 small">
                        &copy; <?= date('Y') ?> NAJ COSMETIC. Tous droits réservés.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
