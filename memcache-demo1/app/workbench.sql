CREATE DATABASE IF NOT EXISTS fitness;
USE fitness;

DROP TABLE IF EXISTS food;
DROP TABLE IF EXISTS users;

CREATE TABLE users(
	user_ID int NOT NULL,
    username VARCHAR(45) NOT NULL UNIQUE,
    password VARCHAR(45) NOT NULL,
    age int NOT NULL,
    email VARCHAR(60) NOT NULL,
    weight SMALLINT NOT NULL,
    height SMALLINT NOT NULL,
    gender ENUM ('male', 'female'),
    PRIMARY KEY(user_ID)
);
INSERT INTO users VALUES('00','joao','1234','20', 'cbajpas@gmail.com','170','59', 'male');

CREATE TABLE food
(
food_ID int(10),
name char(18),
calories int(20),
amount int (10),
date date NOT NULL,
PRIMARY KEY(food_ID)
);

INSERT INTO food VALUES('1', 'apple', '100', '2', '2020-04-26'); 

CREATE TABLE user_food
(
user_ID int,
food_id int (10),
amount SMALLINT,
FOREIGN KEY (user_ID) REFERENCES users(user_ID),
FOREIGN KEY (food_ID) REFERENCES food(food_ID)
);
