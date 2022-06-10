CREATE DATABASE biaawcheria ;

USE biaawcheria;
CREATE TABLE categories( `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
                          `category` VARCHAR(255) NOT NULL,
                          `photo` VARCHAR(255) );