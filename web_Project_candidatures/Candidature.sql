drop database if exists Applicant; 
create database Applicant; 

use Applicant;

create table Submission (
	id int (3) not null auto_increment,
	Lastname varchar(20) not null,
	Firstname varchar(15) not null,
	Phone varchar(30)not null,
	Email varchar(40)not null,
	description varchar(100), 
	date_apply date, 
	Wage float, 
	Level varchar(20), 
	primary key (id)
); 

insert into Submission values (null,"VOUAN","Ced","00050128593","zzzwv@gmail.com", "Vacation_teacher", 2021-09-01, 
2000, "CDD");