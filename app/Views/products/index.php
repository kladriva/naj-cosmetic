<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Header Section -->
<section class="bg-cream py-5">
    <div class="container text-center">
        <h1>Tous Nos Soins</h1>
        <p class="lead">Découvrez notre gamme complète de cosmétiques naturels, formulés avec des ingrédients purs et sélectionnés pour révéler la beauté naturelle de votre peau.</p>
    </div>
</section>

<!-- Products Grid -->
<section class="section-padding">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <!-- Produit 1 -->
            <div class="col">
                <div class="card h-100">
                    <img src="/assets/images/produits.jpg" class="card-img-top" alt="Crème Visage Éclat">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Crème Visage Éclat</h5>
                        <p class="card-text">Une crème hydratante enrichie en huiles essentielles de rose et d'argan pour révéler l'éclat naturel de votre peau. Formule 100% naturelle adaptée aux peaux mixtes.</p>
                        <p class="h5 text-forest mb-3">29,90 €</p>
                        <div class="mt-auto">
                            <a href="/products/detail/1" class="btn btn-primary">Détails</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Produit 2 -->
            <div class="col">
                <div class="card h-100">
                    <img src="/assets/images/produits.jpg" class="card-img-top" alt="Lait Hydratant Corps">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Lait Hydratant Corps</h5>
                        <p class="card-text">Un lait hydratant enrichi en beurre de karité et huile d'argan pour nourrir et adoucir votre peau. Formule 100% naturelle pour une hydratation intense et durable.</p>
                        <p class="h5 text-forest mb-3">24,90 €</p>
                        <div class="mt-auto">
                            <a href="/products/detail/2" class="btn btn-primary">Détails</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
