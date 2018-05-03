<?php
	include("modele/modele.php");

	function selectAllC($table)
	{
		if($table == "habitation" || $table == "usager" || $table== "dechet" || $table == "levee" || $table == "poubelle")
		{
			$resultats = selectAllM ($table);
			return $resultats;
		}
		else
		{
			return null;
		}
	}

	function insertHabitationC($tab)
	{
		insertHabitationModele($tab);
	}

	function deleteHabitationC($idH)
	{
		deleteHabitationModele($idH);
	}

	function updateHabitationC($tab)
	{
		updateHabitationModele($tab);
	}

	function selectWhereIdHabitationC($idH)
	{
		$resultat = selectWhereIdHabitationModele($idH);
		return $resultat;
	}

	function insertLeveeC($tab)
	{
		insertLeveeModele($tab);
	}

	function deleteLeveeC($idL)
	{
		deleteLeveeModele($idL);
	}

	function updateLeveeC($tab)
	{
		updateLeveeModele($tab);
	}

	function selectWhereIdLeveeC($idL)
	{
		$resultat = selectWhereIdLeveeModele($idL);
		return $resultat;
	}

	function insertPoubelleC($tab)
	{
		insertPoubelleModele($tab);
	}

	function deletePoubelleC($idP)
	{
		deletePoubelleModele($idP);
	}

	function updatePoubelleC($tab)
	{
		updatePoubelleModele($tab);
	}

	function selectWhereIdPoubelleC($idP)
	{
		$resultat = selectWhereIdPoubelleModele($idP);
		return $resultat;
	}

	function insertTypeDechetC($tab)
	{
		insertTypeDechetModele($tab);
	}

	function deleteTypeDechetC($idD)
	{
		deleteTypeDechetModele($idD);
	}

	function updateTypeDechetC($tab)
	{
		updateTypeDechetModele($tab);
	}

	function selectWhereIdTypeDechetC($idD)
	{
		$resultat = selectWhereIdTypeDechetModele($idD);
		return $resultat;
	}
?>