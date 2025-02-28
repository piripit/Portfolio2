<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/main.css" />
  <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
  <title>Document</title>
</head>

<body>
  <div class="container">
    <nav class="entete">
      <div class="menu">
        <li><a href="#">Accueil</a></li>
        <li><a href="about.php">About and skills</a></li>
        <li><a href="ecole.php">Formation</a></li>
        <li><a href="#">Tableau</a></li>
        <li><a href="projet.php">Projets</a></li>
        <li><a href="#">Veille</a></li>
        <li><a href="entreprise.php">Entreprise</a></li>
        <li><a href="#">Contact</a></li>
      </div>
    </nav>
    <div class="corps">
      <div class="cgauche">
        <span class="textB">Salut</span>
        <h1>Je suis <span id="textDefile"></span></h1>
        <p>Apprenti Developpeur Web | Technicien de support informatique</p>
        <div class="buton">
          <button id="cvDownloadBtn">Telecharger CV</button>
          <button id="linkedin-btn">Linkedin</button>
        </div>
      </div>
      <div class="cdroite">
        <div class="grpimg">
          <img src="img/splah-removebg.png" id="splah" />
          <img src="img/mol-removebg (1).png" />
        </div>
      </div>
    </div>
  </div>

  <div id="cvModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal()">&times;</span>
      <h2>Votre CV</h2>
      <div class="download-btn">
        <a href="fichier/Cv.pdf" download="Cv.pdf">
          <button>Télécharger CV</button>
        </a>
      </div>
    </div>
  </div>

  <script src="script/main.js"></script>
</body>

</html>