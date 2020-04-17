-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 17, 2020 at 11:43 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nvlst`
--

-- --------------------------------------------------------

--
-- Table structure for table `Books`
--

CREATE TABLE `Books` (
  `ID` int(11) UNSIGNED NOT NULL,
  `Title` text,
  `Author_Name` varchar(255) NOT NULL,
  `Genre` varchar(255) DEFAULT NULL,
  `Language` varchar(20) DEFAULT 'en',
  `Release_Date` date DEFAULT NULL,
  `Price` int(11) NOT NULL DEFAULT '1',
  `Provider` varchar(255) DEFAULT NULL,
  `ISBN` decimal(13,0) NOT NULL,
  `Pages` int(5) NOT NULL,
  `rating` int(11) NOT NULL,
  `des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Books`
--

INSERT INTO `Books` (`ID`, `Title`, `Author_Name`, `Genre`, `Language`, `Release_Date`, `Price`, `Provider`, `ISBN`, `Pages`, `rating`, `des`) VALUES
(1, 'Please See Us', 'Caitlin Mullen', 'Comedy', 'English', '2020-03-10', 422, 'The Novelist', '9771234567898', 234, 4, 'North Carolina, 1940: Anna Dale, an artist from New Jersey, wins a national contest to paint a mural for the post office in Edenton, North Carolina. Alone in the world and desperate for work, she accepts. But what she doesn\'t expect is to find herself immersed in a town where prejudices run deep, where people are hiding secrets behind closed doors, and where the price of being different might just end in murder. '),
(2, 'Ninth House', 'Leigh Bardugo', 'Fantasy', 'English', '2019-12-31', 362, 'Google Books', '9781234567897', 424, 5, 'You\'ll learn how to increase your time perception ...'),
(3, 'Long Bright River', 'Liz Moore', 'Thriller', 'English', '2017-12-31', 154, 'Amazon Books', '9765456322123', 642, 5, 'Thirty years later, Fiona is in Paris tracking down her estranged daughter who disappeared into a cult. While staying with an old friend, a famous photographer who documented the Chicago crisis, she finds herself finally grappling with the devastating ways AIDS affected her life and her relationship with her daughter. The two intertwining stories take us through the heartbreak of the eighties and the chaos of the modern world, as both Yale and Fiona struggle to find goodness in the midst of disaster.'),
(12, 'Still Lives', 'Maria Hummel', 'Art', 'English', '2018-01-17', 199, 'Amazon Books', '9781619021112', 275, 3, ' She Survived: Anne by M. William Phelps 4.18 avg. rating · 72 Ratings  He couldn’t kill her will to survive . . .   By the time Anne Bridges saw the gun in Jimmy Williams’s hand, it was already too late. The bad things she had heard about him—how he had drugged a woman and held her hostage—Anne now realized were true. Only now it was her turn.   What began as a well-intentioned attempt to reconnect with an old friend became, for Anne, a struggle to survive. In her own words Anne shares a chilling minute-by-minute account of her ordeal—the shotgun blast that nearly ended her life, her desperate struggle to escape, and the courage that sustained her on her long road to recovery—as part of a compelling narrative by award-winning, New York Times bestselling author M. William Phelps.  She is telling her story in hopes that other women will not have to go through what she endured at the hands of a violent attacker.'),
(13, 'Nothing Ventured', 'Jeffrey Archer', 'Art', 'English', '2017-10-18', 219, 'Amzon Books', '9781250200761', 320, 4, 'Once a successful whistleblower, Peernock denied his involvement in the murder, claiming a conspiracy against him on all levels. Confounding the justice system, hiring and firing lawyers, representing himself, saying everyone was against him. After numerous tense trials, Peernock was finally sentenced to life in prison, though those close to him still live in fear'),
(14, 'Art and Fear', 'David Bayles, Ted Orland', 'Thriller', 'English', '2017-02-15', 159, 'Amzon Books', '9780961454739', 122, 3, 'The search revealed nothing untoward but one of the guests recalled some unusual incidents leading up to the disappearance. He shared stories about holes being dug in the garden and filled in overnight. Guests who were taken ill and vanished overnight, and a number of excuses why they couldn’t be contacted. This was enough to launch a thorough investigation and on 11th November 1988, the Sacramento Police Department headed back to the boarding house with shovels in hand.'),
(15, 'Seven Days in the Art World', 'Sarah Thornton', 'Thriller', 'English', '2016-10-07', 359, 'The Novelist ', '9780393337129', 320, 5, 'n 1988, detectives from the Sacramento Police Department were called to investigate the disappearance of a man at his last known address, a boarding house for the elderly, homeless and mentally ill. The owner, Dorothea Puente, was an adorable old lady who cared for stray cats and the rest of society’s castaways. She had a strong standing in the community and was celebrated for her selfless charitable work.'),
(17, 'History of Art', 'H.W. Janson,Anthony F. Janson', 'Art', 'English', '2018-07-20', 239, 'The Novlist', '9780500237519', 1000, 4, 'Coming off a failed marriage, a beautiful woman named Toni joined an online dating site, hoping to find true and lasting love. Harold Henthorn seemed like her dream come true--a handsome man who said he had \"a heart for others.\" Only weeks after meeting, they were wed. But Toni\'s family began noticing Harold\'s dark side--especially his controlling nature, which Toni didn\'t seem to mind. Until she met her end at the bottom of a ravine.'),
(18, 'Color and Light', 'James Gurney', 'Art', 'English', '2019-03-20', 129, 'Amazon Books', '9780740797712', 224, 5, 'The gripping account of a heinous crime--and a mystery that has never been solved. When Kathryn Eastburn and her children were found stabbed to death, the brutal crime scene in Fort Bragg, N.C., seemed all too familiar. A suspect was arrested and convicted, but acquitted after spending three years on Death Row. Were the murders inspired by the infamous Fatal Vision case? Photos'),
(19, 'Interaction of Color', ' Josef Albers,Nicholas Fox Weber', 'Comedy', 'English', '2018-08-15', 149, 'Amazon Books', '9780300115956', 160, 4, 'It seemed like the perfect romantic afternoon: a kayaking trip for two on the Hudson River. But it ended in tragedy when Angelika Graswald called 911 to report that her fiancé, Vincent Viafore, had fallen into the choppy frigid waters. Authorities assumed it was an accident, but when the bereft bride-to-be posted videos of herself doing cartwheels on social media shortly before Vincent’s body was found, suspicions of murder rose to the surface'),
(20, 'Camera Lucida', 'Roland Barthes,Richard Howard (Translator)', 'Art', 'English', '2018-04-17', 99, 'Google Books', '9780374521349', 119, 3, 'After hours of questioning, Graswald made several shocking admissions. She said she felt “trapped” and fed up with Viafore\'s “demanding” sexual lifestyle: the nightlife, the strip clubs, the three-ways. “I wanted him dead,” she had said, even though she insisted that she didn’t kill him. But as more lurid details emerged—including a $250,000 life insurance policy—a killer question remained'),
(21, 'Leonardo\'s Notebooks', 'Leonardo da Vinci,H. Anna Suh (Editor)', 'Art', 'English', '2018-06-04', 179, 'The Novelist', '9781579124571', 352, 5, 'To their family, neighbors, and online friends, Louise and David Turpin presented a picture of domestic bliss: dressing their thirteen children in matching outfits and buying them expensive gifts. But what police discovered when they entered the Turpin family home would eclipse the most shocking child abuse cases in history. For years, David and Louise had kept their children in increasing isolation, trapping them in a sinister world of torture, abuse, and near starvation.'),
(22, 'Show Your Work!', 'Austin Kleon', 'Comedy', 'English', '2018-07-11', 49, 'Amazon', '9780761178972', 224, 5, 'To understand herself and her violent marriage, Sundberg looks to her childhood in Salmon, a small, isolated mountain community known as the most redneck town in Idaho. Like her marriage, Salmon is a place of deep contradictions, where Mormon ranchers and hippie back-to-landers live side-by-side; a place of magical beauty riven by secret brutality; a place that takes pride in its individualism and rugged self-sufficiency, yet is beholden to church and communal standards at all costs.'),
(23, 'Cosmos', 'Ann Druyan', 'Science', 'English', '2015-02-10', 329, 'The Novelist', '9781426219085', 384, 2, 'The search revealed nothing untoward but one of the guests recalled some unusual incidents leading up to the disappearance. He shared stories about holes being dug in the garden and filled in overnight. Guests who were taken ill and vanished overnight, and a number of excuses why they couldn’t be contacted. This was enough to launch a thorough investigation and on 11th November 1988, the Sacramento Police Department headed back to the boarding house with shovels in hand.'),
(24, 'Shuttle,Houston', 'Paul Dye', 'Science', 'English', '2018-04-17', 200, 'Amazon Books', '9780316454575', 288, 4, 'Mesmerizing and poetic, Goodbye, Sweet Girl is a harrowing, cautionary, and ultimately redemptive tale that brilliantly illuminates one woman’s transformation as she gradually rejects the painful reality of her violent life at the hands of the man who is supposed to cherish her, begins to accept responsibility for herself, and learns to believe that she deserves better.'),
(25, 'The Information Trade', 'Alexis Wichowski', 'Science', 'English', '2019-11-14', 158, 'The Novelist', '9780062888983', 304, 3, 'Kelly Sundberg’s husband, Caleb, was a funny, warm, supportive man and a wonderful father to their little boy Reed. He was also vengeful and violent. But Sundberg did not know that when she fell in love, and for years told herself he would get better. It took a decade for her to ultimately accept that the partnership she desired could not work with such a broken man. In her remarkable book, she offers an intimate record of the joys and terrors that accompanied her long, difficult awakening, and presents a haunting, heartbreaking glimpse into why women remain too long in dangerous relationships.'),
(26, 'Lurking', 'Joanne McNeil', 'Science', 'English', '2018-08-14', 79, 'Google Books', '9780374194338', 304, 5, 'Drawing on hundreds of interviews, as well as his own innovative behavior research, New York Times bestselling author Dan Heath delivers practical solutions for preventing problems rather than simply reacting to them—revolutionizing how we approach professional and personal goals in our daily lives.'),
(27, 'The Awkward Yeti Presents', 'Nick Seluk', 'Science', 'English', '2017-05-08', 120, 'Amazon', '9781524854058', 192, 5, 'Whether it’s time management, supply chain logistics, or healthcare decisions, all over the world, persistent problems cost time, money, and lives. Upstream explains how to target the source of the problem rather than just reacting to it as it happens and introduces you to the thinkers who are chipping away at everyday frustrations and deep-rooted issues.'),
(28, 'Island Stories', 'David Reynolds', 'History', 'English', '2016-04-04', 20, 'Amazon Books', '9781541646926', 304, 5, 'Most of us spend our days handling a deluge of pressing issues. We’re so accustomed to managing emergencies as they strike that we often don’t stop to think about how we could prevent crises before they happen. Why stop at treating the symptoms when you could develop a cure? How many daily headaches do we tolerate because we’ve forgotten to fix them?'),
(29, 'You Never Forget Your First', 'Alexis Coe', 'History', 'English', '2019-04-15', 149, 'Google Books', '9780735224100', 304, 3, 'You’ll learn how catalysts change minds in the toughest of situations: how hostage negotiators get people to come out with their hands up and how marketers get new products to catch on, how leaders transform organizational culture and how activists ignite social movements, how substance abuse counselors get addicts to realize they have a problem, and how political canvassers change deeply rooted political beliefs.'),
(30, 'Tower of Skulls', 'Richard B. Frank', 'History', 'English', '2018-07-24', 389, 'Amazon Books', '9781324002109', 751, 5, 'This book takes a different approach. Successful change agents know it’s not about pushing harder, or providing more information, it’s about being a catalyst. Catalysts remove roadblocks and reduce the barriers to change. Instead of asking, “How could I change someone’s mind?” they ask a different question: “Why haven’t they changed already? What’s stopping them?”'),
(31, '100 Bible Verses That Made America', 'Robert J. Morgan', 'History', 'English', '2016-05-09', 139, 'Google Books', '9780718079628', 384, 3, 'You\'ll learn how to increase your time perception to determine how your hours are being spent, invest in quality idle time, and focus on end goals instead of mean goals. It\'s time to reverse the trend that\'s making us all sadder, sicker, and less productive, and return to a way of life that allows us to thrive.'),
(32, 'American Nero', 'Richard Painter,  Peter Golenbock', 'History', 'English', '2018-03-13', 230, 'Google Books', '9781948836012', 400, 3, 'Despite our constant search for new ways to \"hack\" our bodies and minds for peak performance, human beings are working more instead of less, living harder not smarter, and becoming more lonely and anxious. We strive for the absolute best in every aspect of our lives, ignoring what we do well naturally and reaching for a bar that keeps rising higher and higher.'),
(33, 'Designing Your Work Life', 'Bill Burnett,  Dave Evans', 'Business', 'English', '2018-06-11', 380, 'Amazon Books', '9780525655244', 304, 5, 'We work feverishly to make ourselves happy. So why are we so miserable? This manifesto helps us break free of our unhealthy devotion to efficiency and shows us how to reclaim our time and humanity with a little more leisure.'),
(34, 'Do Nothing', 'Celeste Headlee', 'Business', 'English', '2018-06-22', 145, 'The Novelist', '9781984824738', 288, 5, 'In Do Nothing, award-winning journalist Celeste Headlee illuminates a new path ahead, seeking to institute a global shift in our thinking so we can stop sabotaging our well-being, put work aside, and start living instead of doing. As it turns out, we\'re searching for external solutions to an internal problem. We won\'t find what we\'re searching for in punishing diets or productivity apps. Celeste\'s strategies will allow you to regain control over your life and break your addiction to false efficiency. You\'ll learn how to increase your time perception to determine how your hours are being spent, invest in quality idle time, and focus on end goals instead of mean goals. It\'s time to reverse the trend that\'s making us all sadder, sicker, and less productive, and return to a way of life that allows us to thrive.'),
(35, 'The Catalyst', 'Jonah Berger', 'Business', 'English', '2017-01-10', 145, 'The Novelist', '9781982108601', 288, 4, 'This book is designed for anyone who wants to catalyze change. It provides a powerful way of thinking and a range of techniques that can lead to extraordinary results. Whether you’re trying to change one person, transform an organization, or shift the way an entire industry does business, this book will teach you how to become a catalyst.'),
(36, 'Sharks in the Time of Saviors', 'Kawai Strong Washburn', 'Fantasy', 'English', '2018-07-10', 307, 'Amazon Books', '9780374272081', 376, 5, '\"Sharks in the Time of Saviors is the story of a family, a people, and a legend, all wrapped in one. Faith and grief, rage and love, this book pulses with all of it. Kawai Strong Washburn makes his debut with a wealth of talent and a true artist\'s eye.\"'),
(37, 'Wicked As You Wish', 'Rin Chupeco', 'Fantasy', 'English', '2018-10-17', 350, 'Amazon Books', '9781492672661', 432, 5, 'Many years ago, the magical Kingdom of Avalon was left desolate and encased in ice when the evil Snow Queen waged war on the powerful country. Its former citizens are now refugees in a world mostly devoid of magic. Which is why the crown prince and his protectors are stuck in…Arizona.\r\nPrince Alexei, the sole survivor of the Avalon royal family, is in hiding in a town so boring, magic doesn’t even work there.'),
(38, 'The Kingdom of Back', 'Marie Lu', 'Fantasy', 'English', '2018-08-15', 213, 'Google Books', '9781524739027', 336, 4, 'From #1 New York Times bestselling author Marie Lu comes a historical YA fantasy about a musical prodigy and the dangerous lengths she\'ll go to make history remember herperfect for fans of Susanna Clarke and The Hazel Wood.'),
(39, 'We Ride Upon Sticks', 'Quan Barry', 'Fantasy', 'English', '2019-02-19', 160, 'Amazon Books', '9781524748098', 348, 5, 'From the author of the widely acclaimed She Weeps Each Time You\'re Born comes a new novel, at once comic and moving. Set in the coastal town of Danvers, Massachusetts (which in 1692 was Salem Village, site of the origins of the Salem Witch Trials), it follows the Danvers High field hockey team as they discover that the dark impulses of their Salem forebears may be the key to a winning season. '),
(40, 'Finna', 'Nino Cipri', 'Fantasy', 'English', '2018-07-18', 60, 'Amazon Books', '1765298514837', 144, 3, 'When an elderly customer at a big box furniture store slips through a portal to another dimension, its up to two minimum-wage employees to track her across the multiverse and protect their companys bottom line. Multi-dimensional swashbuckling would be hard enough, but our two unfortunate souls broke up a week ago.'),
(42, 'The Cobra Queen', 'Tara Moss', 'Fantasy', 'English', '2018-04-18', 179, 'Amazon Books', '9781760686260', 298, 4, 'In the months since Pandora English left the small town of Gretchenville to live with her mysterious great aunt in a supernatural Manhattan suburb, her whole world has been turned upside down.'),
(43, 'Into Darkness', 'Terry Goodkind ', 'Fantasy', 'English', '2016-03-17', 40, 'Amazon Books', '7854376258762', 345, 3, '\'The Sword of Truth series was my masterwork. Yet, life for these characters goes on after the conclusion of that series. For years readers have been asking about Richard and Kahlan\'s children. This is that story\' \r\nTERRY GOODKIND.'),
(44, 'Dinner in French', 'Melissa Clark', 'CookBook', 'English', '2019-08-07', 88, 'Amazon Books', '9780553448252', 336, 5, 'Just as Julia Child brought French cooking to twentieth-century America, so now Melissa Clark brings French cooking into the twenty-first century. She first fell in love with France and French food as a child; her parents spent their August vacations traversing the country in search of the best meals with Melissa and her sister in tow. Near to her heart, France is where Melissa\'s family learned to cook and eat. And as her own culinary identity blossomed, so too did her understanding of why French food is beloved by Americans.'),
(45, 'The Vegan Bodybuilder\'s Cookbook', 'Samantha Shorkey,Amy Longard', 'cookBook', 'English', '2019-07-10', 79, 'Amazon Books', '9781646111053', 216, 4, 'When it comes to gaining muscle, protein is king in the nutrient world, but you don’t have to be a carnivore to get “swole.” Plants contain the nutrients needed to support your bodybuilding efforts. The Vegan Bodybuilder’s Cookbook is your comprehensive guide to keep you on track towards shredded success.\r\n'),
(46, 'Soup Cookbook', 'Helen Simmington', 'CookBook', 'English', '2017-06-08', 37, 'The Novelist', '7654398725643', 58, 3, 'Soup Cookbook: The Ultimate Soup Cookbook: Delicious, Home Made Soup Recipes Anyone Can Make Tonight! Soup Cookbook Series And Soup Cookbook Books (Soup ... Soup Cookbooks, Soup Recipes Cookbook,)'),
(47, 'Five Ingredient Cookbook', 'Hannie P.Scott', 'Cookbook', 'English', '2017-06-23', 58, 'Amazon Books', '7836542371543', 79, 4, 'This SIMPLE and DELICIOUS cookbook has step-by-step recipes that are easy to follow and simply prepared. All of the recipes only require 5 ingredients or less! No more looking for hard-to-find ingredients that you\'ll only use once.'),
(48, 'The Blue Zones Kitchen', 'Dan Buettner', 'CookBook', 'English', '2018-07-03', 109, 'Amazon Books', '7835287145362', 303, 5, 'Building on decades of research, longevity expert Dan Buettner has gathered 100 recipes inspired by the Blue Zones, home to the healthiest and happiest communities in the world. Each dish--for example, Sardinian Herbed Lentil Minestrone; Costa Rican Hearts of Palm Ceviche; Cornmeal Waffles from Loma Linda, California; and Okinawan Sweet Potatoes--uses ingredients and cooking methods proven to increase longevity, wellness, and mental health.'),
(49, 'Nothing Fancy', 'Alison Roman', 'CookBook', 'English', '2017-09-09', 59, 'Google Books', '7342165437842', 320, 4, 'An unexpected weeknight meal with a neighbor or a weekend dinner party with fifteen of your closest friends—either way and everywhere in between, having people over is supposed to be fun, not stressful. This abundant collection of all-new recipes—heavy on the easy-to-execute vegetables and versatile grains, paying lots of close attention to crunchy, salty snacks, and with love for all the meats—is for gatherings big and small, any day of the week. '),
(50, 'Spirit Run', 'Noé Álvarez', 'Biography', 'English', '2018-07-19', 279, 'Amazon Books', '9781948226462', 240, 4, 'Growing up in Yakima, Washington, Noé Álvarez worked at an apple-packing plant alongside his mother, who “slouched over a conveyor belt of fruit, shoulder to shoulder with mothers conditioned to believe this was all they could do with their lives.” A university scholarship offered escape, but as a first-generation Latino college-goer, Álvarez struggled to fit in.'),
(51, 'In the Land of Men', 'Adrienne Miller', 'Biography', 'English', '2017-04-12', 167, 'Amazon Books', '9780062682413', 340, 5, 'A naive and idealistic twenty-two-year-old from the Midwest, Adrienne Miller got her lucky break when she was hired as an editorial assistant at GQ magazine in the mid-nineties. Even if its sensibilities were manifestly mid-century—the martinis, powerful male egos, and unquestioned authority of kings—GQ still seemed the red-hot center of the literary world.'),
(52, 'Truganini', 'Cassandra Pybus', 'Biography', 'English', '2016-08-26', 154, 'The Novelist', '9781760529222', 336, 5, 'Cassandra Pybus\' ancestors told a story of an old Aboriginal woman who would wander across their farm on Bruny Island, just off the coast of south-east Tasmania, throughout the 1850s and 1860s. As a child, Cassandra didn\'t know this woman was Truganini, and that she was walking over the country of her clan, the Nuenonne, of whom she was the last.'),
(53, 'Facebook: The Inside Story', 'Steven Levy', 'Biography', 'English', '2015-08-06', 489, 'Amazon Books', '9780735213159', 592, 4, 'Today, Facebook is nearly unrecognizable from Zuckerberg\'s first, modest iteration. It has grown into a tech giant, the largest social media platform and one of the most gargantuan companies in the world, with a valuation of more than $576 billion and almost 3 billion users, including those on its fully owned subsidiaries, Instagram and WhatsApp. There is no denying the power and omnipresence of Facebook in American daily life. And in light of recent controversies surrounding election-influencing \"fake news\" accounts, the handling of its users\' personal data, and growing discontent with the actions of its founder and CEO, never has the company been more central to the national conversation.'),
(54, 'My Autobiography of Carson McCullers', 'Jenn Shapland', 'biography', 'English', '2016-12-21', 149, 'Amazon Books', '9781947793286', 266, 5, 'While working as an intern in the archives at the Harry Ransom Center, Jenn Shapland encounters the love letters of Carson and a woman named Annemarie―letters are that are tender, intimate, and unabashed in their feelings. Shapland recognizes herself in the letters’ language―but does not see Carson as history has portrayed her.');

-- --------------------------------------------------------

--
-- Table structure for table `OrderHistory`
--

CREATE TABLE `OrderHistory` (
  `OrderID` int(5) NOT NULL,
  `UserID` int(5) NOT NULL,
  `Books` varchar(30) NOT NULL,
  `Date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `OrderHistory`
