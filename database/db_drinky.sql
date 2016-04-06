-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Apr 05, 2016 at 10:42 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: db_drinky
--

-- --------------------------------------------------------

--
-- Table structure for table tbl_catd
--

CREATE TABLE tbl_catd (
  catD_id smallint(4) unsigned NOT NULL,
  catD_name varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table tbl_catd
--

INSERT INTO tbl_catd (catD_id, catD_name) VALUES
(1, 'Wine'),
(2, 'Spirits'),
(3, 'Beer'),
(4, 'Cider');

-- --------------------------------------------------------

--
-- Table structure for table tbl_drink
--

CREATE TABLE tbl_drink (
  drink_id smallint(5) unsigned NOT NULL,
  drink_title varchar(100) NOT NULL,
  drink_amount varchar(50) NOT NULL,
  drink_case varchar(50) NOT NULL,
  drink_price varchar(100) NOT NULL,
  drink_img varchar(100) NOT NULL,
  drink_type varchar(50) NOT NULL,
  drink_info text NOT NULL,
  drink_comp varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table tbl_drink
--

INSERT INTO tbl_drink (drink_id, drink_title, drink_amount, drink_case, drink_price, drink_img, drink_type, drink_info, drink_comp) VALUES
(4, 'Glorious Taste Lda 2009 Fonte Do Sapo RESERVA tinto Tras-Os-Montes', '750 ml', '12 Bottles', '282.00', 'wine.jpg', 'Wine', 'After fermentation in large vats, the wine spends a period of 9  months n French oak barrels. A minimum of six months in the bottle before marketing.\r\n\r\nDark ruby color with touches of brown.\r\n\r\nNose: Intense marked with notes of ripe red fruit and a slight sent of must from the Tinta Amarela\r\n\r\nMouth: Soft and well balanced with  tannins  well balanced by the oak. A remarkable grape variety blend with complexity and marked by a long and persistent finish.', 'Glorious Taste Lda Tras-os-Montes'),
(5, 'Magic Moments (Radico Khaitan) Vodka', '750 ml', '9 bottles', '79.65', 'magic_moments1.jpg', 'Spirits', 'Magic Moments is the FIRST and ONLY Certified Gluten-Free brand to carry the GFCP logo which is endorsed by the Canadian Celiac Association.  We have gone through a vigorous process to have our plant audited and the alcohol products being produced to be Certified Gluten-Free. Most auditing programs only test the final product for gluten (regardless of what it is made from) and have certain parameters they follow â€“ such as under 20ppm or 10ppm. Our audit is unique for the following reasons:\r\n\r\nThe alcohol base CANNOT be a gluten grain to begin with\r\nWe cannot add any gluten purposely in our mix at any stage of the process\r\nEmployees and Management have been versed in gluten and understand how to prevent cross contamination. Policies and procedures are changed in the plant to reflect this\r\nWe minimize (as much as humanly possible) to reduce any cross contamination of gluten within the plant\r\nThe batch is tested to make sure it complies with all government standards when it comes to gluten free claims\r\nIf any of the above is not adhered to, this results in a failure\r\nThis audit has been endorsed by the Canadian Celiac Association and the National Foundation for Celiac Awareness in the United States of America. We are able to add the â€˜Mark of Trustâ€™ to our alcohol products so that celiac/gluten intolerant consumers know we have done everything possible to provide a safe, gluten free alcohol product. This audit is one of the toughest when it comes to becoming certified in the industry.\r\n\r\nMagic Moments Vodka is made from 100% non-GMO wild rice in India.  It is triple distilled at the correct temperature and filtered 15 times!  It is the #1 selling vodka in India and #19 in the world according to Forbes.  There are no artificial colours or preservatives.\r\n\r\nNOTE: This is a special order product and may take 8-12 weeks to deliver.', 'Magic Moments (Radico Khaitan) India'),
(6, 'Highlander Brew Co. Lion Grass', '650 ml', '12 Bottles', '53.10', 'beer.jpg', 'Beer', 'Flavour Profile: Lion Grass Ale blends organic lemongrass and dandelion leaf with Cascade hops. Well-balanced leaning towards the malt side with hints of honey, a citrus dryness with a light and clean finish.\r\n\r\nInternational Bitterness Unit: 37\r\n\r\nâ€œLion Grass... is a blonde ale that has been flavoured with organic lemongrass and dandelion leaves.\r\n\r\nâ€œPours a cheery gold colour with a fluffy off-white head made up of tiny bubbles. Nose is very green and herbaceous with a distinct lemon scent and a hint of lemon bread. First sip gives us sweet lemon and lemon curd, with a chicory/coffee note from the dandelions. There is a slight herbal bitterness that tastes similar to a frisee salad with a citrus dressing. Finish brings out a touch of barley and bread before going into a tangy lemon zest aftertaste. The beer tastes very green, lots of leafiness to it fresh and bright (a nice change from all of the heavy stouts and ales I have been tasting lately).\r\n\r\nâ€œThere is also a very wine-like feel to it. I get a nice grapey taste with the citrus and there are moments I feel like I am tasting a sauvignon blanc or a light riesling. Aeration brings out a good hit of malt, tangy sweet and dark malt sugars, and a hint of caramel right at the back.\r\n\r\nâ€œWell, thatâ€™s a different, interesting, and very refreshing beer. It has a lot going on in the flavour department while still being light. You definitely need to get one of these in you...â€', 'Highlander Brew Co. Ontario'),
(8, 'Louis de Lauriston Cider Brut', '750 ml', '6 Bottles', '96.00', 'louis_cider.jpg', 'Cider', 'PoirÃ© is a traditional beverage made in Normandy by the fermentation of Pear Juice. It is made of several Pear Varieties such as Plant de Blanc, Muscadet, Avenelle and Poire de Grise. Quickly crushed after picking, the pear juice ferments naturally for 5 to 8 weeks. PoirÃ© is bottled in the middle of the fermentation process. Fermentation then continues inside the bottle: sugar is transformed into alcohol with natural production of carbonic gas with resulting bubbles.\r\n\r\nTasting Notes:\r\n\r\nVery clear colour with gold high lights. Nose is delicate with pear flavours and citrus hints. Mouth is refreshing both fruity and dry. How to enjoy PoirÃ© : PoirÃ© is a light, elegant and refreshing drink which can be enjoyed as an aperitif. Recommended starters pairings : terrines, shellfish (excellent with oysters), salads (artichoke, endive, curly endive). Main Course : steamed fish Dessert: fruit sorbets, strawberries.\r\n\r\nA tasting glass as for wine is the best - (I.N.A.O. glass)', 'Louis de Lauriston Europe');

-- --------------------------------------------------------

--
-- Table structure for table tbl_staff
--

CREATE TABLE tbl_staff (
  staff_id smallint(5) unsigned NOT NULL,
  staff_img varchar(100) NOT NULL,
  staff_name varchar(100) NOT NULL,
  staff_info text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table tbl_staff
--

INSERT INTO tbl_staff (staff_id, staff_img, staff_name, staff_info) VALUES
(1, 'bill.jpg', 'Bill Wittur, Chief Sipster', 'Bill has been a wine agent for nearly 5 years, but also has substantial experience and recognition for his participation in the evolution of online marketing and digital platforms. He''s a chronic entrepreneur and has started and managed two other businesses in the past: an online music portal and a digital marketing consulting company. Interests include music, especially live concerts, movies, guitar, travel and gaming. Favourite ''go to'' libation: gin & cucumber soda with a touch of lime Favourite bands: U2, The National, Yukon Blonde, The Shins, Oasis, ELO, Bruce Springsteen, Stars Favourite Games: Anything to do with Batman, Assassin''s Creed'),
(2, 'ryan.jpg', 'Liam Rice, Chief Code Monkey', 'Liam has most of his coding years building stuff from backend to front, touching all kinds of different code bases over the years. From before the dotCom world to Web 2.0 and now beyond. Building stuff for the automotive, sports, and medical sectors. Bill offered some alcohol :). He''s a beach volleyball player, cyclist, hockey player and also a referee for probably too long (so he''s totally never wrong ;P). Favourite ''go to'' libation: a good old rum and coke, or something sweet Favourite bands: Pretty much everything from motown to indie. A good fast pace is great for getting stuff done. Favourite Games: Super Dodgeball for the original NES');

-- --------------------------------------------------------

--
-- Table structure for table tbl_supplier
--

CREATE TABLE tbl_supplier (
  supplier_id smallint(4) unsigned NOT NULL,
  supplier_img varchar(100) NOT NULL,
  supplier_name varchar(100) NOT NULL,
  supplier_url varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table tbl_supplier
--

INSERT INTO tbl_supplier (supplier_id, supplier_img, supplier_name, supplier_url) VALUES
(1, 'beaver.jpg', 'Frisky & Gamble Cellars', '#'),
(2, 'highlander.jpg', 'Highlander Brew Co.', 'localhost'),
(3, 'ampersand.jpg', 'Ampersand Distilling Co', 'localhost'),
(4, 'camp.jpg', 'Tenuta Campoferrato', 'localhost'),
(5, 'dry_digs.jpg', 'Dry Diggings', 'localhost'),
(6, 'mateus.jpg', 'Mateus & Sequeira Vinhos S.A.', 'localhost'),
(7, 'millaire.jpg', 'Milliaire Winery', 'localhost'),
(8, 'skinner.jpg', 'Skinner Vineyards', 'localhost'),
(9, 'trail.jpg', 'Trail Estate', 'localhost'),
(10, 'grady.jpg', 'Grady Family Vineyards', 'localhost'),
(11, 'reif.jpg', 'Reif Estate Winery', 'localhost'),
(12, 'voir.jpg', 'VoirNosVins - CRWines', 'localhost'),
(13, 'yukon.jpg', 'Yukon Shine Distillery', 'localhost');

-- --------------------------------------------------------

--
-- Table structure for table tbl_user
--

CREATE TABLE tbl_user (
  user_id smallint(4) unsigned NOT NULL,
  user_name varchar(50) NOT NULL,
  user_pass varchar(50) NOT NULL,
  user_email varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table tbl_user
--

INSERT INTO tbl_user (user_id, user_name, user_pass, user_email) VALUES
(1, 'robij9528', 'jaker', 'jakerobinson9528@gmail.com'),
(2, 'Jacob', 'dsadasd', 'jakerobinson9528@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table tbl_catd
--
ALTER TABLE tbl_catd
  ADD PRIMARY KEY (catD_id);

--
-- Indexes for table tbl_drink
--
ALTER TABLE tbl_drink
  ADD PRIMARY KEY (drink_id);

--
-- Indexes for table tbl_staff
--
ALTER TABLE tbl_staff
  ADD PRIMARY KEY (staff_id);

--
-- Indexes for table tbl_supplier
--
ALTER TABLE tbl_supplier
  ADD PRIMARY KEY (supplier_id);

--
-- Indexes for table tbl_user
--
ALTER TABLE tbl_user
  ADD PRIMARY KEY (user_id);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table tbl_catd
--
ALTER TABLE tbl_catd
  MODIFY catD_id smallint(4) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table tbl_drink
--
ALTER TABLE tbl_drink
  MODIFY drink_id smallint(5) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table tbl_staff
--
ALTER TABLE tbl_staff
  MODIFY staff_id smallint(5) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table tbl_supplier
--
ALTER TABLE tbl_supplier
  MODIFY supplier_id smallint(4) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table tbl_user
--
ALTER TABLE tbl_user
  MODIFY user_id smallint(4) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
