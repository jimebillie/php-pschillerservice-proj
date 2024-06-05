-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 05, 2024 at 08:48 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pachillerservice`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `detail` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `detail`) VALUES
(1, '<span style=\"color: rgb(102, 102, 102); font-family: serithairegular; font-size: 18.144px;\">ประวัติห้างหุ้นส่วนจำกัด พี.เอส ชิลเลอร์ เซอร์วิส(สำนักงานใหญ่)</span><br style=\"color: rgb(102, 102, 102); font-family: serithairegular; font-size: 18.144px;\"><br style=\"color: rgb(102, 102, 102); font-family: serithairegular; font-size: 18.144px;\"><span style=\"color: rgb(102, 102, 102); font-family: serithairegular; font-size: 18.144px;\">ห้างหุ้นส่วนจำกัด พี.เอส ชิลเลอร์ เซอร์วิส(สำนักงานใหญ่) บริหารงานโดยผู้บริหารที่มีความชำนาญงานด้านระบบ CHILLER เริ่มดำเนินงานเมื่อ วันที่ 6 มกราคม 2546 โดยห้างหุ้นส่วนจำกัด พี.เอส ชิลเลอร์ เซอร์วิส(สำนักงานใหญ่) จำหน่ายและติดตั้งเครื่องปรับอากาศทั้งขนาดใหญ่ รวมถึงบริการซ่อมและบำรุงรักษาระบบเครื่องปรับอากาศแบบ CHILLERทุกยี่ห้อ โดยช่างผู้เชี่ยวชาญในระบบปรับอากาศและมีประสบการณ์มากกว่า 10 ปี</span><br style=\"color: rgb(102, 102, 102); font-family: serithairegular; font-size: 18.144px;\"><br style=\"color: rgb(102, 102, 102); font-family: serithairegular; font-size: 18.144px;\"><span style=\"color: rgb(102, 102, 102); font-family: serithairegular; font-size: 18.144px;\">วิสัยทัศน์</span><br style=\"color: rgb(102, 102, 102); font-family: serithairegular; font-size: 18.144px;\"><br style=\"color: rgb(102, 102, 102); font-family: serithairegular; font-size: 18.144px;\"><span style=\"color: rgb(102, 102, 102); font-family: serithairegular; font-size: 18.144px;\">บริการด้วยหัวใจ ห่วงใยลูกค้า มุ่งพัฒนาการให้บริการ ไม่ผูกติดกับผู้ผลิตเฉพาะราย เพื่อประโยชน์ของลูกค้าเป็นสำคัญที่สุด</span><br style=\"color: rgb(102, 102, 102); font-family: serithairegular; font-size: 18.144px;\"><br style=\"color: rgb(102, 102, 102); font-family: serithairegular; font-size: 18.144px;\"><span style=\"color: rgb(102, 102, 102); font-family: serithairegular; font-size: 18.144px;\">พันธกิจ</span><br style=\"color: rgb(102, 102, 102); font-family: serithairegular; font-size: 18.144px;\"><br style=\"color: rgb(102, 102, 102); font-family: serithairegular; font-size: 18.144px;\"><span style=\"color: rgb(102, 102, 102); font-family: serithairegular; font-size: 18.144px;\">ห้างหุ้นส่วนจำกัด พี.เอส ชิลเลอร์ เซอร์วิส(สำนักงานใหญ่) มุ่งเนินเป็นผู้นำด้านการบำรุงรักษาระบบทำความเย็น ระบบปรับอากาศ เพื่อให้ลูกค้าได้รับประโยชน์สูงสุด ด้วยปรัชญาการดำเนินธุรกิจดังนี้</span>');

-- --------------------------------------------------------

--
-- Table structure for table `aboutus_home`
--

CREATE TABLE `aboutus_home` (
  `id` int(11) NOT NULL,
  `detail` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutus_home`
--

