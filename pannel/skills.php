<?php
try {
    $db = new PDO('mysql:host=localhost; dbname=cv', 'root', '');
    $db->query("SET NAMES UTF8");
} catch (exception $e) {
    die('Erreur ' . $e->getMessage());
}

if (!empty($_POST["skill1"]) && !empty($_POST["pourcentage_skill1"]) && !empty($_POST["id_skill"])) {
  $id = addslashes($_POST["id_skill"]);
  $skill1 = addslashes($_POST["skill1"]);
  $db->query("UPDATE skills SET competence = '$skill1' WHERE id_skills = $id");

  $pourcentage_skill1 = addslashes($_POST["pourcentage_skill1"]);
  $db->query("UPDATE skills SET pourcentage = '$pourcentage_skill1' WHERE id_skills = $id");
}

if(!empty($_POST["add_skill"]) && !empty($_POST["add_pourcentage_skill"]))
{
  $add_skill = addslashes($_POST["add_skill"];
  $add_pourcentage = addslashes($_POST["add_pourcentage_skill"]);

  $db->query("INSERT INTO skills (competence, pourcentage) VALUES ('$add_skill', $add_pourcentage)");
}

if(!empty($_POST["id_delete_skill"]))
{
    $delete_skill = addslashes($_POST["id_delete_skill"]);
    $db->query("DELETE FROM skills WHERE id_skills = $delete_skill");
}

header("location:../pannel.php#skills");
 ?>
