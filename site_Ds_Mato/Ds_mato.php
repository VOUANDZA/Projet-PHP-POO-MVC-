<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style-DS-MATO.css">


	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bsha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/a58a04c1aa.js" crossorigin="anonymous"></script>


	<link rel="stylesheet" href="https://cdnjs.font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>DS-MATO</title>
	
	<style>
		
@import url('https://fonts.googleapis.com/css2?family=IM+Fell+English+SC&family=Raleway&family=Readex+Pro&family=Sriracha&display=swap');

body{
	margin: 0;
	padding: 0;
	font-family: 'Raleway', sans-serif;
}
header{
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
	color: black;
	text-decoration: none;
	margin-right: 50px;
	font-size: 25px;
}

header nav a:hover{
	color: #960f41;
	border-bottom: 2px solid #960f41;
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

h3.mot_g{
	color: #960f41;
	padding: 30px;
}






	</style>
</head>
<body>

	<header>
		<nav>
			<div class="logo">
				<img src="img/logo.png">
			</div>
			<div class="onglets">
				<a href="index.php"><i class="fas fa-home"></i>Accueil</a>
				<a href="Ds_mato.php"><i class="fas fa-info"></i>Qui sommes-nous</a>
				<a href="rdv.php"><i class="far fa-calendar-minus"></i>Prendre rendez-vous</a>
				<a href="contact.php"><i class="fas fa-phone"></i>Contactez-nous</a>
			</div>
		</nav>
		</header>
		<section class="premiere-presentation">
	<div class="div-gauche">
		<p class="p1">Histoire de l???entreprise </p><p><br>Apr??s avoir acquis un dipl??me de BREVET TECHNICIEN SUPERIEUR dans la technologie de confection de v??tements et lingerie dans les ann??es 1979. <br>
Le g??rant c???est perfectionn?? pendant de longues ann??es depuis dans plusieurs entreprises de production ??tatique alg??rienne.<br>
Par ailleurs la grande exp??rience acquise au fil des ann??es cela nous a permis la cr??ation de notre propre entreprise de confection en 1996 d??nomm??e la EURL DS-MATO sp??cialis?? dans la production de v??tements et dans les prestations de services.<br>
L???exp??rience de l???encadrement et sa main d?????uvre qualifi?? cela nous a entrain?? une grande pers??v??rance dans notre activit??.<br>
Tr??s bonnes relations humaines avec notre diverse client??le, meilleure qualit?? de nos produits, le bon respect des d??lais de livraisons.
</p>
	</div>
	<div class="div-droite">
		<img src="img/directeur.png" width="450">
	</div>
	</section>

<section>
	<center>
	<h1>le G??rant :</h1>
	<h3 class="mot_g">Le partage des t??ches. Travailler en ??quipe, c'est tout d'abord se diviser les t??ches pour ??tre plus efficace et plus rapide. Ainsi, on peut se consacrer pleinement ?? sa mission, plut??t que d'??tre sur tous les fronts.</h3>
	</center>
</section>
<?php	
require_once("vue/Footer.php");

?>
</body>
</html>