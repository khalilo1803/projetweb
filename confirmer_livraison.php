<?php
    include("connexion.php");
    
    //$requete="DELETE FROM notifications WHERE id_notification in (select id_notification from notification limit 1)";			
    $rr="DELETE FROM notifications order by id_notification desc limit 1 ";
    
	$resultat = $con->prepare($rr);	
	$resultat->execute();	
    //mail('oussama.rid@gmail.com','test subject','testing fake male','From: oussema.rid@gmail.com');
    header("location:liste_livraison.php");
	
?>