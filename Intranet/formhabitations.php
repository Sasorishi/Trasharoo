<center>
	<h2><a href="">Liste des habitations</a></h2>
	</br>
	<table border = 1>
		<tr>
			<td> ID </td>
            <td> Adresse </td>
            <td> Code Postal </td>
            <td> Ville </td>
            <td> Type </td>
		</tr>

		<?php
			foreach ($resultats as $unResultat)
			{
				echo "<tr>
				<td>" .$unResultat["idH"]. "</td>
                <td>" .$unResultat["adresse"]. "</td>
                <td>" .$unResultat["cp"]. "</td>
                <td>" .$unResultat["ville"]. "</td>
                <td>" .$unResultat["type"]. "</td>
                	<td> <a href='meshabitations.php?page=1&action=X&idH=".$unResultat["idH"]."' > <img src='images/close.png'height = '22' width = '20'> </a>
					<a href='meshabitations.php?page=1&action=E&idH=".$unResultat["idH"]."' > <img src='images/edit.png'height = '22' width = '20'> </a> </a> </td>
				</tr>";
			}
		?>
	</table>
	<br/>

	<h2><a href="">Ajouté une habitations</a></h2>
	<form method = "post" action = "">
		<table border = 0>
			<br/>
			<tr><td> Adresse : </td> <td><input type= "text" name= "adresse" value = "<?php if (isset($resultat)) echo $resultat['adresse'] ; ?>"></td></tr>
			<tr><td> Code Postal : </td> <td><input type= "number" name= "cp" value = "<?php if (isset($resultat)) echo $resultat['cp'] ; ?>"></td></tr>
			<tr><td> Ville : </td> <td><input type= "text" name= "ville" value = "<?php if (isset($resultat)) echo $resultat['ville'] ; ?>"></td></tr>
			<tr><td> Type : </td> <td><input type= "text" name= "type" value = "<?php if (isset($resultat)) echo $resultat['type'] ; ?>"></td></tr>
			<tr><td> ID du usager : </td> <td><input type= "number" name= "idU" value = "<?php if (isset($resultat)) echo $resultat['idU'] ; ?>"></td></tr>
			<tr>
			<td><input type= "reset" name= "Annuler" value = "Annuler"></td>
			<td><input type= "submit" name= "Enregistrer" value = "Enregistrer">
				<input type= "submit" name= "Modifier" value = "Modifier"></td>
			</tr>
		</table>
		<input type="hidden" name="idH" value = "<?php if (isset($resultat)) echo $resultat['idH'] ; ?>">
	</form>
</center>