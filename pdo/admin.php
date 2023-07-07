<?php
session_start();
if ($_SESSION['admin'] != true) {
    header('Location: ./index.php');
    exit();
    
}

// connexion à la base de donnée
require_once './src/config/bdd.php';
// Récupération de tous les mangas
$stmt = $pdo->prepare('SELECT * FROM manga');
$stmt->execute();
$mangas = $stmt->fetchAll();
// var_dump($mangas);

// $res = $pdo->prepare("SELECT * FROM manga");
// $res->execute();
// $mangas = $res->fetchAll();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MANGE - Administration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>
    <header>
        <!-- inclure la nav -->
        <?php
        require_once './template/header.php';

        ?>
    </header>
    <main>
        <section>
            <table class="table table-striped">
                <?php

                foreach ($mangas as $manga) {

                    // echo $manga['title'];
                ?>
                    <tr>
                        <td><?= $manga['id']; ?></td>
                        <td><?= $manga['title']; ?></td>
                        <td><a href="./update-manga.php?id=<?= $manga['id'] ?>">Modifier</a></td>
                        <td><a href="./delete-manga.php?id=<?= $manga['id'] ?>">Supprimer</a></td>
                    </tr>


                <?php
                }
                ?>
                <!-- Boucle pour créer chaque ligne du tableau avec les valeurs de la base de donnée -->
                <!-- Afficher id | nom du manga | lien modifier | lien pour supprimer -->
            </table>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>