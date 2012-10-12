<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>iValdi Meubles Multimédia sommaire</title>
<link href="ivaldi_style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="caroufredsel.js"></script>
<style type="text/css">
.carrousel .slide {display:block; width:210px; height: 158px;}
</style>
</head>

<body>
	
	<div id="centrage">
	
	<!--------------------------EN TETE-------------------->
		
		
		<div id="header">
		
			<h1><img src="img/logoivaldi.jpg" /></h1>
		
			<nav id="menu_top">
              <ul>
                    <li><a href="index.php">Sommaire</a></li>
                    <li><a href="ivaldi_condition_vente.php">Nos conditions de vente</a></li>
                    <li><a href="ivaldi_produits.php">Nos produits</a></li>
                    <li><a href="ivaldi_contact.php">Contact</a></li>
                    
              </ul>
        	</nav>  
		
		</div> <!--fin HEADER-->
	
	
	
	
	
	<!---------------------CONTENU PRINCIPAL----------------->
	<div id="main">
	
	
	
			<!----------diapo-------->
				
				<div class="container" style="margin-top: 5px">
			
				<div class="carrousel" id="carrousel">
				
					<div class="slide">
					
							<a href="#">
							
								<img src="img/annonce_anton.gif" width="210" height="158">
							</a>
					</div>	
					
					
					<div class="slide">
					
							<a href="#">
							
							<img src="img/annonce_goliat.gif" width="210" height="158">
							
							</a>
					</div>	
					
				
				
					<div class="slide">
					
							<a href="#">
							
							<img src="img/annonce_husar.gif" width="210" height="158">
								
							</a>
					</div>	
				
				
					
					<div class="slide">
					
							<a href="#">
							
							<img src="img/annonce_ikea.gif" width="210" height="158">
								
							</a>
					</div>	
					
					
					
					
					<div class="slide">
					
							<a href="#">
							
								<img src="img/annonce_manen.gif" width="210" height="158">
								
							</a>
					</div>	
					
					
					
					
					
				
				</div>	
					
			<div id="pagination"></div>
			
		</div>	
				<!-------fin diapo-------->
		
		<p><img src="img/sommaire.jpg"/></p>
	
	</div> <!--fin MAIN-->
	
	<!------------------------PIED DE PAGE------------------>
	
	<div id="footer">
	
		<p>Sarl au capital de 700 000 € - Siège / Usine à Valdivienne<br/>
			SIRET : 401 889 548 000 12- TVA/ FR 75 - 401 889 548 <br/>
			RCS Poitiers B 401 889 548
		 </p>
	
	</div> <!--fin FOOTER-->
	
	
	
	</div> <!--fin CENTRAGE-->

</body>


<script type="text/javascript">
		$('#carrousel').caroufredsel({
				direction:'up',
				items: 1,
				auto: {
					items:1,
					easing:"linear",
					pauseDuration:5000,
				
				},
				circular: false,
				})
	
	
	</script>
</html>