CREATE DATABASE biaawcheria ;

USE biaawcheria;
CREATE TABLE categories( `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
                          `category` VARCHAR(255) NOT NULL,
                          `photo` VARCHAR(255) );


USE biaawcheria;
CREATE TABLE business(id int(15) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                      id_category int(15),
                      name varchar(255) NOT NULL,
                      photo varchar(255),
                      description text NOT NULL, 
                      FOREIGN KEY(id_category) REFERENCES categories(id)
                     );

CREATE TABLE users (users_id int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
                    fullName TINYTEXT NOT NULL,
                    pasword longtext not null,
                    email tinytext not null
                   );