<?php
session_start();
require_once './src/config/bdd.php';

if ($_SESSION['admin'] != true) {
    header('Location: ./index.php');
    exit();    
}
$res = $pdo->prepare('SELECT * FROM manga WHERE id = :id');
$res->execute(['id'=> $_GET['id']]);
$manga = $res->fetch();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>
    <header>
        <?php
        require_once './template/header.php';

        ?>

    </header>

    <main>
        <section>
            <form action="./traitement-update-manga.php" method="POST" class="w-75 mx-auto">
                <!-- 2 methodes pour faire passer l'id dans la super globale $_POST -->

                <!-- OU on cache le champs -->
                <input type="hidden" value="<?= $manga['id']; ?>">

                <!-- OU on affiche le champs mais en le désactivant -->
                <!-- <div class="mb-3">
                    <label for="id">Id :</label>
                    <input type="text" id="id" disabled value="<?= $manga['id']; ?>" name="id">
                </div> -->
                <div class="mb-3">
                    <label for="name" class="form-label">Titre : </label>
                    <input type="text" id="name" class="form-control" value="<?= $manga['title']; ?>" name="title">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description : </label>
                    <textarea id="description" class="form-control" value="<?= $manga['description']; ?>" name="description"><?= $manga['description']; ?></textarea>
                
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prix : </label>
                    <input type="number" step="any" id="price" class="form-control" value="<?= $manga['price']; ?>" name="price">
                </div>
                <input type="submit" class="btn btn-primary" value="modifier">

            </form>
        </section>
    </main>

    <footer></footer>

</body>

</html>