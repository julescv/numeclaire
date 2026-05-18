<?php

include __DIR__."/repository/produitRepository.php";

?>


<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Numeclair</title>
  <link rel="shortcut icon" href="/image/N_de_numerclair.png" type="image/x-icon">
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <a class="skip" href="#contenu">Aller au contenu</a>

  <!-- HEADER / NAV -->
  <header class="site-header">
    <div class="container">
      <a href="#">
        <img src="image/N_de_numerclair.png" alt="logo" style="width: 40px; height: 40px;">
      </a>
      <div class="brand" aria-label="Numéclair - Accueil">
        <img src="assets/logo.png" alt="" class="logo" onerror="this.style.display='none'">
        <span class="wordmark">Numéclair</span>
      </div>
      <nav aria-label="Navigation principale">
        <ul class="nav">
          
          <li><a href="#activites">Activités</a></li>
          <li><a href="#produits">Produits</a></li>
          <li><a href="#equipe">Équipe</a></li>
          <li><a href="#histoire">Histoire</a></li>
          <li><a href="#contact">Contact</a></li>
          <li>
            <button id="theme-toggle" class="btn ghost" style="margin-left:auto;">
              🌙 Mode sombre
            </button>
          </li>
 

        </ul>
      </nav>
    </div>
  </header>

  <main id="contenu">
    <!--  HERO -->
    <section id="accueil" class="hero" aria-labelledby="hero-title">
      <div class="container">
        <div class="hero-text">
          <div class="hero-logo-container">
            <img src="image/logo.png" alt="logo" style="width: 200px; height: 200px;">
          </div>
          <div class="hero-everything">

            <h1 id="hero-title">Numéclair</h1>
            <p class="tagline">L’innovation à la vitesse de la lumière</p>
            <p class="baseline">Votre partenaire pour la vente de matériel informatique.</p>
            <div class="cta-group">
              <a class="btn primary" href="#produits">Voir nos produits</a>
              <a class="btn ghost" href="#contact">Nous contacter</a>
            </div>  
          </div>
        </div>
      </div>
    </section> 


<!-- HERO -->

<!-- <section id="accueil" class="hero" aria-labelledby="hero-title">
  <div class="container">

    <div class="hero-text">
      <img src="image/logo.png" alt="logo" class="hero-logo">

      <div class="hero-text-content">
        < <p class="tagline">L’innovation à la vitesse de la lumière</p>
        <p class="baseline">Votre partenaire pour la vente de matériel informatique.</p>

        <div class="cta-group">
          #produitsVoir nos produits</a>
          #contactNous contacter</a>
        </div>
      </div>
    </div>

  </div>
</section> -->



    <!-- ACTIVITÉS -->
    <section id="activites" class="section" aria-labelledby="activites-title">
      <div class="container">
        <h2 id="activites-title">Activités</h2>
        <p class="lead">
          Numéclair est spécialisée dans la <strong>vente de matériel informatique</strong>.
        </p>
        <div class="features">
          <article class="feature">
            <h3>Conseil &amp; orientation</h3>
            <p>Nous aidons à choisir l’équipement adapté aux besoins (bureautique, gaming, pro).</p>
          </article>
          <article class="feature">
            <h3>Mise en service</h3>
            <p>Pré‑configuration et tests pour que tout fonctionne dès la première utilisation.</p>
          </article>
          <article class="feature">
            <h3>Suivi &amp; SAV</h3>
            <p>Accompagnement après achat et solutions rapides en cas de problème.</p>
          </article>
        </div>
      </div>
    </section>

    <!-- PRODUITS -->
    <section id="produits" class="section alt" aria-labelledby="produits-title">

    
<h3>Catalogue</h3>



<div style="margin-bottom: 20px;">
    <label class="cata-titre">Filtrer par catégorie :</label>
    <select id="category-filter" class="btn ghost">
        <option value="all">Toutes</option>
        <option value="ordinateur">Ordinateurs</option>
        <option value="peripherique">Périphériques</option>
        <option value="composant">Composants</option>
        <option value="reseau">Réseau</option>
    </select>
</div>


<table class="product-table">
  <thead>
    <tr>
      <th class="cata-titre">Image</th>   
      <th class="cata-titre" onclick="sortTable('name')">Nom ⬍</th>
      <th class="cata-titre" onclick="sortTable('brand')">Marque ⬍</th>
      <th class="cata-titre" onclick="sortTable('price')">Prix ⬍</th>
      <th class="cata-titre"></th>

    </tr>
  </thead>
  
