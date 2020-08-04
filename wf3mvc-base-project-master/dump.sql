
CREATE DATABASE vtc;

CREATE TABLE vtc.conducteur (
id_conducteur INT AUTO_INCREMENT, 
prenom	VARCHAR(255),
nom	VARCHAR(255),
 CONSTRAINT PK_conducteur PRIMARY KEY (id_conducteur)
 );
 
 CREATE TABLE vtc.vehicule (
 id_vehicule INT AUTO_INCREMENT, 
marque VARCHAR(100),
 modele VARCHAR(100),
couleur VARCHAR(100),
immatriculation VARCHAR(50),
 CONSTRAINT PK_vehicule PRIMARY KEY (id_vehicule)
 ); 
 

 CREATE TABLE vtc.association_vehicule_conducteur (
 id_association INT AUTO_INCREMENT, 
 id_vehicule INT ,
 id_conducteur INT ,
 CONSTRAINT PK_association_vehicule_conducteur PRIMARY KEY (id_association),
 constraint FK_vehiculeID FOREIGN KEY (id_vehicule) REFERENCES vehicule(id_vehicule),
 CONSTRAINT FK_conducteurID FOREIGN KEY (id_conducteur) REFERENCES conducteur(id_conducteur )
 );
