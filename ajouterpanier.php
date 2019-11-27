<?php
include "../entities/produits.php";
include "../core/produitsC.php";
/*if( isset($_POST["nom"]) and isset($_POST["prix"]) and isset($_POST["description"]) and isset($_POST["image"]))
{*/
    $cri=new panier($_POST["refp"],$_POST["quantite"]);
    $criC=new panierC();
    $criC->ajouterpanier($cri);
    header('Location: blog-single.php');
        
/*   
}
else
{
    echo "CIN Déja Utilisé";
}*/
?>