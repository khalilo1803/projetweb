<?php
    $con = new mysqli("localhost","root","","bdpatisserie");
    if(!$con){
        echo("probleme de connexion");
        exit();
    }
?>