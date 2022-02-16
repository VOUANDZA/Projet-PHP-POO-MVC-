<form method="post" action="">
	Mot de recherche : <input type="text" name="mot">
	<input type="submit" name="Rechercher" value="Rechercher">
</form>

<br/>
<table border ="1">
	<tr> 
		<td> Id Classe </td>
		<td> Désignation </td> 
		<td> Salle de cours </td> 
		<td> Diplôme préparé </td>
	<?php 
	if(isset($_SESSION['email']) and $_SESSION['role']=="admin" )
	{
		echo '<td> Opérations </td>';
	}
	?>
	</tr>
	<?php
	foreach ($lesClasses as $uneClasse) {
		echo " <tr> 
			<td> ".$uneClasse['idClasse']."</td>
			<td> ".$uneClasse['designation']."</td>
			<td> ".$uneClasse['salle']."</td>
			<td> ".$uneClasse['diplome']."</td>"; 
			if(isset($_SESSION['email']) and $_SESSION['role']=="admin" )
			{
			echo "
			<td> 
			<a href='index.php?page=1&action=sup&idClasse=".$uneClasse['idClasse']."'> 
				<img src ='images/sup.png' height='30' width='30'> </a>

			<a href='index.php?page=1&action=edit&idClasse=".$uneClasse['idClasse']."'> 
				<img src ='images/edit.png' height='30' width='30'> </a>
			</td>"; 
			}

		echo "</tr>";
	}
	?>
</table>







