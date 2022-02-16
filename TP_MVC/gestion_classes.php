<h3> Gestion des classes  </h3>
<?php
	$laClasse =null; 
	$unControleur->setTable ("classe");

	if(isset($_SESSION['email']) and $_SESSION['role']=="admin" )
	{
		if (isset($_GET['idClasse']) && isset($_GET['action']))
		{
			$action = $_GET['action']; 
			$idClasse = $_GET['idClasse'];
			$where = array("idClasse"=>$idClasse);
			switch ($action) {
				case 'sup':
				 	$unControleur->delete($where);
					break;
				
				case 'edit':
					 $laClasse = $unControleur->selectWhere("*", $where);

					break;
			}
		}


		require_once ("vue/vue_insert_classe.php");

		if(isset($_POST['Modifier']))
		{
			$where = array("idClasse"=>$_GET['idClasse']);
			$tab=array("designation"=>$_POST["designation"], "salle"=>$_POST["salle"], 
				"diplome"=>$_POST["diplome"]);
			$unControleur->update ($tab, $where); 
			header("Location: index.php?page=1"); 
		}
		if (isset($_POST['Valider']))
		{
			$tab=array("designation"=>$_POST["designation"], "salle"=>$_POST["salle"], 
				"diplome"=>$_POST["diplome"]);
			$unControleur->insert ($tab); 
		}

	}

	echo"<br/><h2> Liste des classes </h2><br/>"; 
	if(isset($_POST['Rechercher']))
	{
		$mot = $_POST['mot']; 
		$tab=array("designation", "salle", "diplome");
		$lesClasses = $unControleur->selectSearch($tab, $mot);
	}else {
		$chaine = "idClasse, designation, salle, diplome" ; 
		$lesClasses = $unControleur->selectAll($chaine); 
	}
	
	require_once ("vue/vue_select_all_classes.php"); 
?>

















