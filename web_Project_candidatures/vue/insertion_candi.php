<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-with, initial-scale=1">
	<meta charset="utf-8">

   
	
   <link rel="stylesheet" type="text/css" href="index.css">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"> </script>
<link href="https://fonts.google.apis.com/css?family=Lato" rel="stylesheet" type="text/css"  >
	
</head>
<body style="background:black">
    <center>
	<div class="container">
		<div class="divider"></div>
        	<div class="heading">
        	<h2 >Insertion of apply</h2>
        	</div>
        	<div class="row"></div> 
        	<div class="col-lg-10 col-lg-offset-1">
        		
        		<form id="contact-form" method="post" action="<?php echo $_SERVER['PHP_SELF'];  ?>" role="form">
        			<div class="row">
        				<div class="col-md-6">
        					<label for="prenom">Firstname<span class="blue"> *</span></label>
        			<input type="text" name="firstname" class="form-control" placeholder="Your firstname" id="prenom" value="<?php echo $firstname;?>">
        					<p class="comments"> <?php echo $firstnameError;?></p>
        				</div>

        				<div class="col-md-6">
        					<label for="Name">Lastname<span class="blue"> *</span></label>
        					<input type="text" name="nom" class="form-control" placeholder="Your name" id="Name" value="<?php echo $Nom;?>">
        					<p class="comments"><?php echo $NomError ;  ?></p>
        				</div>

        					<div class="col-md-6">
        				<label for="email">Email<span class="blue"> *</span></label>
        					<input type="text" name="email" class="form-control" placeholder="Your e-mail" id="email" value="<?php echo $Email;?>">
        					<p class="comments"><?php echo $EmailError ; ?></p>
        				</div>
        				<div class="col-md-6">
        					<label for="phone">Phone</span></label>
        					<input type="tel" name="phone" class="form-control" placeholder="Your phone" id="phone" value="<?php echo $Telephone?>">
        					<p class="comments"><?php echo $TelephoneError ;  ?></p>
        				</div>


                <div class="col-md-6">
                  <label for="desc">Description</span></label>
                  <input type="text" name="description" class="form-control" id="desc" placeholder="Your description"  value="<?php echo $description?>">
                  </div>

           <div class="col-md-6">
                  <label for="date">Date_Apply</span></label>
                  <input type="text" name="date" class="form-control" placeholder="Fill a date" id="date" value="<?php echo $date?>">
                  </div>
                <div class="col-md-6">
                  <label for="statut">Level</span></label>
                  <input type="text" name="statut" class="form-control" placeholder="Your Level" id="statut" value="<?php echo $statut?>">
                 
                </div>
                 <div class="col-md-6">
                  <label for="salaire">Wage</span></label>
                  <input type="text" name="salaire" class="form-control" placeholder="Fill a wage" id="statut" value="<?php echo $salaire?>">
                 
                </div>

    <div class="col-md-12">
        			 <p class="C">*This information is required</p>
                        </div>

                      <div class="col-md-12">
                      <strong><input type="submit" class="button1" value="Send" name="Send"></strong>
                        </div>
        			</div>
                    <p style="display:<?php if($issuccess) echo 'block'; else echo 'none';?>">votre message a bien été envoyer.Merci  de m'avoir contacter
</p>

        		</form>
        	</div>

	</div>
</center>
</body>
</html>