<?php
include "../entities/sav.php";
include "../core/savC.php";
if(isset($_POST["categorie"]) and isset($_POST["commentaire"]) and isset($_POST["solution"]) and isset($_POST["nom"])and isset($_POST["star"]) )
{
    $sav=new sav($_POST["categorie"],$_POST["commentaire"],$_POST["solution"],$_POST["nom"],$_POST["star"]);
    var_dump($sav);

    $savC=new savC();

    $savC->ajoutersav($sav);

    header("location:index.php");
}
else
{
    echo "categorie Déja Utilisé";
}
?>