CREATE DATABASE biaawcheria ;

USE biaawcheria;
CREATE TABLE categories( `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
                          `category` VARCHAR(255) NOT NULL,
                          `photo` VARCHAR(255) );

USE biaawcheria;
CREATE TABLE artisan(id int(15) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                      id_category int(15),
                      name varchar(255) NOT NULL,
                      photo varchar(255),
                      description text NOT NULL, 
                      FOREIGN KEY(id_category) REFERENCES categories(id)
                     );

ALTER TABLE artisan 
ADD phone varchar(15) not null,
ADD address varchar(255) ;

CREATE TABLE admin (
    id INT(15) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);


CREATE TABLE users (id int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
                    fullName TINYTEXT NOT NULL,
                    email tinytext not null,
                    pasword longtext not null
                   );