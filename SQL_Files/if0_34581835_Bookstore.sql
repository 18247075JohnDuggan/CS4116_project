-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql304.byetcluster.com
-- Generation Time: Aug 21, 2023 at 11:31 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_34581835_Bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `Author` varchar(255) DEFAULT NULL,
  `Author_id` int(255) DEFAULT NULL,
  `Book_Name` varchar(255) DEFAULT NULL,
  `Book_id` int(255) DEFAULT NULL,
  `Genre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`Author`, `Author_id`, `Book_Name`, `Book_id`, `Genre`) VALUES
('J.R.R. Tolkien', 1, 'Lord of the Rings - Fellowship of the ring', 1, 'fantasy'),
('J.R.R. Tolkien', 1, 'Lord of the Rings - The Two Towers', 2, 'Fantasy'),
('J.R.R. Tolkien', 1, 'Lord of the Rings - Return of the King', 3, 'Fantasy'),
('J.R.R. Tolkien', 1, 'The Hobbit', 4, 'Fantasy'),
('Philip Freeman', 2, 'Alexander the Great', 5, 'Biography'),
('George R.Martin', 3, 'Game of Thrones', 6, 'Fantasy'),
('Roddy Doyle', 4, 'The Second Half', 7, 'Biography'),
('J.R.R. Tolkien', 1, 'Lord of the Rings - The Two Towers', 2, 'Fantasy'),
('J.R.R. Tolkien', 1, 'Lord of the Rings - Return of the King', 3, 'Fantasy'),
('J.R.R. Tolkien', 1, 'The Hobbit', 4, 'Fantasy'),
('Philip Freeman', 2, 'Alexander the Great', 5, 'Biography'),
('George R.Martin', 3, 'Game of Thrones', 6, 'Fantasy'),
('Roddy Doyle', 4, 'The Second Half', 7, 'Biography'),
('Frieda McFadden', 5, 'The Inmate', 8, 'Crime'),
('Leslie Wolfe', 6, 'The Surgeon', 9, 'Crime'),
('Howard Stern', 7, 'The Crew', 10, 'Fantasy'),
('Gordon Ryan', 8, 'TOP GAME | DOMINATION IN THE JIU JITSU WORLD', 11, 'Sports Guide-Book'),
('Anthony Daly', 9, 'Dalo', 12, 'Biography'),
('Roddy Doyle', 4, 'The Second Half', 13, 'Biography'),
('Darcy Coates', 10, 'Hunted', 14, 'Thriller'),
('Adam Christopher', 11, 'Dishonoured', 15, 'Fantasy'),
('John Man', 12, 'Genghis Khan', 16, 'Biography'),
('Muhammad Alo', 13, 'The Greatest My own story', 17, 'Biography'),
('Hugh Glass', 14, 'The King Under The Mountain', 18, 'Fantasy'),
('John Browne', 15, 'The Nameless Knight', 19, 'Fantasy'),
('Kieran Smith', 16, 'He Never Died', 20, 'Fantasy'),
('Stan Lee', 21, 'Spider-man', 30, 'Comics');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `Book_id` int(255) NOT NULL,
  `Book_Name` varchar(255) DEFAULT NULL,
  `Genre` varchar(255) DEFAULT NULL,
  `Author` varchar(255) DEFAULT NULL,
  `Genre_id` int(255) DEFAULT NULL,
  `price` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`Book_id`, `Book_Name`, `Genre`, `Author`, `Genre_id`, `price`) VALUES
(1, 'Lord of the Rings - Fellowship of the ring', 'Fantasy', 'J.R.R. Tolkien', 1, 20),
(2, 'Lord of the Rings - The Two Towers', 'Fantasy', 'J.R.R. Tolkien', 1, 20),
(3, 'Lord of the Rings - Return of the King', 'Fantasy', 'J.R.R. Tolkien', 1, 20),
(4, 'The Hobbit', 'Fantasy', 'J.R.R. Tolkien', 1, 20),
(5, 'Alexander the Great', 'Biography', 'Philip Freeman', 2, 30),
(6, 'Game of Thrones', 'Fantasy', 'George R.Martin', 1, 20),
(7, 'The Second Half', 'Biography', 'Roddy Doyle', 2, 30),
(8, 'The Inmate', 'Crime', 'Freida McFadden', 3, 25),
(9, 'The Surgeon', 'Crime', 'Leslie Wolfe', 3, 25),
(10, 'The Crew', 'Fantasy', 'Howard Stern', 1, 20),
(11, 'TOP GAME | DOMINATION IN THE JIU JITSU WORLD', 'Sports Guide-Book', 'Gordon Ryan', 4, 15),
(12, 'Dalo', 'Biography', 'Anthony Daly', 2, 30),
(13, 'The Second Half', 'Biography', 'Roddy Doyle', 2, 30),
(14, 'Hunted', 'Thriller', 'Darcy Coates', 5, 35),
(15, 'Dishonoured', 'Fantasy', 'Adam Christopher', 1, 20),
(16, 'Genghis Khan', 'Biography', 'John Man', 2, 30),
(17, 'The Greatest: My own story', 'Biography', 'Muhammad Ali', 2, 30),
(18, 'The King Under The Mountain', 'Fantasy', 'Hugh Glass', 1, 20),
(19, 'The Nameless Knight', 'Fantasy', 'John Browne', 1, 20),
(20, 'He Never Died', 'Fantasy', 'Kieran Smith', 1, 20),
(30, 'Spider-Man', 'Comics', 'Stan Lee', 6, 15),
(30, 'Spider-Man', 'Comics', 'Stan Lee', 6, 15);

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `user_id` int(255) DEFAULT NULL,
  `Book_id` int(255) DEFAULT NULL,
  `Book_Name` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `price` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`user_id`, `Book_id`, `Book_Name`, `Email`, `price`) VALUES
(1, 4, 'The Hobbit', 'Dowe@gmail.com', 20),
(6, 5, 'Alexander the Great', 'JD@gmail.com', 20),
(6, 12, 'Dalo', 'JDe@gmail.com', 30),
(4, 18, 'The King Under The Mountain', 'NR@gmail.com', 20),
(10, 4, 'The Nameless Knight', 'Rmc@gmail.com', 20),
(15, 5, 'Dishonoured', 'CB@gmail.com', 20),
(9, 0, 'Harry Potter', 'hp@gmail.com', 20),
(9, 0, 'Harry Potter', 'hp@gmail.com', 20),
(6, 0, 'TOP GAME | DOMINATION IN THE JIU JITSU WORLD', 'JD@gmail.com', 30),
(6, 0, 'Lord of the Rings - Fellowship of the ring', 'JD@gmail.com', 20),
(6, 0, ' Lord of the Rings - The Two Towers', 'JD@gmail.com', 20),
(6, 0, 'Lord of the Rings - Return of the King', 'JD@gmail.com', 20),
(6, 4, 'The Hobbit ', 'JD@gmail.com', 20),
(3, 1, 'Lord of the Rings - Fellowship of the ring', 'Dowe@gmail.com', 20),
(3, 2, 'Lord of the Rings - The Two Towers', 'Dowe@gmail.com', 20),
(3, 3, 'Lord of the Rings - Return of the King', 'Dowe@gmail.com', 20),
(3, 4, 'The Hobbit', 'Dowe@gmail.com', 20),
(3, 25, 'bible', 'Dowe@gmail.com', 30),
(3, 0, 'TOP GAME | DOMINATION IN THE JIU JITSU WORLD', 'Dowe@gmail.com', 0),
(3, 0, 'TOP GAME | DOMINATION IN THE JIU JITSU WORLD', 'Dowe@gmail.com', 0),
(3, 0, 'TOP GAME | DOMINATION IN THE JIU JITSU WORLD', 'Dowe@gmail.com', 0),
(3, 0, 'TOP GAME | DOMINATION IN THE JIU JITSU WORLD', 'Dowe@gmail.com', 0),
(3, 0, 'TOP GAME | DOMINATION IN THE JIU JITSU WORLD', 'Dowe@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `catergories`
--

CREATE TABLE `catergories` (
  `Book_Name` varchar(255) DEFAULT NULL,
  `Book_id` int(255) DEFAULT NULL,
  `Genre` varchar(255) DEFAULT NULL,
  `Genre_id` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catergories`
