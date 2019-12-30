-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2019 at 08:16 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelers_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(110) NOT NULL,
  `name` varchar(110) NOT NULL,
  `email` varchar(110) NOT NULL,
  `phone` varchar(110) NOT NULL,
  `gender` varchar(110) NOT NULL,
  `password` varchar(110) NOT NULL,
  `profile_pic` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `phone`, `gender`, `password`, `profile_pic`) VALUES
(1, 'admin', 'admin@travelers.com', '01818188181', 'male', '123456', 'about.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `description` longtext NOT NULL,
  `location` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `date` varchar(50) NOT NULL,
  `postby` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `catagory` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `location`, `image`, `date`, `postby`, `name`, `catagory`, `status`) VALUES
(2, 'COX\'S BAZAR', 'Cox\'s Bazar town with an area of 6.85 km2 (2.64 sq mi), is located at 21.583333°N 92.016667°E and bounded by Bakkhali River on the north and East, Bay of Bengal in the West, and Jhilwanj Union in the south.[15]\r\n\r\nThe climate of Bangladesh is mostly determined by its location in the tropical monsoon region: high temperature, heavy rainfall, generally excessive humidity, and distinct seasonal variations.[16] The climate of Cox\'s bazar is mostly similar to the rest of the country. It is further characterised by the location in the coastal area. The annual average temperature in Cox\'s Bazar remains at about a maximum of 34.8 °C (94.6 °F) and a minimum of 16.1 °C (61.0 °F). The average amount of rainfall remains at 3,524 mm (138.7 in).', 'Cox bazar', 'images/coxsbazar.jpg', '10 Sep 2019', 'farhantanvin@gmail.com', 'farhan', 'blog', '1'),
(4, 'Sylhet ', 'The hinterland of the Sylhet valley is the largest oil and gas-producing region in Bangladesh. It is also the largest hub of tea production in Bangladesh. It is notable for its high-quality cane and agarwood.[4][10] The city is served by the Osmani International Airport which is named after General M A G Osmani, the Commander of the Bangladesh Liberation Forces. People from Sylhet form a significant portion of the Bangladeshi diaspora, particularly in the United Kingdom and the United States, as well as other countries in the Middle East.', 'shylet', 'images/sylhet.jpg', '10 sep 2019', 'farhantanvin@gmail.com', 'farhan', 'blog', '1'),
(11, 'Rangamati', 'From Chittagong a 77 kilometres (48 mi) road leads to Rangamati. The township is located on the western bank of the Kaptai lake. Rangamati is a holiday destination because of its landscape, scenic beauty, lake, indigenous groups (Chakma, Marma, Tripura, Pangkhua etc.), flora and fauna, indigenous museum, hanging bridge etc.', 'Rangamti', 'images/rangamati.jpg', '2019-11-05', 'farhantanvin@gmail.com', 'farhantanvin', 'blog', '1'),
(13, 'St. Martin\'s Island', 'Most of the island\'s approximately 3,700[5] inhabitants live primarily from fishing. The other staple crops are rice and coconut. Being very common on the island, algae are collected, dried, and exported to Myanmar. Between October and April, the fishermen from neighboring areas bring their caught fishes to the island\'s temporary wholesale market. However, imports of chicken, meat and other foods come in from the mainland Bangladesh and Myanmar. As the centre and the south are mainly farmland and makeshift huts, most of the permanent structures are around the far north.\r\n\r\nDuring the rainy season, because of the dangerous conditions on the Bay of Bengal, the inhabitants have no scope to go to the mainland (Teknaf) and their life can become dangerous. There is a hospital on the island, but in the past there has often been no doctor.', 'saint martin', 'images/saintmarten.jpg', '2019-11-05', 'farhantanvin@gmail.com', 'farhantanvin', 'blog', '1'),
(17, 'new', 'lol', 'new', 'images/portfolio_11.jpg', '2019-12-20', 'farhantanvin@gmail.com', 'farhan', 'blog', '0'),
(18, 'Kuakata', 'Located just a short distance from Barisal town, Kuakata is famous for giving tourists the opportunity to witness sunrise and sunset from the same spot. Along with that, the multitudes of crisp, clean and white sandy beaches are a welcome relief from the usual hustle and bustle of city life. Whilst you’re there, also don’t forget to gorge yourself on amazing local cuisine and fresh seafood', 'Barishal', 'images/climate.jpg', '2019-12-21', 'test@gmail.com', 'test', 'blog', '0'),
(20, 'hh', 'hh', 'hh', 'images/b3.png', '2019-12-30', 'farhantanvin@gmail.com', 'farhan', 'blog', '0');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(30) NOT NULL,
  `eventid` varchar(30) NOT NULL,
  `eventtitle` varchar(100) NOT NULL,
  `agencyname` varchar(100) NOT NULL,
  `angencies_email` varchar(50) NOT NULL,
  `bookedby` varchar(100) NOT NULL,
  `bookedby_name` varchar(100) NOT NULL,
  `date` varchar(50) NOT NULL,
  `booking_count` varchar(50) NOT NULL,
  `cost` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `eventid`, `eventtitle`, `agencyname`, `angencies_email`, `bookedby`, `bookedby_name`, `date`, `booking_count`, `cost`) VALUES
