<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/main.css" />
  <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
  <title>Portfolio - Mes Projets</title>
  <style>
    /* Styles pour la barre de navigation */
    nav {
      background-color: #333;
      /* Fond noir */
      position: sticky;
      top: 0;
      width: 100%;
      z-index: 1000;
    }

    .Menu {
      display: flex;
      /* Répartit les éléments sur toute la largeur */
      list-style-type: none;
      margin: 0;
      padding: 0;
      width: 100%;
    }

    .Menu li {
      margin: 0 20px;
      /* Espacement entre les éléments (plus grand qu'avant) */
    }

    .Menu a {
      color: white;
      text-decoration: none;
      font-size: 16px;
      font-weight: bold;
      letter-spacing: 1px;
      text-transform: uppercase;
      padding: 10px 15px;
      display: inline-block;
      border-radius: 5px;
      transition: background-color 0.3s, transform 0.3s;
    }

    .Menu a:hover {
      background-color: #555;
      transform: scale(1.1);
    }

    /* Autres styles restent inchangés */
    .content {
      padding: 2rem;
    }

    .title_center {
      text-align: center;
      color: white;
      margin-top: -100px;
      /* Déplace le texte un peu plus haut */
    }

    .title_center p {
      font-size: 1.5em;
    }
  </style>
</head>

<body>
  <nav>
    <ul class="Menu">
      <li><a href="index.php">Accueil</a></li>
      <li><a href="projet_cours.php">Projet Cours</a></li>
      <li><a href="projet_entreprise.php">Projet Entreprise</a></li>
    </ul>
  </nav>
  <div class="content">
    <div class="title_center">
      <p>
        Bienvenue sur ma page de projet, ici vous trouverez mes réalisations.
      </p>
    </div>
  </div>
</body>

</html>