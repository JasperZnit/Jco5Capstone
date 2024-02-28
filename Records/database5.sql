CREATE DATABASE appointments;

USE appointments;

CREATE TABLE appointments (
    reference_number INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(50) NOT NULL,
    middlename VARCHAR(50),
    lastname VARCHAR(50) NOT NULL,
    appointmentdate DATE NOT NULL,
    modeofpayment ENUM('Gcash', 'Maya', 'Bank') NOT NULL,
    amount DECIMAL(10, 2) NOT NULL,
    Status ENUM('paid', 'unpaid') NOT NULL
);
