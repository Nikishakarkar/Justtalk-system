-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 07, 2017 at 04:27 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `justtalk`
--
CREATE DATABASE IF NOT EXISTS `justtalk` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `justtalk`;

-- --------------------------------------------------------

--
-- Table structure for table `change_details`
--

CREATE TABLE IF NOT EXISTS `change_details` (
  `u_id` varchar(50) NOT NULL,
  `changed_field` varchar(50) NOT NULL,
  `old_value` varchar(1024) NOT NULL,
  `c_time` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `friend`
--

CREATE TABLE IF NOT EXISTS `friend` (
  `code` int(10) NOT NULL AUTO_INCREMENT,
  `u_id_from` varchar(50) NOT NULL,
  `u_id_to` varchar(50) NOT NULL,
  `relation` varchar(50) NOT NULL,
  `request_status` int(1) NOT NULL,
  `send_time` varchar(32) NOT NULL,
  `acc_del_time` varchar(32) NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `friend`
--

INSERT INTO `friend` (`code`, `u_id_from`, `u_id_to`, `relation`, `request_status`, `send_time`, `acc_del_time`) VALUES
(2, 'savlani.haresh@gmail.com', 'PrashantSolanki@gmail.com', 'friend', 0, '28-02-2017 02:25:57 pm', ''),
(3, 'savlani.haresh@gmail.com', 'JayPatel@gmail.com', 'friend', 1, '28-02-2017 02:26:07 pm', ''),
(4, 'savlani.haresh@gmail.com', 'JigneshThakkar@gmail.com', 'friend', 0, '28-02-2017 02:26:10 pm', ''),
(5, 'savlani.haresh@gmail.com', 'MaheshParmar@gmail.com', 'friend', 0, '28-02-2017 02:26:17 pm', ''),
(6, 'savlani.haresh@gmail.com', 'MayankChauhan@gmail.com', 'friend', 0, '28-02-2017 02:26:21 pm', ''),
(7, 'savlani.haresh@gmail.com', 'JaySheth@gmail.com', 'friend', 0, '01-03-2017 08:31:54 am', ''),
(8, 'savlani.haresh@gmail.com', 'NikunjSheth@gmail.com', 'friend', 0, '01-03-2017 08:56:48 am', '');

-- --------------------------------------------------------

--
-- Table structure for table `friend_seached`
--

CREATE TABLE IF NOT EXISTS `friend_seached` (
  `searching_id` varchar(50) NOT NULL,
  `searched_id` varchar(50) NOT NULL,
  `s_time` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `u_id` varchar(50) NOT NULL,
  `l_browser` varchar(50) NOT NULL,
  `l_location` varchar(50) NOT NULL,
  `l_session_created` varchar(32) NOT NULL,
  `l_session_expired` varchar(32) NOT NULL,
  `l_is_expired` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `m_id` int(20) NOT NULL AUTO_INCREMENT,
  `u_id_from` varchar(50) NOT NULL,
  `u_id_to` varchar(50) NOT NULL,
  `m_content` varchar(50) NOT NULL,
  `m_sent_time` varchar(32) NOT NULL,
  `m_delivered_time` varchar(32) NOT NULL,
  `m_read_time` varchar(32) NOT NULL,
  `m_status` int(1) NOT NULL,
  `m_delete_from_id` int(1) NOT NULL,
  `m_delete_to_id` int(1) NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`m_id`, `u_id_from`, `u_id_to`, `m_content`, `m_sent_time`, `m_delivered_time`, `m_read_time`, `m_status`, `m_delete_from_id`, `m_delete_to_id`) VALUES
(1, 'Savlani.Haresh@gmail.com', 'JayPatel@gmail.com', 'hi', '25-02-2017 05:42:54 am', '', '', 0, 0, 0),
(2, 'Savlani.Haresh@gmail.com', 'JayPatel@gmail.com', 'dfsfsdf', '25-02-2017 05:43:50 am', '', '', 0, 0, 0),
(3, 'Savlani.Haresh@gmail.com', 'JayPatel@gmail.com', 'what ', '25-02-2017 05:44:05 am', '', '', 0, 0, 0),
(4, 'Savlani.Haresh@gmail.com', 'JayPatel@gmail.com', 'hh', '25-02-2017 06:07:33 am', '', '', 0, 0, 0),
(5, 'Savlani.Haresh@gmail.com', 'JayPatel@gmail.com', 'hh', '25-02-2017 06:07:39 am', '', '', 0, 0, 0),
(6, 'Savlani.Haresh@gmail.com', 'JayPatel@gmail.com', 'dsfsd', '25-02-2017 06:08:02 am', '', '', 0, 0, 0),
(7, 'Savlani.Haresh@gmail.com', 'JayPatel@gmail.com', 'dfdsfk', '25-02-2017 06:09:35 am', '', '', 0, 0, 0),
(8, 'Savlani.Haresh@gmail.com', 'JayPatel@gmail.com', 'lsdfklk\r\n', '25-02-2017 06:09:38 am', '', '', 0, 0, 0),
(9, 'Savlani.Haresh@gmail.com', 'JayPatel@gmail.com', 'sfkl', '25-02-2017 06:09:40 am', '', '', 0, 0, 0),
(10, 'Savlani.Haresh@gmail.com', 'JayPatel@gmail.com', 'ksdjfkj', '25-02-2017 06:09:43 am', '', '', 0, 0, 0),
(11, 'Savlani.Haresh@gmail.com', 'JayPatel@gmail.com', 'sdjfksjdfkjsdfkj', '25-02-2017 06:09:45 am', '', '', 0, 0, 0),
(12, 'Savlani.Haresh@gmail.com', 'JayPatel@gmail.com', 'kksdjfkj\r\nsdfkjsd\r\n\r\n\r\ndkfjsd', '25-02-2017 06:09:52 am', '', '', 0, 0, 0),
(13, 'Savlani.Haresh@gmail.com', 'JayPatel@gmail.com', 'ksdjfkjsdk', '25-02-2017 06:09:58 am', '', '', 0, 0, 0),
(14, 'Savlani.Haresh@gmail.com', 'JayPatel@gmail.com', 'ksdjfkjsdf dsfsd\r\nkdsjfkdjs\r\nkjdfkj\r\n\r\n\r\nskdfj\r\n', '25-02-2017 06:10:07 am', '', '', 0, 0, 0),
(15, 'Savlani.Haresh@gmail.com', 'JayPatel@gmail.com', 'ksdjfkjsdf dsfsd\r\nkdsjfkdjs\r\nkjdfkj\r\n\r\n\r\nskdfj\r\n', '25-02-2017 06:10:52 am', '', '', 0, 0, 0),
(16, 'JayPatel@gmail.com', 'Savlani.Haresh@gmail.com', 'hi\r\n', '25-02-2017 06:13:00 am', '', '', 0, 0, 0),
(17, 'JayPatel@gmail.com', 'Savlani.Haresh@gmail.com', 'hi\r\n', '25-02-2017 06:39:37 am', '', '', 0, 0, 0),
(18, 'Savlani.Haresh@gmail.com', 'KiranPrarghi@gmail.com', 'jdskfj', '27-02-2017 04:23:05 am', '', '', 0, 0, 0),
(19, 'savlani.haresh@gmail.com', 'MiteshModi@gmail.com', 'huhdf\r\n', '28-02-2017 01:45:58 pm', '', '', 0, 0, 0),
(20, 'savlani.haresh@gmail.com', 'MiteshModi@gmail.com', 'dfdsf', '28-02-2017 01:46:03 pm', '', '', 0, 0, 0),
(21, 'savlani.haresh@gmail.com', 'JaySheth@gmail.com', 'juhyhkio', '01-03-2017 08:32:04 am', '', '', 0, 0, 0),
(22, 'savlani.haresh@gmail.com', 'YashDadia@gmail.com', 'hi', '02-03-2017 04:26:04 am', '', '', 0, 0, 0),
(23, 'savlani.haresh@gmail.com', 'YashDadia@gmail.com', 'Hello', '02-03-2017 04:26:10 am', '', '', 0, 0, 0),
(24, 'YashDadia@gmail.com', 'Savlani.Haresh@gmail.com', 'Whats up\r\n', '02-03-2017 04:27:11 am', '', '', 0, 0, 0),
(25, 'savlani.haresh@gmail.com', 'MiteshModi@gmail.com', 'ksjdfkjsdkfj\r\ndkfjkdsjf\r\n\r\n\r\n\r\n\r\ndfklsdfjskdjfksjd', '02-03-2017 04:49:34 pm', '', '', 0, 0, 0),
(26, 'savlani.haresh@gmail.com', 'MiteshModi@gmail.com', 'jjdf', '02-03-2017 05:00:43 pm', '', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE IF NOT EXISTS `otp` (
  `u_id` varchar(50) NOT NULL,
  `otp` int(6) NOT NULL,
  `o_time` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `otp`
--

INSERT INTO `otp` (`u_id`, `otp`, `o_time`) VALUES
('HareshSavlani@gmail.com', 224023, '23-02-2017 04:12:19 am'),
('MayankChauhan@gmail.com', 721024, '23-02-2017 04:12:32 am'),
('JayPatel@gmail.com', 734031, '23-02-2017 04:12:38 am'),
('JaySheth@gmail.com', 639027, '23-02-2017 04:12:52 am'),
('NikunjSheth@gmail.com', 236027, '23-02-2017 04:13:02 am'),
('YashDadia@gmail.com', 901029, '23-02-2017 04:13:15 am'),
('MaheshParmar@gmail.com', 962024, '23-02-2017 04:13:26 am'),
('PratikPatel@gmail.com', 627020, '23-02-2017 04:13:39 am'),
('PratikParmar@gmail.com', 640018, '23-02-2017 04:13:44 am'),
('PrashantPunani@gmail.com', 297004, '23-02-2017 04:13:56 am'),
('PrashantPatel@gmail.com', 327025, '23-02-2017 04:14:03 am'),
('PrashantSolanki@gmail.com', 700008, '23-02-2017 04:14:11 am'),
('JigneshThakkar@gmail.com', 805028, '23-02-2017 04:14:34 am'),
('MeetShah@gmail.com', 898007, '23-02-2017 04:14:43 am'),
('PunitPandya@gmail.com', 139016, '23-02-2017 04:14:54 am'),
('MiteshModi@gmail.com', 134020, '23-02-2017 04:15:02 am'),
('NileshModi@gmail.com', 615016, '23-02-2017 04:15:18 am'),
('KiranPrarghi@gmail.com', 460013, '23-02-2017 04:15:35 am'),
('AshokPatel@gmail.com', 155001, '23-02-2017 04:15:44 am'),
('RajivDixit@gmail.com', 536001, '23-02-2017 04:15:57 am');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `p_id` int(10) NOT NULL,
  `u_id` varchar(50) NOT NULL,
  `p_type` varchar(30) NOT NULL,
  `p_path` varchar(1024) NOT NULL,
  `p_time` varchar(32) NOT NULL,
  `p_delete` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `u_id` varchar(50) NOT NULL,
  `u_first_name` varchar(50) NOT NULL,
  `u_last_name` varchar(50) NOT NULL,
  `u_password` varchar(50) NOT NULL,
  `u_birthdate` varchar(32) NOT NULL,
  `u_gender` varchar(1) NOT NULL,
  `u_hometown` varchar(50) NOT NULL,
  `u_current_city` varchar(50) NOT NULL,
  `u_marital_status` varchar(20) NOT NULL,
  `u_about` varchar(512) NOT NULL,
  `u_time` varchar(32) NOT NULL,
  `u_delete` int(1) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_first_name`, `u_last_name`, `u_password`, `u_birthdate`, `u_gender`, `u_hometown`, `u_current_city`, `u_marital_status`, `u_about`, `u_time`, `u_delete`) VALUES
('AshokPatel@gmail.com', 'Ashok', 'Patel', 'Ashok123', '', 'M', '', '', '', '', '23-02-2017 04:15:44 am', 0),
('dsfsdfs@gmai', 'ddd', 'dfsds', 'dfsf', '', 'M', '', '', '', '', '', 0),
('JayPatel@gmail.com', 'Jay', 'Patel', 'Jay123', '', 'M', '', '', '', '', '23-02-2017 04:12:38 am', 0),
('JaySheth@gmail.com', 'Jay', 'Sheth', 'Jay123', '', 'M', '', '', '', '', '23-02-2017 04:12:52 am', 0),
('JigneshThakkar@gmail.com', 'Jignesh', 'Thakkar', 'Jignesh123', '', 'M', '', '', '', '', '23-02-2017 04:14:34 am', 0),
('KiranPrarghi@gmail.com', 'Kiran', 'Prarghi', 'Kiran123', '', 'M', '', '', '', '', '23-02-2017 04:15:35 am', 0),
('MaheshParmar@gmail.com', 'Mahesh', 'Parmar', 'Mahesh123', '', 'M', '', '', '', '', '23-02-2017 04:13:26 am', 0),
('MayankChauhan@gmail.com', 'Mayank', 'Chauhan', 'Mayank123', '', 'M', '', '', '', '', '23-02-2017 04:12:32 am', 0),
('MeetShah@gmail.com', 'Meet', 'Shah', 'Meet123', '', 'M', '', '', '', '', '23-02-2017 04:14:43 am', 0),
('MiteshModi@gmail.com', 'Mitesh', 'Modi', 'Mitesh123', '', 'M', '', '', '', '', '23-02-2017 04:15:02 am', 0),
('NikunjSheth@gmail.com', 'Nikunj', 'Sheth', 'Nikunj123', '', 'M', '', '', '', '', '23-02-2017 04:13:02 am', 0),
('NileshModi@gmail.com', 'Nilesh', 'Modi', 'Nilesh123', '', 'M', '', '', '', '', '23-02-2017 04:15:18 am', 0),
('PrashantPatel@gmail.com', 'Prashant', 'Patel', 'Prashant123', '', 'M', '', '', '', '', '23-02-2017 04:14:03 am', 0),
('PrashantPunani@gmail.com', 'Prashant', 'Punani', 'Prashant123', '', 'M', '', '', '', '', '23-02-2017 04:13:56 am', 0),
('PrashantSolanki@gmail.com', 'Prashant', 'Solanki', 'Prashant123', '', 'M', '', '', '', '', '23-02-2017 04:14:11 am', 0),
('PratikParmar@gmail.com', 'Pratik', 'Parmar', 'Pratik123', '', 'M', '', '', '', '', '23-02-2017 04:13:44 am', 0),
('PratikPatel@gmail.com', 'Pratik', 'Patel', 'Pratik123', '', 'M', '', '', '', '', '23-02-2017 04:13:39 am', 0),
('PunitPandya@gmail.com', 'Punit', 'Pandya', 'Punit123', '', 'M', '', '', '', '', '23-02-2017 04:14:54 am', 0),
('RajivDixit@gmail.com', 'Rajiv', 'Dixit', 'Rajiv123', '', 'M', '', '', '', '', '23-02-2017 04:15:57 am', 0),
('Savlani.Haresh@gmail.com', 'Haresh', 'Savlani', 'Haresh123', '', 'M', '', '', '', '', '23-02-2017 04:12:19 am', 0),
('YashDadia@gmail.com', 'Yash', 'Dadia', 'Yash123', '', 'M', '', '', '', '', '23-02-2017 04:13:15 am', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