(7, '1', 'Bandarban District\r\n', 'RatulBD', 'ratul@gmail.com', 'test@gmail.com', 'test', '2019-12-21', '2', '10000'),
(12, '1', 'Bandarban District\r\n', 'RatulBD', 'ratul@gmail.com', 'farhantanvin@gmail.com', 'farhan', '2019-12-21', '3', '15000'),
(13, '2', 'Chittagong Division', 'FarhanBD', 'farhantanvin@gmail.com', 'farhantanvin@gmail.com', 'farhan', '2019-12-22', '3', '9000');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(20) NOT NULL,
  `text` mediumtext NOT NULL,
  `postby` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `postid` varchar(30) NOT NULL,
  `blogpostemail` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `text`, `postby`, `name`, `postid`, `blogpostemail`, `date`) VALUES
(15, 'hello', 'farhantanvin@gmail.com', 'farhantanvin', '2', 'farhantanvin@gmail.com', '2019-11-05'),
(16, 'heeeey nice blog', 'ratul@gmail.com', 'ratul', '2', 'farhantanvin@gmail.com', '2019-11-05'),
(17, 'heheuue\r\n', 'ratul@gmail.com', 'ratul', '2', 'farhantanvin@gmail.com', '2019-11-06'),
(18, 'hey', 'farhantanvin@gmail.com', 'farhan', '17', 'farhantanvin@gmail.com', '2019-12-20'),
(19, 'hahahaha', 'farhantanvin@gmail.com', 'farhan', '17', 'farhantanvin@gmail.com', '2019-12-20'),
(20, 'lol', 'test@gmail.com', 'test', '17', 'farhantanvin@gmail.com', '2019-12-20'),
(21, 'goood', 'farhantanvin@gmail.com', 'farhan', '4', 'farhantanvin@gmail.com', '2019-12-22'),
(22, 'jdhhd', 'farhantanvin@gmail.com', 'farhan', '2', 'farhantanvin@gmail.com', '2019-12-22'),
(23, 'lol', 'farhantanvin@gmail.com', 'farhan', '2', 'farhantanvin@gmail.com', '2019-12-22'),
(24, 'hheerh', 'farhantanvin@gmail.com', 'farhan', '2', 'farhantanvin@gmail.com', '2019-12-23');

-- --------------------------------------------------------

--
-- Table structure for table `declined_events`
--