INSERT INTO `aboutus_home` (`id`, `detail`) VALUES
(1, '<span style=\"color: rgb(102, 102, 102); font-family: serithairegular; font-size: 15.12px;\">ห้างหุ้นส่วนจำกัด พี.เอส ชิลเลอร์ เซอร์วิส (สำนักงานใหญ่) บริหารงานโดยผู้บริหารที่มีความชำนาญงานด้านระบบ CHILLER เริ่มดำเนินงานเมื่อ วันที่ 6 มกราคม 2546</span><br style=\"color: rgb(102, 102, 102); font-family: serithairegular; font-size: 15.12px;\"><br style=\"color: rgb(102, 102, 102); font-family: serithairegular; font-size: 15.12px;\"><span style=\"color: rgb(102, 102, 102); font-family: serithairegular; font-size: 15.12px;\">เราบริการจำหน่ายและติดตั้งเครื่องปรับอากาศทั้งขนาดใหญ่ รวมถึงบริการซ่อมและบำรุงรักษาระบบเครื่องปรับอากาศ เครื่องทำน้ำเย็น CHILLER ทุกยี่ห้อ</span><br style=\"color: rgb(102, 102, 102); font-family: serithairegular; font-size: 15.12px;\"><br style=\"color: rgb(102, 102, 102); font-family: serithairegular; font-size: 15.12px;\"><span style=\"color: rgb(102, 102, 102); font-family: serithairegular; font-size: 15.12px;\">ดำเนินการโดยช่างผู้เชี่ยวชาญในระบบปรับอากาศและมีประสบการณ์มากกว่า 20 ปี</span>');

-- --------------------------------------------------------

--
-- Table structure for table `aboutus_image`
--

CREATE TABLE `aboutus_image` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutus_image`
--

INSERT INTO `aboutus_image` (`id`, `img`) VALUES
(1, '20240603222158-aboutus.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `aboutus_tell_something`
--

CREATE TABLE `aboutus_tell_something` (
  `id` int(11) NOT NULL,
  `msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutus_tell_something`
--

INSERT INTO `aboutus_tell_something` (`id`, `msg`) VALUES
(1, 'เราคือผู้ชำนาญงานด้านระบบ CHILLER มากกว่า 20 ปี ');

-- --------------------------------------------------------

--
-- Table structure for table `contact_address`
--

CREATE TABLE `contact_address` (
  `id` int(11) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_address`
--

INSERT INTO `contact_address` (`id`, `address`) VALUES
(1, 'ห้างหุ้นส่วนจำกัด พี.เอส ชิลเลอร์ เซอร์วิส (สำนักงานใหญ่) 36/316 หมู่ที่ 3 ต.คลองสาม อ.คลองหลวง จ.ปทุมธานี 12120');

-- --------------------------------------------------------

--
-- Table structure for table `contact_email`
--

CREATE TABLE `contact_email` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_email`
--

INSERT INTO `contact_email` (`id`, `email`) VALUES
(1, 'info@pschillerservice.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact_email_for_customer`
--

CREATE TABLE `contact_email_for_customer` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_email_for_customer`
--

INSERT INTO `contact_email_for_customer` (`id`, `email`) VALUES
(1, 'info.afterwebdesign@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact_facebook`
--

