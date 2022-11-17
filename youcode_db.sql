-- Active: 1668335327925@@127.0.0.1@3306@youcode_clubs_v2

CREATE DATABASE IF NOT EXISTS youcode_clubs;

USE youcode_clubs;

CREATE TABLE admin(
    username VARCHAR(255) PRIMARY KEY ,
    password VARCHAR(255)
);

INSERT INTO admin VALUES('admin', 'admin');

CREATE TABLE class(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255)
);

INSERT INTO class (nom) VALUES
('Brendan'),
('ada lovelace'),
('robert noyce'),
('alan turing'),
('margarit hamelton'),
('java 2'),
('java 1');


CREATE TABLE apprenant (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom_c VARCHAR(255),
    age INT,
    img VARCHAR(255),
    id_class INT,

    Foreign Key (id_class) REFERENCES class(id)
);


INSERT INTO apprenant(nom_c , age , img, id_class) VALUES ('Yassine AAYNE ALHAYATE', 22, 'https://intranet.youcode.ma/storage/users/profile/thumbnail/467-1664881404.JPG', 1);
INSERT INTO apprenant(nom_c , age , img, id_class) VALUES ('Mehdi Elhajouji', 23, 'https://intranet.youcode.ma/storage/users/profile/thumbnail/456-1664881441.JPG', 2);
INSERT INTO apprenant(nom_c , age , img, id_class) VALUES ('Fadwa Cherqui', 21, 'https://intranet.youcode.ma/storage/users/profile/thumbnail/435-1664881715.JPG', 4);
INSERT INTO apprenant(nom_c , age , img, id_class) VALUES ('Mohammed Moustarhfir', 22, 'https://intranet.youcode.ma/storage/users/profile/thumbnail/488-1664882227.JPG', 5);




CREATE TABLE club(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255),
    logo VARCHAR(255),
    description VARCHAR(500),
    date_creation DATE 
);


INSERT INTO club(nom, logo,description,date_creation) VALUES('Sport club', 'https://graphiste.com/blog/wp-content/uploads/sites/4/2016/08/logo-sport-10.png','Hocque diligens deinde in quo cibo missus opera tuto abunde tumor opera missus cibo praepotens et consenuit avunculus hocque est periret tumor est praefecti tuto fiduciam praepotens castra salus insidiarum consenuit deinde diligens est Galli acueret salus est verum mota.','2022-11-05');
INSERT INTO club(nom, logo,description,date_creation) VALUES('Art club', 'https://www.graphicsprings.com/filestorage/stencils/1f4e948fcfc9977ee6fb567bd815132d.png?width=500&height=500','Hocque diligens deinde in quo cibo missus opera tuto abunde tumor opera missus cibo praepotens et consenuit avunculus hocque est periret tumor est praefecti tuto fiduciam praepotens castra salus insidiarum consenuit deinde diligens est Galli acueret salus est verum mota.','2022-12-05');
INSERT INTO club(nom, logo,description,date_creation) VALUES('Gaming club', 'https://graphicsfamily.com/wp-content/uploads/edd/2020/09/Free-Gaming-Logo-Mascot-scaled.jpg','Hocque diligens deinde in quo cibo missus opera tuto abunde tumor opera missus cibo praepotens et consenuit avunculus hocque est periret tumor est praefecti tuto fiduciam praepotens castra salus insidiarum consenuit deinde diligens est Galli acueret salus est verum mota.','2022-11-25');



CREATE TABLE membre(
    id_membre INT PRIMARY KEY,
    id_club INT,
    role VARCHAR(255),

    Foreign Key (id_membre) REFERENCES apprenant(id),
    Foreign Key (id_club) REFERENCES club(id)
);

INSERT INTO membre VALUES(1,1,'President');
INSERT INTO membre VALUES(2,1,'Consultant');
INSERT INTO membre VALUES(3,1,'membre');


SELECT * FROM apprenant INNER JOIN membre ON 
id = membre.id_membre INNER JOIN club ON

id_club = club.id;