<tbody id="product-list">

    <?php
    $produits = findAllProduits();
    foreach ($produits as $produit) : ?>
        <tr class='hidden-product' data-category=' <?= $produit['categorie'] ?>'>
        <td><img src='/image/produits/<?=  $produit['image'] ?>' class='p-img'></td>
        <td><?= $produit['designation_produit'] ?></td>
        <td><?= $produit['marque'] ?></td>
        <td data-price='<?=  $produit['prix_unitaire_produit']  ?> '> <?= $produit['prix_unitaire_produit'] ?> €</td>
        <td><button class='btn-add add-to-cart' data-name=' <?= $produit['designation_produit'] ?> ' data-price=' <?= $produit['prix_unitaire_produit'] ?> '>Ajouter</button></td>
        </tr>

    <?php endforeach; ?>
    


</tbody>

</table>

<button id="show-more-btn" class="btn ghost" style="margin-top: 20px;">
    Afficher plus
</button>


<h3>Panier</h3>
<div id="cart-container">
    <ul id="cart-items" aria-live="polite"></ul>
    <p><strong>Total :</strong> <span id="cart-total">0</span> €</p>

    <div id="cart-buttons" style="margin-top:10px; display:none; gap:10px; flex-wrap:wrap;">
        <button id="pay-cart" class="btn primary">Payer</button>
        <button id="clear-cart" class="btn ghost">Supprimer le panier</button>
    </div>
