<?php
// $id = $_POST['id'];
$nom = $_POST['nom'];
$age = $_POST['age'];
$email = $_POST['email'];
$mdp = $_POST['mdp'];
$mdpConfirm = $_POST['mdpConfirm'];


$connexion = new PDO("mysql:host=localhost;dbname=impex", "root", "");
$sql = " INSERT INTO inscription (id , nom , age , email , mdp , mdpConfirm ) VALUES (?,?,?,?,?,?) ";
$stmt = $connexion->prepare($sql);
$stmt->bindValue(1, $id, PDO::PARAM_STR);
$stmt->bindValue(2, $nom, PDO::PARAM_STR);
$stmt->bindValue(3, $age, PDO::PARAM_STR);
$stmt->bindValue(4, $email, PDO::PARAM_STR);
$stmt->bindValue(5, $mdp, PDO::PARAM_STR);
$stmt->bindValue(6, $mdpConfirm, PDO::PARAM_STR);
$stmt->execute();

echo $sql;

header('location:index.php');
