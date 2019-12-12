<?php 

    include('connexion.php');



    
    $nomlivreur=$_POST['nomlivreur'];
    $prenomlivreur=$_POST['prenomlivreur'];
    $ncin=$_POST['ncin'];
    $npermis=$_POST['npermis'];
    $idlivreur=$_POST['idlivreur'];
    


    
    

    $sql = "UPDATE livreur SET nomlivreur='".$nomlivreur."' , prenomlivreur= , ncin=".$ncin." , npermis= WHERE idlivreur =".""; 
    $sql ="UPDATE `livreur` SET ,`ncin`=$ncin,`nomlivreur`=$nomlivreur,`prenomlivreur`='".$prenomlivreur."',`npermis`=".$npermis." WHERE `idlivreur` = ".$idlivreur;
    if(mysqli_query($con, $sql)){ 
    
    header("location:livreurProfil.php");
} else { 
    echo "ERROR: Could not able to execute $sql. "  
                            . mysqli_error($con); 
}  


?>