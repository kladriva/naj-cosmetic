<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h1 class="hero-title">
                    Notre Histoire
                </h1>
                <p class="hero-subtitle">
                    Découvrez le parcours inspirant d'Anyssa Joelle NTONGESSA, fondatrice de NAJ COSMETIC
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Founder Story Section -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row g-5 align-items-center mb-5">
            <!-- Founder Image -->
            <div class="col-lg-6 text-center">
                <div class="founder-image mx-auto">
                    <img src="/assets/images/anyssa-joelle.jpg" alt="Anyssa Joelle NTONGESSA, fondatrice de NAJ COSMETIC">
                </div>
            </div>
            
            <!-- Founder Story -->
            <div class="col-lg-6">
                <h2 class="text-dark-brown mb-3">
                    <?= $founder['name'] ?>
                </h2>
                <h3 class="text-sage mb-4">
                    <?= $founder['title'] ?>
                </h3>
                
                <p class="fs-5 text-muted mb-4">
                    <?= $founder['story'] ?>
                </p>
                
                <p class="fs-5 text-muted">
                    <?= $founder['philosophy'] ?>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="py-5" style="background: linear-gradient(135deg, var(--color-beige) 0%, var(--color-cream) 100%);">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="text-dark-brown">
                    <i class="fas fa-heart me-3"></i>Nos Valeurs
                </h2>
            </div>
        </div>
        
        <div class="row g-4">
            <?php foreach ($founder['values'] as $value => $description): ?>
            <div class="col-lg-4 col-md-6">
                <div class="card card-naj h-100">
                    <div class="card-body text-center p-4">
                        <div class="philosophy-icon mb-4">
                            <?php
                            $icons = [
                                'Naturel' => 'fas fa-leaf',
                                'Douceur' => 'fas fa-spa',
                                'Éclat' => 'fas fa-star',
                                'Simplicité' => 'fas fa-bullseye',
                                'Efficacité' => 'fas fa-bolt'
                            ];
                            $iconClass = $icons[$value] ?? 'fas fa-heart';
                            ?>
                            <i class="<?= $iconClass ?>"></i>
                        </div>
                        
                        <h3 class="text-dark-brown mb-3">
                            <?= $value ?>
                        </h3>
                        
                        <p class="text-muted">
                            <?= $description ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Journey Timeline Section -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="text-dark-brown">
                    <i class="fas fa-route me-3"></i>Le Parcours
                </h2>
            </div>
        </div>
        
        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <h3 class="text-dark-brown mb-3">
                        <i class="fas fa-graduation-cap me-2"></i>Formation en Ressources Humaines
                    </h3>
                    <p class="text-muted">Anyssa Joelle commence sa carrière dans le domaine des ressources humaines, développant son expertise en accompagnement et conseil.</p>
                </div>
            </div>
            
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <h3 class="text-dark-brown mb-3">
                        <i class="fas fa-heart me-2"></i>Découverte de la Passion
                    </h3>
                    <p class="text-muted">Au fil des années, Anyssa Joelle développe une passion grandissante pour la cosmétique naturelle et ses bienfaits.</p>
                </div>
            </div>
            
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <h3 class="text-dark-brown mb-3">
                        <i class="fas fa-flask me-2"></i>Formation en Cosmétique
                    </h3>
                    <p class="text-muted">Elle se forme intensivement aux techniques de formulation cosmétique naturelle et aux propriétés des ingrédients.</p>
                </div>
            </div>
            
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <h3 class="text-dark-brown mb-3">
                        <i class="fas fa-rocket me-2"></i>Création de NAJ COSMETIC
                    </h3>
                    <p class="text-muted">En 2024, Anyssa Joelle fonde NAJ COSMETIC pour partager sa passion et offrir des cosmétiques naturels de qualité.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="py-5" style="background: linear-gradient(135deg, var(--color-sage) 0%, var(--color-brown) 100%); color: var(--color-white);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="text-white mb-4">
                    <i class="fas fa-users me-2"></i>Rejoignez l'aventure NAJ COSMETIC
                </h2>
                <p class="fs-5 mb-4 opacity-75">
                    Découvrez nos produits naturels et faites partie de notre communauté de femmes qui choisissent la beauté authentique.
                </p>
                <div class="d-flex gap-3 justify-content-center flex-wrap">
                    <a href="/produits" class="btn btn-naj-outline">
                        <i class="fas fa-shopping-bag me-2"></i>Découvrir nos produits
                    </a>
                    <a href="/" class="btn btn-naj-outline">
                        <i class="fas fa-home me-2"></i>Retour à l'accueil
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
