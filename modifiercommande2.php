<?php
include "../core/commandeC.php";


$refcommande=$_POST["refcommande"];

$etat=$_POST["etat"];




$crimC=new commandeC();
$crimC->modifiercommande1($refcommande,$etat);
header("location:affichercommande1.php");