
<?php  

$firstname=$Nom=$Email=$Telephone=$description=$date=$statut=$salaire="";  
 $issuccess=false;
$firstnameError=$NomError=$EmailError=$TelephoneError=""; 

if($_SERVER["REQUEST_METHOD"] =="POST")
{
    $firstname=verifyInput($_POST["firstname"]);
    $Nom=verifyInput($_POST["nom"]);
    $Email=verifyInput($_POST["email"]);
    $Télephone=verifyInput($_POST["phone"]);
    $description=verifyInput($_POST["description"]);
    $date=verifyInput($_POST["date"]);
    $salaire=verifyInput($_POST["salaire"]);
    $statut=verifyInput($_POST["statut"]);
    $issuccess=true;
   
}
//Affichage du message d'Erreur lorsqu'on soumet sans mettre des infos

if(empty($firstname))
{
    $firstnameError ="I want to know your firstname !";
     $issuccess=false;
}

if(empty($Nom)){
    
    $NomError ="Your  firstname please!";
    $issuccess=false;
}





if(empty( $Message )){
    
     $MessageError ="You must write something";
     $issuccess=false;

}
if(!isPhone($Telephone))
{
   $TelephoneError="Only numbers and space please"; 
   $issuccess=false;
}

function isPhone($var)
 {
    return preg_match("/^[0-9 ]*$/" , $var);
 }




if(!isEmail($Email)){

     $EmailError="It is'nt  e-mail ";
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

<!-- recuperation des données en php-->



      <?php
     
      require_once("vue/insertion_candi.php");
       require "connect.php";


      //la connexion à la base de données en utilisant PDO 
      try{
      $unPDO = new PDO("mysql:localhost=".$serveur.";dbname=".$bdd,$user, $mdp); 
      // EN PC : localhost, root et aucun mot de pass.
      }   
      catch(PDOException $exp)
      {
        echo "Erreur de connexion à la base de données";
      }

      if (isset($_POST['Envoyer']))
      {
        $requete = "insert into Submission values (null,:Nom,:Prenom, :Telephone, :Email, :Description, 
        :Date, :Salaire, :Statut); ";

        $donnees =array(

          ":Lastname"=>$_POST['nom'], 
          ":firstname"=>$_POST['firstname'],
           ":Phone"=>$_POST['phone'],
            ":Email"=>$_POST['email'],
            ":Description"=>$_POST['description'], 
                ":date_apply"=>$_POST['date'],
                 ":Wage"=>$_POST['salaire'], 
                 ":Level"=>$_POST['statut']);

        $insert = $unPDO->prepare ($requete); 
        $insert->execute ($donnees); 

      }


 
      //requete d'extraction des candidatures 
      $requete ="select * from Submission;"; 
      $select =$unPDO->prepare($requete); 
      $select->execute();

      $lesinformations = $select->fetchAll(); 

      require_once("vue/select_candi.php");
      ?>
