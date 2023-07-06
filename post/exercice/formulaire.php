<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaires</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>

<?php
if(isset($_SESSION['message-error'])){
?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <?= $_SESSION['message-error']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
unset($_SESSION['message-error']);
}
?>

    <h1>Les formulaires</h1>
    <form action="./traitement.php" method="POST">
        <div>
            <label for="name">nom :</label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="pswd">mot de passe :</label>
            <input type="password" id="pswd" name="pswd">
        </div>
        <div>
            <label for="color">Couleur :</label>
            <input type="color" id="color" name="color">
        </div>
        <div>
            <label for="date">date :</label>
            <input type="date" id="date" name="date">
        </div>
        <div>
            <label for="email">email :</label>
            <input type="email" id="email" name="email">
        </div>
        <div>
            <label for="message">message :</label>
            <textarea name="message" id="message"></textarea>
        </div>
        <div>
            <label for="week">jour de la semaine :</label>
            <select name="week" id="week">
                <option value="lundi">lundi</option>
                <option value="mardi">mardi</option>
                <option value="mercredi">mercredi</option>
                <option value="jeudi">jeudi</option>
                <option value="vendredi">vendredi</option>
                <option value="samedi">samedi</option>
                <option value="dimanche">dimanche</option>
            </select>
        </div>
        <div>
            <span>Quels plats aimez-vous? </span>
            <label for="burger">Burger</label>
            <input type="checkbox" id="burger" name="food-burger" value="burger">
            <label for="pizza">Pizza</label>
            <input type="checkbox" id="pizza" name="food-pizza" value="pizza">
        </div>
        <div>
            <span>Etes-vous d'accord? </span>
            <label for="yes">Oui</label>
            <input type="radio" id="yes" name="accord" value="oui">
            <label for="no">Non</label>
            <input type="radio" id="no" name="accord" value="non" checked>
        </div>
        <input type="submit" value="Envoyer">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>