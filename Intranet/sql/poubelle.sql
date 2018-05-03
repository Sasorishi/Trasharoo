drop database if exists poubelle;
create database poubelle;
use poubelle;


create table usager
(
	idU int(5) not null auto_increment,
	nom varchar(30) not null,
	prenom varchar(30) not null,
	civilitee enum('monsieur', 'madame', 'autre') not null,
	datenaiss date not null,
	email varchar(50) not null,
	password varchar(50) not null,
	primary key (idU)
);

create table dechet
(
	idD int(5) not null auto_increment,
	libelle varchar(40) not null,
	recyclability varchar(20) not null,
	tarif int(10) not null,
	primary key (idD)
);

create table habitation
(
	idH int(5) not null auto_increment,
	adresse varchar(40) not null,
	cp int(5) not null,
	ville varchar(20) not null,
	type varchar(50) not null,
	idU int(5) not null,
	primary key (idH),
	foreign key (idU) references usager (idU)

);

create table poubelle
(
	idP int(4) not null auto_increment,
	couleur varchar(10) not null,
	nblevee int(3) not null,
	idD int(5) not null,
	idH int(5) not null,
	primary key (idP),
	foreign key (idD) references dechet (idD),
	foreign key (idH) references habitation (idH)
);

create table levee
(
	idL int(4) not null auto_increment,
	datelevee date not null,
	poids float(4,2) not null,
	idP int(4) not null,

	primary key (idL),
	foreign key (idP) references poubelle (idP)

);

insert into usager values
	(null, 'on', 'alban', 'monsieur', '1996-03-30', 'on_alban@yahoo.fr', 'password');

insert into dechet values
	(null, 'bouteille', 'oui', '51');

insert into habitation values
	(null, '6 rue jules valles', '77200', 'Torcy', 'Appartement', '1');

insert into poubelle values
	(null, 'vert', '3', '1', '1');

insert into levee values
	(null, '2017-02-08', '8.6', '1');