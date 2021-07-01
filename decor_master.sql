-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2021 at 11:21 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `decor_master`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title_az` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ru` text NOT NULL,
  `img` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title_az`, `title_en`, `title_ru`, `desc_az`, `desc_en`, `desc_ru`, `img`) VALUES
(1, 'adadad', '', '', '<p>sadasd</p>\r\n', '', '', 'bg.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address_az` varchar(255) NOT NULL,
  `address_en` varchar(255) NOT NULL,
  `address_ru` varchar(255) NOT NULL,
  `copyright_az` varchar(255) NOT NULL,
  `copyright_en` varchar(255) NOT NULL,
  `copyright_ru` varchar(255) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ru` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `phone`, `email`, `address_az`, `address_en`, `address_ru`, `copyright_az`, `copyright_en`, `copyright_ru`, `desc_az`, `desc_en`, `desc_ru`) VALUES
(1, '11', 'asdasd', 'asdasd', '', '', 'asdsa', '', '', '<p>adasd</p>\r\n', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` int(11) NOT NULL,
  `file` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `file`) VALUES
(1, 'bg.png');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `file` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `file`) VALUES
(1, 'bg.jpg'),
(2, 'bg.png');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `img` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `img`) VALUES
(1, 'bg.png');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title_az` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `img` varchar(254) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_ru` text NOT NULL,
  `desc_en` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title_az`, `title_en`, `title_ru`, `date`, `img`, `desc_az`, `desc_ru`, `desc_en`) VALUES
(1, 'sadasd', '', '', '2021-06-10', 'bg.png', '<p>sdsadas</p>\r\n', '', '<p>adsdad</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `news_gallery`
--

CREATE TABLE `news_gallery` (
  `id` int(11) NOT NULL,
  `news_id` int(10) NOT NULL,
  `file` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news_gallery`
--

INSERT INTO `news_gallery` (`id`, `news_id`, `file`) VALUES
(1, 1, 'bg.png'),
(2, 1, 'bg.jpg'),
(3, 1, 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `img` varchar(254) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `img`, `link`) VALUES
(1, 'bg.png', 'sadasd');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `title_az` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ru` text NOT NULL,
  `img` varchar(254) NOT NULL,
  `year` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title_az`, `title_en`, `title_ru`, `desc_az`, `desc_en`, `desc_ru`, `img`, `year`, `company`, `project_name`, `location`) VALUES
(1, 'proyekt 1', '', '', '<p>asdassd<s>asdasasasd</s></p>\r\n', '', '', 'bg.png', '2021', 'asdasd', 'dadadsada', '1231312313');

-- --------------------------------------------------------

--
-- Table structure for table `projects_gallery`
--

CREATE TABLE `projects_gallery` (
  `id` int(11) NOT NULL,
  `project_id` int(10) NOT NULL,
  `file` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projects_gallery`
--

INSERT INTO `projects_gallery` (`id`, `project_id`, `file`) VALUES
(1, 1, 'bg.jpg'),
(2, 1, 'bg.png');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title_az` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `desc_az` text NOT NULL,
  `desc_en` text NOT NULL,
  `desc_ru` text NOT NULL,
  `img` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title_az`, `title_en`, `title_ru`, `desc_az`, `desc_en`, `desc_ru`, `img`) VALUES
(1, 'service 1', '', '', '<p>dasdas</p>\r\n', '<p><span style=\"font-size:72px\">sada;ldka;lkdadsd</span></p>\r\n', '', 'Kamin-.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title_az` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_ru` varchar(255) NOT NULL,
  `title2_az` varchar(255) NOT NULL,
  `title2_en` varchar(255) NOT NULL,
  `title2_ru` varchar(255) NOT NULL,
  `button_text_az` varchar(255) NOT NULL,
  `button_text_en` varchar(255) NOT NULL,
  `button_text_ru` varchar(255) NOT NULL,
  `button_link` varchar(255) NOT NULL,
  `img` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title_az`, `title_en`, `title_ru`, `title2_az`, `title2_en`, `title2_ru`, `button_text_az`, `button_text_en`, `button_text_ru`, `button_link`, `img`) VALUES
(1, 'asdasdd', '', '', '12312312', '', '2131213', 'sdadas', '', '', '', 'bg.jpg'),
(2, 'sadasd', '', '', 'aasd', '', '', '', '', '', '', 'bg1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `id` int(11) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `you_tube` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`id`, `facebook`, `you_tube`, `instagram`) VALUES
(1, 'asd', '123', 'dsa');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `isAdmin`) VALUES
(1, 'super_admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(3, 'admin', '21232f297a57a5a743894a0e4a801fc3', 0);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `img` varchar(254) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `img`, `link`) VALUES
(1, 'bg.png', 'https://archico.az/construction/en/media/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_gallery`
--
ALTER TABLE `news_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects_gallery`
--
ALTER TABLE `projects_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news_gallery`
--
ALTER TABLE `news_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `projects_gallery`
--
ALTER TABLE `projects_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