--

INSERT INTO `catergories` (`Book_Name`, `Book_id`, `Genre`, `Genre_id`) VALUES
('Lord of the Rings - Fellowship of the ring', 1, 'Fantasy', 1),
('Lord of the Rings - The Two Towers', 2, 'Fantasy', 1),
('Lord of the Rings - Return of the King', 3, 'Fantasy', 1),
('The Hobbit', 4, 'Fantasy', 1),
('Alexander the Great', 5, 'Biography', 2),
('Game of Thrones', 6, 'Fantasy', 1),
('The Second Half', 7, 'Biography', 2),
('The Inmate', 8, 'Crime', 3),
('The Surgeon', 9, 'Crime', 3),
('The Crew', 10, 'Fantasy', 1),
('TOP GAME | DOMINATION IN THE JIU JITSU WORLD', 11, 'Sports Guide-Book', 4),
('Dalo', 12, 'Biography', 2),
('The Second Half', 13, 'Biography', 2),
('Hunted', 14, 'Thriller', 5),
('Dishonoured', 15, 'Fantasy', 1),
('Genghis Khan', 16, 'Biography', 2),
('The Greatest: My own story', 17, 'Biography', 2),
('The King Under The Mountain', 18, 'Fantasy', 1),
('The Nameless Knight', 19, 'Fantasy', 1),
('He Never Died', 20, 'Fantasy', 1),
('Spider-man', 21, 'Comics', 6);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `user_id` int(255) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Book_Name` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`user_id`, `Name`, `Book_Name`, `Email`, `password`) VALUES
(1, 'John Dowe', 'Lord of the Rings - Fellowship of the ring', 'Dowe@gmail.com', 'password1'),
(1, 'John Dowe', 'Lord of the Rings - The Two Towers', 'Dowe@gmail.com', 'password1'),
(1, 'John Dowe', 'Lord of the Rings - Return of the King', 'Dowe@gmail.com', 'password1'),
(2, 'Lisa Hancock', 'Alexander the Great', 'LH@gmail.com', 'password2'),
(3, 'Liam Clune', 'Hunted', 'Dowe@gmail.com', 'password3'),
(3, 'Liam Clune', 'Hunted', 'Dowe@gmail.com', 'password3'),
(3, 'Liam Clune', 'He Never Died', 'Dowe@gmail.com', 'password3'),
(3, 'Liam Clune', 'The Nameless Knight', 'Dowe@gmail.com', 'password3'),
(4, 'Noel Ryan', 'Genghis Khan', 'NR@gmail.com', 'password4'),
(5, 'Conor Bryne', 'The Inmate', 'CB@gmail.com', 'password5'),
(5, 'Conor Bryne', 'The Second Half', 'CB@gmail.com', 'password5'),
(5, 'Conor Bryne', 'The Surgeon', 'CB@gmail.com', 'password5'),
(5, 'Conor Bryne', 'The Crew ', 'CB@gmail.com', 'password5'),
(6, 'John Duggan', 'TOP GAME | DOMINATION IN THE JIU JITSU WORLD', 'JD@gmail.com', 'password6'),
(7, 'Hank Downes', 'The King Under The Mountain', 'HankD@gmail.com', 'password7'),
(8, 'Conor Cooney', 'Dishonoured', 'CC@gmail.com', 'password8'),
(9, 'Kevin Man', 'The Greatest my own story', 'Kman@gmail.com', 'password9'),
(10, 'Ryan McMahon', 'Dalo', 'Rmc@gmail.com', 'password10'),
(3, 'Liam Clune', 'The King Under The Mountain', 'Dowe@gmail.com', 'password3'),
(3, 'Liam Clune', 'TOP GAME | DOMINATION IN THE JIU JITSU WORLD', 'Dowe@gmail.com', 'password3'),
(3, 'Liam Clune', 'TOP GAME | DOMINATION IN THE JIU JITSU WORLD', 'Dowe@gmail.com', 'password3'),
(3, 'Liam Clune', 'Spider-man', 'Dowe@gmail.com', 'password3'),
(6, 'John Duggan', 'Spider-man', 'JD@gmail.com', 'password6');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
