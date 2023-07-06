<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction à PHP</title>
</head>
<body>
    <h1>Découverte de PHP</h1>
    <?php
    // Pour ouvrir un bloc PHP, on utilise la balise <?php
    // Pour fermer un bloc PHP on utilise la balise suivante 

    ?>

    <p>Je suis du HTML</p>
    <?php
    // -------------------------------
    echo '<h2> Les commentaires </h2>';
    // -------------------------------
    // Je suis un commentaire en PHP
    # Je suis aussi un commentaire en PHP
    /*
        Je suis un commentaire 
        Sur plusieur lignes
    */
    // -------------------------------
    echo '<h2>Affichage</h2>';
    // -------------------------------
    echo 'Hello, World !';
    
    echo "Hello, World !";
    // Echo est une instruction qui permet d'affichage du texte dans le navigateur

    // -------------------------------
    echo '<h2>Les variables</h2>';
    // -------------------------------
    // Déclaration d'une variable avec le signe $
    $unNom;
    // Affectation de la valeur 127 à la variable nommé unNom
    $unNom = 127;
    echo $unNom;
    echo '<br>';
    echo gettype($unNom);    
    echo '<br>';

    // Creer une variable et afficher son type:
        // Un nombre à virgule
        // Une chaine de caractere
        // Un booléen

    $nombre = 12.7;
    $caractere = 'Coucou';
    $bool = true;

    echo gettype($nombre);
    echo '<br>';
    echo gettype($caractere);
    echo '<br>';
    echo gettype($bool);

// -------------------------------
echo '<h2>La concaténation</h2>';
// -------------------------------
// Déclarer 2 variables

$a = 'Bonjour';
$b = 'tout le monde !';
// Entre simple guillemets, les variables ne sont pas évaluées : c'est leur nom littéral qui est affiché
echo $a . ' '. $b . ' Je suis en cours de PHP.';
echo '<br>';
// Entre guillemets doubles, les variables ne sont pas évaluées : c'est leur contenu qui est affiché

echo "$a $b Je suis un message en PHP";
echo '<br>';
echo '$a $b Je suis un message en PHP';

// -------------------------------
echo '<h2>Les constantes et les constantes magiques</h2>';
// -------------------------------
// Une constante permet de sauvegarder une valeur sauf que celle ci ne peut pas être modifiée
// Utile pour conserver les parametres de la base de donnée
// Par convention, une constante se déclare toujours en Majuscule
define("CAPITAL", "Paris");
echo CAPITAL;
echo '<br>';


echo __FILE__ . '<br>'; // Affiche le chemin complet vers le fichier courant

echo __LINE__ . '<br>'; // Affiche le numéro de la ligne courante
echo __DIR__ . '<br>'; // Affiche le dossier dans lequel est le fichier courant

// Afficher Bleu-Blanc-Rouge (avec les tirets) en mettant le texte de chaque couleur dans des variables.

$red = 'Rouge';
$white = 'Blanc';
$blue = 'Bleu';
echo "$blue-$white-$red <br>";
echo $blue.'-'.$white.'-'.$red . '<br>';

// -------------------------------
echo '<h2>Les opérateurs arithmétiques</h2>';
// -------------------------------
$a = 10;
$b = 2;

// Faire la même chose pour afficher le résultat de la soustraction, de la multiplication, de la division, le modulo
echo $a + $b .'<br>';
echo $a - $b .'<br>';
echo $a * $b .'<br>';
echo $a / $b .'<br>';
echo $a % $b .'<br>'; // modulo = reste de la division entière
$a++;
echo $a . '<br>';
$a = $a +1;
echo $a . '<br>';
$a += 2;
echo $a . '<br>';
$a *= 2;
echo $a . '<br>';
$a %= 2;
echo $a . '<br>';

// -------------------------------
echo '<h2>Les structures conditionnelles (if / elseif/ else)</h2>';
// -------------------------------
$a = 23;
$b = 5;
$c = 2;

if($a > $b){
    echo "$a est superieur à $b";
} elseif($a == $b) {
    echo "$a est égal à $b";
} else {
    echo "Si aucune condition n'est rempli le else sera executé";
}

echo '<br>';


// L'oppérateur AND écrit && permet de vérifier que 2 conditions soient réalisé en même temps.
if ($a > $b && $b > $c){
    echo 'Ok pour les 2 conditions <br>';
}

// L'oppérateur OR écrit || permet de vérifier qu'au moins l'une des  conditions soit réalisée.

if ($a === 9 || $b > $c ) {
    echo 'Ok, pour au moins l\'une des conditions <br>';

}

$couleur = 'jaune';

    switch($couleur){
        case 'bleu' :
            echo 'Vous aimez le bleu';
            break;
        case 'rouge' :
            echo 'Vous aimez le rouge';
            break;
        case 'vert' :
            echo 'Vous aimez le vert';
            break;
        default : echo 'Vous n\'aimez ni le bleu, ni le rouge, ni le vert';
        }

