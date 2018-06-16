CREATE TABLE `student_details` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `roll_number` varchar(45) NOT NULL,
  `mobile` varchar(45) NOT NULL,
  `department` varchar(45) NOT NULL,
  `blood_group` varchar(45) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;