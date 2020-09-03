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
$info_user = $pdo->query('SELECT * FROM inscription WHERE mail="' . $_POST['nom'] . '" AND mdp="' . $_POST['mdp'] . '"  ')->fetchColumn();

if ($info_user['nom'] != '') {
   // }

   // if ($_POST['mdp'] == 'monmdp' && $_POST['user'] == 'Mylea' && $_GET['co'] == false) {


   // $SQL_Verif_User = ('SELECT * FROM user WHERE mdp="' . $_POST['mdp'] . '" AND mail="' . $_POST['mail'] . '" ');

   $_SESSION['nom'] = 'Mylea';
   $_SESSION['Age'] = '8 ans';
   $style = 'enfante';
   $_SESSION['co'] = true;
} elseif ($_POST['mdp'] != 'monmdp' and $_POST['mdp'] != '' or $_POST['nom'] != 'Mylea' and $_POST['nom'] != '') {

   echo 'Touche pas mon compte ou tu vas prendre D: ! ';
}