CREATE TABLE `contact_facebook` (
  `id` int(11) NOT NULL,
  `facebook_name` varchar(255) NOT NULL,
  `facebook_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_facebook`
--

INSERT INTO `contact_facebook` (`id`, `facebook_name`, `facebook_link`) VALUES
(1, 'PS CHILLER SERVICE', 'https://facebook.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact_line`
--

CREATE TABLE `contact_line` (
  `id` int(11) NOT NULL,
  `line_name` varchar(255) NOT NULL,
  `line_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_line`
--

INSERT INTO `contact_line` (`id`, `line_name`, `line_link`) VALUES
(1, 'ID = pschilerservice', 'https://line.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact_map`
--

CREATE TABLE `contact_map` (
  `id` int(11) NOT NULL,
  `map` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_map`
--

INSERT INTO `contact_map` (`id`, `map`) VALUES
(1, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110352.1724795208!2d100.60704582229081!3d14.02889029066591!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d7f0a9b2d056b%3A0xe5682f86eedf58be!2sP.S%20Chiller%20Service%20Part.%2CLtd!5e0!3m2!1sth!2sth!4v1716573498473!5m2!1sth!2sth\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messenger`
--

CREATE TABLE `contact_messenger` (
  `id` int(11) NOT NULL,
  `messenger_name` varchar(255) NOT NULL,
  `messenger_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_messenger`
--

INSERT INTO `contact_messenger` (`id`, `messenger_name`, `messenger_link`) VALUES
(1, 'PS CHILLER SERVICE messenger', 'https://messenger.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact_phone`
--

CREATE TABLE `contact_phone` (
  `id` int(11) NOT NULL,
  `phone_1` varchar(20) NOT NULL,
  `phone_2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_phone`
--

INSERT INTO `contact_phone` (`id`, `phone_1`, `phone_2`) VALUES
(1, '0931232925', '0931232926');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `name`, `image`) VALUES
(23, 'ผลงานหลัก 1', '20240604045708-portfolio-main.jpg'),
(25, 'ผลงานหลัก 2', '20240604045659-portfolio-main.jpg'),
(26, 'ผลงานหลัก 3', '20240604045546-portfolio-main.jpg'),
(27, 'ผลงานหลัก 44', '20240605102741-portfolio-main.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_sub`
--

CREATE TABLE `portfolio_sub` (
  `id` int(11) NOT NULL,
  `id_main` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio_sub`
--

INSERT INTO `portfolio_sub` (`id`, `id_main`, `name`, `image`) VALUES
(38, '23', 'ผลงานย่อย 1-1', '20240602115429-portfolio-sub.jpg'),
(40, '25', 'ผลงานย่อย 2-1', '20240604042014-portfolio-sub.jpg'),
(41, '26', 'ผลงานย่อย 3-1', '20240604044640-portfolio-sub.jpg'),
(42, '26', 'ผลงานย่อย 3-2', '20240604044726-portfolio-sub.jpg'),
(43, '26', 'ผลงานย่อย 3-3', '20240604044736-portfolio-sub.jpg'),
(44, '25', 'ผลงานย่อย 2-2', '20240604045607-portfolio-sub.jpg'),
(45, '27', 'ย่อย 44-1', '20240605103003-portfolio-sub.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_sub_image`
--

CREATE TABLE `portfolio_sub_image` (
  `id` int(11) NOT NULL,
  `id_main` varchar(255) NOT NULL,
  `id_sub` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio_sub_image`
--

INSERT INTO `portfolio_sub_image` (`id`, `id_main`, `id_sub`, `img`) VALUES
(98, '23', '38', '20240602115443-portfolio-sub-img-0.jpg'),
(99, '23', '38', '20240602115449-portfolio-sub-img-0.jpg'),
(100, '23', '38', '20240602115454-portfolio-sub-img-0.jpg'),
(101, '23', '38', '20240602115500-portfolio-sub-img-0.jpg'),
(105, '25', '40', '20240604042022-portfolio-sub-img-0.jpg'),
(106, '25', '40', '20240604042028-portfolio-sub-img-0.jpg'),
(107, '25', '40', '20240604042035-portfolio-sub-img-0.jpg'),
(110, '27', '45', '20240605103131-portfolio-sub-img-2.png'),
(111, '27', '45', '20240605103131-portfolio-sub-img-3.jpg'),
(112, '27', '45', '20240605103156-portfolio-sub-img-0.png');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `service_detail` longtext NOT NULL,
  `service_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `service_name`, `service_detail`, `service_image`) VALUES
(13, 'บริการที่ 1', '<span style=\"color: rgb(102, 102, 102); font-family: serithairegular; font-size: 15.12px;\">-บริการซ่อมและบำรุงรักษาระบบปรับอากาศขนาดใหญ่ CHILLER AIR COOL</span><br style=\"color: rgb(102, 102, 102); font-family: serithairegular; font-size: 15.12px;\"><span style=\"color: rgb(102, 102, 102); font-family: serithairegular; font-size: 15.12px;\">-บริการซ่อมและบำรุงรักษาระบบปรับอากาศแบบ CHILLER WATTER COOL</span><br style=\"color: rgb(102, 102, 102); font-family: serithairegular; font-size: 15.12px;\"><span style=\"color: rgb(102, 102, 102); font-family: serithairegular; font-size: 15.12px;\">-บริการล้างทำความสะอาด CONDENSORด้วยน้ำยาเคมี</span><br style=\"color: rgb(102, 102, 102); font-family: serithairegular; font-size: 15.12px;\"><span style=\"color: rgb(102, 102, 102); font-family: serithairegular; font-size: 15.12px;\">-บริการล้างทำความสะอาด COOLING TOWERด้วยน้ำยาเคมี</span><br style=\"color: rgb(102, 102, 102); font-family: serithairegular; font-size: 15.12px;\"><span style=\"color: rgb(102, 102, 102); font-family: serithairegular; font-size: 15.12px;\">-บริการล้างทำความสะอาดชุด AHU &amp; FCUด้วยน้ำยาเคมี</span><br style=\"color: rgb(102, 102, 102); font-family: serithairegular; font-size: 15.12px;\"><span style=\"color: rgb(102, 102, 102); font-family: serithairegular; font-size: 15.12px;\">-บริการซ่อมรั่วและเปลี่ยนถ่ายน้ำมัน COMPRESSORและอุปกรณ์ทุกชนิด</span><br style=\"color: rgb(102, 102, 102); font-family: serithairegular; font-size: 15.12px;\"><span style=\"color: rgb(102, 102, 102); font-family: serithairegular; font-size: 15.12px;\">-บริการติดตั้งและวางระบบปรับอากาศ</span><br style=\"color: rgb(102, 102, 102); font-family: serithairegular; font-size: 15.12px;\"><span style=\"color: rgb(102, 102, 102); font-family: serithairegular; font-size: 15.12px;\">-บริการให้คำปรึกษาเกี่ยวกับระบบปรับอากาศแบบ CHILLER</span>', '20240602115711-service.jpg'),
(14, 'บริการที่ 2', 'รายละเอียดบริการที่สอง', '20240603222737-service.jpg'),
(15, 'บริการที่ 3', '.........', '20240603223542-service.jpg'),
(16, 'บริการที่ 44', '<p>.ทดสอบ4</p>', '20240605102806-service.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slide_home`
--

CREATE TABLE `slide_home` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `img_mobile` varchar(252) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slide_home`
--

INSERT INTO `slide_home` (`id`, `img`, `img_mobile`) VALUES
(42, '20240602115525-sldie.jpg', '20240602115525-sldie-mobile.jpg'),
(43, '20240602115531-sldie.jpg', '20240602115531-sldie-mobile.jpg'),
(44, '20240602115538-sldie.jpg', '20240602115538-sldie-mobile.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `spare_parts`
--

CREATE TABLE `spare_parts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link_for_sale` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spare_parts`
--

INSERT INTO `spare_parts` (`id`, `name`, `image`, `link_for_sale`) VALUES
(11, 'อะไหล่ 1', '20240602120027-spare-parts.jpg', 'https://test.com'),
(12, 'อะไหล่ 2', '20240603214254-spare-parts.jpg', 'https://asfasfasfs.com'),
(15, 'อะไหล่ 3', '20240604055343-spare-parts.jpg', 'https://asfasfasfs.com'),
(16, 'อะไหล่ 4', '20240604055401-spare-parts.jpg', 'https://asfasfasfs.com'),
(17, 'อะไหล่ 5..', '20240605103319-spare-parts.jpg', 'https://5.com');

-- --------------------------------------------------------

--
-- Table structure for table `spare_parts_sub`
--

CREATE TABLE `spare_parts_sub` (
  `id` int(11) NOT NULL,
  `id_main` varchar(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spare_parts_sub`
--

INSERT INTO `spare_parts_sub` (`id`, `id_main`, `name`, `image`) VALUES
(19, '11', 'Brand 1-1', '20240602120549-spare-parts-sub.jpg'),
(20, '11', 'Brand 1-2', '20240602121205-spare-parts-sub.jpg'),
(22, '12', 'Brand 2-1', '20240603214317-spare-parts-sub.jpg'),
(23, '12', 'Brand 2-2', '20240603214333-spare-parts-sub.jpg'),
(26, '17', 'Brand 1-11', '20240605103417-spare-parts-sub.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `spare_parts_sub_product`
--

CREATE TABLE `spare_parts_sub_product` (
  `id` int(11) NOT NULL,
  `id_main` varchar(10) NOT NULL,
  `id_sub` varchar(255) NOT NULL,
  `number_product` varchar(255) NOT NULL,
  `name_product` varchar(255) NOT NULL,
  `detail_product` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spare_parts_sub_product`
--

INSERT INTO `spare_parts_sub_product` (`id`, `id_main`, `id_sub`, `number_product`, `name_product`, `detail_product`, `image`) VALUES
(19, '11', '20', '111-111-11', 'สินค้า 1-2-1', 'กว้าง 34\r\nยาว 35', '20240603213740-spare-parts-sub-product.jpg'),
(24, '11', '19', '222-222-222', 'สินค้า 1-1-1', 'กว้าง 24\r\nยาว  25', '20240604055016-spare-parts-sub-product.jpg'),
(25, '17', '26', '111-111-11', 'ฟหดฟหด 1-1-1', 'asfasf1\r\nasfasf2', '20240605103555-spare-parts-sub-product.jpg'),
(26, '17', '26', '111-111-1122', 'asfasfasf 1-1-2', 'asfasf1\r\nsdasg2', '20240605103623-spare-parts-sub-product.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', 'admin_1234', 'super_admin'),
(2, 'admin', '1234', 'super_admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutus_home`
--
ALTER TABLE `aboutus_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutus_image`
--
ALTER TABLE `aboutus_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutus_tell_something`
--
ALTER TABLE `aboutus_tell_something`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_address`
--
ALTER TABLE `contact_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_email`
--
ALTER TABLE `contact_email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_email_for_customer`
--
ALTER TABLE `contact_email_for_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_facebook`
--
ALTER TABLE `contact_facebook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_line`
--
ALTER TABLE `contact_line`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_map`
--
ALTER TABLE `contact_map`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_messenger`
--
ALTER TABLE `contact_messenger`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_phone`
--
ALTER TABLE `contact_phone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_sub`
--
ALTER TABLE `portfolio_sub`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_sub_image`
--
ALTER TABLE `portfolio_sub_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide_home`
--
ALTER TABLE `slide_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spare_parts`
--
ALTER TABLE `spare_parts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spare_parts_sub`
--
ALTER TABLE `spare_parts_sub`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spare_parts_sub_product`
--
ALTER TABLE `spare_parts_sub_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aboutus_home`
--
ALTER TABLE `aboutus_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aboutus_image`
--
ALTER TABLE `aboutus_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aboutus_tell_something`
--
ALTER TABLE `aboutus_tell_something`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_address`
--
ALTER TABLE `contact_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_email`
--
ALTER TABLE `contact_email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_email_for_customer`
--
ALTER TABLE `contact_email_for_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_facebook`
--
ALTER TABLE `contact_facebook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_line`
--
ALTER TABLE `contact_line`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_map`
--
ALTER TABLE `contact_map`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_messenger`
--
ALTER TABLE `contact_messenger`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_phone`
--
ALTER TABLE `contact_phone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `portfolio_sub`
--
ALTER TABLE `portfolio_sub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `portfolio_sub_image`
--
ALTER TABLE `portfolio_sub_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `slide_home`
--
ALTER TABLE `slide_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `spare_parts`
--
ALTER TABLE `spare_parts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `spare_parts_sub`
--
ALTER TABLE `spare_parts_sub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `spare_parts_sub_product`
--
ALTER TABLE `spare_parts_sub_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
