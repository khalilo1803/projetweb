<?php

include '../core/produitsC.php';
include '../core/produitC.php';
$crim = new panierC();
$listcrim = $crim->afficherpanier();
?>
<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Bakery</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/jquery-ui.css">			
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>	
			  <header id="header" id="home">
		  		<div class="header-top">
		  			<div class="container">
				  		<div class="row align-items-center">
				  			<div class="col-lg-6 col-sm-6 col-4 header-top-left no-padding">
					      	<div class="menu-social-icons">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-dribbble"></i></a>
								<a href="#"><i class="fa fa-behance"></i></a>
							</div>	    				  					
				  			</div>
				  			<div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
								<a class="btns" href="tel:+953 012 3654 896">+953 012 3654 896</a>
				  				<a class="btns" href="mailto:support@colorlib.com">support@colorlib.com</a>	
				  				<a class="btns" href="panier.html"><span class="Panier">Panier</span></a>		
				  				<a class="icons" href="tel:+953 012 3654 896">
				  					<span class="lnr lnr-phone-handset"></span>
				  				</a>
				  				<a class="icons" href="mailto:support@colorlib.com">
				  					<span class="lnr lnr-envelope"></span>
				  				</a>		
				  			</div>
				  		</div>			  					
		  			</div>
				</div>
			   <div class="container main-menu">
			    	<div class="row align-items-center justify-content-between d-flex">
			    		<a href="index.html"><img src="img/logo.png" alt="" title="" /></a>		
						<nav id="nav-menu-container">
							<ul class="nav-menu">
							  <li class="menu-active"><a href="index.html">Accueil</a></li>
							  <li><a href="about.html">A propos</a></li>
							  <li class="menu-has-children"><a href="">Produits</a>
							    <ul>
							      <li><a href="blog-home.html">Nos pains</a></li>
							      <li><a href="blog-single.html">Nos veinnoiseries</a></li>
							      <li class="menu-has-children"><a href="">Nos gateaux</a>
							        <ul>
							          <li><a href="#">Item One</a></li>
							          <li><a href="#">Item Two</a></li>
							        </ul>
							      </li>					              
							    </ul>
							  </li>
							  <li><a href="menu.html">Espace client</a></li>
							  <li><a href="team.html">Happy birthday</a></li>
							  
													  			          	          
							  <li><a href="contact.html">Contact</a></li>
							</ul>
						</nav><!-- #nav-menu-container -->		
			    	</div>
			    </div>
			  </header><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Panier			
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Accueil </a>  <span class="lnr lnr-arrow-right"></span>  <a href="contact.html"> Panier</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->				  

			<!-- Start contact-page Area -->
			<section class="contact-page-area section-gap">
				<div class="container">
					<table border="2">
    <tr>
        <td>refp</td>
        <td>Nom</td>
        <td>image</td>
        <td>Prix unitaire</td>
        
       
        <td>Supprimer</td>
           <td>update</td>

<option></option>
    </tr>
<?php
$C='';
$S=0;
$D=date("Y-m-d H:i:s"); 
foreach ($listcrim as $row)
{
    $crim1 = new produitC();
$listcrim1 = $crim1->afficherproduit1($row["refp"]);   
foreach ($listcrim1 as $row1)
{
	 $aa=$row1["image"];
        $bb=substr($aa, 63);
        $S=$S+(intval($row1["prix"])*intval($row["quantite"]));
        $C=$C.$row["quantite"].'x'.' '.$row1["nom"].'</br>';
 ?>    
    
        <tr>
            
            <td><?php echo $row["refp"] ?></td>
            <td><?php echo $row1["nom"] ?></td>
            <td><img src="<?php echo $bb ?>"></td>
            <td><?php echo $row1["prix"] ?></td>
           
       
            <td>
                <form action="supprimerpanier.php" method="get">
                    
                    <input type="hidden" id="refp" name="refp" value="<?php echo $row["refp"] ?>">
                   
                    <input style="background: none; border: none; color: red; text-decoration: underline;" type="submit" value="Supprimer">
                </form>
            </td>
            <td>
                <form action="modifierpanier.php" method="post">
                    
                      <input type="hidden" id="refp" name="refp" value="<?php echo $row["refp"] ?>">
                    <select name="quantite" id="quantite">
        <option value="1"   <?php if ($row["quantite"]==1) echo "selected" ; ?>
        >1</option>
        <option value="2"  <?php if ($row["quantite"]==2) echo "selected" ; ?>>2</option>
        <option value="3"  <?php if ($row["quantite"]==3) echo "selected" ; ?>>3</option></select>
                    <input style="background: none; border: none; color: red; text-decoration: underline;" type="submit" value="update">
                </form>
            </td>
            
        </tr>
       
    <?php
} }
  
?>
</table>
<?php echo 'le prix total est =   '.$S.' ' ?> ;
<form action="ajoutercommande.php" action="supprimerpanier.php" method="post">
                   
                    <input type="hidden" id="refcommande" name="refcommande" value="">
                    <input type="hidden" id="prixtotal" name="prixtotal" value="<?php echo $S ?>">
          <input type="hidden" id="idclient" name="idclient" value="25647">
          <input type="hidden" id="detail" name="detail" value="<?php echo $C ?>">
                    <input type="hidden" id="etat" name="etat" value="EN ATTENTE DE CONFIRMATION">
                    <input type="hidden" id="date" name="date" value="<?php echo $D ?>">
                    <button><input style="background: none; border: none; color: red; text-decoration: underline;" type="submit" value="Passer commande"></button>
                </form>
				</div>	
			</section>
			<!-- End contact-page Area -->

			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>About Us</h6>
								<p>
									If you own an Iphone, you’ve probably already worked out how much fun it is to use it to watch movies-it has that.
								</p>							
							</div>
						</div>
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
										<input class="form-control" name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" required="" type="email">
			                            	<button class="click-btn"><i class="lnr lnr-arrow-right" aria-hidden="true"></i></button>
			                            	<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>
										<div class="info"></div>
									</form>
								</div>
							</div>
						</div>						
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-dribbble"></i></a>
									<a href="#"><i class="fa fa-behance"></i></a>
								</div>
							</div>
						</div>	
						<div class="col-lg-12">
							<p class="footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>								
						</div>													
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->	

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
 			<script src="js/jquery-ui.js"></script>			
			<script src="js/owl.carousel.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>							
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>