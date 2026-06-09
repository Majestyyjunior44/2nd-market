<nav class="pagination">
    <div class="container">
        <ul class="pagination-list">
            <li><a href="#" class="pagination-link active">1</a></li>
            <li><a href="#" class="pagination-link">2</a></li>
            <li><a href="#" class="pagination-link">3</a></li>
            <li><a href="#" class="pagination-link">4</a></li>
            <li><a href="#" class="pagination-link">5</a></li>
            <li><a href="#" class="pagination-link next">›</a></li>
        </ul>
    </div>
</nav>

<footer>
    <div class="container">
        <div class="footer-links">
            <div><h3>À propos</h3><a href="#">Nous connaître</a><a href="#">À propos de Temu</a><a href="#">Programme Affilié et Influenceur : Participez pour gagner</a><a href="#">Contactez-nous</a><a href="#">Informations de l'entreprise – Mentions légales</a><a href="#">Carrières</a><a href="#">Presse</a><a href="#">Programme de plantation d'arbres de Temu</a></div>
            <div><h3>Service client</h3><a href="#">Politique de retour et de remboursement</a><a href="#">Politique en matière de propriété intellectuelle</a><a href="#">Informations de livraison</a><a href="#">Alertes sur la sécurité des produits</a><a href="#">Signaler une activité suspecte</a><a href="#">Montant min. de commande</a></div>
            <div><h3>Aide</h3><a href="#">Centre d'aide et FAQ</a><a href="#">Centre de sécurité</a><a href="#">Protection des achats Temu</a><a href="#">Devenir partenaire de Temu</a><a href="#">Accessibilité</a><a href="#">Centre de transparence</a><a href="#">Conformité REP de Temu</a></div>
            <div><h3>Suivez-nous</h3><a href="#">Facebook</a><a href="#">Instagram</a><a href="#">TikTok</a></div>
        </div>
        <p class="copyright">© 2026 TEMU. Tous droits réservés.</p>
    </div>
</footer>

<script>
    const btnCategories = document.getElementById('btn-categories');
    const megaMenu      = document.getElementById('mega-menu');
    const overlay       = document.getElementById('mega-overlay');
    const sidebarItems  = document.querySelectorAll('.mm-sidebar-item');
    const panels        = document.querySelectorAll('.mm-panel');

    function openMenu() {
        megaMenu.classList.add('open');
        overlay.classList.add('open');
        btnCategories.classList.add('active');
        document.body.classList.add('menu-open');
    }
    function closeMenu() {
        megaMenu.classList.remove('open');
        overlay.classList.remove('open');
        btnCategories.classList.remove('active');
        document.body.classList.remove('menu-open');
    }

    btnCategories.addEventListener('click', function(e) {
        e.stopPropagation();
        megaMenu.classList.contains('open') ? closeMenu() : openMenu();
    });

    overlay.addEventListener('click', closeMenu);

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') closeMenu();
    });

    sidebarItems.forEach(function(item) {
        item.addEventListener('mouseenter', function() {
            sidebarItems.forEach(i => i.classList.remove('active'));
            panels.forEach(p => p.classList.remove('active'));
            item.classList.add('active');
            const panelId = 'panel-' + item.dataset.panel;
            const panel = document.getElementById(panelId);
            if (panel) panel.classList.add('active');
        });
    });

    const btnLogin = document.getElementById('btn-login');
    const loginPopup = document.getElementById('login-popup');
    const loginOverlay = document.getElementById('login-overlay');
    const loginClose = document.getElementById('login-close');

    btnLogin.addEventListener('click', function() {
        loginPopup.classList.add('open');
        loginOverlay.classList.add('open');
        document.body.classList.add('menu-open');
    });

    loginClose.addEventListener('click', function() {
        loginPopup.classList.remove('open');
        loginOverlay.classList.remove('open');
        document.body.classList.remove('menu-open');
    });

    loginOverlay.addEventListener('click', function() {
        loginPopup.classList.remove('open');
        loginOverlay.classList.remove('open');
        document.body.classList.remove('menu-open');
    });

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && loginPopup.classList.contains('open')) {
            loginPopup.classList.remove('open');
            loginOverlay.classList.remove('open');
            document.body.classList.remove('menu-open');
        }
    });

    const categoryDropdown = document.getElementById('category-dropdown');
    
    if (categoryDropdown) {
        document.querySelector('.category-selected').addEventListener('click', function(e) {
            e.stopPropagation();
            categoryDropdown.classList.toggle('open');
        });
        
        document.querySelectorAll('.category-options .mm-sidebar-item').forEach(function(item) {
            item.addEventListener('click', function() {
                document.querySelector('.category-selected').innerHTML = this.textContent + ' <span class="mm-arrow">›</span>';
                categoryDropdown.classList.remove('open');
            });
        });
        
        document.addEventListener('click', function() {
            if (categoryDropdown.classList.contains('open')) {
                categoryDropdown.classList.remove('open');
            }
        });
    }
</script>