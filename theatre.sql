-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2022 at 08:38 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `theatredb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ssn` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ssn`, `name`, `email`, `password`) VALUES
('19101013', 'Minhaz Uddin', 'minhaz@sea.com', '000'),
('19201071', 'Nusrat Jahan', 'nusrat@wee.com', '222'),
('20101110', 'Arnab Pramanik', 'arnab@gmail.com', '111'),
('20101179', 'Asif Zubayer', 'asif@yaaa.com', '321');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `mov_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `summary` varchar(255) NOT NULL,
  `actors` varchar(255) NOT NULL,
  `rating` int(5) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `Link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`mov_id`, `name`, `duration`, `summary`, `actors`, `rating`, `genre`, `Link`) VALUES
('1', 'Batman', '3hr30min', 'Some rich guy in Gotham visits Wuhan in China, drinks bat soup and suddenly becomes a bat and a human - both at the same time.', 'Robert Pattinson, Christopher Columbus, Mahatma Gandhi', 5, 'Romance, Action, Horror', 'video-6265e113f03bb2.48527850.mp4'),
('2', 'Joker', '6hrs9min', 'Man escapes Pabna, only to find out he\'s normal while everyone else is mentally sick.', 'Robert Jahangir, Adolt Abdullah', 4, 'Adventure, Action, Psychological', ''),
('mov_001', 'Avengers: Endgame', '02.00.00', 'After Thanos, an intergalactic warlord, disintegrates half of the universe, the Avengers must reunite and assemble again to reinvigorate their trounced allies and restore balance. Iron Man, Ant-Man, Hulk, Thor and the Wasp', '      Robert Downey Jr.     Chris Evans     Mark Ruffalo     Chris Hemsworth     Scarlett Johansson     Jeremy Renner     Don Cheadle     Paul Rudd     Brie Larson     Karen Gillan     Danai Gurira     Benedict Wong     Jon Favreau     Bradley Cooper     ', 9, 'action, thriller', 'video-6265df27afc244.03823154.mp4'),
('mov_0012', 'Interstellar', '02.00.00', 'Interstellar is a 2014 epic science fiction film co-written, directed and produced by Christopher Nolan. It stars Matthew McConaughey, Anne Hathaway, Jessica Chastain, Bill Irwin, Ellen Burstyn, Matt Damon, and Michael Caine. Set in a dystopian future whe', '	      Matthew McConaughey     Anne Hathaway     Jessica Chastain     Bill Irwin     Ellen Burstyn     Michael Caine  ', 10, 'action, thriller, sci-fi', 'video-6265dfe7e86d14.07320779.mp4'),
('mov_1123', 'Lord of the Rings', '03.05.00', 'one ring to rule all the ring', 'Frodo bilbo sauron aragon', 10, 'fantasy, action, thriller\r\n', 'video-6265f411c0a9b3.48317780.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `msc_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `rating` int(5) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `Link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`msc_id`, `name`, `artist`, `rating`, `genre`, `Link`) VALUES
('1', 'Artic Monkeys', 'Monkey', 5, 'Jazz', 'rre'),
('2', 'fdsafsadfs', 'sdfsfdaafsd', 3, 'dsfdfasfas', ''),
('msc_032', 'Let her go', 'Passenger', 8, 'pop, experimental pop', 'passenger.mp3'),
('msc_1', 'I want to break free', 'Queen', 9, 'Rock, pop-rock', 'queen1.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `podcast`
--

CREATE TABLE `podcast` (
  `pd_id` varchar(255) NOT NULL,
  `sports_name` varchar(255) NOT NULL,
  `radio_channel` varchar(255) NOT NULL,
  `Link` varchar(255) NOT NULL,
  `news` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `podcast`
--

INSERT INTO `podcast` (`pd_id`, `sports_name`, `radio_channel`, `Link`, `news`) VALUES
('56', 'Hockey', 'Betar', 'dd', 'BTV'),
('pd_001', 'top sports podcast', '', 'podcast2.mp4', ''),
('pd_002', '', 'buzzpodcast', 'podcast1.mp4', '');

-- --------------------------------------------------------

--
-- Table structure for table `series`
--

CREATE TABLE `series` (
  `se_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `season` varchar(255) NOT NULL,
  `summary` varchar(255) NOT NULL,
  `rating` int(5) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `Link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `series`
--

INSERT INTO `series` (`se_id`, `name`, `season`, `summary`, `rating`, `genre`, `Link`) VALUES
('43', 'wer', '4', 'Fight', 4, 'comedy', 'vr'),
('se_101', 'DARK', '3', 'Time travel', 9, 'fantasy, sci-gi, thriller, action', 'dark0012.mp4'),
('se_321', 'Game Of thrones', '8', 'Seven kingdom fight each other for the Kings landing throne but the march of the death and Knight king become ultimate threat to all. arya, jhon snow, joffery, dragon, star, lanister, cersei.', 10, 'fantasy, action, thriller', 'got.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `name`, `email`, `phone`, `password`) VALUES
('acesif', 'Asif Zubayer', 'asif@a.com', '1111-2222', '123'),
('arnab', 'Arnab Pramanik', 'arnab@g.com', '2222-3333', '123'),
('minhaz', 'Minhaz Uddin', 'minhaz@r.com', '5555-6666', '123'),
('nusrat', 'Nusrat Jahan', 'nusrat@f.com', '4444-5555', '123');

-- --------------------------------------------------------

--
-- Table structure for table `userlist`
--

CREATE TABLE `userlist` (
  `username` varchar(255) NOT NULL,
  `pd_id` varchar(255) DEFAULT NULL,
  `mov_id` varchar(255) DEFAULT NULL,
  `msc_id` varchar(255) DEFAULT NULL,
  `se_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userlist`
--

INSERT INTO `userlist` (`username`, `pd_id`, `mov_id`, `msc_id`, `se_id`) VALUES
('acesif', NULL, '1', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ssn`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`mov_id`);

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`msc_id`);

--
-- Indexes for table `podcast`
--
ALTER TABLE `podcast`
  ADD PRIMARY KEY (`pd_id`);

--
-- Indexes for table `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`se_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `userlist`
--
ALTER TABLE `userlist`
  ADD KEY `username` (`username`),
  ADD KEY `mov_id` (`mov_id`),
  ADD KEY `msc_id` (`msc_id`),
  ADD KEY `pd_id` (`pd_id`),
  ADD KEY `se_id` (`se_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `userlist`
--
ALTER TABLE `userlist`
  ADD CONSTRAINT `userlist_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE,
  ADD CONSTRAINT `userlist_ibfk_2` FOREIGN KEY (`mov_id`) REFERENCES `movie` (`mov_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `userlist_ibfk_3` FOREIGN KEY (`msc_id`) REFERENCES `music` (`msc_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `userlist_ibfk_4` FOREIGN KEY (`pd_id`) REFERENCES `podcast` (`pd_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `userlist_ibfk_5` FOREIGN KEY (`se_id`) REFERENCES `series` (`se_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
