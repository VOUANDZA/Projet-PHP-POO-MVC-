drop database if exists Ena;
create database Ena;
	use Ena;
	create table entreprise(id int auto_increment,
		Nom varchar(25),
		Prenom varchar(20),
		Adresse_Email varchar(40),
		Tel varchar(15),
		Message text,
		primary key(id));

	insert into entreprise values(null, "VOUANDZA","Noeldy","vouandzanoeldy@gmail.com","0650128593","Bonjour je veux connaitre l'etat d'avancement de ma commande ");

		create table rendez_vous(idR int auto_increment,
		Nom varchar(25) not null,
		ref varchar(12)  not null,
		 Tel varchar(20)  not null,
		Email varchar(40)  not null,
		
		Calendrier datetime  not null,
		primary key(idR));

		insert into rendez_vous values(null, "VOUAN"," entreprise","0650128593","vouandzanoeldy@gmail.com","12-01-16 12:32 ");
