<html>
<head>
<meta charset="utf8">
</head>
<body>
<?php 
include '../entities/clients.php';
//$log="admin";
//$mdp="admin";
/*$servername="localhost";
	$username="root";
	$password="";
	$dbname="dblog";
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", 
	$username, $password);
	$req="select * from users where user_name='$login' && user_pass='$pwd'";
	$rep=$conn->query($req);
	$res=$rep->fetchAll();
	*/
$c=new Database();
$conn=$c->connexion();
$user=new clients($_POST['log'],$_POST['mdp'],$conn);
$u=$user->Logedin($conn,$_POST['log'],$_POST['mdp']);

	//var_dump($u);
//$logR=$_POST['log'];
//$mdpR=$_POST['mdp'];
$vide=false;
if (!empty($_POST['log']) && !empty($_POST['mdp'])){
	
	foreach($u as $t){
		$vide=true;
	if ($t['login']==$_POST['log'] && $t['mdp']==$_POST['mdp']){
		
		session_start();
		$_SESSION['l']=$_POST['log'];
		$_SESSION['p']=$_POST['mdp'];
		$_SESSION['r']=$t['idclient'];
		header("location:index.php");
		
		}
	
}
if ($vide==false) { 
         // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
         echo '<body onLoad="alert(\'Membre non reconnu...\')">'; 
         // puis on le redirige vers la page d'accueil
         echo '<meta http-equiv="refresh" content="0;URL=auth.html">'; 
      } 
}	  
 
else { 
      echo "Les variables du formulaire ne sont pas déclarées.<br> Vous devez remplir le formulaire"; 
     ?> <a href="auth.html">Retour au formulaire</a>	 <?php 
}  

?> 
</body>
</html>