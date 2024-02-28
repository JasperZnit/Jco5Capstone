create database test2;

use test2;

CREATE TABLE `users` (
  `validation_id` int(11) DEFAULT NULL,
  `date_filed` date NOT NULL,
  `name` varchar(100) NOT NULL,
  `remarks` enum('complete', 'incomplete') DEFAULT 'incomplete',
  `validation_status` enum('validated', 'non-validated') NOT NULL,
  `action` varchar(255) NOT NULL,
  PRIMARY KEY  (`validation_id`)
);