</div>



      <div class="container">
        <h2 id="produits-title">Produits</h2>
        <p class="lead">
          Aperçu de nos catégories phares (à personnaliser selon votre catalogue).
        </p>
        
        <div class="cards products">

            <article class="card open-modal" data-modal="modal-ordi">
                <h3>Ordinateurs</h3>
                <p>Portables, tours & mini‑PC.</p>
            </article>

            <article class="card open-modal" data-modal="modal-periph">
                <h3>Périphériques</h3>
                <p>Écrans, claviers, souris…</p>
            </article>

            <article class="card open-modal" data-modal="modal-compo">
                <h3>Composants</h3>
                <p>CPU, GPU, RAM…</p>
            </article>

            <article class="card open-modal" data-modal="modal-reseau">
                <h3>Réseau</h3>
                <p>Routeurs, Wi‑Fi…</p>
            </article>

        </div>

        <p class="note">💡 Clique sur les sections pour plus de détails!</p>
      </div>
    </section>

    <!-- ÉQUIPE -->
    <section id="equipe" class="section" aria-labelledby="equipe-title">
      <div class="container">
        <h2 id="equipe-title">Notre équipe</h2>

        <div class="cards team">
          <!-- Jeanne Coulet -->
          <article class="card person">
            <h2 class="name">COULET Jeanne</h2>
            <p class="role">Vendeuse</p>
            <ul class="bullets">
              <li>Gestion caisse</li>
              <li>Rapport des ventes</li>
            </ul>
            <p>fiche de poste</p><a href="Fiche de Poste/Fiche_COULET_Jeanne_TABLE.pdf" class="download"><strong>téléchargement⬇️</strong></a>
          </article>

          <!-- Jean-Pierre Bôle -->
          <article class="card person">
            <h2 class="name">BOLE Jean-Pierre</h2>
            <p class="role">Conseiller des ventes</p>
            <ul class="bullets">
              <li>Conseil clients</li>
              <li>Aide à l’achat</li>
            </ul>
            <p>fiche de poste</p><a href="Fiche de Poste/Fiche_BOLE_Jean-Pierre_TABLE.pdf" class="download"><strong>téléchargement⬇️</strong></a>
          </article>

          <!-- Augustin Jean-Petit -->
          <article class="card person">
            <h2 class="name">JEAN-PETIT Augustin</h2>
            <p class="role">CEO</p>
            <ul class="bullets">
              <li>Direction et pilotage de l’entreprise</li>
              <li>Management des équipes</li>
            </ul>
            <p>fiche de poste</p><a href="Fiche de Poste/Fiche_JEAN-PETIT_Augustin_TABLE.pdf" class="download"><strong>téléchargement⬇️</strong></a>
          </article>

          <!-- Aaron Loeb -->
          <article class="card person">
            <h2 class="name">LOEB Aaron</h2>
            <p class="role">Chef d’équipe</p>
            <ul class="bullets">
              <li>Encadrement du personnel</li>
              <li>Organisation des missions</li>
            </ul>
            <p>fiche de poste</p><a href="Fiche de Poste/Fiche_LOEB_Aaron_TABLE.pdf" class="download"><strong>téléchargement⬇️</strong></a>
          </article>

          <!-- Frank Drew -->
          <article class="card person">
            <h2 class="name">DREW Frank</h2>
            <p class="role">Gérant des stocks</p>
            <ul class="bullets">
              <li>Gestion des stocks</li>
              <li>Réassorts réguliers</li>
            </ul>
            <p>fiche de poste</p><a href="Fiche de Poste/Fiche_DREW_Frank_TABLE.pdf" class="download"><strong>téléchargement⬇️</strong></a>
          </article>

          <!-- Pierrot Jaquet -->
          <article class="card person">
            <h2 class="name">JAQUET Pierrot</h2>
            <p class="role">Manager des ventes</p>
            <ul class="bullets">
              <li>Gestion des ventes &amp; promotions</li>
              <li>Déploiement des plans d’action</li>
            </ul>
            <p>fiche de poste</p><a href="Fiche de Poste/Fiche_JAQUET_Pierrot_TABLE.pdf" class="download"><strong>téléchargement⬇️</strong></a>
          </article>

          <!-- Jamie Chastain -->
          <article class="card person">
            <h2 class="name">CHASTAIN Jamie</h2>
            <p class="role">Livreur</p>
            <ul class="bullets">
              <li>Livraisons et transport</li>
              <li>Vérification des bons de livraison</li>
            </ul>
            <p>fiche de poste</p><a href="Fiche de Poste/Fiche_CHASTAIN_Jamie_TABLE.pdf" class="download"><strong>téléchargement⬇️</strong></a>
          </article>
        </div>
      </div>
    </section>

    <!-- HISTOIRE -->
    
    <section id="histoire" class="section alt" aria-labelledby="histoire-title">
      <div class="container">
        <h2 id="histoire-title">Notre histoire</h2>
        <p class="lead">3 étapes clés qui ont forgé Numéclair.</p>

        <!-- ===== Flèche 3 parties (SVG responsive) ===== -->
        <figure class="arrow-steps" role="group" aria-label="Frise chronologique en forme de flèche, 3 étapes">
          <svg class="arrow-steps-svg" viewBox="0 0 1200 220" role="img" aria-labelledby="arrow-steps-title">
            <title id="arrow-steps-title">Notre histoire — 3 étapes</title>
            <desc>Trois segments : démarrage, croissance, aujourd’hui (pointe de flèche).</desc>

            <!-- Segment 1 : trapèze droit -->
            
              <a class="step-link" data-modal="modal-demarrage">
              <path class="step step-1"
                    d="M 20 30 L 360 30 L 410 110 L 360 190 L 20 190 Z" />
              <g class="step-text">
                <text x="190" y="90" class="step-title">Démarrage</text>
                <text x="190" y="125" class="step-sub">Création • 2019</text>
              </g>
            </a>

            <!-- Segment 2 : trapèze droit inversé -->
            <a class="step-link" data-modal="modal-croissance">
              
                <path class="step step-2"
                      d="M 360 30
                        L 690 30
                        L 740 110
                        L 690 190
                        L 360 190
                        L 410 110
                        Z" />

              <g class="step-text">
                <text x="550" y="90" class="step-title">Croissance</text>
                <text x="550" y="125" class="step-sub">Catalogue & équipe</text>
              </g>
            </a>

            
            <!-- Segment 3 : flèche (plus large et plus haute) -->
            <a class="step-link" data-modal="modal-aujourdhui">
            


              <path class="step step-3"
                    d="M 690 30
                        L 1020 30
                        L 1070 110
                        L 1020 190
                        L 690 190
                        L 740 110
                        Z"/>
                      <!-- "M 696 30
                        L 1026 30
                        L 1076 110
                        L 1026 190
                        L 696 190
                        L 746 110
                        Z"  -->
              <g class="step-text">
                <text x="920" y="95" class="step-title">Aujourd’hui</text>
                <text x="920" y="135" class="step-sub">Service & innovation</text>
              </g>
            </a>

          </svg>

          <figcaption class="arrow-caption small">
            Cliquez sur une étape pour plus d'informations.
          </figcaption>
        </figure>

      
      </div>
    </section>


    <!-- CONTACT -->
    <section id="contact" class="section" aria-labelledby="contact-title">
      <div class="container">
        <h2 id="contact-title">Contact</h2>
        <div class="contact-grid">
          <form class="contact-form" action="#" method="post">
            <div class="field">
              <label for="nom">Nom</label>
              <input id="nom" name="nom" type="text" required>
            </div>
            <div class="field">
              <label for="email">Email</label>
              <input id="email" name="email" type="email" required>
            </div>
            <div class="field">
              <label for="message">Message</label>
              <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <button class="btn primary" type="submit">Envoyer</button>
          </form>

          <div class="contact-info">
            <h3>Coordonnées</h3>
            <p><strong>Numéclair</strong><br>Adresse à compléter<br>25000 — Besançon</p>
            <p><a href="mailto:contact@numeclair.fr">contact@numeclair.fr</a><br>
               03 00 00 00 00</p>
            <p class="note">ℹ️ Remplace par les vraies informations de contact.</p>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer class="site-footer">
    <div class="container">
      <p>© <span id="year">2026</span> Numéclair — Tous droits réservés.</p>
      <p class="small">Jules Clerc-Vouillot 2026 </p>
    </div>
  </footer>




