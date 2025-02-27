<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Projets de Cours</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
      font-size: 18px;
    }

    nav {
      background-color: #333;
      position: sticky;
      top: 0;
      width: 100%;
      z-index: 1000;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    .menu {
      display: flex;
      list-style-type: none;
      margin: 0;
      padding: 15px 30px;
    }

    .menu li {
      margin: 0 30px;
    }

    .menu a {
      color: white;
      text-decoration: none;
      font-size: 20px;
      font-weight: bold;
      letter-spacing: 1px;
      text-transform: uppercase;
      padding: 15px 20px;
      border-radius: 5px;
      transition: background-color 0.3s, transform 0.3s;
    }

    .menu a:hover {
      background-color: #555;
      transform: scale(1.1);
    }

    .Container {
      padding: 3rem;
      text-align: left;
    }

    .project-list {
      display: flex;
      flex-direction: column;
      gap: 30px;
    }

    .project-card {
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
      padding: 30px;
      display: flex;
      align-items: center;
      gap: 30px;
    }

    .project-card img {
      max-width: 250px;
      height: auto;
      border-radius: 8px;
    }

    .info-container {
      display: none;
      margin-top: 15px;
      padding: 15px;
      border: 1px solid #ccc;
      background-color: #f9f9f9;
      text-align: left;
      border-radius: 8px;
      font-size: 18px;
    }

    button {
      padding: 15px 25px;
      font-size: 18px;
      cursor: pointer;
      background-color: darkblue;
      color: white;
      border: none;
      border-radius: 8px;
      transition: background-color 0.3s;
    }

    button:hover {
      background-color: #555;
    }
  </style>
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