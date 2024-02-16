

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



CREATE TABLE `student_file` (
  `id` INT(11) NOT NULL,
  `name` VARCHAR(12) NOT NULL,
  `icnum` INT NOT NULL,
  `telno` VARCHAR(15) NOT NULL,
  `gender` VARCHAR(8) NOT NULL,
  `class` VARCHAR(5) NOT NULL,
  `image` varchar(250) NOT NULL,
  `fname` VARCHAR(100) NOT NULL,
  `ficnum` INT NOT NULL,
  `mname` VARCHAR(100) NOT NULL,
  `micnum` INT NOT NULL,
  `ename` VARCHAR(100) NOT NULL,
  `erel` VARCHAR(45) NOT NULL,
  `etelno` VARCHAR(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `student_file` (`id`, `name`, `icnum`, `telno`, `gender`, `class`, `image`, `fname`, `ficnum`, `mname`, `micnum`, `ename`, `erel`, `etelno`) VALUES
(1, 'Mahesh', '980918075839', '0184074387', 'Male', '01A', 'macro.png', 'Bejo', '670915079845', 'Denve', '6806068795', 'Bejo', 'Dad', '0176588558');


ALTER TABLE `student_file`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `student_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