CREATE TABLE `declined_events` (
  `id` int(20) NOT NULL,
  `tittle` varchar(50) NOT NULL,
  `postby` varchar(50) NOT NULL,
  `agencyname` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `description` mediumtext NOT NULL,
  `person_capacity` varchar(50) NOT NULL,
  `cost_per_person` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `catagory` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `declined_events`
--

INSERT INTO `declined_events` (`id`, `tittle`, `postby`, `agencyname`, `place`, `date`, `duration`, `description`, `person_capacity`, `cost_per_person`, `image`, `catagory`, `status`) VALUES
(3, 'hey', 'ratul@gmail.com', 'aaa', 'm', '2019-11-14', '3', 'ghh', '40', '10', 'images/portfolio_01.jpg', 'event', '0'),
(4, 'hhhh', 'ratul@gmail.com', 'hhh', 'hh', '2019-11-06', '10', ' fff', '4000', '50', 'images/portfolio_01.jpg', 'event', '0'),
(5, 'hhhh', 'ratul@gmail.com', 'hhh', 'hh', '2019-11-06', '10', ' fff', '4000', '50', 'images/portfolio_01.jpg', 'events', '0'),
(6, 'hey', 'ratul@gmail.com', 'Ratul', 'dhaka 08', '2019-12-03', '6', 'hh', '10', '6', 'images/climate.jpg', 'events', '0');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `postby` varchar(50) NOT NULL,
  `agencyname` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `date` varchar(30) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `description` longtext NOT NULL,
  `person_capacity` varchar(20) NOT NULL,
  `cost_per_person` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `catagory` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `postby`, `agencyname`, `place`, `date`, `duration`, `description`, `person_capacity`, `cost_per_person`, `image`, `catagory`, `status`) VALUES
(1, 'Bandarban District\r\n', 'ratul@gmail.com', 'RatulBD', 'Cos\'x Bazar', '10 Nov 2019', '', 'Bandarban town is the hometown of the Bohmong Chief (currently King, or Raja, U Cho Prue Marma) who is the head of the Bohmong Circle. Of the other hill districts, Rangamati is the Chakma Circle, headed by Raja Devasish Roy and Khagrachari is the Mong Circle, headed by Raja Sachingprue Marma. Bandarban is regarded as one of the most attractive travel destinations in Bangladesh. It also is the administrative headquarters of Bandarban district, which has turned into one of the most exotic tourist attractions in Bangladesh.', '17', '5000', 'images/bandarban.jpg', 'events', '1'),
(2, 'Chittagong Division', 'farhantanvin@gmail.com', 'FarhanBD', 'Chittagong', '10 Oct 2019', '', 'Chittagong Division, officially known as Chattogram Division,[2] is geographically the largest of the eight administrative divisions of Bangladesh. It covers the south-easternmost areas of the country, with a total area of 33,771.18 km2 (13,039.13 sq mi)[3] and a population at the 2011 census of 28,423,019. The administrative division includes mainland Chittagong District, neighbouring districts and the Chittagong Hill Tracts.\r\n\r\nChittagong Division is home to Cox\'s Bazar, the longest natural sea beach in the world.;[4][5][6] as well as St. Martin\'s Island, Bangladesh\'s sole coral reef.', '37', '3000', 'images/chittagong.jpg', 'events', '1'),
(3, 'shylet', 'ratul@gmail.com', 'aaa', 'dhaka', '2019-11-14', '3', 'shylet', '40', '6000', 'images/sylhet.jpg', 'events', '1');

-- --------------------------------------------------------

--
-- Table structure for table `freaks`
--

CREATE TABLE `freaks` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `profile_pic` varchar(100) NOT NULL,
  `layout` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `freaks`
--

