CREATE DATABASE signup;
USE signup;

CREATE TABLE users (
    `user_id` INT(11) NOT NULL AUTO_INCREMENT,
    `fullname` VARCHAR(45) NOT NULL,
    `email` VARCHAR(45) NOT NULL UNIQUE,
    `password` VARCHAR(45) NOT NULL,
    PRIMARY KEY (`user_id`)
);
CREATE TABLE individuals (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `user_id` INT(11),
    `firstname` VARCHAR(50) NOT NULL,
    `middlename` VARCHAR(50),
    `lastname` VARCHAR(50) NOT NULL,
    `age` INT NOT NULL,
    `birthdate` DATE NOT NULL,
    `birthplace` VARCHAR(100) NOT NULL,
    `gender` ENUM('male', 'female') NOT NULL,
    `civil_status` ENUM('married', 'divorced', 'widowed', 'common-law') NOT NULL,
    `spouse_name` VARCHAR(50),
    `spouse_middlename` VARCHAR(50),
    `spouse_lastname` VARCHAR(50),
    `street` VARCHAR(100) NOT NULL,
    `barangay` VARCHAR(100) NOT NULL,
    `city` VARCHAR(100) NOT NULL,
    `country` VARCHAR(100) NOT NULL,
    `zip_code` VARCHAR(10) NOT NULL,
    `cellphone_number` VARCHAR(15),
    `telephone_number` VARCHAR(15),
    `email` VARCHAR(100) NOT NULL UNIQUE,
    `secondary_email` VARCHAR(100),
    `employment_status` ENUM('employed(public)', 'unemployed', 'freelancer', 'retired') NOT NULL,
    FOREIGN KEY (`user_id`) REFERENCES Users(`user_id`)
);

CREATE TABLE Requester (
    `requester_id` INT AUTO_INCREMENT,
    `user_id` INT(11),
    `firstname` VARCHAR(50),
    `middlename` VARCHAR(50),
    `lastname` VARCHAR(50),
    `age` INT,
    `address` VARCHAR(255),
    `years_of_residency` INT,
    PRIMARY KEY (`requester_id`),
    FOREIGN KEY (`user_id`) REFERENCES Users(`user_id`)
);

CREATE TABLE appointments (
    `reference_number` INT AUTO_INCREMENT PRIMARY KEY,
    `user_id` INT(11),
    `firstname` VARCHAR(50) NOT NULL,
    `middlename` VARCHAR(50),
    `lastname` VARCHAR(50) NOT NULL,
    `appointmentdate` DATE NOT NULL,
    `modeofpayment` ENUM('Gcash', 'Maya', 'Bank') NOT NULL,
    `amount` DECIMAL(10, 2) NOT NULL,
    `Status` ENUM('paid', 'unpaid') NOT NULL,
    FOREIGN KEY (`user_id`) REFERENCES Users(`user_id`)
);