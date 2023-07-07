<?php
session_start();


if (isset($_POST)) {
    $name = $_POST['pseudo'];
    $password = $_POST['pswd'];
    // var_dump($_POST);
    if (!empty($name) && !empty($password)) {
        require_once '../config/bdd.php';

        $stmt = $pdo->prepare('SELECT * FROM user WHERE pseudo = :test AND password = :pwd');
        $stmt->execute(['test' => $name, 'pwd' => $password]);
        $user = $stmt->fetch();
        if ($user) {
            $_SESSION['admin'] = $user['statut'];
            header('Location: ../../index.php');
            exit();
        } else {
            header('Location: ../../connexion.php');
            exit();            
        }
    } else {
        $_SESSION['message-error'] = 'Tous les champs ne sont pas remplis';
        header('Location: ../../connexion.php');
        exit();
    }
    //  var_dump($_POST);
} else {
    header('Location: ../../connexion.php');
    exit();
}
