<?php
include("connexion.php");
$refcommande=$_GET['refcommande'];
//$requete="INSERT INTO livraison(refcommande)VALUES($refcommande)";
$requete="INSERT INTO `livraison` (`idlivraison`, `tempsestime`, `datelivraison`, `etat`, `idlivreur`, `idclient`, `refcommande`) VALUES
('', '00:15:00','', 0,4,1, '$refcommande')";
$resultat = mysqli_query($con, $requete);

header('location:ajouterlivraison.php');
?>