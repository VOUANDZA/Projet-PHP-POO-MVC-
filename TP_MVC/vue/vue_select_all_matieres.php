<form method="post" action="">
	Mot de recherche : <input type="text" name="mot">
	<input type="submit" name="Rechercher" value="Rechercher">
</form>

<br/>

<table border ="1">
	<tr> 
		<td> Id Matiere </td>
		<td> Nom </td> 
		<td> Coef </td> 
		<td> Nb Heures</td>
		<td> Nom Prof</td>
		<td> Prénom Prof</td>
		<td> Désignation Classe</td>
		<td> Opérations </td>
	</tr>
	<?php
	foreach ($lesMatieres as $uneMatiere) {
		echo " <tr> 
			<td> ".$uneMatiere['idMatiere']."</td>
			<td> ".$uneMatiere['nom']."</td>
			<td> ".$uneMatiere['coef']."</td>
			<td> ".$uneMatiere['nbheures']."</td>
			<td> ".$uneMatiere['nomProf']."</td>
			<td> ".$uneMatiere['prenomProf']."</td>
			<td> ".$uneMatiere['designation']."</td>

			<td> 
			<a href='index.php?page=4&action=sup&idMatiere=".$uneMatiere['idMatiere']."'> 
				<img src ='images/sup.png' height='30' width='30'> </a>

			<a href='index.php?page=4&action=edit&idMatiere=".$uneMatiere['idMatiere']."'> 
				<img src ='images/edit.png' height='30' width='30'> </a>
			</td>

		</tr>";
	}
	?>
</table>