INSERT INTO `freaks` (`id`, `name`, `email`, `phone`, `gender`, `password`, `profile_pic`, `layout`, `status`) VALUES
(14, 'farhan', 'farhantanvin@gmail.com', '01676518531', 'male', '123456', 'images/team_01.jpg', '/css/freaks1.css', '1'),
(15, 'test', 'test@gmail.com', '01676518531', 'male', '123', 'images/about.jpg', '/css/freaks.css', '1'),
(19, 'new', 'new@gmail.com', '01676518531', 'male', '123', 'images\\freaks.png', '/css/freaks1.css', '1'),
(20, 'hey', 'hey@gmail.com', '01676518531', 'male', '123', 'images\\freaks.png', '/css/freaks.css', '1');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(10) NOT NULL,
  `sender` varchar(1000) NOT NULL,
  `sendername` varchar(50) NOT NULL,
  `reciever` varchar(1000) NOT NULL,
  `message` varchar(10000) NOT NULL,
  `date` varchar(1000) NOT NULL,
  `read_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `sender`, `sendername`, `reciever`, `message`, `date`, `read_status`) VALUES
(13, 'test@gmail.com', 'test', 'farhantanvin@gmail.com', 'hey broh', '2019-12-21 12:12', '0'),
(14, 'test@gmail.com', 'test', 'ratul@gmail.com', 'hey man', '2019-12-21 12:12', '0'),
(16, 'farhantanvin@gmail.com', 'farhan', 'ratul@gmail.com', 'gg', '2019-12-23 04:12', '0'),
(17, 'farhantanvin@gmail.com', 'farhan', 'admin@travelers.com', 'hello are u there please solve a problem ..', '2019-12-30 06:12', '1'),
(18, 'admin@travelers.com', 'admin', 'farhantanvin@gmail.com', 'okay', '2019-12-30 06:12', '0'),
(19, 'farhantanvin@gmail.com', 'farhan', 'admin@travelers.com', 'thanks', '2019-12-30 06:12', '0'),
(20, 'ratul@gmail.com', 'ratul', 'farhantanvin@gmail.com', 'hh', '2019-12-30 07:12:47', '0'),
(21, 'ratul@gmail.com', 'ratul', 'admin@travelers.com', 'heeeeeey admin', '2019-12-30 07:12:07', '0'),
(22, 'admin@travelers.com', 'admin', 'ratul@gmail.com', 'hey', '2019-12-30 07:12', '0');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(30) NOT NULL,
  `text` varchar(1000) NOT NULL,
  `eventid` varchar(50) NOT NULL,
  `postby` varchar(50) NOT NULL,
  `date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `text`, `eventid`, `postby`, `date`) VALUES
(4, 'report to admin', '1', 'farhantanvin@gmail.com', '2019-11-06'),
(5, 'report to admin', '1', 'farhantanvin@gmail.com', '2019-12-18');

-- --------------------------------------------------------

--
-- Table structure for table `travel_agencies`
--

CREATE TABLE `travel_agencies` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `agency_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `profile_pic` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `travel_agencies`
--

INSERT INTO `travel_agencies` (`id`, `name`, `agency_name`, `email`, `phone`, `gender`, `password`, `profile_pic`, `status`) VALUES
(5, 'ratul', 'Ratul', 'ratul@gmail.com', '01676518531', 'male', '123456', 'images/team_03.jpg', '1'),
(6, 'farhan tanvin', 'fff', 'ratul11@gmail.com', '00', 'Select your Gender', '11', 'images\\freaks.png', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `profile_pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`, `status`, `profile_pic`) VALUES
(19, 'farhan', 'farhantanvin@gmail.com', '123456', 'freaks', '1', ''),
(20, 'ratul', 'ratul@gmail.com', '123456', 'agencies', '1', ''),
(21, 'admin', 'admin@travelers.com', '123456', 'admin', '1', 'about.jpg'),
(24, 'test', 'test@gmail.com', '123', 'freaks', '1', ''),
(26, 'rr', 'ratul11@gmail.com', '11', 'agencies', '1', ''),
(30, 'new', 'new@gmail.com', '123', 'freaks', '1', ''),
(31, 'hey', 'hey@gmail.com', '123', 'freaks', '1', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `declined_events`
--
ALTER TABLE `declined_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `freaks`
--
ALTER TABLE `freaks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travel_agencies`
--
ALTER TABLE `travel_agencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `declined_events`
--
ALTER TABLE `declined_events`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `freaks`
--
ALTER TABLE `freaks`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `travel_agencies`
--
ALTER TABLE `travel_agencies`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
