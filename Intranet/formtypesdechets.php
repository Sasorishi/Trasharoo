<center>
	<h2><a href="">Liste des types de déchets</a></h2>
	</br>
	<table border = 1>
		<tr>
			<td> ID </td>
            <td> Libelle </td>
            <td> Recyclable </td>
            <td> Tarif </td>
		</tr>

		<?php
			foreach ($resultats as $unResultat)
			{
				echo "<tr>
				<td>" .$unResultat["idD"]. "</td>
                <td>" .$unResultat["libelle"]. "</td>
                <td>" .$unResultat["recyclability"]. "</td>
                <td>" .$unResultat["tarif"]. "</td>
                    <td> <a href='lestypesdechets.php?page=1&action=X&idD=".$unResultat["idD"]."' > <img src='images/close.png'height = '22' width = '20'> </a>
					<a href='lestypesdechets.php?page=1&action=E&idD=".$unResultat["idD"]."' > <img src='images/edit.png'height = '22' width = '20'> </a> </a> </td>
				</tr>";
			}
		?>
	</table>
	<br/>

	<h2><a href="">Ajouté une type de déchet</a></h2>
	<form method = "post" action = "">
		<table border = 0>
			<br/>
			<tr><td> Libelle : </td> <td><input type= "text" name= "libelle" value = "<?php if (isset($resultat)) echo $resultat['libelle'] ; ?>"></td></tr>
			<tr><td> Recyclable : </td> <td><input type= "text" name= "recyclability" value = "<?php if (isset($resultat)) echo $resultat['recyclability'] ; ?>"></td></tr>
			<tr><td> Tarif : </td> <td><input type= "number" name= "tarif" value = "<?php if (isset($resultat)) echo $resultat['tarif'] ; ?>"></td></tr>
			<tr>
			<td><input type= "reset" name= "Annuler" value = "Annuler"></td>
			<td><input type= "submit" name= "Enregistrer" value = "Enregistrer">
				<input type= "submit" name= "Modifier" value = "Modifier"></td>
			</tr>
		</table>
		<input type="hidden" name="idD" value = "<?php if (isset($resultat)) echo $resultat['idD'] ; ?>">
	</form>
</center>