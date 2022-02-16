<form method="post" action="">
	Mot de recherche : <input type="text" name="mot">
	<input type="submit" name="Rechercher" value="Rechercher">
</form>

<br/>


<table border ="1">
	<tr> 
		<td> Id Prof </td>
		<td> nom </td> 
		<td> Prénom</td> 
		<td> Email </td>
		<td> téléphone </td>
		<td> Opérations </td>
	</tr>
	<?php
	foreach ($lesProfesseurs as $unProf) {
		echo " <tr> 
			<td> ".$unProf['idProfesseur']."</td>
			<td> ".$unProf['nom']."</td>
			<td> ".$unProf['prenom']."</td>
			<td> ".$unProf['email']."</td>
			<td> ".$unProf['tel']."</td>

			<td> 
			<a href='index.php?page=2&action=sup&idProfesseur=".$unProf['idProfesseur']."'> 
				<img src ='images/sup.png' height='30' width='30'> </a>

			<a href='index.php?page=2&action=edit&idProfesseur=".$unProf['idProfesseur']."'> 
				<img src ='images/edit.png' height='30' width='30'> </a>
			</td>

		</tr>";
	}
	?>
</table>








