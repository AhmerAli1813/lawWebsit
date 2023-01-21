-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2022 at 09:15 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lawyers`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `app_id` int(100) NOT NULL,
  `C_id` varchar(20) NOT NULL,
  `L_id` varchar(20) NOT NULL,
  `appointment_date` int(100) NOT NULL DEFAULT current_timestamp(),
  `status` varchar(100) NOT NULL DEFAULT 'pending',
  `lr_sts` varchar(50) NOT NULL DEFAULT 'pending',
  `cl_sts` varchar(100) NOT NULL DEFAULT 'requested',
  `date_booked` varchar(100) NOT NULL,
  `case_type` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`app_id`, `C_id`, `L_id`, `appointment_date`, `status`, `lr_sts`, `cl_sts`, `date_booked`, `case_type`) VALUES
(1, 'client_002', 'lawyer_003', 2022, 'rejected', 'pending', 'requested', '2022-11-24 22:39:43', 1),
(2, 'client_003', 'lawyer_004', 2022, 'approved', 'accepted', 'requested', '2022-11-25 03:15:11', 6),
(3, 'client_001', 'lawyer_004', 2022, 'approved', 'accepted', 'requested', '2022-12-06 09:17:35', 3),
(4, 'client_005', 'lawyer_003', 2022, 'deleted', 'pending', 'requested', '2022-11-24 22:39:43', 4),
(5, 'client_003', 'lawyer_003', 2147483647, 'approved', 'rejected', 'requested', '2022-12-28', 7),
(6, 'client_003', 'lawyer_003', 2147483647, 'pending', 'pending', 'requested', '2022-12-28', 5),
(7, 'client_001', 'lawyer_003', 2147483647, 'approved', 'pending', 'requested', '2022-12-30', 2),
(8, 'client_001', 'lawyer_007', 2147483647, 'approved', 'accepted', 'requested', '2022-12-30', 3);

-- --------------------------------------------------------

--
-- Stand-in structure for view `approved_cases`
-- (See below for the actual view)
--
CREATE TABLE `approved_cases` (
`app_id` int(100)
,`C_id` varchar(20)
,`client_name` varchar(100)
,`client_num` varchar(100)
,`c_email` varchar(140)
,`c_address` varchar(100)
,`c_img` varchar(100)
,`L_id` varchar(20)
,`lawyer_name` varchar(100)
,`lawyer_num` varchar(100)
,`l_email` varchar(140)
,`l_address` varchar(100)
,`l_img` varchar(100)
,`case_type` varchar(100)
,`Admin_status` varchar(100)
,`lawyer_status` varchar(50)
,`client_status` varchar(100)
,`date_booked` varchar(100)
,`appointment_date` int(100)
);

-- --------------------------------------------------------

--
-- Table structure for table `casetable`
--

CREATE TABLE `casetable` (
  `case_id` int(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `message` varchar(150) NOT NULL,
  `date_send` varchar(100) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `casetable`
--

INSERT INTO `casetable` (`case_id`, `title`, `message`, `date_send`, `icon`, `img`) VALUES
(1, 'busince case', ' Locate cases that have considered a particular judgment. View a brief summary of a case - legal iss', '2022-12-10 10:50:45', 'icon-shopping-cart', 'case6.webp'),
(2, 'muder case', 'Murder is a crime that has the elements of criminal act, criminal intent, causation, and harm. In this section', '2022-12-10 11:03:41', 'fas fa-tint', 'case7.jpg'),
(3, 'Real Estate Law', 'Real estate law covers the ownership and use of land in any given transaction, and isn\'t too far rem', '12/11/2022', 'icon-home', 'case1.jpg'),
(4, 'Insurance Law', 'In general, an insurance contract must meet four conditions in order to be legally valid: it must be', '12/11/2022', 'icon-eye', 'case2.jpg'),
(5, 'medical negligence', 'Whoever causes the death of any person by doing any rash or negligent act not amounting to culpable homicide, shall be punished with imprisonment of e', '12/11/2022', 'icon-heart', 'case3.jpg'),
(6, 'Personal injury ', 'Personal injury is a legal term for an injury to the body, mind or emotions, ... The former is content with imposing liability for faultless causation', '12/11/2022', 'icon-umbrella', 'case4.jpg'),
(7, 'Criminal Defense', 'The right of private defence of property against robbery Continues as long as the offender causes or attempts to cause to any person death or hurt or ', '12/11/2022', 'icon-help', 'case5.jpg');

-- --------------------------------------------------------

--
-- Stand-in structure for view `case_appointment`
-- (See below for the actual view)
--
CREATE TABLE `case_appointment` (
`app_id` int(100)
,`C_id` varchar(20)
,`client_name` varchar(100)
,`L_id` varchar(20)
,`lawyer_name` varchar(100)
,`case_type` varchar(100)
,`Admin_status` varchar(100)
,`lawyer_status` varchar(50)
,`client_status` varchar(100)
,`date_booked` varchar(100)
,`appointment_date` int(100)
);

-- --------------------------------------------------------

--
-- Table structure for table `eduction`
--

CREATE TABLE `eduction` (
  `edu_id` int(11) NOT NULL,
  `unique_id` int(11) NOT NULL,
  `college` varchar(100) NOT NULL,
  `course_id` int(11) NOT NULL,
  `skills_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `income_id` int(100) NOT NULL,
  `invoice_id` varchar(50) NOT NULL,
  `app_id` int(11) NOT NULL,
  `date_discharge` varchar(100) NOT NULL,
  `amount_paid` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`income_id`, `invoice_id`, `app_id`, `date_discharge`, `amount_paid`, `description`) VALUES
