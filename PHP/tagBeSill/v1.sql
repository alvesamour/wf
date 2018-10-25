drop database tagBeSill;
CREATE DATABASE  tagBeSill CHARSET UTF8;
use tagBeSill;

CREATE TABLE IF NOT EXISTS `status`(
	id INT(10) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    label VARCHAR(255) NOT NULL,
    description BLOB
) ENGINE=INNODB;

CREATE TABLE IF NOT EXISTS project(
	id INT(10) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    description BLOB NOT NULL,
    image VARCHAR(255) NOT NULL,
    publishingDate DATETIME DEFAULT NULL,
    creationDate DATETIME NOT NULL DEFAULT current_timestamp,
    updatedAt DATETIME NOT NULL default current_timestamp,
    statusId INT UNSIGNED NOT NULL,
    FOREIGN KEY(statusId) REFERENCES `status` (id)
)  ENGINE=INNODB;

CREATE TABLE IF NOT EXISTS category(
	id INT(10) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    label VARCHAR(255) NOT NULL,
    description BLOB
) ENGINE=INNODB;

CREATE TABLE IF NOT EXISTS ProjectCategory (
	projectId INT UNSIGNED,
    categoryId INT UNSIGNED,
    PRIMARY KEY(projectId, categoryId),
    FOREIGN KEY(projectId) REFERENCES project(id),
	FOREIGN KEY(categoryId) REFERENCES category(id)
  ) ENGINE=INNODB;  
