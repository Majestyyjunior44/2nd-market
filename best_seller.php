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

<div class="mega-menu-overlay" id="mega-overlay"></div>

<div class="mega-menu-wrapper" id="mega-menu">
    <nav class="mm-sidebar">
        <div class="mm-sidebar-item active" data-panel="chaussures-homme">Chaussures homme <span class="mm-arrow">›</span></div>
        <div class="mm-sidebar-item" data-panel="maison">Maison et Cuisine <span class="mm-arrow">›</span></div>
        <div class="mm-sidebar-item" data-panel="vetements-femme">Vêtements femme <span class="mm-arrow">›</span></div>
        <div class="mm-sidebar-item" data-panel="grandes-tailles-femme">Grandes tailles femme <span class="mm-arrow">›</span></div>
        <div class="mm-sidebar-item" data-panel="chaussures-femme">Chaussures femme <span class="mm-arrow">›</span></div>
        <div class="mm-sidebar-item" data-panel="lingerie">Lingerie et Pyjamas femme <span class="mm-arrow">›</span></div>
        <div class="mm-sidebar-item" data-panel="vetements-homme">Vêtements homme <span class="mm-arrow">›</span></div>
        <div class="mm-sidebar-item" data-panel="grandes-tailles-homme">Grandes tailles homme <span class="mm-arrow">›</span></div>
        <div class="mm-sidebar-item" data-panel="pyjamas">Pyjamas et Sous-vêtem... <span class="mm-arrow">›</span></div>
        <div class="mm-sidebar-item" data-panel="sports">Sports et Activités d'extér... <span class="mm-arrow">›</span></div>
        <div class="mm-sidebar-item" data-panel="bijoux">Bijoux et Accessoires <span class="mm-arrow">›</span></div>
        <div class="mm-sidebar-item" data-panel="beaute">Beauté et Santé <span class="mm-arrow">›</span></div>
        <div class="mm-sidebar-item" data-panel="jouets">Jouets et Jeux <span class="mm-arrow">›</span></div>
    </nav>

    <div class="mm-content">
        <div class="mm-panel active" id="panel-chaussures-homme">
            <div class="mm-panel-title">Tout Chaussures homme <span class="mm-chevron">›</span></div>
            <div class="mm-grid">
                <div class="mm-cat">
                    <div class="mm-img-wrap"><img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=80&h=80&fit=crop" alt="Chaussures décontractées"><span class="mm-badge">HOT</span></div>
                    <span class="mm-label">Chaussures décontractées homme</span>
                </div>
                <div class="mm-cat">
                    <div class="mm-img-wrap"><img src="https://images.unsplash.com/photo-1603487742131-4160ec999306?w=80&h=80&fit=crop" alt="Sandales"></div>
                    <span class="mm-label">Sandales homme</span>
                </div>
                <div class="mm-cat">
                    <div class="mm-img-wrap"><img src="https://images.unsplash.com/photo-1614252235316-8c857d38b5f4?w=80&h=80&fit=crop" alt="Mocassins"></div>
                    <span class="mm-label">Mocassins et Chaussures sans lacets...</span>
                </div>
                <div class="mm-cat">
                    <div class="mm-img-wrap"><img src="https://images.unsplash.com/photo-1548036328-c9fa89d128fa?w=80&h=80&fit=crop" alt="Semi-formelles"></div>
                    <span class="mm-label">Chaussures semi-formelles...</span>
                </div>
                <div class="mm-cat">
                    <div class="mm-img-wrap"><img src="https://images.unsplash.com/photo-1625048638099-f2d2c52e5e17?w=80&h=80&fit=crop" alt="Pantoufles"><span class="mm-badge mm-badge-sol">SOL</span></div>
                    <span class="mm-label">Pantoufles homme</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-header">
    <h2 class="page-title">Nos meilleures ventes</h2>
    <div class="header-filters">
        <div class="filter-buttons">
            <button class="filter-btn active">30 derniers jours</button>
            <button class="filter-btn">14 derniers jours</button>
            <button class="filter-btn">7 derniers jours</button>
        </div>
        <div class="category-filter">
            <label for="category-select">Filtrer par catégorie:</label>
            <select id="category-select">
                <option value="">Toutes les catégories</option>
                <option value="chaussures-homme">Chaussures homme</option>
                <option value="maison">Maison et Cuisine</option>
                <option value="vetements-femme">Vêtements femme</option>
                <option value="grandes-tailles-femme">Grandes tailles femme</option>
                <option value="chaussures-femme">Chaussures femme</option>
                <option value="lingerie">Lingerie et Pyjamas femme</option>
                <option value="vetements-homme">Vêtements homme</option>
                <option value="grandes-tailles-homme">Grandes tailles homme</option>
                <option value="pyjamas">Pyjamas et Sous-vêtemnts</option>
                <option value="sports">Sports et Activités d'extérieur</option>
                <option value="bijoux">Bijoux et Accessoires</option>
                <option value="beaute">Beauté et Santé</option>
                <option value="jouets">Jouets et Jeux</option>
            </select>
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