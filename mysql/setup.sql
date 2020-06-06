CREATE DATABASE students;
CREATE USER 'testuser'@'%' IDENTIFIED WITH mysql_native_password BY 'testpassword';
GRANT ALL ON students.* TO 'testuser'@'%';

USE students;

CREATE TABLE people(
    peopleID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    fName VARCHAR (50) NOT NULL,
    lName VARCHAR (50) NOT NULL,
    age VARCHAR (2),
    gender CHAR(1)
    
);

INSERT INTO people
VALUES
    (default,'Rick', 'Astley', '54', 'M' ),
    (default,'Michael', 'Jordan', '57', 'M'),
    (default,'Avril', 'Lavigne', '35', 'F'),
    (default,'Steve', 'Jobs', '56', 'M');



 