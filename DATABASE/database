-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 05:05 PM
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
-- Database: `vehicle_rental_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `addstaff`
--

CREATE TABLE `addstaff` (
  `staffID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addstaff`
--

INSERT INTO `addstaff` (`staffID`, `Name`, `Gender`, `DOB`, `Address`, `Email`, `Phone_no`) VALUES
(1, 'Saman Lakshan mawitigama', 'Male', '1990-07-30', '298/A, Kadana Road, Gampaha', 'saman@gmail.com', 765478634),
(2, 'Lahiru Lakshana Perera', 'Male', '1992-04-05', '45/B, Maradana Road, Colombo', 'lakshan@gmail.com', 778965432),
(3, 'Sagara Bandara', 'Male', '1989-05-04', '78/1, Mabima Road, Biyagama', 'sagara@gmail.com', 712343234),
(4, 'Malidu Hashan Fonseka', 'Male', '1990-04-03', '345/3, Sadaham Mawatha, Malabe', 'maliduhashan@gmail.com', 786453456),
(5, 'Amisha Fernando', 'Female', '1988-09-09', '76/B, Weerawila Road, Malabe', 'amisha92@gmail.com', 718234532);

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `admin_ID` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`admin_ID`, `user_name`, `email`, `phone_number`, `password`) VALUES
(1, 'Induni  Pathirana', 'induni@gmail.com', 713487298, 'goodLuck23'),
(2, 'Aloka Munasinhe', 'aloka@email.com', 774561239, '28599me'),
(3, 'Kasun De Silva	', 'kasun123@gmail.com', 754278126, 'sund789'),
(4, 'Pramuditha Hathurusinhe', 'pramuditha@gmail.com', 786235678, 'athurumithuru'),
(5, 'Sithmi Perera', 'sithmirp@gmail.com', 704572916, 'sunandmoon');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paymentID` int(20) NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `NIC` int(20) NOT NULL,
  `cNo` int(20) NOT NULL,
  `email` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `name` varchar(150) NOT NULL,
  `cardNo` int(50) NOT NULL,
  `CVV` int(20) NOT NULL,
  `pDate` varchar(50) NOT NULL,
  `rDate` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `note` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`paymentID`, `fullname`, `NIC`, `cNo`, `email`, `address`, `name`, `cardNo`, `CVV`, `pDate`, `rDate`, `location`, `note`) VALUES
