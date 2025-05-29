-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 08, 2024 at 08:23 PM
-- Server version: 10.4.33-MariaDB-log
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xdnvstor_termtem`
--

-- --------------------------------------------------------

--
-- Table structure for table `acckt`
--

CREATE TABLE `acckt` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `acckt`
--

INSERT INTO `acckt` (`id`, `username`, `password`, `token`) VALUES
(1, '#', '#', '#');

-- --------------------------------------------------------

--
-- Table structure for table `aceracer`
--

CREATE TABLE `aceracer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `uc` varchar(64) NOT NULL,
  `amount` varchar(64) NOT NULL,
  `number` varchar(64) NOT NULL,
  `status` enum('เปิดขาย','ปิดขาย') NOT NULL DEFAULT 'เปิดขาย'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aceracer`
--

INSERT INTO `aceracer` (`id`, `name`, `uc`, `amount`, `number`, `status`) VALUES
(1, '65 Toksns', '65', '29', '1', 'เปิดขาย'),
(2, '270 Toksns', '270', '124', '2', 'เปิดขาย'),
(3, '740 Tokens', '740', '290', '3', 'เปิดขาย'),
(4, '1,300 Tokens', '1,300', '535', '4', 'เปิดขาย'),
(5, '3,180 Tokens', '3,180', '1360', '5', 'เปิดขาย'),
(6, '6,530 Tokens', '6,530', '2700', '6', 'เปิดขาย');

-- --------------------------------------------------------

--
-- Table structure for table `arenabreakout`
--

CREATE TABLE `arenabreakout` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `coupon` varchar(64) NOT NULL,
  `amount` varchar(64) NOT NULL,
  `number` varchar(64) NOT NULL,
  `status` enum('เปิดขาย','ปิดขาย') NOT NULL DEFAULT 'เปิดขาย'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `arenabreakout`
--

INSERT INTO `arenabreakout` (`id`, `name`, `coupon`, `amount`, `number`, `status`) VALUES
(1, '66 Bonds', '66', '34', '7', 'เปิดขาย'),
(2, '335 Bonds', '335', '160', '8', 'เปิดขาย'),
(3, '675 Bonds', '675', '320', '9', 'เปิดขาย'),
(4, '1,690 Bonds', '1,690', '785', '10', 'เปิดขาย'),
(5, '3,400 Bonds', '3,400', '1560', '11', 'เปิดขาย'),
(6, '6,820 Bonds', '6,820', '3120', '12', 'เปิดขาย');

-- --------------------------------------------------------

--
-- Table structure for table `byshopme`
--

CREATE TABLE `byshopme` (
  `id` int(11) NOT NULL,
  `username_byshopme` varchar(255) NOT NULL,
  `apikey_byshopme` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `byshopme`
--

INSERT INTO `byshopme` (`id`, `username_byshopme`, `apikey_byshopme`) VALUES
(1, '.#', '#');

-- --------------------------------------------------------

--
-- Table structure for table `card_product`
--

CREATE TABLE `card_product` (
  `id` int(11) NOT NULL,
  `type` text NOT NULL,
  `name_product` text NOT NULL,
  `price_product` decimal(10,2) NOT NULL,
  `details_product` text NOT NULL,
  `image_product` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category_topupgame`
--

