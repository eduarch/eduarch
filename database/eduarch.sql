-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 13, 2013 at 10:06 AM
-- Server version: 5.5.20-log
-- PHP Version: 5.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eduarch`
--
CREATE DATABASE IF NOT EXISTS `eduarch` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `eduarch`;

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE IF NOT EXISTS `classes` (
  `class_no` int(11) NOT NULL AUTO_INCREMENT,
  `class_name` varchar(50) NOT NULL,
  `class_desc` longtext NOT NULL,
  `class_image` varchar(255) NOT NULL,
  `class_pts` int(11) NOT NULL,
  `class_users` int(11) NOT NULL,
  `user_no` int(11) NOT NULL,
  `course_no` int(11) NOT NULL,
  `status_no` int(11) NOT NULL,
  PRIMARY KEY (`class_no`),
  UNIQUE KEY `class_no` (`class_no`),
  KEY `user_no` (`user_no`,`course_no`),
  KEY `course_no` (`course_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`class_no`, `class_name`, `class_desc`, `class_image`, `class_pts`, `class_users`, `user_no`, `course_no`, `status_no`) VALUES
(1, 'PHP Programming', 'Web Design and Server Scripting', '', 0, 1, 2, 1, 1),
(2, 'The Discovering of the Wild', 'Breaking the binds that transcends our true nature', '', 0, 1, 3, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `course_no` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(50) NOT NULL,
  `course_desc` longtext NOT NULL,
  `course_image` varchar(255) NOT NULL,
  `course_pts` int(11) NOT NULL,
  `course_classes` int(11) NOT NULL,
  `user_no` int(11) NOT NULL,
  `status_no` int(11) NOT NULL,
  PRIMARY KEY (`course_no`),
  KEY `user_no` (`user_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_no`, `course_name`, `course_desc`, `course_image`, `course_pts`, `course_classes`, `user_no`, `status_no`) VALUES
(1, 'Information Technology', 'Computer stuff, Programming and Computer Related Technologies', '', 0, 0, 1, 1),
(2, 'Photography', 'Photos Photos Photos..', '', 0, 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `course_registry`
--

CREATE TABLE IF NOT EXISTS `course_registry` (
  `course_no` int(11) NOT NULL,
  `user_no` int(11) NOT NULL,
  `course_lnr_pts` int(11) NOT NULL,
  `course_mtr_pts` int(11) NOT NULL,
  `course_ftr_pts` int(11) NOT NULL,
  `course_reg_date` int(11) NOT NULL,
  `status_no` int(11) NOT NULL,
  PRIMARY KEY (`course_no`,`user_no`),
  KEY `user_no` (`user_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tutorials`
--

CREATE TABLE IF NOT EXISTS `tutorials` (
  `tl_no` int(11) NOT NULL AUTO_INCREMENT,
  `tl_name` int(11) NOT NULL,
  `tl_desc` int(11) NOT NULL,
  `tl_pts` int(11) NOT NULL,
  `class_no` int(11) NOT NULL,
  `status_no` int(11) NOT NULL,
  PRIMARY KEY (`tl_no`),
  KEY `class_no` (`class_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_no` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` char(50) NOT NULL,
  `user_pass` char(32) NOT NULL,
  `user_lname` varchar(50) NOT NULL,
  `user_fname` varchar(50) NOT NULL,
  `user_reg_date` date NOT NULL,
  `user_other_info` text NOT NULL,
  `user_type_no` int(11) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `status_no` int(11) NOT NULL,
  PRIMARY KEY (`user_no`),
  UNIQUE KEY `user_id` (`user_email`),
  UNIQUE KEY `user_id_2` (`user_email`),
  UNIQUE KEY `user_id_3` (`user_email`),
  KEY `user_type_no` (`user_type_no`),
  KEY `user_type_no_2` (`user_type_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_no`, `user_email`, `user_pass`, `user_lname`, `user_fname`, `user_reg_date`, `user_other_info`, `user_type_no`, `user_image`, `status_no`) VALUES
(1, 'super_admin@eduarch.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Super', 'Admin', '2013-12-06', '', 2, '', 1),
(2, 'ryeballar@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Eballar', 'Ryan', '2013-12-12', '', 1, '', 1),
(3, 'suddencatharsis@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Catharsis', 'Sudden', '2013-12-12', '', 1, '', 1),
(4, 'haha@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'haha', 'haha', '2013-12-12', '', 1, '', 1),
(5, 'halo@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Halo', 'Halo', '2013-12-12', '', 1, '', 1),
(6, 'rage@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'rage', 'rage', '2013-12-12', '', 1, '', 1),
(7, 'korona@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'korona', 'korona', '2013-12-13', '', 1, '', 1),
(8, 'axe@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'axe', 'axe', '2013-12-13', '', 1, '', 1),
(9, 'all@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'all', 'all', '2013-12-13', '', 1, '', 1),
(10, 'envycherubim@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Eballar', 'Ryan', '2013-12-13', '', 1, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE IF NOT EXISTS `user_types` (
  `user_type_no` int(11) NOT NULL AUTO_INCREMENT,
  `user_type_name` varchar(50) NOT NULL,
  PRIMARY KEY (`user_type_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`user_type_no`, `user_type_name`) VALUES
(1, 'General User'),
(2, 'Admin User');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `classes`
--
ALTER TABLE `classes`
  ADD CONSTRAINT `classes_ibfk_1` FOREIGN KEY (`user_no`) REFERENCES `users` (`user_no`),
  ADD CONSTRAINT `classes_ibfk_2` FOREIGN KEY (`course_no`) REFERENCES `courses` (`course_no`);

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`user_no`) REFERENCES `users` (`user_no`);

--
-- Constraints for table `course_registry`
--
ALTER TABLE `course_registry`
  ADD CONSTRAINT `course_registry_ibfk_1` FOREIGN KEY (`course_no`) REFERENCES `courses` (`course_no`),
  ADD CONSTRAINT `course_registry_ibfk_2` FOREIGN KEY (`user_no`) REFERENCES `users` (`user_no`);

--
-- Constraints for table `tutorials`
--
ALTER TABLE `tutorials`
  ADD CONSTRAINT `tutorials_ibfk_1` FOREIGN KEY (`class_no`) REFERENCES `classes` (`class_no`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`user_type_no`) REFERENCES `user_types` (`user_type_no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
