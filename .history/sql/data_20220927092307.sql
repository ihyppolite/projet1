DROP DATABASE IF EXISTS PROJET1;

CREATE DATABASE IF NOT EXISTS PROJET1;
USE PROJET1;
# -----------------------------------------------------------------------------
#       TABLE : COMMENTAIRE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS COMMENTAIRE
 (
   IDCOMMENTAIRE CHAR(32) NOT NULL  ,
   IDFICHE CHAR(32) NOT NULL  ,
   IDUSER INTEGER NOT NULL  ,
   CONTENU CHAR(255) NULL  
   , PRIMARY KEY (IDCOMMENTAIRE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE COMMENTAIRE
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_COMMENTAIRE_USERCONNECTEE
     ON COMMENTAIRE (IDUSER ASC);

CREATE  INDEX I_FK_COMMENTAIRE_FICHECONNAISSANCE
     ON COMMENTAIRE (IDFICHE ASC);

# -----------------------------------------------------------------------------
#       TABLE : USER
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS USER
 (
   IDUSER INTEGER NOT NULL  ,
   NOM CHAR(32) NULL  ,
   PRENOM CHAR(32) NULL  
   , PRIMARY KEY (IDUSER) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : ADMINISTRATEUR
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS ADMINISTRATEUR
 (
   IDUSER INTEGER NOT NULL  ,
   NOMUTILISATEURADMIN CHAR(32) NULL  ,
   MDP CHAR(32) NULL  ,
   NOM CHAR(32) NULL  ,
   PRENOM CHAR(32) NULL  
   , PRIMARY KEY (IDUSER) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : CATEGORIE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS CATEGORIE
 (
   IDCAT CHAR(32) NOT NULL  ,
   TITRE CHAR(32) NULL  
   , PRIMARY KEY (IDCAT) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : USERCONNECTEE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS USERCONNECTEE
 (
   IDUSER INTEGER NOT NULL  ,
   MAIL VARCHAR(128) NULL  ,
   MDP CHAR(32) NULL  ,
   DROITAJOUT BOOL NULL  ,
   DROITMODIF BOOL NULL  ,
   DROITSUPPRIMER BOOL NULL  ,
   NOM CHAR(32) NULL  ,
   PRENOM CHAR(32) NULL  
   , PRIMARY KEY (IDUSER) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : FICHECONNAISSANCE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS FICHECONNAISSANCE
 (
   IDFICHE CHAR(32) NOT NULL  ,
   IDCAT CHAR(32) NOT NULL  ,
   TITRE CHAR(32) NULL  ,
   DATE CHAR(32) NULL  ,
   TEXTEFICHE CHAR(255) NULL  
   , PRIMARY KEY (IDFICHE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE FICHECONNAISSANCE
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_FICHECONNAISSANCE_CATEGORIE
     ON FICHECONNAISSANCE (IDCAT ASC);


# -----------------------------------------------------------------------------
#       CREATION DES REFERENCES DE TABLE
# -----------------------------------------------------------------------------


ALTER TABLE COMMENTAIRE 
  ADD FOREIGN KEY FK_COMMENTAIRE_USERCONNECTEE (IDUSER)
      REFERENCES USERCONNECTEE (IDUSER) ;


ALTER TABLE COMMENTAIRE 
  ADD FOREIGN KEY FK_COMMENTAIRE_FICHECONNAISSANCE (IDFICHE)
      REFERENCES FICHECONNAISSANCE (IDFICHE) ;


ALTER TABLE ADMINISTRATEUR 
  ADD FOREIGN KEY FK_ADMINISTRATEUR_USER (IDUSER)
      REFERENCES USER (IDUSER) ;


ALTER TABLE USERCONNECTEE 
  ADD FOREIGN KEY FK_USERCONNECTEE_USER (IDUSER)
      REFERENCES USER (IDUSER) ;


ALTER TABLE FICHECONNAISSANCE 
  ADD FOREIGN KEY FK_FICHECONNAISSANCE_CATEGORIE (IDCAT)
      REFERENCES CATEGORIE (IDCAT) ;

