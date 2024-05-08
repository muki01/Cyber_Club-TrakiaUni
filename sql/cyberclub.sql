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
(1, 'Title1', 'Why you should choose our club?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere necessitatibus debitis maxime doloremque tempore nihil est expedita atque culpa error! Quas cum architecto temporibus ad officiis tempore dignissimos, adipisci provident!', 'https://s1.ezgif.com/tmp/ezgif-1-affac5b291.jpg'),
(2, 'Title2', 'Lorem Ipsum', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere necessitatibus debitis maxime doloremque tempore nihil est expedita atque culpa error! Quas cum architecto temporibus ad officiis tempore dignissimos, adipisci provident!', 'https://s1.ezgif.com/tmp/ezgif-1-99b1f7b8f2.jpg');