<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/a58a04c1aa.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="rdv.css">
	<title>Rendez-vous</title>
</head>
<body>
 <header>
 	<div class="container-nav">
    <nav>
      <div class="logo">
        <img src="img/logo.png" style="margin-bottom:15px">
      </div>
      <div class="onglets">
        <a href="index.php"> <i class="fas fa-home"></i>Accueil</a>
        <a href="Ds_mato.php"><i class="fas fa-info"></i>Qui sommes-nous</a>
        <a href="rdv.php"><i class="far fa-calendar-minus"></i>Prendre rendez-vous</a>
        <a href="contact.php"><i class="fas fa-phone"></i>Contactez-nous</a>
      </div>
    </nav>
</div>
    </header>


<div class="container-form">
	<form method="post" action="">
		<center>
			<div class="form radio">
				
			<input type="radio" id="homme" name="Sexe"  value="Mr">
			<label for="homme">Mr</label>
		  
			<input type="radio" id="femme" name="Sexe" value="Mme">
			<label for="femme">Mme</label>
		    	
			<input type="radio" id="entreprise" name="Sexe" value="entreprise">
			<label for="entreprise">Entreprise</label>
				<br><br><br>
		    </div>
		    <div class="col-md-8">	
             <label for="exampleInputEmail1">Nom<span style="color:#15ebeb">*</span> </label>
		   <input type="text" id="name"  placeholder="Ex : Simpson" class="form-control" required name="nom" ></span>
		    </div>
		    <br>
			<div class="col-md-8">
				<label for ="exampleInputEmail1">Téléphone<span style="color:#15ebeb">*</span></label>
		     <input type="text" id="number" class="form-control"  placeholder="Ex : 0667464515" required name="Tel">
		     	</div>
		     	<br>
		     	<div class="col-md-8">
		     	<label for="exampleInputEmail1">Email<span style="color:#15ebeb">*</span></label>		
			<input type="text" id="email"  placeholder="Ex : je_suis_homer_Simpson@gmail.com" required class="form-control"  name="email">
			<br>
				</div>
			<div class="col-md-8">
				<label for="exampleInputEmail1">Calendrier</label>
				<input type="datetime-local" id="calendrier" class="form-control" name="calendrier">
			</div>
		    <br>
         <div class="col-md-8">	
		   <input type="submit" name="Validez" value="Validez" class="btn btn-primary">
		</div>
	</form>
</center>
	</div>
<br>
<?php	
require_once("vue/Footer.php");

?>
<?php

try{
	$unced=new PDO("mysql:host=localhost:3306;dbname=Ena","root","");
}
catch(PDOException $exp){
   echo "Erreur";
}
if(isset($_POST['Validez'])){
$requete="insert into rendez_vous values(null,:Nom,:ref,:Tel,:Email,:Calendrier);";
$donnee=array(':Nom' =>$_POST['nom'] ,
':ref' =>$_POST['Sexe'] , 
':Tel' =>$_POST['Tel'] ,
':Email' =>$_POST['email'] ,
':Calendrier' =>$_POST['calendrier'] );

$insert=$unced->prepare($requete);
$insert->execute($donnee);
}
?>



</body>
</html>
