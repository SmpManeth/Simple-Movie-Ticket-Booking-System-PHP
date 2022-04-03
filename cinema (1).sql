-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2022 at 04:29 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` int(255) NOT NULL,
  `cardname` varchar(255) NOT NULL,
  `cardnumber` varchar(255) NOT NULL,
  `expmonth` varchar(255) NOT NULL,
  `expyear` varchar(255) NOT NULL,
  `cvv` varchar(255) NOT NULL,
  `postid` varchar(255) NOT NULL,
  `total` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `firstname`, `user_id`, `email`, `address`, `city`, `state`, `zip`, `cardname`, `cardnumber`, `expmonth`, `expyear`, `cvv`, `postid`, `total`, `created_at`) VALUES
(9, 'Maneth Pathirana', '14', 'smpmaneth@gmail.com', 'Matara', 'Matara', 'Southern', 81050, 'dvsfv', '451264115641563131351351', 'sep', '2020', '124', '23', '121', '2022-04-03 13:37:15'),
(10, 'Maneth Pathirana', '14', 'smpmaneth@gmail.com', 'Matara', 'Matara', 'Southern', 81050, 'dvsfv', '451264115641563131351351', 'sep', '2020', '124', '23', '121', '2022-04-03 13:38:31'),
(11, 'Maneth Pathirana', '14', 'smpmaneth@gmail.com', 'Matara', 'Matara', 'Southern', 81050, 'wrw', 'rgr', 'wgr', 'gwgw', 'rg', '24', '15000', '2022-04-03 13:44:15'),
(12, 'Maneth Pathirana', '14', 'smpmaneth@gmail.com', 'Matara', 'Matara', 'Southern', 81050, 'jn', 'jnj', 'jbnjb', 'bjb', 'j', '25', '15000', '2022-04-03 13:49:02');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `published` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `price` int(255) NOT NULL,
  `theater` varchar(255) NOT NULL,
  `Show_Time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `topic_id`, `title`, `image`, `body`, `published`, `created_at`, `price`, `theater`, `Show_Time`) VALUES
