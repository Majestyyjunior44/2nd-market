<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meilleures ventes - 2nd market</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<body>

<?php include 'everywere/header.php'; ?>

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
        <div class="product-grid">
            <div class="product-card">
                <img src="https://monsieurcadeaux.fr/wp-content/uploads/2023/05/idee-cadeau-homme-ustensils-cuisine-bois-naturel-4.jpg.avif" alt="Produit">
                <h3>Ustensiles de cuisine</h3>
                <div class="price">
                    <span class="original">24,99€</span><span class="discounted">12,99€</span>
                </div>
                <div class="rating">
                    ⭐⭐⭐⭐⭐ (4.6)
                </div>
                <button class="btn-secondary">Ajouter au panier</button>
            </div>
            <div class="product-card">
                <img src="https://monsieurcadeaux.fr/wp-content/uploads/2023/05/idee-cadeau-homme-ustensils-cuisine-bois-naturel-4.jpg.avif" alt="Produit">
                <h3>Ustensiles de cuisine</h3>
                <div class="price">
                    <span class="original">24,99€</span><span class="discounted">12,99€</span>
                </div>
                <div class="rating">
                    ⭐⭐⭐⭐⭐ (4.6)
                </div>
                <button class="btn-secondary">Ajouter au panier</button>
            </div>
            <div class="product-card">
                <img src="https://monsieurcadeaux.fr/wp-content/uploads/2023/05/idee-cadeau-homme-ustensils-cuisine-bois-naturel-4.jpg.avif" alt="Produit">
                <h3>Ustensiles de cuisine</h3>
                <div class="price">
                    <span class="original">24,99€</span><span class="discounted">12,99€</span>
                </div>
                <div class="rating">
                    ⭐⭐⭐⭐⭐ (4.6)
                </div>
                <button class="btn-secondary">Ajouter au panier</button>
            </div>
            <div class="product-card">
                <img src="https://www.newboy.re/wp-content/uploads/2022/09/IMG_7709-mode_enfant_newboy10-e1662634904907.jpg" alt="Produit">
                <h3>Vêtement enfant</h3>
                <div class="price">
                    <span class="original">18,99€</span><span class="discounted">8,99€</span>
                </div>
                <div class="rating">
                    ⭐⭐⭐⭐☆ (4.1)
                </div>
                <button class="btn-secondary">Ajouter au panier</button>
            </div>
        </div>
    </div>
</section>

<?php include 'everywere/footer.php'; ?>

</body>
</html>