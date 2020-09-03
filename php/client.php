<?php

//------------------------//
////////////déconnexion//////////////
//------------------------//

if ($_GET['deco'] == 1) {
   $_SESSION['co'] = false;
}

//------------------------//
////////////Fin déconnexion//////////////
//------------------------//

//INSCRIPTION///////////
if ($_POST['inscription'] == 1) {
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

   header('location:/ITEEXPORT/index.php');
}
////////////connexion////////////////

if ($_POST['connexion'] == 1) {
   $email = $_POST['email'];
   $pass = $_POST['pass'];

   $db = new PDO("mysql:host=localhost;dbname=impex", "root", "");

   $sql = "SELECT * FROM inscription WHERE email ='$email' AND mdp = '$pass'";
   $result = $db->prepare($sql);
   $result->execute();

   if ($result->rowCount() > 0) {
      echo " Connexion réussie ";
   } else {
      echo " Erreur de connexion ";
   }
}
