<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyLibrairie - Logiciel de Caisse pour Librairie et Papeterie</title>

    <!-- SEO Optimisation (Moteurs de recherche & LLM) -->
    <meta name="description"
        content="Découvrez MyLibrairie, le logiciel de caisse et de gestion complet (POS) pour votre librairie et papeterie. Gérez vos stocks, factures, clients et fournisseurs en toute simplicité.">
    <meta name="keywords"
        content="logiciel de caisse, système de caisse, caisse enregistreuse, POS, point de vente, gestion de stock, inventaire, librairie, vente de livres, bouquinerie, papeterie, fournitures de bureau, matériels bureautiques, accessoires bureautiques, fournitures scolaires, facturation, devis, bons de livraison, logiciel de gestion, gestion commerciale, logiciel magasin, commerce de détail">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="author" content="MyLibrairie">

    <!-- Optimisation Géo (SEO Local) -->
    <meta name="geo.region" content="MA" /> <!-- À adapter selon votre pays (ex: CA, BE, CH) -->
    <meta name="geo.placename" content="Maroc" />

    <!-- Open Graph (Facebook, LinkedIn, etc.) -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="MyLibrairie - Logiciel de Caisse pour Librairie et Papeterie">
    <meta property="og:description"
        content="Le logiciel de caisse tout-en-un conçu pour booster vos ventes, gérer vos stocks et fidéliser vos clients en toute simplicité.">
    <meta property="og:image" content="{{ asset('images/hero.png') }}">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="MyLibrairie - Logiciel de Caisse POS">
    <meta name="twitter:description"
        content="Découvrez MyLibrairie, le logiciel de caisse complet pour la gestion de votre librairie et papeterie.">
    <meta name="twitter:image" content="{{ asset('images/hero.png') }}">

    <!-- Schema.org / JSON-LD (Essentiel pour les LLMs et Google Rich Snippets) -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "SoftwareApplication",
      "name": "MyLibrairie",
      "operatingSystem": "Web, Windows, macOS, Linux",
      "applicationCategory": "BusinessApplication",
      "about": "Logiciel de caisse et de gestion pour les professionnels de la librairie et de la papeterie.",
      "description": "MyLibrairie est une solution logicielle POS (Point de vente) complète intégrant la gestion des stocks, la facturation, le suivi client et fournisseur, spécifiquement conçue pour les librairies et papeteries.",
      "featureList": [
        "Caisse enregistreuse POS",
        "Gestion de stock",
        "Facturation et devis",
        "Gestion Clients & Fournisseurs",
        "Rapports de suivi et analytique",
        "Support 24/7"
      ],
      "offers": {
        "@@type": "Offer",
        "price": "0.00",
        "priceCurrency": "EUR"
      }
    }
    </script>

    <!-- Polices et Styles -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>

    <!-- Header / Navbar -->
    <header class="navbar">
        <div class="container nav-container">
            <a href="/" class="logo"
                style="display: flex; align-items: center; overflow: hidden; height: 60px; width: 180px; justify-content: center; border-radius: 8px;">
                <img src="{{ asset('images/logo.png') }}" alt="MyLibrairie POS"
                    style="height: 180px; width: auto; object-fit: cover; mix-blend-mode: multiply;">
            </a>
            <nav class="nav-links">
                <a href="#features">Fonctionnalités</a>
                <a href="#screenshots">Aperçu</a>
                <button onclick="document.getElementById('demoModal').style.display='flex'" class="btn-primary">Demander
                    accès au démo </button>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container hero-content">
            <div class="hero-text">
                <h1>Simplifiez la gestion de votre <span class="highlight">Librairie & Papeterie</span></h1>
                <p>Le logiciel de caisse (POS) tout-en-un conçu pour booster vos ventes, gérer vos stocks et fidéliser
                    vos clients en toute simplicité.</p>
                <div class="hero-buttons">
                    <a href="#contact" class="btn-primary">Essayez MyLibrairie</a>
                    <a href="#features" class="btn-secondary">Découvrir les fonctionnalités</a>
                </div>
            </div>
            <div class="hero-image-wrapper">
                <div class="glass-panel" style="padding: 10px; background: rgba(255, 255, 255, 0.1);">
                    <img src="{{ asset('images/hero.png') }}" alt="Papeterie Hero"
                        style="width: 100%; border-radius: 12px; box-shadow: 0 10px 25px rgba(0,0,0,0.2);">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features">
        <div class="container">
            <div class="section-heading">
                <h2>Tout ce dont vous avez besoin pour réussir</h2>
                <p>Une suite complète d'outils pour administrer votre commerce efficacement.</p>
            </div>

            <div class="features-grid">
                <!-- Feature 1 -->
                <div class="feature-card">
                    <div class="feature-icon">💰</div>
                    <h3>POS sur Comptoir</h3>
                    <p>Une interface de vente rapide et intuitive, optimisée pour le passage en caisse fluide avec
                        douchette code-barres.</p>
                </div>
                <!-- Feature 2 -->
                <div class="feature-card">
                    <div class="feature-icon">📄</div>
                    <h3>Factures, Devis & BL</h3>
                    <p>Générez et imprimez vos documents commerciaux en quelques clics : factures, devis, et bons de
                        livraison professionnels.</p>
                </div>
                <!-- Feature 3 -->
                <div class="feature-card">
                    <div class="feature-icon">👥</div>
                    <h3>Clients & Fournisseurs</h3>
                    <p>Suivez l'historique d'achats de vos clients, gérez les crédits et contrôlez vos commandes
                        fournisseurs facilement.</p>
                </div>
                <!-- Feature 4 -->
                <div class="feature-card">
                    <div class="feature-icon">📦</div>
                    <h3>Gestion de Stock</h3>
                    <p>Suivi en temps réel de votre inventaire de livres et articles scolaires avec alertes de rupture.
                    </p>
                </div>
                <!-- Feature 5 -->
                <div class="feature-card">
                    <div class="feature-icon">📊</div>
                    <h3>Rapports de Suivi</h3>
                    <p>Plus de 20 rapports détaillés pour analyser vos ventes, vos marges et la performance globale de
                        votre commerce.</p>
                </div>
                <!-- Feature 6 -->
                <div class="feature-card">
                    <div class="feature-icon">🎧</div>
                    <h3>Support Intégré 24/7</h3>
                    <p>Des outils de support directement intégrés pour assurer une disponibilité et une assistance 24
                        heures sur 24, 7 jours sur 7.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Screenshots Section -->
    <section id="screenshots" class="screenshots bg-light">
        <div class="container">
            <div class="section-heading">
                <h2>Découvrez l'interface</h2>
                <p>Un design épuré pensé pour une prise en main immédiate.</p>
            </div>

            <div class="screens-carousel">
                <div class="screen-card">
                    <img src="{{ asset('images/CAP3.png') }}" alt="Tableau de bord"
                        style="width: 100%; height: auto; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); margin-bottom: 15px;">
                    <h4>Tableau de bord</h4>
                </div>
                <div class="screen-card">
                    <img src="{{ asset('images/CAP1.png') }}" alt="Interface Caisse"
                        style="width: 100%; height: auto; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); margin-bottom: 15px;">
                    <h4>Caisse Enregistreuse</h4>
                </div>
                <div class="screen-card">
                    <img src="{{ asset('images/CAP4.png') }}" alt="Modèle de Facture"
                        style="width: 100%; height: auto; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); margin-bottom: 15px;">
                    <h4>Listes Intelligentes</h4>
                </div>
            </div>
            <div style="text-align: center; margin-top: 40px;">
                <button onclick="document.getElementById('demoModal').style.display='flex'" class="btn-primary">Demander
                    accès au démo</button>
            </div>
        </div>
    </section>

    <!-- CTA & Contact Section -->
    <section id="contact" class="cta-section">
        <div class="container cta-container">
            <div class="cta-text">
                <h2>Prêt à transformer votre commerce ?</h2>
                <p>Laissez-nous vos coordonnées, notre équipe vous contactera sur WhatsApp avec une offre personnalisée.
                </p>
            </div>
            <div class="cta-form-wrapper glass-panel">
                <form id="contactForm">
                    <div class="form-group">
                        <label for="name">Nom / Raison Sociale</label>
                        <input type="text" id="name" name="name" required placeholder="Ex: Librairie Al Amal">
                    </div>
                    <div class="form-group">
                        <label for="phone">Numéro de Téléphone (WhatsApp)</label>
                        <input type="tel" id="phone" name="phone" required placeholder="Ex: 06 12 34 56 78">
                    </div>
                    <div class="form-group">
                        <label for="message">Message (Optionnel)</label>
                        <textarea id="message" name="message" rows="3"
                            placeholder="Avez-vous des besoins spécifiques ?"></textarea>
                    </div>
                    <button type="submit" class="btn-submit" id="submitBtn">
                        Envoyer et discuter sur WhatsApp
                    </button>
                    <div id="formMessage" class="form-message"></div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2026 MyLibrairie. Tous droits réservés.</p>
        </div>
    </footer>



    <!-- Demo Modal -->
    <div id="demoModal" class="modal">
        <div class="modal-content" style="background-color: #1f2937; color: white;">
            <span class="close-modal" style="color: white;"
                onclick="document.getElementById('demoModal').style.display='none'">&times;</span>
            <h2>Demander accès au démo</h2>
            <p>Remplissez ce formulaire pour recevoir votre accès démo sur WhatsApp.</p>
            <form id="demoForm">
                <div class="form-group">
                    <label for="demo-name">Nom et prénom</label>
                    <input type="text" id="demo-name" name="name" required placeholder="Ex: Ahmed TAZI">
                </div>
                <div class="form-group">
                    <label for="demo-phone">Numéro de Téléphone (WhatsApp)</label>
                    <input type="tel" id="demo-phone" name="phone" required placeholder="Ex: 06 66 66 66 66">
                </div>
                <div class="form-group">
                    <label for="demo-city">Ville</label>
                    <input type="text" id="demo-city" name="city" required placeholder="Ex: Casablanca">
                </div>
                <button type="submit" class="btn-submit" id="demoSubmitBtn">
                    Demander l'accès
                </button>
                <div id="demoFormMessage" class="form-message"></div>
            </form>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>