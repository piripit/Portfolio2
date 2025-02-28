<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Portfolio</title>
    <link rel="stylesheet" href="css/style_ab.css" />
</head>

<body>
    <nav class="navbar">
        <ul class="menu">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="projet_cours.php">Projet Cours</a></li>
            <li><a href="projet_entreprise.php">Projet Entreprise</a></li>
        </ul>
    </nav>

    <div id="about-modal" class="modal">
        <div class="modal-content">
            <img src="img/moriel-removebg-preview.png" alt="À propos" class="profile-img" />
            <h2>À propos de moi</h2>
            <p>
                Moriel, c'est moi en quelques mots ! Polyvalent, rigoureux et passionné de technologie...
            </p>
        </div>
    </div>

    <div id="skills-modal" class="modal">
        <div class="modal-content">
            <h2>Connaissances des Stacks</h2>
            <h3>Frontend</h3>
            <table class="skills-table">
                <tr>
                    <th>Logo</th>
                    <th>Technologie</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td><img src="img/logo-html.jpg" alt="HTML"></td>
                    <td>HTML</td>
                    <td>Structure les pages web.</td>
                </tr>
                <tr>
                    <td><img src="img/logo-css.jpg" alt="CSS"></td>
                    <td>CSS</td>
                    <td>Gère le style des pages web.</td>
                </tr>
                <tr>
                    <td><img src="img/js.png" alt="JS"></td>
                    <td>JavaScript</td>
                    <td>Ajoute de l’interactivité.</td>
                </tr>
                <tr>
                    <td><img src="img/logo-bootstrap.jpg" alt="Bootstrap"></td>
                    <td>Bootstrap</td>
                    <td>Framework CSS pour interfaces responsives.</td>
                </tr>
                <tr>
                    <td><img src="img/logo-react.jpg" alt="React"></td>
                    <td>React.js</td>
                    <td>Librairie pour interfaces dynamiques.</td>
                </tr>
            </table>
            <h3>Backend</h3>
            <table class="skills-table">
                <tr>
                    <th>Logo</th>
                    <th>Technologie</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td><img src="img/php.jpg" alt="PHP"></td>
                    <td>PHP</td>
                    <td>Langage serveur.</td>
                </tr>
                <tr>
                    <td><img src="img/logo-laravel.jpg" alt="Laravel"></td>
                    <td>Laravel</td>
                    <td>Framework PHP moderne.</td>
                </tr>
                <tr>
                    <td><img src="img/logo-nodejs.jpg" alt="Node.js"></td>
                    <td>Node.js</td>
                    <td>JS côté serveur.</td>
                </tr>
                <tr>
                    <td><img src="img/logo-python.jpg" alt="Python"></td>
                    <td>Python</td>
                    <td>Langage polyvalent.</td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>