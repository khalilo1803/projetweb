<?php
require_once('connexion.php');
$ncin=$_POST['ncin'];
$nomlivreur=$_POST['nomlivreur'];
$prenomlivreur=$_POST['prenomlivreur'];
$npermis=$_POST['npermis'];
$requete="INSERT INTO livreur(ncin,nomlivreur,prenomlivreur,npermis)VALUES(".$ncin.",'".$nomlivreur."','".$prenomlivreur."',".$npermis.")";
$resultat = mysqli_query($con, $requete);
if ($resultat == FALSE) { 
    echo "Echec de lexécution de la requête.<br />"; 
 } 
 else { 
    echo "Personne enregistrée.<br />"; 
 } 
 if (mysqli_close($con)) { 
    echo 'Déconnexion réussie.<br />'; 
  } 
  else { 
    echo 'Echec de la déconnexion.'; 
  } 
  




?>