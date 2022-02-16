<h3> Insertion d'un étudiant </h3>
<form method="post" action="">
	<table border ="0">
		<tr> 
			<td> Nom : </td>
			<td> <input type="text" name="nom"></td>
		</tr>
		<tr> 
			<td> Prénom : </td>
			<td> <input type="text" name="prenom"></td>
		</tr>
		<tr> 
			<td> Email : </td>
			<td> <input type="text" name="email"></td>
		</tr>
		<tr> 
			<td>TEL : </td>
			<td> <input type="text" name="tel"></td>
		</tr>
		<tr> 
			<td> MDP : </td>
			<td> <input type="password" name="mdp"></td>
		</tr>
		<tr> 
			<td> Nom de la classe </td>
			<td> 
				<select name ="idClasse">
				<?php 
			foreach ($lesClasses as $uneClasse) {
echo "<option value ='".$uneClasse['idClasse']."'>".$uneClasse['designation']."</option>";
			}
				?>	
				</select>
			</td>
		</tr>
		<tr>
			<td> <input type="reset" name="Annuler" value ="Annuler"> </td>
			<td> <input type="submit" name="Valider" value ="Valider"> </td>
		</tr>
	</table>
</form>

