<?php
// $id = $_POST['id'];
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$email = $_POST['email'];
$sexe = $_POST['sexe'];
$groupe = $_POST['groupe'];
$age = $_POST['age'];

// if($prenom == 'Monmdp'){

//    echo 'J\ai le bon mdp';
// }


$connexion = new PDO("mysql:host=localhost;dbname=impex", "root", "");

$sql = " INSERT INTO client (id , prenom , nom , email , sexe , groupe , age ) VALUES (?,?,?,?,?,?,?) ";
$stmt = $connexion->prepare($sql);
$stmt->bindValue(1, $id, PDO::PARAM_STR);
$stmt->bindValue(2, $prenom, PDO::PARAM_STR);
$stmt->bindValue(3, $nom, PDO::PARAM_STR);
$stmt->bindValue(4, $email, PDO::PARAM_STR);
$stmt->bindValue(5, $sexe, PDO::PARAM_STR);
$stmt->bindValue(6, $groupe, PDO::PARAM_STR);
$stmt->bindValue(7, $age, PDO::PARAM_STR);
$stmt->execute();

echo $sql;

header('location:contact.php');

$idColis = $_POST['idColis'];
$poids = $_POST['poids'];
$lngColis = $_POST['lngColis'];
$lrgColis = $_POST['lrgColis'];
$hauteur = $_POST['hauteur'];
$pays = $_POST['pays'];
$adresse = $_POST['adresse'];
$numerAdresse = $_POST['numeroAdresse'];
$choix = $_POST['choix'];


$connexion = new PDO("mysql:host=localhost;dbname=impex", "root", "");

$sql = " INSERT INTO devis (idColis , poids , lngColis , lrgColis , hauteur , pays , adresse , numeroAdresse, choix ) VALUES (?,?,?,?,?,?,?,?,?) ";
$stmt = $connexion->prepare($sql);
$stmt->bindValue(1, $idColis, PDO::PARAM_STR);
$stmt->bindValue(2, $poids, PDO::PARAM_STR);
$stmt->bindValue(3, $lngColis, PDO::PARAM_STR);
$stmt->bindValue(4, $lrgColis, PDO::PARAM_STR);
$stmt->bindValue(5, $hauteur, PDO::PARAM_STR);
$stmt->bindValue(5, $pays, PDO::PARAM_STR);
$stmt->bindValue(6, $adresse, PDO::PARAM_STR);
$stmt->bindValue(8, $numeroAdresse, PDO::PARAM_STR);
$stmt->bindValue(7, $choix, PDO::PARAM_STR);
$stmt->execute();

echo $sql;

header('location:contact.php');
