-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2018 at 04:22 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `bdi`
--

CREATE TABLE `bdi` (
  `id` int(11) NOT NULL,
  `option1` varchar(1000) NOT NULL,
  `option2` varchar(1000) NOT NULL,
  `option3` varchar(1000) NOT NULL,
  `option4` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bdi`
--

INSERT INTO `bdi` (`id`, `option1`, `option2`, `option3`, `option4`) VALUES
(1, 'I do not feel sad.', 'I feel sad.', 'I am sad all the time and I can\'t snap out of it.', 'I am so sad and unhappy that I can\'t stand it.'),
(2, 'I am not particularly discouraged about the future.', 'I feel discouraged about the future.', 'I feel I have nothing to look forward to.', 'I feel the future is hopeless and that things cannot improve.'),
(3, 'I do not feel like a failure.', 'I feel I have failed more than the average person.', 'As I look back on my life, all I can see is a lot of failures.', 'I feel I am a complete failure as a person.'),
(4, 'I get as much satisfaction out of things as I used to.', 'I don\'t enjoy things the way I used to.', 'I don\'t get real satisfaction out of anything anymore.', 'I am dissatisfied or bored with everything.'),
(5, 'I don\'t feel particularly guilty.', 'I feel guilty a good part of the time.', 'I feel quite guilty most of the time.', 'I feel guilty all of the time.'),
(6, 'I don\'t feel I am being punished.', 'I don\'t feel I am being punished.', 'I expect to be punished.', 'I feel I am being punished.'),
(7, 'I don\'t feel disappointed in myself.', 'I am disappointed in myself.', 'I am disgusted with myself.', 'I hate myself.'),
(8, 'I don\'t feel I am any worse than anybody else.', 'I am critical of myself for my weaknesses or mistakes.', 'I blame myself all the time for my faults.', 'I blame myself for everything bad that happens.'),
(9, 'I don\'t have any thoughts of killing myself.', 'I have thoughts of killing myself, but I would not carry them out.', 'I would like to kill myself.', 'I would kill myself if I had the chance.'),
(10, 'I don\'t cry any more than usual.', 'I cry more now than I used to.', 'I cry all the time now.', 'I used to be able to cry, but now I can\'t cry even though I want to.'),
(11, 'I am no more irritated by things than I ever was.', 'I am slightly more irritated now than usual.', 'I am quite annoyed or irritated a good deal of the time.', 'I feel irritated all the time.'),
(12, 'I have not lost interest in other people.', 'I am less interested in other people than I used to be.', 'I have lost most of my interest in other people.', 'I have lost all of my interest in other people.'),
(13, 'I make decisions about as well as I ever could.', 'I put off making decisions more than I used to.', 'I have greater difficulty in making decisions more than I used to.', 'I can\'t make decisions at all anymore.'),
(14, 'I don\'t feel that I look any worse than I used to.', 'I am worried that I am looking old or unattractive.', 'I feel there are permanent changes in my appearance that make me look unattractive.', 'I believe that I look ugly.'),
(15, 'I can work about as well as before.', 'It takes an extra effort to get started at doing something.', 'I have to push myself very hard to do anything.', 'I can\'t do any work at all.'),
(16, 'I can sleep as well as usual.', 'I don\'t sleep as well as I used to.', 'I wake up 1-2 hours earlier than usual and find it hard to get back to sleep.', 'I wake up several hours earlier than I used to and cannot get back to sleep.'),
(17, 'I don\'t get more tired than usual.', 'I get tired more easily than I used to.', 'I get tired from doing almost anything.', 'I am too tired to do anything.'),
(18, 'My appetite is no worse than usual.', 'My appetite is not as good as it used to be.', 'My appetite is much worse now.', 'I have no appetite at all anymore.'),
(19, 'I haven\'t lost much weight, if any, lately.', 'I have lost more than five pounds.', 'I have lost more than ten pounds.', 'I have lost more than fifteen pounds.'),
(20, 'I am no more worried about my health than usual.', 'I am worried about physical problems like aches, pains, upset stomach, or constipation.', 'I am very worried about physical problems and it\'s hard to think of much else.', 'I am so worried about my physical problems that I cannot think of anything else.'),
(21, 'I have not noticed any recent change in my interest in sex.', 'I am less interested in sex than I used to be.', 'I have almost no interest in sex.', 'I have lost interest in sex completely.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bdi`
--
ALTER TABLE `bdi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bdi`
--
ALTER TABLE `bdi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