--

INSERT INTO `OrderHistory` (`OrderID`, `UserID`, `Books`, `Date`) VALUES
(1, 0, '1,2', 'date(Y/m/d)'),
(2, 0, '1,2', 'date(Y/m/d)'),
(3, 6, '1,2', 'date(Y/m/d)'),
(4, 6, '1,2', 'date(Y/m/d)');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `ID` int(9) NOT NULL,
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`ID`, `First_Name`, `Last_Name`, `Username`, `Email`, `Password`) VALUES
(3, 'Mohammed', 'Abdullah', 'MK', 'mk@gmail.com', '$2y$10$rfMworodJN1Nst/n/Bk.K.KMfYqZsiV2GyPpzxGPaXt.mJ5ciDJQ6'),
(4, 'Ali', 'Hussain', 'Nickelz', 'xinickelz@gmail.com', '$2y$10$mmi7637H.0Pz9ToSNYzKieDDwdbhoWBmHuEAKpak2Gbwz9DyT/u1u'),
(5, 'Eden', 'Hazard', 'Hazard', 'cfc@cfc.com', '123'),
(6, 'Ali', 'Ahmed', 'Azoz', 'mk@al.com', '$2y$10$J8dNhEjrnKca9GoSssKece9Vs795gercdxxFwDJPnWE4dxqLjUCnC');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `ID` int(10) NOT NULL,
  `UserID` int(30) NOT NULL,
  `Books` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`ID`, `UserID`, `Books`) VALUES
(1, 3, ''),
(2, 4, ''),
(3, 5, ''),
(4, 6, '1,3,12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Books`
--
ALTER TABLE `Books`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `isbn_issn_unique` (`ISBN`,`Pages`);

--
-- Indexes for table `OrderHistory`
--
ALTER TABLE `OrderHistory`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD KEY `ID` (`ID`),
  ADD KEY `Username` (`Username`),
  ADD KEY `Email` (`Email`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Books`
--
ALTER TABLE `Books`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `OrderHistory`
--
ALTER TABLE `OrderHistory`
  MODIFY `OrderID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `ID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
