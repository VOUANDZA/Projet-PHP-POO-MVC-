<?php
	class Modele 
	{
		private $pdo; 
		private $uneTable ; 

		public function    __construct ($serveur, $bdd, $user, $mdp){
			$this->pdo = null; 
			try{
$this->pdo = new PDO("mysql:host=".$serveur.";dbname=".$bdd,$user, $mdp); 
			}
			catch (PDOException $exp)
			{
				echo "Erreur de connexion au SGBD"; 
			}
		}

		public function setTable ($uneTable)
		{
			$this->uneTable =$uneTable; 
		}

		public function selectAll ($chaine)
		{
		$requete = "select ".$chaine." from  ".$this->uneTable;
			$select = $this->pdo->prepare ($requete); 
			$select->execute(); 
			return $select->fetchAll ();  
		}
		
		public function selectWhere ($chaine, $where)
		{
			$champs = array(); 
			$donnees = array(); 
			foreach ($where as $cle=>$valeur)
			{
				$champs[] = $cle . "= :".$cle; 
				$donnees[":".$cle]= $valeur; 
			}
			$chaineWhere = implode("  and ", $champs);
			$requete ="select ".$chaine." from  ".$this->uneTable." where ".$chaineWhere;

			echo $requete; 
			var_dump($donnees);

			$select = $this->pdo->prepare ($requete); 
			$select->execute($donnees); 
			return $select->fetch ();
		}
		public function insert ($tab){
			$champs = array(); 
			$donnees = array(); 
			foreach ($tab as $cle=>$valeur)
			{
				$champs[] = ":".$cle; 
				$donnees[":".$cle]= $valeur; 
			}
			$chaine = implode(",", $champs); 
			$requete ="insert into ".$this->uneTable." values(null,".$chaine.");"; 
			$insert = $this->pdo->prepare($requete); 
			$insert->execute($donnees); 
		}
		public function update ($tab, $where){
			$champs = array(); 
			$donnees = array(); 
			foreach ($tab as $cle=>$valeur)
			{
				$champs[] = $cle . " = :".$cle; 
				$donnees[":".$cle]= $valeur; 
			}
			$chaine = implode(",", $champs);

			$champsWhere =array(); 
			foreach ($where as $cle=>$valeur)
			{
				$champsWhere[] = $cle." = :".$cle; 
				$donnees[":".$cle]= $valeur; 
			}
			$chaineWhere = implode("  and  ", $champsWhere);

			$requete ="update ".$this->uneTable." set ".$chaine ." where ".$chaineWhere;
			 
			$update = $this->pdo->prepare($requete); 
			$update->execute($donnees); 
		}

		public function delete ($where)
		{
			$champs = array(); 
			$donnees = array(); 
			foreach ($where as $cle=>$valeur)
			{
				$champs[] = $cle." = :".$cle; 
				$donnees[":".$cle]= $valeur; 
			}
			$chaine = implode("  and  ", $champs);

			$requete ="delete from   ".$this->uneTable."  where ".$chaine ;
			$delete = $this->pdo->prepare($requete); 
			$delete->execute($donnees);
		}

		public function selectSearch($tab, $mot)
		{
			$donnees =array(); 
			$champs=array(); 
			foreach ($tab as $cle) {
				$champs[] = $cle." like :mot"; 
				$donnees[":mot"] = "%".$mot."%"; 
			}
			$chaineWhere =implode(" or ", $champs); 
			$requete = "select * from ".$this->uneTable." where ".$chaineWhere;
			$select = $this->pdo->prepare($requete); 
			$select->execute($donnees);
			return $select->fetchAll(); 
		}
	}
?>



