CREATE TABLE `category_topupgame` (
  `id` int(11) NOT NULL,
  `link` text NOT NULL,
  `name` text NOT NULL,
  `des` text NOT NULL,
  `img` text NOT NULL,
  `status` enum('เปิด','ปิด') NOT NULL DEFAULT 'เปิด'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category_topupgame`
--

INSERT INTO `category_topupgame` (`id`, `link`, `name`, `des`, `img`, `status`) VALUES
(1, '/freefire', 'Garena FREE FIRE', 'เติมเกม Free Fire (ฟีฟาย) อย่างรวดเร็ว! เพียงแค่ใส่ UID เลือกจำนวน Diamonds ที่คุณต้องการ, ชำระเงินแล้ว Diamons จะถูกโอนเข้าบัญชีของคุณโดยอัตโนมัติ', 'https://img2.pic.in.th/pic/freefire_tile-10946a1f68324a345.png', 'เปิด'),
(2, '/honkai', 'Honkai: Star Rail', 'เติมเกม Honkai: Star Rail ราคาถูก สะดวก รวดเร็ว ปลอดภัย เติมได้ตลอด 24 ชม. เพียงแค่กรอก User ID และ เลือกเซิฟเวอร์ จากนั้นเลือกจำนวน Oneiric Shard ที่ท่านต้องการเติม ชำระเงินแล้วรับของในบัญชี ', 'https://img2.pic.in.th/pic/Honkai-Star-Rail-1.jpeg', 'เปิด'),
(3, '/fcmobile', 'fcmobile', 'เติม FC MOBLIE (ฟีฟ่าโมบาย) ราคาถูก สะดวก รวดเร็ว ปลอดภัย เติมได้ตลอด 24 ชม. เพียงแค่กรอก UID จากนั้นเลือกจำนวน FIFA Point ที่ท่านต้องการเติม ชำระเงินแล้วเสร็จรับของในบัญชีทันที', 'https://img5.pic.in.th/file/secure-sv1/FC-Mobile-1.jpeg', 'เปิด'),
(4, '/valorant', 'Valorant', 'เติม VALORANT Points ราคาถูก เพียงแค่กรอก Riot ID จากนั้นเลือกจำนวน Points ที่ต้องการและทำการชำระเงิน เติมเสร็จรับของในบัญชี VALORANT ได้ทันที', 'https://img2.pic.in.th/pic/valorant_tile-1.png', 'เปิด'),
(5, '/pubgmobile-global', 'PUBG Mobile (Global)', 'เติม UC ง่ายๆสบายๆ เพียงแค่กรอก Player ID จากนั้นเลือกจำนวน UC ที่ต้องการและทำการชำระเงิน เติมเสร็จรับของในบัญชี PUBGM ได้ทันที [หมายเหตุ: บางไอดีเติมไม่ได้ ณ ตอนนี้ทางระบบเกมมีปัญหา]', 'https://img5.pic.in.th/file/secure-sv1/images-15ff588991f2c5570.jpeg', 'เปิด'),
(6, '/genshinimpact', 'Genshin Impact', 'เพียงแค่ใส่ UID และเลือก เซิฟเวอร์ให้ถูกตัอง จากนั้นเลือกราคาที่ต้องการเติม Genesis Crystals หลังจากทำการชำระเงินเสร็จสิ้น ระบบจะส่ง Genesis Crystals เข้าบัญชีทันที', 'https://img2.pic.in.th/pic/Genshin-Impact-1.jpeg', 'เปิด'),
(7, '/arenabreakout', 'Arena Breakout', 'เติมเกม Arena Breakout ราคาถูก สะดวก รวดเร็ว ปลอดภัย เติมได้ตลอด 24 ชม. เพียงแค่กรอก Player ID จากนั้นเลือกจำนวน Bonds ที่ท่านต้องการเติม ชำระเงินแล้วรับของในบัญชี (บริการนี้ใช้เวลาในการทำงาน 1-60 นาที)', 'https://img2.pic.in.th/pic/Arena-Breakout-1.jpeg', 'เปิด'),
(8, '/aceracer', 'Ace Racer', 'ซื้อ Tokens อย่างรวดเร็ว! แค่ใส่ ชื่อ UID และ เซิฟเวอร์ เลือกจำนวน Tokens ที่ต้องการเติม, ชำระเงินแล้วรับ Tokens ทันทีใน Ace Racer วิธีที่สะดวกและง่ายดายจาก KHANTHEP', 'https://img2.pic.in.th/pic/ilttkq-1.png', 'เปิด'),
(9, '/x-hero', 'X-Hero', 'ซื้อ Diamond อย่างรวดเร็ว! แค่ใส่ ชื่อผู้ใช้ ID,เลือกจำนวน Diamond ที่ต้องการเติม, ชำระเงินแล้วรับ Diamond ทันทีใน X-HERO.ซื้อ Diamond เลยตอนนี้ด้วยวิธีที่สะดวกและง่ายดาย', 'https://img5.pic.in.th/file/secure-sv1/x-hero-1.jpeg', 'เปิด'),
(10, '/zepeto', 'Zepeto', 'ซื้อ ZEPETO ZEM และ Coin อย่างรวดเร็ว! แค่ใส่ ชื่อผู้ใช้ ZEPETO,เลือกจำนวน ZEM and Coin ที่ต้องการเติม, ชำระเงินแล้วรับ ZEM และ Coin ทันทีใน ZEPETO.ไม่ต้องสมัครหรือ Log-in ซื้อ ZEPETO ZEM และ Coin เลยตอนนี้ด้วยวิธีที่สะดวกและง่าย', 'https://img5.pic.in.th/file/secure-sv1/ZEPETO-icon-1.png', 'เปิด'),
(11, '/lolriot', 'League of Legends (Riot)', 'เติม League of Legends RP ง่ายๆสบายๆ เพียงแค่กรอก Riot user ID จากนั้นเลือกจำนวน RP ที่ต้องการและทำการชำระเงิน เติมเสร็จรับของในบัญชี League of Legends ได้ทันที พร้อมรับส่วนลดสูงสุด 10%', 'https://img5.pic.in.th/file/secure-sv1/t-j-geisen-lol-icon-rendered-v001-1.jpeg', 'เปิด'),
(12, '/ragnarok', 'Ragnarok Original', 'เติม Ragnarok Original ง่ายๆสบายๆ เพียงแค่กรอก user ID จากนั้นเลือกจำนวน Nyan Berry ที่ต้องการและทำการชำระเงิน เติมเสร็จรับของในบัญชี Ragnarok Original ได้ทันที', 'https://img2.pic.in.th/pic/88c2d328b7a2e5028a95bf8d055976d8-360-1.png', 'เปิด'),
(13, '/sausageman', 'Sausage Man', 'เติม Sausage Man ง่ายๆสบายๆ เพียงแค่กรอก ID จากนั้นเลือกจำนวน CANDIES ที่ต้องการและทำการชำระเงิน เติมเสร็จรับของในบัญชี Sausage Man ได้ทันที', 'https://img5.pic.in.th/file/secure-sv1/sausageman_tile-1.png', 'เปิด'),
(14, '/dragonraja', 'Dragon Raja', 'เติม Coupons ง่ายๆสบายๆ เพียงแค่กรอก User ID จากนั้นเลือกจำนวน Coupons ที่ต้องการและทำการชำระเงิน เติมเสร็จรับของในบัญชี Dragon Raja ได้ทันที', 'https://img5.pic.in.th/file/secure-sv1/dragonraja_tile-1.png', 'เปิด'),
(15, '/muorigin3', 'MU Origin 3 (SEA)', 'เติม Hyper Front Star Quartz ง่ายๆสบายๆ เพียงแค่กรอก Hyper Front user ID จากนั้นเลือกจำนวน Star Quartz ที่ต้องการและทำการชำระเงิน เติมเสร็จรับของในบัญชี Hyper Front ได้ทันที', 'https://img5.pic.in.th/file/secure-sv1/1309-1.jpeg', 'เปิด'),
(16, '/identityv', 'Identity V', 'ซื้อ Echoes อย่างรวดเร็ว! แค่ใส่ ชื่อผู้ใช้ UID,เลือกจำนวน Echoes ที่ต้องการเติม, ชำระเงินแล้วรับ Echoes ทันทีใน Ragnarok Tactics II.ซื้อ Echoes เลยตอนนี้ด้วยวิธีที่สะดวกและง่ายดาย', 'https://img5.pic.in.th/file/secure-sv1/identity-v-1.png', 'เปิด');

-- --------------------------------------------------------

--
-- Table structure for table `contact_config`
--

CREATE TABLE `contact_config` (
  `id` int(11) NOT NULL,
  `facebook` text NOT NULL,
  `line` text NOT NULL,
  `discord` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_config`
--

INSERT INTO `contact_config` (`id`, `facebook`, `line`, `discord`, `date`) VALUES
(1, 'https://www.facebook.com/Mreasyshopservice', 'https://www.facebook.com/Mreasyshopservice', '1106900001549987851', '2024-05-05 12:39:15');

-- --------------------------------------------------------

--
-- Table structure for table `dragonraja`
--

CREATE TABLE `dragonraja` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `coupon` varchar(64) NOT NULL,
  `amount` varchar(64) NOT NULL,
  `number` varchar(64) NOT NULL,
  `status` enum('เปิดขาย','ปิดขาย') NOT NULL DEFAULT 'เปิดขาย'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dragonraja`
--

INSERT INTO `dragonraja` (`id`, `name`, `coupon`, `amount`, `number`, `status`) VALUES
(1, 'Investment Fund', '0', '413', '1', 'เปิดขาย'),
(2, 'Investment Fund II', '0', '551', '2', 'เปิดขาย'),
(3, '66 Coupons', '66', '29', '3', 'เปิดขาย'),
(4, '264 Coupons', '264', '112', '4', 'เปิดขาย'),
(5, '1,098 Coupons', '1098', '420', '5', 'เปิดขาย'),
(6, '2,246 Coupons', '2246', '839', '6', 'เปิดขาย'),
(7, '3,768 Coupons', '3768', '1398', '7', 'เปิดขาย'),
(8, '7,546 Coupons', '7546', '2795', '8', 'เปิดขาย'),
(9, '15,092 Coupons', '15092', '5590', '9', 'เปิดขาย');

-- --------------------------------------------------------

--
-- Table structure for table `fcmoblie`
--

CREATE TABLE `fcmoblie` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `coupon` varchar(64) NOT NULL,
  `amount` varchar(64) NOT NULL,
  `number` varchar(64) NOT NULL,
  `status` enum('เปิดขาย','ปิดขาย') NOT NULL DEFAULT 'เปิดขาย'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fcmoblie`
--

INSERT INTO `fcmoblie` (`id`, `name`, `coupon`, `amount`, `number`, `status`) VALUES
(1, '40 FC POINTS', '40', '15', '1', 'เปิดขาย'),
(2, '100 FC POINTS', '100', '35', '2', 'เปิดขาย'),
(3, '520 FC POINTS', '520', '178', '3', 'เปิดขาย'),
(4, '1,070 FC POINTS', '1070', '346', '4', 'เปิดขาย'),
(5, '2,200 FC POINTS', '2200', '722', '5', 'เปิดขาย'),
(6, '5,750 FC POINTS', '5750', '1783', '6', 'เปิดขาย'),
(7, '12,000 FC POINTS', '12000', '3664', '7', 'เปิดขาย'),
(8, '39 FC SILVER', '39', '15', '8', 'เปิดขาย'),
(9, '99 FC SILVER', '99', '35', '9', 'เปิดขาย'),
(10, '499 FC SILVER', '499', '178', '10', 'เปิดขาย'),
(11, '999 FC SILVER', '999', '346', '11', 'เปิดขาย'),
(12, '1,999 FC SILVER', '1999', '722', '12', 'เปิดขาย'),
(13, '4,999 FC SILVER', '4999', '1784', '13', 'เปิดขาย'),
(14, '9,999 FC SILVER', '9999', '3665', '14', 'เปิดขาย');

-- --------------------------------------------------------

--
-- Table structure for table `freefire`
--

CREATE TABLE `freefire` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `diamond` varchar(64) NOT NULL,
  `amount` varchar(64) NOT NULL,
  `number` varchar(64) NOT NULL,
  `status` enum('เปิดขาย','ปิดขาย') NOT NULL DEFAULT 'เปิดขาย'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `freefire`
--

INSERT INTO `freefire` (`id`, `name`, `diamond`, `amount`, `number`, `status`) VALUES
(1, '33 Diamond', '33', '14', '2654', 'เปิดขาย'),
(2, '68 Diamond', '68', '23', '2655', 'เปิดขาย'),
(3, '172 Diamond', '172', '52', '2656', 'เปิดขาย'),
(4, '310 Diamond', '310', '92', '2657', 'เปิดขาย'),
(5, '517 Diamond', '517', '152', '2658', 'เปิดขาย'),
(6, '690 Diamond', '690', '250', '2659', 'เปิดขาย'),
(7, '1,052 Diamond', '1,052', '297', '2660', 'เปิดขาย'),
(8, '1,801 Diamond', '1,801', '497', '2661', 'เปิดขาย'),
(9, '3,698 Diamond', '3698', '985', '2662', 'เปิดขาย'),
(10, 'แพ็ครายสัปดาห์', '0', '985', '2663', 'เปิดขาย'),
(11, 'แพ็ครายเดือน', '0', '985', '2664', 'เปิดขาย'),
(12, 'BP Card', '0', '985', '2665', 'เปิดขาย'),
(13, 'แพ็คเติบโต', '0', '985', '2711', 'เปิดขาย');

-- --------------------------------------------------------

--
-- Table structure for table `genshinimpact`
--

CREATE TABLE `genshinimpact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `coupon` varchar(64) NOT NULL,
  `amount` varchar(64) NOT NULL,
  `number` varchar(64) NOT NULL,
  `status` enum('เปิดขาย','ปิดขาย') NOT NULL DEFAULT 'เปิดขาย'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genshinimpact`
--

INSERT INTO `genshinimpact` (`id`, `name`, `coupon`, `amount`, `number`, `status`) VALUES
(1, '60 Genesis Crystals', '60', '27', '7498', 'เปิดขาย'),
(2, '330 Genesis Crystals', '330', '136', '7516', 'เปิดขาย'),
(3, '1,090 Genesis Crystals', '1,090', '410', '7534', 'เปิดขาย'),
(4, '2,240 Genesis Crystals', '2,240', '888', '7552', 'เปิดขาย'),
(5, '3,880 Genesis Crystals', '3,880', '1366', '7570', 'เปิดขาย'),
(6, '8,080 Genesis Crystals', '8,080', '2732', '7588', 'เปิดขาย'),
(7, 'Blessing of the Welkin Moon', '0', '136', '11026', 'เปิดขาย');

-- --------------------------------------------------------

--
-- Table structure for table `history_game`
--

CREATE TABLE `history_game` (
  `id` int(11) NOT NULL,
  `topupby` varchar(32) NOT NULL,
  `topuptime` date NOT NULL,
  `price` varchar(60) NOT NULL,
  `list` varchar(60) NOT NULL,
  `status` int(11) NOT NULL,
  `username` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `history_shop`
--

CREATE TABLE `history_shop` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `name` text NOT NULL,
  `details` text NOT NULL,
  `price` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `history_slip`
--

CREATE TABLE `history_slip` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_bank` varchar(255) NOT NULL,
  `customer_accountbank` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `history_social`
--

CREATE TABLE `history_social` (
  `id` int(11) NOT NULL,
  `link` varchar(11) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `list` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `timeadd` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `history_wallet`
--

CREATE TABLE `history_wallet` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `link` varchar(999) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `honkai`
--

CREATE TABLE `honkai` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `coupon` varchar(64) NOT NULL,
  `amount` varchar(64) NOT NULL,
  `number` varchar(64) NOT NULL,
  `status` enum('เปิดขาย','ปิดขาย') NOT NULL DEFAULT 'เปิดขาย'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `honkai`
--

INSERT INTO `honkai` (`id`, `name`, `coupon`, `amount`, `number`, `status`) VALUES
(1, '60 Oneiric Shard', '60', '29', '2', 'เปิดขาย'),
(2, '330 Oneiric Shard', '330', '147', '3', 'เปิดขาย'),
(3, '1,090 Oneiric Shard', '1090', '451', '4', 'เปิดขาย'),
(4, '3,880 Oneiric Shard', '3880', '1476', '5', 'เปิดขาย'),
(5, '8,080 Oneiric Shard', '8080', '3034', '6', 'เปิดขาย');

-- --------------------------------------------------------

--
-- Table structure for table `identityv`
--

CREATE TABLE `identityv` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `diamond` varchar(64) NOT NULL,
  `amount` varchar(64) NOT NULL,
  `number` varchar(64) NOT NULL,
  `status` enum('เปิดขาย','ปิดขาย') NOT NULL DEFAULT 'เปิดขาย'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `identityv`
--

INSERT INTO `identityv` (`id`, `name`, `diamond`, `amount`, `number`, `status`) VALUES
(1, '60 Echoes + โบนัส 6 Echoes', '66', '27', '1', 'เปิดขาย'),
(2, '185 Echoes + โบนัส 18 Echoes', '203', '81', '2', 'เปิดขาย'),
(3, '305 Echoes + โบนัส 30 Echoes', '335', '135', '3', 'เปิดขาย'),
(4, '690 Echoes + โบนัส 69 Echoes', '759', '270', '4', 'เปิดขาย'),
(5, '2025 Echoes + โบนัส 202 Echoes', '2227', '810', '5', 'เปิดขาย'),
(6, '3330 Echoes + โบนัส 333 Echoes', '3663', '1349', '6', 'เปิดขาย'),
(7, '6590 Echoes + โบนัส 659 Echoes  ', '7249', '2697', '7', 'เปิดขาย');

-- --------------------------------------------------------

--
-- Table structure for table `lolriot`
--

CREATE TABLE `lolriot` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `RP` varchar(64) NOT NULL,
  `amount` varchar(64) NOT NULL,
  `number` varchar(64) NOT NULL,
  `status` enum('เปิดขาย','ปิดขาย') NOT NULL DEFAULT 'เปิดขาย'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lolriot`
--

INSERT INTO `lolriot` (`id`, `name`, `RP`, `amount`, `number`, `status`) VALUES
(1, '340 RP', '63', '63', '1', 'เปิดขาย'),
(2, '750 RP', '750', '179', '2', 'เปิดขาย'),
(3, '1,550 RP', '1,550', '357', '3', 'เปิดขาย'),
(4, '3,200 RP', '3,200', '714', '4', 'เปิดขาย'),
(5, '5,500 RP', '5,500', '1190', '5', 'เปิดขาย'),
(6, '11,500 RP', '11,500', '2379', '6', 'เปิดขาย');

-- --------------------------------------------------------

--
-- Table structure for table `muorigin3`
--

CREATE TABLE `muorigin3` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `coupon` varchar(64) NOT NULL,
  `amount` varchar(64) NOT NULL,
  `number` varchar(64) NOT NULL,
  `status` enum('เปิดขาย','ปิดขาย') NOT NULL DEFAULT 'เปิดขาย'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `muorigin3`
--

INSERT INTO `muorigin3` (`id`, `name`, `coupon`, `amount`, `number`, `status`) VALUES
(1, '70 Divine Diamonds', '12', '10', '14231', 'เปิดขาย'),
(2, '350 Divine Diamonds', '24', '20', '14249', 'เปิดขาย'),
(3, '1050 Divine Diamonds', '60', '50', '14267', 'เปิดขาย'),
(4, '2100 Divine Diamonds', '110', '90', '14285', 'เปิดขาย'),
(5, '3500 Divine Diamonds', '185', '150', '14303', 'เปิดขาย'),
(6, '7000 Divine Diamonds', '370', '295', '14321', 'เปิดขาย');

-- --------------------------------------------------------

--
-- Table structure for table `notify_config`
--

CREATE TABLE `notify_config` (
  `id` int(11) NOT NULL,
  `dis_registered` text NOT NULL,
  `dis_login` text NOT NULL,
  `dis_topup` text NOT NULL,
  `dis_buy` text NOT NULL,
  `dis_game` text NOT NULL,
  `dis_system` text NOT NULL,
  `line_registered` text NOT NULL,
  `line_login` text NOT NULL,
  `line_topup` text NOT NULL,
  `line_buy` text NOT NULL,
  `line_game` text NOT NULL,
  `line_system` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notify_config`
--

INSERT INTO `notify_config` (`id`, `dis_registered`, `dis_login`, `dis_topup`, `dis_buy`, `dis_game`, `dis_system`, `line_registered`, `line_login`, `line_topup`, `line_buy`, `line_game`, `line_system`) VALUES
(1, '#', '#', '#', '#', '', '#', '#', '#', '#', '#', '', '#');

-- --------------------------------------------------------

--
-- Table structure for table `products_byshopme`
--

CREATE TABLE `products_byshopme` (
  `product_code` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `product_sell` decimal(10,2) NOT NULL,
  `api_stock` int(11) NOT NULL,
  `product_status` enum('on','off') NOT NULL DEFAULT 'off',
  `product_image` text NOT NULL,
  `product_info` text NOT NULL,
  `api_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products_byshopme`
--

INSERT INTO `products_byshopme` (`product_code`, `product_name`, `product_price`, `product_sell`, `api_stock`, `product_status`, `product_image`, `product_info`, `api_status`) VALUES
(1, 'Netflix 4K /30วัน (จอส่วนตัว)', 90.00, 120.00, 50, 'on', 'https://img2.pic.in.th/pic/319e60b12af156616a.png', '<h3><u>รายละเอียด</u></h3> \r\n<h6>▶️ Netflix แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน </h6> \r\n<h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> \r\n<h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">UltraHD 4K</span></h6> \r\n<h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i></h6>\r\n<h6>▶️ แอคเคาท์ไทยแท้100%</b></h6>\r\n<h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6> \r\n<h6>▶️ รองรับอุปกรณ์ <i>(Com, Ipad ,มือถือ)</i></h6>\r\n<h6>▶️ Netflixแพ็กเกจ UltraHD 4K <span class=\"badge bg-warning\">รายเดือน</span></h6>  \r\n<li>website <a href=\"https://www.netflix.com/\" target=\"_blank\">https://www.netflix.com/</a></li>  ', 'พร้อมส่ง'),
(2, 'Netflix 4K /7วัน (จอส่วนตัว)', 29.00, 35.00, 0, 'on', 'https://img5.pic.in.th/file/secure-sv1/307f84b7fb2132eb6d.png', '<h3><u>รายละเอียด</u></h3> \r\n<h6>▶️ Netflix แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน </h6> \r\n<h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> \r\n<h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">UltraHD 4K</span></h6> \r\n<h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i></h6>\r\n<h6>▶️ แอคเคาท์ไทยแท้100%</b></h6>\r\n<h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6> \r\n<h6>▶️ รองรับอุปกรณ์ <i>(Com, Ipad ,มือถือ)</i></h6>\r\n<h6>▶️ Netflixแพ็กเกจ UltraHD 4K <span class=\"badge bg-warning\">7วัน</span></h6>  \r\n<li>website <a href=\"https://www.netflix.com/\" target=\"_blank\">https://www.netflix.com/</a></li>  ', 'สินค้าหมด'),
(3, 'Netflix 4K /30วัน (จอแชร์)', 69.00, 89.00, 68, 'on', 'https://img5.pic.in.th/file/secure-sv1/2926edc19670ab9c3e.png', '<h3><u>รายละเอียด</u></h3> \r\n<h6>▶️ Netflix แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน </h6> \r\n<h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> \r\n<h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">UltraHD 4K</span></h6> \r\n<h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i></h6>\r\n<h6>▶️ แอคเคาท์ไทยแท้100%</b></h6>\r\n<h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6> \r\n<h6>▶️ รองรับอุปกรณ์ <i>(Com, Ipad ,มือถือ)</i></h6>\r\n<h6>▶️ Netflixแพ็กเกจ UltraHD 4K <span class=\"badge bg-warning\">รายเดือน</span></h6>  \r\n<li>website <a href=\"https://www.netflix.com/\" target=\"_blank\">https://www.netflix.com/</a></li>  ', 'พร้อมส่ง'),
(4, 'Netflix 4K /7วัน (จอแชร์)', 15.00, 25.00, 8, 'on', 'https://img5.pic.in.th/file/secure-sv1/28c6e9af5754226ecb.png', '<h3><u>รายละเอียด</u></h3> \r\n<h6>▶️ Netflix แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน </h6> \r\n<h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> \r\n<h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">UltraHD 4K</span></h6> \r\n<h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i></h6>\r\n<h6>▶️ แอคเคาท์ไทยแท้100%</b></h6>\r\n<h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6> \r\n<h6>▶️ รองรับอุปกรณ์ <i>(Com, Ipad ,มือถือ)</i></h6>\r\n<h6>▶️ Netflixแพ็กเกจ UltraHD 4K <span class=\"badge bg-warning\">7วัน</span></h6>  \r\n<li>website <a href=\"https://www.netflix.com/\" target=\"_blank\">https://www.netflix.com/</a></li>', 'พร้อมส่ง'),
(5, 'Disney+ /30วัน (จอส่วนตัว) (ทุกอุปกรณ์)', 79.00, 89.00, 12, 'on', 'https://img5.pic.in.th/file/secure-sv1/27473458065abf1a49.png', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ Disney+ แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน <span class=\"badge bg-dark\"></h6>  <h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> <h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">Full HD 4K</span></h6>  <h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i></h6> <h6>▶️ จะได้รับเป็น Phone/OTP เข้าใช้งานได้ทันที</h6>  <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6> <h6>▶️ Disney แพ็กเกจ <span class=\"badge bg-warning\">รายเดือน</span></h6>    <li>website <a href=\"https://www.hotstar.com/th\" target=\"_blank\">https://www.hotstar.com/th</a></li>  ', 'พร้อมส่ง'),
(6, 'Youtube Premium/30วัน (เมลร้าน)', 10.00, 29.00, 0, 'on', 'https://img2.pic.in.th/pic/265944c264e513c6a3.png', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ รับชม Youtube แบบไม่มีโฆษณาคั่น</h6>  <h6>▶️ ฟังเพลง Youtube Music แบบปิดหน้าจอได้</h6>  <h6>▶️ ดาวน์โหลดเพลงหรือบันทึกวิดีโอเล่นแบบออฟไลน์</h6>  <h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6>   <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>  <h6>▶️ Youtube Premiumแพ็กเกจ  <span class=\"badge bg-warning\">รายเดือน</span></h6>  <li>website <a href=\"https://www.youtube.com/\" target=\"_blank\">https://www.youtube.com/</a></li> ', 'สินค้าหมด'),
(7, 'Youtube Premium/30วัน (เมลตัวเอง)', 10.00, 29.00, 56, 'on', 'https://img2.pic.in.th/pic/2516f224a04e2b75fe.png', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ รับชม Youtube แบบไม่มีโฆษณาคั่น</h6>  <h6>▶️ ฟังเพลง Youtube Music แบบปิดหน้าจอได้</h6>  <h6>▶️ ดาวน์โหลดเพลงหรือบันทึกวิดีโอเล่นแบบออฟไลน์</h6>  <h6>▶️ จะได้รับเป็น <span class=\"text-light badge bg-dark\">ลิ้งคำเชิญ <img width=\"25px;\" class=\"img-fluid\" src=\"https://byshop.me/buy/img/yt.png\">family</span> เข้าใช้งานได้ทันที</h6>   <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>  <h6>▶️ Youtube Premiumแพ็กเกจ  <span class=\"badge bg-warning\">รายเดือน</span></h6>  <li>website <a href=\"https://www.youtube.com/\" target=\"_blank\">https://www.youtube.com/</a></li> ', 'พร้อมส่ง'),
(8, 'Youtube Premium/1ปี (เมลตัวเอง)', 450.00, 590.00, 0, 'on', 'https://img2.pic.in.th/pic/24aba2f22b7b5ec0f9.png', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ รับชม Youtube แบบไม่มีโฆษณาคั่น</h6>  <h6>▶️ ฟังเพลง Youtube Music แบบปิดหน้าจอได้</h6>  <h6>▶️ ดาวน์โหลดเพลงหรือบันทึกวิดีโอเล่นแบบออฟไลน์</h6>  <h6>▶️ จะได้รับเป็น <span class=\"text-light badge bg-dark\">ลิ้งคำเชิญ <img width=\"25px;\" class=\"img-fluid\" src=\"https://byshop.me/buy/img/yt.png\">family</span> เข้าใช้งานได้ทันที</h6>   <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>  <h6>▶️ Youtube Premiumแพ็กเกจ  <span class=\"badge bg-warning\">รายปี</span></h6>  <li>website <a href=\"https://www.youtube.com/\" target=\"_blank\">https://www.youtube.com/</a></li> ', 'สินค้าหมด'),
(9, 'MONOMAX/30วัน (จอส่วนตัว)', 35.00, 49.00, 0, 'on', 'https://img2.pic.in.th/pic/2347995f1c11192d71.png', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ MONOMAX แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน <span class=\"text-light badge bg-dark\"></h6>  <h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย</span></h6> <h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">Full HD</span></h6>  <h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i><h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6>  <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>  <h6>▶️ MONOMAX แพ็กเกจ  <span class=\"badge bg-warning\">รายเดือน</span></h6>  <li>website <a href=\"https://www.monomax.me/\" target=\"_blank\">https://www.monomax.me/</a></li> ', 'สินค้าหมด'),
(10, 'MONOMAX/30วัน (จอแชร์)', 25.00, 39.00, 4, 'on', 'https://img5.pic.in.th/file/secure-sv1/220d24b675cb12fa87.png', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ MONOMAX แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน <span class=\"text-light badge bg-dark\"></h6>  <h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย</span></h6> <h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">Full HD</span></h6>  <h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i><h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6>  <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>  <h6>▶️ MONOMAX แพ็กเกจ  <span class=\"badge bg-warning\">รายเดือน</span></h6>  <li>website <a href=\"https://www.monomax.me/\" target=\"_blank\">https://www.monomax.me/</a></li> ', 'พร้อมส่ง'),
(11, 'HBO GO/30วัน', 45.00, 60.00, 0, 'on', 'https://img5.pic.in.th/file/secure-sv1/21157c916f09661d6b.png', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ HBO GO แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน <span class=\"text-light badge bg-dark\"></h6>  <h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> <h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">Full HD</span></h6>  <h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i> <h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6>  <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>  <h6>▶️ HBO GO แพ็กเกจ  <span class=\"badge bg-warning\">รายเดือน</span></h6>  <li>website <a href=\"https://www.hbogo.co.th/\" target=\"_blank\">https://www.hbogo.co.th/</a></li> ', 'สินค้าหมด'),
(12, 'VIU Premium/30วัน', 15.00, 29.00, 28, 'on', 'https://img2.pic.in.th/pic/205f477b174e053e9a.png', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ VIU แอปดูหนัง/ซีรีย์ <span class=\"badge bg-dark\"></h6>  <h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> <h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">Full HD</span></h6> <h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i>  <h6>▶️ รับชม VIU Premium แบบไม่มีโฆษณาคั่น</h6>  <h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6>  <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>  <h6>▶️ VIU Premiumแพ็กเกจ  <span class=\"badge bg-warning\">รายเดือน</span></h6>  <li>website <a href=\"https://www.viu.com/\" target=\"_blank\">https://www.viu.com/</a></li> ', 'พร้อมส่ง'),
(13, 'iQIYI GOLD /30วัน', 22.00, 39.00, 33, 'on', 'https://i.postimg.cc/VkP5xKkt/120.png', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ iQIYI แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน <span class=\"badge bg-dark\"></h6>  <h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> <h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">Full HD</span></h6>  <h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i> <h6>▶️ รับชม iqiyi VIP แบบไม่มีโฆษณาคั่น</h6>  <h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6>  <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>  <h6>▶️ iQIYI VIP แพ็กเกจ  <span class=\"badge bg-warning\">รายเดือน</span></h6>  <li>website <a href=\"https://www.iq.com/\" target=\"_blank\">https://www.iq.com/</a></li> ', 'พร้อมส่ง'),
(14, 'WeTV VIP /30วัน', 20.00, 39.00, 16, 'on', 'https://img2.pic.in.th/pic/18f2f8c377e2096a6d.png', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ WeTV แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน <span class=\"badge bg-dark\"></h6>  <h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> <h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">Full HD</span></h6>  <h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i> <h6>▶️ รับชม WeTV VIP แบบไม่มีโฆษณาคั่น</h6>  <h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6>  <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>  <h6>▶️ WeTV VIP แพ็กเกจ  <span class=\"badge bg-warning\">รายเดือน</span></h6>  <li>website <a href=\"https://wetv.vip/\" target=\"_blank\">https://wetv.vip/</a></li> ', 'พร้อมส่ง'),
(15, 'Amazon Prime Video/30วัน', 45.00, 59.00, 0, 'on', 'https://img2.pic.in.th/pic/17c11fee35de2c8bc2.png', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ Amazon Prime Video แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน <span class=\"badge bg-dark\"></h6>  <h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> <h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">Full HD</span></h6>  <h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i> <h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6>  <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>  <h6>▶️ Amazon Prime Video แพ็กเกจ  <span class=\"badge bg-warning\">รายเดือน</span></h6>  <li>website <a href=\"https://www.primevideo.com/\" target=\"_blank\">https://www.primevideo.com/</a></li> ', 'สินค้าหมด'),
(17, 'Spotify Premium/30วัน(เมลร้าน)', 10.00, 29.00, 0, 'on', 'https://img5.pic.in.th/file/secure-sv1/16d47e4903e8c7f00b.png', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ Spotify แอปฟังเพลงออนไลน์ รวมเพลงทุกประเทศ</h6>  <h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> ระดับพรีเมียม</span></h6> <h6>▶️ ฟังเพลงขนาดปิดหน้าจอไม่มีโฆษณากวนใจ</h6>  <h6>▶️ โหลดเพลงไว้ฟังขนาดออฟไลน์ได้</h6>  <h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6>  <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6> <h6>▶️ Spotify แพ็กเกจ <span class=\"badge bg-warning\">รายเดือน</span></h6>    <li>website <a href=\"https://open.spotify.com/\" target=\"_blank\">https://open.spotify.com/</a></li> ', 'สินค้าหมด'),
(18, 'TrueID+ /30วัน', 25.00, 29.00, 3, 'on', 'https://img5.pic.in.th/file/secure-sv1/153daa88b8214333af.png', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ TrueID แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน/TVออนไลน์<span class=\"badge bg-dark\"></h6>  <h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> <h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">Full HD</span></h6>  <h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i> <h6>▶️ รับชม TrueID+ แบบไม่มีโฆษณาคั่น</h6>  <h6>▶️ จะได้รับเป็น Phone/Password เข้าใช้งานได้ทันที</h6>  <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>  <h6>▶️ TrueID แพ็กเกจ  <span class=\"badge bg-warning\">TrueID+ รายเดือน</span></h6>  <li>website <a href=\"https://www.trueid.net/watch/th-th/trueidplus\" target=\"_blank\">https://www.trueid.net/watch/th-th/trueidplus</a></li> ', 'พร้อมส่ง'),
(19, 'AIS Play /30วัน', 10.00, 29.00, 0, 'on', 'https://img2.pic.in.th/pic/1440b86924efadb5fe.png', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ AIS Play แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน/TVออนไลน์<span class=\"badge bg-dark\"></h6>  <h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> <h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">Full HD</span></h6>  <h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i> <h6>▶️ จะได้รับเป็น Phone/OTP เข้าใช้งานได้ทันที</h6>  <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>  <h6>▶️ AIS Play แพ็กเกจ  <span class=\"badge bg-warning\">family รายเดือน</span></h6>  <li>website <a href=\"https://aisplay.ais.co.th/\" target=\"_blank\">https://aisplay.ais.co.th/</a></li> ', 'สินค้าหมด'),
(20, 'Bilibili /30วัน', 25.00, 39.00, 18, 'on', 'https://img2.pic.in.th/pic/1347327c69f8ebbd25.png', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ Bilibili แอปดูการ์ตูนอนิเมะ<span class=\"badge bg-dark\"></h6>  <h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> <h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">Full HD</span></h6>  <h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i> <h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6>  <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>  <h6>▶️ Bilibili แพ็กเกจ  <span class=\"badge bg-warning\">Premium รายเดือน</span></h6>  <li>website <a href=\"https://www.bilibili.tv/th\" target=\"_blank\">https://www.bilibili.tv/th</a></li> ', 'พร้อมส่ง'),
(21, 'Netflix 4K /1วัน (จอส่วนตัว)', 7.00, 15.00, 18, 'on', 'https://img5.pic.in.th/file/secure-sv1/12b01deec42dfe271b.png', '<h3><u>รายละเอียด</u></h3> \r\n<h6>▶️ Netflix แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน </h6> \r\n<h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> \r\n<h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">UltraHD 4K</span></h6> \r\n<h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i></h6>\r\n<h6>▶️ แอคเคาท์ไทยแท้100%</b></h6>\r\n<h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6> \r\n<h6>▶️ รองรับอุปกรณ์ <i>(Com, Ipad ,มือถือ)</i></h6>\r\n<h6>▶️ Netflixแพ็กเกจ UltraHD 4K <span class=\"badge bg-warning\">1วัน</span></h6>  \r\n<li>website <a href=\"https://www.netflix.com/\" target=\"_blank\">https://www.netflix.com/</a></li>  ', 'พร้อมส่ง'),
(22, 'Netflix 4K /1วัน (จอแชร์)', 5.00, 10.00, 18, 'on', 'https://img2.pic.in.th/pic/11573d0f9070f34a7c.png', '<h3><u>รายละเอียด</u></h3> \r\n<h6>▶️ Netflix แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน </h6> \r\n<h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> \r\n<h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">UltraHD 4K</span></h6> \r\n<h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i></h6>\r\n<h6>▶️ แอคเคาท์ไทยแท้100%</b></h6>\r\n<h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6> \r\n<h6>▶️ รองรับอุปกรณ์ <i>(Com, Ipad ,มือถือ)</i></h6>\r\n<h6>▶️ Netflixแพ็กเกจ UltraHD 4K <span class=\"badge bg-warning\">1วัน</span></h6>  \r\n<li>website <a href=\"https://www.netflix.com/\" target=\"_blank\">https://www.netflix.com/</a></li>  ', 'พร้อมส่ง'),
(23, 'Netflix 4K /30วัน (TV) (จอส่วนตัว)', 159.00, 165.00, 35, 'on', 'https://img2.pic.in.th/pic/2750320269efb06d5.png', '<h3><u>รายละเอียด</u></h3> \r\n<h6>▶️ Netflix แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน </h6> \r\n<h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> \r\n<h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">UltraHD 4K</span></h6> \r\n<h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i></h6>\r\n<h6>▶️ แอคเคาท์ไทยแท้100%</b></h6>\r\n<h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6> \r\n<h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>\r\n<h6>▶️ Netflixแพ็กเกจ UltraHD 4K <span class=\"badge bg-warning\">รายเดือน</span></h6>  \r\n<li>website <a href=\"https://www.netflix.com/\" target=\"_blank\">https://www.netflix.com/</a></li>  ', 'พร้อมส่ง'),
(24, 'YOUKU VIP /30วัน', 29.00, 39.00, 2, 'on', 'https://img2.pic.in.th/pic/10ce8ab34b2d8b693e.png', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ YOUKU แอปดูหนัง/ซีรีย์ <span class=\"badge bg-dark\"></h6>  <h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> <h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">Full HD</span></h6> <h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i>  <h6>▶️ รับชม YOUKU Premium แบบไม่มีโฆษณาคั่น</h6>  <h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6>  <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>  <h6>▶️ YOUKU Premiumแพ็กเกจ  <span class=\"badge bg-warning\">รายเดือน</span></h6>  <li>website <a href=\"https://youku.tv/\" target=\"_blank\">https://youku.tv/</a></li> ', 'พร้อมส่ง'),
(25, 'BeinSports /30วัน', 49.00, 69.00, 0, 'on', 'https://img2.pic.in.th/pic/98e8cdd09887151f4.png', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ beinsports แอปดูกีฬา LIVE สด - ย้อนหลัง<span class=\"badge bg-dark\"></h6>  <h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> <h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">Full HD</span></h6>  <h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i> <h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6>  <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>  <h6>▶️ beinsports แพ็กเกจ  <span class=\"badge bg-warning\">Premium รายเดือน</span></h6>  <li>website <a href=\"https://connect-th.beinsports.com/th\" target=\"_blank\">https://connect-th.beinsports.com/th</a></li> ', 'สินค้าหมด'),
(26, 'CH3 Plus /30วัน', 39.00, 45.00, 15, 'on', 'https://img5.pic.in.th/file/secure-sv1/82c4ce32a6a866c91.png', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ CH3 Plus แอปดูภาพยนตร์ / ซีรีส์ / ละคร การ์ตูน / ข่าวสด ย้อนหลัง <span class=\"badge bg-dark\"></h6>  <h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> <h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">Full HD</span></h6>  <h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i> <h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6>  <h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>  <h6>▶️ CH3 Plus แพ็กเกจ  <span class=\"badge bg-warning\">Premium รายเดือน</span></h6>  <li>website <a href=\"https://ch3plus.com/\" target=\"_blank\">https://ch3plus.com/</a></li> ', 'พร้อมส่ง'),
(27, 'Disney+ /30วัน (จอส่วนตัว) (มือถือ)', 69.00, 79.00, 0, 'on', 'https://img5.pic.in.th/file/secure-sv1/776aa1ac22db3529c.png', '<h3><u>รายละเอียด</u></h3>  <h6>▶️ Disney+ แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน <span class=\"badge bg-dark\"></h6>  <h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> <h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">HD</span></h6>  <h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i></h6> <h6>▶️ จะได้รับเป็น Phone/OTP เข้าใช้งานได้ทันที</h6>  <h6>▶️ รองรับอุปกรณ์ <i>(มือถือ)</i></h6> <h6>▶️ Disney แพ็กเกจ <span class=\"badge bg-warning\">รายเดือน</span></h6>    <li>website <a href=\"https://www.hotstar.com/th\" target=\"_blank\">https://www.hotstar.com/th</a></li>  ', 'สินค้าหมด'),
(28, 'Netflix 4K /60วัน (TV) (จอส่วนตัว)', 299.00, 350.00, 4, 'on', 'https://img5.pic.in.th/file/secure-sv1/62bb27ecb31bdfd37.png', '<h3><u>รายละเอียด</u></h3> \r\n<h6>▶️ Netflix แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน </h6> \r\n<h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> \r\n<h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">UltraHD 4K</span></h6> \r\n<h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i></h6>\r\n<h6>▶️ แอคเคาท์ไทยแท้100%</b></h6>\r\n<h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6> \r\n<h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>\r\n<h6>▶️ Netflixแพ็กเกจ UltraHD 4K <span class=\"badge bg-warning\">2เดือน</span></h6>  \r\n<li>website <a href=\"https://www.netflix.com/\" target=\"_blank\">https://www.netflix.com/</a></li>  ', 'พร้อมส่ง'),
(29, 'Netflix 4K /60วัน (จอส่วนตัว)', 180.00, 220.00, 3, 'on', 'https://img2.pic.in.th/pic/42057fbd39131a317.png', '<h3><u>รายละเอียด</u></h3> \r\n<h6>▶️ Netflix แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน </h6> \r\n<h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> \r\n<h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">UltraHD 4K</span></h6> \r\n<h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i></h6>\r\n<h6>▶️ แอคเคาท์ไทยแท้100%</b></h6>\r\n<h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6> \r\n<h6>▶️ รองรับอุปกรณ์ <i>(Com, Ipad ,มือถือ)</i></h6>\r\n<h6>▶️ Netflixแพ็กเกจ UltraHD 4K <span class=\"badge bg-warning\">2เดือน</span></h6>  \r\n<li>website <a href=\"https://www.netflix.com/\" target=\"_blank\">https://www.netflix.com/</a></li>  ', 'พร้อมส่ง'),
(30, 'Netflix 4K /60วัน (จอแชร์)', 138.00, 169.00, 4, 'on', 'https://img5.pic.in.th/file/secure-sv1/5cba1f013da851f8a.png', '<h3><u>รายละเอียด</u></h3> \r\n<h6>▶️ Netflix แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน </h6> \r\n<h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> \r\n<h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">UltraHD 4K</span></h6> \r\n<h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i></h6>\r\n<h6>▶️ แอคเคาท์ไทยแท้100%</b></h6>\r\n<h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6> \r\n<h6>▶️ รองรับอุปกรณ์ <i>(Com, Ipad ,มือถือ)</i></h6>\r\n<h6>▶️ Netflixแพ็กเกจ UltraHD 4K <span class=\"badge bg-warning\">2เดือน</span></h6>  \r\n<li>website <a href=\"https://www.netflix.com/\" target=\"_blank\">https://www.netflix.com/</a></li>  ', 'พร้อมส่ง'),
(31, 'Netflix 4K /7วัน (TV) (จอส่วนตัว)', 39.00, 45.00, 2, 'on', 'https://img2.pic.in.th/pic/3f6b5065b352629ff.png', '<h3><u>รายละเอียด</u></h3> \r\n<h6>▶️ Netflix แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน </h6> \r\n<h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> \r\n<h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">UltraHD 4K</span></h6> \r\n<h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i></h6>\r\n<h6>▶️ แอคเคาท์ไทยแท้100%</b></h6>\r\n<h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6> \r\n<h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>\r\n<h6>▶️ Netflixแพ็กเกจ UltraHD 4K <span class=\"badge bg-warning\">7วัน</span></h6>  \r\n<li>website <a href=\"https://www.netflix.com/\" target=\"_blank\">https://www.netflix.com/</a></li>  ', 'พร้อมส่ง'),
(32, 'Netflix 4K /1วัน (TV) (จอส่วนตัว)', 13.00, 20.00, 9, 'on', 'https://img5.pic.in.th/file/secure-sv1/19afd10674c4924d4.png', '<h3><u>รายละเอียด</u></h3> \r\n<h6>▶️ Netflix แอปดูหนังภาพยนตร์/ซีรีย์/การ์ตูน </h6> \r\n<h6>▶️ Soundเสียง <span class=\"text-light badge bg-dark\"><i class=\"fa fa-volume-up\" aria-hidden=\"true\"></i> พากย์ไทย/ซับไทย</span></h6> \r\n<h6>▶️ ความชัดระดับ <span class=\"text-light badge bg-dark\">UltraHD 4K</span></h6> \r\n<h6>▶️ สามารถรับชมจำนวน 1จอ <i class=\"fa fa-desktop\" aria-hidden=\"true\"></i></h6>\r\n<h6>▶️ แอคเคาท์ไทยแท้100%</b></h6>\r\n<h6>▶️ จะได้รับเป็น Email/Password เข้าใช้งานได้ทันที</h6> \r\n<h6>▶️ รองรับทุกอุปกรณ์ <i>(TV,Com, Ipad ,มือถือ)</i></h6>\r\n<h6>▶️ Netflixแพ็กเกจ UltraHD 4K <span class=\"badge bg-warning\">1วัน</span></h6>  \r\n<li>website <a href=\"https://www.netflix.com/\" target=\"_blank\">https://www.netflix.com/</a></li>  ', 'พร้อมส่ง'),
(100, 'TEST API', 0.00, 99999999.99, 999, 'off', 'https://media.discordapp.net/attachments/1169887877895835658/1170249274316042260/api_product.png?ex=65585a91&is=6545e591&hm=3dc02d30d7f13b53aa97c0c5e367957560fd1bf9743a1125b0cd8a3d625c1d91&=&width=549&height=549', 'ทดสอบ API', 'พร้อมส่ง');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `details` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pubg`
--

CREATE TABLE `pubg` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `uc` varchar(64) NOT NULL,
  `amount` varchar(64) NOT NULL,
  `number` varchar(64) NOT NULL,
  `status` enum('เปิดขาย','ปิดขาย') NOT NULL DEFAULT 'เปิดขาย'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pubg`
--

INSERT INTO `pubg` (`id`, `name`, `uc`, `amount`, `number`, `status`) VALUES
(1, '60 UC', '60', '37', '1', 'เปิดขาย'),
(2, '325 UC', '325', '181', '2', 'เปิดขาย'),
(3, '660 UC', '660', '360', '3', 'เปิดขาย'),
(4, '1,800 UC', '1,800', '899', '4', 'เปิดขาย'),
(5, '3,850 UC', '3,850', '1699', '5', 'เปิดขาย'),
(6, '8,100 UC', '8,100', '3245', '6', 'เปิดขาย');

-- --------------------------------------------------------

--
-- Table structure for table `ragnarok`
--

CREATE TABLE `ragnarok` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Nyan` varchar(64) NOT NULL,
  `amount` varchar(64) NOT NULL,
  `number` varchar(64) NOT NULL,
  `status` enum('เปิดขาย','ปิดขาย') NOT NULL DEFAULT 'เปิดขาย'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ragnarok`
--

INSERT INTO `ragnarok` (`id`, `name`, `Nyan`, `amount`, `number`, `status`) VALUES
(1, '40 Nyan', '40', '41', '1', 'เปิดขาย'),
(2, '125 Nyan', '125', '114', '2', 'เปิดขาย'),
(3, '210 Nyan', '210', '189', '3', 'เปิดขาย'),
(4, '430 Nyan', '430', '376', '4', 'เปิดขาย'),
(5, '900 Nyan', '900', '774', '5', 'เปิดขาย'),
(6, '2,300 Nyan', '2,300', '1935', '6', 'เปิดขาย');

-- --------------------------------------------------------

--
-- Table structure for table `sausageman`
--

CREATE TABLE `sausageman` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `coupon` varchar(64) NOT NULL,
  `amount` varchar(64) NOT NULL,
  `number` varchar(64) NOT NULL,
  `status` enum('เปิดขาย','ปิดขาย') NOT NULL DEFAULT 'เปิดขาย'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sausageman`
--

INSERT INTO `sausageman` (`id`, `name`, `coupon`, `amount`, `number`, `status`) VALUES
(1, '61 CANDIES', '61', '31', '1', 'เปิดขาย'),
(2, '318 CANDIES', '318', '154', '2', 'เปิดขาย'),
(3, '686 CANDIES', '686', '301', '3', 'เปิดขาย'),
(4, '1,378 CANDIES', '1378', '627', '4', 'เปิดขาย'),
(5, '2,118 CANDIES', '2118', '946', '5', 'เปิดขาย'),
(6, '3,548 CANDIES', '3548', '1548', '6', 'เปิดขาย'),
(7, '7,108 CANDIES', '7108', '3182', '7', 'เปิดขาย');

-- --------------------------------------------------------

--
-- Table structure for table `service_cate`
--

CREATE TABLE `service_cate` (
  `s_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `type` int(11) NOT NULL DEFAULT 0,
  `img` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_order`
--

CREATE TABLE `service_order` (
  `id` int(11) NOT NULL,
  `cosid` varchar(255) NOT NULL,
  `prod` varchar(255) NOT NULL,
  `user` mediumtext NOT NULL,
  `pass` mediumtext NOT NULL,
  `idps_des` mediumtext NOT NULL,
  `count` mediumtext NOT NULL,
  `status` varchar(255) NOT NULL,
  `del` varchar(255) NOT NULL,
  `date` datetime(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_prod`
--

CREATE TABLE `service_prod` (
  `id` int(11) NOT NULL,
  `cate` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `img` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_setting`
--

CREATE TABLE `service_setting` (
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_setting`
--

INSERT INTO `service_setting` (`status`) VALUES
('on');

-- --------------------------------------------------------

--
-- Table structure for table `slide_picture`
--

CREATE TABLE `slide_picture` (
  `id` int(11) NOT NULL,
  `link_picture` text NOT NULL,
  `date` text NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slide_picture`
--

INSERT INTO `slide_picture` (`id`, `link_picture`, `date`) VALUES
(1, 'https://m1r.ai/3rx16.jpg', '2024-04-29 17:19:37'),
(2, 'https://m1r.ai/3rx16.jpg', '2024-04-29 17:19:40');

-- --------------------------------------------------------

--
-- Table structure for table `socialservice`
--

CREATE TABLE `socialservice` (
  `id` int(11) NOT NULL,
  `idapi` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `des` varchar(2555) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `socialservice`
--

INSERT INTO `socialservice` (`id`, `idapi`, `name`, `des`, `price`) VALUES
(1, '24206', 'Facebook Post Reaction ??♥️???', ' ', '10.00'),
(2, '23797', 'Facebook Post Likes ??', '', '10.00'),
(3, '23802', 'Facebook Post Love ♥️', '', '10.00'),
(4, '23796', 'Facebook Post Care ?', '', '10.00'),
(5, '23800', 'Facebook Post Wow ?', '', '10.00'),
(6, '23799', 'Facebook Post Haha ?', '', '10.00'),
(7, '23801', 'Facebook Post Sad ?', 'q', '10.00'),
(8, '23798', 'Facebook Post Angry ?', '', '10.00'),
(9, '24281', 'Facebook Post share', '11', '35.00'),
(11, '23958', 'Facebook Comment', '', '195.00'),
(12, '25093', 'Facebook Group Members', '', '30.00'),
(13, '18618', 'Facebook Followers', '', '10.00'),
(14, '23423', 'Instagram ► Followers ► ??? ??????', '', '100.00'),
(15, '25226', 'Instagram Video Views + Impressions + Reach + Watch Hours [??? ????] Video+ Reel + IGTV ⚡ ??????? ???????', '', '50.00'),
(16, '8823', 'Instagram - ????? [??] ↦ [~24H] [1K+/D]', '', '20.00'),
(22, '25605', 'Instagram ????? [Reels] ~ [?? Thailand] ↦ [Speed: 5K+/D] [Start: 0-1H]', '', '148.00'),
(23, '25412', 'Instagram ????? [หัวใจ ไลค์] ~ [?? Thailand] [?????] ↦ [Speed Slow: 100+/D]', '', '950.00'),
(24, '25040', 'TikTok Male???Followers [???% ?????? - ??+????] ↦ [⚡0-1H |⚡5K+/D]', '', '200.00'),
(25, '21179', 'TikTok ~ Like ไลค์ ↦ [0-6H] [5K/D]', '', '20.00'),
(26, '21171', 'TikTok Views ↦ [Start Time: 0-2H] [Speed: 10M/D] ~ [Max: 30M]', '', '10.00'),
(27, '7435', 'Shopee - Followers [Thailand ????] ↦ [Start: ~24H] [Speed: 10-200/D]', '', '4310.00'),
(28, '7437', 'Shopee - Likes [Thailand ????] ↦ [Start: ~24H] [Speed: 10-200/D]', '', '4280.00'),
(29, '6344', 'Lazada - Followers [Thailand ??????] ↦ [Start: ~24H] [Speed: 10-200/D]', '', '3477.00'),
(30, '6345', 'Lazada - Likes [Thailand ??????] ↦ [Start: ~24H] [Speed: 10-200/D]', '', '3477.00'),
(31, '4195', 'บริการทดลองฟรีวันละ 1 ครั้ง\r\nTiktok Views ฟรี [No Support]\r\n', 'ไม่มีรับประกัน \nไม่ซัพพอร์ตทุกกรณี \nบริการฟรีทดลองใช้ได้ฟรี วันละ 1 ครั้ง', '0.00'),
(32, '19984', 'Facebook Emoji Sad?เศร้า - โพส/รูป/วิดีโอ 0-1H | ~ 10K/D | r30 Real', '', '42.00'),
(33, '19986', 'Facebook Emoji Care แคร์ - โพส/รูป/วิดีโอ ↦0-1H | ~10K/D | r30 ~  Real', '? ตัวอย่างลิงก์: https://www.facebook.com/username/posts/xxxxxxxxx\n⌛ เริ่มทำงาน: 0 - 18 ชั่วโมง\n⚡️ ความเร็ว: 1K - 10K / วัน\n? คุณภาพ: Real Profile\n? อัตราลดลง: Low\n\n? หมายเหตุ:\n? ตรวจสอบรูปแบบลิงค์อย่างละเอียดก่อนทำการสั่งซื้อ\n? ตรวจสอบให้แน่ใจว่าลิงก์หรือบัญชีของคุณเป็นแบบสาธารณะ ไม่เป็นส่วนตัว\n? เวลาในการเริ่มต้นและความเร็วเปลี่ยนแปลงได้ตลอดเวลา เมื่อมีคำสั่งซื้อหนาแน่นหรือมีการอัปเดตจากโซเชียลมีเดีย\n⚠️ เราไม่สามารถยกเลิกคำสั่งซื้อของคุณได้เมื่อส่งคำสั่งซื้อแล้ว\n⚠️ อย่าใส่หลายคำสั่งซื้อสำหรับลิงค์เดียวกัน ก่อนที่จะเสร็จสิ้น\n⚠️ ถ้าบริการมีรับประกัน เราไม่สามารถเติมคำสั่งซื้อของคุณได้หากการลดลงต่ำกว่าจำนวนเริ่มต้น\n⚠️ หากลิงค์ถูกเปลี่ยนแปลงไป คำสั่งซื้อจะเปลี่ยนเป็นสถานะ \"เสร็จสิ้น\" โดยอัตโนมัติและจะไม่มีการรับประกัน', '42.00'),
(34, '12', '12', '12', '12'),
(35, '1212', '1212', '1212', '12'),
(36, '1212', '1212', '1212', '12'),
(37, '12121', '12121', '1212', '2'),
(38, '11', '11', '11', '11'),
(39, '14', '143', '14', '1');

-- --------------------------------------------------------

--
-- Table structure for table `stock_id`
--

CREATE TABLE `stock_id` (
  `id` int(11) NOT NULL,
  `details` text NOT NULL,
  `username_buy` text NOT NULL DEFAULT '0',
  `id_card` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `topup_config`
--

CREATE TABLE `topup_config` (
  `id` int(11) NOT NULL,
  `wallet_phone` varchar(15) DEFAULT NULL,
  `wallet_fee` varchar(255) DEFAULT NULL,
  `name_account` varchar(255) DEFAULT NULL,
  `name_bank` varchar(255) DEFAULT NULL,
  `number_bank` varchar(255) DEFAULT NULL,
  `client_id` varchar(255) NOT NULL,
  `client_secret` varchar(255) NOT NULL,
  `client_account` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `topup_config`
--

INSERT INTO `topup_config` (`id`, `wallet_phone`, `wallet_fee`, `name_account`, `name_bank`, `number_bank`, `client_id`, `client_secret`, `client_account`) VALUES
(1, '0000000000', 'off', 'นาย xxx xxxx', 'กสิกรไทย', 'xxxxxxxx', '', '', 'นาย xxx x');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `point` decimal(10,2) DEFAULT 0.00,
  `topup` decimal(10,2) DEFAULT 0.00,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `rank` varchar(25) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `point`, `topup`, `date`, `rank`) VALUES
(1, 'devkao12', 'devkao12@gmail.com', '$2y$10$AHIFBJAr6vtvN6hGXp8//.V0p7ElICDeMeHeb/8JHWXh3muvG9Nj6', 0.00, 0.00, '2024-05-15 14:30:07', '1');

-- --------------------------------------------------------

--
-- Table structure for table `valorant`
--

CREATE TABLE `valorant` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `coupon` varchar(64) NOT NULL,
  `amount` varchar(64) NOT NULL,
  `number` varchar(64) NOT NULL,
  `status` enum('เปิดขาย','ปิดขาย') NOT NULL DEFAULT 'เปิดขาย'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `valorant`
--

INSERT INTO `valorant` (`id`, `name`, `coupon`, `amount`, `number`, `status`) VALUES
(1, '540 Points', '540', '135', '1', 'เปิดขาย'),
(2, '1,130 Points', '1130', '270', '2', 'เปิดขาย'),
(3, '1,945 Points', '1945', '450-', '3', 'เปิดขาย'),
(4, '3,930 Points', '3930', '900', '4', 'เปิดขาย'),
(5, '5,550 Points', '5550', '1260', '5', 'เปิดขาย'),
(6, '11,500 Points', '11500', '2520', '6', 'เปิดขาย');

-- --------------------------------------------------------

--
-- Table structure for table `web_config`
--

CREATE TABLE `web_config` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `logo_icon` text NOT NULL,
  `logo` text DEFAULT NULL,
  `background` text DEFAULT NULL,
  `description` text NOT NULL,
  `keywords` text NOT NULL,
  `main_color` varchar(255) DEFAULT NULL,
  `sec_color` varchar(255) DEFAULT NULL,
  `font_color` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `web_config`
--

INSERT INTO `web_config` (`id`, `name`, `logo_icon`, `logo`, `background`, `description`, `keywords`, `main_color`, `sec_color`, `font_color`, `date`) VALUES
(1, 'Mreasyshop|เกมออฟไลน์ราคาถูก steam| steamoffline| ขายเกมราคาถูก| เกมออฟไลน์| เกมออฟไลน์ | เช่าแอพสตรีมมิ่ง ดูหนัง ฟังเพลง อาทิเช่น NETFLIX | YOUTUBE PREMIUM | VIU | WETV | TRUEID+ | IQIYI | CANVAS | DISNEY PLUS | HBOGO | PRIME VIDEO |Valorant สุ่มรหัส-สุ่', 'https://img5.pic.in.th/file/secure-sv1/logo6f67a6734a263264.png', 'https://img5.pic.in.th/file/secure-sv1/logo6f67a6734a263264.png', '/assets/thxk-bg.png', 'steam , steamoffline, ขายเกมราคาถูก,  เกมออฟไลน์,  เกมออฟไลน์ขายไอดีเกมออนไลน์,  ราคาถูก,  ปลอดภัย สินค้าได้แก่  และเรามีบริการสตรีมมิงแอพอันดับหนึ่งเช่น Netflix, Youtube, VIU Premium, WeTV, TrueID, Ch3Plus, Disney+, MONOMAX, HBO GO, Amazon Prime Video, Spotify Premium, AIS Play, Bilibili, YOUKU VIP, BeinSports และอื่น ๆ อีกมากมาย ให้คุณเพลิดเพลินกับความสุขของการรับชมและการฟังเพลง ทุกวันทุกคืนที่บ้านหรือที่คุณอยู่บนอุปกรณ์เครื่องเล่นแอพของคุณ ไม่พลาดจากความบันเทิงอีกต่อไป!,Valorant สุ่มรหัส-สุ่มสกิน,สุ่มคี,ไก่ตัน,ไก่ตันราคาถูก,ขายไก่ตัน,roblox', 'ยินดีต้อนรับเข้าสู่เว็บไซต์ บริการจำหน่ายไอดีเกมออฟไลน์และแอพสตรีมมิ่งมากมาย ราคาถูก >ย้ายพ้อยเว็บเดิมโปรดแจ้งดิสหรือเพจ< อ่านเงื่อไข-วิธีใช้งานอย่างละเอียด', '#0b0b0b', '#1443ff', '#ffffff', '2024-04-09 17:16:08');

-- --------------------------------------------------------

--
-- Table structure for table `xhero`
--

CREATE TABLE `xhero` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `uc` varchar(64) NOT NULL,
  `amount` varchar(64) NOT NULL,
  `number` varchar(64) NOT NULL,
  `status` enum('เปิดขาย','ปิดขาย') NOT NULL DEFAULT 'เปิดขาย'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `xhero`
--

INSERT INTO `xhero` (`id`, `name`, `uc`, `amount`, `number`, `status`) VALUES
(1, '52 Toksns', '52', '160', '1', 'เปิดขาย'),
(2, '104 Toksns', '104', '320', '2', 'เปิดขาย'),
(3, '156 Tokens', '156', '480', '3', 'เปิดขาย'),
(4, '208 Tokens', '208', '640', '4', 'เปิดขาย'),
(5, '260 Tokens', '260', '800', '5', 'เปิดขาย'),
(6, '520 Tokens', '520', '1600', '6', 'เปิดขาย'),
(7, '1,040 Toksns', '1,040', '3200', '7', 'เปิดขาย'),
(8, '2,080 Tokens', '2,080', '6400', '8', 'เปิดขาย'),
(9, '4,160 Tokens', '4,160', '12900', '9', 'เปิดขาย');

-- --------------------------------------------------------

--
-- Table structure for table `zepeto`
--

CREATE TABLE `zepeto` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `coupon` varchar(64) NOT NULL,
  `amount` varchar(64) NOT NULL,
  `number` varchar(64) NOT NULL,
  `status` enum('เปิดขาย','ปิดขาย') NOT NULL DEFAULT 'เปิดขาย'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `zepeto`
--

INSERT INTO `zepeto` (`id`, `name`, `coupon`, `amount`, `number`, `status`) VALUES
(1, '7 ZEMS', '7', '15', '1', 'เปิดขาย'),
(2, '14 ZEMS', '14', '31', '2', 'เปิดขาย'),
(3, '29 ZEMS', '29', '61', '3', 'เปิดขาย'),
(4, '60 ZEMS', '60', '132', '4', 'เปิดขาย'),
(5, '125 ZEMS', '135', '242', '5', 'เปิดขาย'),
(6, '196 ZEMS', '196', '374', '6', 'เปิดขาย'),
(7, '770 ZEMS', '770', '1386', '7', 'เปิดขาย'),
(8, '4,680 COINS', '4680', '30', '8', 'เปิดขาย'),
(9, '10,200 COINS', '10200', '61', '9', 'เปิดขาย'),
(10, '21,000 COINS', '21000', '132', '10', 'เปิดขาย'),
(11, '38,900 COINS', '38900', '220', '11', 'เปิดขาย'),
(12, '62,800 COINS', '62800', '352', '12', 'เปิดขาย'),
(13, '234,000 COINS', '234000', '1256', '13', 'เปิดขาย');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acckt`
--
ALTER TABLE `acckt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aceracer`
--
ALTER TABLE `aceracer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `arenabreakout`
--
ALTER TABLE `arenabreakout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `byshopme`
--
ALTER TABLE `byshopme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card_product`
--
ALTER TABLE `card_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_topupgame`
--
ALTER TABLE `category_topupgame`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_config`
--
ALTER TABLE `contact_config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dragonraja`
--
ALTER TABLE `dragonraja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fcmoblie`
--
ALTER TABLE `fcmoblie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `freefire`
--
ALTER TABLE `freefire`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genshinimpact`
--
ALTER TABLE `genshinimpact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history_game`
--
ALTER TABLE `history_game`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history_shop`
--
ALTER TABLE `history_shop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history_slip`
--
ALTER TABLE `history_slip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history_social`
--
ALTER TABLE `history_social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history_wallet`
--
ALTER TABLE `history_wallet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `honkai`
--
ALTER TABLE `honkai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `identityv`
--
ALTER TABLE `identityv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lolriot`
--
ALTER TABLE `lolriot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `muorigin3`
--
ALTER TABLE `muorigin3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notify_config`
--
ALTER TABLE `notify_config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_byshopme`
--
ALTER TABLE `products_byshopme`
  ADD PRIMARY KEY (`product_code`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pubg`
--
ALTER TABLE `pubg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ragnarok`
--
ALTER TABLE `ragnarok`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sausageman`
--
ALTER TABLE `sausageman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_cate`
--
ALTER TABLE `service_cate`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `service_order`
--
ALTER TABLE `service_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_prod`
--
ALTER TABLE `service_prod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide_picture`
--
ALTER TABLE `slide_picture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socialservice`
--
ALTER TABLE `socialservice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_id`
--
ALTER TABLE `stock_id`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topup_config`
--
ALTER TABLE `topup_config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `valorant`
--
ALTER TABLE `valorant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_config`
--
ALTER TABLE `web_config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xhero`
--
ALTER TABLE `xhero`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zepeto`
--
ALTER TABLE `zepeto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acckt`
--
ALTER TABLE `acckt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aceracer`
--
ALTER TABLE `aceracer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `arenabreakout`
--
ALTER TABLE `arenabreakout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `byshopme`
--
ALTER TABLE `byshopme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `card_product`
--
ALTER TABLE `card_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category_topupgame`
--
ALTER TABLE `category_topupgame`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contact_config`
--
ALTER TABLE `contact_config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dragonraja`
--
ALTER TABLE `dragonraja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `fcmoblie`
--
ALTER TABLE `fcmoblie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `freefire`
--
ALTER TABLE `freefire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `genshinimpact`
--
ALTER TABLE `genshinimpact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `history_game`
--
ALTER TABLE `history_game`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history_shop`
--
ALTER TABLE `history_shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3295;

--
-- AUTO_INCREMENT for table `history_slip`
--
ALTER TABLE `history_slip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history_social`
--
ALTER TABLE `history_social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history_wallet`
--
ALTER TABLE `history_wallet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `honkai`
--
ALTER TABLE `honkai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `identityv`
--
ALTER TABLE `identityv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `lolriot`
--
ALTER TABLE `lolriot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `muorigin3`
--
ALTER TABLE `muorigin3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `notify_config`
--
ALTER TABLE `notify_config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pubg`
--
ALTER TABLE `pubg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ragnarok`
--
ALTER TABLE `ragnarok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sausageman`
--
ALTER TABLE `sausageman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `service_cate`
--
ALTER TABLE `service_cate`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_order`
--
ALTER TABLE `service_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_prod`
--
ALTER TABLE `service_prod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slide_picture`
--
ALTER TABLE `slide_picture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `socialservice`
--
ALTER TABLE `socialservice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `stock_id`
--
ALTER TABLE `stock_id`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5259;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `valorant`
--
ALTER TABLE `valorant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `web_config`
--
ALTER TABLE `web_config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `xhero`
--
ALTER TABLE `xhero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `zepeto`
--
ALTER TABLE `zepeto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
