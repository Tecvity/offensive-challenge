CREATE USER 'admin'@'localhost' IDENTIFIED BY 'adminspassword';
GRANT ALL PRIVILEGES ON *.* TO 'admin'@'localhost';
FLUSH PRIVILEGES;
CREATE DATABASE demo;
USE demo;

CREATE TABLE `employees` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(100) NOT NULL,
	`address` varchar(255) NOT NULL,
	`salary` int(10) NOT NULL,
	PRIMARY KEY (`id`)
	) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `infromation_schema` (
	`schema` varchar(255) NOT NULL
);

INSERT INTO `infromation_schema` VALUES ('OTBmNjg3MDRjN2NlODkwZDI4NTFkNzU3NTQ4MTM3OGVlYzJlMmU3Mw==');
INSERT INTO `employees` VALUES (1,'Norma R Abney','1552 Isaacs Creek Road\r\nCatlin, IL 61817',1337);
INSERT INTO `employees` VALUES (2,'Donald K Burns','2463 Linda Street\r\nPhiladelphia, PA 19103',31337);
INSERT INTO `employees` VALUES (3,'Brandon Young','1546 Peck Street\r\nNashua, NH 03061',10000);
INSERT INTO `employees` VALUES (4,'Javier P. Garcia','R Doutor Alfredo\r\n7940-101 CUBA',1288);
INSERT INTO `employees` VALUES (5,'Andrea Wurfel','R Patrão Caramelho 62\r\n4485-089 FAJOZES',3317);
INSERT INTO `employees` VALUES (6,'Melanie Bergmann','R Padre António Vieira 60\r\n8600-166 LUZ',1022);
