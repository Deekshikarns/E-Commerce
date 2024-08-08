CREATE DATABASE ecommerse;

USE ecommerse;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2020 at 11:00 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerse`
--

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE table signup
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    email VARCHAR(50),
    phone VARCHAR(20),
    age INT,
    gender ENUM('Male', 'Female', 'Other'),
    address VARCHAR(20),
    dob DATE,
    password VARCHAR(20)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO signup VALUES(1,'Ram','M','Ram2@gmail.com','9987932456',21,'Male','patna','2000-06-11','Ram@123'),
                        (2,'Sita','K','sita23@gmail.com','8989112234',22,'Female','Bihar','1999-01-03','Sita@345'),
                        (3,'Ravi','Y','Ravi33@gmail.com','9998811332',20,'Male','AP','2001-11-02','Ravi@678'),
                        (4,'Robert','S','Robert12@gmail.com','8889990810',23,'Male','Kerala','1998-12-07','Robert@123');


-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE table address
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    Name VARCHAR(50) NOT NULL,
    phone VARCHAR(20),
    email VARCHAR(50),
    address VARCHAR(20),
    add1 VARCHAR(20),
    City VARCHAR(30),
    State VARCHAR(20),
    pincode int
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;




