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

INSERT INTO category(label, description) VALUES
	('IT', 'lorem ipsum dolor sit amet'),
    ('ITIL', 'lorem ipsum dolor sit amet'),
    ('ERP', 'lorem ipsum dolor sit amet');
    
INSERT INTO status(label, description) VALUES
	('new', 'lorem ipsum dolor sit amet'),
    ('In progress', 'lorem ipsum dolor sit amet'),
    ('Blocked', 'lorem ipsum dolor sit amet'),
    ('Resolved', 'lorem ipsum dolor sit amet');

INSERT INTO project(title, description, image, publishingDate, statusId) VALUES
	('restaurant-alves', 'lorem ipsum dolor sit amet', 'https://picsum.photos/100/100/?random', NOW(), 1),
    ('buy-car', 'lorem ipsum dolor sit amet', 'https://picsum.photos/100/100/?random', NOW(), 3);

INSERT INTO ProjectCategory VALUES
	(1, 1),
    (2, 2),
    (2, 3);
    
