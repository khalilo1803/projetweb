<?php
require_once("connexion.php");
$nomlivreur=$_POST['nomlivreur'];
$prenomlivreur=$_POST['prenomlivreur'];
$ncin=$_POST['ncin'];
$npermis=$_POST['npermis'];

$sql = "UPDATE livreur SET nomlivreur = $nomlivreur, prenomlivreur = $prenomlivreur , ncin=$ncin , npermis=$npermis WHERE ncin=$ncin";
$resultat = mysqli_query($con, $sql);
header("location:listelivreur.php");
?>