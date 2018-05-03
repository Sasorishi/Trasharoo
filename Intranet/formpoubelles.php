<center>
	<h2><a href="">Liste des poubelles</a></h2>
	</br>
	<table border = 1>
		<tr>
			<td> ID </td>
            <td> Couleur </td>
            <td> Nombre de levée </td>
		</tr>

		<?php
			foreach ($resultats as $unResultat)
			{
				echo "<tr>
				<td>" .$unResultat["idP"]. "</td>
                <td>" .$unResultat["couleur"]. "</td>
                <td>" .$unResultat["nblevee"]. "</td>
                <td> <a href='mespoubelles.php?page=1&action=X&idP=".$unResultat["idP"]."' > <img src='images/close.png'height = '22' width = '20'> </a>
					<a href='mespoubelles.php?page=1&action=E&idP=".$unResultat["idP"]."' > <img src='images/edit.png'height = '22' width = '20'> </a> </a> </td>
				</tr>";
			}
		?>
	</table>
	<br/>

	<h2><a href="">Ajouté une poubelle</a></h2>
	<form method = "post" action = "">
		<table border = 0>
			<br/>
			<tr><td> Couleur : </td> <td><input type= "text" name= "couleur" value = "<?php if (isset($resultat)) echo $resultat['couleur'] ; ?>"></td></tr>
			<tr><td> Nombre de levée : </td> <td><input type= "number" name= "nblevee" value = "<?php if (isset($resultat)) echo $resultat['nblevee'] ; ?>"></td></tr>
			<tr><td> ID du type de dechet : </td> <td><input type= "number" name= "idD" value = "<?php if (isset($resultat)) echo $resultat['idD'] ; ?>"></td></tr>
			<tr><td> ID de habitation : </td> <td><input type= "number" name= "idH" value = "<?php if (isset($resultat)) echo $resultat['idH'] ; ?>"></td></tr>
			<tr>
			<td><input type= "reset" name= "Annuler" value = "Annuler"></td>
			<td><input type= "submit" name= "Enregistrer" value = "Enregistrer">
				<input type= "submit" name= "Modifier" value = "Modifier"></td>
			</tr>
		</table>
		<input type="hidden" name="idP" value = "<?php if (isset($resultat)) echo $resultat['idP'] ; ?>">
	</form>
</center>