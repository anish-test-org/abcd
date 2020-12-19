-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 19, 2020 at 05:39 PM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anish_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `image` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `published` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_featured` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `slug`, `views`, `image`, `body`, `published`, `created_at`, `updated_at`, `is_featured`) VALUES
(7, 1, 'The world I live in', 'the-world-i-live-in', 0, 'the-world-i-live-in.jpg', '&lt;p&gt;The world I&amp;nbsp;live in,&lt;/p&gt;\r\n\r\n&lt;p&gt;full of anger and hate.&lt;/p&gt;\r\n\r\n&lt;p&gt;nothing that reminds of humanity left.&lt;/p&gt;\r\n\r\n&lt;p&gt;death is the ultimate prize,&lt;/p&gt;\r\n\r\n&lt;p&gt;even after knowing this,&lt;/p&gt;\r\n\r\n&lt;p&gt;we are in a race.&lt;/p&gt;\r\n\r\n&lt;p&gt;we run to be better than the others,&lt;/p&gt;\r\n\r\n&lt;p&gt;we run to be on the top.&lt;/p&gt;\r\n\r\n&lt;p&gt;but at the highest peak,&lt;/p&gt;\r\n\r\n&lt;p&gt;there is nothing but a lake of fire.&lt;/p&gt;\r\n', 1, '2020-08-27 11:44:27', '2020-08-09 12:51:35', 1),
(8, 2, 'aaa', 'aaa', 0, 'sergio-ramos-wallpaper-01.jpg', '&lt;p&gt;aaa&lt;/p&gt;\r\n', 1, '2020-08-09 12:53:52', '2020-08-09 12:53:52', 0),
(9, 6, 'hello', 'hello', 0, 'sergio-ramos-wallpaper-01.jpg', '&lt;p&gt;jshjfshd&lt;/p&gt;\r\n', 1, '2020-08-09 18:07:14', '2020-08-09 16:50:07', 0),
(11, 2, 'sss', 'sss', 0, 'default.jpg', '&lt;p&gt;sss&lt;/p&gt;\r\n', 1, '2020-08-09 18:02:11', '2020-08-09 18:02:11', 0),
(12, 6, 'aaaakjhdjaksd ff sdf', 'aaaakjhdjaksd-ff-sdf', 0, 'real-madridandroid-iphone-desktop-hd-backgrounds-wallpapers-1080p-4k-8l6av.png', '&lt;p&gt;aksdkjhas ansfdj asdjfa sdfjsad fagsdf&lt;/p&gt;\r\n', 1, '2020-08-27 11:43:21', '2020-08-09 18:06:57', 0),
(13, 2, 'This is review', 'this-is-review', 0, '5f57906a03af2500047ed338.png', '&lt;p&gt;Hello world&lt;/p&gt;\r\n', 1, '2020-10-02 08:49:27', '2020-10-02 08:49:27', 0),
(14, 2, 'helllo psycho', 'helllo-psycho', 0, '5f57906a03af2500047ed338.png', '&lt;p&gt;hellllo&amp;nbsp;&lt;/p&gt;\r\n', 0, '2020-10-02 09:48:54', '2020-10-02 09:48:54', 0),
(15, 2, 'test 100', 'test-100', 0, '', '&lt;p&gt;test&lt;/p&gt;\r\n', 1, '2020-10-02 09:52:10', '2020-10-02 09:51:33', 0),
(16, 2, 'hello im testing', 'hello-im-testing', 0, '', '&lt;p&gt;hello&lt;/p&gt;\r\n', 0, '2020-10-02 09:53:38', '2020-10-02 09:53:38', 0);

-- --------------------------------------------------------

--
-- Table structure for table `post_topic`
--

CREATE TABLE `post_topic` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_topic`
--

INSERT INTO `post_topic` (`id`, `post_id`, `topic_id`) VALUES
(8, 7, 3),
(9, 8, 3),
(10, 9, 3),
(13, 11, 2),
(14, 12, 2),
(15, 13, 5),
(16, 14, 2),
(17, 15, 2),
(18, 16, 5);

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `name`, `slug`) VALUES
(2, 'Motivation', 'motivation'),
(3, 'Diary', 'diary'),
(4, 'IT', 'it'),
(5, 'Review', 'review');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` enum('Author','Admin') DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `role`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Awa', 'info@codewithawa.com', 'Admin', 'mypassword', '2018-01-08 07:07:58', '2018-01-08 07:07:58'),
(2, 'anishghimire', 'anishghimire862@gmail.com', 'Admin', '7f266025dc45f2e14b2415f475cce468', '2020-08-07 16:06:40', '2020-08-07 16:06:40'),
(3, 'krrishghimire', 'krrishg@protonmail.com', 'Author', 'b798444594e68944b787906ae6ebfe1f', '2020-08-07 16:43:51', '2020-08-07 16:43:51'),
(4, 'anishghimire862', 'anees@pmssaisl.com', 'Author', '7f266025dc45f2e14b2415f475cce468', '2020-08-07 17:24:37', '2020-08-07 17:24:37'),
(5, 'test', 'test@test.com', NULL, '098f6bcd4621d373cade4e832627b4f6', '2020-08-08 05:43:37', '2020-08-08 05:43:37'),
(6, 'anish', 'anish@anish.com', 'Author', '7f266025dc45f2e14b2415f475cce468', '2020-08-09 16:49:21', '2020-08-09 16:49:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `post_topic`
--
ALTER TABLE `post_topic`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `post_id` (`post_id`),
  ADD KEY `topic_id` (`topic_id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `post_topic`
--
ALTER TABLE `post_topic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `post_topic`
--
ALTER TABLE `post_topic`
  ADD CONSTRAINT `post_topic_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `post_topic_ibfk_2` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
