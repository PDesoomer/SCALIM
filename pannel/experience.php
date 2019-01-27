<?php
  try {
      $db = new PDO('mysql:host=localhost; dbname=cv', 'root', '');
      $db->query("SET NAMES UTF8");
  } catch (exception $e) {
      die('Erreur ' . $e->getMessage());
  }

  if (!empty($_POST["titre"]) && !empty($_POST["paragraphe"]) && !empty($_POST["date"])) {

    $date = addslashes($_POST["date"]);
    $titre = addslashes($_POST["titre"]);
    $paragraphe = addslashes($_POST["paragraphe"]);

    $db->query("INSERT INTO experience (date, titre, description) VALUES ('$date', '$titre', '$paragraphe')");
  }

  if (!empty($_POST["titre_modif"]) && !empty($_POST["paragraphe_modif"]) && !empty($_POST["date_modif"]) && !empty($_POST["id_modif"])) {

    $date = addslashes($_POST["date_modif"]);
    $titre = addslashes($_POST["titre_modif"]);
    $paragraphe = addslashes($_POST["paragraphe_modif"]);
    $id = $_POST["id_modif"];


    $db->query("UPDATE experience SET date = '$date' , titre = '$titre', description = '$paragraphe' WHERE id_exp = $id");

  }

  if(!empty($_POST["id_suppr"]))
  {
    $id = $_POST["id_suppr"];
    $db->query("DELETE FROM experience WHERE id_exp = $id");
  }

  header("location:../pannel.php#experience");

  ?>
