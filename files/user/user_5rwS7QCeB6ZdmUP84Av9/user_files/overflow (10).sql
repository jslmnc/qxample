-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2022 at 06:39 PM
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
(179, 'user_30klHxzwOZp1MW4DsaXK', 'user_1awelpOiQUmfZ0F7MxPg', 'we', 'June 24, 2022', '11:57 pm'),
(180, 'user_1awelpOiQUmfZ0F7MxPg', 'user_rN0mFLqVESo9nvx68dIY', 'hfd', 'June 30, 2022', '10:08 pm'),
(181, 'user_1awelpOiQUmfZ0F7MxPg', 'user_vLqKHCXedsT4SUzMVR1P', 'bxcb', 'July 1, 2022', '8:37 pm'),
(182, 'user_1awelpOiQUmfZ0F7MxPg', 'user_vLqKHCXedsT4SUzMVR1P', 'bn', 'July 1, 2022', '8:37 pm'),
(183, 'user_1awelpOiQUmfZ0F7MxPg', 'user_vLqKHCXedsT4SUzMVR1P', 'nb', 'July 1, 2022', '8:37 pm'),
(184, 'user_1awelpOiQUmfZ0F7MxPg', 'user_rN0mFLqVESo9nvx68dIY', '75675', 'July 5, 2022', '9:21 pm'),
(185, 'user_1awelpOiQUmfZ0F7MxPg', 'user_rN0mFLqVESo9nvx68dIY', '75', 'July 5, 2022', '9:21 pm'),
(186, 'user_1awelpOiQUmfZ0F7MxPg', 'user_rN0mFLqVESo9nvx68dIY', '76', 'July 5, 2022', '9:21 pm'),
(187, 'user_1awelpOiQUmfZ0F7MxPg', 'user_rN0mFLqVESo9nvx68dIY', '6', 'July 5, 2022', '9:22 pm'),
(188, 'user_1awelpOiQUmfZ0F7MxPg', 'user_rN0mFLqVESo9nvx68dIY', '75', 'July 5, 2022', '9:22 pm'),
(189, 'user_1awelpOiQUmfZ0F7MxPg', 'user_rN0mFLqVESo9nvx68dIY', '646', 'July 5, 2022', '9:22 pm'),
(190, 'user_1awelpOiQUmfZ0F7MxPg', 'user_rN0mFLqVESo9nvx68dIY', '64', 'July 5, 2022', '9:22 pm'),
(191, 'user_1awelpOiQUmfZ0F7MxPg', 'user_rN0mFLqVESo9nvx68dIY', 'u8o', 'July 5, 2022', '9:23 pm'),
(192, 'user_1awelpOiQUmfZ0F7MxPg', 'user_30klHxzwOZp1MW4DsaXK', '6526 5', 'July 5, 2022', '9:25 pm'),
(193, 'user_1awelpOiQUmfZ0F7MxPg', 'user_30klHxzwOZp1MW4DsaXK', '65\n3333333333333333333333.2\n3.\n0\n2\n\n02\n', 'July 5, 2022', '9:25 pm'),
(194, 'user_rN0mFLqVESo9nvx68dIY', 'user_1awelpOiQUmfZ0F7MxPg', 'df', 'July 11, 2022', '10:27 pm'),
(195, 'user_1awelpOiQUmfZ0F7MxPg', 'user_rN0mFLqVESo9nvx68dIY', '34', 'July 12, 2022', '12:08 am');

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
(95, 'sdd', 'sd', 'spunkransom112@gmail.com', 'dsds', '2022-06-23 15:38:12.178170'),
(96, 'Hdfhdfhdhhhdfhdh', 'Hfdhdhhfdhhhhhhhutt', 'judelynsalamanca111@gmail.com', 'Fuuuuuuuuuufffffftftttttttf', '2022-06-30 15:26:09.912325');

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
(28, 'yigijo1918@runqx.com', '886888', '06/18/2022 01:15:55 am'),
(29, 'dotiyey662@lenfly.com', '543545', '07/05/2022 10:50:36 pm');

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
(231, 193, '49.145.109.36', 'Philippines', 'Chrome - Computer - Windows 10', '06/25/2022 12:01:37 am', '06/25/2022 12:13:47 am', '2022-06-24 16:01:38.772480'),
(235, 193, '68.171.154.193', 'United States', 'Chrome - Computer - Windows 10', '06/30/2022 09:50:05 pm', '06/30/2022 10:17:25 pm', '2022-06-30 13:50:07.681524'),
(236, 193, '68.171.154.193', 'United States', 'Chrome - Computer - Windows 10', '06/30/2022 10:36:33 pm', '07/01/2022 01:02:06 am', '2022-06-30 14:36:35.060020'),
(237, 193, '68.171.154.193', 'United States', 'Chrome - Computer - Windows 10', '07/01/2022 08:37:19 pm', '07/01/2022 08:44:57 pm', '2022-07-01 12:37:21.335712'),
(238, 193, '68.171.154.193', 'United States', 'Chrome - Computer - Windows 10', '07/01/2022 09:03:59 pm', '07/05/2022 10:42:20 pm', '2022-07-01 13:04:01.328483'),
(239, 193, '49.145.96.116', 'Philippines', 'Chrome - Computer - Windows 10', '07/05/2022 10:44:09 pm', '07/05/2022 10:49:34 pm', '2022-07-05 14:44:10.544860'),
(240, 193, '49.145.96.116', 'Philippines', 'Chrome - Computer - Windows 10', '07/05/2022 10:53:15 pm', '07/05/2022 10:56:55 pm', '2022-07-05 14:53:17.295952'),
(241, 193, '49.145.96.116', 'Philippines', 'Chrome - Computer - Windows 10', '07/05/2022 10:57:22 pm', '07/05/2022 11:07:02 pm', '2022-07-05 14:57:24.198160'),
(242, 193, '49.145.96.116', 'Philippines', 'Chrome - Computer - Windows 10', '07/05/2022 11:07:03 pm', '07/05/2022 11:07:57 pm', '2022-07-05 15:07:05.051463'),
(243, 193, '49.145.96.116', 'Philippines', 'Chrome - Computer - Windows 10', '07/05/2022 11:18:19 pm', '07/07/2022 09:42:45 pm', '2022-07-05 15:18:23.074640'),
(244, 193, '49.145.101.26', 'Philippines', 'Chrome - Computer - Windows 10', '07/07/2022 09:42:49 pm', '07/11/2022 04:52:33 pm', '2022-07-07 13:42:50.992074'),
(245, 193, '49.145.100.29', 'Philippines', 'Chrome - Computer - Windows 10', '07/11/2022 04:53:23 pm', '07/11/2022 05:02:29 pm', '2022-07-11 08:53:25.060289'),
(246, 194, '49.145.100.29', 'Philippines', 'Chrome - Computer - Windows 10', '07/11/2022 05:03:13 pm', '07/11/2022 05:04:48 pm', '2022-07-11 09:03:16.517487'),
(247, 194, '49.145.100.29', 'Philippines', 'Chrome - Computer - Windows 10', '07/11/2022 05:04:53 pm', '07/11/2022 10:52:10 pm', '2022-07-11 09:04:54.254115'),
(248, 193, '49.145.100.29', 'Philippines', 'Chrome - Computer - Windows 10', '07/11/2022 05:18:54 pm', '07/11/2022 05:41:30 pm', '2022-07-11 09:18:56.440572'),
(249, 193, '49.145.100.29', 'Philippines', 'Chrome - Computer - Windows 10', '07/11/2022 05:47:28 pm', '07/11/2022 05:48:10 pm', '2022-07-11 09:47:29.926233'),
(250, 193, '49.145.100.29', 'Philippines', 'Chrome - Computer - Windows 10', '07/11/2022 05:48:46 pm', '07/11/2022 06:00:26 pm', '2022-07-11 09:48:47.613420'),
(251, 193, '49.145.100.29', 'Philippines', 'Chrome - Computer - Windows 10', '07/11/2022 06:00:35 pm', '', '2022-07-11 10:00:37.777622'),
(252, 193, '49.145.100.29', 'Philippines', 'Chrome - Computer - Windows 10', '07/11/2022 06:04:36 pm', '07/11/2022 10:16:06 pm', '2022-07-11 10:04:38.027404');

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE `note` (
  `id` int(50) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `notetitle` varchar(50) NOT NULL,
  `notecontent` longtext NOT NULL,
  `stat` varchar(50) NOT NULL,
  `views` varchar(50) NOT NULL,
  `shareid` varchar(50) NOT NULL,
  `trash` varchar(50) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `note`
--

INSERT INTO `note` (`id`, `uid`, `userid`, `notetitle`, `notecontent`, `stat`, `views`, `shareid`, `trash`, `date`) VALUES
(3, '6z4x2HowhAGYncZdMpuX', '193', 'dsfsdfgs', '<h1 class=\"ql-align-center\">API Documentation</h1><p>hideuri.com exposes its data via an Application Programming Interface (API), so developers can interact in a programmatic way with application.</p><p>This document is the official reference for that functionality.</p><h3><strong>POST</strong> <u>/api/v1/shorten</u></h3><p>Accepts a long URL and returns a short URL.</p><h4>Parameters</h4><ul><li>url - the long URL to shorten. Long URL must be escaped and urlencoded.</li></ul><h4>Return Values</h4><p>Format: json.</p><ul><li>result_url - The new short URL</li><li>error - The error message if an error occurred, otherwise empty</li></ul><h4>Example</h4><p><strong>Request:</strong></p><pre class=\"ql-syntax\" spellcheck=\"false\">curl -XPOST -d \'url=https%3A%2F%2Fgoogle.com%2F\' \'https://hideuri.com/api/v1/shorten\'\r\n</pre><p><strong>Response:</strong></p><pre class=\"ql-syntax\" spellcheck=\"false\">{\"result_url\":\"https:\\/\\/hideuri.com\\/jUxoXwq\"}\r\n</pre><h4>Limits</h4><p>100 calls per minute.</p><ul><li><a href=\"https://hideuri.com/privacy\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(0, 123, 255); background-color: transparent;\">Privacy Policy</a> ? <a href=\"https://hideuri.com/terms\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(0, 123, 255); background-color: transparent;\">Terms And Conditions</a> ? <a href=\"https://hideuri.com/abuse\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(0, 123, 255); background-color: transparent;\">Report Abuse</a> ? <a href=\"https://hideuri.com/feedback\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(0, 123, 255); background-color: transparent;\">Contact With Us</a></li></ul><p>© Hide URI 2018-2022. All Rights Reserved.</p>', 'public', '63', 'Zy5LV3s4AnCmKIuRjqO1', '0', '2022-07-11 14:46:16.412727'),
(5, 'sub0wRo9XnthPg7Zp3UC', '193', 'dsdsd', '<p>The summer I turned sixteen and got my license, Kyle Lewis was pulled dead from the lake. It was the week before Christmas and heat pressed down over the town. People went to the lake to cool off, but Kyle didn’t drown. There was no water in his lungs.</p><p>Coming back now, ten years passed, like always when I returned to visit my parents, I found myself slowing down when I reached the lake. The turn off was on the long road which led to their house and then on into town, and I felt myself pulled toward it, as if a magnet lay in the deep centre of it, drawing me. I stopped and got out the car and stood there on the side of the road, looking out toward the water, the shimmer of sun on the still surface.</p><p>The memories rushed back at me. The evenings my father and I spent out in the garage working on the car he’d bought for us to do up together. My sister sobbing at our table and my mother comforting her while my father stood silent. The long days of summer and the police and the rumours people whispered to one another. The swagger of the Ryan brothers around town.</p><p>And the last day of Kyle’s life, recounted to police by those who’d seen him. That day he’d slept until eleven. He and my sister Taylor had been up late drinking the night before, and when they woke the empty bottles and glasses were still on the bench, the smell of booze hung in the air of their little house.</p><p>They lived on the same long road as my parents did, but further into town. I passed their house each day when I biked home from school, dreaming of the day my car would finally be ready for me.</p><p>Kyle was hungover and he sat on the couch and rolled a cigarette while Taylor made them coffee. She asked him if he wanted anything to eat and he said no, he wasn’t hungry. He was quiet and she knew he was worried. He was worried because he owed Dean Ryan and his brother Pete money, and they were getting impatient.</p><p>When told this, the police wanted to know what he owed them for. Taylor said he bought some car parts off Pete Ryan and hadn’t paid him yet, but eventually she told them the truth. By then he’d been found and lay cold in the morgue, and she wasn’t worried anymore about what might happen to him. It already had.</p><p>Kyle drank his coffee and smoked two cigarettes one after the other, then he showered and pulled on the jeans and navy tee shirt he would die in.</p><p>He told her he was going to visit a friend and drove out the way he always did, tires squealing, sending up a cloud of dust which hung in the still air. At the Mobil on the corner, he pulled in to buy more cigarettes and an energy drink. While he was stood there at the counter, Pete Ryan walked in and came up behind him. </p><p>“I’m coming to collect today,” Pete said.</p><p>That was what the cashier heard him say, and she didn’t know what it meant. She said Kyle didn’t reply, or if he did, she didn’t hear it. Or maybe she knew more, just like we all knew more, and didn’t want to get on the wrong side of the Ryan brothers.</p><p>My dad had gone to high school with them both, in the same year as Dean who was the oldest, and he said even back then they were raising hell all over town, making a name for themselves.</p><p>After Kyle left the Mobil, he came to ask my father for money. When he pulled in Dad and I were out in the garage, tightening the brakes in the car. We’d spent the last six months working on it. Just like he’d promised it would be, now that I could drive it was almost ready.</p><p>Kyle got out and my dad looked at him, something cold coming over his expression. He stood silent and waited.</p><p>“Can we talk?” Kyle asked him.</p><p>They headed inside to the kitchen. A minute later I followed and sidled up to the door, stood silent, hardly breathing. Dad was standing against the bench with his arms folded, Kyle in front of him with desperation sliding off him.</p><p>“Please, I wouldn’t ask you if I had anyone else to go to. I swear to God, I’ll pay you back. I just owe Pete for this car I bought off him...”</p><p>My father cut him off with a hard laugh. “That piece of shit you\'re driving’s not worth five hundred dollars let alone five thousand. You come here begging me for money at least have the guts not to lie about why.”</p><p>A liar was one of the things my father despised most. Almost as much as he did a man who would hit a woman. My sister’s boyfriend was both those things.</p><p>“Alright, but it’s not what it sounds like,” Kyle said, his tone thin and pleading. A way I’d never heard him speak to my sister. For her he’d never crawled. “I sold some pot for them, and I owe them money from it. It was only a one-time thing, I just got to get square with them.”</p><p>It was a version of the story I’d heard, which was that he’d been selling a long time for them. And he’d only skimmed a small amount, but they’d added interest.</p><p>Dad stood up straight from the bench, and even though he was the same size as Kyle he seemed to loom over him.</p><p>“You want me to fix your mess now? What sort of man are you?”</p><p>It was a question both asked and answered in his scathing tone. A liar. A coward. The worst kind. I knew exactly what sort of man my father was, what he expected me to be. A man who was strong, who didn’t cry or complain, who took care of his family.</p><p>Then my dad spoke again. “I know what kind of trouble you’re in. I’ll pay the Ryan brothers off for you, and you leave town, leave my daughter. That’s the deal.”</p><p>Kyle made an odd noise, helpless and angry sounding. “You can’t just tell me to leave town.”</p><p>The words weren’t all the way out and my father had him around the collar, slammed him back against the wall.</p><p> “You think I give a shit if Dean Ryan finishes you off? You’re in my house now, and if I ever see so much as a scratch on my daughter again, I’ll break both your arms.”</p><p>Then he stepped back, folded his arms again, as if the moment had never happened. Everything felt still. The only sound was a fly buzzing against the window, loud and frantic.</p><p>Kyle stayed slumped against the wall a second, eyeing my father, indecision in his clenching and loosening fists. Then without another word he turned and left. Saw me there in the hallway and his eyes met mine, knowing I’d witnessed it, his moment of humiliation. </p><p>He pushed past me roughly, shoving his shoulder into me. I felt a shiver of apprehension then. Not for myself, but my sister. My father had wounded him, and she would bleed for it. </p><p>He left our house and went back to his. Driving fast up the long road which ran between us. He was tense when he got back, pacing and smoking in the kitchen. He and Taylor argued, she told the police.</p><p>They argued because he asked if she would leave town with him, and she said no. She didn’t want to leave her family. He told her if she really loved him, she would go with him. While they were arguing she tripped over, she hit her face against the bench and split her lip.</p><p>Later that day Kyle drove the short distance into town and went into the pub which Dean and Pete Ryan didn\'t drink at. He got drunk and he started talking big, saying he wasn’t scared of the Ryan brothers. He had a knife and he was ready to kill which ever one came for him first.</p><p>About nine in the evening the doorman kicked him out. He was marched outside and told to walk it off and come back for his car in the morning.</p><p>The doorman stood there and watched him leave. He was the last to see him before he was pulled bloated and broken boned from the water, his unsteady walk as he headed down the road which led to his own house, and past that my parents’ house, and if he kept going further still the lake.</p><p>The next morning the car was there on the street still, Kyle not in his bed, and my sister starting phoning around to see if anyone knew where he was.</p><p>Two days later his body rose up to the surface of the lake, and was spotted by a man out fishing. Both Ryan brothers were pulled in for questioning. People saw them escorted into the station.</p><p>After seeing Kyle at the Mobil, Pete Ryan had gone to spend the afternoon watching his son play cricket. He’d stood on the sideline and watched him make run after run, and after he’d taken him out for dinner. Then he’d dropped him back to his mother’s house and gone around to his brother Dean’s house.</p><p>He and Dean sat outside in the warm night and drank a box of Woodstock. Sometime about midnight, he couldn’t remember for sure, Dean headed to bed and Pete stretched out on the couch and went to sleep.</p><p>They were each the others alibi. Nothing ever linked them there to the lake. Still, many in town believed it was them. Others said there was no sense in the brothers killing him over a few thousand dollars, after all, now they were never getting their money. They said Kyle pissed plenty of people off, and maybe he mouthed off to the wrong person as he made his way home.</p><p>The police came to our house the day after he was found to spea</p><p>Dad told them about Kyle asking him for money, coming over while we were working out there on the car, and he nodded his head toward it, the freshly painted Ford.</p><p>Then one of the cops shook his head and laughed. Looked at my father. “You can’t have been too pleased to have your daughter shacked up with him,” he said.</p><p>“I sure wasn’t,” my dad replied.</p><p>I wished he’d lie then, for his own sake. Not admit he’d hated his daughter’s murdered boyfriend. But Dad always said, your word is all you have. Be someone people can trust. There’s no one on this earth I trust more than him.</p><p>It was a story now, a decade later, the haunted lake. Kids who swam out there claimed they felt something grab at their legs under the water. He was always trying to be someone big in town, Kyle Lewis, and eventually he was.</p><p>Every time I visited, Dad and I would drift out to the garage after dinner. Just like we used to when I was a kid still living at home. There was something soothing about being out there with him, the petrol scented concrete and the glow of the florescent light, the way we understood one another without having to speak. My childhood was something unending there.</p><p>Dad took two beers from the fridge in the garage and passed me one and we stood drinking, looking toward the road. It was quiet out here at night. I wondered if he felt the pull of the lake like I did.</p><p>“Do people still think it was the Ryan’s who killed Kyle?” I asked, not looking at him. We never spoke of that.</p><p>“Yeah, I guess so,” he said. “People don\'t talk much about it now.”</p><p>I remembered the day Kyle was pulled from the lake, the convoy of police cars driving past as we stood there in the garage. The solemnness of their cars with sirens and lights off, and the scraping sound of Dad scrubbing sandpaper over the car. The stark look of the metal underneath the old paint.</p><p>“Dad, stop, they might see,” I had begged him. He paused only long enough to look up at me.</p><p>“Everyone knows we been doing up this car, son,” he said. “No one will think a thing about it.”</p><p>He was right of course. Everyone was too busy looking at Dean and Pete Ryan. The police looked right at the car as they sat in our house and looked away again. My dad bought a new headlamp to replace the smashed one and took the car in for a new paint job after he’d banged out the dent, and no one ever said a thing except to ask what colour he wanted it.</p><p>But for all those years afterward when I went out there to the lake, I couldn’t stop myself imagining it. My dad in the darkness hauling the body from his car. Carrying him over the stones so as to not leave a trail, and how he did that I didn’t know.</p><p>He dropped him in all the way round the far side where trees grew low into the water and no one ever swam, and it was time enough before he was found for what evidence there was to be lost.</p><p>I could only imagine it because I had sworn to never speak of that night, not to anyone. Not even him.</p><p>The memory I carried was buried inside me now, of driving up the road to test the brakes on the car and rounding a corner and seeing him there. The animal look of him in my headlights, the drunken lumber, the glowing eyes, and for a instant I saw again him barging me in the hallway of my house, hitting my sister in his own house.</p><p>There was a moment I could have braked and didn’t. I could have swerved and didn’t.</p><p>My dad was there in minutes after I called him, stood with me looking at the lifeless shape of Kyle Lewis on the side of the road. There was the sound of something deep in the night, frogs and birds, coming from the bush.</p><p>Then he put his hands on my shoulders, looked at me steadily.</p><p>“Listen to me, this is my fault. I was the one driving. You got that? You can never speak about this again, do you understand?”</p><p>He pressed his own keys into my hand, ordered me to drive his car home and shower and go to bed and forget this ever happened. I got into his car and saw in the rear-view mirror the car there on side of the road, my father beside it, phone in his hand.</p><p>That moment was the end of my first life, the hazy days of childhood where anything felt possible. The life which came after was both darker and clearer, the knowledge of exactly what I was.</p><p>“Who’d you call that night?\" I asked him. \"I’ve always wondered.”</p><p>I didn’t know if he’d answer. I’d made a promise to him, and that was what we did. We kept our word. He’d protected me all these years.</p><p>“I called Dean Ryan. Told him I’d hit someone on the road and I needed his help. We go back a long way, me and him. He helped me dump him out there.”</p><p>He nodded his head toward it, the lake we couldn’t see from here but could feel. It was something which would always be there between us, the dark magnet of the past, pulling at us.</p><p>“What’d you have to do for him?”</p><p>Dean Ryan did no favours. What he gave, you paid for. My dad looked at me again, and I felt the weight of all the things I didn’t know.</p><p>“It was bad for him, everyone seeing Kyle still walking around after ripping him off. I paid off Kyle’s debt to him, and he let people think what they wanted.”</p><p>I thought then of Dean Ryan’s long silence. Denying or admitting nothing. The silence which had grown between me and my dad. All of us bound by it.</p><p>That night I had known, as I always had, my father would do anything to protect me. Because I knew what sort of man he was; one who took care of his own. Same as I was.</p>', 'private', '74', 'ENbDWB8edmPsnJpKxkFu', '0', '2022-07-07 17:46:05.571231'),
(6, 'evp0JDzAgfUrW7ML81uj', '193', 'hf', '<p>hfhfh</p>', 'private', '0', 'Ggdb7ExN4SLqkwz3ZFft', '0', '2022-07-07 17:45:28.658447'),
(7, 'cWhtVY3E7QjFnxvTNOA5', '194', 'tret', '<p>tretert</p>', 'public', '1', 'uCH3YD5Ft4zvqUyS8mgB', '0', '2022-07-11 14:49:23.526630');

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
(4, 'judelynsalamanca111@gmail.com', 'i4dOn8TzlQS7VDxpWhRMa5NLZPmYsJ1k', '07/11/2022 05:48:14 pm'),
(6, 'teedybrobo2@gmail.com', '1b32a022c52c0c6255c2a32e580be34f', '05/05/2022 08:34:07 pm'),
(7, 'yigijo1918@runqx.com', 'rOtU7Lw1u2bfzPWRqmBTsXY0dJGCekNn', '06/18/2022 01:45:33 am');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(50) NOT NULL,
  `plan_name` varchar(50) NOT NULL,
  `planID` varchar(50) DEFAULT NULL,
  `plan_desc` varchar(50) NOT NULL,
  `note_limit` varchar(50) NOT NULL,
  `space_limit` varchar(50) NOT NULL,
  `cycle` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `plan_name`, `planID`, `plan_desc`, `note_limit`, `space_limit`, `cycle`, `price`, `date`) VALUES
