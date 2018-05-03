<?php
	class Modele
	{
		//Objet permetttant la connexion à la BDD
		private $pdo;

		public function __construct($serveur, $bdd, $user, $mdp)
		{
			$this->pdo = null;

			//Installe le code qui peut poser probleme
			try
			{
				$this->pdo = new PDO("mysql:host=".$serveur.";dbname=".$bdd, $user, $mdp);
			}

			//Réalise la lever de l'exeption pour gérer les erreurs
			catch(Exception $exp)
			{
				//Afficher le message d'origine
				$exp -> getMessage();

				//Notre message
				echo "Erreur de connexion au ".$serveur."/".$bdd;
			}
		}

		public function selectAllUsager()
		{
			$requete = "select * from usager;";
			if ($this->pdo == null)
			{
				return null;
			}

			else
			{
				$select = $this->pdo->prepare($requete);
				$select->execute();
				$resultats = $select->fetchAll();
				return $resultats;
			}
		}

		public function verifConnexion($email, $mdp)
		{
			$requete = "select *from usager where email = :email and password = :mdp";
			$donnees = array (":email" => $email, ":mdp" => $mdp);

			if($this->pdo == null)
			{
				return null;
			}
			else
			{
				$select = $this->pdo->prepare($requete);
				$select->execute($donnees);
				$resultat = $select->fetch();
				return $resultat;
			}
		}
	}//Fin de la classe
?>