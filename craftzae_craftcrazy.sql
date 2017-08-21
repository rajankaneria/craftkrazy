-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Aug 21, 2017 at 06:46 AM
-- Server version: 5.5.55-38.8-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `craftzae_craftcrazy`
--

-- --------------------------------------------------------

--
-- Table structure for table `child_category`
--

CREATE TABLE IF NOT EXISTS `child_category` (
  `cc_id` int(11) NOT NULL AUTO_INCREMENT,
  `mc_id` int(11) NOT NULL,
  `pc_id` int(11) NOT NULL,
  `cc_name` varchar(50) NOT NULL,
  `cc_status` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`cc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=143 ;

--
-- Dumping data for table `child_category`
--

INSERT INTO `child_category` (`cc_id`, `mc_id`, `pc_id`, `cc_name`, `cc_status`, `create_date`) VALUES
(7, 6, 6, 'Earrings', 0, '2017-07-18 10:02:58'),
(8, 6, 6, 'Envelope', 0, '2017-07-18 10:03:15'),
(9, 6, 6, 'Necklace', 0, '2017-07-18 10:03:37'),
(10, 6, 6, 'Photo Frame', 0, '2017-07-18 10:04:33'),
(12, 6, 6, 'Wall Decor', 0, '2017-07-18 10:05:19'),
(13, 6, 6, 'Candle Stand', 0, '2017-07-18 10:06:02'),
(14, 6, 6, 'Hair Accessories', 0, '2017-07-18 10:07:07'),
(15, 6, 6, 'Other', 0, '2017-07-18 10:07:22'),
(16, 6, 6, 'Gift Card', 0, '2017-07-18 10:08:14'),
(17, 6, 7, 'Photo Collage', 0, '2017-07-18 10:08:53'),
(18, 6, 7, 'Shape Collage', 0, '2017-07-18 10:09:14'),
(19, 6, 7, 'Magazine Collage', 0, '2017-07-18 10:09:46'),
(20, 6, 7, 'Other', 0, '2017-07-18 10:09:56'),
(21, 6, 9, 'Photo Frame', 0, '2017-07-18 10:10:28'),
(22, 6, 9, 'Jewellery Box', 0, '2017-07-18 10:11:34'),
(23, 6, 9, 'Gift Box', 0, '2017-07-18 10:11:56'),
(24, 6, 9, 'Tray', 0, '2017-07-18 10:12:07'),
(25, 6, 9, 'Glasses', 0, '2017-07-18 10:12:34'),
(26, 6, 9, 'Glass Bottle', 0, '2017-07-18 10:13:22'),
(27, 6, 9, 'Other', 0, '2017-07-18 10:13:38'),
(28, 6, 35, 'Craft Paper', 0, '2017-07-18 10:14:10'),
(29, 6, 35, 'Glasses', 0, '2017-07-18 10:14:28'),
(30, 6, 35, 'Ceramic Pot', 0, '2017-07-18 10:18:06'),
(31, 10, 21, 'Paper and Card Flower', 0, '2017-07-18 10:18:50'),
(32, 10, 21, 'Crochet Flower', 0, '2017-07-18 10:19:05'),
(33, 10, 21, 'Knitting Flower', 0, '2017-07-18 10:20:08'),
(34, 10, 21, 'Metal Flower', 0, '2017-07-18 10:20:26'),
(35, 10, 21, 'Fabric Flower', 0, '2017-07-18 10:20:43'),
(36, 10, 21, 'Quilling Flower', 0, '2017-07-18 10:21:20'),
(37, 10, 21, 'Clay Flower', 0, '2017-07-18 10:21:48'),
(38, 10, 21, 'Ribbon Flower', 0, '2017-07-18 10:22:02'),
(39, 10, 21, 'Origami Flower', 0, '2017-07-18 10:22:14'),
(40, 10, 21, 'Tissue Paper Flower', 0, '2017-07-18 10:22:39'),
(41, 10, 21, 'Sospeso Art', 0, '2017-07-18 10:23:01'),
(42, 10, 21, 'Other', 0, '2017-07-18 10:23:10'),
(43, 12, 27, 'Earthenware', 0, '2017-07-18 10:25:08'),
(44, 12, 27, 'Porcelain', 0, '2017-07-18 10:25:23'),
(45, 12, 27, 'Stoneware', 0, '2017-07-18 10:25:42'),
(46, 13, 30, 'Purse and Basket', 0, '2017-07-18 10:27:18'),
(47, 13, 30, 'Shoes', 0, '2017-07-18 10:27:30'),
(48, 13, 30, 'Toy', 0, '2017-07-18 10:27:45'),
(49, 13, 30, 'Flower', 0, '2017-07-18 10:28:00'),
(50, 13, 30, 'Clothes', 0, '2017-07-18 10:28:14'),
(51, 13, 30, 'Patch', 0, '2017-07-18 10:29:16'),
(52, 13, 32, 'Rug Making', 0, '2017-07-18 10:30:21'),
(53, 13, 32, 'Rug Hooking', 0, '2017-07-18 10:30:40'),
(54, 13, 32, 'Knotting', 0, '2017-07-18 10:30:58'),
(55, 13, 32, 'Patchwork', 0, '2017-07-18 10:31:21'),
(56, 13, 32, 'Lace Making', 0, '2017-07-18 10:31:39'),
(57, 13, 32, 'Tapestry Art', 0, '2017-07-18 10:32:04'),
(58, 13, 33, 'Purse and Basket', 0, '2017-07-18 10:32:39'),
(59, 13, 33, 'Sweater', 0, '2017-07-18 10:32:59'),
(60, 13, 33, 'Shrug', 0, '2017-07-18 10:33:11'),
(61, 13, 33, 'Hat', 0, '2017-07-18 10:33:21'),
(62, 13, 33, 'Socks', 0, '2017-07-18 10:33:34'),
(64, 13, 33, 'Gloves', 0, '2017-07-18 10:34:04'),
(65, 13, 33, 'Winter Scarf', 0, '2017-07-18 10:35:15'),
(66, 13, 34, 'Hand Embroidery', 0, '2017-07-18 10:36:23'),
(67, 13, 34, 'Ribbon Embroidery', 0, '2017-07-18 10:36:50'),
(68, 13, 34, 'Cross Stitch', 0, '2017-07-18 10:37:07'),
(69, 13, 34, 'Embroidery On Canvas', 0, '2017-07-18 10:37:39'),
(70, 13, 34, 'Crewel Embroidery', 0, '2017-07-18 10:38:11'),
(71, 18, 49, 'Casual Wear', 0, '2017-07-18 10:41:18'),
(72, 18, 49, 'Ethnic Wear', 0, '2017-07-18 10:41:42'),
(73, 18, 49, 'Bottom Wear', 0, '2017-07-18 10:42:02'),
(74, 18, 49, 'Suits and Blazers', 0, '2017-07-18 10:42:35'),
(75, 18, 50, 'Sarees', 0, '2017-07-18 10:43:15'),
(76, 18, 50, 'Salwar Suits', 0, '2017-07-18 10:43:47'),
(77, 18, 50, 'Lehenga', 0, '2017-07-18 10:44:09'),
(78, 18, 50, 'Casual Wear', 0, '2017-07-18 10:44:23'),
(79, 19, 11, 'Paper Cutting Card', 0, '2017-07-18 10:51:10'),
(80, 19, 11, 'Iris Folding Card', 0, '2017-07-18 10:51:33'),
(81, 19, 11, 'Paper Embossing Card', 0, '2017-07-18 10:51:58'),
(82, 19, 11, 'Greeting Crad', 0, '2017-07-18 10:52:21'),
(83, 19, 11, 'Parchment Card', 0, '2017-07-18 10:52:40'),
(84, 19, 11, 'Origami Crad', 0, '2017-07-18 10:52:58'),
(85, 19, 11, 'Quilling Card', 0, '2017-07-18 10:53:15'),
(86, 19, 11, 'Pop Up Crad', 0, '2017-07-18 10:53:31'),
(87, 19, 11, 'Other', 0, '2017-07-18 10:54:19'),
(88, 19, 12, 'Paper Cutting', 0, '2017-07-18 10:54:58'),
(89, 19, 12, 'Origami', 0, '2017-07-18 10:55:13'),
(90, 19, 12, 'Iris Folding', 0, '2017-07-18 10:55:35'),
(91, 19, 12, 'Paper Embossing', 0, '2017-07-18 10:55:54'),
(92, 19, 12, 'Quilling', 0, '2017-07-18 10:56:09'),
(93, 19, 12, 'Parchment Craft', 0, '2017-07-18 10:56:57'),
(94, 19, 12, 'Craft Foam Shapes', 0, '2017-07-18 10:57:16'),
(95, 19, 12, 'Scrapbook', 0, '2017-07-18 10:57:29'),
(96, 19, 12, 'Other', 0, '2017-07-18 10:57:39'),
(97, 19, 13, 'Earrings', 0, '2017-07-18 10:58:04'),
(98, 19, 13, 'Bracelet', 0, '2017-07-18 10:58:30'),
(99, 19, 13, 'Necklace', 0, '2017-07-18 10:58:40'),
(100, 19, 13, 'Hair Accessories', 0, '2017-07-18 10:58:50'),
(101, 19, 13, 'Keychain', 0, '2017-07-18 11:00:03'),
(102, 19, 13, 'Other', 0, '2017-07-18 11:00:15'),
(104, 19, 14, 'Knitting Toy', 0, '2017-07-18 11:01:09'),
(105, 19, 14, 'Teddy Bear', 0, '2017-07-18 11:01:29'),
(106, 19, 14, 'Crochet Toy', 0, '2017-07-18 11:01:48'),
(108, 19, 14, 'Paper Mache', 0, '2017-07-18 11:02:45'),
(109, 19, 15, 'Wall Hanging', 0, '2017-07-18 11:03:10'),
(110, 19, 15, 'Glasses', 0, '2017-07-18 11:03:21'),
(111, 19, 15, 'Glass Bottle', 0, '2017-07-18 11:03:31'),
(112, 19, 15, 'Other', 0, '2017-07-18 11:03:41'),
(113, 19, 14, 'Other', 0, '2017-07-18 11:04:16'),
(114, 19, 16, 'Pot Painting', 0, '2017-07-18 11:04:52'),
(115, 19, 16, '3D Painting', 0, '2017-07-18 11:05:14'),
(116, 19, 16, 'Oil Painting', 0, '2017-07-18 11:05:31'),
(117, 19, 16, 'Mosaic Painting', 0, '2017-07-18 11:05:55'),
(118, 19, 16, 'Batik Painting', 0, '2017-07-18 11:06:14'),
(119, 19, 16, 'Canvas Painting', 0, '2017-07-18 11:06:37'),
(120, 19, 16, 'Ceramic Tile Painting', 0, '2017-07-18 11:06:58'),
(121, 19, 16, 'Other', 0, '2017-07-18 11:07:11'),
(122, 19, 17, 'Quilling Frame', 0, '2017-07-18 11:07:57'),
(123, 19, 17, 'Clay Frame', 0, '2017-07-18 11:08:12'),
(124, 19, 17, 'Wooden Frame', 0, '2017-07-18 11:08:36'),
(125, 19, 17, 'Canvas Art', 0, '2017-07-18 11:08:57'),
(126, 19, 17, 'Stone and Sea Shell Frame', 0, '2017-07-18 11:09:28'),
(127, 19, 17, 'Button and Bottle Cap Frame', 0, '2017-07-18 11:10:10'),
(128, 19, 17, 'Handmade Mirror Frame', 0, '2017-07-18 11:10:41'),
(130, 19, 17, 'Photo Album Frame', 0, '2017-07-18 11:11:37'),
(131, 19, 17, 'Other', 0, '2017-07-18 11:11:48'),
(132, 19, 18, 'Floating Candle', 0, '2017-07-18 11:13:08'),
(133, 19, 18, 'Silicone Candle', 0, '2017-07-18 11:13:26'),
(134, 19, 18, 'Gel Candle', 0, '2017-07-18 11:13:40'),
(135, 19, 18, 'Pillar Candle', 0, '2017-07-18 11:14:01'),
(136, 19, 18, 'Glass Candle', 0, '2017-07-18 11:14:17'),
(137, 19, 18, 'TeaLight Candle', 0, '2017-07-18 11:16:07'),
(138, 19, 18, 'Candle Stand', 0, '2017-07-18 11:16:23'),
(139, 19, 19, 'Wall Hanging', 0, '2017-07-18 11:17:07'),
(140, 19, 19, 'Home Decor', 0, '2017-07-18 11:17:28'),
(141, 19, 19, 'Purse and Basket', 0, '2017-07-18 11:17:42'),
(142, 19, 19, 'Other', 0, '2017-07-18 11:17:58');

-- --------------------------------------------------------

--
-- Table structure for table `main_category`
--

CREATE TABLE IF NOT EXISTS `main_category` (
  `mc_id` int(11) NOT NULL AUTO_INCREMENT,
  `mc_name` varchar(50) NOT NULL,
  `mc_image` varchar(255) NOT NULL,
  `mc_status` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`mc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `main_category`
--

INSERT INTO `main_category` (`mc_id`, `mc_name`, `mc_image`, `mc_status`, `create_date`) VALUES
(6, 'Paper Craft', '', 1, '2017-07-17 11:36:33'),
(10, 'Flower Craft', '', 1, '2017-07-17 12:49:08'),
(11, 'Wood and Furniture', '', 1, '2017-07-17 12:49:22'),
(12, 'Ceramic Art', '', 1, '2017-07-17 12:49:28'),
(13, 'Needle Craft', '', 1, '2017-07-17 12:49:34'),
(14, 'Stone Craft', '', 1, '2017-07-17 12:49:41'),
(15, 'Glass Art', '', 1, '2017-07-17 12:49:45'),
(16, 'Jewellery', '', 1, '2017-07-17 12:49:52'),
(17, 'Metal Craft', '', 1, '2017-07-17 12:49:58'),
(18, 'Fashion', '', 1, '2017-07-17 12:50:15'),
(19, 'Mixed Media Craft', '', 1, '2017-07-18 09:30:18');

-- --------------------------------------------------------

--
-- Table structure for table `parent_category`
--

CREATE TABLE IF NOT EXISTS `parent_category` (
  `pc_id` int(11) NOT NULL AUTO_INCREMENT,
  `mc_id` int(11) NOT NULL,
  `pc_name` varchar(255) NOT NULL,
  `pc_status` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`pc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

--
-- Dumping data for table `parent_category`
--

INSERT INTO `parent_category` (`pc_id`, `mc_id`, `pc_name`, `pc_status`, `create_date`) VALUES
(6, 6, 'Quilling', 0, '2017-07-17 12:51:07'),
(7, 6, 'Collages', 0, '2017-07-18 09:32:35'),
(8, 6, '3D Origami', 0, '2017-07-18 09:33:04'),
(9, 6, 'Decoupage', 0, '2017-07-18 09:33:16'),
(10, 6, 'Calligraphy', 0, '2017-07-18 09:33:47'),
(11, 19, 'Handmade Card', 0, '2017-07-18 09:34:08'),
(12, 19, 'Scrapbook', 0, '2017-07-18 09:35:42'),
(13, 19, 'Bead Work', 0, '2017-07-18 09:35:54'),
(14, 19, 'Handmade Toy', 0, '2017-07-18 09:36:09'),
(15, 19, 'Glass Painting', 0, '2017-07-18 09:37:03'),
(16, 19, 'Painting', 0, '2017-07-18 09:37:20'),
(17, 19, 'Photo Frame', 0, '2017-07-18 09:37:43'),
(18, 19, 'Candle', 0, '2017-07-18 09:37:52'),
(19, 19, 'Best Out Of Waste', 0, '2017-07-18 09:38:21'),
(20, 10, 'Ikebana', 0, '2017-07-18 09:39:08'),
(21, 10, 'Handmade Flower', 0, '2017-07-18 09:39:26'),
(22, 11, 'Wood Carving', 0, '2017-07-18 09:39:41'),
(23, 11, 'Wood Turning', 0, '2017-07-18 09:39:56'),
(24, 11, 'Wood Painting', 0, '2017-07-18 09:40:13'),
(25, 11, 'Furniture Making', 0, '2017-07-18 09:40:37'),
(26, 12, 'Ceramic Tile Work', 0, '2017-07-18 09:41:28'),
(27, 12, 'Ceramic Pottery', 0, '2017-07-18 09:41:48'),
(28, 12, 'Mosaic Art', 0, '2017-07-18 09:41:59'),
(29, 12, 'Terracotta Art', 0, '2017-07-18 09:42:32'),
(30, 13, 'Crochet', 0, '2017-07-18 09:43:12'),
(31, 13, 'Applique', 0, '2017-07-18 09:43:25'),
(32, 13, 'Needle Art', 0, '2017-07-18 09:43:40'),
(33, 13, 'Knitting', 0, '2017-07-18 09:44:10'),
(34, 13, 'Embroidery', 0, '2017-07-18 09:44:57'),
(35, 6, 'Paper Marbling', 0, '2017-07-18 09:45:28'),
(36, 14, 'Stone Carving', 0, '2017-07-18 09:45:53'),
(37, 14, 'Letter Carving On Stone', 0, '2017-07-18 09:46:19'),
(38, 15, 'Glass Carving', 0, '2017-07-18 09:47:04'),
(39, 15, 'Glass Bead', 0, '2017-07-18 09:47:15'),
(40, 15, 'Copper Foil Glass Work', 0, '2017-07-18 09:49:22'),
(41, 15, 'Portland Vase', 0, '2017-07-18 09:49:43'),
(42, 15, 'Bubblegram', 0, '2017-07-18 09:50:00'),
(43, 15, 'Stained Glass and Lead Came', 0, '2017-07-18 09:52:34'),
(44, 17, 'Meenakari', 0, '2017-07-18 09:53:54'),
(45, 17, 'Clock Making', 0, '2017-07-18 09:54:14'),
(46, 17, 'Pewter', 0, '2017-07-18 09:54:37'),
(47, 17, 'Embossing', 0, '2017-07-18 09:55:01'),
(48, 17, 'Engraving', 0, '2017-07-18 09:55:26'),
(49, 18, 'Men', 0, '2017-07-18 09:56:01'),
(50, 18, 'Women', 0, '2017-07-18 09:56:13'),
(61, 16, 'Earring', 0, '2017-07-18 10:46:01'),
(62, 16, 'Necklace', 0, '2017-07-18 10:46:08'),
(63, 16, 'Jewellery Set', 0, '2017-07-18 10:46:34'),
(64, 16, 'Anklet', 0, '2017-07-18 10:46:40'),
(65, 16, 'Pendant', 0, '2017-07-18 10:46:57'),
(66, 16, 'Bangle', 0, '2017-07-18 10:47:05'),
(67, 16, 'Ring', 0, '2017-07-18 10:47:13'),
(68, 16, 'Mangalsutra', 0, '2017-07-18 10:47:36');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE IF NOT EXISTS `product_details` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `mc_id` int(11) NOT NULL,
  `pc_id` int(11) NOT NULL,
  `cc_id` int(10) NOT NULL,
  `product_name` varchar(300) NOT NULL,
  `product_code` varchar(300) NOT NULL,
  `product_image` varchar(300) NOT NULL,
  `price` varchar(300) NOT NULL,
  `discounted_price` int(11) NOT NULL,
  `description` text NOT NULL,
  `quantity` varchar(200) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `status` int(10) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `creater_id` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE IF NOT EXISTS `product_image` (
  `pimage_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `image_name` varchar(300) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`pimage_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`pimage_id`, `product_id`, `image_name`, `create_date`) VALUES
(1, 1, 'abc2046214762.jpg', '2017-07-12 13:28:18'),
(2, 3, 'abc_xyz1723274066.jpg', '2017-07-17 11:26:13'),
(3, 4, 'testing489173766.jpg', '2017-07-17 11:39:43'),
(4, 5, 'wwww173554417.jpg', '2017-07-17 11:42:23');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE IF NOT EXISTS `seller` (
  `seller_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(250) NOT NULL,
  `contact_person` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` varchar(25) NOT NULL,
  `landline` varchar(25) NOT NULL,
  `address` text NOT NULL,
  `gcm_id` text NOT NULL,
  `status` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`seller_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`seller_id`, `company_name`, `contact_person`, `email`, `password`, `mobile`, `landline`, `address`, `gcm_id`, `status`, `create_date`) VALUES
(5, 'Intelliworkz Business Solutions Pvt. Ltd.', 'Arvind Rajput', 'rajputarvind@gmail.com', '48ea3508dc0e6b659d6a11d774339fc6', '9427801299', '09427801299', 'F-1003, Titanium City Center, Nr. Anandnagar,', '', 1, '2017-07-12 13:35:43'),
(6, 'Testing', 'Jaydeep', 'maulik.dce@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '0987654321', '7940373777', '', '', 1, '2017-07-26 06:39:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `a_name` varchar(256) NOT NULL,
  `a_pass` varchar(256) NOT NULL,
  `a_type` varchar(25) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `a_name`, `a_pass`, `a_type`) VALUES
(1, 'super', '3e42bf8a32cef77e549dc9eda952d5f3', 'super_admin'),
(2, 'admin', '71c93d9c88d0d202bc91161d8c3ce295', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `password`, `mobile`, `datetime`) VALUES
(1, 'Maulik J. Trivedi', 'maulik@gmail.com', '25f9e794323b453885f5181f1b624d0b', '9876543210', '2017-08-18 10:40:09'),
(2, 'jaydeep bhatt', 'we@inforaam.com', 'e10adc3949ba59abbe56e057f20f883e', '9687693200', '2017-08-01 11:23:24'),
(3, 'JohnnieHougs', 'robercarlos22@mail.ru', 'f841c026c7602d3168c54904c3496ee9', '85243142314', '2017-08-05 09:33:20'),
(4, 'Riddhi Shah', 'rh4946@gmail.com', '5d3c7a0995e21e0ec3a0d6f2209b6370', '9924673819', '2017-08-09 10:34:30');

-- --------------------------------------------------------

--
-- Table structure for table `user_address`
--

CREATE TABLE IF NOT EXISTS `user_address` (
  `ua_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `address` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ua_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_address`
--

INSERT INTO `user_address` (`ua_id`, `user_id`, `address`, `datetime`) VALUES
(1, 1, '    F - 1003 Titanium City Center,\r\n    Nr. Sachin Tower,Anandnagar Road,\r\n    Prahaladnagar,Satellite,\r\n    Ahmedabad - 380015', '2017-08-18 10:39:52');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
