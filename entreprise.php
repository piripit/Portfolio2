<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Présentation de l'Entreprise ECONOCOM</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        line-height: 1.6;
        background-color: #f4f4f4; /* Couleur de fond douce */
      }

      nav.entete {
        background: #333; /* Couleur de fond du menu */
        padding: 15px 0; /* Espacement vertical */
        position: fixed; /* Fixer la barre de navigation en haut de la page */
        top: 0;
        width: 100%;
        z-index: 1000; /* Mettre la barre de navigation au-dessus du contenu */
      }

      nav.entete .menu {
        list-style: none;
        padding: 0;
        text-align: center; /* Centrer le menu */
      }

      nav.entete .menu li {
        display: inline; /* Afficher les éléments en ligne */
        margin: 0 15px; /* Espacement entre les éléments */
      }

      nav.entete .menu li a {
        color: white; /* Couleur des liens */
        text-decoration: none; /* Pas de soulignement */
        font-weight: bold; /* Mettre en gras */
        padding: 10px 15px; /* Espacement interne pour les liens */
        transition: background 0.3s; /* Transition pour l'effet de survol */
      }

      nav.entete .menu li a:hover {
        background: darkmagenta; /* Couleur de fond au survol */
        border-radius: 5px; /* Coins arrondis au survol */
      }

      main {
        padding: 20px;
        max-width: 800px; /* Limiter la largeur du contenu principal */
        margin: auto; /* Centrer le contenu */
        background: white; /* Fond blanc pour le contenu */
        border-radius: 8px; /* Coins arrondis */
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Ombre légère */
        margin-top: 80px; /* Espacement entre la barre de navigation et le contenu */
      }

      h2 {
        color: darkmagenta; /* Couleur des sous-titres */
      }

      p {
        margin-bottom: 15px; /* Espacement entre les paragraphes */
      }

      .button {
        display: inline-block;
        padding: 10px 20px;
        background: darkorchid; /* Couleur du bouton */
        color: white;
        text-decoration: none;
        border-radius: 5px; /* Coins arrondis pour le bouton */
        transition: background 0.3s; /* Transition pour l'effet de survol */
      }

      .button:hover {
        background: darkmagenta; /* Couleur du bouton au survol */
      }
    </style>
  </head>
  <body>
    <nav class="entete">
      <div class="menu">
        <li><a href="index.html">Accueil</a></li>
        <li><a href="#" id="about-link">À propos</a></li>
        <li><a href="ecole.html">Formation</a></li>
        <li><a href="#" id="skills-link">Compétences</a></li>
        <li><a href="#">Tableau</a></li>
        <li><a href="projet.html">Projets</a></li>
        <li><a href="#">Veille</a></li>
        <li><a href="entreprise.html">Entreprise</a></li>
        <li><a href="#">Contact</a></li>
      </div>
    </nav>

    <main>
      <header>
        <h1>Présentation de l'Entreprise ECONOCOM</h1>
      </header>
      <h2>À propos d'ECONOCOM</h2>
      <p>
        ECONOCOM est une entreprise spécialisée dans la transformation digitale
        et la gestion des infrastructures informatiques. En tant que prestataire
        pour la SNCF, ECONOCOM fournit des solutions innovantes pour améliorer
        l'efficacité opérationnelle et la satisfaction des clients.
      </p>
      <p>
        En tant que technicien Help Desk de niveau 1, je suis responsable de la
        gestion des demandes d'assistance technique, de la résolution des
        problèmes informatiques et de l'assistance aux utilisateurs pour
        garantir un service de qualité.
      </p>
      <p>
        Mon rôle consiste à répondre aux appels des utilisateurs, à
        diagnostiquer les problèmes techniques et à fournir des solutions
        rapides et efficaces pour minimiser les interruptions de service.
      </p>
      <a href="https://www.econocom.com/" class="button" target="_blank"
        >Visitez notre site</a
      >
    </main>
  </body>
</html>
