<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="hero-section" style="background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('/assets/images/produits.jpg'); background-size: cover; background-position: center; min-height: 100vh; display: flex; align-items: center;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center text-white">
                <h1 class="display-4 fw-bold mb-4" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">
                    L'Éclat au Naturel.
                </h1>
                <p class="lead fs-4 mb-4" style="text-shadow: 1px 1px 2px rgba(0,0,0,0.5);">
                    Des soins d'exception, formulés avec des ingrédients purs pour révéler la beauté de votre peau.
                </p>
                <a href="/produits" class="btn btn-primary btn-lg mt-3">
                    Découvrir notre rituel
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Produits Phares Section -->
<section class="section-padding bg-cream">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2>Notre Sélection Essentielle</h2>
            </div>
        </div>
        
        <div class="row mt-5 g-4">
            <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                    <img src="/assets/images/produits.jpg" class="card-img-top" alt="Crème Visage Éclat">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Crème Visage Éclat</h5>
                        <p class="card-text">Une crème hydratante enrichie en huiles essentielles de rose et d'argan pour révéler l'éclat naturel de votre peau.</p>
                        <div class="mt-auto">
                            <a href="/produits" class="btn btn-outline-primary">Voir le produit</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                    <img src="/assets/images/produits.jpg" class="card-img-top" alt="Sérum Anti-Âge">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Sérum Anti-Âge</h5>
                        <p class="card-text">Un concentré d'actifs naturels à base d'extraits de grenade et de vitamine E pour préserver la jeunesse de votre peau.</p>
                        <div class="mt-auto">
                            <a href="/produits" class="btn btn-outline-primary">Voir le produit</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                    <img src="/assets/images/produits.jpg" class="card-img-top" alt="Masque Purifiant">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Masque Purifiant</h5>
                        <p class="card-text">Un masque à l'argile verte et aux huiles essentielles de menthe pour purifier et revitaliser votre peau en profondeur.</p>
                        <div class="mt-auto">
                            <a href="/produits" class="btn btn-outline-primary">Voir le produit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Engagements Section -->
<section class="section-padding">
    <div class="container">
        <div class="row text-center g-4">
            <div class="col-md-4">
                <div class="mb-4">
                    <svg width="80" height="80" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-forest">
                        <path d="M12 2L13.09 8.26L22 9L13.09 9.74L12 16L10.91 9.74L2 9L10.91 8.26L12 2Z" fill="currentColor"/>
                        <path d="M12 2L13.09 8.26L22 9L13.09 9.74L12 16L10.91 9.74L2 9L10.91 8.26L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3>100% Naturel</h3>
                <p class="text-muted">Nos formules sont exclusivement composées d'ingrédients naturels et biologiques, sans conservateurs chimiques ni substances nocives pour votre peau et l'environnement.</p>
            </div>
            
            <div class="col-md-4">
                <div class="mb-4">
                    <svg width="80" height="80" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-forest">
                        <path d="M12 2L2 7L12 12L22 7L12 2Z" fill="currentColor"/>
                        <path d="M2 17L12 22L22 17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M2 12L12 17L22 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3>Fait en France</h3>
                <p class="text-muted">Tous nos produits sont conçus, formulés et fabriqués en France, respectant les normes européennes les plus strictes et soutenant l'économie locale.</p>
            </div>
            
            <div class="col-md-4">
                <div class="mb-4">
                    <svg width="80" height="80" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-forest">
                        <path d="M9 12L11 14L15 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="currentColor" stroke-width="2"/>
                    </svg>
                </div>
                <h3>Non testé sur les animaux</h3>
                <p class="text-muted">Nous nous engageons pour le bien-être animal. Aucun de nos produits n'est testé sur les animaux, et nous utilisons des méthodes alternatives pour garantir la sécurité.</p>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
