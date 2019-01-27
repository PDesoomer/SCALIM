<?php
  try {
      $db = new PDO('mysql:host=localhost; dbname=cv', 'root', '');
      $db->query("SET NAMES UTF8");
  } catch (exception $e) {
      die('Erreur ' . $e->getMessage());
  }


  if (!empty($_POST["titre"]) && !empty($_POST["paragraphe"]) && !empty($_POST["matiere"]) && !empty($_FILES["test"]["name"])) {

    $titre = addslashes($_POST["titre"];
    $paragraphe = addslashes($_POST["paragraphe"];
    $matiere = addslashes($_POST["matiere"];
    $file = addslashes($_FILES["test"]["name"];


    $db->query("INSERT INTO portfolio (titre, description,matiere, image) VALUES ('$titre', '$paragraphe', '$matiere', '$file')");
  }

  if (!empty($_POST["titre_modif"]) && !empty($_POST["paragraphe_modif"]) && !empty($_POST["id_modif"]) && !empty($_POST["matiere_modif"]) && !empty($_POST["yousk2"]))
  {

    $titre = addslashes($_POST["titre_modif"]);
    $paragraphe = addslashes($_POST["paragraphe_modif"]);
    $id = addslashes($_POST["id_modif"]);
    $matiere = addslashes($_POST["matiere_modif"]);
    $img = addslashes($_POST["yousk2"]);

    $db->query("UPDATE portfolio SET titre = '$titre', description = '$paragraphe', matiere = '$matiere', image = '$img' WHERE id_portfolio = $id");
  }

  if(!empty($_POST["id_suppr"]))
  {
    $id = addslashes($_POST["id_suppr"]);
    $db->query("DELETE FROM portfolio WHERE id_portfolio = $id");
  }


    header("location:../pannel.php#portfolio");
?>
