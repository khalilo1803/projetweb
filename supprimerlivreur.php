<?php
    require_once("connexion.php");
    $idlivreur=$_GET['idlivreur'];
    $sql = "DELETE FROM livreur WHERE idlivreur = $idlivreur"; 
    $resultat = mysqli_query($con, $sql);
    header("location:listelivreur.php");

?>