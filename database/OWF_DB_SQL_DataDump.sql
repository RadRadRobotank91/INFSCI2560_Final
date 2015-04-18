-- phpMyAdmin SQL Dump
-- version 2.8.0.1
-- http://www.phpmyadmin.net
-- 
-- Host: custsql-sl03.eigbox.net
-- Generation Time: Apr 08, 2015 at 08:30 PM
-- Server version: 5.5.32
-- PHP Version: 4.4.9
-- 
-- Database: `owf`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `CSALocation`
-- 

CREATE TABLE `CSALocation` (
  `lid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zip` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `CSALocation`
-- 

INSERT INTO `CSALocation` VALUES (default, 'East Liberty Farmers Market', 'Station St', 'Pittsburgh', 'PA', '15206', 'Monday Afternoon');
INSERT INTO `CSALocation` VALUES (default, 'Glenshaw Presbyterian Church', '300 Glen Ave', 'Glenshaw', 'PA', '15116', 'Thursday Afternoon');
INSERT INTO `CSALocation` VALUES (default, 'Mount Lebanon Hillaire Drive', '817 Hillaire Dr', 'Mount Lebanon', 'PA', '15243', 'Monday Afternoon');
INSERT INTO `CSALocation` VALUES (default, 'One Woman Farm', '5857 Valencia Rd', 'Gibsonia', 'PA', '15044', 'Thursday Afternoon');
INSERT INTO `CSALocation` VALUES (default, 'Squirrel Hill Farmers Market', '5737 Beacon St', 'Pittsburgh', 'PA', '15217', 'Sunday Mornings');
INSERT INTO `CSALocation` VALUES (default, 'St. Pauls United Methodist Church', '1965 Ferguson Rd', 'Allison Park', 'PA', '15101', 'Monday Afternoon');
INSERT INTO `CSALocation` VALUES (default, 'Market Square Farmers Market', '23 Market Place', 'Pittsburgh', 'PA', '15222', 'Thursday Afternoon');

-- --------------------------------------------------------

-- 
-- Table structure for table `CSAType`
-- 

CREATE TABLE `CSAType` (
  `csaid` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(9,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`csaid`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `CSAType`
-- 

INSERT INTO `CSAType` VALUES (default, 'Weekly Standard CSA', 500.00);
INSERT INTO `CSAType` VALUES (default, 'Bi-weekly Standard CSA', 325.00);
INSERT INTO `CSAType` VALUES (default, 'Large Market Membership', 500.00);
INSERT INTO `CSAType` VALUES (default, 'Small Market Membership', 300.00);
INSERT INTO `CSAType` VALUES (default, 'Bi-weekly 1lb. Organic Coffee - Ground Beans', 126.00);
INSERT INTO `CSAType` VALUES (default, 'Bi-weekly 1lb. Organic Coffee - Whole Beans', 126.00);
INSERT INTO `CSAType` VALUES (default, 'Bi-weekly 1lb. Decaffeinated  Organic Coffee - Ground Beans', 138.00);
INSERT INTO `CSAType` VALUES (default, 'Bi-weekly 1lb. Decaffeinated  Organic Coffee - Whole Beans', 138.00);

-- --------------------------------------------------------

-- 
-- Table structure for table `Cust_has_Bal`
-- 

CREATE TABLE `Cust_has_Bal` (
  `cid` int(11) NOT NULL,
  `balance` decimal(9,2) NOT NULL DEFAULT '0.00',
  KEY `cid` (`cid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `Cust_has_Bal`
-- 

INSERT INTO `Cust_has_Bal` VALUES (6, 535.00);
INSERT INTO `Cust_has_Bal` VALUES (7, 535.00);
INSERT INTO `Cust_has_Bal` VALUES (8, 315.00);
INSERT INTO `Cust_has_Bal` VALUES (9, 535.00);
INSERT INTO `Cust_has_Bal` VALUES (10, 315.00);
INSERT INTO `Cust_has_Bal` VALUES (11, 315.00);
INSERT INTO `Cust_has_Bal` VALUES (12, 535.00);
INSERT INTO `Cust_has_Bal` VALUES (13, 535.00);
INSERT INTO `Cust_has_Bal` VALUES (14, 535.00);
INSERT INTO `Cust_has_Bal` VALUES (15, 535.00);
INSERT INTO `Cust_has_Bal` VALUES (16, 244.50);
INSERT INTO `Cust_has_Bal` VALUES (17, 302.50);
INSERT INTO `Cust_has_Bal` VALUES (18, 463.00);
INSERT INTO `Cust_has_Bal` VALUES (19, 93.50);
INSERT INTO `Cust_has_Bal` VALUES (20, 180.50);

-- --------------------------------------------------------

-- 
-- Table structure for table `Cust_has_CSA`
-- 

CREATE TABLE `Cust_has_CSA` (
  `cid` int(11) NOT NULL,
  `csaid` int(11) NOT NULL,
  `lid` int(11) NOT NULL,
  KEY `cid` (`cid`),
  KEY `csaid` (`csaid`),
  KEY `lid` (`lid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `Cust_has_CSA`
-- 

INSERT INTO `Cust_has_CSA` VALUES (1, 1, 1);
INSERT INTO `Cust_has_CSA` VALUES (2, 1, 3);
INSERT INTO `Cust_has_CSA` VALUES (2, 7, 3);
INSERT INTO `Cust_has_CSA` VALUES (3, 1, 2);
INSERT INTO `Cust_has_CSA` VALUES (4, 1, 5);
INSERT INTO `Cust_has_CSA` VALUES (5, 1, 4);
INSERT INTO `Cust_has_CSA` VALUES (5, 6, 4);
INSERT INTO `Cust_has_CSA` VALUES (6, 5, 5);
INSERT INTO `Cust_has_CSA` VALUES (6, 3, 5);
INSERT INTO `Cust_has_CSA` VALUES (7, 3, 1);
INSERT INTO `Cust_has_CSA` VALUES (8, 4, 2);
INSERT INTO `Cust_has_CSA` VALUES (9, 3, 3);
INSERT INTO `Cust_has_CSA` VALUES (10, 4, 4);
INSERT INTO `Cust_has_CSA` VALUES (11, 4, 5);
INSERT INTO `Cust_has_CSA` VALUES (12, 3, 6);
INSERT INTO `Cust_has_CSA` VALUES (13, 3, 7);
INSERT INTO `Cust_has_CSA` VALUES (14, 3, 6);
INSERT INTO `Cust_has_CSA` VALUES (15, 3, 5);
INSERT INTO `Cust_has_CSA` VALUES (16, 4, 4);
INSERT INTO `Cust_has_CSA` VALUES (17, 3, 3);
INSERT INTO `Cust_has_CSA` VALUES (18, 3, 2);
INSERT INTO `Cust_has_CSA` VALUES (19, 4, 1);
INSERT INTO `Cust_has_CSA` VALUES (20, 3, 2);
INSERT INTO `Cust_has_CSA` VALUES (21, 2, 6);
INSERT INTO `Cust_has_CSA` VALUES (22, 2, 7);
INSERT INTO `Cust_has_CSA` VALUES (22, 7, 7);
INSERT INTO `Cust_has_CSA` VALUES (23, 2, 4);
INSERT INTO `Cust_has_CSA` VALUES (24, 2, 2);
INSERT INTO `Cust_has_CSA` VALUES (24, 8, 2);
INSERT INTO `Cust_has_CSA` VALUES (25, 2, 1);

-- --------------------------------------------------------

-- 
-- Table structure for table `Cust_makes_Pickup`
-- 

CREATE TABLE `Cust_makes_Pickup` (
  `cid` int(11) NOT NULL,
  `pDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lid` int(11) NOT NULL,
  KEY `cid` (`cid`),
  KEY `lid` (`lid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `Cust_makes_Pickup`
-- 

INSERT INTO `Cust_makes_Pickup` VALUES (1, '2014-06-18 13:45:34', 1);
INSERT INTO `Cust_makes_Pickup` VALUES (1, '2014-06-25 13:34:34', 1);
INSERT INTO `Cust_makes_Pickup` VALUES (1, '2014-07-02 13:22:23', 1);
INSERT INTO `Cust_makes_Pickup` VALUES (1, '2014-07-09 13:43:41', 1);
INSERT INTO `Cust_makes_Pickup` VALUES (1, '2014-07-16 13:54:14', 1);
INSERT INTO `Cust_makes_Pickup` VALUES (1, '2014-07-23 14:04:12', 1);
INSERT INTO `Cust_makes_Pickup` VALUES (1, '2014-07-30 14:02:11', 1);
INSERT INTO `Cust_makes_Pickup` VALUES (1, '2014-08-06 14:01:54', 1);
INSERT INTO `Cust_makes_Pickup` VALUES (1, '2014-08-13 14:15:36', 1);
INSERT INTO `Cust_makes_Pickup` VALUES (1, '2014-08-20 14:18:16', 1);
INSERT INTO `Cust_makes_Pickup` VALUES (1, '2014-08-27 13:33:10', 1);
INSERT INTO `Cust_makes_Pickup` VALUES (1, '2014-09-03 13:51:19', 1);
INSERT INTO `Cust_makes_Pickup` VALUES (1, '2014-09-10 14:12:39', 1);
INSERT INTO `Cust_makes_Pickup` VALUES (1, '2014-09-17 13:59:28', 1);
INSERT INTO `Cust_makes_Pickup` VALUES (2, '2014-06-18 14:45:34', 3);
INSERT INTO `Cust_makes_Pickup` VALUES (2, '2014-06-25 14:34:43', 3);
INSERT INTO `Cust_makes_Pickup` VALUES (2, '2014-07-02 14:22:23', 3);
INSERT INTO `Cust_makes_Pickup` VALUES (2, '2014-07-09 14:43:41', 3);
INSERT INTO `Cust_makes_Pickup` VALUES (2, '2014-07-16 14:54:14', 3);
INSERT INTO `Cust_makes_Pickup` VALUES (2, '2014-07-23 15:04:12', 3);
INSERT INTO `Cust_makes_Pickup` VALUES (2, '2014-07-30 15:02:11', 3);
INSERT INTO `Cust_makes_Pickup` VALUES (2, '2014-08-06 15:01:54', 3);
INSERT INTO `Cust_makes_Pickup` VALUES (2, '2014-08-13 15:15:36', 3);
INSERT INTO `Cust_makes_Pickup` VALUES (2, '2014-08-20 15:18:16', 3);
INSERT INTO `Cust_makes_Pickup` VALUES (2, '2014-08-27 14:33:10', 3);
INSERT INTO `Cust_makes_Pickup` VALUES (2, '2014-09-03 14:51:19', 3);
INSERT INTO `Cust_makes_Pickup` VALUES (2, '2014-09-10 15:12:39', 3);
INSERT INTO `Cust_makes_Pickup` VALUES (2, '2014-09-17 14:59:28', 3);
INSERT INTO `Cust_makes_Pickup` VALUES (3, '2014-06-18 14:45:34', 2);
INSERT INTO `Cust_makes_Pickup` VALUES (3, '2014-06-25 14:34:43', 2);
INSERT INTO `Cust_makes_Pickup` VALUES (3, '2014-07-02 14:22:23', 2);
INSERT INTO `Cust_makes_Pickup` VALUES (3, '2014-07-09 14:43:41', 2);
INSERT INTO `Cust_makes_Pickup` VALUES (3, '2014-07-16 14:54:14', 2);
INSERT INTO `Cust_makes_Pickup` VALUES (3, '2014-07-23 15:04:12', 2);
INSERT INTO `Cust_makes_Pickup` VALUES (3, '2014-07-30 15:02:11', 2);
INSERT INTO `Cust_makes_Pickup` VALUES (3, '2014-08-06 15:01:54', 2);
INSERT INTO `Cust_makes_Pickup` VALUES (3, '2014-08-13 15:15:36', 2);
INSERT INTO `Cust_makes_Pickup` VALUES (3, '2014-08-20 15:18:16', 2);
INSERT INTO `Cust_makes_Pickup` VALUES (3, '2014-08-27 14:33:10', 2);
INSERT INTO `Cust_makes_Pickup` VALUES (3, '2014-09-03 14:51:19', 2);
INSERT INTO `Cust_makes_Pickup` VALUES (3, '2014-09-10 15:12:39', 2);
INSERT INTO `Cust_makes_Pickup` VALUES (3, '2014-09-17 14:59:28', 2);
INSERT INTO `Cust_makes_Pickup` VALUES (4, '2014-06-18 10:45:34', 5);
INSERT INTO `Cust_makes_Pickup` VALUES (4, '2014-06-25 10:34:43', 5);
INSERT INTO `Cust_makes_Pickup` VALUES (4, '2014-07-02 11:22:23', 5);
INSERT INTO `Cust_makes_Pickup` VALUES (4, '2014-07-09 10:43:41', 5);
INSERT INTO `Cust_makes_Pickup` VALUES (4, '2014-07-16 10:54:14', 5);
INSERT INTO `Cust_makes_Pickup` VALUES (4, '2014-07-23 10:04:12', 5);
INSERT INTO `Cust_makes_Pickup` VALUES (4, '2014-07-30 11:02:11', 5);
INSERT INTO `Cust_makes_Pickup` VALUES (4, '2014-08-06 10:01:54', 5);
INSERT INTO `Cust_makes_Pickup` VALUES (4, '2014-08-13 11:15:36', 5);
INSERT INTO `Cust_makes_Pickup` VALUES (4, '2014-08-20 10:18:16', 5);
INSERT INTO `Cust_makes_Pickup` VALUES (4, '2014-08-27 11:33:10', 5);
INSERT INTO `Cust_makes_Pickup` VALUES (4, '2014-09-03 10:51:19', 5);
INSERT INTO `Cust_makes_Pickup` VALUES (4, '2014-09-10 10:12:39', 5);
INSERT INTO `Cust_makes_Pickup` VALUES (4, '2014-09-17 11:59:28', 5);
INSERT INTO `Cust_makes_Pickup` VALUES (5, '2014-06-18 11:45:34', 4);
INSERT INTO `Cust_makes_Pickup` VALUES (5, '2014-06-25 11:34:43', 4);
INSERT INTO `Cust_makes_Pickup` VALUES (5, '2014-07-02 12:22:23', 4);
INSERT INTO `Cust_makes_Pickup` VALUES (5, '2014-07-09 11:43:41', 4);
INSERT INTO `Cust_makes_Pickup` VALUES (5, '2014-07-16 11:54:14', 4);
INSERT INTO `Cust_makes_Pickup` VALUES (5, '2014-07-23 11:04:12', 4);
INSERT INTO `Cust_makes_Pickup` VALUES (5, '2014-08-13 12:15:36', 4);
INSERT INTO `Cust_makes_Pickup` VALUES (5, '2014-08-20 11:18:16', 4);
INSERT INTO `Cust_makes_Pickup` VALUES (5, '2014-08-27 12:33:10', 4);
INSERT INTO `Cust_makes_Pickup` VALUES (5, '2014-09-03 11:51:19', 4);
INSERT INTO `Cust_makes_Pickup` VALUES (5, '2014-09-10 12:12:39', 4);
INSERT INTO `Cust_makes_Pickup` VALUES (5, '2014-09-17 11:59:28', 4);
INSERT INTO `Cust_makes_Pickup` VALUES (6, '2014-06-18 13:45:34', 5);
INSERT INTO `Cust_makes_Pickup` VALUES (6, '2014-07-02 13:22:23', 5);
INSERT INTO `Cust_makes_Pickup` VALUES (6, '2014-07-16 13:54:14', 5);
INSERT INTO `Cust_makes_Pickup` VALUES (6, '2014-07-30 14:02:11', 5);
INSERT INTO `Cust_makes_Pickup` VALUES (6, '2014-08-13 14:15:36', 5);
INSERT INTO `Cust_makes_Pickup` VALUES (6, '2014-08-27 13:33:10', 5);
INSERT INTO `Cust_makes_Pickup` VALUES (6, '2014-09-10 14:12:39', 5);
INSERT INTO `Cust_makes_Pickup` VALUES (21, '2014-06-18 13:45:34', 6);
INSERT INTO `Cust_makes_Pickup` VALUES (21, '2014-07-02 13:22:23', 6);
INSERT INTO `Cust_makes_Pickup` VALUES (21, '2014-07-16 13:54:14', 6);
INSERT INTO `Cust_makes_Pickup` VALUES (21, '2014-07-30 14:02:11', 6);
INSERT INTO `Cust_makes_Pickup` VALUES (21, '2014-08-13 14:15:36', 6);
INSERT INTO `Cust_makes_Pickup` VALUES (21, '2014-08-27 13:33:10', 6);
INSERT INTO `Cust_makes_Pickup` VALUES (21, '2014-09-10 14:12:39', 6);
INSERT INTO `Cust_makes_Pickup` VALUES (22, '2014-06-18 13:45:34', 7);
INSERT INTO `Cust_makes_Pickup` VALUES (22, '2014-07-02 13:22:23', 7);
INSERT INTO `Cust_makes_Pickup` VALUES (22, '2014-07-16 13:54:14', 7);
INSERT INTO `Cust_makes_Pickup` VALUES (22, '2014-07-30 14:02:11', 7);
INSERT INTO `Cust_makes_Pickup` VALUES (22, '2014-08-13 14:15:36', 7);
INSERT INTO `Cust_makes_Pickup` VALUES (22, '2014-08-27 13:33:10', 7);
INSERT INTO `Cust_makes_Pickup` VALUES (22, '2014-09-10 14:12:39', 7);
INSERT INTO `Cust_makes_Pickup` VALUES (23, '2014-06-18 13:45:34', 4);
INSERT INTO `Cust_makes_Pickup` VALUES (23, '2014-07-02 13:22:23', 4);
INSERT INTO `Cust_makes_Pickup` VALUES (23, '2014-07-30 14:02:11', 4);
INSERT INTO `Cust_makes_Pickup` VALUES (23, '2014-08-13 14:15:36', 4);
INSERT INTO `Cust_makes_Pickup` VALUES (23, '2014-08-27 13:33:10', 4);
INSERT INTO `Cust_makes_Pickup` VALUES (23, '2014-09-10 14:12:39', 4);
INSERT INTO `Cust_makes_Pickup` VALUES (24, '2014-06-18 13:45:34', 2);
INSERT INTO `Cust_makes_Pickup` VALUES (24, '2014-07-02 13:22:23', 2);
INSERT INTO `Cust_makes_Pickup` VALUES (24, '2014-07-16 13:54:14', 2);
INSERT INTO `Cust_makes_Pickup` VALUES (24, '2014-07-30 14:02:11', 2);
INSERT INTO `Cust_makes_Pickup` VALUES (24, '2014-09-10 14:12:39', 2);
INSERT INTO `Cust_makes_Pickup` VALUES (25, '2014-06-18 13:45:34', 1);
INSERT INTO `Cust_makes_Pickup` VALUES (25, '2014-07-02 13:22:23', 1);
INSERT INTO `Cust_makes_Pickup` VALUES (25, '2014-07-16 13:54:14', 1);
INSERT INTO `Cust_makes_Pickup` VALUES (25, '2014-07-30 14:02:11', 1);
INSERT INTO `Cust_makes_Pickup` VALUES (25, '2014-08-13 14:15:36', 1);
INSERT INTO `Cust_makes_Pickup` VALUES (25, '2014-08-27 13:33:10', 1);
INSERT INTO `Cust_makes_Pickup` VALUES (25, '2014-09-10 14:12:39', 1);

-- --------------------------------------------------------

-- 
-- Table structure for table `Customer`
-- 

CREATE TABLE `Customer` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `First_Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Last_Name` varchar(75) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `City` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `State` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `Zip` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Delegates` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mid` int(11) DEFAULT NULL,
  `midOther` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`cid`),
  KEY `mid` (`mid`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `Customer`
-- 

INSERT INTO `Customer` VALUES (default, 'Dennis', 'Ellis', '39 Roth Way', 'Young America', 'Mi', '55573', '1-(138)352-6105', 'dellis0@berkeley.edu', NULL, 3, NULL);
INSERT INTO `Customer` VALUES (default, 'Sean', 'Mcdonald', '1 Lyons Crossing', 'Gainesville', 'Fl', '32610', '0-(094)039-6859', 'smcdonald1@amazon.com', 'Deborah Crawford', 2, NULL);
INSERT INTO `Customer` VALUES (default, 'Jason', 'Price', '80428 Westend Crossing', 'Des Moines', 'Io', '50981', '6-(542)516-7067', 'jprice2@bigcartel.com', 'Gloria Holmes', 3, NULL);
INSERT INTO `Customer` VALUES (default, 'Mildred', 'Willis', '6 Village Hill', 'San Antonio', 'Te', '78240', '2-(731)390-5979', 'eharrison3@yellowbook.com', 'Julie Burke', 4, 'Evelyn Harrison');
INSERT INTO `Customer` VALUES (default, 'Gary', 'Ramos', '9710 Sutherland Parkway', 'Albany', 'Ne', '12222', '0-(919)324-4101', 'gramos4@tumblr.com', 'Wanda Williamson', 1, NULL);
INSERT INTO `Customer` VALUES (default, 'Jesse', 'Anderson', '2 Little Fleur Road', 'Arlington', 'Vi', '22205', '6-(137)070-9445', 'bfowler5@vimeo.com', NULL, 2, 'Brian Fowler');
INSERT INTO `Customer` VALUES (default, 'Cheryl', 'Watkins', '2 Morrow Alley', 'Los Angeles', 'Ca', '90076', '6-(703)386-9773', 'dbailey6@toplist.cz', 'Michael Freeman', 1, 'David Bailey');
INSERT INTO `Customer` VALUES (default, 'Sarah', 'Miller', '202 Stephen Avenue', 'Tucson', 'Ar', '85720', '4-(233)632-7911', 'smiller7@google.it', 'Carolyn Day', 1, NULL);
INSERT INTO `Customer` VALUES (default, 'Earl', 'Mccoy', '1 Wayridge Way', 'San Mateo', 'Ca', '94405', '5-(288)701-3124', 'emccoy8@sfgate.com', NULL, 1, NULL);
INSERT INTO `Customer` VALUES (default, 'Linda', 'Perry', '38475 Kennedy Alley', 'Amarillo', 'Te', '79105', '7-(310)728-8976', 'lperry9@irs.gov', NULL, 10, NULL);
INSERT INTO `Customer` VALUES (default, 'Mary', 'Harrison', '82471 Grayhawk Pass', 'Grand Junction', 'Co', '81505', '9-(547)003-1578', 'mharrisona@blogs.com', 'Laura Gonzales', 8, NULL);
INSERT INTO `Customer` VALUES (default, 'Ernest', 'Fisher', '5 Aberg Road', 'Bismarck', 'No', '58505', '3-(077)626-6704', 'efisherb@dedecms.com', 'Keith Banks', 6, NULL);
INSERT INTO `Customer` VALUES (default, 'Linda', 'Owens', '0749 Stone Corner Court', 'Lubbock', 'Te', '79405', '3-(333)722-9617', 'lowensc@tuttocitta.it', 'Jimmy Harper', 10, NULL);
INSERT INTO `Customer` VALUES (default, 'Mildred', 'King', '64059 Holmberg Alley', 'Waco', 'Te', '76711', '7-(235)189-6843', 'mkingd@wp.com', 'Benjamin Schmidt', 10, NULL);
INSERT INTO `Customer` VALUES (default, 'Diane', 'Arnold', '67 Lakewood Junction', 'El Paso', 'Te', '88589', '5-(286)870-1450', 'darnolde@behance.net', NULL, 6, NULL);
INSERT INTO `Customer` VALUES (default, 'Victor', 'Rodriguez', '5133 Mcbride Junction', 'Paterson', 'Ne', '07522', '2-(488)350-7319', 'vrodriguezf@cyberchimps.com', 'Michael Hansen', 4, NULL);
INSERT INTO `Customer` VALUES (default, 'Roger', 'Boyd', '8702 Ridge Oak Terrace', 'Evansville', 'In', '47737', '4-(225)256-5753', 'rboydg@ezinearticles.com', 'Robin Marshall', 5, NULL);
INSERT INTO `Customer` VALUES (default, 'Randy', 'Black', '0 Pennsylvania Alley', 'Jefferson City', 'Mi', '65105', '1-(058)571-9809', 'rblackh@icio.us', 'Chris Dean', 5, NULL);
INSERT INTO `Customer` VALUES (default, 'Wayne', 'Carter', '34498 Katie Lane', 'Trenton', 'Ne', '08608', '0-(810)159-8853', 'wcarteri@trellian.com', 'Irene Watkins', 2, NULL);
INSERT INTO `Customer` VALUES (default, 'Jimmy', 'Kelley', '960 Village Green Lane', 'San Jose', 'Ca', '95123', '8-(111)447-9414', 'jwilsonj@examiner.com', NULL, 5, 'Janet Wilson');
INSERT INTO `Customer` VALUES (default, 'Kevin', 'Gonzales', '5048 Elmside Terrace', 'Washington', 'Di', '20540', '3-(983)158-4230', 'kgonzalesk@miibeian.gov.cn', NULL, 1, NULL);
INSERT INTO `Customer` VALUES (default, 'Richard', 'Bryant', '09 Troy Lane', 'Chicago', 'Il', '60697', '1-(353)542-8141', 'rbryantl@edublogs.org', NULL, 2, NULL);
INSERT INTO `Customer` VALUES (default, 'Adam', 'Turner', '2234 Lakewood Court', 'Fort Lauderdale', 'Fl', '33325', '1-(495)745-7097', 'aturnerm@apache.org', 'Mary Coleman', 10, NULL);
INSERT INTO `Customer` VALUES (default, 'Phyllis', 'Stephens', '25121 Claremont Alley', 'Dallas', 'Te', '75216', '8-(976)446-3965', 'pstephensn@wikia.com', NULL, 8, NULL);
INSERT INTO `Customer` VALUES (default, 'Frances', 'Freeman', '68 Sommers Hill', 'Charlotte', 'No', '28299', '0-(783)229-9802', 'ffreemano@engadget.com', NULL, 1, NULL);

-- --------------------------------------------------------

-- 
-- Table structure for table `Marketing`
-- 

CREATE TABLE `Marketing` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `channel` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `Marketing`
-- 

INSERT INTO `Marketing` VALUES (default, 'Farmers Market');
INSERT INTO `Marketing` VALUES (default, 'Drove Past Farm');
INSERT INTO `Marketing` VALUES (default, 'Referral');
INSERT INTO `Marketing` VALUES (default, 'Website');
INSERT INTO `Marketing` VALUES (default, 'Online Search for CS');
INSERT INTO `Marketing` VALUES (default, 'News Article');
INSERT INTO `Marketing` VALUES (default, 'Brochure');
INSERT INTO `Marketing` VALUES (default, 'Advertisement');
INSERT INTO `Marketing` VALUES (default, 'Conference');
INSERT INTO `Marketing` VALUES (default, 'Other');

-- --------------------------------------------------------

-- 
-- Table structure for table `Transaction`
-- 

CREATE TABLE `Transaction` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `tPrice` decimal(9,2) NOT NULL DEFAULT '0.00',
  `pDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lid` int(11) NOT NULL,
  PRIMARY KEY (`tid`),
  KEY `cid` (`cid`),
  KEY `lid` (`lid`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `Transaction`
-- 

INSERT INTO `Transaction` VALUES (default, 16, 70.50, '2014-06-18 13:45:34', 4);
INSERT INTO `Transaction` VALUES (default, 17, 232.50, '2014-06-18 13:45:34', 3);
INSERT INTO `Transaction` VALUES (default, 18, 72.00, '2014-06-18 13:45:34', 2);
INSERT INTO `Transaction` VALUES (default, 19, 63.50, '2014-06-18 13:45:34', 1);
INSERT INTO `Transaction` VALUES (default, 19, 55.00, '2014-06-02 13:22:23', 1);
INSERT INTO `Transaction` VALUES (default, 19, 62.00, '2014-07-16 13:54:14', 1);
INSERT INTO `Transaction` VALUES (default, 19, 41.00, '2014-06-27 13:33:10', 1);
INSERT INTO `Transaction` VALUES (default, 20, 114.50, '2014-06-18 13:45:34', 2);
INSERT INTO `Transaction` VALUES (default, 20, 140.00, '2014-07-02 13:22:23', 2);
INSERT INTO `Transaction` VALUES (default, 20, 100.00, '2014-07-16 13:54:14', 2);
