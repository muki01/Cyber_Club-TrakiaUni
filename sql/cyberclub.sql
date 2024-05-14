CREATE DATABASE cyberclub;
USE cyberclub;

CREATE TABLE users(
	id INT PRIMARY KEY AUTO_INCREMENT, 
    username VARCHAR(50) NOT NULL UNIQUE, 
    email VARCHAR(50) NOT NULL UNIQUE, 
    password VARCHAR(50) NOT NULL,
    role VARCHAR(50) DEFAULT("user")
);

CREATE TABLE events(
	id INT PRIMARY KEY AUTO_INCREMENT,
	topic VARCHAR(100) NOT NULL,
	location VARCHAR(200) NOT NULL,
	imgURL VARCHAR(200),
	description TEXT,
	lecturer VARCHAR(100),
	eventDate DATETIME,
	isVisible VARCHAR(10)
);

CREATE TABLE team(
	id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100),
    title TEXT,
    imgURL VARCHAR(200)
); 

CREATE TABLE partners(
	id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100),
    title TEXT,
    imgURL VARCHAR(200)
); 

CREATE TABLE content(
	id INT PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(60),
    title VARCHAR(100),
    text TEXT,
    imgURL VARCHAR(200)
);

INSERT INTO `content` (`id`, `name`, `title`, `text`, `imgURL`) VALUES
(1, 'Home1', 'Why you should choose our club?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere necessitatibus debitis maxime doloremque tempore nihil est expedita atque culpa error! Quas cum architecto temporibus ad officiis tempore dignissimos, adipisci provident!', 'https://github.com/muki01/Cyber_Club-TrakiaUni/assets/75759731/be426bfe-a69c-4388-b85d-cbe7dd0a6640'),
(2, 'Home2', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere necessitatibus debitis maxime doloremque tempore nihil est expedita atque culpa error! Quas cum architecto temporibus ad officiis tempore dignissimos, adipisci provident!', 'https://github.com/muki01/Cyber_Club-TrakiaUni/assets/75759731/5b45e3d7-964b-46c1-82e6-2d869dbe328e'),
(3, 'AboutUs', 'За нас', 'КиберКлуб към Тракийския университет е част от Национален КиберКлуб-България и е посветен на обучение и развитие в областта на киберсигурността. С навлизането на дигилизацията в ежедневието ни с неумоверно бързи темпове, човечеството има нужда да се чувства защитено в бъдещето, в което технологиите не са просто инструмент, а начин на живот.', ''),
(4, 'ContactUs-1', 'Address', 'Студентски град, 6015 Стара Загора', ''),
(5, 'ContactUs-2', 'Faculty', 'Стопански Факултет, зала:4444', ''),
(6, 'ContactUs-3', 'Phone', '+359 11 222 3333', ''),
(7, 'ContactUs-4', 'Email', 'cyberclub.tru@gmail.com', '');