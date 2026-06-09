<header>
    <div class="header-bg">
        <div class="container">
            <div class="logo-wrapper">
                <div class="logo-section left"><i class="bi bi-bike"></i> Livraison rapide</div>
                <div class="logo-section center"><i class="bi bi-phone"></i> Télécharger notre App</div>
                <div class="logo-section right">Vendre sur la plateforme</div>
            </div>
        </div>
        <div class="header-beige">
            <div class="header-actions">
                <div class="nos-ventes" id="btn-best-seller" style="cursor: pointer;"><a href="best_seller.php" style="text-decoration: none; color: inherit;">Nos meilleur ventes</a></div>

                <!-- Bouton Toutes les catégories -->
                <div class="toutes-categories" id="btn-categories">
                    <i class="bi bi-list"></i> Toutes les catégories
                </div>

                <form class="search-bar">
                    <input type="text" placeholder="Rechercher des articles...">
                    <button type="submit"><i class="bi bi-search"></i></button>
                </form>
                <div class="icons-wrapper">
                    <div class="cart-icon"><i class="bi bi-cart"></i></div>
<div class="person-icon" id="btn-login" style="cursor: pointer;"><i class="bi bi-person"> Se connecter</i></div>
                </div>
            </div>
        </div>
    </header>

    <!-- Login Popup -->
    <div class="login-overlay" id="login-overlay"></div>
    <div class="login-popup" id="login-popup">
        <div class="login-header">
            <h2>Se connecter</h2>
            <button class="login-close" id="login-close"><i class="bi bi-x"></i></button>
        </div>
        <p class="security-note">Toutes les données sont protégées</p>
        <form class="login-form" id="login-form">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" required>
                <div class="forgot-password"><a href="#">Mot de passe oublié ?</a></div>
            </div>
            <button type="submit" class="btn-login">Se connecter</button>
            <p class="signup-link">N'avez-vous pas déjà un compte? <a href="#">Inscrivez-vous</a>.</p>
            <p class="terms-text">En vous connectant, vous acceptez notre <a href="#">Conditions d'utilisation</a> et reconnaissez que vous avez lu notre <a href="#">Politique de confidentialité</a>.</p>
        </form>
    </div>

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
