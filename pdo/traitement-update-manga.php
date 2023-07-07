<!-- Verifier le tableau $_POST s'il existe -->
    <!-- Verifier si les champs ne sont pas vides -->
        <!-- Modifier en base de donné -->

<?php

session_start();
require_once './src/config/bdd.php';

if ($_SESSION['admin'] != true) {
    header('Location: ./index.php');
    exit();    
}

if(isset($_POST)){
    if(!empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['price'])){
        $title = $_POST['title'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $id = $_POST['id'];

        $stmt = $pdo->prepare('UPDATE manga SET title = :title, 
        description = :description, WHERE id= :id');
        $stmt->execute([
            'title' => $title,
            'description' => $description,
            // 'price' => $price,
            'id' => $id
        ]);

        header('Location: ./admin.php');
    }
    else {
        header('Location: ./update-manga.php');
    }
}