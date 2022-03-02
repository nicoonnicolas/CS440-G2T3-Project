-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 02, 2022 at 07:06 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: cs440_project
--
CREATE DATABASE IF NOT EXISTS cs440_project DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE cs440_project;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS user;
CREATE TABLE IF NOT EXISTS `user` (
  USER_USERNAME varchar(45) NOT NULL,
  USER_PASSWORD varchar(256) NOT NULL,
  USER_FIRST_NAME varchar(45) NOT NULL,
  USER_LAST_NAME varchar(45) NOT NULL,
  USER_ROLE varchar(45) NOT NULL,
  USER_DESCRIPTION varchar(512) NOT NULL,
  PRIMARY KEY (USER_USERNAME)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `user`
--

TRUNCATE TABLE `user`;
--
-- Dumping data for table `user`
--

INSERT INTO `user` (USER_USERNAME, USER_PASSWORD, USER_FIRST_NAME, USER_LAST_NAME, USER_ROLE, USER_DESCRIPTION) VALUES('khaisoon123', '46771e5d8d4e238f69a3ebf9adb0dc5969b90670', 'Khai Soon', 'Teow', 'Admin', 'Student in Singapore Management University. ');
INSERT INTO `user` (USER_USERNAME, USER_PASSWORD, USER_FIRST_NAME, USER_LAST_NAME, USER_ROLE, USER_DESCRIPTION) VALUES('nicolas123', '3adb6313def794171d0e53d9d2a8b2fde64cf9e7', 'Nicolas', 'Wijaya', 'Student', 'Student in Singapore Management University. ');
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
