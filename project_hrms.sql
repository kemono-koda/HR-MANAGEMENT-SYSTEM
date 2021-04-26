-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2021 at 11:58 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_hrms`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_job`
--

CREATE TABLE `add_job` (
  `id` int(5) NOT NULL,
  `addjob` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_job`
--

INSERT INTO `add_job` (`id`, `addjob`) VALUES
(2, 'Developer'),
(3, 'Junior Software Enginner'),
(4, 'IT Expart');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `name` varchar(60) NOT NULL,
  `userid` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `gender` varchar(60) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(200) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `userid`, `email`, `password`, `gender`, `dob`, `address`, `type`) VALUES
(7, 'mohit', 'mohit2', 'm.a.mohit.khan@gmail.com', '222222222#', 'Male', '2021-04-20', 'xyz', ''),
(11, 'Mohit', 'mohit3', 'm.a.mohit.khan@gmail.com', '11111111@', 'Male', '0000-00-00', '', ''),
(12, 'Fahad Hossain', 'fahad9791', 'hossainfahad76@gmail.com', '123456', 'Male', '2021-04-20', 'Kuril, Dhaka, Bangladesh', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `serial` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `application` text NOT NULL,
  `topic` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`serial`, `username`, `subject`, `application`, `topic`) VALUES
(1, 'farabi', 'Application for Vacation', 'I need vacation Sir', 'vacation'),
(2, 'topu', 'Application for Vacation', 'I need vacation', 'vacation'),
(3, 'topu', 'Home loan', 'I am request you for home loan', 'loan'),
(4, 'fahad', 'Application for Job Reference ', 'I refer a person to you for job', 'reference'),
(5, 'fahad', 'Application for Resignation', 'Dear sir, \r\nI quit the job.\r\nThank you ', 'resignation'),
(6, 'topu', 'Application for Vacation', 'Dear Sir,\r\nI am very tried... So, I need some holiday. I wanna go for a short vacation.\r\nPlease approve my request.', 'vacation'),
(7, 'topu', 'Application for Transfer', 'Dear sir\r\nI want go location abc to location xyz.\r\npray and hope that you would be kind enough to help me\r\n', 'transfer');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `serial` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `date` varchar(15) NOT NULL,
  `time` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`serial`, `username`, `date`, `time`, `status`) VALUES
(1, 'fahad', '13-04-21', '02:38:10', 'Enter'),
(2, 'fahad', '13-04-21', '02:38:17', 'Exit'),
(5, 'farabi', '13-04-21', '02:39:09', 'Enter'),
(6, 'farabi', '13-04-21', '02:39:11', 'Exit'),
(7, 'topu', '13-04-21', '09:37:02', 'Enter'),
(8, 'topu', '13-04-21', '09:40:28', 'Exit'),
(9, 'fahad', '15-04-21', '10:12:21', 'Enter'),
(10, 'fahad', '15-04-21', '10:12:24', 'Exit'),
(11, 'topu', '20-04-21', '12:35:29', 'Enter'),
(12, 'topu', '20-04-21', '12:35:35', 'Exit'),
(13, 'fahad9791', '25-04-21', '03:56:16', 'Enter');

-- --------------------------------------------------------

--
-- Table structure for table `boardofdirector`
--

CREATE TABLE `boardofdirector` (
  `id` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `userid` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(1000) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `boardofdirector`
--

INSERT INTO `boardofdirector` (`id`, `name`, `userid`, `email`, `password`, `gender`, `dob`, `address`, `status`) VALUES
(4, 'M A Mohit Khan', 'mohit1', 'm.a.mohit.khan@gmail.com', '111111111@', 'Male', '0000-00-00', 'bashundhara r/a block- b road -10 house no.28-29', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `bod`
--

CREATE TABLE `bod` (
  `username` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` int(10) NOT NULL,
  `cpassword` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(12) NOT NULL,
  `dob` varchar(16) NOT NULL,
  `department` varchar(10) NOT NULL,
  `blood` varchar(10) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bod`
--

INSERT INTO `bod` (`username`, `name`, `password`, `cpassword`, `email`, `phone`, `address`, `gender`, `dob`, `department`, `blood`, `pic`, `type`) VALUES
('aaa', 'aaa', 12345, 12345, 'muntasir55555@gmail.', '01521572223', 'Block-B, Ro No. -03, House No. -01, Banasree, Rampura, Dhaka																', 'Male', '2021-04-14', 'Board of D', 'A+', 'sniper_ghost_warrior_3-3.jpg', ''),
('fahad', 'Fahad Hossain', 123456, 123456, 'hossainfahad76@gmail', '01797910423', 'Kuril, Dhaka, Bangladesh', 'Male', '2021-04-14', 'Sofware', 'O+', '3.png', 'Director'),
('munta', 'S.M Muntasir Rahman', 123, 123, 'muntasir55555@gmail.', '01521572321', 'Block-B, Road No. -03, House No. -01, Banasree, Rampura, Dhaka', 'Male', '2021-04-15', 'Board of D', 'B-', '', ''),
('muntasir', 'Muntasir', 123, 123, 'muntasir55555@gmail.', '01521572321', 'Block-B, Road No. -03, House No. -01, Banasree, Rampura, Dhaka', 'Male', '2021-04-07', 'Board of D', 'A+', 'sniper_ghost_warrior_3-3.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `userid` varchar(60) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(1000) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `userid`, `email`, `password`, `gender`, `dob`, `address`, `status`) VALUES
(3, 'M A Mohit Khan', 'mohit1', 'm.a.mohit.khan@gmail.com', '111111111@', 'Male', '0000-00-00', 'bashundhara r/a block- b road -10 house no.28-29', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `username` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(12) NOT NULL,
  `department` varchar(20) NOT NULL,
  `blood` varchar(5) NOT NULL,
  `picture` text NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`username`, `name`, `password`, `email`, `phone`, `address`, `gender`, `dob`, `department`, `blood`, `picture`, `type`) VALUES
('fahad', 'Fahad Hossain', '789456', 'hossainfahad76@gmail.com', '01797910423', 'Kuril, Dhaka, Bangladesh', 'Male', '1999-11-03', 'Developer', 'O+', '20190410_124551.jpg', ''),
('fahad9', 'fahad', '123456', 'hossainfahad76@gmail.com', '01797910423', 'Kuril, Dhaka, Bangladesh', 'Male', '2021-04-28', 'Developer', 'O-', '3.png', ''),
('fahad9791', 'Fahad Hossain', '123456', 'hossainfahad76@gmail.com', '01797910423', 'Kuril, Dhaka, Bangladesh', 'Male', '2021-04-21', 'Developer', 'O+', '3.png', 'Employee'),
('farabi', 'Farabi Shariar', '456789', 'farabi@gmail.com', '01797545256', 'Chadpur																', 'Male', '1995-01-26', 'Sofware', 'A+', '169070275_492312678470520_2455309711072161578_n.jpg', ''),
('topu', 'Topu Hasan', '753123', 'topu76@gmail.com', '01911385896', 'Rohanpur																', 'Male', '2002-11-05', 'Sofware', 'A+', '294142.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `fixing`
--

CREATE TABLE `fixing` (
  `id` int(5) NOT NULL,
  `vacancy` varchar(50) NOT NULL,
  `candidate` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fixing`
--

INSERT INTO `fixing` (`id`, `vacancy`, `candidate`, `time`, `date`, `status`, `comment`) VALUES
(1, '1', 'male', '23:52', '2021-04-11', 'Pending', 'hi......');

-- --------------------------------------------------------

--
-- Table structure for table `hire`
--

CREATE TABLE `hire` (
  `username` varchar(25) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` int(15) NOT NULL,
  `cpassword` int(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `department` varchar(10) NOT NULL,
  `blood` varchar(15) NOT NULL,
  `choose` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hire`
--

INSERT INTO `hire` (`username`, `name`, `password`, `cpassword`, `email`, `phone`, `address`, `gender`, `dob`, `department`, `blood`, `choose`) VALUES
('mun', 'mun', 12, 12, 'muntasir55555@gmail.', '01521572321', 'Block-B, Road No. -03, House No. -01, Banasree, Rampura, Dhaka', 'Male', '2021-04-14', 'Developer', 'A+', 'No'),
('topu', 'Topu ', 123456, 123456, 'topu@gmail.com', '017545855562', 'Kuril, Dhaka, Bangladesh', 'Male', '2021-04-21', 'Developer', 'B+', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `job_vacancy`
--

CREATE TABLE `job_vacancy` (
  `id` int(5) NOT NULL,
  `vacancytitle` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `manager` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `position` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_vacancy`
--

INSERT INTO `job_vacancy` (`id`, `vacancytitle`, `name`, `manager`, `location`, `position`, `description`) VALUES
(1, 'B4', 'Hridoy', 'Ruhul Amin', 'Uttara', '2', 'Please application for fresher'),
(5, 'C4', 'Amin', 'Ruhul Amin', 'Mohakhali', '2', 'Frasher');

-- --------------------------------------------------------

--
-- Table structure for table `leave_request`
--

CREATE TABLE `leave_request` (
  `id` int(5) NOT NULL,
  `empname` varchar(50) NOT NULL,
  `leavetype` varchar(50) NOT NULL,
  `days` varchar(50) NOT NULL,
  `leavefor` varchar(50) NOT NULL,
  `statedate` varchar(50) NOT NULL,
  `enddate` varchar(50) NOT NULL,
  `reason` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leave_request`
--

INSERT INTO `leave_request` (`id`, `empname`, `leavetype`, `days`, `leavefor`, `statedate`, `enddate`, `reason`, `status`) VALUES
(3, 'Rony', 'OL', '3', 'Half Day', '2021-04-05', '2021-04-09', 'Sick', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `management`
--

CREATE TABLE `management` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `userid` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `gender` varchar(60) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(200) NOT NULL,
  `status` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `management`
--

INSERT INTO `management` (`id`, `name`, `userid`, `email`, `password`, `gender`, `dob`, `address`, `status`) VALUES
(8, 'M A Mohit Khan', 'mohit1', 'm.a.mohit@gmail.com', '11111111@', 'Male', '2021-04-24', 'bashundhara r/a block- b road -10 house no.28-29', 'active'),
(9, 'M A Mohit Khan', 'mohit2', 'm.a.mohit.khan@gmail.com', '11111111@', 'Male', '2021-04-24', 'bashundhara r/a block- b road -10 house no.28-29', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `online_application`
--

CREATE TABLE `online_application` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contract` varchar(50) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `location` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `online_application`
--

INSERT INTO `online_application` (`id`, `name`, `email`, `contract`, `experience`, `location`, `type`, `date`, `comment`) VALUES
(8, 'Ruhul Amin', 'kami05518@gamil.com', '01743369163', '2 years', 'Uttara', 'Developer', '2021-04-27', 'Hello'),
(10, 'Karim', 'raridoy101@gmail.com', '01689385783', '1 Years', 'Banani', 'Query Expert', '2021-04-05', 'fresher');

-- --------------------------------------------------------

--
-- Table structure for table `overtime`
--

CREATE TABLE `overtime` (
  `serial` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `date` varchar(15) NOT NULL,
  `time` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `overtime`
--

INSERT INTO `overtime` (`serial`, `username`, `date`, `time`, `status`) VALUES
(1, 'farabi', '13-04-21', '02:51:19', 'Start'),
(2, 'farabi', '13-04-21', '02:51:20', 'Over'),
(3, 'fahad', '13-04-21', '01:58:23', 'Start'),
(4, 'fahad', '13-04-21', '02:54:56', 'Over'),
(5, 'farabi', '15-04-21', '08:03:09', 'Start');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `blood` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `type` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `name`, `password`, `email`, `phone`, `address`, `gender`, `department`, `blood`, `dob`, `type`) VALUES
(1, 'raridoy', 'Ruhul', 'needhelp123', 'raridoy4@gmail.com', 1743369163, '#Sector-14, #Road-17, #House-08, Uttara, Dhaka, Bangladesh', 'Male', 'CSE', 'B+', '2021-04-15', 'Manager'),
(4, 'raridoy_aiub', 'Rony', 'HellpRony', 'kami05518@gamil.com', 1689385783, '#Sector-14, #Road-17, #House-08, Uttara, Dhaka, Bangladesh', 'Male', 'EEE', 'AB+', '2021-04-15', 'Manager'),
(47, 'raridoy.420', 'Ruhul Amin', 'ruhulamin', 'raridoy101@gmail.com', 1743369163, '#Sector-14, #Road-17, #House-08, Uttara, Dhaka, Bangladesh', 'Male', 'IPE', 'AB-', '2021-04-27', 'Manager'),
(48, 'raridoy_zero', 'Ruhul Amin', 'needhelp', 'insanruhul@gmail.com', 1743369163, '#Sector-14, #Road-17, #House-08, Uttara, Dhaka, Bangladesh', 'Male', 'ENG', 'O+', '2021-04-13', 'Manager'),
(49, 'fahad9791', 'Fahad Hossain', '12345678', 'hossainfahad76@gmail.com', 1797910423, 'Kuril, Dhaka, Bangladesh', 'Male', 'ENG', 'O+', '2021-04-12', 'Manager'),
(51, 'farabi', 'Farabi shariar', '123456', 'farabi@gmail.com', 1797910423, 'Kuril, Dhaka, Bangladesh', 'Male', 'Sofware', 'B+', '2021-04-14', 'Manager'),
(52, 'topu', 'Fahad Hossain', '123456', 'hossainfahad76@gmail.com', 1797910423, 'Kuril, Dhaka, Bangladesh', 'Male', 'Sofware', 'A+', '2021-04-21', 'Manager');

-- --------------------------------------------------------

--
-- Table structure for table `travel_request`
--

CREATE TABLE `travel_request` (
  `id` int(5) NOT NULL,
  `empname` varchar(50) NOT NULL,
  `contract` varchar(50) NOT NULL,
  `leavetype` varchar(50) NOT NULL,
  `days` varchar(50) NOT NULL,
  `statedate` varchar(50) NOT NULL,
  `enddate` varchar(50) NOT NULL,
  `reason` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `travel_request`
--

INSERT INTO `travel_request` (`id`, `empname`, `contract`, `leavetype`, `days`, `statedate`, `enddate`, `reason`, `status`) VALUES
(1, 'Rony', '01743369163', 'CL', '2', '2021-04-04', '2021-04-05', 'Sick', 'Pending'),
(3, 'Hridoy', '01743369163', 'OL', '3', '2021-04-27', '2021-04-18', 'Sick', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `user_image`
--

CREATE TABLE `user_image` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `photos` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_image`
--

INSERT INTO `user_image` (`id`, `username`, `photos`) VALUES
(14, 'raridoy', '../asset/upload/popup.JPG'),
(16, 'raridoy_zero', '../asset/upload/hi.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_job`
--
ALTER TABLE `add_job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `boardofdirector`
--
ALTER TABLE `boardofdirector`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bod`
--
ALTER TABLE `bod`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `fixing`
--
ALTER TABLE `fixing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hire`
--
ALTER TABLE `hire`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `job_vacancy`
--
ALTER TABLE `job_vacancy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_request`
--
ALTER TABLE `leave_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `management`
--
ALTER TABLE `management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online_application`
--
ALTER TABLE `online_application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `overtime`
--
ALTER TABLE `overtime`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travel_request`
--
ALTER TABLE `travel_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_image`
--
ALTER TABLE `user_image`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_job`
--
ALTER TABLE `add_job`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `boardofdirector`
--
ALTER TABLE `boardofdirector`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fixing`
--
ALTER TABLE `fixing`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `job_vacancy`
--
ALTER TABLE `job_vacancy`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `leave_request`
--
ALTER TABLE `leave_request`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `management`
--
ALTER TABLE `management`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `online_application`
--
ALTER TABLE `online_application`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `overtime`
--
ALTER TABLE `overtime`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `travel_request`
--
ALTER TABLE `travel_request`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_image`
--
ALTER TABLE `user_image`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
