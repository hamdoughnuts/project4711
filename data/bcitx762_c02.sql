-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2014 at 06:12 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bcitx762_c02`
--
CREATE DATABASE IF NOT EXISTS `bcitx762_c02` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bcitx762_c02`;

-- --------------------------------------------------------

--
-- Table structure for table `attractions`
--

CREATE TABLE IF NOT EXISTS `attractions` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `category` varchar(5) NOT NULL,
  `image1` varchar(50) NOT NULL,
  `image2` varchar(50) NOT NULL,
  `image3` varchar(50) NOT NULL,
  `longtext` varchar(1024) NOT NULL,
  `shorttext` varchar(256) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `most_popular_dish` varchar(100) DEFAULT NULL,
  `single_room_rate` varchar(100) DEFAULT NULL,
  `double_room_rate` varchar(100) DEFAULT NULL,
  `entrance_fee` varchar(10) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `attractions`
--

INSERT INTO `attractions` (`id`, `name`, `category`, `image1`, `image2`, `image3`, `longtext`, `shorttext`, `contact`, `address`, `date`, `most_popular_dish`, `single_room_rate`, `double_room_rate`, `entrance_fee`) VALUES
(1, 'Getto', 'eat', 'getto.jpg', 'getto2.jpg', 'getto3.jpeg', 'Getto is a burger bar with a difference: each burger is named after a drag queen who performs there – keep an eye on the website if you\\''re keen to catch an act. It describes itself as "an attitude-free zone, for gays, lesbians, bi, queers and straights". Relaxed and friendly, the bar staff mix great cocktails, and the interior has a chilled vibe. The burgers don''t disappoint: try the Jennifer Hopelezz beef burger with guacamole and bacon, or the Dolly Bellefleur lamb burger with tzatziki and grilled courgette. They''re served with chunky seasoned wedges and a mayo-heavy salad. And try the Gettopolitan – a cosmo made with Dutch Jenever liqueur.', 'A Burger bar with a difference, starting at €10, they open Tuesday-Thursday 4pm - 1am, Friday-Saturday 4pm - 2am, Sunday 4pm - Midnight', '31 20 421 5151', 'Warmoesstraat 51', '2014-10-31', 'Dolly Bellefleur lamb burger', NULL, NULL, ''),
(2, 'Van Kerkwijk', 'eat', 'vankerkwijk.jpg', 'vankerkwijk2.jpg', 'vankerkwijk3.jpg', 'Tucked down the Nes – what looks like a back alley running south of Dam square – Van Kerkwijk is unprepossessing from outside, but inside it''s habitually packed with customers at small wooden tables. They don\\''t take reservations, so get there early and have a drink while you wait. There''s no menu (in the ink-on-paper sense) so expect your waiter to recite a list of dishes. These range from French and Italian classics such as steak tartare and carpaccio, through to north African tagines and Indonesian curries. To start, try their house pâté, which is coarse, gamey and full of rustic French flavour. Van Kerkwijk''s meat is generally good, with mercifully undercooked, well-seasoned steaks and generous, chunky chips.', 'Italien classics, come join the fun! Mains from €15. Open daily 11am-late', '31 20 620 3316', 'Warmoesstraat 51', '2014-10-31', 'Prime rib with seasonal veggies', NULL, NULL, ''),
(3, 'De Zotte', 'eat', 'dezotte.jpg', 'dezotte2.jpg', 'dezotte3.jpg', 'Don''t go to de Zotte if you''re teetotal. This "brown cafe" is a mecca for Belgian beer lovers, with several good brews on tap and scores more in bottles. To stop you getting too sozzled, a simple but filling menu is on offer. It''s classic brown cafe fare: steaks with pepper, blue cheese or mushroom sauces, grilled lamb or chicken simply prepared. Non meat-eaters are also in for a treat: try De Zotte''s hartige tart – essentially a deep-pan quiche. The filling changes, but generally involves some kind of cheese and green vegetables. It''s huge, filling and feels like a hug on a cold day. Try it with sweet, dark bokbier on an autumn evening and breathe a contented sigh.', 'If you like beer, come here . Mains from €10. Open Sun-Thurs 4pm-1am, Fri, Sat 4pm-3am', '31 20 626 8694', 'Raamstraat 29', '2014-10-31', 'Aged steak with blue cheese sauce', NULL, NULL, ''),
(4, 'Hotel Seven One Seven 717', 'sleep', '717.jpg', '7172.jpg', '7173.jpg', 'Seven one seven hotel offers unique canal-side establishment in a pleasant atmosphere with the utmost respect for privacy and comfort. The magnificent facade of the house, a monumental building, already indicates the beautiful interior. After entering, the marble floor is revealed with a solid oak staircase leading to two enchanting suites. These have a view towards the Prinsengracht at the front of the house. The stairs also lead to the six roomy suites and rooms at the back that look out on the patio.', '5 Stars, 8 Rooms, build in the 1600''s', '31 20 427 0717', 'Prinsengracht 717, 1017 JW', '2014-10-31', NULL, ' $100', '$150', ''),
(5, 'The College Hotel', 'sleep', 'thecollegehotel.jpg', 'thecollegehotel2.jpg', 'thecollegehotel3.jpg', 'The College Hotel is located in a historic former school building. A sense of history is mirrored in the tall ceilings, comforting fireplaces and stretching staircases. The College Hotel perfectly blends Amsterdam''s aristocratic style of times gone with the energy and the design that marks this city as a youthful Mecca. It is 5 minutes walking distance from the main museum district and Amsterdam\\''s exclusive shopping area, and 10 minutes walking distance from the city centre.', '5 Stars, 30 Rooms, build in 2004', '31 20 571 1511', 'Roelof Hartstraat 1, 1071 VE', '2014-10-31', NULL, '$80', '$120', ''),
(6, 'Grand Hotel Amrath Amsterdam', 'sleep', 'amrath.jpg', 'amrath2.jpg', 'amrath3.jpg', 'Welcome to the Grand Hotel Amrath Amsterdam, the latest five star Deluxe hotel situated right in the heart of the city. The 165 spacious rooms and suites feature the latest in comfort, style and facilities, decorated in the Art Deco style of the building. The hotel was established in the monumental Shipping House and has splendid views over the Amsterdam canals and the river IJ.', '5 Stars, 165 Rooms, build in 2007', '31 20 552 0000', 'Prins Hendrikkade 108, 1011 AK', '2014-10-31', NULL, '$125', '$165', ''),
(7, 'Van Gogh Museum', 'play', 'vangogh.jpg', 'vangogh2.jpg', 'vangogh3.jpg', 'Amsterdam Van Gogh Museum maintains the world’s largest collection of the works of the world’s most popular artist - Vincent van Gogh (1853-1890), his paintings, drawings and letters, completed with the art of his contemporaries. Each year, 1.6 million visitors come to the Van Gogh Museum, making it one of the 25 most popular museums in the world.', 'Discover the impact and history Van Gogh left on the world', '31 20 552 0000', 'Prins Hendrikkade 108, 1011 AK', '2014-10-31', NULL, NULL, NULL, '$15'),
(8, 'Anne Frank House', 'play', 'annefrank.jpg', 'annefrank2.jpg', 'annefrank3.jpg', 'The Anne Frank House (Dutch: Anne Frank Huis) is a historic house and biographical museum dedicated to Jewish wartime diarist Anne Frank. The building is located at the Prinsengracht, close to the Westerkerk, in the city center of Amsterdam in the Netherlands.\r\n\r\nDuring World War II, Anne Frank hid from Nazi persecution with her family and four other people in hidden rooms at the rear of the 17th-century canal house, known as the Secret Annex (Dutch: Achterhuis). Anne Frank did not survive the war, but in 1947 her wartime diary was published. In 1957, the Anne Frank Foundation was established to protect the property from developers who wanted to demolish the block. The museum opened on 3 May 1960. It preserves the hiding place, has a permanent exhibition on the life and times of Anne Frank, and has an exhibition space about all forms of persecution and discrimination. ', 'Come visit the girl that dissapeared', '31 20 556 7100', 'Prinsengracht 263-267, 1016 GV', '2014-10-31', NULL, NULL, NULL, '$10'),
(9, 'Heineken Experience', 'play', 'heinekin.jpg', 'heinekin2.jpg', 'heinekin3.JPG', 'There is something secretive about the taste of the world’s best beers and certainly Heineken pilsner belongs to this group. The brewery was established in Amsterdam in 1864 and today Heineken is a huge multinational company, one of the three largest beer producers in the world. Throughout its history, Heineken remained by and large family company, with Charlene de Carvalho-Heineken as its biggest stockholder and her husband Michel on the company’s board. Heineken rich and successful history has been presented in their old defunct brewery in Amsterdam, with several amusement park attractions added to the exhibit and renamed as Amsterdam Heineken Experience.', 'Come for a drink! Say hello! Have fun !', '31 20 523 9222', 'Stadhouderskade 78, 1072 AE', '2014-10-31', NULL, NULL, NULL, '$20');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attractions`
--
ALTER TABLE `attractions`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
 ADD PRIMARY KEY (`session_id`), ADD KEY `last_activity_idx` (`last_activity`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attractions`
--
ALTER TABLE `attractions`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;