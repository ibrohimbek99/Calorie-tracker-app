CREATE DATABASE IF NOT EXISTS auth_db;
use auth_db;
DROP TABLE IF EXISTS user_food;
DROP TABLE IF EXISTS food;
DROP TABLE IF EXISTS users;

CREATE TABLE users (
  id int(11) NOT NULL auto_increment PRIMARY KEY,
  fname varchar(255) NOT NULL,
  username varchar(255) NOT NULL,
  password varchar(255) NOT NULL
);
INSERT INTO users VALUES('1', 'joao', 'jp', '123');

CREATE TABLE food
(
food_ID int auto_increment NOT NULL,
name char(18),
calories int(20),
amount int (10),
-- date date NOT NULL,
PRIMARY KEY(food_ID)
);
INSERT INTO food VALUES('1', 'apple', '0', '2');

CREATE TABLE user_food
(
user_id int,
food_id int,
FOREIGN KEY (user_id) REFERENCES users(id),
FOREIGN KEY (food_ID) REFERENCES food(food_ID)
);
INSERT INTO user_food VALUES('1', '1');