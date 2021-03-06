<!DOCTYPE html>
<html lang="en">
<head>
  <title>Footer Design</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<style>
 @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
body{
  line-height: 1.5;
  font-family: 'Poppins', sans-serif;
}
*{
  margin:0;
  padding:0;
  box-sizing: border-box;
}
.container{
  max-width: 1170px;
  margin:auto;
}
.row{
  display: flex;
  flex-wrap: wrap;
}
ul{
  list-style: none;
}
.footer{
  background-color: #24262b;
    padding: 70px 0;
}
.footer-col{
   width: 25%;
   padding: 0 15px;
}
.footer-col h4{
  font-size: 18px;
  color: #ffffff;

  margin-bottom: 35px;
  font-weight: 500;
  position: relative;
}
.footer-col h4::before{
  content: '';
  position: absolute;
  left:0;
  bottom: -10px;
  background-color: #e91e63;
    
  box-sizing: border-box;
  
}
.footer-col ul li:not(:last-child){
  margin-bottom: 10px;
}
.footer-col ul li {
  font-size: 16px;
  text-transform: capitalize;
  color: #ffffff;
  text-decoration: none;
  font-weight: 300;
  color: #bbbbbb;
  display: block;
  transition: all 0.3s ease;
}
.footer-col ul li a:hover{
  color: #ffffff;
  padding-left: 8px;
}
.footer-col .social-links a{
  display: inline-block;
  height: 40px;
  width: 40px;
  background-color: rgba(255,255,255,0.2);
  margin:0 10px 10px 0;
  text-align: center;
  line-height: 40px;
  border-radius: 50%;
  color: #ffffff;
  transition: all 0.5s ease;
}
.footer-col .social-links a:hover{
  color: #24262b;
  background-color: #ffffff;
}

/*responsive*/
@media(max-width: 767px){
  .footer-col{
    width: 50%;
    margin-bottom: 30px;
}
}
@media(max-width: 574px){
  .footer-col{
    width: 100%;
}
</style>


</head>
<body>
<center>
  
<footer class="footer">
     <div class="containerf">
      <div class="row">
        <div class="footer-col">
          <h4 style="font-family: algerian ; padding-left:20px" >DS-MaTO</h4>
          <ul>
            <li>Apropos de nous</li>
            <li>Nos services</li>
            <li>Politique de s??curit??</li>
            

          </ul>
        </div>
        <div class="footer-col">
          <h4>Obtenir de l'aide</h4>
          <ul>
            <li>Tel :+213560018319</li>
            <li>Mail:ds-mato@outlook.fr</li>
            <li>Etat de la commande</li>
            <li> Options de payement</li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Les horaires</h4>
          <ul>
            <li>??????Lun 9h-18h</li>
            <li>??????Mar 9h-18h</li>
            <li>??????Mer 9h-18h</li>
            <li>??????Jeudi 9h-18h</li>
            <li>??????Ven 9h-18h</li>
            <li>??? Sam ferm??</li>
            <li>??? Dim ferm??</li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>suivez-nous</h4>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
             <a href="#"><i class="fab fa-whatsapp"></i></a>
          </div>
        </div>
      </div>
     </div>

     <p style="background:#a3264b;width:50%; color:white; margin-top:50px;">Copyright 2022 ?? Tous droits r??serv??s.</p>
  </footer>

</center>
  

</body>
</html>
