CREATE TABLE users
( id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  name varchar(25) NULL,
  age int(30) NULL,
  email varchar (30) NULL
);

INSERT INTO users (id, name, age, email)
VALUES (1, 'Stefan', 22, 'stefan@abv.bg'),
       (2, 'Rado', 26, 'rado@abv.bg');