echo '<br>';


    if ($couleur == 'bleu'){
        echo 'Vous aimez le bleu';
    }elseif ($couleur == 'rouge'){
        echo 'Vous aimez le rouge';

    }elseif ($couleur == 'vert'){
        echo 'Vous aimez le vert';

    }else {
        echo 'Vous n\'aimez ni le bleu, ni le rouge, ni le vert';
        
    }
    echo '<br>';


    $animal = 'rat';
    switch($animal){
        case 'chien' :
            echo 'Wouf';
            break;
        case 'chat' :
            echo 'Miaou';
            break;
        case 'oiseau' :
            echo 'cui cui';
            break;
        default : echo 'Je ne connais pas cet animal';
    }
       
// -------------------------------
echo '<h2>Les tableaux</h2>';
// -------------------------------
// Un tableau de données ARRAY est déclaré comme une variable améliorée dans laquelle on stocke une multitude de valeurs. Ces valeurs peuvent être de n'importe quel type et possède un indice par default dont la numértation commence à 0.(Siga, il faut suivre le cours! :p)

$liste= ['France', 'Italie', 'Espagne', 'Portugal'];
echo $liste[3];
echo '<br>';

// print $liste;
var_dump($liste); // Affiche le contenue d'un tableau avec le type des valeurs
echo '<br>';

echo '<pre>';
print_r($liste); // Affiche le contenu du tableau
echo '</pre>';

echo '<pre>';
var_dump($liste);
echo '</pre>';

// Autre façon de déclarer un tableau ARRAY :
$liste2 = array('France', 'Italie', 'Espagne', 'Portugal');
echo $liste2[0];


$liste2[] = 'Algerie';

echo '<pre>';
var_dump($liste2);
echo '</pre>';

// -------------------------------
echo '<h3>Les tableaux associatifs</h3>';
// -------------------------------
$user = [
    'prenom' => 'Rachid',
    'nom' => 'Edjekouane',
    'age' => 40,
    'telephone' => '06 56 87 45 36'
];


// Bonjour je m'appelle Rachid Edjekouane, j'ai 40 ans et mon numéro de telephone est le : 06 56 87 45 36
echo $user['telephone'];
echo '<br>';

// echo "Bonjour je m'appelle $user[0] $user[1], j'ai $user[2] ans et mon numéro de telephone est le : $user[3]";
echo 'Bonjour, je m\'appelle ' . $user['prenom'] .' '. $user['nom']. ', j\'ai '. $user['age'].' ans et mon numéro de telephone est le : '. $user['telephone'];

// -------------------------------
echo '<h3>Les structures itératives : les boucles</h3>';
// -------------------------------

// Boucle while :
    $i = 0; //On initialise
    while($i<5){ // Tant que $i est inférieur à 5, on execute les accolades
        echo $i . '<br>';
        $i++; // On incremente $i de 1 à chaque tour pour que la condition d'entrée devienne fausse à un moment

    }
echo'<select>';
$i= 1920;
while($i <= 2020){
    echo "<option>$i</option>";
    $i++;
}
echo'</select>';


    
    ?>


<select>
    <?php
$i = 1920;
while($i <= 2020){
     echo  '<option>'.$i.'</option>';
    $i++;
}
        ?>
</select>
    
<?php
// Boucle for() :
    for($i = 0; $i < 10; $i++){
        echo '<p>Salut tout le monde !</p>';
    }
?>

<select>
    <?php
    for($i = 1920; $i <= 2020; $i++){
    ?>
    <option value="<?= $i; ?>"><?= $i; ?></option>
    <?php }?>
</select>

<?php


echo '<br>';


// Creer un tableau de 5 animaux
$animals = ['chien', 'chat', 'lion', 'poisson', 'oiseau'];

for($i = 0; $i < count($animals); $i++){
    echo $animals[$i]. '<br>';
}
echo '<br>';


// Boucle foreach()
foreach($animals as $animal){
    echo $animal. '<br>';
}
echo '<br>';

// Creer un tableau associatif voiture
// couleur => jaune
// modele => bmw
// annee => 2018

$voiture = [
    'couleur' => 'jaune',
    'modele' => 'bmw',
    'annee' => 2018
];

foreach($voiture as $carac){
    echo $carac . '<br>';
}

echo '<br>';

foreach($voiture as $key => $carac){
    echo $key . ' : '. $carac . '<br>';
}

// -------------------------------
echo '<h2>Fonctions prédéfinies</h2>';
// -------------------------------

// La fonction substr() permet de tronquer une chaine de caractere. 
// Le premier chiffre déclare à "partir de".
// Le deuxième chiffre déclare le nombre de caractere que l'on garde.
echo substr('Bonjour, je m\'appelle Rachid. Je suis formateur', 0, 10);
echo '<br>';

