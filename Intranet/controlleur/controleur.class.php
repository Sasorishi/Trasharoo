<?php
	include ("modele/modele.class.php");

	class Controleur
	{
		private $unModele;

		public function __construct($serveur, $bdd, $user, $mdp)
		{
			//Instanciation de la classe Modele
			$this->unModele = new Modele($serveur, $bdd, $user, $mdp);
		}

		public function selectAllUsager()
		{
			//Traitement des données reçues de Modele
			return $this->unModele->selectAllUsager();
		}

		public function vueConnnexion($email, $mdp)
		{
			//Controler les données
			if ($email == "" or $mdp == "")
			{
				return null;
			}
			else //On peut tester 1 email et mdp
			{
				return $this->unModele->verifConnexion($email, $mdp);
			}
		}

		public function verifConnexion($email, $mdp)
		{
			if($email == "" || $mdp == "")
			{
				return null;
			}
			else
			{
				return $this->unModele->verifConnexion($email, $mdp);
			}
		}
	}
?>