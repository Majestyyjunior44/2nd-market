<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meilleures Ventes - TEMU</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<body>
    <?php include 'everywere/header.php'; ?>

    <section class="hero">
        <div class="container">
            <h1>Nos Meilleures Ventes</h1>
            <p>Découvrez les produits les plus populaires et appréciés par nos clients</p>
            <a href="#" class="btn-primary">Voir toutes les meilleures ventes</a>
        </div>
    </section>

    <div class="page-header">
        <h2 class="page-title">Nos meilleures ventes</h2>
        <div class="header-filters">
            <div class="filter-buttons">
                <button class="filter-btn active">30 derniers jours</button>
                <button class="filter-btn">14 derniers jours</button>
                <button class="filter-btn">7 derniers jours</button>
            </div>
            <div class="category-filter">
                <label for="category-dropdown">Filtrer par catégorie:</label>
                <div class="category-dropdown" id="category-dropdown">
                    <div class="category-selected">Toutes les catégories <span class="mm-arrow">›</span></div>
                    <div class="category-options">
                        <div class="mm-sidebar-item" data-category="chaussures-homme">Chaussures homme <span class="mm-arrow">›</span></div>
                        <div class="mm-sidebar-item" data-category="maison">Maison et Cuisine <span class="mm-arrow">›</span></div>
                        <div class="mm-sidebar-item" data-category="vetements-femme">Vêtements femme <span class="mm-arrow">›</span></div>
                        <div class="mm-sidebar-item" data-category="grandes-tailles-femme">Grandes tailles femme <span class="mm-arrow">›</span></div>
                        <div class="mm-sidebar-item" data-category="chaussures-femme">Chaussures femme <span class="mm-arrow">›</span></div>
                        <div class="mm-sidebar-item" data-category="lingerie">Lingerie et Pyjamas femme <span class="mm-arrow">›</span></div>
                        <div class="mm-sidebar-item" data-category="vetements-homme">Vêtements homme <span class="mm-arrow">›</span></div>
                        <div class="mm-sidebar-item" data-category="grandes-tailles-homme">Grandes tailles homme <span class="mm-arrow">›</span></div>
                        <div class="mm-sidebar-item" data-category="pyjamas">Pyjamas et Sous-vêtemnts <span class="mm-arrow">›</span></div>
                        <div class="mm-sidebar-item" data-category="sports">Sports et Activités d'extérieur <span class="mm-arrow">›</span></div>
                        <div class="mm-sidebar-item" data-category="bijoux">Bijoux et Accessoires <span class="mm-arrow">›</span></div>
                        <div class="mm-sidebar-item" data-category="beaute">Beauté et Santé <span class="mm-arrow">›</span></div>
                        <div class="mm-sidebar-item" data-category="jouets">Jouets et Jeux <span class="mm-arrow">›</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="featured-products">
        <div class="container">
            <h2>Top 12 Meilleures Ventes</h2>
            <div class="product-grid">
                <!-- Product cards for best sellers -->
                <div class="product-card">
                    <img src="https://via.placeholder.com/200" alt="Produit phare 1">
                    <h3>Écouteurs Sans Fil Premium</h3>
                    <div class="price">
                        <span class="original">29,99€</span>
                        <span class="discounted">14,99€</span>
                    </div>
                    <div class="rating">⭐⭐⭐⭐⭐ (4.8)</div>
                    <button class="btn-secondary">Ajouter au panier</button>
                </div>
                <div class="product-card">
                    <img src="https://via.placeholder.com/200" alt="Produit phare 2">
                    <h3>Montre Connectée Sport</h3>
                    <div class="price">
                        <span class="original">39,99€</span>
                        <span class="discounted">19,99€</span>
                    </div>
                    <div class="rating">⭐⭐⭐⭐☆ (4.5)</div>
                    <button class="btn-secondary">Ajouter au panier</button>
                </div>
                <div class="product-card">
                    <img src="https://via.placeholder.com/200" alt="Produit phare 3">
                    <h3>Lampe de Bureau LED Intelligente</h3>
                    <div class="price">
                        <span class="original">24,99€</span>
                        <span class="discounted">12,49€</span>
                    </div>
                    <div class="rating">⭐⭐⭐⭐☆ (4.6)</div>
                    <button class="btn-secondary">Ajouter au panier</button>
                </div>
                <div class="product-card">
                    <img src="https://via.placeholder.com/200" alt="Produit phare 4">
                    <h3>Sac à Dos Étanche pour Ordinateur</h3>
                    <div class="price">
                        <span class="original">34,99€</span>
                        <span class="discounted">17,49€</span>
                    </div>
                    <div class="rating">⭐⭐⭐⭐☆ (4.4)</div>
                    <button class="btn-secondary">Ajouter au panier</button>
                </div>
                <div class="product-card">
                    <img src="https://via.placeholder.com/200" alt="Produit phare 5">
                    <h3>Ensemble de Couteaux de Cuisine Professionnel</h3>
                    <div class="price">
                        <span class="original">49,99€</span>
                        <span class="discounted">24,99€</span>
                    </div>
                    <div class="rating">⭐⭐⭐⭐⭐ (4.7)</div>
                    <button class="btn-secondary">Ajouter au panier</button>
                </div>
                <div class="product-card">
                    <img src="https://via.placeholder.com/200" alt="Produit phare 6">
                    <h3>Kit de Maquillage Complet</h3>
                    <div class="price">
                        <span class="original">19,99€</span>
                        <span class="discounted">9,99€</span>
                    </div>
                    <div class="rating">⭐⭐⭐⭐☆ (4.3)</div>
                    <button class="btn-secondary">Ajouter au panier</button>
                </div>
                <div class="product-card">
                    <img src="https://via.placeholder.com/200" alt="Produit phare 7">
                    <h3>Brosse à Dents Électrique Sonic</h3>
                    <div class="price">
                        <span class="original">22,99€</span>
                        <span class="discounted">11,49€</span>
                    </div>
                    <div class="rating">⭐⭐⭐⭐☆ (4.6)</div>
                    <button class="btn-secondary">Ajouter au panier</button>
                </div>
                <div class="product-card">
                    <img src="https://via.placeholder.com/200" alt="Produit phare 8">
                    <h3>Coussin Cervical à Mémoire de Forme</h3>
                    <div class="price">
                        <span class="original">15,99€</span>
                        <span class="discounted">7,99€</span>
                    </div>
                    <div class="rating">⭐⭐⭐⭐☆ (4.5)</div>
                    <button class="btn-secondary">Ajouter au panier</button>
                </div>
                <div class="product-card">
                    <img src="https://via.placeholder.com/200" alt="Produit phare 9">
                    <h3>Enceinte Bluetooth Portable Étanche</h3>
                    <div class="price">
                        <span class="original">27,99€</span>
                        <span class="discounted">13,99€</span>
                    </div>
                    <div class="rating">⭐⭐⭐⭐☆ (4.6)</div>
                    <button class="btn-secondary">Ajouter au panier</button>
                </div>
                <div class="product-card">
                    <img src="https://via.placeholder.com/200" alt="Produit phare 10">
                    <h3>Set de Ustensiles de Cuisine en Silicone</h3>
                    <div class="price">
                        <span class="original">18,99€</span>
                        <span class="discounted">9,49€</span>
                    </div>
                    <div class="rating">⭐⭐⭐⭐☆ (4.4)</div>
                    <button class="btn-secondary">Ajouter au panier</button>
                </div>
                <div class="product-card">
                    <img src="https://via.placeholder.com/200" alt="Produit phare 11">
                    <h3>Lunettes de Soleil Polarisées</h3>
                    <div class="price">
                        <span class="original">16,99€</span>
                        <span class="discounted">8,49€</span>
                    </div>
                    <div class="rating">⭐⭐⭐⭐☆ (4.5)</div>
                    <button class="btn-secondary">Ajouter au panier</button>
                </div>
                <div class="product-card">
                    <img src="https://via.placeholder.com/200" alt="Produit phare 12">
                    <h3>Batterie Externe 20000mAh</h3>
                    <div class="price">
                        <span class="original">25,99€</span>
                        <span class="discounted">12,99€</span>
                    </div>
                    <div class="rating">⭐⭐⭐⭐⭐ (4.8)</div>
                    <button class="btn-secondary">Ajouter au panier</button>
                </div>
            </div>
        </div>
    </section>

    <section class="flash-sale">
        <div class="container">
            <h2>Offre Flash Spéciale Meilleures Ventes <span class="timer">02:15:30</span></h2>
            <div class="product-grid">
                <!-- Flash sale products -->
                <div class="product-card">
                    <img src="https://via.placeholder.com/200" alt="Flash Sale Produit 1">
                    <h3>Casque Réduction de Bruit Active</h3>
                    <div class="price">
                        <span class="original">45,99€</span>
                        <span class="discounted">22,99€</span>
                    </div>
                    <div class="rating">⭐⭐⭐⭐☆ (4.7)</div>
                    <button class="btn-secondary">Ajouter au panier</button>
                </div>
                <div class="product-card">
                    <img src="https://via.placeholder.com/200" alt="Flash Sale Produit 2">
                    <h3>Smartphone Écran Pliabke</h3>
                    <div class="price">
                        <span class="original">89,99€</span>
                        <span class="discounted">44,99€</span>
                    </div>
                    <div class="rating">⭐⭐⭐⭐⭐ (4.9)</div>
                    <button class="btn-secondary">Ajouter au panier</button>
                </div>
                <div class="product-card">
                    <img src="https://via.placeholder.com/200" alt="Flash Sale Produit 3">
                    <h3>Tablette Graphique Professionnelle</h3>
                    <div class="price">
                        <span class="original">39,99€</span>
                        <span class="discounted">19,99€</span>
                    </div>
                    <div class="rating">⭐⭐⭐⭐☆ (4.6)</div>
                    <button class="btn-secondary">Ajouter au panier</button>
                </div>
            </div>
        </div>
    </section>

<?php include 'everywere/footer.php'; ?>

</body>
</html>