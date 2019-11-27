<?php

include "../config.php";
class panierC
{
    function ajouterpanier($panier)
    {
        $sql= "insert into dbpatisserie.panier(refp, quantite) values (:refp,:quantite)";
        $db = config::getConnexion();
        try
        {
            $req=$db->prepare($sql);
            
            $refp=$panier->getrefp();
            $quantite=$panier->getquantite();
            
          
            $req->bindValue(':refp',$refp);
            $req->bindValue(':quantite',$quantite);
            

            $req->execute();

        }
        catch (Exception $e)
        {
            die('Erreur: Un panier avec ce refp existe deja');

        }

    
     }
     function afficherpanier()
    {

        $sql="select * from dbpatisserie.panier order by refp asc";

        $db = config::getConnexion();
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
    function supprimerpanier($refp){
        $sql="DELETE FROM panier where refp= :refp";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':refp',$refp);
        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
}
function modifierpanier($refp,$quantite)
    {
        $sql="update dbpatisserie.panier set quantite= '$quantite' where refp='$refp'";
        $db = config::getConnexion();
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