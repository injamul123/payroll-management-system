-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2017 at 06:36 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `empid` int(11) NOT NULL,
  `pwd` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`empid`, `pwd`) VALUES
(789, 'ariful');

-- --------------------------------------------------------

--
-- Table structure for table `annualinc`
--

CREATE TABLE `annualinc` (
  `aincrement` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `annualinc`
--

INSERT INTO `annualinc` (`aincrement`) VALUES
(3);

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attid` varchar(30) NOT NULL,
  `Emp_id` varchar(30) NOT NULL,
  `EmpName` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attid`, `Emp_id`, `EmpName`, `date`, `time`) VALUES
('', '1', 'hari', '2017-11-13', '14:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `deduction`
--

CREATE TABLE `deduction` (
  `nps` double NOT NULL,
  `gis` int(11) NOT NULL,
  `ptax` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deduction`
--

INSERT INTO `deduction` (`nps`, `gis`, `ptax`) VALUES
(10, 300, 208);

-- --------------------------------------------------------

--
-- Table structure for table `deptinfo`
--

CREATE TABLE `deptinfo` (
  `deptname` varchar(50) NOT NULL,
  `deptadd` varchar(50) NOT NULL,
  `dcontact` varchar(50) NOT NULL,
  `demail` varchar(50) NOT NULL,
  `deptweb` varchar(50) NOT NULL,
  `temp` int(11) NOT NULL,
  `torg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deptinfo`
--

INSERT INTO `deptinfo` (`deptname`, `deptadd`, `dcontact`, `demail`, `deptweb`, `temp`, `torg`) VALUES
('Education', 'Maligaon', '12345', 'gg@gmail.com', 'ww.dd.com', 120, 80),
('IT', 'jalukbari', '123456', 'gg@gmail.com', 'ww.dd.com', 190, 20),
('Agriculture', 'Maligaon', '123456', 'gg@gmail.com', 'ww.dd.com', 150, 60),
('Health', 'Gauhati', '67647', 'dd@gmail.com', 'www.healt.com', 600, 200);

-- --------------------------------------------------------

--
-- Table structure for table `earning`
--

CREATE TABLE `earning` (
  `da` double NOT NULL,
  `hra` double NOT NULL,
  `ma` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `earning`
--

INSERT INTO `earning` (`da`, `hra`, `ma`) VALUES
(131, 10, 600);

-- --------------------------------------------------------

--
-- Table structure for table `empinfo`
--

CREATE TABLE `empinfo` (
  `Emp_id` int(11) NOT NULL,
  `EmpName` varchar(100) NOT NULL,
  `Designation` varchar(100) NOT NULL,
  `EmpGrade` varchar(50) NOT NULL,
  `DeptName` varchar(100) NOT NULL,
  `Doj` date NOT NULL,
  `Dob` date NOT NULL,
  `commadd` varchar(100) NOT NULL,
  `E_mail` varchar(200) NOT NULL,
  `emporg` varchar(100) NOT NULL,
  `basicpay` double NOT NULL,
  `dor` date NOT NULL,
  `empcaste` varchar(50) NOT NULL,
  `empphone` int(11) NOT NULL,
  `empage` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `pempadd` varchar(100) NOT NULL,
  `empstat` varchar(100) NOT NULL,
  `egradepay` varchar(100) NOT NULL,
  `pwd` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `empinfo`
--

INSERT INTO `empinfo` (`Emp_id`, `EmpName`, `Designation`, `EmpGrade`, `DeptName`, `Doj`, `Dob`, `commadd`, `E_mail`, `emporg`, `basicpay`, `dor`, `empcaste`, `empphone`, `empage`, `gender`, `mname`, `fname`, `pempadd`, `empstat`, `egradepay`, `pwd`) VALUES
(1, 'hari', 'teacher', 'GradeA', 'Education', '2017-08-08', '2017-08-06', 'nalbari', 'nalbari@gmail.com', 'A1', 12000, '2017-08-07', 'Gen', 2147483647, '30', 'Male', 'anita', 'anish', 'ghy', 'single', '4900', ''),
(2, 'kausik', 'clerk', 'GradeA', 'Education', '2017-08-09', '2017-08-06', 'maligaon', 'ghy@gmail.com', 'A1', 12000, '2017-08-06', 'Gen', 2147483647, '34', 'Male', 'jaya', 'hari', 'ghy', 'single', '4900', ''),
(3, 'Ariful', 'professor', 'GradeB', 'Education', '2017-08-15', '2017-08-06', 'maligaon', 'ghy@gmail.com', 'A1', 8000, '2017-08-14', 'Gen', 2147483647, '30', 'Male', 'jaya', 'hari', 'ghy', 'single', '5100', ''),
(4, 'Sarkar', 'clerk', 'GradeB', 'Education', '2017-08-08', '2017-08-14', 'nalbari', 'nalbari@gmail.com', 'A1', 8000, '2017-08-07', 'Gen', 2147483647, '30', 'Male', 'jaya', 'rerddy', 'ghy', 'single', '5100', ''),
(5, 'Ahmed', 'teacher', 'GradeC', 'Education', '2017-08-08', '2017-08-07', 'Adabari', 'nalbari@gmail.com', 'A1', 5200, '2017-08-15', 'Gen', 2147483647, '30', 'Male', 'jaya', 'rerddy', 'ghy', 'single', '3300', ''),
(6, 'Reddy', 'clerk', 'GradeC', 'Education', '2017-08-15', '2017-08-06', 'maligaon', 'nalbari@gmail.com', 'A1', 5200, '2017-08-07', 'Gen', 2147483647, '30', 'Male', 'jaya', 'gtrffg', 'ghy', 'single', '3300', ''),
(7, 'pulak', 'clerk', 'GradeD', 'Education', '2017-08-08', '2017-08-06', 'maligaon', 'nalbari@gmail.com', 'A1', 4560, '2017-08-14', 'Gen', 67658898, '34', 'Male', 'jaya', 'rerddy', 'ghy', 'single', '1500', ''),
(8, 'Anjali', 'chowkidar', 'GradeD', 'Education', '2017-08-08', '2017-08-07', 'nalbari', 'ghy@gmail.com', 'A1', 4560, '2017-08-15', 'Gen', 2147483647, '30', 'Female', 'jaya', 'rerddy', 'ghy', 'single', '1500', ''),
(9, 'injamul', 'programmer', 'GradeA', 'Education', '2017-08-09', '2017-08-15', 'gandhibasti', 'nalbari@gmail.com', 'A2', 12000, '2017-08-16', 'Gen', 8766433, '24', 'Male', 'anowara', 'nur hussain ali', 'kendukona', 'single', '4900', ''),
(10, 'rajib', 'officer', 'GradeA', 'Education', '2017-08-16', '2002-12-30', 'morigaon', 'gth@gmail.com', 'A2', 12000, '2017-08-09', 'ST(P)', 67543, '56', 'Male', 'anjali', 'hemanta', 'nalbari', 'married', '4900', ''),
(11, 'rejaul', 'teacher', 'GradeB', 'Education', '2017-08-16', '2017-08-01', 'nalbari', 'nalbari@gmail.com', 'A2', 8000, '2017-08-07', 'Gen', 2147483647, '30', 'Male', 'jaya', 'rerddy', 'ghy', 'single', '5100', ''),
(12, 'kamal', 'clerk', 'GradeB', 'Education', '2017-08-16', '2017-08-15', 'morigaon', 'ha@gmail.com', 'A2', 8000, '2017-08-22', 'OBC', 5678855, '56', 'Male', 'anita', 'anish', 'nalbari', 'married', '5100', ''),
(13, 'hirak', 'teacher', 'GradeC', 'Education', '2017-08-08', '2017-08-16', 'gandhibasti', 'gth@gmail.com', 'A2', 5200, '2017-08-30', 'OBC', 5678855, '34', 'Male', 'vvbg', 'hari', 'jorhat', 'single', '3300', ''),
(14, 'Sarkar', 'clerk', 'GradeC', 'Education', '2017-08-23', '2017-08-16', 'rangia', 'ghy@gmail.com', 'A2', 5200, '2017-08-08', 'GEN', 3467853, '35', 'Male', 'reema', 'hirak', 'nalbari', 'single', '3300', ''),
(15, 'gitali', 'chaukidar', 'GradeD', 'Education', '2017-08-09', '2017-08-08', 'diphu', 'ghyr@gmail.com', 'A2', 4560, '2017-08-16', 'ST(P)', 7865, '35', 'Female', 'dffg', 'rerdd', 'jorhat', 'married', '1500', ''),
(16, 'kulen', 'teacher', 'GradeD', 'Education', '2017-08-16', '2017-08-16', 'Adabari', 'ghyr@gmail.com', 'A2', 4560, '2017-08-17', 'OBC', 5678855, '35', 'Male', 'vvbg', 'anish', 'nalbari', 'married', '1500', ''),
(17, 'hari', 'teacher', 'GradeA', 'Education', '2017-08-29', '2017-08-21', 'maligaon', 'ghy@gmail.com', 'A3', 12000, '2017-08-08', 'Gen', 5678855, '30', 'Male', 'jaya', 'rerddy', 'ghy', 'single', '4900', ''),
(18, 'Sarkar', 'clerk', 'GradeA', 'Education', '2017-08-15', '2017-08-06', 'maligaon', 'nalbari@gmail.com', 'A3', 12000, '2017-08-08', 'ST(P)', 2147483647, '34', 'Male', 'jaya', 'rerddy', 'nalbari', 'single', '4900', ''),
(19, 'Ariful', 'programmer', 'GradeB', 'Education', '2017-08-15', '2017-08-08', 'maligaon', 'ghy@gmail.com', 'A3', 8000, '2017-08-08', 'Gen', 2147483647, '34', 'Male', 'jaya', 'rerddy', 'ghy', 'married', '5100', ''),
(20, 'Malabika', 'programmer', 'GradeB', 'Education', '2012-06-12', '1983-04-01', 'Guwahati', 'malabika@gmail.com', 'A3', 8000, '2034-07-13', 'OBC', 2147483647, '34', 'Female', 'Sakuntala', 'Akon', 'jorhat', 'Married', '5100', ''),
(21, 'kausik', 'teacher', 'GradeC', 'Education', '2017-08-09', '2017-08-08', 'Adabari', 'gth@gmail.com', 'A3', 5200, '2017-08-08', 'Gen', 5678855, '30', 'Male', 'jaya', 'anish', 'ghy', 'single', '3300', ''),
(22, 'narendra', 'chowkidar', 'GradeC', 'Education', '2017-08-22', '2017-08-21', 'Adabari', 'ghy@gmail.com', 'A3', 5200, '2017-08-15', 'Gen', 5678855, '34', 'Male', 'jaya', 'wdafeh', 'ghy', 'single', '3300', ''),
(23, 'himanta', 'chowkidar', 'GradeD', 'Education', '2017-08-08', '2017-08-07', 'nalbari', 'ghy@gmail.com', 'A3', 4560, '2017-08-07', 'Gen', 8766433, '56', 'Male', 'dffg', 'gtrffg', 'nalbari', 'married', '1500', ''),
(24, 'Reddy', 'clerk', 'GradeD', 'Education', '2017-08-14', '2017-08-07', 'nalbari', 'ghy@gmail.com', 'A3', 4560, '2017-08-08', 'Gen', 5776345, '30', 'Male', 'vvbg', 'rerddy', 'ghy', 'single', '1500', ''),
(25, 'jayanta', 'officer', 'GradeA', 'Agriculture', '2017-08-16', '2017-08-23', 'sadiya', 'ggfghtt@gmail.com', 'B1', 12000, '2021-06-17', 'GEN', 8766433, '35', 'Male', 'reema', 'biplab', 'jorhat', 'married', '4000', ''),
(26, 'rakesh', 'officer', 'GradeA', 'Agriculture', '2017-08-23', '2017-08-16', 'hajo', 'ha@gmail.com', 'B1', 12000, '2030-07-18', 'GEN', 76567363, '34', 'Male', 'barnali', 'bikash', 'dhubri', 'single', '4000', ''),
(27, 'priyanka', 'programmer', 'GradeB', 'Agriculture', '2017-08-16', '1980-08-08', 'nagaon', 'ghyr@gmail.com', 'B1', 8000, '2026-07-09', 'OBC', 2147483647, '30', 'Female', 'jonaki', 'hiren', 'baska', 'single', '3300', ''),
(28, 'pallabi', 'Assistant', 'GradeB', 'Agriculture', '2008-02-05', '1978-06-07', 'mangaldai', 'jgtr@rediffmail.com', 'B1', 8000, '2032-06-08', 'ST(P)', 2147483647, '35', 'Female', 'Jonaki', 'mridu;', 'barpeta', 'married', '3300', ''),
(29, 'rabiul', 'clerk', 'GradeC', 'Agriculture', '2008-08-08', '1985-06-04', 'tezpur', 'rabi@yahoo.com', 'B1', 5200, '2037-02-02', 'Gen', 2147483647, '31', 'Male', 'mina', 'mohibul', 'nalbari', 'single', '3000', ''),
(30, 'basumatary', 'clerk', 'GradeC', 'Agriculture', '2011-02-01', '1989-01-11', 'kokrazhar', 'mrigen54@gmail.com', 'B1', 5200, '2029-05-13', 'ST(P)', 2147483647, '30', 'Male', 'Binapani', 'nabin', 'kokrazhar', 'married', '3000', ''),
(31, 'prahlad', 'Typist', 'GradeD', 'Agriculture', '2014-01-06', '1989-12-31', 'Chirang', 'prahlad123@gmail.com', 'B1', 4560, '2028-05-07', 'ST(H)', 2147483647, '30', 'Male', 'Bibha', 'kripan', 'udalguri', 'married', '2000', ''),
(32, 'daisy', 'LDA', 'GradeD', 'Agriculture', '2009-01-05', '1984-05-13', 'Guwahati', 'daisy@gmail.com', 'B1', 4560, '2032-05-10', 'OBC', 2147483647, '33', 'Female', 'tarali', 'Anirban', 'nalbari', 'married', '2000', ''),
(33, 'jogesh', 'officer', 'GradeA', 'Agriculture', '2005-01-02', '1982-01-04', 'sibsagar', 'ghyr@gmail.com', 'B2', 12000, '2035-09-17', 'GEN', 2147483647, '35', 'Male', 'Dipshikha', 'Satya', 'rangiya', 'married', '4000', ''),
(34, 'Dipali', 'officer', 'GradeA', 'Agriculture', '2010-01-04', '1986-05-11', 'maligaon', 'ghyr@gmail.com', 'B2', 12000, '2035-01-01', 'OBC', 2147483647, '31', 'Female', 'renuka', 'anish', 'Tezpur', 'single', '4000', ''),
(35, 'kanak', 'clerk', 'GradeB', 'Agriculture', '2003-04-04', '1995-01-02', 'hajo', 'haty234@rediffmail.com', 'B2', 8000, '2035-05-06', 'OBC', 2147483647, '22', 'Male', 'jaya', 'Mrinal', 'dhubri', 'single', '3300', ''),
(36, 'kausik', 'Clerk', 'GradeB', 'Agriculture', '2017-01-04', '1996-01-08', 'Adabari', 'ghyr@gmail.com', 'B2', 8000, '2036-09-21', 'GEN', 2147483647, '21', 'Male', 'Dipali', 'Prasanna', 'ghy', 'single', '3300', ''),
(37, 'tafiqul', 'Assistant', 'GradeC', 'Agriculture', '2017-08-08', '1992-02-03', 'Darrang', 'tafiq@gmail.com', 'B2', 5200, '2034-09-17', 'OBC', 2147483647, '25', 'Male', 'saleha', 'monowar', 'garigaon', 'single', '3000', ''),
(38, 'hemanta', 'clerk', 'GradeC', 'Agriculture', '2007-01-02', '1985-05-06', 'gowalpara', 'gth@gmail.com', 'B2', 5200, '2037-05-10', 'ST(P)', 2147483647, '32', 'Male', 'mornali', 'mahanta', 'nalbari', 'married', '3000', ''),
(39, 'beauty', 'Assistant', 'GradeD', 'Agriculture', '2017-08-15', '1991-05-06', 'maligaon', 'ggfghtt@gmail.com', 'B2', 4560, '2027-01-04', 'ST(P)', 2147483647, '24', 'Female', 'anita', 'hari', 'jorhat', 'single', '2000', ''),
(40, 'Sarkar', 'LDA', 'GradeD', 'Agriculture', '2017-08-08', '1999-01-03', 'gandhibasti', 'ha@gmail.com', 'B2', 4560, '2040-08-09', 'Gen', 5776345, '19', 'Male', 'reema', 'kanak', 'nalbari', 'single', '2000', ''),
(41, 'Reddy', 'officer', 'GradeA', 'Agriculture', '2015-01-05', '1983-05-16', 'morigaon', 'rdty321@gmail.com', 'B3', 12000, '2029-09-16', 'Gen', 2147483647, '34', 'Male', 'pramila', 'kumud', 'nalbari', 'married', '4000', ''),
(42, 'pramila', 'officer', 'GradeA', 'Agriculture', '2014-01-06', '1982-05-09', 'morigaon', 'ha@gmail.com', 'B3', 12000, '2032-09-02', 'Gen', 2147483647, '34', 'Female', 'anita', 'jiban', 'nalbari', 'married', '4000', ''),
(43, 'kumud', 'clerk', 'GradeB', 'Agriculture', '2017-08-09', '1994-01-31', 'hajo', 'gth@gmail.com', 'B3', 8000, '2026-06-16', 'OBC', 765544433, '24', 'Male', 'nirmali', 'anish', 'nalbari', 'single', '3300', ''),
(44, 'namita', 'clerk', 'GradeB', 'Agriculture', '2013-01-06', '1984-05-13', 'Dhubri', 'namit@gmail.com', 'B3', 8000, '2027-09-20', 'ST(H)', 2147483647, '33', 'Female', 'kabita', 'manoj', 'jorhat', 'married', '3300', ''),
(45, 'manoj', 'LDA', 'GradeC', 'Agriculture', '2011-02-01', '1989-05-15', 'Barpeta', 'ghyr@gmail.com', 'B3', 5200, '2030-09-22', 'ST(H)', 2147483647, '28', 'Male', 'jaya', 'kanak', 'nalbari', 'married', '3000', ''),
(46, 'miraz', 'Assistant', 'GradeC', 'Agriculture', '2012-06-05', '1985-05-05', 'bijoynagar', 'ggfghtt@gmail.com', 'B3', 5200, '2025-09-22', 'OBC', 2147483647, '31', 'Male', 'jerina', 'rajiul', 'nalbari', 'married', '3000', ''),
(47, 'karabi', 'clerk', 'GradeD', 'Agriculture', '2003-07-30', '1991-01-06', 'Adabari', 'ghy@gmail.com', 'B3', 4560, '2034-12-31', 'Gen', 765432190, '26', 'Female', 'papari', 'pritam', 'ghy', 'married', '2000', ''),
(48, 'bikash', 'Assistant', 'GradeD', 'Agriculture', '1987-01-05', '0000-00-00', 'morigaon', 'gth@gmail.com', 'B3', 4560, '2030-09-23', 'ST(H)', 2147483647, '30', 'Male', 'jaya', 'rerddy', 'dhubri', 'married', '2000', ''),
(49, 'hitesh', 'officer', 'GradeA', 'Health', '2017-08-16', '1984-12-30', 'morigaon', 'ha@gmail.com', 'C1', 12000, '2031-09-21', 'Gen', 2147483647, '33', 'Male', 'kanika', 'pranjal', 'ghy', 'married', '4900', ''),
(50, 'bhargav', 'officer', 'GradeA', 'Health', '2013-02-09', '1988-05-15', 'Guwahati', 'ggfghtt@gmail.com', 'C1', 12000, '2028-06-13', 'Gen', 2147483647, '29', 'Male', 'kamala', 'jeetpal', 'dhubri', 'single', '4900', ''),
(51, 'alakesh', 'clerk', 'GradeB', 'Health', '2017-08-10', '1992-05-04', 'hajo', 'ghyr@gmail.com', 'C1', 8000, '2036-05-04', 'OBC', 776554688, '24', 'Male', 'anita', 'anish', 'jorhat', 'single', '3300', ''),
(52, 'pulak', 'clerk', 'GradeB', 'Health', '2016-06-14', '1995-08-18', 'maligaon', 'nalbari@gmail.com', 'C1', 8000, '2029-09-17', 'OBC', 2147483647, '21', 'Male', 'Dipali', 'Dipak', 'nalbari', 'single', '3300', ''),
(53, 'kulen', 'Assistant', 'GradeC', 'Health', '2014-04-11', '1986-07-16', 'Guwahati', 'ghy@gmail.com', 'C1', 5200, '2024-11-20', 'Gen', 2147483647, '30', 'Male', 'Binapani', 'hari', 'nalbari', 'married', '2000', ''),
(54, 'Dipankar', 'clerk', 'GradeC', 'Health', '2012-12-21', '1984-07-19', 'maligaon', 'dip123@rediffmail.com', 'C1', 5200, '2030-10-21', 'OBC', 2147483647, '33', 'Male', 'sabita', 'rakesh', 'ghy', 'married', '2000', ''),
(55, 'Champak', 'Computer', 'GradeD', 'Health', '2017-08-10', '1988-05-08', 'nalbari', 'nalbari@gmail.com', 'C1', 4560, '2035-06-12', 'Gen', 2147483647, '29', 'Male', 'Rimli', 'jayanta', 'nalbari', 'single', '1500', ''),
(56, 'mizanur', 'Assistant', 'GradeD', 'Health', '1998-12-03', '1977-11-24', 'Tezpur', 'ghy@gmail.com', 'C1', 4560, '2025-07-10', 'ST(P)', 67658898, '40', 'Male', 'Nina', 'Girish', 'Dibrugarh', 'married', '1500', ''),
(57, 'Sabnam', 'officer', 'GradeA', 'Health', '2017-07-13', '1983-11-24', 'nagaon', 'gth@gmail.com', 'C2', 12000, '2029-01-01', 'Gen', 2147483647, '33', 'Female', 'jaya', 'Hamid', 'nalbari', 'married', '4900', ''),
(58, 'Mrinmoy', 'officer', 'GradeA', 'Health', '2013-01-29', '1991-07-10', 'hajo', 'ghyr@gmail.com', 'C2', 12000, '2028-10-24', 'ST(P)', 2147483647, '26', 'Male', 'prathana', 'sachin', 'nalbari', 'married', '4900', ''),
(59, 'Dilruba', 'clerk', 'GradeB', 'Health', '1979-10-23', '0000-00-00', 'nalbari', 'ha@gmail.com', 'C2', 8000, '2028-10-25', 'GEN', 2147483647, '38', 'Female', 'Anowara', 'Nazrul', 'ghy', 'married', '3300', ''),
(60, 'Dipjyoti', 'clerk', 'GradeB', 'Health', '2017-02-15', '1987-09-28', 'Khanapara', 'ha@gmail.com', 'C2', 8000, '0000-00-00', 'Gen', 2147483647, '30', 'Male', 'anita', 'anish', 'dhubri', 'single', '3300', ''),
(61, 'khanin', 'LDA', 'GradeC', 'Health', '2017-08-23', '1982-02-01', 'morigaon', 'ghyr@gmail.com', 'C2', 5200, '2029-09-17', 'OBC', 2147483647, '35', 'Male', 'anita', 'rerddy', 'baska', 'married', '2000', ''),
(62, 'Ariful', 'Assistant', 'GradeC', 'Health', '2017-08-16', '1988-06-08', 'nalbari', 'ghy@gmail.com', 'C2', 5200, '2033-06-14', 'Gen', 67658898, '28', 'Male', 'reema', 'hari', 'dhubri', 'married', '2000', ''),
(63, 'Dipshikha', 'clerk', 'GradeD', 'Health', '2013-02-05', '1984-01-30', 'hajo', 'dip4532@gmail.com', 'C2', 4560, '2028-09-18', 'OBC', 7865432, '30', 'Female', 'lavi', 'anish', 'jorhat', 'married', '1500', ''),
(64, 'Reddy', 'programmer', 'GradeD', 'Health', '2017-08-24', '1981-10-19', 'Nagarbera', 'ha@gmail.com', 'C2', 4560, '2024-05-13', 'Gen', 577634589, '35', 'Male', 'reema', 'wdafeh', 'kendukona', 'married', '1500', ''),
(65, 'sajib', 'officer', 'GradeA', 'Health', '2016-06-15', '1988-07-13', 'gandhibasti', 'ghyr@gmail.com', 'C3', 12000, '2022-11-23', 'GEN', 2147483647, '30', 'Male', 'dffg', 'manash', 'dhubri', 'married', '4900', ''),
(66, 'Manash', 'officer', 'GradeA', 'Health', '2014-01-29', '1984-10-23', 'Adabari', 'gth@gmail.com', 'C3', 12000, '2028-06-13', 'GEN', 8766433, '34', 'Male', 'mina', 'ritam', 'dhubri', 'married', '4900', ''),
(67, 'Prakash', 'clerk', 'GradeB', 'Health', '2017-08-15', '1992-06-16', 'Adabari', 'ghyr@gmail.com', 'C3', 8000, '2025-07-16', 'ST(H)', 577634589, '24', 'Male', 'reema', 'gtrffg', 'ghy', 'single', '3300', ''),
(68, 'Parag', 'clerk', 'GradeB', 'Health', '2017-08-17', '2000-02-01', 'maligaon', 'ha@gmail.com', 'C3', 8000, '2024-06-18', 'ST(P)', 2147483647, '24', 'Male', 'vvbg', 'anish', 'nalbari', 'single', '3300', ''),
(69, 'Paresh', 'clerk', 'GradeC', 'Health', '2014-06-24', '1975-10-21', 'morigaon', 'ghyr@gmail.com', 'C3', 5200, '2019-11-27', 'Gen', 2147483647, '40', 'Male', 'reema', 'anish', 'nalbari', 'married', '2000', ''),
(70, 'Gagan', 'LDA', 'GradeC', 'Health', '2017-08-15', '1989-02-06', 'noonmati', 'nalbari@gmail.com', 'C3', 5200, '2025-06-17', 'Gen', 2147483647, '28', 'Male', 'vvbg', 'rerdd', 'jorhat', 'married', '2000', ''),
(71, 'gitali', 'Assistant', 'GradeD', 'Health', '2017-08-09', '1988-10-19', 'nalbari', 'ha@gmail.com', 'C3', 4560, '2036-02-05', 'OBC', 6754321, '28', 'Male', 'mina', 'hari', 'jorhat', 'married', '1500', ''),
(72, 'hari', 'Assistant', 'GradeD', 'Health', '2012-06-12', '1990-09-21', 'gandhibasti', 'ha@gmail.com', 'C3', 4560, '2030-10-22', 'GEN', 2147483647, '30', 'Male', 'anita', 'anish', 'ghy', 'single', '1500', ''),
(73, 'Harjyoti Deka', 'IT Officer', 'GradeA', 'IT', '2011-07-21', '1982-04-02', 'Goalpara', 'harjoti956.8@gmail.com', 'D1', 12000, '2028-12-29', 'GEN', 2147483647, '35', 'Male', 'Pinaki Deka', 'Ratan Deka', 'Guwahati', 'Married', '5000', ''),
(74, 'Partha Pratim ', 'Manager', 'GradeA', 'IT', '2010-04-02', '1985-08-17', 'Golaghat', 'gjf674@gmail.com', 'D1', 12000, '2035-10-23', 'OBC', 2147483647, '', 'Male', 'Manalisha', 'Manash', 'ghy', 'single', '5000', ''),
(75, 'Prosenjit', 'System Analyst', 'GradeB', 'IT', '2013-03-07', '1989-07-13', 'Guwahati', 'prosenjit90@rediffmail.com', 'D1', 8000, '2033-12-31', 'ST(H)', 2147483647, '28', 'Male', 'karabi', 'anish', 'nalbari', 'single', '3300', ''),
(76, 'Minakshi', 'Programmer', 'GradeB', 'IT', '2014-07-14', '1988-07-14', 'Adabari', 'minakshi@gmail.com', 'D1', 8000, '2032-07-15', 'Gen', 2147483647, '29', 'Female', 'Runima', 'Pramod', 'dhubri', 'married', '3300', ''),
(77, 'Riya', 'Assistant', 'GradeC', 'IT', '2015-12-25', '1992-10-19', 'nalbari', 'ghyr@gmail.com', 'D1', 5200, '2034-09-17', 'Gen', 2147483647, '25', 'Female', 'Reema', 'Amarjyoti', 'baska', 'single', '4900', ''),
(78, 'Rahul', 'Assistant', 'GradeC', 'IT', '2012-06-18', '1993-01-04', 'Tezpur', 'gth@gmail.com', 'D1', 5200, '2035-05-13', 'Gen', 2147483647, '24', 'Male', 'anita', 'anish', 'kendukona', 'single', '4900', ''),
(79, 'Simanta', 'clerk', 'GradeD', 'IT', '2015-06-09', '1991-04-12', 'udalguri', 'ghy@gmail.com', 'D1', 4560, '2026-06-10', 'ST(P)', 67658898, '24', 'Male', 'anita', 'pratul', 'Dhemaji', 'single', '2000', ''),
(80, 'Indrajit', 'clerk', 'GradeD', 'IT', '2012-04-12', '1993-03-11', 'haflong', 'gth@gmail.com', 'D1', 4560, '2028-05-15', 'ST(P)', 2147483647, '24', 'Male', 'Bhumika', 'Bhupen', 'nalbari', 'married', '2000', ''),
(81, 'Neelutpal', 'Information Officer', 'GradeA', 'IT', '2013-12-31', '1978-07-05', 'Guwahati', 'ghyr@gmail.com', 'D2', 12000, '2029-11-29', 'OBC', 2147483647, '39', 'Male', 'Tarulata', 'Nabajyoti', 'Guwahati', 'married', '5000', ''),
(82, 'Jagadish', 'ITO', 'GradeA', 'IT', '2014-08-14', '1984-07-19', 'Barpeta', 'ghyr@gmail.com', 'D2', 12000, '2031-11-27', 'Gen', 2147483647, '32', 'Male', 'kabita', 'hari', 'nalbari', 'single', '5000', ''),
(83, 'Nabajyoti', 'programmer', 'GradeB', 'IT', '2015-08-13', '1990-07-19', 'morigaon', 'nalbari@gmail.com', 'D2', 8000, '2040-11-14', 'GEN', 2147483647, '27', 'Male', 'jaya', 'malakar', 'jorhat', 'married', '3300', ''),
(84, 'Tarulata', 'Assistant', 'GradeB', 'IT', '2010-07-15', '1985-07-18', 'maligaon', 'ghyr@gmail.com', 'D2', 8000, '2038-11-25', 'OBC', 2147483647, '32', 'Female', 'mina', 'Jyotirmoi', 'dhubri', 'Married', '3300', ''),
(85, 'Sibani', 'Assistant', 'GradeC', 'IT', '2015-08-18', '1989-08-09', 'morigaon', 'ghy@gmail.com', 'D2', 5200, '2037-07-16', 'ST(P)', 2147483647, '27', 'Female', 'reema', 'anish', 'nalbari', 'single', '4900', ''),
(86, 'Apurba', 'programmer', 'GradeC', 'IT', '2010-07-15', '1979-03-07', 'hajo', 'ha@gmail.com', 'D2', 5200, '2029-03-08', 'GEN', 2147483647, '38', 'Male', 'Dipali', 'Hemanta', 'nalbari', 'Married', '4900', ''),
(87, 'Bhupali', 'Assistant', 'GradeD', 'IT', '2012-07-17', '1991-11-12', 'Guwahati', 'bhupali98@rediffmail.com', 'D2', 4560, '2035-07-18', 'GEN', 2147483647, '26', 'Female', 'Manalisha', 'Nayan', 'ghy', 'married', '2000', ''),
(88, 'Manabendra', 'LDA', 'GradeD', 'IT', '2015-07-16', '1992-06-16', 'nalbari', 'gth@gmail.com', 'D2', 4560, '2035-01-30', 'OBC', 2147483647, '25', 'Male', 'reema', 'Sanjib', 'jorhat', 'single', '2000', ''),
(89, 'Sanjib', 'Technology Officer', 'GradeA', 'IT', '2013-12-23', '1983-06-21', 'morigaon', 'nalbari@gmail.com', 'D3', 12000, '2027-02-02', 'ST(H)', 2147483647, '33', 'Male', 'reema', 'Bedanta', 'jorhat', 'Married', '5000', ''),
(90, 'Mriganka', 'Officer', 'GradeA', 'IT', '2013-10-29', '1982-07-15', 'Adabari', 'nalbari@gmail.com', 'D3', 12000, '2028-10-31', 'Gen', 2147483647, '35', 'Male', 'mina', 'Madhuryo', 'jorhat', 'Married', '5000', ''),
(91, 'Jaminul', 'programmer', 'GradeB', 'IT', '2011-11-24', '1989-06-20', 'mangaldoi', 'gth@gmail.com', 'D3', 8000, '2031-11-19', 'GEN', 2147483647, '28', 'Male', 'Dilwara', 'Saiful', 'dhubri', 'Married', '3300', ''),
(92, 'Anamika', 'System Analyst', 'GradeB', 'IT', '2014-11-26', '1990-06-12', 'gandhibasti', 'ha@gmail.com', 'D3', 8000, '2029-09-16', 'Gen', 2147483647, '27', 'Female', 'jaya', 'anish', 'nalbari', 'Married', '3300', ''),
(93, 'Aminul', 'programmer', 'GradeC', 'IT', '2016-03-09', '1988-02-10', 'Sibasagar', 'ghyr@gmail.com', 'D3', 5200, '2034-10-24', 'OBC', 2147483647, '28', 'Male', 'Rezia', 'Rasidul', 'nalbari', 'single', '4900', ''),
(94, 'Arindom', 'programmer', 'GradeC', 'IT', '2012-11-22', '1987-06-16', 'Lakhimpur', 'ha@gmail.com', 'D3', 5200, '2038-08-20', 'OBC', 2147483647, '30', 'Male', 'Babita', 'Nareshwar', 'ghy', 'Married', '4900', ''),
(95, 'P Narzary ', 'LDA', 'GradeD', 'IT', '2014-08-15', '1985-11-27', 'maligaon', 'ghy@gmail.com', 'D3', 4560, '2029-06-19', 'ST(H)', 2147483647, '31', 'Male', 'anjali', 'chamlin', 'dhubri', 'single', '2000', ''),
(96, 'injamul', 'programmer', 'GradeD', 'IT', '2017-09-04', '2017-09-03', 'maligaon', 'wwj@gmail.com', 'D3', 4560, '2017-09-04', 'gen', 12345, '12', 'male', 'ere', 'srtr', 'sts', 'rtr', '2000', '81dc9bdb52d04dc20036dbd8313ed055'),
(110, 'rahul', 'software engineer', 'GradeA', 'IT', '2016-06-05', '2002-01-02', '', 'injamul@gmail.com', 'D1', 12000, '2017-11-30', '', 0, '18', 'male', '', '', '', '', '5000', '202cb962ac59075b964b07152d234b70'),
(111, 'aa', 'aaa', 'GradeA', 'Agriculture', '2017-12-12', '2017-12-06', '', 'inj@gmail.com', 'dd', 12000, '2017-12-13', 'dd', 33, '12', 'male', 'ee', 'ee', 'ee', 'eee', '4000', '123'),
(120, 'fggf', 'xx', 'GradeA', 'Agriculture', '2017-11-06', '2017-11-15', '', 'IJNH', 'ASA', 12000, '2017-11-21', '', 0, '', 'male', '', '122', '', '', '4000', 'd41d8cd98f00b204e9800998ecf8427e'),
(149, 'ff', 'fr', 'GradeA', 'Education', '2017-12-13', '2017-12-06', '', 'inj@gmail.com', 'hh', 12000, '2017-12-21', 'hh', 6765443, '34', 'male', 'fgf', 'ght', 'hy', 'ttt', '4900', 'sdc'),
(153, 'dfg', 'eee', 'GradeA', 'Agriculture', '2017-12-13', '2017-12-15', '', 'inj@gmail.com', 'wew', 12000, '2017-12-13', 'dd', 233, '22', 'male', 'dsasdd', 'xxx', 'dss', 'ewqe', '4000', 'pass'),
(180, '', 'ww', 'GradeA', 'Education', '2017-11-07', '0000-00-00', '', '', '', 12000, '0000-00-00', '', 0, '', 'male', '', '', '', '', '4900', 'd41d8cd98f00b204e9800998ecf8427e'),
(189, 'dw', 'dsas', 'GradeA', 'Agriculture', '2017-11-13', '2017-11-07', '', 'as', '', 12000, '2017-11-12', '', 0, '', 'male', '', '', '', '', '4000', 'd41d8cd98f00b204e9800998ecf8427e');

-- --------------------------------------------------------

--
-- Table structure for table `emplogin`
--

CREATE TABLE `emplogin` (
  `empid` int(11) NOT NULL,
  `pwd` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emplogin`
--

INSERT INTO `emplogin` (`empid`, `pwd`) VALUES
(12, 'inj');

-- --------------------------------------------------------

--
-- Table structure for table `login_tbl`
--

CREATE TABLE `login_tbl` (
  `uname` varchar(200) NOT NULL,
  `pword` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lve`
--

CREATE TABLE `lve` (
  `leaveid` varchar(30) NOT NULL,
  `Emp_id` varchar(30) NOT NULL,
  `EmpName` varchar(30) NOT NULL,
  `DeptName` varchar(30) NOT NULL,
  `Leavetype` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `noleave` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lve`
--

INSERT INTO `lve` (`leaveid`, `Emp_id`, `EmpName`, `DeptName`, `Leavetype`, `date`, `noleave`) VALUES
('', '1', 'hari', 'Agriculture', 'casual leave', '2017-10-10', 3);

-- --------------------------------------------------------

--
-- Table structure for table `payscale`
--

CREATE TABLE `payscale` (
  `startbasic` double NOT NULL,
  `endbasic` double NOT NULL,
  `gradepay` double NOT NULL,
  `deptname` varchar(100) NOT NULL,
  `empgrade` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payscale`
--

INSERT INTO `payscale` (`startbasic`, `endbasic`, `gradepay`, `deptname`, `empgrade`) VALUES
(12000, 40000, 4900, 'Education', 'GradeA'),
(8000, 35000, 5100, 'Education', 'GradeB'),
(5200, 20200, 3300, 'Education', 'GradeC'),
(4560, 15000, 1500, 'Education', 'GradeD'),
(12000, 40000, 5000, 'IT', 'GradeA'),
(8000, 35000, 3300, 'IT', 'GradeB'),
(5200, 20200, 4900, 'IT', 'GradeC'),
(4560, 15000, 2000, 'IT', 'GradeD'),
(12000, 40000, 4000, 'Agriculture', 'GradeA'),
(8000, 35000, 3300, 'Agriculture', 'GradeB'),
(5200, 20200, 3000, 'Agriculture', 'GradeC'),
(4560, 15000, 2000, 'Agriculture', 'GradeD'),
(12000, 40000, 4900, 'Health', 'GradeA'),
(8000, 35000, 3300, 'Health', 'GradeB'),
(5200, 20200, 2000, 'Health', 'GradeC'),
(4560, 15000, 1500, 'Health', 'GradeD');

-- --------------------------------------------------------

--
-- Table structure for table `ptaxdeduction`
--

CREATE TABLE `ptaxdeduction` (
  `gd1` double NOT NULL,
  `gd2` double NOT NULL,
  `gd3` double NOT NULL,
  `gd4` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `pstatno` int(11) NOT NULL,
  `pdate` date NOT NULL,
  `pmonth` varchar(15) NOT NULL,
  `pyear` varchar(10) NOT NULL,
  `pempid` int(11) NOT NULL,
  `pempname` varchar(30) NOT NULL,
  `pdeptname` varchar(30) NOT NULL,
  `emporg` varchar(100) NOT NULL,
  `pempgrade` varchar(10) NOT NULL,
  `basicpay` double NOT NULL,
  `gradepay` double NOT NULL,
  `pda` double NOT NULL,
  `phra` double NOT NULL,
  `pma` double NOT NULL,
  `totalearning` double NOT NULL,
  `grosspay` double NOT NULL,
  `pnps` double NOT NULL,
  `ptax` double NOT NULL,
  `pgis` double NOT NULL,
  `pnetpay` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`pstatno`, `pdate`, `pmonth`, `pyear`, `pempid`, `pempname`, `pdeptname`, `emporg`, `pempgrade`, `basicpay`, `gradepay`, `pda`, `phra`, `pma`, `totalearning`, `grosspay`, `pnps`, `ptax`, `pgis`, `pnetpay`) VALUES
(1001, '2017-08-29', 'August', '2017', 1, 'hari', 'Education', '', 'GradeA', 12000, 4900, 131, 10, 600, 24429, 41329, 10, 208, 300, 21707.1),
(1002, '2017-08-29', 'August', '2017', 2, 'kausik', 'Education', '', 'GradeA', 12000, 4900, 131, 10, 600, 24429, 41329, 10, 208, 300, 21707.1),
(1003, '2017-08-29', 'August', '2017', 3, 'Ariful', 'Education', '', 'GradeB', 8000, 5100, 131, 10, 600, 19071, 32171, 10, 208, 300, 16846.9),
(1004, '2017-08-29', 'August', '2017', 4, 'Sarkar', 'Education', '', 'GradeB', 8000, 5100, 131, 10, 600, 19071, 32171, 10, 208, 300, 16846.9),
(1005, '2017-08-29', 'August', '2017', 5, 'Ahmed', 'Education', '', 'GradeC', 5200, 3300, 131, 10, 600, 12585, 21085, 10, 208, 300, 10963.5),
(1006, '2017-08-29', 'August', '2017', 6, 'Reddy', 'Education', '', 'GradeC', 5200, 3300, 131, 10, 600, 12585, 21085, 10, 208, 300, 10963.5),
(1007, '2017-08-29', 'August', '2017', 7, 'pulak', 'Education', '', 'GradeD', 4560, 1500, 131, 10, 600, 9144.6, 15204.6, 10, 208, 300, 7842.74),
(1008, '2017-08-29', 'August', '2017', 8, 'Anjali', 'Education', '', 'GradeD', 4560, 1500, 131, 10, 600, 9144.6, 15204.6, 10, 208, 300, 7842.74),
(1009, '2017-08-29', 'August', '2017', 9, 'injamul', 'Education', '', 'GradeA', 12000, 4900, 131, 10, 600, 24429, 41329, 10, 208, 300, 21707.1),
(1010, '2017-08-29', 'August', '2017', 10, 'rajib', 'Education', '', 'GradeA', 12000, 4900, 131, 10, 600, 24429, 41329, 10, 208, 300, 21707.1),
(1011, '2017-08-29', 'August', '2017', 11, 'rejaul', 'Education', '', 'GradeB', 8000, 5100, 131, 10, 600, 19071, 32171, 10, 208, 300, 16846.9),
(1012, '2017-08-29', 'August', '2017', 12, 'kamal', 'Education', '', 'GradeB', 8000, 5100, 131, 10, 600, 19071, 32171, 10, 208, 300, 16846.9),
(1013, '2017-08-29', 'August', '2017', 13, 'hirak', 'Education', '', 'GradeC', 5200, 3300, 131, 10, 600, 12585, 21085, 10, 208, 300, 10963.5),
(1014, '2017-08-29', 'August', '2017', 14, 'Sarkar', 'Education', '', 'GradeC', 5200, 3300, 131, 10, 600, 12585, 21085, 10, 208, 300, 10963.5),
(1015, '2017-08-29', 'August', '2017', 15, 'gitali', 'Education', '', 'GradeD', 4560, 1500, 131, 10, 600, 9144.6, 15204.6, 10, 208, 300, 7842.74),
(1016, '2017-08-29', 'August', '2017', 16, 'kulen', 'Education', '', 'GradeD', 4560, 1500, 131, 10, 600, 9144.6, 15204.6, 10, 208, 300, 7842.74),
(1017, '2017-08-29', 'August', '2017', 17, 'hari', 'Education', '', 'GradeA', 12000, 4900, 131, 10, 600, 24429, 41329, 10, 208, 300, 21707.1),
(1018, '2017-08-29', 'August', '2017', 18, 'Sarkar', 'Education', '', 'GradeA', 12000, 4900, 131, 10, 600, 24429, 41329, 10, 208, 300, 21707.1),
(1019, '2017-08-29', 'August', '2017', 19, 'Ariful', 'Education', '', 'GradeB', 8000, 5100, 131, 10, 600, 19071, 32171, 10, 208, 300, 16846.9),
(1020, '2017-08-29', 'August', '2017', 20, 'Malabika', 'Education', '', 'GradeB', 8000, 5100, 131, 10, 600, 19071, 32171, 10, 208, 300, 16846.9),
(1021, '2017-08-29', 'August', '2017', 21, 'kausik', 'Education', '', 'GradeC', 5200, 3300, 131, 10, 600, 12585, 21085, 10, 208, 300, 10963.5),
(1022, '2017-08-29', 'August', '2017', 22, 'narendra', 'Education', '', 'GradeC', 5200, 3300, 131, 10, 600, 12585, 21085, 10, 208, 300, 10963.5),
(1023, '2017-08-29', 'August', '2017', 23, 'himanta', 'Education', '', 'GradeD', 4560, 1500, 131, 10, 600, 9144.6, 15204.6, 10, 208, 300, 7842.74),
(1024, '2017-08-29', 'August', '2017', 24, 'Reddy', 'Education', '', 'GradeD', 4560, 1500, 131, 10, 600, 9144.6, 15204.6, 10, 208, 300, 7842.74),
(1025, '2017-09-06', '', '2017', 25, 'jayanta', 'Agriculture', 'B1', 'GradeA', 12000, 4000, 131, 10, 600, 23160, 39160, 10, 208, 300, 20556),
(1026, '2017-11-13', 'November', '2017', 26, 'rakesh', 'Agriculture', 'B1', 'GradeA', 12000, 4000, 131, 10, 600, 23160, 39160, 10, 208, 300, 20556),
(1027, '2017-11-16', 'November', '2017', 110, 'rahul', 'IT', 'D1', 'GradeA', 12000, 5000, 131, 10, 600, 24570, 41570, 10, 208, 300, 21835),
(1028, '2017-11-16', 'November', '2017', 111, 'rajiv', 'Agriculture', 'D1', 'GradeA', 12000, 4000, 131, 10, 600, 23160, 39160, 10, 208, 300, 20556),
(1029, '2017-12-07', 'December', '2017', 153, 'dfg', 'Agriculture', 'wew', 'GradeA', 12000, 4000, 131, 10, 600, 23160, 39160, 10, 208, 300, 20556);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `empinfo`
--
ALTER TABLE `empinfo`
  ADD PRIMARY KEY (`Emp_id`);

--
-- Indexes for table `emplogin`
--
ALTER TABLE `emplogin`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`pstatno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
