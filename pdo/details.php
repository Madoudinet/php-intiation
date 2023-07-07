<?php

require_once './src/config/bdd.php';



// $res = $pdo->query('SELECT * FROM manga WHERE id ='.$_GET['random']);
// $manga = $res->fetch();

$res = $pdo->prepare('SELECT * FROM manga WHERE id = :id AND title = :title');
$res->execute(['id'=> $_GET['random'], 'title' => 'Bersek']);
$manga = $res->fetch();

// echo '<pre>';
// var_dump($manga);
// echo '</pre>';