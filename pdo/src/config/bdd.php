<?php

try
{
    $pdo = new PDO('mysql:host=localhost;dbname=pdo', // driver mysql, serveur de la BDD (host), nom de la bDD (dbname) à changer
    'root', //nom d'utilisateur
     '',// mot de passe
      [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION] // On affiche les erreurs
    );


}
catch(Exception $e)
{
    die('Erreur :'. $e->getMessage());
}