(57, 14, NULL, 'Spider Man Home Coming', '1648993414_1642008129_medium-cover.jpg', '&lt;p&gt;STORY LINE&lt;/p&gt;&lt;p&gt;With Spider-Man\'s identity now revealed, Peter asks Doctor Strange for help. When a spell goes wrong, dangerous foes from other worlds start to appear, forcing Peter to discover what it truly means to be Spider-Man.&lt;/p&gt;&lt;p&gt;GENRES: &lt;strong&gt;ACTIONADVENTURE&lt;/strong&gt;&lt;/p&gt;', 1, '2022-01-12 17:21:04', 1500, 'Sky Light', ''),
(86, 14, NULL, 'Moonfall', '1648993425_52e73712ff776222f6d8b666bb7334b3.jpg', '&lt;p&gt;A mysterious force knocks the moon from its orbit around Earth and sends it hurtling on a collision course with life as we know it.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Released: &lt;/strong&gt;2022-02-03&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Genre: &lt;/strong&gt;&lt;a href=&quot;https://123-movies.win/genre/science-fiction-5&quot;&gt;Science Fiction&lt;/a&gt;, &lt;a href=&quot;https://123-movies.win/genre/action-10&quot;&gt;Action&lt;/a&gt;, &lt;a href=&quot;https://123-movies.win/genre/adventure-18&quot;&gt;Adventure&lt;/a&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Casts: &lt;/strong&gt;&lt;a href=&quot;https://123-movies.win/cast/donald-sutherland-5616&quot;&gt;Donald Sutherland&lt;/a&gt;, &lt;a href=&quot;https://123-movies.win/cast/kelly-reilly-12523&quot;&gt;Kelly Reilly&lt;/a&gt;, &lt;a href=&quot;https://123-movies.win/cast/eme-ikwuakor-56042&quot;&gt;Eme Ikwuakor&lt;/a&gt;, &lt;a href=&quot;https://123-movies.win/cast/michael-pena-313&quot;&gt;Michael Pe&ntilde;a&lt;/a&gt;, &lt;a href=&quot;https://123-movies.win/cast/halle-berry-3045&quot;&gt;Halle Berry&lt;/a&gt;, &lt;a href=&quot;https://123-movies.win/cast/patrick-wilson-52&quot;&gt;Patrick Wilson&lt;/a&gt;, &lt;a href=&quot;https://123-movies.win/cast/charlie-plummer-33656&quot;&gt;Charlie Plummer&lt;/a&gt;, &lt;a href=&quot;https://123-movies.win/cast/chris-sandiford-38443&quot;&gt;Chris Sandiford&lt;/a&gt;, &lt;a href=&quot;https://123-movies.win/cast/john-bradley-4993&quot;&gt;John Bradley&lt;/a&gt;, &lt;a href=&quot;https://123-movies.win/cast/kathleen-fee-26746&quot;&gt;Kathleen Fee&lt;/a&gt;, &lt;a href=&quot;https://123-movies.win/cast/carolina-bartczak-20197&quot;&gt;Carolina Bartczak&lt;/a&gt;, &lt;a href=&quot;https://123-movies.win/cast/stephen-bogaert-20218&quot;&gt;Stephen Bogaert&lt;/a&gt;, &lt;a href=&quot;https://123-movies.win/cast/azriel-dalman-276341&quot;&gt;Azriel Dalman&lt;/a&gt;, &lt;a href=&quot;https://123-movies.win/cast/frank-schorpion-22845&quot;&gt;Frank Schorpion&lt;/a&gt;, &lt;a href=&quot;https://123-movies.win/cast/sebastian-pigott-4520&quot;&gt;Sebastian Pigott&lt;/a&gt;, &lt;a href=&quot;https://123-movies.win/cast/adam-leblanc-289111&quot;&gt;Adam LeBlanc&lt;/a&gt;, &lt;a href=&quot;https://123-movies.win/cast/katy-breier-6548&quot;&gt;Katy Breier&lt;/a&gt;, &lt;a href=&quot;https://123-movies.win/cast/maxim-roy-1041&quot;&gt;Maxim Roy&lt;/a&gt;, &lt;a href=&quot;https://123-movies.win/cast/jaa-smithjohnson-19464&quot;&gt;Jaa Smith-Johnson&lt;/a&gt;, &lt;a href=&quot;https://123-movies.win/cast/kyle-gatehouse-19321&quot;&gt;Kyle Gatehouse&lt;/a&gt;, &lt;a href=&quot;https://123-movies.win/cast/yu-wenwen-273979&quot;&gt;Yu Wenwen&lt;/a&gt;, &lt;a href=&quot;https://123-movies.win/cast/josh-cruddas-16159&quot;&gt;Josh Cruddas&lt;/a&gt;, &lt;a href=&quot;https://123-movies.win/cast/tyrone-benskin-35155&quot;&gt;Tyrone Benskin&lt;/a&gt;, &lt;a href=&quot;https://123-movies.win/cast/krista-marchand-251046&quot;&gt;Krista Marchand&lt;/a&gt;, &lt;a href=&quot;https://123-movies.win/cast/zayn-maloney-298054&quot;&gt;Zayn Maloney&lt;/a&gt;, &lt;a href=&quot;https://123-movies.win/cast/hazel-nugent-298057&quot;&gt;Hazel Nugent&lt;/a&gt;, &lt;a href=&quot;https://123-movies.win/cast/ava-weiss-298060&quot;&gt;Ava Weiss&lt;/a&gt;, &lt;a href=&quot;https://123-movies.win/cast/jonathan-silver-298063&quot;&gt;Jonathan Silver&lt;/a&gt;, &lt;a href=&quot;https://123-movies.win/cast/achilles-montesvamvas-298066&quot;&gt;Achilles Montes-Vamvas&lt;/a&gt;, &lt;a href=&quot;https://123-movies.win/cast/ryan-bommarito-298069&quot;&gt;Ryan Bommarito&lt;/a&gt;, &lt;a href=&quot;https://123-movies.win/cast/gerardo-lo-dico-298072&quot;&gt;Gerardo Lo Dico&lt;/a&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Duration: &lt;/strong&gt;130m&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Country: &lt;/strong&gt;&lt;a href=&quot;https://123-movies.win/country/hong-kong-93&quot;&gt;Hong Kong&lt;/a&gt;, &lt;a href=&quot;https://123-movies.win/country/united-states-of-america-129&quot;&gt;United States of America&lt;/a&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Production: &lt;/strong&gt;&lt;a href=&quot;https://123-movies.win/production/huayi-tencent-entertainment-company-13495&quot;&gt;Huayi Tencent Entertainment Company&lt;/a&gt;, &lt;a href=&quot;https://123-movies.win/production/centropolis-entertainment-3418&quot;&gt;Centropolis Entertainment&lt;/a&gt;, &lt;a href=&quot;https://123-movies.win/production/street-entertainment-20563&quot;&gt;Street Entertainment&lt;/a&gt;, &lt;a href=&quot;https://123-movies.win/production/lionsgate-369&quot;&gt;Lionsgate&lt;/a&gt;&lt;/p&gt;', 0, '2022-04-03 11:48:45', 1000, 'SK', '');

