<?php
	session_start();
	require_once("controleur/controleur.class.php"); 
	require_once("controleur/config_db.php"); 
	//instanciation de la classe Controleur
	$unControleur = new Controleur($serveur, $bdd, $user, $mdp);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Site de la scolarité d'IRIS </title>
</head>
<body>
	<center>
		<img src="images/logo.png" width="200" height="200">
		<h1> Bienvenue à l'intranet d'IRIS</h1>

	<?php
	if (isset($_POST['SeConnecter']))
		{
			$email = $_POST['email']; 
			$mdp = $_POST['mdp']; 
			//vérification dans la base 
			$chaine ="*"; 
			$where =array("email"=>$email, "mdp"=>$mdp);
			$unControleur->setTable ("user"); 
			$unUser = $unControleur->selectWhere($chaine, $where); 
			var_dump($unUser);
			if (isset($unUser['email'])){
				$_SESSION['email'] = $unUser['email']; 
				$_SESSION['role'] = $unUser['role'];
				//bienvenue en JS 
				header("Location: index.php");
			}else{
				echo "Veuillez vérifier vos identifiants"; 
			}
		}

	if( ! isset($_SESSION['email']))
	{
		require_once("vue/vue_connexion.php"); 
	}
	else {
	?>
	<a href="menu.php?page=0">
		<img src="images/home.png" width="100" height="100"> </a>
	<a href="index.php?page=1">
		<img src="images/classes.png" width="100" height="100"> </a> 
	<a href="index.php?page=2">
		<img src="images/profs.png" width="100" height="100"> </a>
	<a href="index.php?page=3">
		<img src="images/etudiants.png" width="100" height="100"> </a>
	<a href="index.php?page=4">
		<img src="images/matieres.png" width="100" height="100"> </a>
	<a href="menu.php?page=5">
		<img src="images/deconnexion.jpg" width="100" height="100"> </a>
	<br/> <br/> <br/>
	<?php
		if (isset($_GET['page'])) $page = $_GET['page']; 
		else $page = 0; 
		
		switch($page){
			case 1 : require_once("gestion_classes.php"); 	
					 break;
			case 2 : require_once("gestion_profs.php"); 	
					 break;
			case 3 : require_once("gestion_etudiants.php");
					 break;
			case 4 : require_once("gestion_matieres.php"); 	
					 break; 
			case 5 : unset($_SESSION);  
					 session_destroy(); 
					 header("Location: index.php");
					 break;
			case 0 : require_once("home.php"); 	
					 break;
			default : require_once("erreur.php"); 	
					 break;
		}
	}
	?>
	</center>
</body>
</html>






