<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
     
	
<title>DS-MATO</title>
<style>
	@import url('https://fonts.googleapis.com/css2?family=IM+Fell+English+SC&family=Raleway&family=Readex+Pro&family=Sriracha&display=swap');
body{
	margin: 0;
	padding: 0;
	font-family: 'Raleway', sans-serif;
}
header{
	height: 100vh;
	background: url(img/couverture.jpg);
	background-size: cover;
	background-position: center;
	color: white;
	text-align: center;
	padding-right: 50px;
	padding-left: 20px;
}
header nav{
	align-items: center;
	display: flex;
	flex: wrap;
	justify-content: space-between;
}
header nav a{
	color: white;
	text-decoration: none;
	margin-right: 50px;
	font-size: 25px;
}

header nav a:hover{
	color: #960f41;
	border-bottom: 2px solid #960f41;
}
header .principal{
	margin-top: 200px;
	font-size: 40px;
}
header .principal h3{
	margin-top: -30px;
	padding: 70px;
	font-size: 30px;
}

.premiere-presentation{
	background-color: #960f41;
	color: white;
	padding: 30px;
	display: flex;
	flex-wrap: wrap;
}
.premiere-presentation .div-gauche{
	width: 60%;
	margin-right: 100px;
}
.premiere-presentation p.p1{
	font-size: 30px;
}



@media screen and (max-width: 810px){
	.premiere-presentation .div-gauche{
	width: 100%;
	margin-right: 100px;
}
	.premiere-presentation .div-droite{
		display: block;
		margin-left: auto;
		margin-right: auto;
	}
}

/*bouton*/
.bout{
	
	height: 100vh;
	justify-content: center;
	align-items: center;
	display: flex;
	justify-content: space-evenly;
}

.bout button.btn{
	background: none;
	width: 250px;
	height: 60px;
	border: 4px solid #960f41;
	font-size: 20px;
	font-weight: bold;
	color: #960f41;
	transition: .4s linear;
	position: relative;
	bottom:220px;
}
.bout button.btn:hover{
	background:#960f41;
 
 	color: white;
 }


.tab div {
  display: none;
  
  position:relative;
  bottom: 60px;
  

}

.tab div:target {
  display: block;
}
</style>

</head>
<body>

	<header>
		<nav>
			<div class="logo">
				<img src="img/logo.png" style="font-size:30px">
			</div>
			<div class="onglets">
				<a href=""><i class="fas fa-home"></i>Accueil</a>
				<a href="Ds_mato.php"><i class="fas fa-info"></i>Qui sommes-nous</a>
				<a href="rdv.php"><i class="far fa-calendar-minus"></i>Prendre rendez-vous</a>
				<a href="contact.php"><i class="fas fa-phone"></i>Contactez-nous</a>
			</div>
		</nav>
		<div class="principal">
			<h1><i class="far fa-building"></i> EURL DS-MATO</h1>
			<h3>Confection de vêtements et lingeries </h3>
		</div>
	</header>
	<section class="premiere-presentation">
	<div class="div-gauche">
		<p class="p1">Le spécialiste de la confection de vêtements professionnels.</p><i><p><br>L’usine de confection DS-MATO vous reçoit toute la semaine dans ses locaux situé à la commune d’Agouni Gueghrane. Un encadrement professionnel et un effectif producteur spécialisé seras à votre écoute.</p></i>
	</div>
	<div class="div-droite">
		<img src="img/div-droite.png" width="250">
	</div>
	</section>

<!-- boutons --> 
	<section class="bout">
	<a href="#link1">	<button class="btn">Notre effectif</button></a> 
	<a href="#link2">	<button class="btn">Notre materiel</button></a>
	</section>

<section>
<div class="tab">

<div id="link1">
  <h3>Content to Link 1</h3>
  <p>Hello World!</p>
</div>

<div id="link2">
	<center>
  <img src="img/eff.jpg" style="width: 100%">
  </center>
</div>
</div>
</section>


<?php	
require_once("vue/Footer.php");

?>


</body>
</html>