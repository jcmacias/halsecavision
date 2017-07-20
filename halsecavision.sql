-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2017 at 12:36 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `halsecavision`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` text NOT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `category_id`) VALUES
(1, 'Camera PTZ', 'Camera PTZ', NULL),
(2, 'XVR/NVR', 'XVR/NVR', NULL),
(3, 'Kits', 'Kits', NULL),
(4, 'Camera', 'Camera', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1499208308),
('m170701_122608_add_featured_column_to_product_table', 1499208316),
('m170701_151134_add_fulldescription_column_to_product_table', 1499208316);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `code` varchar(45) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `qty_store` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `featured` int(11) DEFAULT NULL,
  `fulldescription` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `code`, `name`, `description`, `image`, `qty_store`, `price`, `category_id`, `featured`, `fulldescription`) VALUES
(1, 'HV105PT4E010S200', 'Speed Dome Camera', '4.5" HD-IP Medium Speed Dome Camera\r\n10X Optical Zoom\r\nIR Range:60m/220 Preset\r\nOutdoor/Lightning Protection', '1500386161.jpg', NULL, NULL, 1, 1, '1500317030.pdf'),
(2, 'HV-105PT7E120S400', '7" HD-IP High Speed Dome Camera', '7" HD-IP High Speed Dome Camera\r\n1/3" OV High-resolution 4.0MP CMOS Sensor\r\n4MP/ 20X Optical Zoom', '1500385102.jpg', 20, NULL, 1, 1, '1500316812.pdf'),
(3, 'HV-105LIRDBS300', 'IR Dome IP Camera', '1/2.8" SONY Starvis Sensor HISILICON Hi3516D, \r\nHDR ; External POE\r\nMain Stream: 3MP/1080P@30fps; With IR-CUT', '1500385706.jpg', 20, NULL, 4, 1, '1500321395.pdf'),
(4, 'HV-105LBP60SL200', 'IR Bullet IP Camera', '1/2.8" SONY Starvis Sensor HISILICON Hi3516D, HDR ; IP66\r\nMain Stream: 1080P@30fps; 3MP HD Lens, With\r\nIR-CUT ,Internal POE', '1500386353.jpg', NULL, NULL, 4, 0, '1500324833.pdf'),
(5, 'HV-105LBP90S400', 'R Bullet IP Camera', 'Resolution 4MP/ manual lens/5MP\r\nSupport ONVIF 2.4/ Under 10 Lux By CDS\r\nH.264/H.265/JPEG/AVI /MJPEG', '1500382311.jpg', NULL, NULL, 4, 0, '1500382515.pdf'),
(6, 'HV-105LIRDCS500', 'IR Dome IP Camera', '1/1.8" SONY StarvisSensor HISILICON Hi3516A\r\nWith IR-CUT; External POE\r\nMain Stream: 5MP/3MP/1080P@30fps', '1500391762.jpg', NULL, NULL, 4, 1, '1500391762.pdf'),
(7, 'HV105LVDHS800', '4K IR Dome IP Camera', '1/2.5" SONY Starvis Sensor HISILICON HI3519, WDR; With IR-CUT;\r\nMain Stream: 4K/5M/3M/1080P@30fps \r\nSupport Audio I/O ,Support Alarm I/O', '1500392058.jpg', NULL, NULL, 4, 0, '1500392058.pdf'),
(8, 'HV-105LBB60S500', 'IP Camera', '1/1.8" SONY Starvis back-illuminated CMOSSensor,\r\nWDR, 3D NR, Low-stream;External POE\r\nMain Stream: 5MP/3MP/1080P@30fps', '1500392745.jpg', NULL, NULL, 4, 0, NULL),
(9, 'HV-105LMDES600', 'Fisheye IP Camera', '1/2.9" SONY Sensor,Hi3516D, Low Stream, WDR, With Internal POE ,With SD Card Slot\r\nWith Wifi (Max.300m),3D NR; With IR-CUT\r\n2-Way Audio ,Alarm I/O ,Support CVBS', '1500399134.jpg', NULL, NULL, 4, 1, NULL),
(10, 'HV-105LIV60S400W', 'WIFI Range: 300m Max.', '1/3" OV Sensor Hi3516D, WDR; With IR-CUT\r\nMain Stream: 4MP@20fps, 3MP/1080P@25fps;\r\nSupport WIFI, WIFI Range: IP66', '1500400282.jpg', NULL, NULL, 4, 0, '1500400282.pdf'),
(11, 'HV-105LBH30S400W', 'Bullet WIFI IPC', '1/3" OV Sensor Hi3516D, WDR; With IR-CUT\r\nMain Stream: 4MP@20fps, 3MP/1080P@25fps;\r\nSupport WIFI, WIFI Range: No obstacles 300m Max. IP66', '1500402713.jpg', NULL, NULL, 4, 0, '1500402713.pdf'),
(12, 'HV-105LIRDQS400W', 'Dome WIFI IPC', '1/3" OV Sensor Hi3516D, WDR; With IR-CUT\r\nMain Stream: 4MP@20fps, 3MP/1080P@25fps;\r\nSupport WIFI, WIFI Range: No obstacles 300m Max. IP66', '1500403677.jpg', NULL, NULL, 4, 0, '1500403677.pdf'),
(13, 'HV-105LVDHS400W', 'Dome WIFI IPC', '1/3" OV Sensor Hi3516D, WDR; With IR-CUT\r\nMain Stream: 4MP@20fps, 3MP/1080P@25fps;\r\nSupport WIFI, WIFI Range: No obstacles 300m Max. IP66', '1500404456.jpg', NULL, NULL, 4, 0, '1500404456.pdf'),
(14, 'HV105PT4A110HTC200NS', 'PTZ Camera', '4.5" Mini High Speed Dome Camera IR Range: 50m , IP66\r\n1/2.9" SONY CMOS Sensor 2.1MP/1080P\r\nLow Illumination, ICR, 3D NR', '1500405364.jpg', NULL, NULL, 1, 0, '1500405364.pdf'),
(15, 'HV105PT5A018HTC200NS', 'PTZ Camera', '5" Medium Speed Dome Camera 1/2.9" SONY CMOS Sensor 2.1MP/1080P\r\nLow Illumination, ICR, DNR', '1500407097.jpg', NULL, NULL, 1, 0, '1500407097.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `product_has_purchase`
--

CREATE TABLE `product_has_purchase` (
  `product_id` int(11) NOT NULL,
  `purchase_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_has_purchase`
--

INSERT INTO `product_has_purchase` (`product_id`, `purchase_id`) VALUES
(1, 9),
(2, 9);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT '1',
  `customer_name` varchar(45) NOT NULL,
  `address` varchar(45) DEFAULT NULL,
  `company` varchar(45) DEFAULT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `purchasecol` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `qty`, `customer_name`, `address`, `company`, `phone`, `email`, `purchasecol`) VALUES
(1, 1, 'ffff', 'yjujuj', 'ujuyjujyuj', 2147483647, 'fr2@gh.jh', NULL),
(2, 1, 'twt', '', '', 2147483647, '', NULL),
(3, 1, 'twt', '', '', 2147483647, '', NULL),
(4, 1, 'dgdggg', 'g', '', 456323, '', NULL),
(5, 1, 'gsgs', '', '', 665455, '', NULL),
(6, 1, 'fsghhhhdj', '', '', 1234556885, '', NULL),
(7, 1, 'yuy', '', '', 1312312, 'sfsdfsdgdfdfhdfhdfhdf', NULL),
(8, 1, 'yuy', '', '', 1312312, 'sfsdfsdgdfdfhdfhdfhdf', NULL),
(9, 1, 'fsds', '', '', 123, 'fr2@gh.jh', NULL),
(10, 1, 'fdadf', 'dfds', '', 125, 'lcglenda88@gmail.com', NULL),
(11, 1, 'fdadf', 'dfds', '', 125, 'lcglenda88@gmail.com', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_category_category1_idx` (`category_id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`,`category_id`),
  ADD UNIQUE KEY `code_UNIQUE` (`code`),
  ADD KEY `fk_product_category1_idx` (`category_id`);

--
-- Indexes for table `product_has_purchase`
--
ALTER TABLE `product_has_purchase`
  ADD PRIMARY KEY (`product_id`,`purchase_id`),
  ADD KEY `fk_product_has_purchase_purchase1_idx` (`purchase_id`),
  ADD KEY `fk_product_has_purchase_product_idx` (`product_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `fk_category_category1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_product_category1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_has_purchase`
--
ALTER TABLE `product_has_purchase`
  ADD CONSTRAINT `fk_product_has_purchase_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_product_has_purchase_purchase1` FOREIGN KEY (`purchase_id`) REFERENCES `purchase` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
