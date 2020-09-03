

<?php


// Ouverture des sessions sur la page web//


if (isset($_POST['submit'])) {
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