(1, 'Tharindu Lakshan Perera', 908765745, 789656765, 'tharindu@gmail.com', '473/H, Malwatte Road, Biyagama', 'THARINDU L.P', 2147483647, 7005, '05/08/2023', '05/06/2023', 'Biyagama', ''),
(2, 'Malaka Niroshana Bandara', 856473489, 718943234, 'malaka@gmail.com', '34/D, Mapitigama Road, Malwana', 'N.B.MALAKA', 2147484347, 705, '10/05/2023', '12/05/2023', 'Biyagama', '');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `CID` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `mobile` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `profile` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`CID`, `firstName`, `lastName`, `gender`, `mobile`, `email`, `address`, `dob`, `uname`, `pwd`, `profile`) VALUES
(1, 'Tharindu Lakshan', 'Perera', 'Male', 789656765, 'tharindu@gmail.com', '473/H, Malwatte Road, Biyagama', '1990-09-08', 'Tharindu', '123@#56', 0x54686172696e6475204c616b7368616e2e6a706567),
(2, 'Malaka Niroshana', 'Bandara', 'Male', 718943234, 'malaka@gmail.com', '34/D, Mapitigama Road, Malwana', '1985-07-30', 'Malaka', '34@malaka', 0x4d616c616b61204e69726f7368616e612e6a7067),
(3, 'Samanali', 'Fonseka', 'Female', 782312321, 'samanali90@gmail.com', '45/A, Kotahena Street, Colombo', '1990-06-05', 'Samanali', 'san@34', 0x53616d616e616c6920466f6e73656b612e6a7067),
(4, 'Arun', 'Surikrishnan', 'Male', 772346212, 'arunasuri@gmail.com', '35/6/B Old Road, Pannipitiya', '1997-07-07', 'Aruna', 'suri@90', 0x4172756e6120537572696b726973686e616e2e6a706567),
(5, 'Kasun Lakshan', 'De Dilva', 'Male', 786767543, 'kasun92@gmail.com', '372/B Sanhidapura Road, Kalutara', '1992-01-01', 'Kasun', 'K@#@123', 0x4b6173756e204c616b7368616e2e706e67),
(6, 'Julia', 'Fernando', 'Female', 776765432, 'julia@gmail.com', '34/A, Mangala Road, Colombo', '1988-02-03', 'Julia', 'julia@#23', 0x4a756c6961204665726e616e646f2e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `register_owner`
--

CREATE TABLE `register_owner` (
  `VID` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Mobile` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `profile` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register_owner`
--

INSERT INTO `register_owner` (`VID`, `firstName`, `lastName`, `Gender`, `Mobile`, `Email`, `Address`, `DOB`, `uname`, `pwd`, `profile`) VALUES
(1, 'Chamath Nilupul', 'Bandara', 'Male', 776565432, 'chamath@gmail.com', '23/B, Wijaya Road, Molligoda', '1988-09-09', 'Chamath', '12@#45', 0x4368616d617468204e696c7570756c2e6a7067),
(2, 'Rakitha Lakshan', 'Peris', 'Male', 786567654, 'rakitha@gmail.com', '8/12, Dehiwala, Road, Maharagama', '1985-04-02', 'Rakitha', 'rakitha@#', 0x52616b69746861204c616b7368616e2e6a706567),
(3, ' Oshada Nirmal', 'Bandara', 'Male', 778656765, 'oshadabandara@gmail.com', '30/108, Katuwala Road, Maharagama', '1986-10-09', 'Nirmal', 'nim123', 0x4f7368616461204e69726d616c2e6a7067),
(4, 'Saranga', 'Witharana', 'Male', 712321212, 'saranga80@gmail.com', '57/8/B, Kanatta Road, Delkanda', '1980-01-02', 'Saranga', '123@#san', 0x536172616e6761205769746172616e612e6a706567),
(5, 'Isuru Malinda', 'Fernando', 'Male', 776789543, 'isuru@gmail.com', '30/8, Ambuldeniya Road, Nugegoda', '1980-08-06', 'Isuru', '123@#', 0x4973757275204d616c696e64612e6a706567),
(6, 'Arjuna Nirmal', 'Fonseka', 'Male', 789765431, 'arjun@gmail.com', '56/A, Mawila Road, Gampaha', '1989-09-25', 'Arjuna', '12@#ar', 0x41726a756e61204e69726d616c20466f6e73656b612e6a706567);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `Reservation_ID` int(11) NOT NULL,
  `Customer_name` varchar(250) NOT NULL,
  `Pickup_date` date NOT NULL,
  `Pickup_time` time NOT NULL,
  `Return_date` date NOT NULL,
  `Return_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`Reservation_ID`, `Customer_name`, `Pickup_date`, `Pickup_time`, `Return_date`, `Return_time`) VALUES
(1, 'Tharindu Lakshan Perera', '2023-06-05', '15:15:00', '2023-08-05', '15:30:00'),
(2, 'Malaka Niroshana Bandara', '2023-05-10', '16:15:00', '2023-05-10', '17:30:00'),
(3, 'Samanali Fonseka', '2023-05-20', '09:30:00', '2023-05-25', '18:30:00'),
(4, 'Arun Surikrishnan', '2023-06-06', '14:00:00', '2023-06-08', '18:08:00'),
(5, 'Kasun Lakshan De Dilva', '2023-06-10', '10:30:00', '2023-06-13', '18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `v_id` int(11) NOT NULL,
  `v_category` varchar(50) NOT NULL,
  `vehicle_num` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `v_description` varchar(255) NOT NULL,
  `hour` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `v_image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`v_id`, `v_category`, `vehicle_num`, `model`, `v_description`, `hour`, `day`, `v_image`) VALUES
(1, 'Car', 'QL9904', 'BMW X4', 'A/C, CD Player, Leather Interior', 800, 30, 0x626d772058342e6a7067),
(2, 'Van', 'WP2460', 'Toyota KDH', 'extremely comfortable with extra space for passengers', 1000, 20000, 0x546f796f7461204b44482e6a706567),
(3, 'Jeep', 'EF5606', 'Land Rover', 'Luxury SUVs and 4x4 Vehicles', 1500, 20000, 0x6c616e642d726f7665722d646566656e6465722e6a7067),
(4, 'Bus', 'BN3400', 'Toyota Coaster', 'Power Steering, A/C', 1500, 15000, 0x546f796f74615f436f61737465725f6275732e6a7067),
(5, 'Lorry', 'MH246', 'Tipper Truck', 'Well Maintain', 1000, 10000, 0x6c6f727272792e6a7067),
(6, 'Car', 'CE578', 'Mercedes-Benz', 'Long wheel Base, Leather Int,A/C, Mood Lighting', 800, 35000, 0x4d657263656465732d42656e7a2e6a7067);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addstaff`
--
ALTER TABLE `addstaff`
  ADD PRIMARY KEY (`staffID`);

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`admin_ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentID`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `register_owner`
--
ALTER TABLE `register_owner`
  ADD PRIMARY KEY (`VID`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`Reservation_ID`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addstaff`
--
ALTER TABLE `addstaff`
  MODIFY `staffID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `paymentID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `CID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `register_owner`
--
ALTER TABLE `register_owner`
  MODIFY `VID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `Reservation_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
