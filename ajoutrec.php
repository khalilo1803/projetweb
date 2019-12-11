<?php
include "../entities/rec.php";
include "../core/recC.php";
if(isset($_POST["type"]) and isset($_POST["idlivraison"]) and isset($_POST["commentaire"]) )
{
    $rec=new rec($_POST["type"],$_POST["idlivraison"],$_POST["commentaire"],"0");

    $recC=new recC();

    $recC->ajouterrec($rec);
    header("location:indexrec.html");
   // header("location:modifiertype.php");
}
else
{
    echo "categorie Déja Utilisé";
}
?>