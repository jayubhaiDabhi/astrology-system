-- phpMyAdmin SQL Dump
-- version 2.9.0.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Mar 07, 2025 at 04:06 PM
-- Server version: 5.0.27
-- PHP Version: 5.2.0
-- 
-- astro
-- 
-- 
-- Database: `pro_astro`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `buy`
-- 

CREATE TABLE `buy` (
  `uid` int(5) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `uadd` varchar(100) NOT NULL,
  `no` int(5) NOT NULL,
  `img` varchar(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `quantity` int(5) NOT NULL,
  `price` int(10) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `buy`
-- 

INSERT INTO `buy` (`uid`, `uname`, `uadd`, `no`, `img`, `name`, `quantity`, `price`, `total`) VALUES 
(1, 'jaydip', 'botad', 2, '\\sphatikmala.jpeg', 'sphatikmala', 1, 2999, 2999),
(1, 'jaydip', 'botad', 2, 'sphatikmala.jpeg', 'sphatikmala', 1, 2149, 2149),
(1, 'jaydip', 'botad', 2, 'sphatikmala.jpeg', 'sphatikmala', 1, 2149, 2149),
(1, 'jaydip', 'botad', 2, 'sphatikmala.jpeg', 'sphatikmala', 1, 2149, 2149);

-- --------------------------------------------------------

-- 
-- Table structure for table `calendartithi`
-- 

CREATE TABLE `calendartithi` (
  `tithi` int(3) NOT NULL,
  `paksha` varchar(50) NOT NULL,
  `month` varchar(50) NOT NULL,
  `info` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `calendartithi`
-- 

INSERT INTO `calendartithi` (`tithi`, `paksha`, `month`, `info`) VALUES 
(1, 's', 'kartika', 'govardhan puja'),
(2, 's', 'kartika', 'bhai beej,yamuna snan'),
(5, 's', 'kartika', 'labh pacham'),
(7, 's', 'kartika', 'jalarambapa jayanti'),
(8, 's', 'kartika', 'dakor mela'),
(11, 's', 'kartika', 'tulshi vivah,dev diwali'),
(15, 's', 'kartika', 'kartika purnima'),
(2, 'k', 'kartika', 'saibaba jayanti'),
(8, 's', 'margshirsha', 'pramukh swami jayanti'),
(11, 's', 'margshirsha', 'geeta jayanti'),
(15, 's', 'margshirsha', 'margshirsha purnima,bahuchraji melo'),
(15, 's', 'pausha', 'poshi punam'),
(4, 'k', 'pausha', 'bajrangdash bapa tithi'),
(5, 's', 'magha', 'vasant panchami'),
(11, 's', 'magha', 'jaya akadashi'),
(12, 's', 'magha', 'vishva karma jayanti'),
(15, 's', 'magha', 'maghi purnima'),
(10, 'k', 'magha', 'swami dayanand jayanti'),
(11, 'k', 'magha', 'vijya akadashi'),
(14, 'k', 'magha', 'maha shivratri'),
(2, 's', 'phalguna', 'kulriya beej,ramkrishana paramhansh jayanti'),
(8, 's', 'phalguna', 'holashatak arambh'),
(11, 's', 'phalguna', 'amalji akadashi,kunjh akadashi'),
(15, 's', 'phalguna', 'holi,holashatak purna,punam'),
(1, 'k', 'phalguna', 'dhuleti,nar narayan janam jayanti'),
(7, 'k', 'phalguna', 'shitla pujan,marvadi satam'),
(1, 's', 'chaitra', 'gudi padavo,chaitra navratri,cheti chanda'),
(2, 's', 'chaitra', 'matshya jayanti'),
(3, 's', 'chaitra', 'gauri puja,gauri trij'),
(9, 's', 'chaitra', 'ram navami,tara jayanti,swami narayan jayanti'),
(15, 's', 'chaitra', 'hanumaan jayanti,chaitra purnima'),
(11, 'k', 'chaitra', 'varuni akadashi'),
(15, 'k', 'chaitra', 'darsh amavashya'),
(3, 's', 'vaishakha', 'akhatreej,parshuram jayanti,matangi jayanti'),
(4, 's', 'vaishakha', 'ganesh choth'),
(11, 's', 'vaishakha', 'mohini akadashi'),
(15, 's', 'vaishakha', 'vaishakhi punam,kurma jayanti'),
(1, 'k', 'vaishak', 'narad muni jayanti'),
(15, 'k', 'vaishakha', 'vaishakhi amash,sani jayanti,vat savitri vrata'),
(2, 's', 'jaishtha', 'rambha beej'),
(3, 's', 'jaishtha', 'maharana pratap jayanti'),
(8, 's', 'jaishtha', 'dhumavati jayanti'),
(11, 's', 'jaishtha', 'bhim agiyarash,nirjala akadashi'),
(15, 's', 'jaishtha', 'jaithi punam'),
(15, 'k', 'jaishtha', 'amash'),
(2, 's', 'ashadha', 'rath yatra'),
(15, 's', 'ashadha', 'guru punam,ashadhi punam'),
(15, 'k', 'ashadha', 'divasho,darsh amash'),
(11, 's', 'shravana', 'putrada akadashi'),
(15, 's', 'shravana', 'rakshabandhan,shhravani punam'),
(4, 'k', 'shravana', 'bal choth'),
(5, 'k', 'shravana', 'nag panchami,pateti\r\n'),
(6, 'k', 'shravana', 'radhan chhatth,balbhadra jayanti'),
(7, 'k', 'shravana', 'shitala shatam'),
(8, 'k', 'shravana', 'janmashtami,nirjala vrat'),
(3, 's', 'bhadrapada', 'kevda tij,varah jayanti'),
(4, 's', 'bhadrapada', 'ganesh chaturthi'),
(5, 's', 'bhadrapada', 'rushi pacham'),
(11, 's', 'bhadrapada', 'parivartini akadashi,jal jilini akadashi'),
(15, 's', 'bhadrapada', 'bhadarvi punam,sharad saru'),
(11, 'k', 'bhadrapada', 'indira akadashi'),
(1, 's', 'ashvina', 'navratri saru,shardiya navratri,shalini putri puja'),
(2, 's', 'ashvina', 'brahma charini puja'),
(3, 's', 'ashvina', 'chandra ghanta puja'),
(4, 's', 'ashvina', 'kushmanda puja'),
(5, 's', 'ashvina', 'lalita puja,shkandh mata puja'),
(6, 's', 'ashvina', 'katyani puja'),
(7, 's', 'ashvina', 'sarshvati puja,bhanu saptami'),
(8, 's', 'ashvina', 'durgashatmi'),
(9, 's', 'ashvina', 'maha navami'),
(10, 's', 'ashvina', 'dasera'),
(15, 's', 'ashvina', 'sardiya punam,kojagari punam,valmiki jayanti'),
(4, 'k', 'ashvina', 'kevda choth'),
(11, 'k ', 'ashvina', 'rama akadashi'),
(12, 'k', 'ashvina', 'vagh baras'),
(13, 'k', 'ashvina', 'dhanteras'),
(14, 'k', 'ashvina', 'kali chuadas,chopada pujan'),
(15, 'k', 'ashvina', 'diwali'),
(0, '', '', ''),
(0, '', '', ''),
(5, 's', 'phalguna', 'panchami'),
(5, 's', 'phalguna', 'panchami'),
(5, 's', 'phalguna', 'panchami'),
(5, 's', 'phalguna', 'panchami'),
(5, 's', 'phalguna', 'panchami'),
(5, 's', 'phalguna', 'panchami'),
(0, '', '', '');

-- --------------------------------------------------------

-- 
-- Table structure for table `cart`
-- 

CREATE TABLE `cart` (
  `no` varchar(3) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` varchar(6) NOT NULL,
  `quantity` varchar(6) NOT NULL,
  `total` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `cart`
-- 

INSERT INTO `cart` (`no`, `img`, `name`, `price`, `quantity`, `total`) VALUES 
('1', 'sphatikmala.jpeg', 'tulshimala', '499', '1', '499'),
('2', '', 'aaa', '1111', '1', '1111'),
('2', 'sphatikmala.jpeg', 'sphatikmala', '2149', '1', '2149'),
('2', 'sphatikmala.jpeg', 'sphatikmala', '2149', '1', '2149'),
('2', 'sphatikmala.jpeg', 'sphatikmala', '2149', '1', '2149'),
('2', 'sphatikmala.jpeg', 'sphatikmala', '2149', '1', '2149'),
('2', 'sphatikmala.jpeg', 'sphatikmala', '2149', '1', '2149');

-- --------------------------------------------------------

-- 
-- Table structure for table `limitedkundali`
-- 

CREATE TABLE `limitedkundali` (
  `planets` varchar(10) NOT NULL,
  `deg` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `limitedkundali`
-- 

INSERT INTO `limitedkundali` (`planets`, `deg`) VALUES 
('sun', 257.27),
('moon', 246.41),
('mars', 261.14),
('mercury', 236.15),
('jupiter', 218.37),
('venus', 283.38),
('saturn', 245.13),
('rahu', 236.42),
('ketu', 56.42),
('urenus', 227.42),
('neptune', 62.41),
('pluto', 52.43),
('ascendant', 156.43);

-- --------------------------------------------------------

-- 
-- Table structure for table `monthlyprediction`
-- 

CREATE TABLE `monthlyprediction` (
  `aries` varchar(10000) NOT NULL,
  `taurus` varchar(10000) NOT NULL,
  `gemini` varchar(10000) NOT NULL,
  `cancer` varchar(10000) NOT NULL,
  `leo` varchar(10000) NOT NULL,
  `virgo` varchar(1000) NOT NULL,
  `libra` varchar(1000) NOT NULL,
  `scorpio` varchar(1000) NOT NULL,
  `sagittarius` varchar(1000) NOT NULL,
  `capricorn` varchar(1000) NOT NULL,
  `aquarius` varchar(1000) NOT NULL,
  `pisces` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `monthlyprediction`
-- 

INSERT INTO `monthlyprediction` (`aries`, `taurus`, `gemini`, `cancer`, `leo`, `virgo`, `libra`, `scorpio`, `sagittarius`, `capricorn`, `aquarius`, `pisces`) VALUES 
('In <?php echo date("F"); ?>, the planetary transits are in your favor. People of the opposite sex will be quite attracted to you. You will take interest in charity. There may be a lot of progress in the education of your children. You will have a lot of workloads, yet you will be able to work well. You will have to spend more money on facilities. You may have to travel for the purpose of job. Your efficiency and intelligence will be appreciated. You may have to handle many tasks simultaneously. The latter part of the month will bring speed to your stalled tasks.\r\n\r\n\r\n                    In the second week of the month, you should avoid lending money. Business relations may get affected due to allegations and counter-allegations. Your life partner may have some health issues. Those associated with the real estate business may have to face some adverse circumstances. The first half of the month is not suitable for important tasks. In the fourth week, you will feel tired due to lack of sl', 'month tau', 'mon gemi', 'mon can', 'mon leo', 'mon virgo', 'mon libra', 'mon scor', 'mon sag', 'mon cap', 'mon aqu', 'mon pis');

-- --------------------------------------------------------

-- 
-- Table structure for table `nakshatra`
-- 

CREATE TABLE `nakshatra` (
  `no` int(3) NOT NULL auto_increment,
  `nakshtra` varchar(30) NOT NULL,
  `start` float NOT NULL,
  `end` float NOT NULL,
  `lord` varchar(30) NOT NULL,
  `ruling` varchar(30) NOT NULL,
  PRIMARY KEY  (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

-- 
-- Dumping data for table `nakshatra`
-- 

INSERT INTO `nakshatra` (`no`, `nakshtra`, `start`, `end`, `lord`, `ruling`) VALUES 
(1, 'Aswini', 0, 13.2, 'ketu', 'Aswini Kumara'),
(2, 'Bharani', 13.2, 26.4, 'Venus', 'Yama'),
(3, 'Krittika', 26.4, 10, 'Sun', 'Agni'),
(4, 'Rohini', 10, 23.2, 'Moon', 'Bramha'),
(5, 'Mrigasira', 23.2, 6.4, 'Mars', 'Moon'),
(6, 'Aardra', 6.4, 20, 'Rahu', 'Shiva'),
(7, 'Punarvasu', 20, 3.2, 'Jupiter', 'Aditi'),
(8, 'Pushyami', 3.2, 16.4, 'Saturn', 'Jupiter'),
(9, 'Aasresha', 16.4, 30, 'Mercury', 'Rahu'),
(10, 'Magha', 0, 13.2, 'Ketu', 'Sun'),
(11, 'Poorva Phalguni', 13.2, 26.4, 'Venus', 'Aryaman'),
(12, 'Uttara Phalguni', 26.4, 10, 'Sun', 'Sun'),
(13, 'Hasta', 10, 23.2, 'Moon', 'Viswakarma'),
(14, 'Chitra', 23.2, 6.4, 'Mars', 'Vaayu'),
(15, 'Swaati', 6.4, 20, 'Rahu', 'Indra'),
(16, 'Visaakha', 20, 3.2, 'Jupiter', 'Mitra'),
(17, 'Anooraadha', 3.2, 16.4, 'Saturn', 'Indra'),
(18, 'Jyeshtha', 16.4, 30, 'Mercury', 'Nirriti'),
(19, 'Moola', 0, 13.2, 'Ketu', 'Varuna'),
(20, 'Poorvaashaadha', 13.2, 26.4, 'Venus', 'Viswadeva'),
(21, 'Uttaraashaadha', 26.4, 10, 'Sun', 'Brahma'),
(22, 'Sravanam', 10, 23.2, 'Moon', 'Vishnu'),
(23, 'Dhanishtha', 23.2, 6.4, 'Mars', 'Vasu'),
(24, 'Satabhishak', 6.4, 20, 'Rahu', 'Varuna'),
(25, 'Poorvaabhaadra', 20, 3.2, 'Jupiter', 'Ajacharana'),
(26, 'Uttaraabhaadra', 3.2, 16.4, 'Saturn', 'Ahirbudhanya'),
(27, 'Revati', 16.4, 30, 'Mercury', 'Pooshan');

-- --------------------------------------------------------

-- 
-- Table structure for table `register`
-- 

CREATE TABLE `register` (
  `uid` int(5) NOT NULL auto_increment,
  `us` varchar(30) NOT NULL,
  `em` varchar(50) NOT NULL,
  `num` int(10) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY  (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `register`
-- 

INSERT INTO `register` (`uid`, `us`, `em`, `num`, `pass`, `image`) VALUES 
(1, 'admin', 'admin@gmail.com', 1234567890, '123', ''),
(2, 'ad', 'admin@gmail.com', 1234567890, '123', ''),
(3, 'jay', 'jay@gmail.com', 2147483647, 'jaydip', ''),
(4, 'mohit', 'rathodmohit1@gmail.com', 2345678, '11111111', ''),
(5, 'MATREE', 'm@gmail.com', 2147483647, '123', 'myimg.webp'),
(6, 'pruthvi', 'p@gmail.com', 123, '123', 'img.png');

-- --------------------------------------------------------

-- 
-- Table structure for table `usercomment`
-- 

CREATE TABLE `usercomment` (
  `username` varchar(100) NOT NULL,
  `comment` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `usercomment`
-- 

INSERT INTO `usercomment` (`username`, `comment`) VALUES 
('0', '1'),
('0', '0'),
('0', '0'),
('0', '0'),
('1', '0');

-- --------------------------------------------------------

-- 
-- Table structure for table `weeklyprediction`
-- 

CREATE TABLE `weeklyprediction` (
  `aries` varchar(10000) NOT NULL,
  `taurus` varchar(5000) NOT NULL,
  `gemini` varchar(5000) NOT NULL,
  `cancer` varchar(5000) NOT NULL,
  `leo` varchar(5000) NOT NULL,
  `virgo` varchar(5000) NOT NULL,
  `libra` varchar(5000) NOT NULL,
  `scorpio` varchar(5000) NOT NULL,
  `sagittarius` varchar(5000) NOT NULL,
  `capricorn` varchar(5000) NOT NULL,
  `aquarius` varchar(5000) NOT NULL,
  `pisces` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `weeklyprediction`
-- 

INSERT INTO `weeklyprediction` (`aries`, `taurus`, `gemini`, `cancer`, `leo`, `virgo`, `libra`, `scorpio`, `sagittarius`, `capricorn`, `aquarius`, `pisces`) VALUES 
('Auspicious Prediction: may try new things in your workplace. You will get excellent results in your work with the help of your colleagues. You will have to evaluate business policies. You will get great results in higher education. You will get both appreciation and criticism in your workplace. You may win legal matters. The time is favorable for love relationships. Your income may also increase. This week, your routine will be very disciplined. You may get great success in marketing-related work. Wednesday and Thursday will be most favorable days.', 'Auspicious Prediction: may try new things in your workplace. You will get excellent results in your work with the help of your colleagues. You will have to evaluate business policies. You will get great results in higher education. You will get both appreciation and criticism in your workplace. You may win legal matters. The time is favorable for love relationships. Your income may also increase. This week, your routine will be very disciplined. You may get great success in marketing-related work. Wednesday and Thursday will be most favorable days.', 'Auspicious Prediction: may try new things in your workplace. You will get excellent results in your work with the help of your colleagues. You will have to evaluate business policies. You will get great results in higher education. You will get both appreciation and criticism in your workplace. You may win legal matters. The time is favorable for love relationships. Your income may also increase. This week, your routine will be very disciplined. You may get great success in marketing-related work. Wednesday and Thursday will be most favorable days.', 'Auspicious Prediction: may try new things in your workplace. You will get excellent results in your work with the help of your colleagues. You will have to evaluate business policies. You will get great results in higher education. You will get both appreciation and criticism in your workplace. You may win legal matters. The time is favorable for love relationships. Your income may also increase. This week, your routine will be very disciplined. You may get great success in marketing-related work. Wednesday and Thursday will be most favorable days.', 'Auspicious Prediction: may try new things in your workplace. You will get excellent results in your work with the help of your colleagues. You will have to evaluate business policies. You will get great results in higher education. You will get both appreciation and criticism in your workplace. You may win legal matters. The time is favorable for love relationships. Your income may also increase. This week, your routine will be very disciplined. You may get great success in marketing-related work. Wednesday and Thursday will be most favorable days.', 'Auspicious Prediction: may try new things in your workplace. You will get excellent results in your work with the help of your colleagues. You will have to evaluate business policies. You will get great results in higher education. You will get both appreciation and criticism in your workplace. You may win legal matters. The time is favorable for love relationships. Your income may also increase. This week, your routine will be very disciplined. You may get great success in marketing-related work. Wednesday and Thursday will be most favorable days.', 'Auspicious Prediction: may try new things in your workplace. You will get excellent results in your work with the help of your colleagues. You will have to evaluate business policies. You will get great results in higher education. You will get both appreciation and criticism in your workplace. You may win legal matters. The time is favorable for love relationships. Your income may also increase. This week, your routine will be very disciplined. You may get great success in marketing-related work. Wednesday and Thursday will be most favorable days.', 'Auspicious Prediction: may try new things in your workplace. You will get excellent results in your work with the help of your colleagues. You will have to evaluate business policies. You will get great results in higher education. You will get both appreciation and criticism in your workplace. You may win legal matters. The time is favorable for love relationships. Your income may also increase. This week, your routine will be very disciplined. You may get great success in marketing-related work. Wednesday and Thursday will be most favorable days.', 'Auspicious Prediction: may try new things in your workplace. You will get excellent results in your work with the help of your colleagues. You will have to evaluate business policies. You will get great results in higher education. You will get both appreciation and criticism in your workplace. You may win legal matters. The time is favorable for love relationships. Your income may also increase. This week, your routine will be very disciplined. You may get great success in marketing-related work. Wednesday and Thursday will be most favorable days.', 'Auspicious Prediction: may try new things in your workplace. You will get excellent results in your work with the help of your colleagues. You will have to evaluate business policies. You will get great results in higher education. You will get both appreciation and criticism in your workplace. You may win legal matters. The time is favorable for love relationships. Your income may also increase. This week, your routine will be very disciplined. You may get great success in marketing-related work. Wednesday and Thursday will be most favorable days.', 'Auspicious Prediction: may try new things in your workplace. You will get excellent results in your work with the help of your colleagues. You will have to evaluate business policies. You will get great results in higher education. You will get both appreciation and criticism in your workplace. You may win legal matters. The time is favorable for love relationships. Your income may also increase. This week, your routine will be very disciplined. You may get great success in marketing-related work. Wednesday and Thursday will be most favorable days.', 'Auspicious Prediction: may try new things in your workplace. You will get excellent results in your work with the help of your colleagues. You will have to evaluate business policies. You will get great results in higher education. You will get both appreciation and criticism in your workplace. You may win legal matters. The time is favorable for love relationships. Your income may also increase. This week, your routine will be very disciplined. You may get great success in marketing-related work. Wednesday and Thursday will be most favorable days.');

-- --------------------------------------------------------

-- 
-- Table structure for table `zodiacsign`
-- 

CREATE TABLE `zodiacsign` (
  `aries` varchar(1000) NOT NULL,
  `taurus` varchar(1000) NOT NULL,
  `gemini` varchar(1000) NOT NULL,
  `cancer` varchar(1000) NOT NULL,
  `leo` varchar(1000) NOT NULL,
  `virgo` varchar(1000) NOT NULL,
  `libra` varchar(1000) NOT NULL,
  `scorpio` varchar(1000) NOT NULL,
  `sagittarius` varchar(1000) NOT NULL,
  `capricorn` varchar(1000) NOT NULL,
  `aquarius` varchar(1000) NOT NULL,
  `pisces` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `zodiacsign`
-- 

INSERT INTO `zodiacsign` (`aries`, `taurus`, `gemini`, `cancer`, `leo`, `virgo`, `libra`, `scorpio`, `sagittarius`, `capricorn`, `aquarius`, `pisces`) VALUES 
('aries', '', '', '', '', '', '', '', '', '', '', '');
