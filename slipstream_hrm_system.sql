-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2017 at 06:57 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `slipstream_hrm_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `discipline`
--

CREATE TABLE `discipline` (
  `discipline_id` int(100) NOT NULL,
  `employee_name` varchar(200) NOT NULL,
  `case_name` varchar(200) NOT NULL,
  `penalty` varchar(200) NOT NULL,
  `Status` varchar(200) DEFAULT 'On Progress'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discipline`
--

INSERT INTO `discipline` (`discipline_id`, `employee_name`, `case_name`, `penalty`, `Status`) VALUES
(8, 'Humaira Binte Habib', 'Late', '1 hour salary cut', 'Progress Cleared'),
(9, 'Aneem Al Ahsan', 'Misuse Internet', '2 Hour Salary cut off', 'On Progress');

-- --------------------------------------------------------

--
-- Table structure for table `employee_time`
--

CREATE TABLE `employee_time` (
  `employee_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `start_time` date NOT NULL,
  `end_time` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `leave_action`
--

CREATE TABLE `leave_action` (
  `action_id` int(11) NOT NULL,
  `status` varchar(200) NOT NULL,
  `action` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_action`
--

INSERT INTO `leave_action` (`action_id`, `status`, `action`) VALUES
(1, 'Approved', 'Approve'),
(2, 'Rejected', 'Reject');

-- --------------------------------------------------------

--
-- Table structure for table `leave_list`
--

CREATE TABLE `leave_list` (
  `employee_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `start` varchar(100) DEFAULT NULL,
  `end` varchar(100) DEFAULT NULL,
  `leave_type` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `days` int(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_list`
--

INSERT INTO `leave_list` (`employee_id`, `name`, `start`, `end`, `leave_type`, `status`, `days`) VALUES
(52, 'Aneem Al Ahsan', '05/05/2017', '05/10/2017', 'Paternity', 'Pending', 5),
(51, 'Niloy Mondol', '05/01/2017', '05/20/2017', 'Sick', 'Pending', 19),
(50, 'Humaira Binte Habib', '05/06/2017', '05/12/2017', 'Vacation Leave', 'Pending', 6),
(49, 'Humaira Binte Habib', '05/01/2017', '05/04/2017', 'Sick', 'Pending', 3),
(53, 'Humaira Binte Habib', '05/03/2017', '05/06/2017', 'sick', 'Pending', 3);

-- --------------------------------------------------------

--
-- Table structure for table `projects_time`
--

CREATE TABLE `projects_time` (
  `project_id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `employee` varchar(200) NOT NULL,
  `start_time` varchar(200) NOT NULL,
  `end_time` varchar(200) NOT NULL,
  `admin` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects_time`
--

INSERT INTO `projects_time` (`project_id`, `name`, `employee`, `start_time`, `end_time`, `admin`, `status`) VALUES
(14, 'ABC Ltd- Phase 1', 'Aneem Al Ahsan', '05/01/2017', '05/10/2017', 'Niloy Mondol', 'COMPLETED'),
(15, 'Coke - Phase 1', 'Humaira Binte Habib', '05/05/2017', '05/31/2017', 'Mashrur Uddin Ahmed', 'OnGoing'),
(16, 'FreeWave Technologies, Inc.', 'Lamiya Sayara', '05/10/2017', '05/15/2017', 'Niloy Mondol', 'OnGoing'),
(17, 'Priceline Group - Phase 1', 'Niloy Mondol', '05/05/2017', '05/30/2017', 'Shafayet Ahmed', 'OnGoing');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `training_id` int(100) NOT NULL,
  `training_course` varchar(200) NOT NULL,
  `start_time` date NOT NULL,
  `status` varchar(200) NOT NULL,
  `participant` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `user_id` varchar(250) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `salary` int(100) DEFAULT NULL,
  `user_type` varchar(100) DEFAULT NULL,
  `user_image` varchar(250) DEFAULT NULL,
  `job_title` varchar(200) DEFAULT NULL,
  `sub_unit` varchar(200) DEFAULT NULL,
  `married` varchar(200) DEFAULT NULL,
  `workshift` varchar(200) DEFAULT NULL,
  `smoker` varchar(100) DEFAULT NULL,
  `dob` varchar(200) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_id`, `name`, `password`, `email`, `salary`, `user_type`, `user_image`, `job_title`, `sub_unit`, `married`, `workshift`, `smoker`, `dob`, `gender`) VALUES
(26, 'mashrur.ahmed', 'Mashrur Uddin Ahmed', '202cb962ac59075b964b07152d234b70', 'mashrur@slipstream.com', 50000, 'admin', 'mashrur.ahmed.jpg', 'SALES EXECUTIVE', 'Sales', 'Single', 'Day', 'Yes', '1994-08-24', 'Male'),
(27, 'shafayet.ahmed', 'Shafayet Ahmed', '202cb962ac59075b964b07152d234b70', 'shafayet@slipstream.com', 50000, 'user', 'shafayet.ahmed.jpg', 'SOFTWARE ENGINEER', 'IT', 'Single', 'Twilight', 'Yes', '1994-09-15', 'Male'),
(28, 'humaira.hima', 'Humaira Binte Habib', '202cb962ac59075b964b07152d234b70', 'humaira@slipstream.com', 50000, 'user', 'humaira.hime.jpg', 'QA ENGINEER', 'IT', 'Single', 'Day', 'No', '1992-04-06', 'Female'),
(29, 'aneem.ahsan', 'Aneem Al Ahsan', '202cb962ac59075b964b07152d234b70', 'aneem@slipstream.com', 30000, 'user', 'aneem.ahsan.jpg', 'SALES EXECUTIVE', 'Sales', 'Married', 'Day', 'No', '1992-01-15', 'Male'),
(30, 'lamiya.sayara', 'Lamiya Sayara', '202cb962ac59075b964b07152d234b70', 'lamiya@slipstream.com', 50000, 'user', 'lamiya.sayara.jpg', 'SALES EXECUTIVE', 'Sales', 'Married', 'Day', 'Yes', '05/11/1994', 'Female'),
(31, 'niloy.mondol', 'Niloy Mondol', '202cb962ac59075b964b07152d234b70', 'niloy@slipstream.com', 50000, 'user', 'niloy.mondol.jpg', 'HR ADMIN', 'Administration', 'Single', 'Twilight', 'Yes', '1991-06-20', 'Male'),
(1, 'Admin', 'Admin', '21232f297a57a5a743894a0e4a801fc3', ' info@slipstream.com', NULL, 'admin', 'Admin.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'billah.mahfuz', 'Mahfuz Billah', '7815696ecbf1c96e6894b779456d330e', 'billah@slipstream.com', 30000, 'user', 'ApplyLeave.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vacancies`
--

CREATE TABLE `vacancies` (
  `vacancy_id` int(11) NOT NULL,
  `vacancy` varchar(200) NOT NULL,
  `job_title` varchar(200) NOT NULL,
  `hiring_manager` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vacancies`
--

INSERT INTO `vacancies` (`vacancy_id`, `vacancy`, `job_title`, `hiring_manager`, `status`) VALUES
(10, 'Sales Executive', 'Sales', 'Niloy Mondol', 'Published'),
(9, 'Software Engineer', 'Software Engineer', 'Shafayet Ahmed', 'Published'),
(11, 'Data Analysist', 'Data Analysist', 'Shafayet Ahmed', 'Published'),
(12, 'Web Developer', 'Web Developer', 'Mashrur Uddin Ahmed', 'Published');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `discipline`
--
ALTER TABLE `discipline`
  ADD PRIMARY KEY (`discipline_id`);

--
-- Indexes for table `employee_time`
--
ALTER TABLE `employee_time`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `leave_action`
--
ALTER TABLE `leave_action`
  ADD PRIMARY KEY (`action_id`);

--
-- Indexes for table `leave_list`
--
ALTER TABLE `leave_list`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `projects_time`
--
ALTER TABLE `projects_time`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`training_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vacancies`
--
ALTER TABLE `vacancies`
  ADD PRIMARY KEY (`vacancy_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `discipline`
--
ALTER TABLE `discipline`
  MODIFY `discipline_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `employee_time`
--
ALTER TABLE `employee_time`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `leave_action`
--
ALTER TABLE `leave_action`
  MODIFY `action_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `leave_list`
--
ALTER TABLE `leave_list`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `projects_time`
--
ALTER TABLE `projects_time`
  MODIFY `project_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `training_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `vacancies`
--
ALTER TABLE `vacancies`
  MODIFY `vacancy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