// Déclarer une variable description (extrait)
// extraire les 100 premiers caractere suivi de "..."

$description = 'L\'univers de Star Wars se déroule dans une galaxie qui est le théâtre d\'affrontements entre les Chevaliers Jedi et les Seigneurs Sith, personnes sensibles à la Force, un champ énergétique mystérieux leur procurant des pouvoirs psychiques. Les Jedi maîtrisent le Côté lumineux de la Force, pouvoir bénéfique et défensif, pour maintenir la paix dans la galaxie. Les Sith utilisent le Côté obscur, pouvoir nuisible et destructeur, pour leurs usages personnels et pour dominer la galaxie.';

echo substr($description, 0, 100) .'...';
echo '<br>';


$message = '    edjek@gmail.com    ';
// La fonction trim() permet de supprimer les espaces au DEBUT et à la FIN dans une chaine de caractere.
echo trim($message);

// -------------------------------
echo '<h2>Les fonctions utilisateurs</h2>';
// -------------------------------

// On déclare une fonction avec le mot clé "function" suivi du nom (que l'on veut) de la fonction puis d'une paire de ()
function separation(){
    echo '<br>';
}

echo 'coucou';
// Pour executer une fonction, on l'appelle par son nom suivi d'une paire de ()
separation();
echo 'ça va?';
separation();

// Fonction avec parametre et return
function bonjour($name){
    return "Bonjour, je m'appelle $name";
}

$name = 'Rachid';
$res = bonjour($name);
echo $res;

separation();


// Exercice : écrire une fonction factureEssence() qui calcule le coût total de votre facture en fonction du nombre de litres d'essence que vous indiquez lors de l'appel de la fonction.
// Le prix du litre est 1.9
// Cette fonction retourne la phrase "Votre facture est de X euros pour Y litres d'essence." où X et Y sont des variables.
// Afficher le resultat de la fonction

function factureEssence($litres){
     $res = $litres * 1.9;
     return "Votre facture est de $res euros pour $litres litres d'essence.";
}

echo factureEssence(10);

// -------------------------------
echo '<h2>Les super globales</h2>';
// -------------------------------
// Les superglobales sont des variables de type ARRAY (tableau associatif) qui sont disponibles dans tous les contextes du script


function debbug($var){
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}

// $_SERVER contient des informations liées au serveur
debbug($_SERVER);
echo $_SERVER['MYSQL_HOME'];

separation();

// Afficher à chaque fois dans un paragraphe
// Adresse IP du serveur :
// Nom du fichier executé :
// Chemin du fichier :

echo "Adresse IP du serveur : " . $_SERVER['SERVER_ADDR'];
separation();
echo "Nom du fichier executé : " . $_SERVER['SCRIPT_NAME'];
separation();
echo "Chemin du fichier executé : " . $_SERVER['SCRIPT_FILENAME'];

// $_GET
var_dump($_GET); // $_GET contient les informations envoyées en paramètre dans l'URL

// $_POST
var_dump($_POST); // $_POST contient les informations envoyées en paramètre dans le corps de la requete HTTP

// -------------------------------
echo '<h3>Les sessions</h3>';
// -------------------------------
// Une session permet de conserver des informations à travers le site. Ces information sont stockées dans un fichier temporaire sur le serveur. Ce fichier est relié à un internaute grâce à un identifiant unique : le session_id. Ce fichier peut contenir des informations sensibles : il ne faut donc pas le laisser à la portée de tout le monde. C'est pour cela qu'il est stocké dans un dossier temporaire du serveur, inaccessible aux internautes.

// Pour accéder à la session, il faut commencer par la démarer avec la fonction session_start().
// Doit être déclarer en premier avant même tout élément HTML
session_start();

// $_SESSION
var_dump($_SESSION);

// Ajouter des informations à la session
$_SESSION['pseudo'] ='tintin';

// Supprimer des informations de la session
unset($_SESSION['pseudo']);

// Supprime le fichier de session de serveur.
session_destroy();

// Vide la fichier de session sans le supprimer du serveur.
session_unset();




// -------------------------------
echo '<h2>Les inclusions de fichier</h2>';
// -------------------------------
// En PHP, il est possible d'inclure des fichiers dans d'autres fichiers avec l'instruction require, include, include_once ou encore require_once (on utilise plutot require_once en pratique)

// require 'inclus.php'; // le fichier est obligatoire pour le fonctionnement du site. Si le fonctionnement du site.

include './include.inc.php';
require './include.inc.php';


// Le _once permet de verifier si le fichier a déjà été inclus. Si c'est le cas, il ne ré-inclut pas.

include_once './include.inc.php';

require_once './include.inc.php';
echo $doranco;
echo 'Je suis un message';




?>

</body>
</html>