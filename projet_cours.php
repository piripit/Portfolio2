<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/style_pc.css" />
  <title>Projets de Cours</title>

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