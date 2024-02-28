CREATE DATABASE personal_info;
USE personal_info;

CREATE TABLE individuals (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(50) NOT NULL,
    middlename VARCHAR(50),
    lastname VARCHAR(50) NOT NULL,
    birthdate DATE NOT NULL,
    birthplace VARCHAR(100) NOT NULL,
    gender ENUM('male', 'female') NOT NULL,
    civil_status ENUM('married', 'divorced', 'widowed', 'common-law') NOT NULL,
    spouse_name VARCHAR(50),
    spouse_middlename VARCHAR(50),
    street VARCHAR(100) NOT NULL,
    barangay VARCHAR(100) NOT NULL,
    city VARCHAR(100) NOT NULL,
    country VARCHAR(100) NOT NULL,
    zip_code VARCHAR(10) NOT NULL,
    cellphone_number VARCHAR(15),
    telephone_number VARCHAR(15),
    email VARCHAR(100) NOT NULL UNIQUE,
    secondary_email VARCHAR(100),
    employment_status ENUM('employed(public)', 'unemployed', 'freelancer', 'retired') NOT NULL
);

