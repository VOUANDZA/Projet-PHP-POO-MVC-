<h3> Gestion des matières  </h3>
 
<br/>
<?php

	$laMatiere =null; 
	$unControleur->setTable ("matiere");
	if (isset($_GET['idMatiere']) && isset($_GET['action']))
	{
		$action = $_GET['action']; 
		$idMatiere = $_GET['idMatiere'];
		$where = array("idMatiere"=>$idMatiere);
		switch ($action) {
			case 'sup':
			 	$unControleur->delete($where);
				break;
			
			case 'edit':
				 $laMatiere = $unControleur->selectWhere("*", $where);

				break;
		}
	}

	$unControleur->setTable ("classe");
	$lesClasses = $unControleur->selectAll(); 
	$unControleur->setTable ("professeur");
	$lesProfesseurs = $unControleur->selectAll(); 
	$unControleur->setTable ("matiere");
	require_once ("vue/vue_insert_matiere.php");

	if(isset($_POST['Modifier']))
	{
		$where = array("idMatiere"=>$_GET['idMatiere']);
		$tab=array("nom"=>$_POST["nom"], "coef"=>$_POST["coef"], 
			"nbheures"=>$_POST["nbheures"], 
			"idProfesseur"=>$_POST["idProfesseur"], 
			"idClasse"=>$_POST["idClasse"]);
		$unControleur->update ($tab, $where); 
		header("Location: index.php?page=4"); 
	}

	if (isset($_POST['Valider']))
	{
		$tab=array("nom"=>$_POST["nom"], "coef"=>$_POST["coef"], 
			"nbheures"=>$_POST["nbheures"], 
			"idProfesseur"=>$_POST["idProfesseur"], 
			"idClasse"=>$_POST["idClasse"]);
		$unControleur->insert ($tab); 
	}

	$unControleur->setTable ("classesMatieresProfs");
	if(isset($_POST['Rechercher']))
	{
		$mot = $_POST['mot']; 
		$tab=array("nom", "coef", "nbHeures", "nomProf", "prenomProf", "designation");
		$lesMatieres = $unControleur->selectSearch($tab, $mot);
	}else { 
		$lesMatieres = $unControleur->selectAll(); 
	}
	 
	require_once ("vue/vue_select_all_matieres.php"); 
?>







