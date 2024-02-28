create database test;

use test;

CREATE TABLE `users` (
  `reference_number` varchar(20) NOT NULL,
  `date_filed` date NOT NULL,
  `name` varchar(100) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `status` enum('pending', 'approved', 'rejected') NOT NULL,
  `payment` enum('paid', 'unpaid') NOT NULL,
  `action` varchar(255) NOT NULL,
  PRIMARY KEY  (`reference_number`)
);