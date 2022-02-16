
<?php

$firstname=$Nom=$Email=$Télephone=$Message="";
$firstnameError=$NomError=$EmailError =$TélephoneError=$MessageError="";
$remerciement=false;

if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $firstname=verifyinput($_POST['firstname']);
  $Nom=verifyinput($_POST['name']); 
  $Email=verifyinput($_POST['email']);
  $Télephone=verifyinput($_POST['phone']);
  $Message=verifyinput($_POST['message']);
   $remerciement=true;
}
if(empty($firstname))
{
  $firstnameError="Je dois connaitre votre prenom";
  $remerciement=false;
}
if(empty($Nom))
{
  $NomError="Et oui je dois connaitre votre nom";
  $remerciement=false;
}

if(empty($Message))
{
  $MessageError="Ecrivez au moins quelque chose";
}
if(!isEmail($Email))
{
  $EmailError="Vous essayer de me rouler ou quoi";
  $remerciement=false;
}
if(!isphone($Télephone))
{
  $TélephoneError="Entrez les valeurs comprise entre 0 et 9";
  $remerciement=false;
}



function isphone($Télephone){

  return preg_match("/^[0-9 ]*$/", $Télephone );
}

  function isEmail($Email)
{
 return filter_var($Email,FILTER_VALIDATE_EMAIL);

}

function verifyinput($var)
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
<meta charset="utf-8">
<meta name="viewport" content="width=device-with, initial-scale=1">
<link rel="stylesheet" type="text/css" href="index.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
<title>Contactez-moi</title>
<style>
  

.A{

  background:rgba(66, 135, 245,0.5);
}




.divider{
  width:100px;
  height:2px;
  background:orange;
  margin:0 auto;
  position:relative;
  top:40px;
   
}

#contacter{
  
  text-align: center;
  position:relative;
  top:50px;

}
.B{

  
  background: #fff;
   padding: 40px;
   position: relative;
   top:80px;
   border-radius: 10px;
  
}
.blue{
    color:#1e49d6;  
  }
.V{
  background:orange;
  width:100%;
  border:none;
  font-weight:bold;

}
.V:hover{
  background:#4287f5;
  
}
p{
  color: red;
  font-style: italic;
}





  
</style>
</head>
<body class="A">
<div class="container">	
<div class="divider"></div>	
<div id="contacter"><h2>Contactez-Nous</h2>

</div>
<center>


<form class="B" method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
<div class=row>		
  <div class=col-md-6>	
  <label for="prenom">Prenom<span class="blue"> *</span></label>
  <input type="text" name="firstname" class="form-control" id="prenom" placeholder="votre Prenom" value="<?php echo $firstname?>">
   <p><?php echo $firstnameError;?> </p>

  </div>
<div class="col-md-6">	
  <label for="nom">Nom<span class="blue"> *</span></label>
  <input type="text" name="name" class="form-control" id="nom" placeholder="votre Nom" value="<?php echo $firstname?>">
   <p><?php echo $NomError;?></p>
</div>
  <div class="col-md-6">	
  <label for="email">Email<span class="blue"> *</span></label>
  <input type="text" name="email" class="form-control" id="email" placeholder="votre email" value="<?php echo $Nom?>">
   <p><?php echo $EmailError;?>	</p>
</div>

<div class="col-md-6">	
  <label for="phone">Télephone<span class="blue"> *</span></label>
  <input type="country" name="phone" class="form-control" id="phone" placeholder="votre Telephone" value="<?php echo $Télephone;?>">
   <p><?php echo $TélephoneError;?></p>
</div>

<div class="col-md-12">  
  <label for="message">Message<span class="blue"> *</span></label>
  <textarea class="form-control" name="message" placeholder="votre message" id="message" rows="4" value="<?php echo $Message?>"></textarea>
    <p> <?php echo $MessageError?></p>
</div>
<span class="blue">*Ces information sont requise</span>
<br><br>
<div class="col-md-12">	
 <input type="submit"  class="V" value="Envoyer">
   <p style="display:<?php  if($remerciement) echo 'block'; else echo 'none'; ?>">Vos information ont été envoyer par le recruteur</p>

 </div>
</form>
</div>
</div>
</div>
</center>




</div>



</div>

</body>
</html>