<!-- ====== MODALE ORDINATEURS ====== -->

<div class="modal" id="modal-ordi">

  <div class="modal-products">
      <?php 
      foreach ($produits as $produit) :
        if ($produit['category'] === 'ordinateur') : ?>
          
          <div class='modal-product'>
              <img src='/image/produits/<?= $produit['image'] ?>'>
              <div>
                  <h4><?= $produit['designation_produit'] ?></h4>
                  <p><?= $produit['description_produit'] ?></p>
                  <ul class='specs'>
                      <li>Marque : <?= $produit['marque'] ?></li>
                      <li>Prix : <?= $produit['prix_unitaire_produit'] ?> €</li>
                  </ul>
              </div>
          </div>
        <?php endif ?>  
        
      <?php endforeach ?>
<!--       

      <div class="modal-product">
          <img src="/image/produits/UltraBook 14 Ryzen 7.jpg ">
          <div>
              <h4>UltraBook 14 Ryzen 7</h4>
              <p>
                UltraBook compact et silencieux, parfait pour les déplacements et le télétravail.
              </p>
              <ul class="specs">
                  <li>Ryzen 7 7840U</li>
                  <li>16 Go RAM LPDDR5</li>
                  <li>SSD NVMe 512 Go</li>
                  <li>Écran 14" IPS 1080p</li>
                  <li>Autonomie 11h</li>
              </ul>
          </div>
      </div>

      <div class="modal-product">
          <img src="/image/produits/Portable Pro 15 i7.jpg">
          <div>
              <h4>Portable Pro 15 i7</h4>
              <p>Ordinateur portable professionnel conçu pour la performance et la productivité.</p>
              <ul class="specs">
                  <li>Intel Core i7‑1365U</li>
                  <li>16 Go RAM DDR4</li>
                  <li>SSD NVMe 1 To</li>
                  <li>Écran 15.6" 144 Hz</li>
                  <li>Châssis aluminium renforcé</li>
              </ul>
          </div>
          
      </div>

      <div class="modal-product">
          <img src="/image/produits/Tour Gamer RTX4060.jpg">
          <div>
              <h4>Tour Gamer RTX4060</h4>
              <p>PC gaming hautes performances pour jouer en 1080p/144 Hz sans compromis.</p>
              <ul class="specs">
                  <li>Intel i5‑13400F</li>
                  <li>16 Go DDR5 6000MHz</li>
                  <li>SSD NVMe 1 To</li>
                  <li>NVIDIA RTX 4060 8 Go</li>
                  <li>Boîtier RGB ventilé</li>
              </ul>
          </div>
          
      </div>

      <div class="modal-product">
          <img src="/image/produits/Mini-PC Pro i5.jpg">
          <div>
              <h4>Mini‑PC Pro i5</h4>
              <p>Mini‑PC économique et silencieux, idéal pour la bureautique et les environnements compacts.</p>
              <ul class="specs">
                  <li>Intel i5‑1240P</li>
                  <li>16 Go RAM</li>
                  <li>SSD NVMe 512 Go</li>
                  <li>Wi‑Fi 6 + Bluetooth 5.2</li>
                  <li>Très faible consommation</li>
              </ul>
          </div>
          
      </div> -->

  </div>

</div>




<!-- ====== MODALE PERIPHERIQUES ====== -->

<div class="modal" id="modal-periph">
  
    

