
<?php

// Ouverture des sessions sur la page web//
session_start();

//Co en BDD
$pdo = pdo_connect_mysql();

//MEs fonctions

function pdo_connect_mysql()
{
   $DB_HOST = 'localhost';
   $DB_USER = 'root';
   $DB_PWD = '';
   $DB_NAME = 'impex';
   try {
      return new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USER, $DB_PWD);
   } catch (PDOException $error) {
      die('Echec de la connexion');
   }
}
