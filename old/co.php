<?php


// Ouverture des sessions sur la page web//
session_start();

//Co en BDD
$pdo = pdo_connect_mysql();


//------------------------//
////////////déconnexion//////////////
//------------------------//
if ($_GET['deco'] == 1) {

   echo "Vous avez déconnectez votre compte";
   session_destroy();
   session_start();
   $_SESSION['co'] = false;
}
//------------------------//
////////////Fin déconnexion//////////////
//------------------------//



//------------------------//
////////////Verification MDP et user en DURE //////////////
//------------------------//
$info_user = $pdo->query('SELECT * FROM user WHERE mail="' . $_POST['user'] . '" AND mdp="' . $_POST['mdp'] . '"  ')->fetchColumn();

if ($info_user['user'] != '') {
   // }

   // if ($_POST['mdp'] == 'monmdp' && $_POST['user'] == 'Mylea' && $_GET['co'] == false) {


   // $SQL_Verif_User = ('SELECT * FROM user WHERE mdp="' . $_POST['mdp'] . '" AND mail="' . $_POST['mail'] . '" ');

   $_SESSION['user'] = 'Mylea';
   $_SESSION['Age'] = '8 ans';
   $style = 'enfante';
   $_SESSION['co'] = true;
}
//------------------------//
////////////Verification MDP et user en DURE //////////////
//------------------------//
//------------------------//
////////////Echec MDP et user //////////////
//------------------------//
elseif ($_POST['mdp'] != 'monmdp' and $_POST['mdp'] != '' or $_POST['user'] != 'Mylea' and $_POST['user'] != '') {

   echo 'Touche pas mon compte ou tu vas prendre D: ! ';
}
//------------------------//
////////////Verification MDP et user //////////////
//------------------------//




//------------------------//
////////////Connexion//////////////
//------------------------//
if ($_SESSION['co'] == true) {

   echo "Je suis en ligne !<br>";
   echo 'Bonjour chère ' . $_SESSION['user'];
}
//------------------------//
////////////Fin Connexion//////////////
//------------------------//

// var_dump($_SESSION);


?>


<html lang="fr">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
</head>

<body>

   <?php if ($_SESSION['co'] != true) { ?>
      <form method="POST" action='co.php'>
         <input name='user' value='' placeholder="Votre user">
         <input name='mdp' type='password' value='' placeholder="Votre mdp">
         <input value='Je me co' type='submit'>
      </form>
   <?php } elseif ($_SESSION['co'] == true) {



      $bot_enemi = rand(1, 3);

      echo '<hr>';

      switch ($_GET['signe']) {
         case 'pierre': {
               if ($bot_enemi == '2') echo "J'ai perdu le bot à fait feuille";
               elseif ($bot_enemi == '3') echo "j'ai gagné avec la pierre sur le ciseaux !";
               else   echo 'Match nul';
               echo '<br><hr>';
               echo "J'ai joué " . $_GET['signe'];

               if ($bot_enemi == 1) $bot_enemi = 'pierre';
               if ($bot_enemi == 1) $bot_enemi = 'feuille';
               if ($bot_enemi == 1) $bot_enemi = 'ciseaux';


               echo "Le bot à joué " . $bot_enemi . '<hr>';
               break;
            }
         case 'feuille': {
               if ($bot_enemi == '2') echo "J'ai perdu le bot à fait ciseaux";
               elseif ($bot_enemi == '1') echo "j'ai gagné avec la feuille sur la pierre  !";
               else   echo 'Match nul';
               echo '<br><hr>';
               echo "J'ai joué " . $_GET['signe'];

               if ($bot_enemi == 1) $bot_enemi = 'pierre';
               if ($bot_enemi == 2) $bot_enemi = 'feuille';
               if ($bot_enemi == 3) $bot_enemi = 'ciseaux';


               echo "Le bot à joué " . $bot_enemi . '<hr>';
               break;
            }
         case 'ciseaux': {
               if ($bot_enemi == '1') echo "J'ai perdu le bot à fait feuille";
               elseif ($bot_enemi == '2') echo "j'ai gagné avec le ciseaux sur la feuille !";
               else   echo 'Match nul';
               echo '<br><hr>';
               echo "J'ai joué " . $_GET['signe'];

               if ($bot_enemi == 1) $bot_enemi = 'pierre';
               if ($bot_enemi == 2) $bot_enemi = 'feuille';
               if ($bot_enemi == 3) $bot_enemi = 'ciseaux';


               echo "Le bot à joué " . $bot_enemi . '<hr>';
               break;
            }

            echo '<br><hr>';
            echo "J'ai joué " . $_GET['signe'];

            if ($bot_enemi == 1) $bot_enemi = 'pierre';
            if ($bot_enemi == 2) $bot_enemi = 'feuille';
            if ($bot_enemi == 3) $bot_enemi = 'ciseaux';


            echo "Le bot à joué " . $bot_enemi . '<hr>';

            echo $piece_modificateur . ' pièces d\'or de gagné';

            $_SESSION['piece'] += $piece_modificateur;


            echo "<hr>Il me reste " . $_SESSION['piece'] . " pièces d'or !<hr>";
      }


      if ($_GET['pieces'] == 'pieces') {

         $piece_modificateur = rand(1, 3);
         echo $piece_modificateur . ' pièces d\'or de gagné';

         $_SESSION['piece'] += $piece_modificateur;


         echo "<hr>Il me reste " . $_SESSION['piece'] . " pièces d'or !<hr>";
      }

      if ($_SESSION['piece'] > 30) {

         echo "J'ai gagné ! Youpi";
      }

   ?>

      <form><input type='submit' name='pieces' value='pieces'></form>


      <h1>Bonjour <?php echo $_SESSION['user']; ?> vous avez <?php echo $_SESSION['Age']; ?></h1>
   <?php
   }

   ?>

   <!-- <big><b> <a href='co.php?signe=pierre'>pierre</a></b></big>
   <big><b> <a href='co.php?signe=feuille'>feuille</a></b></big>
   <big><b> <a href='co.php?signe=ciseaux'>ciseaux</a></b></big> -->


   <a type='button' href='co.php?deco=1'>Je déco</a>

</body>

</html>


<?php

//MEs fonctions

function pdo_connect_mysql()
{
   $DB_HOST = 'localhost';
   $DB_USER = 'root';
   $DB_PWD = '';
   $DB_NAME = 'projet_cv';
   try {
      return new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USER, $DB_PWD);
   } catch (PDOException $error) {
      die('Echec de la connexion');
   }
}

?>