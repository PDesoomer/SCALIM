<?php
  try {
      $db = new PDO('mysql:host=localhost; dbname=cv', 'root', '');
      $db->query("SET NAMES UTF8");
  } catch (exception $e) {
      die('Erreur ' . $e->getMessage());
  }


  if (!empty($_POST["titre"])) {
    $titre = addslashes($_POST["titre"]);
    $db->query("UPDATE membres SET titre = '$titre'");
  }

  if (!empty($_POST["titre"])) {
    $adresse = addslashes($_POST["adresse"]);
    $db->query("UPDATE membres SET adresse = '$adresse'");
  }

  if (!empty($_POST["age"])) {
    $age = addslashes($_POST["age"]);
    $db->query("UPDATE membres SET age = '$age'");
  }

  if (!empty($_POST["telephone"])) {
    $telephone = addslashes($_POST["telephone"]);
    $db->query("UPDATE membres SET telephone = '$telephone'");
  }

  if (!empty($_POST["email"])) {
    $email = addslashes($_POST["email"]);
    $db->query("UPDATE membres SET email = '$email'");
  }

  if (!empty($_POST["staut"])) {
    $statut = addslashes($_POST["staut"]);
    $db->query("UPDATE membres SET statut = '$statut'");
  }


header("location:../pannel.php");

 ?>
