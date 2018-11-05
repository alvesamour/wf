INSERT INTO categorie(label, description) VALUES
	('chaussure', 'chaussure Nike'),
	('pantalon', 'pantalon nike');

INSERT INTO administrator(nickname, password) VALUES
	('alves', 'alves10');
    
delete from article;

INSERT INTO article(title, description, image, marque, prix, categorieId, administratorId) VALUES
	('chaussure nike adulte', 'chaussure nike adulte pour le sport', 'img/nike_adult.jpg', 'nike', '50€', 1, 1),
	('chaussure nike elfant', 'chaussure nike enfant pour le sport et jeux', 'img/nike_kids.jpg', 'nike', '40€', 1, 1),
	('pantalon nike adulte', 'pantalon nike de sport pour femme', 'img/pantalon_femme_nike.jpg', 'nike', '60€', 2, 1);


		