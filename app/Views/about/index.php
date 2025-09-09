<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Header Section -->
<section class="py-5">
    <div class="container text-center">
        <h1>La Philosophie NajCosmetic</h1>
        <p class="lead">Découvrez l'histoire inspirante de notre marque et les valeurs qui nous animent pour créer des cosmétiques naturels d'exception.</p>
    </div>
</section>

<!-- Origines Section -->
<section class="section-padding">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <img src="/assets/images/anyssa-joelle.jpg" alt="Anyssa Joëlle, fondatrice de NajCosmetic" class="img-fluid rounded">
            </div>
            <div class="col-lg-6">
                <h2>Notre Histoire</h2>
                <p class="lead">L'aventure NajCosmetic est née d'une passion profonde pour la beauté naturelle et d'un désir de partager des soins authentiques.</p>
                <p>Fondée en 2024 par Anyssa Joëlle, NajCosmetic puise ses racines dans une conviction simple : la beauté doit être accessible, naturelle et respectueuse de notre peau comme de notre environnement.</p>
                <p>Après des années d'expérience dans le domaine des ressources humaines, Anyssa Joëlle a découvert sa véritable vocation dans la cosmétique naturelle. Sa formation approfondie aux techniques de formulation et aux propriétés des ingrédients naturels l'a menée à créer des produits d'exception.</p>
                <p>Chaque formule NajCosmetic est le fruit de recherches minutieuses et d'un savoir-faire artisanal, alliant tradition et innovation pour offrir des soins qui révèlent l'éclat naturel de chaque femme.</p>
            </div>
        </div>
    </div>
</section>

<!-- Notre Mission Section -->
<section class="section-padding bg-cream">
    <div class="container text-center">
        <h2>Notre Mission</h2>
        <blockquote class="blockquote mt-5">
            <p class="h3 font-italic text-forest mb-4">
                "Révéler la beauté naturelle de chaque femme à travers des soins authentiques, formulés avec amour et respect pour la nature."
            </p>
            <footer class="blockquote-footer">
                <cite title="Source Title">Anyssa Joëlle, Fondatrice de NajCosmetic</cite>
            </footer>
        </blockquote>
    </div>
</section>

<!-- Nos Valeurs Section -->
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
