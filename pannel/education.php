<?php
  try {
      $db = new PDO('mysql:host=localhost; dbname=cv', 'root', '');
      $db->query("SET NAMES UTF8");
      $db->query("SET CHARACTER SET utf8");
  } catch (exception $e) {
      die('Erreur ' . $e->getMessage());
  }

  if (!empty($_POST["titre"]) && !empty($_POST["paragraphe"])) {

    $titre = addslashes($_POST["titre"]);
    $paragraphe = addslashes($_POST["paragraphe"]);

    $db->query("INSERT INTO education (titre, description) VALUES ('$titre', '$paragraphe')");
  }

  if (!empty($_POST["titre_modif"]) && !empty($_POST["paragraphe_modif"]) && !empty($_POST["id_modif"])) {

    $titre = addslashes($_POST["titre_modif"]);
    $paragraphe = addslashes($_POST["paragraphe_modif"]);
    $id = addslashes($_POST["id_modif"]);


    $db->query("UPDATE education SET titre = '$titre', description = '$paragraphe' WHERE id_edu = $id");

  }

  if(!empty($_POST["id_suppr"]))
  {
    $id = addslashes($_POST["id_suppr"]);
    $db->query("DELETE FROM education WHERE id_edu = $id");
  }


    header("location:../pannel.php#education");
?>
