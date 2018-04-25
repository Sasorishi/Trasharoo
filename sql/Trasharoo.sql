drop database if exists trasharoo;

create database trasharoo;
	use trasharoo;


drop table if exists usagers;
drop table if exists dechets;
drop table if exists habitation;
drop table if exists poubelle;
drop table if exists levee;


create table usagers(
	iduser int(5) not null auto_increment,
	nom varchar(30) not null,
	prenom varchar (30) not null,
	civilitee varchar(20) not null,
	datenaiss date not null,
	primary key (iduser)
);

create table dechets(
	coded int(5) not null auto_increment,
	libelle varchar (40) not null,
	recyclability varchar(10) not null,
	tarif int (10) not null,

	primary key (coded)
);

create table habitation(
	idhabitation int(5) not null auto_increment,
	iduser int(5) not null,
	adresse varchar(10) not null,
	codepo int(5) not null,
	ville varchar(20) not null,
	type varchar (50) not null,

	primary key (idhabitation),
	foreign key (iduser) references usagers (iduser)

);

create table poubelle(
	idtrash int(4) not null auto_increment,
	couleur varchar (10) not null,
	nblevee int(3) not null,
	coded int(5) not null,
	idhabitation int(5) not null,

	primary key (idtrash),
	foreign key (coded) references dechets(coded),
	foreign key (idhabitation) references habitation (idhabitation)

);

create table levee(
	leveenumber int(4) not null auto_increment,
	datelevee date not null,
	poids float(4,2) not null,
	idtrash int(4) not null,

	primary key (leveenumber),
	foreign key (idtrash) references poubelle(idtrash)

);