(11, 'Premium Plan', 'P-7ET69194RW5083014MK57LKI', 'Premium Plan', '100', '100', 'monthly', '6.00', '2022-07-11 12:51:48.936157'),
(12, 'Free Plan', 'P-rN0mFLqVESo9nvx68dIY', 'Free Plan', '5', '5', 'free', '100.00', '2022-07-11 12:53:36.807570');

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
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(50) NOT NULL,
  `groupname` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `coordinates` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contactno` varchar(50) NOT NULL,
  `emailname` varchar(50) NOT NULL,
  `smtpemailaddress` varchar(50) NOT NULL,
  `host` varchar(50) NOT NULL,
  `port` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `paypalclientid` varchar(100) NOT NULL,
  `paypalsecretkey` varchar(100) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `groupname`, `address`, `coordinates`, `email`, `contactno`, `emailname`, `smtpemailaddress`, `host`, `port`, `password`, `paypalclientid`, `paypalsecretkey`, `date`) VALUES
(1, 'H4Frgedg', 'Cebu-Balamban Transcentral Highway, Gaas, Cebu, Central Visayas, Philippines', '10.412319, 123.814843', 'email@fmail.comg', '098678658678', 'Overflow', 'overflowgroup.ph@gmail.com', 'smtp.gmail.com', '465', 'jdqwmkllphcslxhq', 'ASnTwn2tO5vojqMccLPBCcE41aNplU7bG0Iw8iBmstXtXX2RA-SmxjW_jAQWLm06BT2HkvkOgnU6-fu9', 'EJv270fVl2JzO46JIKNnCgBRRPn-xzkxoNrqIjG7w-uUUI0kPaNV2aY72dL5Rb2eDCRMsmwXRV4dXK_3', '2022-06-15 20:13:20.000000');

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
  `userid` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `subscriberID` varchar(50) DEFAULT NULL,
  `planID` varchar(50) DEFAULT NULL,
  `startTime` varchar(50) DEFAULT NULL,
  `status_update_time` varchar(50) DEFAULT NULL,
  `payer_email` varchar(50) DEFAULT NULL,
  `payer_id` varchar(50) DEFAULT NULL,
  `cycles` varchar(50) DEFAULT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`id`, `userid`, `status`, `subscriberID`, `planID`, `startTime`, `status_update_time`, `payer_email`, `payer_id`, `cycles`, `date`) VALUES
(2, '194', 'ACTIVE', 'I-HV97EFPM1CT8', 'P-7ET69194RW5083014MK57LKI', '2022-06-30T04:22:30Z', '2022-06-30T04:25:23Z', 'juandelacruz@testaccount.com', 'QMGP3T9K7Q8T6', '1', '2022-06-30 04:32:03.706622');

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
  `type` varchar(50) NOT NULL,
  `date_create` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `role`, `uid`, `fname`, `lname`, `email`, `username`, `password`, `image`, `status`, `type`, `date_create`) VALUES
(193, 'admin', 'user_1awelpOiQUmfZ0F7MxPg', 'Judelyn', 'Salamanca', 'judelynsalamanca111@gmail.com', 'jude', 'Iloveyou14344!h', '62cbe51353717.png', 'online', 'active', '2022-06-14 07:46:41.926679'),
(194, 'user', 'user_rN0mFLqVESo9nvx68dIY', 'Td', 'Brobo', 'tds@gmail.comg', 'tdd', 'Iloveyou14344!', '62cbf377c0bbc.png', 'offline', 'active', '2022-06-23 14:29:01.496861');

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
-- Indexes for table `settings`
--
ALTER TABLE `settings`
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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `emailconfirmation`
--
ALTER TABLE `emailconfirmation`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login_log`
--
ALTER TABLE `login_log`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;

--
-- AUTO_INCREMENT for table `note`
--
ALTER TABLE `note`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `passreset`
--
ALTER TABLE `passreset`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
