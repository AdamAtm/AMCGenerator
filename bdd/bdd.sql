DROP DATABASE IF EXISTS  amcgen;
CREATE DATABASE amcgen;
USE amcgen;

/*CREATION DES TABLE*/
CREATE TABLE matiere(
    id INT NOT NULL AUTO_INCREMENT,
    description VARCHAR(100),
    PRIMARY KEY(id)
)ENGINE=INNODB;

CREATE TABLE theme(
    id INT NOT NULL AUTO_INCREMENT,
    description VARCHAR(100),
    PRIMARY KEY(id)
)ENGINE=INNODB;

CREATE TABLE qcm(
    id INT NOT NULL AUTO_INCREMENT,
    nom VARCHAR(50),
    header TEXT NOT NULL,
    idMatiere INT NOT NULL,
    idTheme INT NOT NULL,
    PRIMARY KEY(id)
)ENGINE=INNODB;

CREATE TABLE question(
    id INT NOT NULL AUTO_INCREMENT,
    lignes INT DEFAULT 0,
    columns INT DEFAULT 0,
    laQuestion VARCHAR(100),
    idQcm INT NOT NULL,
    type ENUM('Simple', 'Multiple', 'Ouverte'),
    PRIMARY KEY(id)
)ENGINE=INNODB;

CREATE TABLE proposition(
    id INT NOT NULL AUTO_INCREMENT,
    idQuestion INT NOT NULL,
    bonneMauvaise CHAR(1),
    bareme TEXT NOT NULL,
    reponse VARCHAR(50),
    PRIMARY KEY(id)
)ENGINE=INNODB;

/*CLEE ETRANGERE*/
/*qcm*/
ALTER TABLE qcm
ADD CONSTRAINT fk_qcm_idMatiere
FOREIGN KEY (idMatiere) REFERENCES matiere(id);

ALTER TABLE qcm
ADD CONSTRAINT fk_qcm_idTheme
FOREIGN KEY (idTheme) REFERENCES theme(id);

/*question*/
ALTER TABLE question
ADD CONSTRAINT fk_question_idQcm
FOREIGN KEY (idQcm) REFERENCES qcm(id);

/*proposition*/
ALTER TABLE proposition
ADD CONSTRAINT fk_proposition_idQuestion
FOREIGN KEY (idQuestion) REFERENCES proposition(id);