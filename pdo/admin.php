<?php
session_start();
if($_SESSION['admin'] != true){
    header('Location: ./index.php');
    exit();

}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MANGE - Administration</title>
</head>
<body>
    
</body>
</html>