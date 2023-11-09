-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2023 at 01:16 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `relo_ventura_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `act_id` int(10) NOT NULL,
  `act_name` varchar(50) NOT NULL,
  `act_description` varchar(350) NOT NULL,
  `act_price` int(10) NOT NULL,
  `act1` varchar(100) NOT NULL,
  `act2` varchar(100) NOT NULL,
  `act3` varchar(100) NOT NULL,
  `act4` varchar(100) NOT NULL,
  `act_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`act_id`, `act_name`, `act_description`, `act_price`, `act1`, `act2`, `act3`, `act4`, `act_img`) VALUES
(6, 'Adventure Camp', 'An adventure camp is a specialized outdoor program or facility designed to provide participants with a thrilling and physically challenging experience in a natural setting. the following activities are available under this camp:', 145, 'Rock Climbing', 'Zip-lining', 'Survival skills', 'Orienteeing', 'Img/act-3.webp'),
(7, 'Family Bonds Camp', 'A family bonds camp is a specialized program or retreat designed to strengthen and nurture the relationships within a family. These camps are typically organized to provide a unique and supportive environment for family members to spend quality time ', 786, 'Campfire storytelling', 'Scavenger hunts', 'Craft workshop', 'Family talent show', 'Img/act-2.jpg'),
(8, 'Youth Camp', 'A youth camp is a recreational and educational program or facility specifically designed for young people, typically children and teenagers. These camps offer a range of activities and experiences to engage, educate, and entertain youth, often in a fun and structured environment. The following activities are available under this camp:', 380, 'Fun team building day', 'Team strength finder', 'Sports and atletics', 'Workshop and skill building', 'Img/act-1.jpg'),
(9, 'Kids Leadership Camp', 'A kids leadership camp is a specialized program or camp designed to foster leadership skills and qualities in children. These camps aim to empower young participants with the knowledge and confidence needed to become effective leaders.', 475, 'Personality test', 'Public speaking', 'Goal setting', 'Outdoor Adventure', 'Img/act-6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `activities2`
--

CREATE TABLE `activities2` (
  `act_id` int(10) NOT NULL,
  `act_name` varchar(50) NOT NULL,
  `act_description` varchar(500) NOT NULL,
  `act_price` float NOT NULL,
  `info` varchar(20) NOT NULL,
  `act1` varchar(100) NOT NULL,
  `act2` varchar(100) NOT NULL,
  `act3` varchar(100) NOT NULL,
  `act4` varchar(100) NOT NULL,
  `act_img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activities2`
--

INSERT INTO `activities2` (`act_id`, `act_name`, `act_description`, `act_price`, `info`, `act1`, `act2`, `act3`, `act4`, `act_img`) VALUES
(1, 'Holiday Club', 'A holiday club camp is a recreational program designed to provide children and sometimes adults with organized and supervised activities during school holidays or vacation periods. These camps typically offer a range of activities, including sports, arts and crafts, outdoor adventures, educational workshops, and more. The following activities are available under this camp.', 320, 'Per Person', 'Outdoor Exploration', 'Puzzle and Board Games', 'Community Service Projects', 'Group Challenges', 'Img/footer-background-1.jpg'),
(2, 'Team Building', 'Team building is a process or activity aimed at improving the cohesiveness, collaboration, and effectiveness of a group or team. It involves a range of exercises, challenges, and experiences designed to promote better communication, trust, problem-solving, and interpersonal relationships among team members.\r\n', 150, 'Per Team of 5', 'Human Knot', 'Team Sports', 'Obstacle Course', 'Puzzle Races', 'Img/campsite2.jpg'),
(3, 'Our Grounds', 'Camping grounds, also known as campgrounds or campsites, are designated areas where individuals or groups can set up temporary shelters, such as tents or  for outdoor recreational activities', 450, 'For A Day', '', '', '', '', 'Img/Booking/back6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `Admin` varchar(50) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `Admin`, `admin_email`, `password`) VALUES
(1460, 'admin', 'collenmanti@outlook.com', '1234'),
(9444, 'Collen', 'Collen@gmail.com', 'Colls'),
(37080, 'admin', 'solocresmanti@gmail.com', '1111');

-- --------------------------------------------------------

--
-- Table structure for table `blocked_dates`
--

CREATE TABLE `blocked_dates` (
  `id` int(11) NOT NULL,
  `blocked_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(10) NOT NULL,
  `Activity_Name` varchar(255) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Check_in_Date` date NOT NULL,
  `Check_out_Date` date NOT NULL,
  `Number_Of_People` int(11) NOT NULL,
  `catering_included` varchar(100) NOT NULL,
  `status` varchar(125) NOT NULL COMMENT 'Pending Payment|Approved|Complete|\r\nDenied|Cancelled',
  `user_id` int(10) NOT NULL,
  `booking_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `Activity_Name`, `Price`, `Check_in_Date`, `Check_out_Date`, `Number_Of_People`, `catering_included`, `status`, `user_id`, `booking_date`) VALUES
(61, 'Adventure Camp', 1540.00, '2023-11-10', '2023-11-12', 2, 'Yes', 'Pending Payment', 37126, '2023-11-02 18:14:41'),
(62, 'Adventure Camp', 1540.00, '2023-11-10', '2023-11-12', 2, 'Yes', 'Pending Payment', 37126, '2023-11-06 18:14:41'),
(64, 'Family Bonds Camp', 13752.00, '2023-11-15', '2023-11-19', 3, 'No', 'Pending Payment', 37126, '2023-11-06 18:14:41'),
(68, 'Adventure Camp', 580.00, '2023-11-09', '2023-11-11', 2, 'No', 'Pending Payment', 55039, '2023-11-06 18:14:41'),
(69, 'Family Bonds Camp', 11790.00, '2023-11-08', '2023-11-11', 5, 'No', 'Pending Payment', 8408, '2023-11-06 18:14:41'),
(70, 'Adventure Camp', 770.00, '2023-11-16', '2023-11-17', 2, 'Yes', 'Pending Payment', 55039, '2023-11-06 18:14:41'),
(74, 'Adventure Camp', 2900.00, '2023-11-14', '2023-11-24', 2, 'No', 'Pending Payment', 55039, '2023-11-06 18:14:41'),
(75, 'Adventure Camp', 2900.00, '2023-11-14', '2023-11-24', 2, 'No', 'Pending Payment', 55039, '2023-11-06 18:14:41'),
(76, 'Adventure Camp', 2900.00, '2023-11-14', '2023-11-24', 2, 'No', 'Pending Payment', 55039, '2023-11-06 18:14:41'),
(77, 'Adventure Camp', 2900.00, '2023-11-14', '2023-11-24', 2, 'No', 'Pending Payment', 55039, '2023-11-06 18:14:41'),
(78, 'Adventure Camp', 1540.00, '2023-11-08', '2023-11-10', 2, 'Yes', 'Pending Payment', 55039, '2023-11-06 18:14:41');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(150) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `Number` int(250) NOT NULL,
  `Alt_Number` int(250) NOT NULL,
  `Email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `Address`, `Number`, `Alt_Number`, `Email`) VALUES
(1, '117, 10th avenue, Edenvale', 75489662, 145789689, 'solocresmanti@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `event_date` date NOT NULL,
  `event_type` enum('admin_event','user_event') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_date`, `event_type`) VALUES
(21, '2023-11-09', 'admin_event'),
(22, '2023-11-11', 'admin_event'),
(23, '2023-11-16', 'admin_event'),
(24, '2023-11-18', 'admin_event');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `item_number` varchar(50) DEFAULT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` float(10,2) NOT NULL,
  `item_price_currency` varchar(10) NOT NULL,
  `paid_amount` float(10,2) NOT NULL,
  `paid_amount_currency` varchar(10) NOT NULL,
  `txn_id` varchar(100) NOT NULL,
  `checkout_session_id` varchar(255) NOT NULL,
  `payment_status` varchar(25) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `item_number`, `item_name`, `item_price`, `item_price_currency`, `paid_amount`, `paid_amount_currency`, `txn_id`, `checkout_session_id`, `payment_status`, `created`, `modified`) VALUES
(1, 'test', 'Reloventura@gmail.com', '1', 'Activity Type 1', 145.00, 'USD', 145.00, 'usd', 'pi_3JvaOFIuhitIP6cR0FEnom0H', 'cs_test_a1TndHS3IhW2KTTT06PTXLrsz0eU9qC1XvrFn5pCLATtSN30VNRyOlozsd', 'succeeded', '2021-11-14 10:03:12', '2021-11-14 10:03:12');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `booking_id` int(10) NOT NULL,
  `payment_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `payment_status` enum('Pending','Completed','Failed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` float(10,2) NOT NULL,
  `currency` varchar(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active | 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`, `currency`, `status`) VALUES
(1, 'Activity Type 1', '', 145.00, 'USD', 1);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `ReviewID` int(11) NOT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `ReviewText` text DEFAULT NULL,
  `Rating` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`ReviewID`, `FirstName`, `LastName`, `ReviewText`, `Rating`) VALUES
(24, 'Atlehang', 'Semela', 'Review', 'Moderate'),
(25, 'Atlehang', 'Semela', 'Review', 'Bad'),
(26, 'Spiral', 'Manti', '1200', 'Moderate'),
(27, 'Collen', 'Manti', '1200', 'Very_Bad');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `user_number` varchar(15) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `verify_token` varchar(200) NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 0 COMMENT '0=no, 1=yes',
  `Signup_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_number`, `Email`, `password`, `verify_token`, `status`, `Signup_date`) VALUES
(8408, 'frank', '0000000000', 'kalasamwenda4@gmail.com', '4b107f83b7daadb802d90b2922946716', '0b517957d6a59f90f4c043f835aff8fb', 1, '2023-11-06 13:57:44'),
(9090, 'david', '0679319492', 'kalasamwenda3@gmail.com', 'cf53a6a84f0ef69bc07abb4e4eee64b8', '055ca81720cbca18a25f96e13b32c049', 0, '2023-11-03 09:55:54'),
(9865, 'derick', '0812346744', 'semela@gmail.com', '2ac9cb7dc02b3c0083eb70898e549b63', '7471cb1837331c141ca0b2d44d27227c', 0, '2023-11-02 12:06:49'),
(11574, 'Dionice Diogo', '0631234683', 'dionicediogo96@gmail.com', '659cd2877321e27ebddcb13190e89a2b', '6698e163baac783be80e50fd0bb25998', 0, '2023-11-06 12:00:55'),
(33878, 'Njabulo', '0123456789', 'colourerrclrr@gmail.com', '198330a9b1eb29bb1a4adb4690ff5e80', 'd1f337a3b9b350e1a92b420d688bcd1b', 0, '2023-11-01 14:06:14'),
(37126, 'collen', '0178524455', 'collenmanti@outlook.com', '2ee83b219171de95fa1c03418e51fe7d', '0e73e62dbe12066d2e53919ab4bc785e', 1, '2023-11-04 20:52:43'),
(55039, 'derick', '0178524455', 'solocresmanti@gmail.com', '2ee83b219171de95fa1c03418e51fe7d', 'ec2205cad957c2a3508c89ab2dddbecb', 1, '2023-11-07 10:34:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`act_id`);

--
-- Indexes for table `activities2`
--
ALTER TABLE `activities2`
  ADD PRIMARY KEY (`act_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `blocked_dates`
--
ALTER TABLE `blocked_dates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `userid` (`user_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `booking_id` (`booking_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`ReviewID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `act_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `activities2`
--
ALTER TABLE `activities2`
  MODIFY `act_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94852;

--
-- AUTO_INCREMENT for table `blocked_dates`
--
ALTER TABLE `blocked_dates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `ReviewID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98293;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`booking_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