<div class="modal-products grande-modale">

      <!-- Écran 27p 144Hz -->
      <div class="modal-product periph-large">
          <img src="/image/produits/Écran 27p 144Hz.jpg">
          <div>
              <h4>Écran 27" 144Hz</h4>
              <p class="product-desc">Moniteur immersif idéal pour le gaming et la création, offrant fluidité et couleurs fidèles. Parfait pour profiter pleinement de vos jeux et projets graphiques.</p>
              <ul class="specs">
                  <li>Dalle IPS 27" — 144Hz</li>
                  <li>Résolution 1080p Full HD</li>
                  <li>Couverture 99% sRGB</li>
                  <li>Faible latence 1 ms</li>
                  <li>Compatible FreeSync</li>
              </ul>
              <div class="product-cta">Ajouter au panier</div>
          </div>
          
      </div>

      <!-- Souris Gaming RGB -->
      <div class="modal-product periph-large">
          <img src="/image/produits/Souris Gaming RGB 12000DPI.jpg">
          <div>
              <h4>Souris Gaming RGB 12000 DPI</h4>
              <p class="product-desc">Souris ergonomique à rétro‑éclairage RGB, parfaite pour les FPS et les environnements pro. Prenez l'avantage sur vos adversaires avec une précision extrême.</p>
              <ul class="specs">
                  <li>Capteur 12000 DPI</li>
                  <li>RGB personnalisable</li>
                  <li>7 boutons programmables</li>
                  <li>Conception ultra‑légère 78g</li>
                  <li>Clics garantis 20 millions</li>
              </ul>
              <div class="product-cta">Ajouter au panier</div>
          </div>
          
      </div>

      <!-- Clavier mécanique RGB -->
      <div class="modal-product periph-large">
          <img src="/image/produits/Clavier mécanique RGB.webp">
          <div>
              <h4>Clavier mécanique RGB</h4>
              <p class="product-desc">Clavier robuste et réactif équipé de switches mécaniques pour un confort de frappe optimal. Idéal pour les longues sessions de jeu ou de travail.</p>
              <ul class="specs">
                  <li>Switches mécaniques rouges</li>
                  <li>Rétro‑éclairage RGB dynamique</li>
                  <li>Anti‑ghosting complet</li>
                  <li>Châssis aluminium brossé</li>
                  <li>Repose-poignet amovible</li>
              </ul>
              <div class="product-cta">Ajouter au panier</div>
          </div>
          
      </div>

      <!-- Imprimante Wi‑Fi A4 -->
      <div class="modal-product periph-large">
          <img src="/image/produits/Imprimante Wi‑Fi A4.webp">
          <div>
              <h4>Imprimante Wi‑Fi A4</h4>
              <p class="product-desc">Imprimante compacte et économique avec connexion sans fil pour la maison et le bureau. Imprimez depuis n'importe quel appareil sans contrainte de câbles.</p>
              <ul class="specs">
                  <li>Format A4 — Impression couleur</li>
                  <li>Connexion Wi‑Fi / AirPrint</li>
                  <li>Mode éco encre</li>
                  <li>Vitesse 18 ppm</li>
              </ul>
              <div class="product-cta">Ajouter au panier</div>
          </div>
          
      </div>

  </div>

  </div>
</div>




<!-- ====== MODALE COMPOSANTS ====== -->

<div class="modal" id="modal-compo">
  
  <div class="modal-products">

      <!-- CPU -->
      <div class="modal-product">
          <img src="/image/produits/CPU 6C12T 4.8GHz.jpg">
          <div>
              <h4>CPU 6C/12T 4.8GHz</h4>
              <p class="product-desc">Processeur polyvalent idéal pour le gaming et la bureautique avancée. Profitez d'une puissance de calcul exceptionnelle pour tous vos projets.</p>
              <ul class="specs">
                  <li>6 cœurs / 12 threads</li>
                  <li>Boost jusqu'à 4,8 GHz</li>
                  <li>Gravure 6 nm</li>
                  <li>Compatible DDR4 / DDR5</li>
                  <li>TDP 65W</li>
              </ul>
              <div class="product-cta">Ajouter au panier</div>
          </div>
          
      </div>

      <!-- GPU -->
      <div class="modal-product">
          <img src="/image/produits/GPU 8Go GDDR6.jpg">
          <div>
              <h4>GPU 8 Go GDDR6</h4>
              <p class="product-desc">Carte graphique idéale pour le 1080p et la création de contenu légère. Lancez-vous dans vos jeux préférés ou vos créations sans ralentissement.</p>
              <ul class="specs">
                  <li>8 Go mémoire GDDR6</li>
                  <li>Architecture NVIDIA dernière génération</li>
                  <li>Sorties HDMI / DP</li>
                  <li>Compatible VR</li>
              </ul>
              <div class="product-cta">Ajouter au panier</div>
          </div>
          
      </div>

      <!-- SSD -->
      <div class="modal-product">
          <img src="/image/produits/SSD NVMe 1To PCIe 4.0.png">
          <div>
              <h4>SSD NVMe 1 To PCIe 4.0</h4>
              <p class="product-desc">Stockage ultra‑rapide idéal pour accélérer Windows et les jeux. Dites adieu aux temps de chargement longs et gagnez en productivité.</p>
              <ul class="specs">
                  <li>Lecture 7000 Mo/s</li>
                  <li>Écriture 5000 Mo/s</li>
                  <li>Format M.2 2280</li>
                  <li>Durée de vie 600 TBW</li>
              </ul>
              <div class="product-cta">Ajouter au panier</div>
          </div>
         
      </div>

      <!-- RAM -->
      <div class="modal-product">
          <img src="/image/produits/RAM 32Go 6000MHz.jpg">
          <div>
              <h4>RAM 32 Go 6000 MHz</h4>
              <p class="product-desc">Mémoire vive haute fréquence pour une fluidité exceptionnelle. Multitâche sans limite et performances accrues pour votre système.</p>
              <ul class="specs">
                  <li>32 Go (2×16 Go)</li>
                  <li>6000 MHz DDR5</li>
                  <li>Profil XMP/EXPO</li>
                  <li>Latence CL32</li>
              </ul>
              <div class="product-cta">Ajouter au panier</div>
          </div>
          
      </div>

  </div>

  </div>
