<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/style_pe.css" />
  <title>Projets de Cours</title>

</head>

<body>
  <nav>
    <ul class="menu">
      <li><a href="index.php">Accueil</a></li>
      <li><a href="#">Tableau</a></li>
      <li><a href="projet.php">Projets</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </nav>
  <div class="Container">
    <header class="header">
      <h1>Projets de Cours</h1>
    </header>
    <main class="project-list">
      <div class="project-card">
        <img src="img/immobilier.PNG" alt="Calculatrice prêt immobilier" />
        <div>
          <h2>Calculatrice prêt immobilier</h2>
          <button id="infoButton1">Plus d'infos ></button>
          <div id="infoContainer1" class="info-container">
            <h3>Compétences Acquises</h3>
            <p>
              En travaillant sur le projet de la calculatrice immobilière,
              j'ai acquis plusieurs compétences clés :
            </p>
            <ul>
              <li>
                <strong>HTML/CSS :</strong> Création d'une interface
                utilisateur responsive et esthétique.
              </li>
              <li>
                <strong>JavaScript :</strong> Utilisation de JavaScript pour
                gérer les interactions utilisateur et effectuer des calculs
                dynamiques.
              </li>
              <li>
                <strong>Flexbox :</strong> Mise en page d'éléments avec
                Flexbox pour un alignement intuitif.
              </li>
              <li>
                <strong>Gestion des événements :</strong> Manipulation des
                événements pour afficher et masquer des informations.
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="project-card">
        <img src="img/immobilier.PNG" alt="Calculatrice prêt immobilier" />
        <div>
          <h2>Calculatrice prêt immobilier</h2>
          <button id="infoButton2">Plus d'infos ></button>
          <div id="infoContainer2" class="info-container">
            <p>
              Cette calculatrice vous permet de simuler vos prêts immobiliers
              en fonction de votre montant, taux d'intérêt et durée.
            </p>
            <p>
              Entrez les informations nécessaires pour obtenir un tableau
              d'amortissement détaillé.
            </p>
          </div>
        </div>
      </div>
    </main>
  </div>
  <script>
    document
      .getElementById("infoButton1")
      .addEventListener("click", function() {
        const infoContainer = document.getElementById("infoContainer1");
        infoContainer.style.display =
          infoContainer.style.display === "none" ||
          infoContainer.style.display === "" ?
          "block" :
          "none";
      });
    document
      .getElementById("infoButton2")
      .addEventListener("click", function() {
        const infoContainer = document.getElementById("infoContainer2");
        infoContainer.style.display =
          infoContainer.style.display === "none" ||
          infoContainer.style.display === "" ?
          "block" :
          "none";
      });
  </script>
</body>

</html>
s