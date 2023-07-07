<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>
    <header>
        <?php
        require_once './template/header.php'
        ?>
    </header>
    <?php
    if (isset($_SESSION['message-error'])) {
    ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <?= $_SESSION['message-error']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
        unset($_SESSION['message-error']);
    }
    ?>

    <main>
        <form action="./src/form/traitement-connexion.php" method="POST" class="w-75 mx-auto">
            <div class="mb-3">
                <label for="name" class="form-label">Pseudo</label>
                <input type="text" class="form-control" id="name" name="pseudo">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="pswd">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Se rappeller de moi</label>
            </div>
            <input type="submit" class="btn btn-primary" value="Valider">
        </form>
    </main>

    <footer></footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>