</div>



<!-- ====== MODALE RÉSEAU ====== -->

<div class="modal" id="modal-reseau">
  
    
<div class="modal-products">

    <!-- Routeur Wi‑Fi 6 -->
    <div class="modal-product">
        <img src="/image/produits/Routeur Wi‑Fi 6 AX3000.jpg">
        <div>
            <h4>Routeur Wi‑Fi 6 AX3000</h4>
            <p>Routeur haute performance garantissant une connexion stable et ultra‑rapide.</p>
            <ul class="specs">
                <li>Wi‑Fi 6 — Débit 3000 Mbps</li>
                <li>4 antennes haut gain</li>
                <li>Couverture jusqu’à 120 m²</li>
                <li>Mode gaming low‑latency</li>
            </ul>
        </div>
        
    </div>

    <!-- Pack Mesh -->
    <div class="modal-product">
        <img src="/image/produits/Pack Mesh Wi‑Fi 6 (x2).jpg">
        <div>
            <h4>Pack Mesh Wi‑Fi 6 (x2)</h4>
            <p>Couverture Wi‑Fi totale pour les grandes maisons et entreprises.</p>
            <ul class="specs">
                <li>2 modules Mesh Wi‑Fi 6</li>
                <li>Couverture 350 m²</li>
                <li>Itinérance intelligente</li>
                <li>Configuration simplifiée</li>
            </ul>
        </div>
        
    </div>

    <!-- Switch 8 ports -->
    <div class="modal-product">
        <img src="/image/produits/Switch 8 ports Gigabit.jpg">
        <div>
            <h4>Switch 8 ports Gigabit</h4>
            <p>Switch réseau compact avec ports Gigabit pour une distribution efficace.</p>
            <ul class="specs">
                <li>8 ports RJ45 Gigabit</li>
                <li>Ventilation passive silencieuse</li>
                <li>Installation plug‑and‑play</li>
            </ul>
        </div>
       
    </div>

    <!-- NAS -->
    <div class="modal-product">
        <img src="/image/produits/NAS 2 baies.jpg">
        <div>
            <h4>NAS 2 baies</h4>
            <p>Serveur de stockage sécurisé pour sauvegarder et partager vos données.</p>
            <ul class="specs">
                <li>2 baies HDD/SSD</li>
                <li>Support RAID 0/1</li>
                <li>Apps multimédia intégrées</li>
                <li>Accès à distance sécurisé</li>
            </ul>
        </div>
        
    </div>

</div>

  </div>
</div>


<!-- ===== MODALE HISTOIRE : Démarrage ===== -->

<div class="histoire" id="modal-demarrage">
    <div class="modal-content modal-history">
        <span class="close" data-close="modal-demarrage">×</span>

        <h2>2019 — Démarrage</h2>
        <p class="sub">La naissance d’une boutique dédiée au matériel informatique.</p>

        <div class="img-holder"><img src="/image/histoire/premiere-boutique.png" alt="Démarrage de Numéclair"></div>

        <p>
            Numéclair est créé en 2019 avec un objectif clair : proposer du 
            <strong>matériel informatique fiable, sélectionné et prêt à l’emploi</strong>
            pour les particuliers comme pour les petites entreprises de la région.
        </p>

        <p>
            Les premières ventes concernaient essentiellement des ordinateurs portables,
            quelques tours bureautiques et des accessoires indispensables comme les 
            écrans, souris ou claviers. Le fondateur souhaitait se démarquer en offrant 
            un conseil honnête et des produits testés avant mise en rayon.
        </p>

        <ul>
            <li>Ouverture du premier local à Besançon</li>
            <li>Début du catalogue : ordinateurs + périphériques</li>
            <li>Mise en place d’un petit espace de test et de démonstration</li>
            <li>Premiers partenariats avec des particuliers et auto‑entrepreneurs locaux</li>
        </ul>

        <p>
            Grâce au bouche‑à‑oreille, Numéclair commence rapidement à se faire une place
            dans le paysage local de l’informatique.
        </p>
    </div>
</div>


<!-- ===== MODALE HISTOIRE : Croissance ===== -->

