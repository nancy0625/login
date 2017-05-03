-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2017-04-26 01:20:56
-- 服务器版本： 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stu`
--
CREATE DATABASE IF NOT EXISTS `stu` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `stu`;

-- --------------------------------------------------------

--
-- 替换视图以便查看 `ab`
-- (See below for the actual view)
--
CREATE TABLE `ab` (
`id` int(11)
,`schoolNo` int(11)
,`depno` int(11)
,`subsidy` double
);

-- --------------------------------------------------------

--
-- 表的结构 `client`
--

CREATE TABLE `client` (
  `cl_name` varchar(20) DEFAULT NULL,
  `cl_guimo` enum('大','中','小') DEFAULT NULL,
  `cl_type` enum('经销商','零售商') NOT NULL,
  `cl_tel` varchar(25) DEFAULT NULL,
  `cl_duanjiao` bit(1) NOT NULL DEFAULT b'0',
  `cl_id` char(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

--
-- 转存表中的数据 `client`
--

INSERT INTO `client` (`cl_name`, `cl_guimo`, `cl_type`, `cl_tel`, `cl_duanjiao`, `cl_id`) VALUES
('1', '大', '零售商', '11112', b'0', 'yi'),
('2', '大', '零售商', '113312', b'0', '二'),
('3', '小', '经销商', '18912', b'0', '三'),
('4', '中', '零售商', '1112', b'0', '四'),
('5', '小', '零售商', '16452', b'0', '五'),
('6', '中', '零售商', '11262', b'0', '六'),
('sacsaf', '大', '零售商', '113312', b'0', '七'),
('sdfc', '小', '经销商', '18912', b'0', '八'),
('dec', '中', '零售商', '1112', b'0', '九'),
('aew', '小', '零售商', '16452', b'0', '十'),
('dsfc', '中', '零售商', '11262', b'0', '十一');

-- --------------------------------------------------------

--
-- 表的结构 `depts`
--

CREATE TABLE `depts` (
  `dept_id` int(11) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `description` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `depts`
--

INSERT INTO `depts` (`dept_id`, `name`, `description`) VALUES
(1, 'manager', 'you'),
(2, 'yanfa', 'me'),
(3, 'shichang', 'you');

-- --------------------------------------------------------

--
-- 表的结构 `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(11) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `dept_id` int(11) DEFAULT NULL,
  `join_time` datetime DEFAULT NULL,
  `salary` decimal(8,2) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `image` blob,
  `description` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `employee`
--

