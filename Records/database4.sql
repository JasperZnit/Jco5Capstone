CREATE DATABASE Requester;
USE Requester;


CREATE TABLE Requester (
    requester_id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(50),
    middlename VARCHAR(50),
    lastname VARCHAR(50),
    age INT,
    address VARCHAR(255),
    years_of_residency INT,
);