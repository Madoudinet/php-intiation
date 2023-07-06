<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if(isset($_SESSION['message'])){
        echo '<p class="message">'. $_SESSION['message']. '</p>';
        unset($_SESSION['message']);
    }
    // echo $_SESSION['message'];  
    ?>
    <h1>Accueil</h1>
    <a href="./formulaire.php">Formulaire</a>
    
</body>
</html>