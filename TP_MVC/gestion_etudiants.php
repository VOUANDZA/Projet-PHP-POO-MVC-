<h3> Gestion des étudiants </h3>
<br/>
<?php

	$lEtudiant =null; 
	$unControleur->setTable ("etudiant");
	if (isset($_GET['idEtudiant']) && isset($_GET['action']))
	{
		$action = $_GET['action']; 
		$idEtudiant = $_GET['idEtudiant'];
		$where = array("idEtudiant"=>$idEtudiant);
		switch ($action) {
			case 'sup':
			 	$unControleur->delete($where);
				break;
			
			case 'edit':
				 $lEtudiant = $unControleur->selectWhere("*", $where);

				break;
		}
	}

	$unControleur->setTable ("classe");
	$lesClasses = $unControleur->selectAll(); 

	$unControleur->setTable ("etudiant");
	require_once ("vue/vue_insert_etudiant.php");
	
	if(isset($_POST['Modifier']))
	{
		$where = array("idEtudiant"=>$_GET['idEtudiant']);
		$tab=array("nom"=>$_POST["nom"], "prenom"=>$_POST["prenom"], 
			"email"=>$_POST["email"], 
			"tel"=>$_POST["tel"], 
			"mdp"=>$_POST["mdp"], 
			"idClasse"=>$_POST["idClasse"]);

		$unControleur->update ($tab, $where); 
		header("Location: index.php?page=3"); 
	}


	if (isset($_POST['Valider']))
	{
		$tab=array("nom"=>$_POST["nom"], "prenom"=>$_POST["prenom"], 
			"email"=>$_POST["email"], 
			"tel"=>$_POST["tel"], 
			"mdp"=>$_POST["mdp"], 
			"idClasse"=>$_POST["idClasse"]);
		$unControleur->insert ($tab); 
	}

	$unControleur->setTable ("etudiantsClasses");
	if(isset($_POST['Rechercher']))
	{
		$mot = $_POST['mot']; 
		$tab=array("nom", "prenom", "email", "tel");
		$lesEtudiants = $unControleur->selectSearch($tab, $mot);
	}else { 
		$lesEtudiants = $unControleur->selectAll(); 
	}
	
	require_once ("vue/vue_select_all_etudiants.php"); 
?>










