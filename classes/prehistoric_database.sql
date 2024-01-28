CREATE TABLE post(
  	postID INT NOT NULL AUTO_INCREMENT,
    title varchar(255),
    beschrijving varchar(255),
    PRIMARY KEY(postID)
);
CREATE TABLE users (
    userID INT NOT NULL AUTO_INCREMENT,
    post_id INT(11),
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
	categorieID INT NOT NULL AUTO_INCREMENT,
    naam varchar(255),
    contintent varchar(255),
    jaartal INT(10),
    PRIMARY KEY(categorieID)
);