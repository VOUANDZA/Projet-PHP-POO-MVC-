<?php  

$firstname=$Nom=$Email=$Télephone=$Message="";  
 $issuccess=false;
$firstnameError=$NomError=$EmailError=$TélephoneError=$MessageError =""; 

if($_SERVER["REQUEST_METHOD"] =="POST")
{
    $firstname=verifyInput($_POST["firstname"]);
    $Nom=verifyInput($_POST["nom"]);
    $Email=verifyInput($_POST["email"]);
    $Télephone=verifyInput($_POST["phone"]);
    $Message=verifyInput($_POST["message"]);
    $issuccess=true;
   
}
//Affichage du message d'Erreur lorsqu'on soumet sans mettre des infos

if(empty($firstname))
{
    $firstnameError ="Saissisez votre Prénom !";
     $issuccess=false;
}

if(empty($Nom)){
    
    $NomError ="Saisissez votre Nom";
    $issuccess=false;
}





if(empty( $Message )){
    
     $MessageError ="Ecrivez  un message";
     $issuccess=false;

}
if(!isPhone($Télephone))
{
   $TélephoneError="Que des chiffres et d'espace svp"; 
   $issuccess=false;
}

function isPhone($var)
 {
    return preg_match("/^[0-9 ]*$/" , $var);
 }




if(!isEmail($Email)){

     $EmailError="Votre Email ";
     $issuccess=false;
}
 
 function isEmail($Email)
 {
    return filter_var($Email,FILTER_VALIDATE_EMAIL);
 }
function verifyInput($var)
{
  $var=trim($var);
  $var=stripslashes($var);
  $var=htmlspecialchars($var);
  return $var;

}

?>







<!DOCTYPE html>
<html>
<head>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
     
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="index.css">
	<title></title>
<style>
    
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');




body{
  line-height: 1.5;
  margin: 0;
  padding: 0;
    
  font-family: 'Poppins', sans-serif;
}
header{
  background-size: cover;
  background-position: center;
  color: white;
  text-align: center;
  padding-right: 50px;
  padding-left: 20px;
}
header nav{
  align-items: center;
  display: flex;
  flex: wrap;
  justify-content: space-between;
}
header nav a{
  color: black;
  text-decoration: none;
  margin-right: 50px;
  font-size: 25px;
}

header nav a:hover{
  color: #960f41;
  border-bottom: 2px solid #960f41;
}










</style>







</head>
<body>
	
  <header>
    <nav>
      <div class="logo">
        <img src="img/logo.png" style="margin-bottom:15px;">
      </div>
      <div class="onglets">
        <a href="index.php"><i class="fas fa-home"></i>Accueil</a>
        <a href="Ds_mato.php"><i class="fas fa-info"></i>Qui sommes-nous</a>
        <a href="rdv.php"><i class="far fa-calendar-minus"></i>Prendre rendez-vous</a>
        <a href="contact.php"><i class="fas fa-phone"></i>Contactez-nous</a>
      </div>
    </nav>
    </header>
   

<section id="C">
<center>	

	<div class="container">
	         <center>
        	<div class="heading">
         
        	  <center>	<h2>Contactez-nous</h2></center>
        	</div>
        	<div class="row"></div> 
        	<div class="col-lg-10 col-lg-offset-1">
        		
        		<form id="contact-form" method="post" action="<?php echo $_SERVER['PHP_SELF'];  ?>" role="form">
        			<div class="row">
        				<div class="col-md-6">
        					<label for="prenom">Prénom<span class="blue"> *</span></label>
        			<input type="text" name="firstname" class="form-control" placeholder="Votre prenom" id="prenom" value="<?php echo $firstname;?>">
        					<p class="comments"> <?php echo $firstnameError;?></p>
        				</div>

        				<div class="col-md-6">
        					<label for="Name">Nom<span class="blue"> *</span></label>
        					<input type="text" name="nom" class="form-control" placeholder="Votre Nom" id="Name" value="<?php echo $Nom;?>">
        					<p class="comments"><?php echo $NomError ;  ?></p>
        				</div>

        					<div class="col-md-6">
        				<label for="email">Email<span class="blue"> *</span></label>
        					<input type="text" name="email" class="form-control" placeholder="Votre Email" id="email" value="<?php echo $Email;?>">
        					<p class="comments"><?php echo $EmailError ; ?></p>
        				</div>
        				<div class="col-md-6">
        					<label for="phone">Télephone</span></label>
        					<input type="text" name="phone" class="form-control" placeholder="Votre Télephone" id="phone" value="<?php echo $Télephone?>">
        					<p class="comments"><?php echo $TélephoneError ;  ?></p>
        				</div>

                        <div class="col-md-12">
                            <label for="message">Message<span class="blue">*</span></label>
                            <textarea type="text" name="message" class="form-control" placeholder="Votre Message" id="message" rows="4"><?php echo $Message;?></textarea>
                            <p class="comments"><?php echo $MessageError ;  ?></p>
                        </div>


                        <div class="col-md-12">
        				 <p class="C">*Ces informations sont requises</p>
                        </div>

                      <div class="col-md-4">
                     <center> <strong><input type="submit" class="button1" value="Envoyer"  name="Envoyer"></strong>
                        </div></center>
        			</div>
                    <p style="display:<?php if($issuccess) echo 'block'; else echo 'none';?>">votre message a bien été envoyer.Merci  de m'avoir contacter
</p>

        		</form>
        	</div>

	</div>
	<br>
	
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d33504.51379886309!2d4.081256286715116!3d36.52502925120785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128c4b1f22d0b6e5%3A0x5c1d5dafdf57affa!2sAgouni%20Gueghrane%2C%20Algeria!5e0!3m2!1sen!2sfr!4v1639664539544!5m2!1sen!2sfr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>


<?php 
require_once("vue/Footer.php");

?>
	
</center>	

</body>
</html>
<?php

try{
	$unced=new PDO("mysql:host=localhost:3306;dbname=Ena","root","");
}
catch(PDOException $exp){
   echo "Erreur";
}
if(isset($_POST['Envoyer'])){
$requete="insert into entreprise values(null,:Nom,:Prenom,:Email,:Tel,:Message);";
$donnee=array(':Nom' =>$_POST['nom'] ,
':Prenom' =>$_POST['firstname'] , 
':Email' =>$_POST['email'] ,
':Tel' =>$_POST['phone'] ,
':Message' =>$_POST['message'] );

$insert=$unced->prepare($requete);
$insert->execute($donnee);
}
?>