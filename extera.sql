CREATE TABLE users ( id INT NOT NULL  PRIMARY KEY AUTO_INCREMENT ,
firstname VARCHAR(50)NOT NULL ,
lastname VARCHAR(50)NOT NULL ,
username VARCHAR(255)NOT NULL  UNIQUE,
email VARCHAR(255)NOT NULL ,
password VARCHAR(25)NOT NULL ,
picture VARCHAR(255)NOT NULL  references images(id)
);

CREATE TABLE properties ( id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
type VARCHAR(50)NOT NULL references propertyType(type),
space VARCHAR(255)NOT NULL,
price INT NOT NULL,
address VARCHAR(255)NOT NULL,
contractType VARCHAR(10)NOT NULL references contractType(type),
data DATETIME,
image VARCHAR(255)NOT NULL references images(id)
);

CREATE TABLE villas ( id INT NULL PRIMARY KEY AUTO_INCREMENT,
type VARCHAR(100)NOT NULL references propertyType(type),
space VARCHAR(255)NOT NULL ,
numOFrooms INT NOT NULL ,
price INT(255)NOT NULL ,
contractType VARCHAR(10)NOT NULL references contractType(type),
address VARCHAR(255)NOT NULL ,
image VARCHAR(255)NOT NULL references images(id),
date DATETIME NOT NULL
);

CREATE TABLE shops ( id INT NULL PRIMARY KEY AUTO_INCREMENT,
type VARCHAR(100)NOT NULL references propertyType(type),
space VARCHAR(255)NOT NULL ,
price INT(255)NOT NULL ,
contractType VARCHAR(10)NOT NULL references contractType(type),
address VARCHAR(255)NOT NULL ,
image VARCHAR(255)NOT NULL references images(id),
date DATETIME NOT NULL
);

CREATE TABLE propertyType (id INT NULL PRIMARY KEY AUTO_INCREMENT,
type VARCHAR(100)NOT NULL 
);

CREATE TABLE contractType (id INT NULL PRIMARY KEY AUTO_INCREMENT,
type VARCHAR(100)NOT NULL
);

CREATE TABLE images (id INT NULL PRIMARY KEY AUTO_INCREMENT,
image VARCHAR(255)NOT NULL,
userID INT NOT NULL references users(id)
);

CREATE TABLE messages (id INT NULL PRIMARY KEY AUTO_INCREMENT,
text VARCHAR(255)NOT NULL,
userID INT NOT NULL references users(id)
 );

CREATE TABLE contactUs (id INT NULL PRIMARY KEY AUTO_INCREMENT,
fullNAme VARCHAR(255)NOT NULL,
email VARCHAR(255)NOT NULL,
text VARCHAR(255)NOT NULL
);