CREATE DATABASE IF NOT EXISTS TDB;
USE TDB;

CREATE TABLe clients(
    id_client int primary key auto_increment,
    nom varchar(100),
    email varchar(100),
    date_inscription DATE
);

create table performance(
    id_perf int primary key auto_increment,
    nv_clients int,
    nb_ventes int,
    objectif decimal(10,2),
    taux_atteint decimal(10,2),
    CA decimal (10,2)
);

create table objectif(
    id_obj int primary key auto_increment,
    obj_vente decimal(10,2),

);

create table produit(
    id_prod int primary key auto_increment,
    prix decimal(10,2),
    nom varchar(200)
);



create table ventes(
    id_vente int primary key auto_increment,
    quantite int,
    date date,
    id_produit int,
    id_client int,
    foreign key (id_client) references clients(id_client),
    foreign key (id_produit) references produit(id_prod),

);

