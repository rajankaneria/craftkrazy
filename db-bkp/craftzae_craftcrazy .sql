-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2017 at 11:46 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `craftzae_craftcrazy`
--

-- --------------------------------------------------------

--
-- Table structure for table `child_category`
--

CREATE TABLE `child_category` (
  `cc_id` int(11) NOT NULL,
  `mc_id` int(11) NOT NULL,
  `pc_id` int(11) NOT NULL,
  `cc_name` varchar(50) NOT NULL,
  `cc_status` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `child_category`
--

INSERT INTO `child_category` (`cc_id`, `mc_id`, `pc_id`, `cc_name`, `cc_status`, `create_date`) VALUES
(1, 1, 1, 'Earrings', 1, '2017-07-26 06:56:57'),
(2, 1, 1, 'Envelope', 1, '2017-07-26 06:56:57'),
(3, 1, 1, 'Necklace', 1, '2017-07-26 06:56:57'),
(4, 1, 1, 'Photo Frame', 1, '2017-07-26 06:56:57'),
(5, 1, 1, 'Gift Card', 1, '2017-07-26 06:56:57'),
(6, 1, 1, 'Wall Decor', 1, '2017-07-26 06:56:57'),
(7, 1, 1, 'Candle Stand', 1, '2017-07-26 06:56:57'),
(8, 1, 1, 'Hair Accessories', 1, '2017-07-26 06:56:57'),
(9, 1, 2, 'Photo Collage', 1, '2017-07-26 07:06:32'),
(10, 1, 2, 'Shape Collage', 1, '2017-07-26 07:06:41'),
(11, 1, 2, 'Magazine Collage', 1, '2017-07-26 07:06:48'),
(12, 1, 4, 'Photo Frame', 1, '2017-07-26 07:08:53'),
(13, 1, 4, 'Jewelry Box', 1, '2017-07-26 07:08:53'),
(14, 1, 4, 'Gift Box', 1, '2017-07-26 07:08:53'),
(15, 1, 4, 'Tray', 1, '2017-07-26 07:08:53'),
(16, 1, 4, 'Glasses', 1, '2017-07-26 07:08:53'),
(17, 1, 4, 'Glass Bottle', 1, '2017-07-26 07:09:14'),
(18, 1, 5, 'Craft Paper', 1, '2017-07-26 07:11:05'),
(19, 1, 5, 'Glasses', 1, '2017-07-26 07:11:05'),
(20, 1, 5, 'Ceramic Pottery', 1, '2017-07-26 07:11:05'),
(21, 2, 7, 'Paper Mache', 1, '2017-07-26 07:16:36'),
(22, 2, 7, 'Knitting Toy', 1, '2017-07-26 07:16:36'),
(23, 2, 7, 'Teddy Bear', 1, '2017-07-26 07:17:19'),
(24, 2, 7, 'Crochet Toy', 1, '2017-07-26 07:17:19'),
(25, 2, 8, 'Wall Hanging', 1, '2017-07-26 07:20:05'),
(26, 2, 8, 'Glasses', 1, '2017-07-26 07:20:05'),
(27, 2, 8, 'Glass Bottle', 1, '2017-07-26 07:20:05'),
(28, 2, 9, 'Pot Painting', 1, '2017-07-26 07:26:18'),
(29, 2, 9, '3D Painting', 1, '2017-07-26 07:26:24'),
(30, 2, 9, 'Oil Painting', 1, '2017-07-26 07:26:33'),
(31, 2, 9, 'Mosaic Painting', 1, '2017-07-26 07:26:40'),
(32, 2, 9, 'Batik Painting', 1, '2017-07-26 07:26:46'),
(33, 2, 9, 'Canvas Painting', 1, '2017-07-26 07:27:38'),
(34, 2, 9, 'Ceramic Tile Painting', 1, '2017-07-26 07:27:38');

-- --------------------------------------------------------

--
-- Table structure for table `child_category1`
--

CREATE TABLE `child_category1` (
  `cc_id` int(11) NOT NULL,
  `mc_id` int(11) NOT NULL,
  `pc_id` int(11) NOT NULL,
  `cc_name` varchar(50) NOT NULL,
  `cc_status` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `main_category`
--

CREATE TABLE `main_category` (
  `mc_id` int(11) NOT NULL,
  `mc_name` varchar(50) NOT NULL,
  `mc_image` varchar(255) NOT NULL,
  `mc_status` int(11) NOT NULL,
  `seq` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_category`
--

INSERT INTO `main_category` (`mc_id`, `mc_name`, `mc_image`, `mc_status`, `seq`, `create_date`) VALUES
(1, 'Paper Craft', '1_product.jpg', 1, 0, '2017-09-11 13:27:25'),
(2, 'Mixed Media Craft', '2_product.jpg', 1, 0, '2017-09-12 06:11:06'),
(3, 'Flower Craft', '3_product.jpg', 1, 0, '2017-09-12 06:13:34'),
(4, 'Wood & Furniture', '4_product.jpg', 1, 0, '2017-09-12 06:14:45'),
(5, 'Ceramic Art', '5_product.jpg', 1, 0, '2017-09-12 06:15:59'),
(6, 'Needle Work', '6_product.jpg', 1, 0, '2017-09-12 06:17:41'),
(7, 'Stone Craft', '7_product.jpg', 1, 0, '2017-09-12 06:17:55'),
(8, 'Glass Art', '8_product.jpg', 1, 0, '2017-09-12 06:18:14'),
(9, 'Jewelery', '9_product.jpg', 1, 0, '2017-09-12 06:19:01'),
(27, 'Metal Craft', '27_product.jpg', 1, 0, '2017-09-12 06:21:07');

-- --------------------------------------------------------

--
-- Table structure for table `parent_category`
--

CREATE TABLE `parent_category` (
  `pc_id` int(11) NOT NULL,
  `mc_id` int(11) NOT NULL,
  `pc_name` varchar(255) NOT NULL,
  `pc_image` varchar(255) NOT NULL,
  `pc_status` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parent_category`
--

INSERT INTO `parent_category` (`pc_id`, `mc_id`, `pc_name`, `pc_image`, `pc_status`, `create_date`) VALUES
(1, 1, 'Quilling', '1489036329_sarees_deals.jpg', 1, '2017-07-29 09:24:18'),
(2, 1, 'Collages', '1488994627_kurtas_080317_tile_hp.jpg', 1, '2017-07-26 05:59:34'),
(3, 1, '3D Orgami', '1488994590_brightkurtis_080317_tile_hp.jpg', 1, '2017-07-26 06:02:04'),
(4, 1, 'Decoupage', '1488994547_bottomwear_080317_tile_hp.jpg', 1, '2017-07-26 06:02:04'),
(5, 1, 'Paper Marbling', '1488469018_avanya_020317_tile_hp.jpg', 1, '2017-07-26 06:02:04'),
(6, 1, 'Calligraphy', '1488519023_designersarees_030317_tile_hp.jpg', 1, '2017-07-26 06:02:04'),
(7, 2, 'Handmade Toy', '1488611916_modernkurtis_030317_tile_hp.jpg', 1, '2017-07-26 06:37:28'),
(8, 2, 'Glass Painting', '1488611966_heavysarees_030317_tile_hp.jpg', 1, '2017-07-26 06:37:36'),
(9, 2, 'Painting', '1488611966_heavysarees_030317_tile_hp.jpg', 1, '2017-07-26 06:37:43'),
(10, 2, 'Photo Frame', '1489036329_sarees_deals.jpg', 1, '2017-07-26 06:37:50'),
(11, 2, 'Candle', '1488994627_kurtas_080317_tile_hp.jpg', 1, '2017-07-26 06:37:57'),
(12, 2, 'Best Out Of Waste', '1488994590_brightkurtis_080317_tile_hp.jpg', 1, '2017-07-26 06:38:04'),
(13, 2, 'Handmade Card', '1488994590_brightkurtis_080317_tile_hp.jpg', 1, '2017-07-26 06:38:11'),
(14, 2, 'Scrapbook', '1488994590_brightkurtis_080317_tile_hp.jpg', 1, '2017-07-26 06:38:18'),
(15, 2, 'Bead Work', '1488994590_brightkurtis_080317_tile_hp.jpg', 1, '2017-07-26 06:38:26'),
(16, 3, 'Ikebana', '1488994547_bottomwear_080317_tile_hp.jpg', 1, '2017-07-26 06:38:49'),
(17, 3, 'Handmade Flower', '1488469018_avanya_020317_tile_hp.jpg', 1, '2017-07-26 06:38:56'),
(18, 4, 'Wood Carving', '1488519023_designersarees_030317_tile_hp.jpg', 1, '2017-07-26 06:39:04'),
(19, 4, 'Wood Turning', '1488611916_modernkurtis_030317_tile_hp.jpg', 1, '2017-07-26 06:39:14'),
(20, 4, 'Wood Painting', '1488611966_heavysarees_030317_tile_hp.jpg', 1, '2017-07-26 06:39:24'),
(21, 4, 'Furniture Making', '1488611966_heavysarees_030317_tile_hp.jpg', 1, '2017-07-26 06:39:34'),
(22, 5, 'Ceramic Tile Work', '1488611966_heavysarees_030317_tile_hp.jpg', 1, '2017-07-26 06:39:43'),
(23, 5, 'Ceramic Pottery', '1488611966_heavysarees_030317_tile_hp.jpg', 1, '2017-07-26 06:39:52'),
(24, 5, 'Mosaic Art', '1488611966_heavysarees_030317_tile_hp.jpg', 1, '2017-07-26 06:40:00'),
(25, 5, 'TerraCotta Art', '1488611966_heavysarees_030317_tile_hp.jpg', 1, '2017-07-26 06:40:09'),
(26, 6, 'Crochet', '1488611966_heavysarees_030317_tile_hp.jpg', 1, '2017-07-26 06:40:16'),
(27, 6, 'Applique', '1488611966_heavysarees_030317_tile_hp.jpg', 1, '2017-07-26 06:40:24'),
(28, 6, 'Needle Art', '1488611966_heavysarees_030317_tile_hp.jpg', 1, '2017-07-26 06:40:32'),
(29, 6, 'Embroidery', '1488519023_designersarees_030317_tile_hp.jpg', 1, '2017-07-26 06:40:42'),
(30, 6, 'Knitting', '1488994627_kurtas_080317_tile_hp.jpg', 1, '2017-07-26 06:40:49'),
(31, 7, 'Stone Carving', '1488611916_modernkurtis_030317_tile_hp.jpg', 1, '2017-07-26 06:40:57'),
(32, 7, 'Letter Carving On Stone', '1488519023_designersarees_030317_tile_hp.jpg', 1, '2017-07-26 06:41:06'),
(33, 8, 'Glass Carving', '1488611916_modernkurtis_030317_tile_hp.jpg', 1, '2017-07-26 06:41:14'),
(34, 8, 'Glass Bead', '1488469018_avanya_020317_tile_hp.jpg', 1, '2017-07-26 06:41:21'),
(35, 8, 'Copper Foil Glass Work', '1488469018_avanya_020317_tile_hp.jpg', 1, '2017-07-26 06:41:28'),
(36, 8, 'Portland Vase', '1488519023_designersarees_030317_tile_hp.jpg', 1, '2017-07-26 06:41:37'),
(37, 8, 'Bubblegram', '1488994627_kurtas_080317_tile_hp.jpg', 1, '2017-07-26 06:41:45'),
(38, 8, 'Stained Glass & Lead Came', '1488611916_modernkurtis_030317_tile_hp.jpg', 1, '2017-07-26 06:41:54'),
(39, 9, 'Necklaces', '1488994547_bottomwear_080317_tile_hp.jpg', 1, '2017-07-26 06:42:04'),
(40, 9, 'Earrings', '1488469018_avanya_020317_tile_hp.jpg', 1, '2017-07-26 06:42:13'),
(41, 9, 'Jewellery Sets', '1488611916_modernkurtis_030317_tile_hp.jpg', 1, '2017-07-26 06:42:21'),
(42, 9, 'Anklets', '1488469018_avanya_020317_tile_hp.jpg', 1, '2017-07-26 06:42:29'),
(43, 9, 'Pendants', '1488469018_avanya_020317_tile_hp.jpg', 1, '2017-07-26 06:42:38'),
(44, 9, 'Bangles', '1488519023_designersarees_030317_tile_hp.jpg', 1, '2017-07-26 06:42:46'),
(45, 9, 'Mangalsutra', '1488994627_kurtas_080317_tile_hp.jpg', 1, '2017-07-26 06:42:55'),
(46, 9, 'Rings', '1488611916_modernkurtis_030317_tile_hp.jpg', 1, '2017-07-26 06:43:04');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `product_id` int(11) NOT NULL,
  `mc_id` int(11) NOT NULL,
  `pc_id` int(11) NOT NULL,
  `cc_id` int(10) NOT NULL,
  `sc_id` int(11) NOT NULL,
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
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`product_id`, `mc_id`, `pc_id`, `cc_id`, `sc_id`, `product_name`, `product_code`, `product_image`, `price`, `discounted_price`, `description`, `quantity`, `seller_id`, `status`, `created_by`, `creater_id`, `create_date`) VALUES
(1, 1, 1, 1, 0, 'Green Earrings', '', '1_product.jpg', '75', 50, 'Beautiful quilled earrings in green color, and look beautiful and elegant with combination of pearl. A lovely quilled green jhumka with Pearl.', '4', 5, 1, '', 0, '2017-09-07 13:43:05'),
(2, 1, 1, 1, 0, 'Two Color Earrings', '', '2_product.jpg', '75', 50, 'Quilled earrings with two beautiful colors. Combination of two elegant color pink and cream. It looks nice with use of pearl. You will love this two color pearl jhumka. \r\n', '3', 5, 1, '', 0, '2017-09-07 13:43:36'),
(3, 1, 1, 1, 0, 'Shanku Shape Earrings', '', '3_product.jpg', '75', 50, 'Combination of Yellow and green color. Quilled shanku shape yellow  color earrings. Looks great with green moti.\r\n\r\nSomething different looks great.\r\n', '5', 5, 1, '', 0, '2017-09-07 13:43:36'),
(4, 1, 1, 1, 0, 'Full Set', '', '4_product.jpg', '100', 70, 'Here I am coming with full quilled set. Pendant and two earrings. Design is simple but looks very elegant. Quilled purple pendant, earrings set.\r\n', '4', 5, 1, '', 0, '2017-09-07 13:43:36'),
(5, 1, 1, 1, 0, 'Ganpati Envelope', '', '5_product.jpg', '30', 20, 'This golden envelope decor with quilling art. Quilling ganpati design look great on envelope.\r\n', '4', 5, 1, '', 0, '2017-09-07 13:43:36'),
(6, 1, 1, 1, 0, 'Flower Design', '', '6_product.jpg', '30', 20, 'Beautiful flower design looks elegant on envelope. Envelope decor with pink Quilled flowers?.\r\n', '4', 20, 1, '', 0, '2017-09-08 07:01:38'),
(7, 1, 1, 1, 0, 'Ring on Cover', '', '7_product.jpg', '45', 30, 'This purple card is special made for engagement, marriage and anniversary. Two beautiful rings made on this card. You will love this elegant,  quilled card.\r\n', '3', 5, 1, '', 0, '2017-09-07 13:43:36'),
(8, 1, 1, 1, 0, 'Last Card', '', '8_product.jpg', '45', 30, 'Beautiful quilled art on golden cover looks great. You can use in marriage, engagement or any other functions.\r\n', '2', 5, 1, '', 0, '2017-09-07 13:43:36');

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `pimage_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image_name` varchar(300) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `seller_id` int(11) NOT NULL,
  `company_name` varchar(250) NOT NULL,
  `contact_person` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` varchar(25) NOT NULL,
  `landline` varchar(25) NOT NULL,
  `address` text NOT NULL,
  `gcm_id` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`seller_id`, `company_name`, `contact_person`, `email`, `password`, `mobile`, `landline`, `address`, `gcm_id`, `status`, `create_date`) VALUES
(5, 'Intelliworkz Business Solutions Pvt. Ltd.', 'Arvind Rajput', 'rajputarvind@gmail.com', 'af5050e6404698d4f1d6dbead236a028', '9427801299', '09427801299', 'F-1003, Titanium City Center, Nr. Anandnagar,', '', 1, '2017-09-05 05:16:43'),
(11, 'sas', 'sasa', 'bb@gmail.com', 'f45731e3d39a1b2330bbf93e9b3de59e', '897676767767', '5656778', 'fdfdfd fdfdfffffffffffffffff', 'uyuyyuy', 1, '2017-09-05 05:21:50'),
(12, 'dsd', 'sds', 'bb@gmail.com', '5c7d0c90cf9e0ce560956179e8e82e7d', '897676767767', '5656778', 'sds', 'sds', 1, '2017-09-05 05:22:07'),
(13, 'as', 'sds', 'bb@gmail.com', '457391c9c82bfdcbb4947278c0401e41', 'as', 'as', 'sa', 'sa', 1, '2017-09-05 05:23:52'),
(14, 'sas', 'sa', 'bb@gmail.com', '963017110c3d4f8b8a617203897535fa', '6576676', '676', 'cdvcv', 'cvc', 1, '2017-09-05 05:25:18'),
(15, 'sd', 'sdsd', 'bb@gmail.com', '202cb962ac59075b964b07152d234b70', '897676767767', 'dds', 'fdfdfd fdfdfffffffffffffffff', 'dsdsd', 1, '2017-09-05 05:28:24'),
(16, 'sdf', 'dfgd', 'test@test.com', 'cc03e747a6afbbcbf8be7668acfebee5', '5476575', '5765', 'vbgf', 'cc', 1, '2017-09-07 07:36:44'),
(17, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', 1, '2017-09-07 07:38:10'),
(18, 'bdfd', 'YTWW', 'test@test.com', 'cc03e747a6afbbcbf8be7668acfebee5', '576767', 'gfg', 'fgfg', 'fgf', 1, '2017-09-07 07:39:32'),
(19, 'fd', 'fd', 'test@test.com', 'cc03e747a6afbbcbf8be7668acfebee5', '65656', '76565', 'hghg', 'fgfgf', 1, '2017-09-07 07:42:15'),
(20, 'ss', 'sd', 'bb@gmail.com', '202cb962ac59075b964b07152d234b70', '434', '43', '343', '343', 1, '2017-09-07 08:58:25'),
(21, 'tct', 'palak', 'bb@gmail.com', '202cb962ac59075b964b07152d234b70', '87878787878787', '5656', '454', '454', 1, '2017-09-08 09:00:30');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `s_id` int(11) NOT NULL,
  `s_banner` varchar(100) NOT NULL,
  `s_status` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`s_id`, `s_banner`, `s_status`, `create_date`) VALUES
(1, 'http://www.craftkrazy.com/images/banner/banner01.jpg', 1, '2017-07-25 12:03:12'),
(2, 'http://www.craftkrazy.com/images/banner/banner02.jpg', 1, '2017-07-25 11:24:34'),
(3, 'http://www.craftkrazy.com/images/banner/banner03.jpg', 1, '2017-07-25 11:24:48');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `sc_id` int(11) NOT NULL,
  `mc_id` int(11) NOT NULL,
  `pc_id` int(11) NOT NULL,
  `cc_id` int(11) NOT NULL,
  `sc_name` varchar(50) NOT NULL,
  `sc_status` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `a_name` varchar(256) NOT NULL,
  `a_pass` varchar(256) NOT NULL,
  `a_type` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `a_name`, `a_pass`, `a_type`) VALUES
(1, 'super', '3e42bf8a32cef77e549dc9eda952d5f3', 'super_admin'),
(2, 'admin', '71c93d9c88d0d202bc91161d8c3ce295', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user-registration`
--

CREATE TABLE `user-registration` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(10) NOT NULL,
  `product_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `child_category`
--
ALTER TABLE `child_category`
  ADD PRIMARY KEY (`cc_id`),
  ADD KEY `mc_id` (`mc_id`),
  ADD KEY `pc_id` (`pc_id`),
  ADD KEY `pc_id_2` (`pc_id`);

--
-- Indexes for table `child_category1`
--
ALTER TABLE `child_category1`
  ADD PRIMARY KEY (`cc_id`),
  ADD KEY `mc_id` (`mc_id`),
  ADD KEY `pc_id` (`pc_id`),
  ADD KEY `pc_id_2` (`pc_id`);

--
-- Indexes for table `main_category`
--
ALTER TABLE `main_category`
  ADD PRIMARY KEY (`mc_id`);

--
-- Indexes for table `parent_category`
--
ALTER TABLE `parent_category`
  ADD PRIMARY KEY (`pc_id`),
  ADD KEY `mc_id` (`mc_id`),
  ADD KEY `mc_id_2` (`mc_id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`pimage_id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`seller_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sc_id`),
  ADD KEY `mc_id` (`mc_id`),
  ADD KEY `pc_id` (`pc_id`),
  ADD KEY `cc_id` (`cc_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `user-registration`
--
ALTER TABLE `user-registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `child_category`
--
ALTER TABLE `child_category`
  MODIFY `cc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `child_category1`
--
ALTER TABLE `child_category1`
  MODIFY `cc_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `main_category`
--
ALTER TABLE `main_category`
  MODIFY `mc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `parent_category`
--
ALTER TABLE `parent_category`
  MODIFY `pc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `pimage_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `seller_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sc_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user-registration`
--
ALTER TABLE `user-registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `child_category`
--
ALTER TABLE `child_category`
  ADD CONSTRAINT `child_category_ibfk_1` FOREIGN KEY (`mc_id`) REFERENCES `main_category` (`mc_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `child_category_ibfk_2` FOREIGN KEY (`pc_id`) REFERENCES `parent_category` (`pc_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `child_category1`
--
ALTER TABLE `child_category1`
  ADD CONSTRAINT `child_category1_ibfk_1` FOREIGN KEY (`mc_id`) REFERENCES `main_category` (`mc_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `child_category1_ibfk_2` FOREIGN KEY (`pc_id`) REFERENCES `parent_category` (`pc_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `parent_category`
--
ALTER TABLE `parent_category`
  ADD CONSTRAINT `parent_category_ibfk_1` FOREIGN KEY (`mc_id`) REFERENCES `main_category` (`mc_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD CONSTRAINT `sub_category_ibfk_1` FOREIGN KEY (`mc_id`) REFERENCES `main_category` (`mc_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sub_category_ibfk_2` FOREIGN KEY (`pc_id`) REFERENCES `parent_category` (`pc_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sub_category_ibfk_3` FOREIGN KEY (`cc_id`) REFERENCES `child_category1` (`cc_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