(4, 'inv-001', 5, '12-10-22', '20000', 'we are working your case'),
(5, 'inv-002', 5, '12-10-22', '25000', 'we are working your case'),
(7, 'inv-003', 5, '2022-12-30', '25000', 'we are testing'),
(11, 'inv-004', 8, '2022-12-13', '40000', 'hello Ahad , I am  accepted your cases , seen your invoices  ');

-- --------------------------------------------------------

--
-- Stand-in structure for view `invoice_tbl`
-- (See below for the actual view)
--
CREATE TABLE `invoice_tbl` (
`income_id` int(100)
,`invoice_id` varchar(50)
,`c_id` varchar(20)
,`client_name` varchar(100)
,`client_num` varchar(100)
,`c_email` varchar(140)
,`c_address` varchar(100)
,`c_img` varchar(100)
,`l_id` varchar(20)
,`lawyer_name` varchar(100)
,`lawyer_num` varchar(100)
,`l_email` varchar(140)
,`l_address` varchar(100)
,`l_img` varchar(100)
,`case_type` varchar(100)
,`client_date` varchar(100)
,`given_date` int(100)
,`lawyer_date` varchar(100)
,`prize` varchar(100)
,`Desc` varchar(100)
);

-- --------------------------------------------------------

--
-- Table structure for table `job_request`
--

