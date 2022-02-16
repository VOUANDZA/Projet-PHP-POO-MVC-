<h3> Insertion d'un professeur </h3>
<form method="post" action="">
	<table border ="0">
		<tr> 
			<td> Nom : </td>
			<td> <input type="text" name="nom" 
				value="<?php if ($leProfesseur!=NULL) echo $leProfesseur['nom']; ?>"  ></td>
		</tr>
		<tr> 
			<td> Prénom : </td>
			<td> <input type="text" name="prenom" 
				value="<?php if ($leProfesseur!=NULL) echo $leProfesseur['prenom']; ?>"  ></td>
		</tr>
		<tr> 
			<td> Email : </td>
			<td> <input type="text" name="email" 
				value="<?php if ($leProfesseur!=NULL) echo $leProfesseur['email']; ?>" ></td>
		</tr>
		<tr> 
			<td>TEL : </td>
			<td> <input type="text" name="tel" 
				value="<?php if ($leProfesseur!=NULL) echo $leProfesseur['tel']; ?>" ></td>
		</tr>
		<tr> 
			<td> MDP : </td>
			<td> <input type="password" name="mdp"  
				value="<?php if ($leProfesseur!=NULL) echo $leProfesseur['mdp']; ?>" ></td>
		</tr>
		
		<tr>
			<td> <input type="reset" name="Annuler" value ="Annuler"> </td>
			<td> <input type="submit"

			<?php if($leProfesseur!=NULL) echo 'name ="Modifier" value ="Modifier" '; else echo 'name="Valider" value ="Valider"'; ?> > 
			</td>
		</tr>
	</table>
</form>

