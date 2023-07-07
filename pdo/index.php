<?php

require_once './src/config/bdd.php';

// var_dump($pdo);

$res = $pdo->prepare("SELECT * FROM manga");
$res->execute(['id'=> $_GET['id'], 'title' => 'Bersek']);
$mangas = $res->fetchAll();

// echo '<pre>';
// var_dump($manga);
// echo '</pre>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MANGA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <?php
        foreach($mangas as $manga){
            // echo $manga['title'];
            ?>
            <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?= $manga['title']; ?></h5>
    <p class="card-text"><?= $manga['description'] ?></p>
    <a href="./details.php?random=<?= $manga['id'];?>" class="btn btn-primary">Detail !</a>
  </div>
</div>

<?php

}
?>

    
</body>
</html>