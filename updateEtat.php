<?php
include("connexion.php");

$idlivraison=$_GET['idlivraison'];
$sql = "UPDATE livraison SET etat=1  WHERE idlivraison=$idlivraison"; 
if(mysqli_query($con, $sql)){ 
    echo "Record was updated successfully."; 
    header("location:ui_livreur.php");
} else { 
    echo "ERROR: Could not able to execute $sql. "  
                            . mysqli_error($con); 
}  
header("location:ui_livreur.php");




?>