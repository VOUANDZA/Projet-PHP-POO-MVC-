<h3> Insertion d'une matière </h3>
<form method="post" action="">
	<table border ="0">
		<tr> 
			<td> Nom : </td>
			<td> <input type="text" name="nom"
				value="<?php if ($laMatiere!=NULL) echo $laMatiere['nom']; ?>" ></td>
		</tr>
		<tr> 
			<td> Coef : </td>
			<td> <input type="text" name="coef"
				value="<?php if ($laMatiere!=NULL) echo $laMatiere['coef']; ?>" ></td>
		</tr>
		<tr> 
			<td> Nb Heures : </td>
			<td> <input type="text" name="nbheures"
				value="<?php if ($laMatiere!=NULL) echo $laMatiere['nbheures']; ?>" ></td>
		</tr>
		
		<tr> 
			<td> Professeur</td>
			<td>  
				<select name ="idProfesseur">
				<?php 
			foreach ($lesProfesseurs as $unProfesseur) {
echo "<option value ='".$unProfesseur['idProfesseur']."'>".$unProfesseur['nom']."</option>";
			}
				?>	
				</select>
			</td>
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
			<td> <input type="submit"

			<?php if($laMatiere!=NULL) echo 'name ="Modifier" value ="Modifier" '; else echo 'name="Valider" value ="Valider"'; ?> > 
			</td>
		</tr>
	</table>
</form>