<div class="histoire" id="modal-croissance">
    <div class="modal-content modal-history">
        <span class="close" data-close="modal-croissance">×</span>

        <h2>2022 — Croissance</h2>
        <p class="sub">Élargissement du catalogue et structuration de l’équipe.</p>

        <div class="img-holder"><img src="/image/histoire/materiel.png" alt="Croissance de Numéclair"></div>

        <p>
            En 2022, Numéclair franchit une étape importante : la boutique élargit 
            officiellement son catalogue en intégrant de nouvelles catégories 
            comme les <strong>composants PC</strong> et le <strong>réseau</strong>.
        </p>

        <p>
            Pour répondre à la demande croissante, l’équipe s’agrandit progressivement 
            avec de nouveaux profils. Cela permet d’améliorer la disponibilité des produits et 
            d’offrir un accompagnement plus complet aux clients.
        </p>

        <ul>
            <li>Arrivée de nouveaux collaborateurs spécialisés /li>
            <li>Amélioration du suivi client et du traitement des commandes</li>
            <li>Premiers partenariats fournisseurs pour garantir des prix stables</li>
        </ul>

        <div class="img-holder"><img src="/image/histoire/stock-informatique.png" alt="Croissance de Numéclair"></div>

        <p>
            Numéclair devient alors une référence locale pour ceux qui cherchent 
            du matériel adapté à leurs besoins, sans compromis sur la qualité.
        </p>
    </div>
</div>


<!-- ===== MODALE HISTOIRE : Aujourd’hui ===== -->

<div class="histoire" id="modal-aujourdhui">
    <div class="modal-content modal-history">
        <span class="close" data-close="modal-aujourdhui">×</span>

        <h2>2026 — Aujourd’hui</h2>
        <p class="sub">Une boutique moderne, un catalogue complet, une équipe soudée.</p>

          <div class="img-holder"><img src="/image/histoire/nouvelle-boutique.png" alt="Aujourd'hui, Numéclair"></div>

        <p>
            Aujourd’hui, Numéclair est une entreprise structurée proposant un 
            <strong>catalogue clair, complet et accessible</strong> : 
            ordinateurs, périphériques, composants et équipements réseau,
            soigneusement sélectionnés pour répondre aux besoins du plus grand nombre.
        </p>

        <p>
            L’équipe, désormais bien organisée, couvre tous les aspects essentiels : 
            le conseil, la vente, la gestion des stocks et l’accompagnement après‑vente.
            Chaque membre apporte son expertise pour garantir une expérience simple et fiable.
        </p>

        <ul>
        </ul>

        <div class="img-holder"><img src="/image/histoire/celebration2.png" alt="Aujourd'hui, Numéclair"></div>

        <p>
            Numéclair poursuit son objectif : rendre l’informatique simple,
            fiable et accessible à tous, sans jamais perdre de vue la proximité 
            et la qualité de service qui ont fait son succès.
        </p>
    </div>
</div>





<script>

// ========== VARIABLES GLOBALES ==========
let showAllProducts = false;     // Afficher plus/moins
let currentFilter = "all";       // Filtre catégorie
let cart = [];                   // Panier


// ========== PANIER ==========
function findProductIndex(name) {
  return cart.findIndex(item => item.name === name);
}

function updateCartDisplay() {
  const list = document.getElementById("cart-items");
  const totalSpan = document.getElementById("cart-total");

  list.innerHTML = "";
  let total = 0;

  cart.forEach((item, index) => {
    const li = document.createElement("li");

    const txt = document.createElement("span");
    txt.textContent = `${item.quantity}× ${item.name} — ${item.price} €`;

    const btn = document.createElement("button");
    btn.textContent = "Retirer";
    btn.className = "remove-btn";
    btn.onclick = () => removeOne(index);

    li.appendChild(txt);
    li.appendChild(btn);
    list.appendChild(li);

    total += item.quantity * item.price;
  });

  totalSpan.textContent = total;


  // Affiche ou cache les boutons selon le contenu du panier
  const btnBox = document.getElementById("cart-buttons");
  btnBox.style.display = cart.length > 0 ? "flex" : "none";


}

function addToCart(name, price) {
  price = Number(price);
  const idx = findProductIndex(name);

  if (idx === -1) cart.push({ name, price, quantity: 1 });
  else cart[idx].quantity++;

  updateCartDisplay();
}

function removeOne(index) {
  if (cart[index].quantity > 1) cart[index].quantity--;
  else cart.splice(index, 1);

  updateCartDisplay();
}

function clearCart() {
  cart = [];
  updateCartDisplay();
}


