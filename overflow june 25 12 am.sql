-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2022 at 06:30 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `overflow`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `id` int(50) NOT NULL,
  `userid` int(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `address1` varchar(50) NOT NULL,
  `address2` varchar(50) NOT NULL,
  `town` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `postalcode` varchar(50) NOT NULL,
  `isDefault` int(2) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(50) NOT NULL,
  `incomingid` varchar(50) NOT NULL,
  `outgoingid` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `currentdate` varchar(50) NOT NULL,
  `currenttime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `incomingid`, `outgoingid`, `message`, `currentdate`, `currenttime`) VALUES
(157, 'user_1awelpOiQUmfZ0F7MxPg', 'user_nlQbSh1fCoFgrs7Ppkdw', 'yt', 'June 21, 2022', '4:33 am'),
(158, 'user_1awelpOiQUmfZ0F7MxPg', 'user_nlQbSh1fCoFgrs7Ppkdw', 'dsfsdf', 'June 21, 2022', '4:33 am'),
(159, 'user_1awelpOiQUmfZ0F7MxPg', 'user_nlQbSh1fCoFgrs7Ppkdw', 'fsdfs', 'June 21, 2022', '4:33 am'),
(160, 'user_1awelpOiQUmfZ0F7MxPg', 'user_nlQbSh1fCoFgrs7Ppkdw', 'fsd', 'June 21, 2022', '4:33 am'),
(161, 'user_1awelpOiQUmfZ0F7MxPg', 'user_nlQbSh1fCoFgrs7Ppkdw', 'dud\n', 'June 21, 2022', '4:46 am'),
(162, 'user_1awelpOiQUmfZ0F7MxPg', 'user_nlQbSh1fCoFgrs7Ppkdw', 'dsd', 'June 21, 2022', '4:46 am'),
(163, 'user_1awelpOiQUmfZ0F7MxPg', 'user_tai7y4KFhLVvNR5ePEOq', '23\n', 'June 21, 2022', '9:36 pm'),
(164, 'user_1awelpOiQUmfZ0F7MxPg', 'user_tai7y4KFhLVvNR5ePEOq', 'gh', 'June 21, 2022', '9:36 pm'),
(165, 'user_1awelpOiQUmfZ0F7MxPg', 'user_rN0mFLqVESo9nvx68dIY', 'fjfj', 'June 23, 2022', '10:34 pm'),
(166, 'user_1awelpOiQUmfZ0F7MxPg', 'user_rN0mFLqVESo9nvx68dIY', 'jfgjfj', 'June 23, 2022', '10:34 pm'),
(167, 'user_1awelpOiQUmfZ0F7MxPg', 'user_rN0mFLqVESo9nvx68dIY', 'jg', 'June 23, 2022', '10:34 pm'),
(168, 'user_1awelpOiQUmfZ0F7MxPg', 'user_rN0mFLqVESo9nvx68dIY', 'hukuk', 'June 23, 2022', '10:34 pm'),
(169, 'user_1awelpOiQUmfZ0F7MxPg', 'user_30klHxzwOZp1MW4DsaXK', 'ouihohhh', 'June 23, 2022', '10:35 pm'),
(170, 'user_1awelpOiQUmfZ0F7MxPg', 'user_rN0mFLqVESo9nvx68dIY', 'tret', 'June 24, 2022', '9:08 pm'),
(171, 'user_1awelpOiQUmfZ0F7MxPg', 'user_rN0mFLqVESo9nvx68dIY', 'fdgdfg', 'June 24, 2022', '9:08 pm'),
(172, 'user_1awelpOiQUmfZ0F7MxPg', 'user_30klHxzwOZp1MW4DsaXK', 're', 'June 24, 2022', '11:55 pm'),
(173, 'user_1awelpOiQUmfZ0F7MxPg', 'user_30klHxzwOZp1MW4DsaXK', 'ds', 'June 24, 2022', '11:55 pm'),
(174, 'user_1awelpOiQUmfZ0F7MxPg', 'user_30klHxzwOZp1MW4DsaXK', 'f', 'June 24, 2022', '11:55 pm'),
(175, 'user_1awelpOiQUmfZ0F7MxPg', 'user_30klHxzwOZp1MW4DsaXK', 'f', 'June 24, 2022', '11:55 pm'),
(176, 'user_30klHxzwOZp1MW4DsaXK', 'user_1awelpOiQUmfZ0F7MxPg', 'dsad', 'June 24, 2022', '11:56 pm'),
(177, 'user_1awelpOiQUmfZ0F7MxPg', 'user_30klHxzwOZp1MW4DsaXK', 'ds', 'June 24, 2022', '11:57 pm'),
(178, 'user_30klHxzwOZp1MW4DsaXK', 'user_1awelpOiQUmfZ0F7MxPg', 'ds', 'June 24, 2022', '11:57 pm'),
(179, 'user_30klHxzwOZp1MW4DsaXK', 'user_1awelpOiQUmfZ0F7MxPg', 'we', 'June 24, 2022', '11:57 pm');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(50) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `subject`, `name`, `email`, `message`, `date`) VALUES
(94, 'fdsf', 'fds', 'judelynsalamanca111@gmail.com', 'dsff', '2022-06-23 12:06:29.738506'),
(95, 'sdd', 'sd', 'spunkransom112@gmail.com', 'dsds', '2022-06-23 15:38:12.178170');

-- --------------------------------------------------------

--
-- Table structure for table `draw`
--

CREATE TABLE `draw` (
  `id` int(50) NOT NULL,
  `d_name` varchar(50) NOT NULL,
  `path` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `emailconfirmation`
--

CREATE TABLE `emailconfirmation` (
  `id` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emailconfirmation`
--

INSERT INTO `emailconfirmation` (`id`, `email`, `code`, `date`) VALUES
(20, 'spunkransom112@gmail.com', '918866', '06/08/2022 11:12:38 pm'),
(21, 'ds@d.com', '465773', '05/27/2022 08:42:56 pm'),
(22, 'koyana9458@lockaya.com', '553386', '06/01/2022 05:52:00 pm'),
(23, 'libiri4966@runchet.com', '303732', '06/01/2022 06:51:05 pm'),
(24, '75@esd.com', '103606', '06/09/2022 12:32:49 am'),
(25, 'judelynsalamanca111@gmail.com', '365839', '06/14/2022 03:49:28 pm'),
(26, 'nocegi5454@tagbert.com', '172616', '06/17/2022 11:08:23 pm'),
(27, 'wabap26216@serosin.com', '649754', '06/18/2022 01:08:45 am'),
(28, 'yigijo1918@runqx.com', '886888', '06/18/2022 01:15:55 am');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(50) NOT NULL,
  `file_name` varchar(50) NOT NULL,
  `path` varchar(50) NOT NULL,
  `file_type` varchar(50) NOT NULL,
  `size` varchar(50) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_log`
--

CREATE TABLE `login_log` (
  `id` int(50) NOT NULL,
  `userid` int(50) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `device` varchar(50) NOT NULL,
  `timein` varchar(50) DEFAULT NULL,
  `timeout` varchar(50) DEFAULT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_log`
--

INSERT INTO `login_log` (`id`, `userid`, `ip`, `location`, `device`, `timein`, `timeout`, `date`) VALUES
(227, 193, '49.145.109.36', 'Philippines', 'Chrome - Computer - Windows 10', '06/24/2022 11:59:45 pm', '06/25/2022 12:01:33 am', '2022-06-24 15:59:46.684897'),
(231, 193, '49.145.109.36', 'Philippines', 'Chrome - Computer - Windows 10', '06/25/2022 12:01:37 am', '06/25/2022 12:13:47 am', '2022-06-24 16:01:38.772480'),
(232, 193, '49.145.109.36', 'Philippines', 'Chrome - Computer - Windows 10', '06/25/2022 12:13:50 am', '', '2022-06-24 16:13:51.960853');

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE `note` (
  `id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `note_name` varchar(50) NOT NULL,
  `note_content` longtext NOT NULL,
  `stat` varchar(50) NOT NULL,
  `shareid` varchar(50) NOT NULL,
  `date` datetime(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `note`
--

INSERT INTO `note` (`id`, `user_id`, `note_name`, `note_content`, `stat`, `shareid`, `date`) VALUES
(1, 1, 'eafg', 'gaggag', 'private', '', '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `passreset`
--

CREATE TABLE `passreset` (
  `id` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `reset_token` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passreset`
--

INSERT INTO `passreset` (`id`, `email`, `reset_token`, `date`) VALUES
(2, 'spunkransom112@gmail.com', 'ff73f9b77514c1bfe14ce8e1579a7b9f', '06/08/2022 11:23:23 pm'),
(4, 'judelynsalamanca111@gmail.com', 'oGWO3czKZS2T1h4Ijbr6CnAMNF0lmPUw', '06/20/2022 09:34:23 pm'),
(6, 'teedybrobo2@gmail.com', '1b32a022c52c0c6255c2a32e580be34f', '05/05/2022 08:34:07 pm'),
(7, 'yigijo1918@runqx.com', 'rOtU7Lw1u2bfzPWRqmBTsXY0dJGCekNn', '06/18/2022 01:45:33 am');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(50) NOT NULL,
  `plan_name` varchar(50) NOT NULL,
  `plan_desc` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `tags_limit` int(50) NOT NULL,
  `note_limit` int(50) NOT NULL,
  `space_limit` int(50) NOT NULL,
  `shareuser_limit` int(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `plan_name`, `plan_desc`, `type`, `tags_limit`, `note_limit`, `space_limit`, `shareuser_limit`, `price`, `duration`, `date`) VALUES
(1, 'default', 'plan 1', 'free', 5, 5, 100, 10, '0', '0', '2022-06-14 20:11:14.258164');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(50) NOT NULL,
  `rolename` varchar(50) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `rolename`, `date`) VALUES
(1, 'admin', '2022-06-20 17:02:30.639710'),
(2, 'user', '2022-06-20 17:02:49.101559');

-- --------------------------------------------------------

--
-- Table structure for table `share`
--

CREATE TABLE `share` (
  `id` int(50) NOT NULL,
  `note_id` int(50) NOT NULL,
  `sharelink` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `stat` varchar(50) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `id` int(50) NOT NULL,
  `plan_id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `start_date` varchar(50) NOT NULL,
  `end_date` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `balance` varchar(50) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`id`, `plan_id`, `user_id`, `start_date`, `end_date`, `status`, `type`, `balance`, `date`) VALUES
(1, 1, 1, '06/08/2022 06:36:59 pm', '07/15/2022 06:36:59 pm', 'active', 'free', '0', '2022-06-07 20:04:10.000000');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `user_id` int(50) NOT NULL,
  `task_name` varchar(50) NOT NULL,
  `task_content` varchar(50) NOT NULL,
  `start_date` varchar(50) NOT NULL,
  `end_date` varchar(50) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(50) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(50) NOT NULL,
  `groupname` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `coordinates` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contactno` varchar(50) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `groupname`, `address`, `coordinates`, `email`, `contactno`, `date`) VALUES
(1, 'H4Frgedg', 'University of Cebu (UCLM), A.C. Cortes Avenue, Buagsong, Looc, Mandaue, Central Visayas, 6014, Philippines', '10.324933, 123.953330', 'email@fmail.comg', '098678658678', '2022-06-15 20:13:20.000000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date_create` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `role`, `uid`, `fname`, `lname`, `email`, `username`, `password`, `image`, `status`, `date_create`) VALUES
(193, 'admin', 'user_1awelpOiQUmfZ0F7MxPg', 'Judelyn', 'Salamanca', 'judelynsalamanca111@gmail.comh', 'jude', 'Iloveyou14344!h', '62b5afbf9d8a7.jpg', 'online', '2022-06-14 07:46:41.926679'),
(194, 'user', 'user_rN0mFLqVESo9nvx68dIY', 'Td', 'Brobo', 'tds@gmail.comg', 'gfdg', 'Iloveyou14344!', '62b5afef7ff3e.jpg', 'offline', '2022-06-23 14:29:01.496861'),
(195, 'user', 'user_30klHxzwOZp1MW4DsaXK', 'Kyle', 'Tumulak', 'yigijo1918@runqx.comm', 'fsafasfh', 'Iloveyou14344!', '62b5b0059f3b1.jpg', 'offline', '2022-06-23 14:30:10.678966'),
(196, 'user', 'user_vLqKHCXedsT4SUzMVR1P', 'John Troy', 'Donasco', 'fasf@fsa.comg', 'dsajdog', 'Iloveyou14344!', '62b5b01eda3ac.jpg', 'offline', '2022-06-23 14:30:51.643209');

-- --------------------------------------------------------

--
-- Table structure for table `wrongpasslog`
--

CREATE TABLE `wrongpasslog` (
  `id` int(50) NOT NULL,
  `userid` int(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `draw`
--
ALTER TABLE `draw`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emailconfirmation`
--
ALTER TABLE `emailconfirmation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_log`
--
ALTER TABLE `login_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passreset`
--
ALTER TABLE `passreset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `share`
--
ALTER TABLE `share`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `wrongpasslog`
--
ALTER TABLE `wrongpasslog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `draw`
--
ALTER TABLE `draw`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emailconfirmation`
--
ALTER TABLE `emailconfirmation`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login_log`
--
ALTER TABLE `login_log`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=233;

--
-- AUTO_INCREMENT for table `note`
--
ALTER TABLE `note`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `passreset`
--
ALTER TABLE `passreset`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;

--
-- AUTO_INCREMENT for table `wrongpasslog`
--
ALTER TABLE `wrongpasslog`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
