drop database if exists iris; 
create database iris; 
use iris; 

create table classe (
	idClasse int(3) not null auto_increment, 
	designation varchar(30), 
	salle varchar(30), 
	diplome varchar(30), 
	primary key(idClasse)
);
create table professeur (
	idProfesseur int(3) not null auto_increment, 
	nom varchar(30), 
	prenom varchar(30), 
	email varchar(30), 
	tel varchar(20),
	mdp varchar(20),
	primary key(idProfesseur)
);
create table etudiant (
	idEtudiant int(3) not null auto_increment, 
	nom varchar(30), 
	prenom varchar(30), 
	email varchar(30), 
	tel varchar(20),
	mdp varchar(20), 
	idClasse int(3) not null, 
	primary key(idEtudiant), 
	foreign key (idClasse) references classe(idClasse)
);
create table matiere (
	idMatiere int(3) not null auto_increment, 
	nom varchar(30),
	coef int(3),
	nbheures int(3),
	idProfesseur int(3) not null, 
	idClasse int(3) not null, 
	primary key(idMatiere), 
	foreign key (idClasse) references classe(idClasse),
	foreign key (idProfesseur) references professeur(idProfesseur)
);

insert into classe values 
	(null, "Slam 2A", "Salle 3.8", "BTS SIO"), 
	(null, "Slam 2B", "Salle 2.8", "BTS SIO"),
	(null, "Slam 1A", "Salle 1.5", "BTS SIO"), 
	(null, "Bachelor SD", "Salle 1.4", "Bachelor"); 
insert into professeur values 
(null, "Ben Ahmed","Oka","a@gmail.com","11111111","123"), 
(null, "Chouaky","Abdel","c@gmail.com","2222222","456"); 
insert into etudiant values 
(null, "Tom","Nahel","b@gmail.com","333333","123", 1), 
(null, "Yacine","Seif","s@gmail.com","44444","456", 1),
(null, "Maxime","Soli","m@gmail.com","7777777","123", 2);
insert into matiere values 
	(null, "BDD", 2, 200, 2,1), 
	( null, "JAva", 3, 120, 1,2), 
	(null, "PHP", 3, 130, 1, 3); 


create view etudiantsClasses as (
	select e.idEtudiant, e.nom, e.prenom, e.email, e.tel, 
	c.designation, c.salle
	from classe c, etudiant e 
	where c.idClasse = e.idClasse
); 


create table user (
	iduser int(3) not null auto_increment, 
	nom varchar (30), 
	prenom varchar(30), 
	email varchar(100), 
	mdp varchar(255), 
	role enum ("admin", "user"), 
	primary key(iduser)
); 

insert into user values (null,"Nahel", "Tom", "a@gmail.com", 
	"123", "admin"),(null,"Nicolas", "Julien", "b@gmail.com", 
	"456", "user"); 


	












	




