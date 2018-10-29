
USE tagBeSill;

CREATE TABLE IF NOT EXISTS Role(
	id INTEGER UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    label VARCHAR(255) NOT NULL,
    description BLOB NOT NULL
) engine InnoDB;

CREATE TABLE IF NOT EXISTS `User`(
	id INTEGER UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nickname VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NULL,
    roleId INTEGER UNSIGNED NOT NULL,
    FOREIGN KEY (roleId) REFERENCES Role(id)
) engine InnoDB;

CREATE TABLE IF NOT EXISTS projectUser(
	projectId INTEGER UNSIGNED,
    userId INTEGER UNSIGNED,
    PRIMARY KEY (projectId, userId),
    FOREIGN KEY (projectId) REFERENCES Project(id),
    FOREIGN KEY (userId) REFERENCES `User`(id)
) ENGINE InnoDB;

USE tagBeSill;
INSERT INTO Role(label, description) VALUES
	('ERP', 'Lorem ipsum dolor sit amet');
	


	
 

	
    
