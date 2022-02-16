<h3> Insertion de classe </h3>
<form method="post" action="">
	<table border ="0">
		<tr> 
			<td> Désignation : </td>
			<td> <input type="text" name="designation" 
				value="<?php if ($laClasse!=NULL) echo $laClasse['designation']; ?>">
			</td>
		</tr>
		<tr> 
			<td> Salle : </td>
			<td> <input type="text" name="salle"
				value="<?php if ($laClasse!=NULL) echo $laClasse['salle']; ?>">
			</td>
		</tr>
		<tr> 
			<td> Diplôme : </td>
			<td> <input type="text" name="diplome"
				value="<?php if ($laClasse!=NULL) echo $laClasse['diplome']; ?>">
			</td>
		</tr>
		<tr>
			<td> <input type="reset" name="Annuler" value ="Annuler"> </td>
			<td> <input type="submit"

			<?php if($laClasse!=NULL) echo 'name ="Modifier" value ="Modifier" '; else echo 'name="Valider" value ="Valider"'; ?> > 
			</td>
		</tr>
	</table>
</form>










