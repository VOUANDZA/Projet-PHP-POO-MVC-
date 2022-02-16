<form method="post" action="">
	Mot de recherche : <input type="text" name="mot">
	<input type="submit" name="Rechercher" value="Rechercher">
</form>

<br/>

<table border ="1">
	<tr> 
		<td> Id Etudiant </td>
		<td> Nom </td> 
		<td> Prénom </td> 
		<td> Email</td>
		<td> Téléphone</td>
		<td> La Classe</td>
		<td> Salle de cours</td>
		<td> Opérations </td>
	</tr>
	<?php
	foreach ($lesEtudiants as $unEtudiant) {
		echo " <tr> 
			<td> ".$unEtudiant['idEtudiant']."</td>
			<td> ".$unEtudiant['nom']."</td>
			<td> ".$unEtudiant['prenom']."</td>
			<td> ".$unEtudiant['email']."</td>
			<td> ".$unEtudiant['tel']."</td>
			<td> ".$unEtudiant['designation']."</td>
			<td> ".$unEtudiant['salle']."</td>

			<td> 
			<a href='index.php?page=3&action=delete&idEtudiant=".$unEtudiant['idEtudiant']."'> 
				<img src ='images/sup.png' height='30' width='30'> </a>

			<a href='index.php?page=3&action=edit&idEtudiant=".$unEtudiant['idEtudiant']."'> 
				<img src ='images/edit.png' height='30' width='30'> </a>
			</td>

		</tr>";
	}
	?>
</table>