INSERT INTO `employee` (`employee_id`, `name`, `gender`, `dept_id`, `join_time`, `salary`, `address`, `image`, `description`) VALUES
(1, 'zhangsan', 'M', 1, NULL, NULL, NULL, NULL, NULL),
(2, 'lisi', 'F', 2, NULL, NULL, NULL, NULL, NULL),
(3, 'wangwu', 'M', 3, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `orders`
--

CREATE TABLE `orders` (
  `or_id` int(11) NOT NULL,
  `cl_id` char(4) DEFAULT NULL,
  `pr_id` int(11) DEFAULT NULL,
  `or_num` int(11) DEFAULT NULL,
  `or_date` datetime DEFAULT NULL,
  `or_price` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

--
-- 转存表中的数据 `orders`
--

INSERT INTO `orders` (`or_id`, `cl_id`, `pr_id`, `or_num`, `or_date`, `or_price`) VALUES
(1, '1', 1, 1350, '2010-03-12 00:00:00', 150),
(2, '2', 2, 500, '2010-03-15 00:00:00', 250),
(3, '3', 3, 750, '2014-03-20 00:00:00', 356),
(4, '4', 4, 190, '2015-03-25 00:00:00', 854),
(5, '5', 5, 560, '2010-04-01 00:00:00', 1023),
(6, '6', 6, 235, '2014-03-12 00:00:00', 689),
(7, '7', 7, 356, '2015-03-15 00:00:00', 564),
(8, '8', 8, 321, '2016-03-20 00:00:00', 456),
(9, '9', 9, 378, '2017-03-25 00:00:00', 652),
(10, '10', 10, 109, '2017-04-01 00:00:00', 421);

-- --------------------------------------------------------

--
-- 表的结构 `product`
--

CREATE TABLE `product` (
  `pr_id` int(11) NOT NULL,
  `pr_typeid` varchar(20) DEFAULT NULL,
  `pr_num` int(11) DEFAULT NULL,
  `pr_name` varchar(25) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

--
-- 转存表中的数据 `product`
--

INSERT INTO `product` (`pr_id`, `pr_typeid`, `pr_num`, `pr_name`) VALUES
(1, '洗理日用品', 234, '洗发水'),
(2, '蔬菜', 864, '菠菜'),
(3, '肉食', 239, '牛肉'),
(4, '家电', 637, '电饭煲'),
(5, '蔬菜', 325, '芹菜'),
(6, '肉食', 7678, '腊肉'),
(7, '洗理日用品', 764, '洗洁精'),
(8, '水果', 782, '苹果'),
(9, '肉食', 323, '鸡肉');

-- --------------------------------------------------------

--
-- 表的结构 `producttype`
--

CREATE TABLE `producttype` (
  `pt_id` int(11) NOT NULL,
  `pt_name` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

--
-- 转存表中的数据 `producttype`
--

INSERT INTO `producttype` (`pt_id`, `pt_name`) VALUES
(1, '食品'),
(2, '家具'),
(3, '办公用品'),
(4, '衣服');

-- --------------------------------------------------------

--
-- 表的结构 `salinfo`
--

CREATE TABLE `salinfo` (
  `id` int(11) NOT NULL,
  `schoolNo` int(11) NOT NULL,
  `depno` int(11) NOT NULL,
  `salary` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `salinfo`
--

INSERT INTO `salinfo` (`id`, `schoolNo`, `depno`, `salary`) VALUES
(1, 1, 1, 2000),
(2, 1, 2, 2002),
(3, 1, 3, 3000),
(4, 2, 2, 3003);

-- --------------------------------------------------------

--
-- 表的结构 `subinfo`
--

CREATE TABLE `subinfo` (
  `id` int(11) NOT NULL,
  `schoolNo` int(11) NOT NULL,
  `depno` int(11) NOT NULL,
  `subsidy` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `subinfo`
--

INSERT INTO `subinfo` (`id`, `schoolNo`, `depno`, `subsidy`) VALUES
(1, 1, 1, 2000),
(2, 1, 2, 2002),
(3, 1, 3, 2003),
(4, 2, 1, 3000),
(5, 2, 2, 3000);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` varchar(32) COLLATE gbk_bin NOT NULL COMMENT '用户名',
  `password` varchar(32) COLLATE gbk_bin NOT NULL COMMENT '密码'
) ENGINE=MyISAM DEFAULT CHARSET=gbk COLLATE=gbk_bin;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `user`, `password`) VALUES
(1, '123', '123'),
(2, 'root', '07160605');

-- --------------------------------------------------------

--
-- 视图结构 `ab`
--
DROP TABLE IF EXISTS `ab`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `ab`  AS  select `subinfo`.`id` AS `id`,`subinfo`.`schoolNo` AS `schoolNo`,`subinfo`.`depno` AS `depno`,`subinfo`.`subsidy` AS `subsidy` from `subinfo` where (`subinfo`.`schoolNo` = 1) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`cl_id`);

--
-- Indexes for table `depts`
--
ALTER TABLE `depts`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`),
  ADD KEY `dept_empl_fk` (`dept_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`or_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pr_id`);

--
-- Indexes for table `producttype`
--
ALTER TABLE `producttype`
  ADD PRIMARY KEY (`pt_id`),
  ADD UNIQUE KEY `pt_name` (`pt_name`);

--
-- Indexes for table `salinfo`
--
ALTER TABLE `salinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subinfo`
--
ALTER TABLE `subinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `depts`
--
ALTER TABLE `depts`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `orders`
--
ALTER TABLE `orders`
  MODIFY `or_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- 使用表AUTO_INCREMENT `producttype`
--
ALTER TABLE `producttype`
  MODIFY `pt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- 使用表AUTO_INCREMENT `salinfo`
--
ALTER TABLE `salinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- 使用表AUTO_INCREMENT `subinfo`
--
ALTER TABLE `subinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
