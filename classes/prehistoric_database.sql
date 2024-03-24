CREATE TABLE post(
  	postID INT NOT NULL AUTO_INCREMENT,
    title varchar(255),
    beschrijving varchar(255),
    PRIMARY KEY(postID)
);
CREATE TABLE users (
    userID INT NOT NULL AUTO_INCREMENT,
    post_id INT(11),
    firstname VARCHAR(255),
    lastname VARCHAR(255),
    username VARCHAR(255),
    password VARCHAR(255),
    PRIMARY KEY(userID),
    FOREIGN KEY(post_id) REFERENCES post(postID)
);

CREATE TABLE rol(
	rolID INT NOT NULL AUTO_INCREMENT,
    users_id INT(11),
    naam varchar(255),
    PRIMARY KEY(rolID),
    FOREIGN KEY(users_id)
    REFERENCES users(userID)
);
CREATE TABLE recht(
	id INT NOT NULL AUTO_INCREMENT,
    rol_id INT(11),
    naam varchar(255),
    PRIMARY KEY(id),
    FOREIGN KEY(rol_id)
    REFERENCES rol(rolID)
);
CREATE TABLE Categorie_Post(
	categorie_postID INT NOT NULL AUTO_INCREMENT,
    post_id INT(11),
    naam varchar(255),
    PRIMARY KEY(categorie_postID),
    FOREIGN KEY(post_id)
    REFERENCES post(postID)
);

CREATE TABLE items(
	id INT NOT NULL AUTO_INCREMENT,
    naam varchar(255),
    beschrijving varchar(255),
    diet varchar(255),
    lengte varchar(255),
    geleefd varchar(255),
    PRIMARY KEY(id)
);
CREATE TABLE resources(
    resourcesID INT NOT NULL AUTO_INCREMENT,
    items_id INT(11),
    plaatjes blob,
    video blob,
    PRIMARY KEY(resourcesID),
    FOREIGN KEY(items_id)
    REFERENCES items(id)
);
CREATE TABLE categorie(
	categorieID INT(10) NOT NULL AUTO_INCREMENT,
    naam varchar(255),
    contintent varchar(255),
    jaartal INT(10),
    PRIMARY KEY(categorieID)
);

/* hoe maak je een tussentabel aan?*/

/*eerst maak je er een normale tabel van zonder pk of fk */
CREATE TABLE items_post (
    itemsID INT(10),
    postID INT(10));

/* vervolgends ga je in de tabel zelf aangeven dat het een alter table is en geef je fk mee */
ALTER TABLE items_post 
ADD FOREIGN KEY (itemsID) REFERENCES items (id);

/* dat doe je met alle records in de tussentabel */
ALTER TABLE items_post
ADD FOREIGN KEY (postID) REFERENCES post (postID)

/* Voorbeeld 2 */
CREATE TABLE categorie_items (
    categorieID INT(11),
    itemsID INT(11));

ALTER TABLE categorie_items 
ADD FOREIGN KEY (categorieID) REFERENCES categorie (categorieID);

ALTER TABLE categorie_items 
ADD FOREIGN KEY (itemsID) REFERENCES items (id);