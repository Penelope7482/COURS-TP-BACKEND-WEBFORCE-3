CREATE database immobilier;

CREATE TABLE LOGEMENT (
id_logement INT AUTO_INCREMENT, 
titre	VARCHAR(100),
adresse	VARCHAR(255),
ville	VARCHAR(100),
cp		INT, 
surface INT,
prix INT,
photo VARCHAR(255),
type VARCHAR (20),
description	TEXT,
CONSTRAINT PK_LOGEMENT PRIMARY KEY (id_logement)
);