-- --------------------------------------------------------

--
-- Table structure for table `show_time`
--

CREATE TABLE `show_time` (
  `id` int(11) NOT NULL,
  `Show_Time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `show_time`
--

INSERT INTO `show_time` (`id`, `Show_Time`) VALUES
(1, '10.30 AM'),
(3, '1.30 AM'),
(4, '4.30 AM'),
(5, '7.30 AM');

-- --------------------------------------------------------

--
-- Table structure for table `theater`
--

CREATE TABLE `theater` (
  `id` int(11) NOT NULL,
  `Theater_name` varchar(255) NOT NULL,
  `Theater_Location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theater`
--

INSERT INTO `theater` (`id`, `Theater_name`, `Theater_Location`) VALUES
(1, 'Sky Lights', 'Matara Bus Stand'),
(2, 'SK', 'Matara'),
(3, 'Liberty City', 'Colombo, Kollupitiya');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(10) NOT NULL,
  `price` varchar(255) NOT NULL,
  `show_time` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `movie_id` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `theater` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `price`, `show_time`, `quantity`, `user_id`, `movie_id`, `total`, `theater`) VALUES
(22, '121', '1.30 AM', '1', '14', 'Spider Man Home Coming', '121', '0'),
(23, '121', '1.30 AM', '1', '14', 'Spider Man Home Coming', '121', '0'),
(24, '1500', '10.30 AM', '10', '14', 'Spider Man Home Coming', '15000', ''),
(25, '1500', '1.30 AM', '10', '14', 'Spider Man Home Coming', '15000', ''),
(26, '1500', '10.30 AM', '01', '14', 'Spider Man Home Coming', '1500', 'Sky Light'),
(27, '1000', '1.30 AM', '50', '14', 'Moonfall', '50000', 'SK');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `admin`, `username`, `email`, `password`, `created_at`) VALUES
(14, 1, 'admin', 'admin@user.com', '$2y$10$SuMPgx4iHExNJtKSwnr8S.Qlmy8iohfDkTUJ0fIi9LLHGdgCUCHT.', '2020-08-23 06:41:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topic_id` (`topic_id`);

--
-- Indexes for table `show_time`
--
ALTER TABLE `show_time`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theater`
--
ALTER TABLE `theater`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `show_time`
--
ALTER TABLE `show_time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `theater`
--
ALTER TABLE `theater`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
