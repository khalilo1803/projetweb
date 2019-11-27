<?php
include "../core/commandeC.php";


$refcommande=$_POST["refcommande"];
$prixtotal=$_POST["prixtotal"];
$date=$_POST["date"];
$etat=$_POST["etat"];
$idclient=$_POST["idclient"];



$crimC=new commandeC();
$crimC->modifiercommande($refcommande,$idclient,$prixtotal,$etat,$date);
header("location:affichercommande1.php");