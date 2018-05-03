<center>
	<h2><a href="">Liste des levees</a></h2>
	</br>
	<table border = 1>
		<tr>
			<td> ID </td>
            <td> Date de levée </td>
            <td> Poids </td>
		</tr>

		<?php
			foreach ($resultats as $unResultat)
			{
				echo "<tr>
				<td>" .$unResultat["idL"]. "</td>
                <td>" .$unResultat["datelevee"]. "</td>
                <td>" .$unResultat["poids"]. "</td>
                    <td> <a href='leslevees.php?page=1&action=X&idL=".$unResultat["idL"]."' > <img src='images/close.png'height = '22' width = '20'> </a>
					<a href='leslevees.php?page=1&action=E&idL=".$unResultat["idL"]."' > <img src='images/edit.png'height = '22' width = '20'> </a> </a> </td>
				</tr>";
			}
		?>
	</table>
	<br/>

	<h2><a href="">Ajouté une levée</a></h2>
	<form method = "post" action = "">
		<table border = 0>
			<br/>
			<tr><td> Date de levée : </td> <td><input type= "date" name= "datelevee" value = "<?php if (isset($resultat)) echo $resultat['datelevee'] ; ?>"></td></tr>
			<tr><td> Poids : </td> <td><input type= "float" name= "poids" value = "<?php if (isset($resultat)) echo $resultat['poids'] ; ?>"></td></tr>
			<tr><td> ID du poubelle : </td> <td><input type= "number" name= "idP" value = "<?php if (isset($resultat)) echo $resultat['idP'] ; ?>"></td></tr>
			<tr>
			<td><input type= "reset" name= "Annuler" value = "Annuler"></td>
			<td><input type= "submit" name= "Enregistrer" value = "Enregistrer">
				<input type= "submit" name= "Modifier" value = "Modifier"></td>
			</tr>
		</table>
		<input type="hidden" name="idL" value = "<?php if (isset($resultat)) echo $resultat['idL'] ; ?>">
	</form>
</center>