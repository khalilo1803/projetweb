<?php

include "../config1.php";
class commandeC
{
    function ajoutercommande($commande)
    {
        $sql= "insert into dbpatisserie.commande(refcommande, idclient, prixtotal,etat,detail, date) values (:refcommande,:idclient,:prixtotal,:etat,:detail,:date)";
        $db = config1::getConnexion();
        try
        {
            $req=$db->prepare($sql);
            
            $refcommande=$commande->getrefcommande();
            $prixtotal=$commande->getprixtotal();
            $idclient=$commande->getidclient();
            $etat=$commande->getetat();
            $detail=$commande->getdetail();
            $date=$commande->getdate();

          
            $req->bindValue(':refcommande',$refcommande);
            $req->bindValue(':prixtotal',$prixtotal);
            $req->bindValue(':idclient',$idclient);
             $req->bindValue(':etat',$etat);
              $req->bindValue(':detail',$detail);
            $req->bindValue(':date',$date);

            $req->execute();

        }
        catch (Exception $e)
        {
            die('Erreur: Un commande avec ce refcommande existe deja');

        }

    
     }
     function affichercommande()
    {

        $sql="select * from dbpatisserie.commande where idclient = 25647";

        $db = config1::getConnexion();
        try
        {
            $list=$db->query($sql);
            return $list;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
    function supprimercommande($refcommande){
        $sql="DELETE FROM commande where refcommande= :refcommande";
        $db = config1::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':refcommande',$refcommande);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
}
function modifiercommande($refcommande,$idclient,$prixtotal,$etat,$date)
    {
        $sql="update dbpatisserie.commande set prixtotal= '$prixtotal', idclient='$idclient', etat='$etat',date='$date' where refcommande='$refcommande'";
        $db = config1::getConnexion();
        try
        {
            $db->query($sql);
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
    function modifiercommande1($refcommande,$etat)
    {
        $sql="update dbpatisserie.commande set  etat='$etat' where refcommande='$refcommande'";
        $db = config1::getConnexion();
        try
        {
            $db->query($sql);
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }


}