CREATE TABLE `job_request` (
  `jr_id` int(11) NOT NULL,
  `lawyer_id` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pending',
  `salary` decimal(10,0) NOT NULL DEFAULT 18000
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_request`
--

INSERT INTO `job_request` (`jr_id`, `lawyer_id`, `status`, `salary`) VALUES
(1, 'lawyer_002', 'rejected', '1500'),
(2, 'lawyer_003', 'approved', '15000'),
(3, 'lawyer_004', 'approved', '1500'),
(4, 'lawyer_001', 'rejected', '21000'),
(5, 'lawyer_007', 'approved', '20000'),
(6, 'lawyer-369708333', 'pending', '18000'),
(8, 'lawyer-1511553418', 'pending', '18000');

-- --------------------------------------------------------

--
-- Stand-in structure for view `lawyers`
-- (See below for the actual view)
--
CREATE TABLE `lawyers` (
`unique_id` varchar(20)
,`name` varchar(100)
,`username` varchar(100)
,`email` varchar(140)
,`role_id` int(11)
,`role_name` varchar(100)
,`phone` varchar(100)
,`address` varchar(100)
,`salary` decimal(10,0)
,`gender` varchar(50)
,`status` varchar(50)
,`images` varchar(100)
,`about` varchar(200)
,`data_reg` date
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `lawyers_appointmets`
-- (See below for the actual view)
--
CREATE TABLE `lawyers_appointmets` (
`unique_id` varchar(20)
,`role_name` varchar(100)
,`name` varchar(100)
,`username` varchar(100)
,`email` varchar(140)
,`phone` varchar(100)
,`address` varchar(100)
,`gender` varchar(50)
,`status` varchar(50)
,`salary` decimal(10,0)
,`data_reg` date
);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(140) NOT NULL,
  `password` varchar(150) NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT 3,
  `profile` varchar(100) NOT NULL,
  `edu_id` int(11) DEFAULT NULL,
  `phone` varchar(100) NOT NULL DEFAULT 'N/A',
  `address` varchar(100) NOT NULL DEFAULT 'pk',
  `gender` varchar(50) NOT NULL DEFAULT 'male',
  `data_reg` date NOT NULL,
  `about` varchar(200) NOT NULL DEFAULT 'Hello , I am here you looking me , I am your best lawyers'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `unique_id`, `name`, `username`, `email`, `password`, `role_id`, `profile`, `edu_id`, `phone`, `address`, `gender`, `data_reg`, `about`) VALUES
(1, 'admin_001', 'samuel', 'admin', 's@s.s', '123', 1, 'avatar.png', NULL, 'N/A', 'pk', 'male', '0000-00-00', 'Hello , I am here you looking me , I am your best lawyers'),
(2, 'lawyer_003', 'Ahmer ali', 'lawyer', 'ahmer@law.in', '123', 2, 'user1-128x128.jpg', NULL, '243', 'karachi', 'female', '2022-12-09', 'Hello , I am here you looking me , I am your best lawyers'),
(3, 'client_001', 'Ahad Ali', 'client', 'ahad@client.com', '123', 3, 'pic-1.png', NULL, 'N/A', 'pk', 'male', '0000-00-00', 'Hello , I am here you looking me , I am your best lawyers'),
(4, 'lawyer_002', 'muslim', 'muslim003', 'muslim@law.in', '123', 2, 'user2-160x160.jpg', NULL, '2222', 'karachi', 'male', '2022-12-09', 'Hello , I am here you looking me , I am your best lawyers'),
(5, 'lawyer_004', 'imran', 'imran004', 'imran@law.in', '123', 2, 'user8-128x128.jpg', NULL, '09865', 'karachi', 'Male', '0000-00-00', 'Hello , I am here you looking me , I am your best lawyers'),
(23, 'client_002', 'ali', 'khan', 'ali@gmail.com', '12', 3, 'admin.png', NULL, '099', 'karachi', 'male', '2022-12-09', 'Hello , I am here you looking me , I am your best lawyers'),
(28, 'client_003', 'Ayyan Khan', 'lawyerhh', 'ahmerhh@gmail.com', '', 3, '', NULL, '0340-97', 'karachi', 'male', '2022-12-09', 'Hello , I am here you looking me , I am your best lawyers'),
(31, 'lawyer_001', 'Bila', 'Bili', 'Bilibila@gmail.com', '', 2, '', NULL, '0340-97', 'karachi', 'male', '2022-12-09', 'Hello , I am here you looking me , I am your best lawyers'),
(32, 'lawyer_007', 'angel jolly', 'angel008', 'angel@law.in', '123', 2, 'avatar5.png', NULL, '924573243759', 'london', 'Female', '0000-00-00', 'Hello , I am here you looking me , I am your best lawyers'),
(34, 'lawyer-369708333', 'faizan khan', 'fz_0087', 'faizan@law.in', '123', 2, 'avatar5.png', NULL, '92312309489', 'mirpurkhas sindh karachi', 'Male', '0000-00-00', 'Hello , I am here you looking me , I am your best lawyers'),
(35, 'lawyer-1511553418', 'abdul', 'abdulahad ', 'abdul@gmail.com', 'qwerty123', 2, 'avatar5.png', NULL, '03153004143', 'pooran muhalla nai galli', 'Male', '2022-12-12', 'Hello , I am here you looking me , I am your best lawyers'),
(36, 'client1406781274', 'Sharuk Khan', 'Sharuk', 'Sharuk@client.in', '123', 3, 'avatar4.png', NULL, '92340958733', 'karachi', 'Male', '2022-12-12', 'Hello , I am here you looking me , I am your best lawyers');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'admin'),
(2, 'laywer'),
(3, 'client');

-- --------------------------------------------------------

--
-- Structure for view `approved_cases`
--
DROP TABLE IF EXISTS `approved_cases`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `approved_cases`  AS SELECT `app`.`app_id` AS `app_id`, `app`.`C_id` AS `C_id`, `rc`.`name` AS `client_name`, `rc`.`phone` AS `client_num`, `rc`.`email` AS `c_email`, `rc`.`address` AS `c_address`, `rc`.`profile` AS `c_img`, `app`.`L_id` AS `L_id`, `rl`.`name` AS `lawyer_name`, `rl`.`phone` AS `lawyer_num`, `rl`.`email` AS `l_email`, `rl`.`address` AS `l_address`, `rl`.`images` AS `l_img`, `ctb`.`title` AS `case_type`, `app`.`status` AS `Admin_status`, `app`.`lr_sts` AS `lawyer_status`, `app`.`cl_sts` AS `client_status`, `app`.`date_booked` AS `date_booked`, `app`.`appointment_date` AS `appointment_date` FROM (((`appointment` `app` left join `register` `rc` on(`app`.`C_id` = `rc`.`unique_id`)) left join `lawyers` `rl` on(`app`.`L_id` = `rl`.`unique_id`)) left join `casetable` `ctb` on(`app`.`case_type` = `ctb`.`case_id`)) WHERE `app`.`status` = 'approved''approved'  ;

-- --------------------------------------------------------

--
-- Structure for view `case_appointment`
--
DROP TABLE IF EXISTS `case_appointment`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `case_appointment`  AS SELECT `app`.`app_id` AS `app_id`, `app`.`C_id` AS `C_id`, `rc`.`name` AS `client_name`, `app`.`L_id` AS `L_id`, `rl`.`name` AS `lawyer_name`, `ctb`.`title` AS `case_type`, `app`.`status` AS `Admin_status`, `app`.`lr_sts` AS `lawyer_status`, `app`.`cl_sts` AS `client_status`, `app`.`date_booked` AS `date_booked`, `app`.`appointment_date` AS `appointment_date` FROM (((`appointment` `app` left join `register` `rc` on(`app`.`C_id` = `rc`.`unique_id`)) left join `register` `rl` on(`app`.`L_id` = `rl`.`unique_id`)) left join `casetable` `ctb` on(`ctb`.`case_id` = `app`.`case_type`))  ;

-- --------------------------------------------------------

--
-- Structure for view `invoice_tbl`
--
DROP TABLE IF EXISTS `invoice_tbl`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `invoice_tbl`  AS SELECT `inv`.`income_id` AS `income_id`, `inv`.`invoice_id` AS `invoice_id`, `app`.`C_id` AS `c_id`, `app`.`client_name` AS `client_name`, `app`.`client_num` AS `client_num`, `app`.`c_email` AS `c_email`, `app`.`c_address` AS `c_address`, `app`.`c_img` AS `c_img`, `app`.`L_id` AS `l_id`, `app`.`lawyer_name` AS `lawyer_name`, `app`.`lawyer_num` AS `lawyer_num`, `app`.`l_email` AS `l_email`, `app`.`l_address` AS `l_address`, `app`.`l_img` AS `l_img`, `app`.`case_type` AS `case_type`, `app`.`date_booked` AS `client_date`, `app`.`appointment_date` AS `given_date`, `inv`.`date_discharge` AS `lawyer_date`, `inv`.`amount_paid` AS `prize`, `inv`.`description` AS `Desc` FROM (`income` `inv` join `approved_cases` `app` on(`inv`.`app_id` = `app`.`app_id`))  ;

-- --------------------------------------------------------

--
-- Structure for view `lawyers`
--
DROP TABLE IF EXISTS `lawyers`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `lawyers`  AS SELECT `r`.`unique_id` AS `unique_id`, `r`.`name` AS `name`, `r`.`username` AS `username`, `r`.`email` AS `email`, `r`.`role_id` AS `role_id`, `roletb`.`role_name` AS `role_name`, `r`.`phone` AS `phone`, `r`.`address` AS `address`, `jr`.`salary` AS `salary`, `r`.`gender` AS `gender`, `jr`.`status` AS `status`, `r`.`profile` AS `images`, `r`.`about` AS `about`, `r`.`data_reg` AS `data_reg` FROM ((`register` `r` join `job_request` `jr` on(`r`.`unique_id` = `jr`.`lawyer_id`)) join `roles` `roletb` on(`r`.`role_id` = `roletb`.`role_id`)) WHERE `jr`.`status` = 'approved''approved'  ;

-- --------------------------------------------------------

--
-- Structure for view `lawyers_appointmets`
--
DROP TABLE IF EXISTS `lawyers_appointmets`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `lawyers_appointmets`  AS SELECT `r`.`unique_id` AS `unique_id`, `rol`.`role_name` AS `role_name`, `r`.`name` AS `name`, `r`.`username` AS `username`, `r`.`email` AS `email`, `r`.`phone` AS `phone`, `r`.`address` AS `address`, `r`.`gender` AS `gender`, `jrq`.`status` AS `status`, `jrq`.`salary` AS `salary`, `r`.`data_reg` AS `data_reg` FROM ((`register` `r` join `job_request` `jrq` on(`r`.`unique_id` = `jrq`.`lawyer_id`)) join `roles` `rol` on(`r`.`role_id` = `rol`.`role_id`))  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `casetable`
--
ALTER TABLE `casetable`
  ADD PRIMARY KEY (`case_id`);

--
-- Indexes for table `eduction`
--
ALTER TABLE `eduction`
  ADD PRIMARY KEY (`edu_id`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`income_id`);

--
-- Indexes for table `job_request`
--
ALTER TABLE `job_request`
  ADD PRIMARY KEY (`jr_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `unique_id` (`unique_id`),
  ADD KEY `roles` (`role_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `app_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `casetable`
--
ALTER TABLE `casetable`
  MODIFY `case_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `eduction`
--
ALTER TABLE `eduction`
  MODIFY `edu_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `income_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `job_request`
--
ALTER TABLE `job_request`
  MODIFY `jr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `register`
--
ALTER TABLE `register`
  ADD CONSTRAINT `roles` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
