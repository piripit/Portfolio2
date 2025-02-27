<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Présentation de l'École Supérieure des Pays de Loire</title>
  <style>
    body {
      font-family: "Arial", sans-serif;
      margin: 0;
      padding: 0;
      line-height: 1.6;
      background-color: #f9f9f9;
      /* Couleur de fond douce */
    }

    nav.entete {
      background: #333;
      /* Couleur de fond du menu */
      padding: 10px 0;
      position: fixed;
      /* Fixer la barre de navigation en haut de la page */
      top: 0;
      width: 100%;
      z-index: 1000;
      /* Mettre la barre de navigation au-dessus du contenu */
    }

    nav.entete .menu {
      list-style: none;
      padding: 0;
      text-align: center;
      /* Centrer le menu */
    }

    nav.entete .menu li {
      display: inline;
      /* Afficher les éléments en ligne */
      margin: 0 15px;
      /* Espacement entre les éléments */
    }

    nav.entete .menu li a {
      color: white;
      /* Couleur des liens */
      text-decoration: none;
      /* Pas de soulignement */
      font-weight: bold;
      /* Mettre en gras */
    }



    main {
      padding: 20px;
      max-width: 900px;
      /* Limiter la largeur du contenu principal */
      margin: auto;
      /* Centrer le contenu */
      background: white;
      /* Fond blanc pour le contenu */
      border-radius: 8px;
      /* Coins arrondis */
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      /* Ombre légère */
      margin-top: 60px;
      /* Espacement entre la barre de navigation et le contenu */
    }

    h2 {
      color: orangered;
      /* Couleur des sous-titres */
      border-bottom: 2px solid orangered;
      /* Ligne sous les sous-titres */
      padding-bottom: 5px;
    }

    section {
      margin-bottom: 20px;
      padding: 15px;
      /* Espacement interne */
      border-radius: 5px;
      /* Coins arrondis pour les sections */
      background-color: #f1f1f1;
      /* Fond légèrement gris pour les sections */
    }

    footer {
      background: #333;
      color: white;
      text-align: center;
      padding: 15px 0;
      position: relative;
      bottom: 0;
      width: 100%;
    }

    a {
      color: orangered;
      /* Couleur du lien */
      text-decoration: none;
      /* Pas de soulignement */
    }

    a:hover {
      text-decoration: underline;
      /* Soulignement au survol */
    }

    /* Styles pour les listes */
    ul {
      margin: 10px 0;
      padding-left: 20px;
      /* Indentation pour les listes */
    }
  </style>
</head>

<body>
  <nav class="entete">
    <div class="menu">
      <li><a href="index.php">Accueil</a></li>

      <li><a href="ecole.php">Formation</a></li>

      <li><a href="#">Contact</a></li>
    </div>
  </nav>

  <main>
    <section id="presentation">
      <h2>Présentation de l'ESPL</h2>
      <p>
        Située à Angers, l'École Supérieure des Pays de Loire (ESPL) a été
        fondée en 1987. Elle propose une large gamme de formations allant du
        Bac au Bac +5, avec un accent particulier sur l'alternance et
        l'innovation pédagogique.
      </p>
      <p>
        Notre école se concentre sur des programmes tels que les BTS dans
        divers domaines, notamment le commerce, la gestion, et la
        communication. L'ESPL est intégrée au campus universitaire d'Angers,
        offrant un environnement dynamique et propice à l'apprentissage.
      </p>
      <p>
        Avec un engagement fort envers l'employabilité, l'ESPL collabore
        étroitement avec des entreprises locales et nationales pour garantir
        que ses formations répondent aux besoins du marché.
      </p>
      <p>
        Pour en savoir plus, visitez le site officiel de l'ESPL :
        <a href="https://www.espl.fr/" target="_blank">www.espl.fr</a>
      </p>
    </section>

    <section id="formation">
      <h2>Ma Formation : BTS SIO</h2>
      <p>
        Le BTS Services Informatiques aux Organisations (BTS SIO) est une
        formation de deux ans qui prépare les étudiants à devenir des
        professionnels dans le domaine des technologies de l'information et de
        la communication.
      </p>
      <p>Cette formation se divise en deux spécialités :</p>
      <ul>
        <li>
          <strong>Solutions Logicielles et Applications Métiers (SLAM)</strong>
          : Cette spécialité se concentre sur le développement d'applications
          et de logiciels pour répondre aux besoins des entreprises. Les
          étudiants apprennent à concevoir, développer et maintenir des
          solutions logicielles adaptées aux exigences des utilisateurs.
        </li>
        <li>
          <strong>Administration des Réseaux et des Systèmes (SISR)</strong> :
          Cette spécialité est axée sur la gestion et l'administration des
          infrastructures informatiques, y compris les réseaux et les
          systèmes. Les étudiants acquièrent des compétences en configuration,
          gestion et sécurisation des réseaux informatiques.
        </li>
      </ul>
      <p>
        Le BTS SIO permet d'acquérir des compétences techniques solides, ainsi
        qu'une compréhension des enjeux organisationnels et économiques liés
        aux systèmes d'information. Les diplômés peuvent poursuivre leurs
        études en licence professionnelle ou intégrer directement le marché du
        travail dans divers secteurs tels que :
      </p>
      <ul>
        <li>Développement d'applications web et mobiles</li>
        <li>Gestion de projets informatiques</li>
        <li>Administration de systèmes et réseaux</li>
        <li>Support technique et maintenance informatique</li>
      </ul>
      <p>
        Les étudiants bénéficient également de stages en entreprise, ce qui
        leur permet d'appliquer leurs connaissances théoriques dans un
        environnement professionnel réel. Cela favorise leur employabilité et
        leur permet de développer un réseau professionnel solide.
      </p>
      <p>
        En somme, le BTS SIO est une formation complète qui prépare les
        étudiants à relever les défis du secteur informatique et à s'adapter
        aux évolutions technologiques constantes.
      </p>
    </section>

    <section id="contact">
      <h2>Contactez-nous</h2>
      <p>
        Pour plus d'informations, veuillez nous contacter à l'adresse suivante
        :
      </p>
      <p>Email : <a href="mailto:contact@espl.fr">contact@espl.fr</a></p>
      <p>Téléphone : <a href="tel:+33241000000">02 41 00 00 00</a></p>
    </section>
  </main>

  <footer>
    <p>
      &copy; 2023 École Supérieure des Pays de Loire. Tous droits réservés.
    </p>
  </footer>
</body>

</html>