<?php
	require_once ("modele/modele.class.php"); 
	class Controleur 
	{
		private $unModele ; 

		public function __construct ($serveur, $bdd, $user, $mdp){
			$this->unModele= new Modele($serveur, $bdd, $user, $mdp);
		}

		public function selectAll ($chaine = "*")
		{
			return $this->unModele->selectAll($chaine);
		}
		public function setTable ($uneTable)
		{
			$this->unModele->setTable ($uneTable); 
		}
		public function insert ($tab)
		{
			$this->unModele->insert($tab);
		}

		public function update ($tab, $where)
		{
			$this->unModele->update($tab, $where);
		}

		public function delete ($where)
		{
			$this->unModele->delete($where);
		}
		public function selectWhere ($chaine="*",$where)
		{
			return $this->unModele->selectWhere($chaine,$where);
		}

		public function selectSearch($tab, $mot)
		{
			return $this->unModele->selectSearch($tab, $mot);
		}
	}
?>








