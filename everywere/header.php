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
                <a href="index.php" style="display: flex; align-items: center; text-decoration: none;"><img src="everywere/images/logo market.png" alt="Logo" style="height: 40px;"></a>
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
        <button type="button" class="btn-google" id="btn-google-login"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.45v1.32h-5.45V24h6.93c.55-.46.98-1.06 1.3-1.7v-2.77h-2.6v-1.32h2.6v-2.77C22.56 14.75 23 12.97 22.56 11.25z"/></svg> Se connecter avec Google</button>
        <p class="or-divider">ou</p>
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
            <p class="signup-link">N'avez-vous pas déjà un compte? <a href="#" id="btn-signup">Inscrivez-vous</a>.</p>
            <p class="terms-text">En vous connectant, vous acceptez notre <a href="#">Conditions d'utilisation</a> et reconnaissez que vous avez lu notre <a href="#">Politique de confidentialité</a>.</p>
        </form>
    </div>

    <!-- Signup Popup -->
    <div class="signup-overlay" id="signup-overlay"></div>
    <div class="signup-popup" id="signup-popup">
        <div class="login-header">
            <h2>S'inscrire</h2>
            <button class="signup-close" id="signup-close"><i class="bi bi-x"></i></button>
        </div>
        <p class="security-note">Toutes les données sont protégées</p>
        <button type="button" class="btn-google" id="btn-google-signup"><svg width="18" height="18" viewBox="0 0 24 24"><path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path fill="#34A853" d="M12 23c2.97 0 5.66-1 7.57-2.64l-3.57-2.77c-.98.66-2.23 1.09-3.6 1.35v2.77A9 9 0 0 0 20.37 12c0-1.05-.22-2.05-.6-2.97V6.36H8.44a9 9 0 0 0 0 18z"/><path fill="#FBBC05" d="M6.19 14.45a5.52 5.52 0 0 1 0-3.9H12V6.36c1.45 0 2.75.45 3.81 1.31l2.83-2.83A8.99 8.99 0 0 0 12 5c-5 0-9 3.56-9 8s4 8 9 8c2.25 0 4.16-.93 5.56-2.32l-2.85-2.23c-.9.58-1.97.92-3.1.92-2.53 0-4.68-1.67-5.49-3.94z"/><path fill="#EA4335" d="M5 6.36l2.85 2.23A6 6 0 0 1 12 5c1.45 0 2.75.45 3.81 1.31l2.83-2.83A8.99 8.99 0 0 0 12 3C7 3 3 5.38 3 12s4 9 9 9c4.93 0 8.56-3.69 8.56-9 0-1.05-.14-2.1-.38-3.05L5 6.36z"/></svg> S'inscrire avec Google</button>
        <p class="or-divider">ou</p>
        <form class="signup-form" id="signup-form">
            <div class="form-group">
                <label for="signup-email">E-mail</label>
                <input type="email" id="signup-email" name="signup-email" required>
            </div>
            <div class="form-group">
                <label for="signup-password">Mot de passe</label>
                <input type="password" id="signup-password" name="signup-password" required>
            </div>
            <div class="form-group">
                <label for="signup-confirm-password">Confirmer le mot de passe</label>
                <input type="password" id="signup-confirm-password" name="signup-confirm-password" required>
            </div>
            <button type="submit" class="btn-signup">S'inscrire</button>
            <p class="login-link">Vous avez déjà un compte? <a href="#" id="btn-login-back">Connectez-vous</a>.</p>
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
