<?php
  try {
      $db = new PDO('mysql:host=localhost; dbname=cv', 'root', '');
      $db->query("SET NAMES UTF8");
  } catch (exception $e) {
      die('Erreur ' . $e->getMessage());
  }

  if (!empty($_POST["titre"]) && !empty($_POST["paragraphe"])) {

    $titre = addslashes($_POST["titre"]);
    $paragraphe = addslashes($_POST["paragraphe"]);

    $db->query("INSERT INTO diplomes (titre, description) VALUES ('$titre', '$paragraphe')");
  }

  if (!empty($_POST["titre_modif"]) && !empty($_POST["paragraphe_modif"]) && !empty($_POST["id_modif"])) {

    $titre = addslashes($_POST["titre_modif"]);
    $paragraphe = addslashes($_POST["paragraphe_modif"]);
    $id = addslashes($_POST["id_modif"]);


    $db->query("UPDATE diplomes SET titre = '$titre', description = '$paragraphe' WHERE id_diplome = $id");

  }

  if(!empty($_POST["id_suppr"]))
  {
    $id = addslashes($_POST["id_suppr"]);
    $db->query("DELETE FROM diplomes WHERE id_diplome = $id");
  }


    header("location:../pannel.php#diplomes");
?>