// ========== TRI ==========
function sortTable(type, direction = "asc") {
    const tbody = document.getElementById("product-list");
    const rows = Array.from(tbody.querySelectorAll("tr")); // Tri TOUTES les lignes

    const getText  = cell => cell.textContent.trim();
    const getPrice = cell => Number(cell.dataset.price);

    let comparator;

    if (type === "name")
        comparator = (a, b) => getText(a.children[1]).localeCompare(getText(b.children[1]));
    else if (type === "brand")
        comparator = (a, b) => getText(a.children[2]).localeCompare(getText(b.children[2]));
    else if (type === "price")
        comparator = (a, b) => getPrice(a.children[3]) - getPrice(b.children[3]);
    else return;

    rows.sort(comparator);
    if (direction === "desc") rows.reverse();

    rows.forEach(r => tbody.appendChild(r));

    applyVisibility();
}


// ========== VISIBILITÉ (Filtre + Afficher Plus) ==========

function applyVisibility() {
    const rows = Array.from(document.querySelectorAll("#product-list tr"));

    // --- Étape 1 : appliquer le filtre ---
    const filteredRows = rows.filter(row => {
        const category = row.dataset.category;
        return currentFilter === "all" || category === currentFilter;
    });

    // --- Si on a un filtre : on montre tout ---
    if (currentFilter !== "all") {
        filteredRows.forEach(r => r.style.display = "table-row");
        rows.filter(r => !filteredRows.includes(r)).forEach(r => r.style.display = "none");
        document.getElementById("show-more-btn").style.display = "none";
        return;
    }

    // --- Étape 2 : si showAllProducts = true → afficher tous ---
    if (showAllProducts) {
        rows.forEach(r => r.style.display = "table-row");
        document.getElementById("show-more-btn").textContent = "Afficher moins";
        return;
    }

    // --- Étape 3 : showAllProducts = false → afficher 5 aléatoires ---
    rows.forEach(r => r.style.display = "none"); // tout cacher d'abord

    // Sélection aléatoire de 5 produits
    const randomFive = filteredRows
        .sort(() => Math.random() - 0.5)
        .slice(0, 5);

    randomFive.forEach(r => r.style.display = "table-row");

    // Mise à jour bouton
    const btn = document.getElementById("show-more-btn");
    btn.textContent = "Afficher plus";
    btn.style.display = "inline-block";
}



// ========== ÉVÈNEMENTS ==========
document.addEventListener("DOMContentLoaded", () => {

    // Boutons Ajouter
    document.querySelectorAll(".add-to-cart").forEach(btn => {
        btn.addEventListener("click", () => {
            addToCart(btn.dataset.name, btn.dataset.price);
        });
    });

    // Vider panier
    document.getElementById("clear-cart").addEventListener("click", clearCart);

    // ✅ Bouton Payer → page paiement
    
    document.getElementById("pay-cart").addEventListener("click", () => {
      const total = Number(document.getElementById("cart-total").textContent);
      window.location.href = "paiement.html?total=" + total;
    });



    // Afficher Plus / Moins
    document.getElementById("show-more-btn").addEventListener("click", () => {
        if (currentFilter !== "all") return;
        showAllProducts = !showAllProducts;
        applyVisibility();
    });

    // Filtre catégories
    document.getElementById("category-filter").addEventListener("change", function () {
        currentFilter = this.value;
        applyVisibility();
    });

    // Modales
    document.querySelectorAll(".open-modal").forEach(card => {
        card.addEventListener("click", () => {
            document.getElementById(card.dataset.modal).style.display = "flex";
        });
    });

    document.querySelectorAll(".close").forEach(btn => {
        btn.addEventListener("click", () => {
            document.getElementById(btn.dataset.close).style.display = "none";
        });
    });

    document.querySelectorAll(".modal").forEach(modal => {
        modal.addEventListener("click", e => {
            if (e.target === modal) modal.style.display = "none";
        });
    });

    // Première mise à jour d’affichage
    applyVisibility();
});



// Ouvrir modales de l'histoire
document.querySelectorAll(".step-link").forEach(step => {
    step.addEventListener("click", () => {
        const id = step.dataset.modal;
        if (id) document.getElementById(id).style.display = "flex";
    });
});


// ===== THEME TOGGLE =====
const toggleBtn = document.getElementById("theme-toggle");

// Si un thème est enregistré → on le réapplique au chargement
if (localStorage.getItem("theme") === "light") {
    document.documentElement.classList.add("light");
    toggleBtn.textContent = "☀️ Mode clair";
}

toggleBtn.addEventListener("click", () => {
    document.documentElement.classList.toggle("light");

    const isLight = document.documentElement.classList.contains("light");

    toggleBtn.textContent = isLight ? "☀️ Mode clair" : "🌙 Mode sombre";

    // Sauvegarde du choix utilisateur
    localStorage.setItem("theme", isLight ? "light" : "dark");
});


</script>



</body>
</html>
