<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Projets de Cours</title>
  <style>
    /* Reset & Styles de base */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      color: #333;
      line-height: 1.6;
    }

    /* Navigation */
    nav {
      background: #3b3b3b;
      position: sticky;
      top: 0;
      width: 100%;
      z-index: 1000;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
    }

    nav ul {
      display: flex;
      justify-content: center;
      list-style: none;
      padding: 1rem;
    }

    nav ul li {
      margin: 0 15px;
    }

    nav ul li a {
      color: #fff;
      text-decoration: none;
      font-weight: bold;
      text-transform: uppercase;
      padding: 0.5rem 1rem;
      transition: background 0.3s;
      border-radius: 4px;
    }

    nav ul li a:hover {
      background: darkcyan;
    }

    /* Conteneur principal */
    .container {
      max-width: 1200px;
      margin: auto;
      padding: 2rem 5%;
      text-align: center;
    }

    header h1 {
      font-size: 2.5rem;
      margin-bottom: 1.5rem;
    }

    /* Grille de projets */
    .project-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
      gap: 1.5rem;
    }

    .project-card {
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      transition: transform 0.3s;
    }

    .project-card:hover {
      transform: translateY(-5px);
    }

    .project-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .card-content {
      padding: 1rem;
      text-align: left;
    }

    .card-content h2 {
      font-size: 1.5rem;
      margin-bottom: 0.75rem;
    }

    .info-btn {
      display: inline-block;
      margin-top: 1rem;
      padding: 0.5rem 1rem;
      background: #3b3b3b;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .info-btn:hover {
      background: #555;
    }

    /* Styles des modales */
    .modal {
      display: none;
      /* cachée par défaut */
      position: fixed;
      z-index: 2000;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.6);
      align-items: center;
      justify-content: center;
      padding: 1rem;
    }

    .modal-content {
      background: #fff;
      border-radius: 8px;
      max-width: 800px;
      width: 100%;
      padding: 1.5rem;
      position: relative;
      text-align: left;
    }

    .close-modal {
      position: absolute;
      top: 10px;
      right: 15px;
      font-size: 1.5rem;
      color: #333;
      cursor: pointer;
    }
  </style>
</head>

<body>
  <nav>
    <ul>
      <li><a href="index.php">Accueil</a></li>
      <li><a href="#">Tableau</a></li>
      <li><a href="projet.php">Projets</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </nav>
  <div class="container">
    <header>
      <h1>Projets de Cours</h1>
    </header>
    <main class="project-grid">
      <!-- Carte Projet 1 -->
      <div class="project-card" data-project="project1">
        <img src="img/immobilier.PNG" alt="Calculatrice prêt immobilier" />
        <div class="card-content">
          <h2>Calculatrice prêt immobilier</h2>
          <button class="info-btn" data-target="modal1">Plus d'infos ></button>
        </div>
      </div>
      <!-- Carte Projet 2 -->
      <div class="project-card" data-project="project2">
        <img src="img/formation.png" alt="Bienvenu-Formation" />
        <div class="card-content">
          <h2>Bienvenu-Formation</h2>
          <button class="info-btn" data-target="modal2">Plus d'infos ></button>
        </div>
      </div>
    </main>
  </div>
  <!-- Modale pour le Projet 1 -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <span class="close-modal" data-target="modal1">&times;</span>
      <h2>Calculatrice prêt immobilier</h2>
      <p>
        Ce projet met en avant une interface intuitive et responsive qui permet de simuler un prêt immobilier.
      </p>
      <ul>
        <li><strong>HTML/CSS :</strong> Structure et mise en forme responsive</li>
        <li><strong>JavaScript :</strong> Calculs dynamiques et gestion d'événements</li>
        <li><strong>Flexbox :</strong> Mise en page fluide</li>
      </ul>
      <!-- Tu pourras ici ajouter bien d'autres sections et fonctionnalités -->
    </div>
  </div>
  <!-- Modale pour le Projet 2 -->
  <div id="modal2" class="modal">
    <div class="modal-content">
      <span class="close-modal" data-target="modal2">&times;</span>
      <h2>Bienvenu-Formation</h2>
      <p>
        Cette plateforme permet de simuler des prêts immobiliers selon les critères de l'utilisateur.
      </p>
      <!-- D'autres contenus (vidéos, témoignages, etc.) pourront être ajoutés ici par la suite -->
    </div>
  </div>
  <script>
    // Ouvrir la modale
    const infoButtons = document.querySelectorAll('.info-btn');
    infoButtons.forEach((btn) => {
      btn.addEventListener('click', function() {
        const targetModalId = this.getAttribute('data-target');
        const modal = document.getElementById(targetModalId);
        if (modal) {
          modal.style.display = 'flex';
        }
      });
    });

    // Fermer la modale au clic sur la croix
    const closeButtons = document.querySelectorAll('.close-modal');
    closeButtons.forEach((btn) => {
      btn.addEventListener('click', function() {
        const targetModalId = this.getAttribute('data-target');
        const modal = document.getElementById(targetModalId);
        if (modal) {
          modal.style.display = 'none';
        }
      });
    });

    // Fermer la modale si on clique en dehors du contenu
    window.addEventListener('click', function(e) {
      document.querySelectorAll('.modal').forEach((modal) => {
        if (e.target === modal) {
          modal.style.display = 'none';
        }
      });
    });
  </script>
</body>

</html>