<?php

// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';

// if( isset($_POST['name']) && isset($_POST['pswd']) && isset($_POST['color']) && isset($_POST['date']) && isset($_POST['email']) && isset($_POST['message']) && isset($_POST['week']) && isset($_POST['plat']) && isset($_POST['accord'])){
//     if( !empty($_POST['name']) && !empty($_POST['pswd']) && !empty($_POST['color']) && !empty($_POST['date']) && !empty($_POST['email']) && !empty($_POST['message']) && !empty($_POST['week']) && !empty($_POST['plat']) && !empty($_POST['accord'])){
//         echo '<pre>';
//         var_dump($_POST);
//         echo '</pre>';
//     } else {
//     echo 'Veuillez remplir tous les champs ';
    
// } 
// } else {
//     echo 'Erreur dans le formulaire';
// }

// Pour accéder à la session, il faut commenecer par la démarrer avec la fonction session_start().
session_start();
// echo '<pre>';
// var_dump($_SESSION);
// echo '</pre>';

if (isset($_POST['name']) && isset($_POST['pswd']) && isset($_POST['color']) && isset($_POST['date']) && isset($_POST['email']) && isset($_POST['message']) && isset($_POST['week']) && isset($_POST['accord'])){
    if(!empty($_POST['name']) && !empty($_POST['pswd']) && !empty($_POST['color']) && !empty($_POST['date']) && !empty($_POST['email']) && !empty($_POST['message']) && !empty($_POST['week']) && !empty($_POST['accord'])){
        // echo 'ok';
        foreach($_POST as $key => $value){
           $_POST[$key] = strip_tags($value);
        }
        // enregistrement en bdd
        // La fonction header location permet de rediriger vers une autre page
        // Il est recommandé de rajouter la fonction exit() juste après pour être sur que le script soit bien stoppé
        $_SESSION['message'] = 'Le formulaire a bien été envoyé';
        header('Location: ./index.php');
        exit();

    }else {
        $_SESSION['message-error'] = 'Vueillez remplir tous les champs';
        header('Location: ./formulaire.php');
        exit();
    }
    
} else {
    $_SESSION['message-error'] = "Il y a une erreur dans le formulaire";
    header('Location: ./formulaire.php');
    exit();
}

// <?php



// if (isset($_POST['name']) && isset($_POST['pswd']) && isset($_POST['color']) && isset($_POST['date']) && isset($_POST['email']) && isset($_POST['message']) && isset($_POST['week'])  && isset($_POST['agree'])){
//     if( !empty($_POST['name']) && !empty($_POST['pswd']) && !empty($_POST['color']) && !empty($_POST['date']) && !empty($_POST['email']) && !empty($_POST['message']) && !empty($_POST['week'])  && !empty($_POST['agree'])){
//        foreach($_POST as $key => $value){
//          $_POST[$key] = strip_tags($value);
//        }
//         // enregistrement en bdd
//         header('Location: ./formulaire.php');
//         exit();
//     } else {
//         echo 'erreur';

//     }

// } else {
//     echo 'y\'a une erreur';
// }