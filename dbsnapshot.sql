-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 22, 2016 at 11:25 AM
-- Server version: 5.5.49-0+deb8u1
-- PHP Version: 5.6.20-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `SerialVal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblSerial`
--

CREATE TABLE IF NOT EXISTS `tblSerial` (
`serialID` int(11) NOT NULL,
  `serialKey` varchar(256) NOT NULL,
  `serialStatus` int(1) NOT NULL,
  `serialData` text NOT NULL,
  `serialLatestTimestamp` datetime NOT NULL COMMENT 'The time and date of the last action that was performed on the serial key (modify it to the current status)',
  `serialCreatedTimestamp` datetime NOT NULL COMMENT 'The date and time of this serial creation.'
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblSerial`
--

INSERT INTO `tblSerial` (`serialID`, `serialKey`, `serialStatus`, `serialData`, `serialLatestTimestamp`, `serialCreatedTimestamp`) VALUES
(31, 'A9CWI-U3Q3K-X3S97-9HFTO', 1, 'osPlatform=&osVersion=&osName=', '0000-00-00 00:00:00', '2016-05-15 15:00:47'),
(32, '2E3QP-SN1QL-B1UOY-CJ13M', 3, '', '2016-05-15 18:47:43', '2016-05-15 15:00:47'),
(33, 'M0QFA-YPSEJ-GGXK7-MDUO3', 3, '', '2016-05-15 18:48:39', '2016-05-15 15:00:47'),
(34, 'FZ4AO-3N75Q-URRL7-1JWTY', 3, '', '2016-05-15 18:52:19', '2016-05-15 15:00:47'),
(35, 'FAEDU-L07GO-AWOF6-CJTKO', 3, '', '2016-05-15 18:57:27', '2016-05-15 15:00:47'),
(36, 'JFFA0-NCKK6-IZGXC-AICIZ', 3, '', '2016-05-15 19:04:41', '2016-05-15 15:00:47'),
(37, '1TVP8-12RVM-GE1WP-2J2M3', 3, '', '2016-06-20 22:12:02', '2016-05-15 15:00:47'),
(38, '853O2-GZLTH-KUAGJ-JHMBC', 3, '', '2016-06-20 22:13:08', '2016-05-15 15:00:47'),
(39, '8RRAN-HC7JZ-AS4EG-7UGSN', 3, '', '2016-06-20 22:13:22', '2016-05-15 15:00:47'),
(40, 'YDH8T-1SBN3-NWVF6-JXJQH', 3, '', '2016-06-20 22:15:32', '2016-05-15 15:00:47'),
(41, 'D9MR9-YIB1N-YNEE6-S5QYQ', 3, '', '2016-06-20 22:16:19', '2016-05-15 18:06:18'),
(42, 'I99MT-JNV5Y-0I7MA-HLSSM', 3, '', '2016-06-20 22:19:20', '2016-05-15 18:06:18'),
(43, 'GRAV6-HNB7L-1QUBC-NU0JZ', 1, 'osPlatform=&osVersion=&osName=', '0000-00-00 00:00:00', '2016-05-15 18:06:18'),
(44, 'YJI66-TNRMG-E28OX-E5LPD', 3, '', '2016-06-21 17:10:26', '2016-05-15 18:06:18'),
(45, '6R312-GPXG8-WERFK-Y98QV', 3, '', '2016-06-22 10:40:33', '2016-05-15 18:06:18'),
(46, 'P5YXT-WBZH1-DOSGP-VWESD', 0, '', '0000-00-00 00:00:00', '2016-05-15 18:06:18'),
(47, 'NPRF5-CDEK3-99886-24I2M', 0, '', '0000-00-00 00:00:00', '2016-05-15 18:06:18'),
(48, 'JFACV-Z8SE0-51QXG-V9UAU', 0, '', '0000-00-00 00:00:00', '2016-05-15 18:06:18'),
(49, 'XK46S-B9XUB-JDQTQ-MTYF8', 0, '', '0000-00-00 00:00:00', '2016-05-15 18:06:18'),
(50, 'YK9PI-QKSKV-MIFRO-83X5X', 0, '', '0000-00-00 00:00:00', '2016-05-15 18:06:18'),
(51, 'YTMS6-9BZEI-5Z5B8-5OSJP', 0, '', '0000-00-00 00:00:00', '2016-06-22 07:18:18'),
(52, '6TZGB-X48SW-1RPOK-VYWVC', 0, '', '0000-00-00 00:00:00', '2016-06-22 07:18:18'),
(53, 'E1CJC-KP1D9-QJ2P0-DM4MF', 0, '', '0000-00-00 00:00:00', '2016-06-22 07:18:18'),
(54, '0O7QC-RLBNH-O2I0M-VLBWY', 0, '', '0000-00-00 00:00:00', '2016-06-22 07:18:18'),
(55, 'KNIMC-I0ZMN-ENBLD-ODZZ1', 0, '', '0000-00-00 00:00:00', '2016-06-22 07:18:18'),
(56, 'HN3ZO-QU91R-7MEP9-R89QU', 0, '', '0000-00-00 00:00:00', '2016-06-22 07:18:18'),
(57, 'X5I8R-WX4VX-6CKAC-807I1', 0, '', '0000-00-00 00:00:00', '2016-06-22 07:18:18'),
(58, 'YPODF-X4N7U-I5Z0D-QWBVS', 0, '', '0000-00-00 00:00:00', '2016-06-22 07:18:18'),
(59, '815TB-H1CPJ-EN921-P05C7', 0, '', '0000-00-00 00:00:00', '2016-06-22 07:18:18'),
(60, '0UC0V-QRS2N-LAOR3-085DY', 0, '', '0000-00-00 00:00:00', '2016-06-22 07:18:18');

-- --------------------------------------------------------

--
-- Table structure for table `ul_blocked_ips`
--

CREATE TABLE IF NOT EXISTS `ul_blocked_ips` (
  `ip` varchar(39) CHARACTER SET ascii NOT NULL,
  `block_expires` varchar(26) CHARACTER SET ascii NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ul_log`
--

CREATE TABLE IF NOT EXISTS `ul_log` (
  `timestamp` varchar(26) CHARACTER SET ascii NOT NULL,
  `action` varchar(20) CHARACTER SET ascii NOT NULL,
  `comment` varchar(255) CHARACTER SET ascii NOT NULL DEFAULT '',
  `user` varchar(400) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(39) CHARACTER SET ascii NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ul_log`
--

INSERT INTO `ul_log` (`timestamp`, `action`, `comment`, `user`, `ip`) VALUES
('2016-05-13T14:18:02+03:00', 'create login', '', 'Itay', '::1'),
('2016-05-13T14:49:52+03:00', 'auth-success', '', 'itay', '::1'),
('2016-05-13T14:50:00+03:00', 'auth-success', '', 'itay', '::1'),
('2016-05-14T10:14:50+03:00', 'auth-fail', '', 'aaa', '::1'),
('2016-05-14T10:16:32+03:00', 'auth-fail', '', '1', '::1'),
('2016-05-14T10:16:43+03:00', 'auth-fail', '', '1', '::1'),
('2016-05-14T10:17:34+03:00', 'auth-fail', '', '1', '::1'),
('2016-05-15T18:04:56+03:00', 'auth-success', '', 'itay', '::1'),
('2016-05-15T18:05:20+03:00', 'auth-fail', '', 'itay', '::1'),
('2016-05-15T18:05:32+03:00', 'auth-success', '', 'itay', '::1'),
('2016-05-15T18:26:19+03:00', 'auth-success', '', 'itay', '::1'),
('2016-05-15T18:26:54+03:00', 'auth-success', '', 'itay', '::1'),
('2016-05-15T18:28:27+03:00', 'auth-success', '', 'itay', '::1'),
('2016-05-15T18:29:54+03:00', 'auth-success', '', 'itay', '::1'),
('2016-05-15T18:30:25+03:00', 'auth-success', '', 'itay', '::1'),
('2016-05-15T18:46:29+03:00', 'auth-success', '', 'itay', '::1'),
('2016-05-17T18:28:29+03:00', 'auth-success', '', 'itay', '::1'),
('2016-05-17T20:59:13+03:00', 'auth-success', '', 'itay', '::1'),
('2016-05-17T21:08:43+03:00', 'auth-success', '', 'itay', '::1'),
('2016-05-17T21:09:36+03:00', 'auth-success', '', 'itay', '::1'),
('2016-05-19T18:13:02+03:00', 'auth-success', '', 'itay', '::1'),
('2016-06-21T07:41:19+03:00', 'auth-success', '', 'itay', '::1'),
('2016-06-21T09:38:28+03:00', 'auth-success', '', 'itay', '::1'),
('2016-06-21T10:07:18+03:00', 'auth-success', '', 'itay', '::1'),
('2016-06-21T10:50:26+03:00', 'create login', '', 'bob', '::1'),
('2016-06-21T10:55:13+03:00', 'create login', '', 'DamnSon', '::1'),
('2016-06-21T14:04:35+03:00', 'auth-success', '', 'itay', '::1'),
('2016-06-21T14:22:14+03:00', 'auth-success', '', 'itay', '::1'),
('2016-06-21T14:28:03+03:00', 'delete login', '', 'DamnSon', '::1'),
('2016-06-21T17:09:29+03:00', 'auth-success', '', 'itay', '10.0.0.2'),
('2016-06-21T17:11:09+03:00', 'auth-success', '', 'itay', '10.0.0.2'),
('2016-06-22T07:17:39+03:00', 'auth-success', '', 'itay', '::1'),
('2016-06-22T07:19:09+03:00', 'delete login', '', 'bob', '::1'),
('2016-06-22T10:10:50+03:00', 'auth-success', '', 'itay', '::1'),
('2016-06-22T10:13:51+03:00', 'create login', '', 'ThomasTheIdiot', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `ul_logins`
--

CREATE TABLE IF NOT EXISTS `ul_logins` (
`id` int(11) NOT NULL,
  `username` varchar(400) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(2048) CHARACTER SET ascii NOT NULL,
  `date_created` varchar(26) CHARACTER SET ascii NOT NULL,
  `last_login` varchar(26) CHARACTER SET ascii NOT NULL,
  `block_expires` varchar(26) CHARACTER SET ascii NOT NULL,
  `permissions` int(11) NOT NULL DEFAULT '0' COMMENT 'Value	Role			Meaning 			0		Regular User	Get serial, generate serial and look up data 			1		Mod	(Moderator)	0 + serial control 			2		SysOp			1 + account managment'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ul_logins`
--

INSERT INTO `ul_logins` (`id`, `username`, `password`, `date_created`, `last_login`, `block_expires`, `permissions`) VALUES
(1, 'Itay', '$2a$11$loO.Q7/QV81VGpIAPc0jYeqNNvPbIApdxGWMCrjdhGZ8aKy5.RnEi', '2016-05-13T14:18:02+03:00', '2016-06-22T10:10:50+03:00', '1016-05-13T14:18:02+02:00', 2),
(3, 'ThomasTheIdiot', '$2a$11$NOtf9IBLg/sxMGGKE5nJ/.2Mv2rByYDo.ePFPBNWdfM7hFIFe/RRy', '2016-06-22T10:13:51+03:00', '2016-06-22T10:13:51+03:00', '1016-06-22T10:13:51+02:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ul_nonces`
--

CREATE TABLE IF NOT EXISTS `ul_nonces` (
  `code` varchar(100) CHARACTER SET ascii NOT NULL,
  `action` varchar(850) CHARACTER SET ascii NOT NULL,
  `nonce_expires` varchar(26) CHARACTER SET ascii NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ul_sessions`
--

CREATE TABLE IF NOT EXISTS `ul_sessions` (
  `id` varchar(128) CHARACTER SET ascii NOT NULL DEFAULT '',
  `data` blob NOT NULL,
  `session_expires` varchar(26) CHARACTER SET ascii NOT NULL,
  `lock_expires` varchar(26) CHARACTER SET ascii NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ul_sessions`
--

INSERT INTO `ul_sessions` (`id`, `data`, `session_expires`, `lock_expires`) VALUES
('34nn9lb9arfa5viroi54223a11', 0x737365737c613a343a7b733a393a22495061646472657373223b733a333a223a3a31223b733a31303a22686f7374446f6d61696e223b733a303a22223b733a393a22757365724167656e74223b733a38333a224d6f7a696c6c612f352e3020285831313b204c696e757820693638363b2072763a33382e3029204765636b6f2f32303130303130312046697265666f782f33382e302049636577656173656c2f33382e382e30223b733a373a2245585049524553223b693a313436363531313938383b7d756c4e6f6e6365737c613a313a7b733a31343a22756c53657373696f6e546f6b656e223b613a323a7b733a343a22636f6465223b733a36343a2233393762353930386166643632656466306234626361653632366231663962376165373834336636393362616463343061393934666465313730356562353963223b733a363a22657870697265223b733a32353a22323031362d30362d32315431353a32363a32382b30333a3030223b7d7d7569647c693a313b757365726e616d657c733a343a2269746179223b6c6f67676564496e7c623a313b, '2016-06-21T15:30:28+03:00', '1016-06-21T15:06:28+02:00'),
('9gdqolq6rcv70a4hk9etaf7681', 0x737365737c613a343a7b733a393a22495061646472657373223b733a333a223a3a31223b733a31303a22686f7374446f6d61696e223b733a303a22223b733a393a22757365724167656e74223b733a38333a224d6f7a696c6c612f352e3020285831313b204c696e757820693638363b2072763a33382e3029204765636b6f2f32303130303130312046697265666f782f33382e302049636577656173656c2f33382e382e30223b733a373a2245585049524553223b693a313436363434353734323b7d756c4e6f6e6365737c613a313a7b733a31343a22756c53657373696f6e546f6b656e223b613a323a7b733a343a22636f6465223b733a36343a2266613462313664333737346631333039323966323833663633663237396266323461373933653238356461653435626465366261386630653238386637633065223b733a363a22657870697265223b733a32353a22323031362d30362d32305432313a30323a32322b30333a3030223b7d7d, '2016-06-20T21:06:22+03:00', '1016-06-20T20:42:22+02:00'),
('acgqmkc2kg52e9mv4suhm9peh0', 0x737365737c613a343a7b733a393a22495061646472657373223b733a333a223a3a31223b733a31303a22686f7374446f6d61696e223b733a303a22223b733a393a22757365724167656e74223b733a38333a224d6f7a696c6c612f352e3020285831313b204c696e757820693638363b2072763a33382e3029204765636b6f2f32303130303130312046697265666f782f33382e302049636577656173656c2f33382e382e30223b733a373a2245585049524553223b693a313436363538323630363b7d756c4e6f6e6365737c613a313a7b733a31343a22756c53657373696f6e546f6b656e223b613a323a7b733a343a22636f6465223b733a36343a2235623562376665396435333731306665366564346436623764613830616434613666313437336237343565323663633463653035656239333632373461613639223b733a363a22657870697265223b733a32353a22323031362d30362d32325431313a30333a32362b30333a3030223b7d7d7569647c693a313b757365726e616d657c733a343a2269746179223b6c6f67676564496e7c623a313b, '2016-06-22T11:07:26+03:00', '1016-06-22T10:43:26+02:00'),
('capqtub32o36m46osc6hhupa52', 0x737365737c613a343a7b733a393a22495061646472657373223b733a333a223a3a31223b733a31303a22686f7374446f6d61696e223b733a303a22223b733a393a22757365724167656e74223b733a38333a224d6f7a696c6c612f352e3020285831313b204c696e757820693638363b2072763a33382e3029204765636b6f2f32303130303130312046697265666f782f33382e302049636577656173656c2f33382e382e30223b733a373a2245585049524553223b693a313436363435313536303b7d756c4e6f6e6365737c613a313a7b733a31343a22756c53657373696f6e546f6b656e223b613a323a7b733a343a22636f6465223b733a36343a2237616136343439623439326465373132356166393462323962303865343535396230626439346638316237353135653534313734383033613839313332306536223b733a363a22657870697265223b733a32353a22323031362d30362d32305432323a33393a32302b30333a3030223b7d7d, '2016-06-20T22:43:20+03:00', '1016-06-20T22:19:20+02:00'),
('cn5bbkrne0acalu065tcf1clu4', 0x737365737c613a343a7b733a393a22495061646472657373223b733a383a2231302e302e302e32223b733a31303a22686f7374446f6d61696e223b733a31303a2231302e302e302e313031223b733a393a22757365724167656e74223b733a3130393a224d6f7a696c6c612f352e30202857696e646f7773204e5420362e313b20574f57363429204170706c655765624b69742f3533372e333620284b48544d4c2c206c696b65204765636b6f29204368726f6d652f35312e302e323730342e313033205361666172692f3533372e3336223b733a373a2245585049524553223b693a313436363434303138303b7d756c4e6f6e6365737c613a313a7b733a31343a22756c53657373696f6e546f6b656e223b613a323a7b733a343a22636f6465223b733a36343a2233323732656335613133336534613938613237303765346664323630326666343465636333613337643337313166633435353338353031613363313832666331223b733a363a22657870697265223b733a32353a22323031362d30362d32305431393a32393a34302b30333a3030223b7d7d, '2016-06-20T19:33:40+03:00', '1016-06-20T19:09:41+02:00'),
('ft6mch5qcad80s2thk46d1bm11', 0x737365737c613a343a7b733a393a22495061646472657373223b733a333a223a3a31223b733a31303a22686f7374446f6d61696e223b733a303a22223b733a393a22757365724167656e74223b733a36363a224d6f7a696c6c612f352e3020285831313b204c696e757820693638363b2072763a34362e3029204765636b6f2f32303130303130312046697265666f782f34362e30223b733a373a2245585049524553223b693a313436333530393738323b7d756c4e6f6e6365737c613a323a7b733a353a226c6f67696e223b613a323a7b733a343a22636f6465223b733a36343a2230616465303933643537323635636431333833663333316331613961336162623030306561633639376332393432376431303932393335613161366132653666223b733a363a22657870697265223b733a32353a22323031362d30352d31375432313a32343a33362b30333a3030223b7d733a31343a22756c53657373696f6e546f6b656e223b613a323a7b733a343a22636f6465223b733a36343a2234326365346538393362396430353339643561623430316664323862393336303038623761323564383831623562393331366632376461666633393630363336223b733a363a22657870697265223b733a32353a22323031362d30352d31375432313a32393a34322b30333a3030223b7d7d7569647c693a313b757365726e616d657c733a343a2269746179223b6c6f67676564496e7c623a313b, '2016-05-17T21:33:42+03:00', '1016-05-17T21:09:42+02:00'),
('h59vo3qseqce77vrasjeksmtt7', 0x737365737c613a343a7b733a393a22495061646472657373223b733a333a223a3a31223b733a31303a22686f7374446f6d61696e223b733a303a22223b733a393a22757365724167656e74223b733a38333a224d6f7a696c6c612f352e3020285831313b204c696e757820693638363b2072763a33382e3029204765636b6f2f32303130303130312046697265666f782f33382e302049636577656173656c2f33382e382e30223b733a373a2245585049524553223b693a313436363537303335393b7d756c4e6f6e6365737c613a323a7b733a353a226c6f67696e223b613a323a7b733a343a22636f6465223b733a36343a2237633230353231373531643133346664636466616433306666373333336661653835353464633332313565353534663763346439333136653234383837393166223b733a363a22657870697265223b733a32353a22323031362d30362d32325430373a33323a33392b30333a3030223b7d733a31343a22756c53657373696f6e546f6b656e223b613a323a7b733a343a22636f6465223b733a36343a2232343561373962616461343939343463363337623231373564313965353662316662656264653434663732623837653366613961396535376630616630666635223b733a363a22657870697265223b733a32353a22323031362d30362d32325430373a33393a31392b30333a3030223b7d7d7569647c693a313b757365726e616d657c733a343a2269746179223b6c6f67676564496e7c623a313b, '2016-06-22T07:43:19+03:00', '1016-06-22T07:19:19+02:00'),
('is14hh4b9dlsdj53oilcncr725', 0x737365737c613a343a7b733a393a22495061646472657373223b733a333a223a3a31223b733a31303a22686f7374446f6d61696e223b733a303a22223b733a393a22757365724167656e74223b733a36363a224d6f7a696c6c612f352e3020285831313b204c696e757820693638363b2072763a34362e3029204765636b6f2f32303130303130312046697265666f782f34362e30223b733a373a2245585049524553223b693a313436333637323333363b7d756c4e6f6e6365737c613a323a7b733a353a226c6f67696e223b613a323a7b733a343a22636f6465223b733a36343a2236656230356235326537393066343261373237323765616137633766383832363564373435643038306434643863613662356330653564623937633937633232223b733a363a22657870697265223b733a32353a22323031362d30352d31395431383a32383a30322b30333a3030223b7d733a31343a22756c53657373696f6e546f6b656e223b613a323a7b733a343a22636f6465223b733a36343a2263363233376266323963393362373639653166633566666361366331646134646435646337396537363161323961363739376436396135646264303966343732223b733a363a22657870697265223b733a32353a22323031362d30352d31395431383a33383a35362b30333a3030223b7d7d7569647c693a313b757365726e616d657c733a343a2269746179223b6c6f67676564496e7c623a313b, '2016-05-19T18:42:56+03:00', '1016-05-19T18:18:56+02:00'),
('jtq96c4aj2r0pr3ukv3774fsp3', 0x737365737c613a343a7b733a393a22495061646472657373223b733a333a223a3a31223b733a31303a22686f7374446f6d61696e223b733a303a22223b733a393a22757365724167656e74223b733a36363a224d6f7a696c6c612f352e3020285831313b204c696e757820693638363b2072763a34362e3029204765636b6f2f32303130303130312046697265666f782f34362e30223b733a373a2245585049524553223b693a313436333231323633383b7d756c4e6f6e6365737c613a323a7b733a353a226c6f67696e223b613a323a7b733a343a22636f6465223b733a36343a2236656531643263373734396631353733336666333532336132333431356434343836343838353064383833333139376339353563346465643338633461343264223b733a363a22657870697265223b733a32353a22323031362d30352d31345431303a35323a31382b30333a3030223b7d733a31343a22756c53657373696f6e546f6b656e223b613a323a7b733a343a22636f6465223b733a36343a2263336536613732646135323337353133393135363361376561363234643139663231653831653133663535356366333937343335333335366265376632373162223b733a363a22657870697265223b733a32353a22323031362d30352d31345431303a35373a31382b30333a3030223b7d7d, '2016-05-14T11:01:18+03:00', '1016-05-14T10:37:18+02:00'),
('rg6s8povvc2albgo8jkgrsia94', 0x737365737c613a343a7b733a393a22495061646472657373223b733a333a223a3a31223b733a31303a22686f7374446f6d61696e223b733a303a22223b733a393a22757365724167656e74223b733a38333a224d6f7a696c6c612f352e3020285831313b204c696e757820693638363b2072763a33382e3029204765636b6f2f32303130303130312046697265666f782f33382e302049636577656173656c2f33382e382e30223b733a373a2245585049524553223b693a313436363538313030343b7d756c4e6f6e6365737c613a313a7b733a31343a22756c53657373696f6e546f6b656e223b613a323a7b733a343a22636f6465223b733a36343a2231646135643966316531366432643437313434313632663630633130316438656130366135306138623534343237326530656666343166653139363864613834223b733a363a22657870697265223b733a32353a22323031362d30362d32325431303a33363a34342b30333a3030223b7d7d, '2016-06-22T10:40:44+03:00', '1016-06-22T10:16:44+02:00'),
('sml74nvgu862ddk6dporlat1e0', 0x737365737c613a343a7b733a393a22495061646472657373223b733a333a223a3a31223b733a31303a22686f7374446f6d61696e223b733a303a22223b733a393a22757365724167656e74223b733a38333a224d6f7a696c6c612f352e3020285831313b204c696e757820693638363b2072763a33382e3029204765636b6f2f32303130303130312046697265666f782f33382e302049636577656173656c2f33382e382e30223b733a373a2245585049524553223b693a313436363435303635343b7d756c4e6f6e6365737c613a313a7b733a31343a22756c53657373696f6e546f6b656e223b613a323a7b733a343a22636f6465223b733a36343a2261373261393636356463396330303163353263303966353732313963313438626337343230316235396432666230353561653866316632623930303739376364223b733a363a22657870697265223b733a32353a22323031362d30362d32305432323a32343a31342b30333a3030223b7d7d, '2016-06-20T22:28:14+03:00', '1016-06-20T22:04:15+02:00'),
('th2d3p5iogtmrgqc80rnjnn0h4', 0x737365737c613a343a7b733a393a22495061646472657373223b733a383a2231302e302e302e32223b733a31303a22686f7374446f6d61696e223b733a31303a2231302e302e302e313031223b733a393a22757365724167656e74223b733a3130393a224d6f7a696c6c612f352e30202857696e646f7773204e5420362e313b20574f57363429204170706c655765624b69742f3533372e333620284b48544d4c2c206c696b65204765636b6f29204368726f6d652f35312e302e323730342e313033205361666172692f3533372e3336223b733a373a2245585049524553223b693a313436363531393630373b7d756c4e6f6e6365737c613a323a7b733a353a226c6f67696e223b613a323a7b733a343a22636f6465223b733a36343a2238623337616261343763313862643464346166386265616665616633303337366461326564323330396430623764353133613665396262353636343266653561223b733a363a22657870697265223b733a32353a22323031362d30362d32315431373a32363a30392b30333a3030223b7d733a31343a22756c53657373696f6e546f6b656e223b613a323a7b733a343a22636f6465223b733a36343a2231306463643632393065646462396233336463663966323737306165326539323331363963343761376339323138643265343035376438323432373661383664223b733a363a22657870697265223b733a32353a22323031362d30362d32315431373a33333a32372b30333a3030223b7d7d7569647c693a313b757365726e616d657c733a343a2269746179223b6c6f67676564496e7c623a313b, '2016-06-21T17:37:27+03:00', '1016-06-21T17:13:27+02:00'),
('v7qn4eqc1v7a149l52d5ak5jn2', 0x737365737c613a343a7b733a393a22495061646472657373223b733a333a223a3a31223b733a31303a22686f7374446f6d61696e223b733a303a22223b733a393a22757365724167656e74223b733a36363a224d6f7a696c6c612f352e3020285831313b204c696e757820693638363b2072763a34362e3029204765636b6f2f32303130303130312046697265666f782f34362e30223b733a373a2245585049524553223b693a313436333332383433343b7d756c4e6f6e6365737c613a323a7b733a353a226c6f67696e223b613a323a7b733a343a22636f6465223b733a36343a2266656637656262393131616339643761353435646638316463363434623834653361323237333339663864643363333337656430356538653033393539333764223b733a363a22657870697265223b733a32353a22323031362d30352d31355431393a30313a32392b30333a3030223b7d733a31343a22756c53657373696f6e546f6b656e223b613a323a7b733a343a22636f6465223b733a36343a2264393333333865663962393664663839333131616137383461373337396565346661373963323630376332643730356561326165323864363137326632663934223b733a363a22657870697265223b733a32353a22323031362d30352d31355431393a30373a31342b30333a3030223b7d7d7569647c693a313b757365726e616d657c733a343a2269746179223b6c6f67676564496e7c623a313b, '2016-05-15T19:11:14+03:00', '1016-05-15T18:47:14+02:00'),
('vtcoik3el93nl6laaea38n0106', 0x737365737c613a343a7b733a393a22495061646472657373223b733a333a223a3a31223b733a31303a22686f7374446f6d61696e223b733a303a22223b733a393a22757365724167656e74223b733a36363a224d6f7a696c6c612f352e3020285831313b204c696e757820693638363b2072763a34362e3029204765636b6f2f32303130303130312046697265666f782f34362e30223b733a373a2245585049524553223b693a313436333136373638323b7d756c4e6f6e6365737c613a313a7b733a31343a22756c53657373696f6e546f6b656e223b613a323a7b733a343a22636f6465223b733a36343a2232633439656564646366373338333431356630636664316663626366363434373466636266346632383533643539316539653335383637646262353733653433223b733a363a22657870697265223b733a32353a22323031362d30352d31335432323a32383a30322b30333a3030223b7d7d, '2016-05-13T22:32:02+03:00', '1016-05-13T22:08:02+02:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblSerial`
--
ALTER TABLE `tblSerial`
 ADD PRIMARY KEY (`serialID`);

--
-- Indexes for table `ul_blocked_ips`
--
ALTER TABLE `ul_blocked_ips`
 ADD PRIMARY KEY (`ip`);

--
-- Indexes for table `ul_logins`
--
ALTER TABLE `ul_logins`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`(255));

--
-- Indexes for table `ul_nonces`
--
ALTER TABLE `ul_nonces`
 ADD PRIMARY KEY (`code`), ADD UNIQUE KEY `action` (`action`(255));

--
-- Indexes for table `ul_sessions`
--
ALTER TABLE `ul_sessions`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblSerial`
--
ALTER TABLE `tblSerial`
MODIFY `serialID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `ul_logins`
--
ALTER TABLE `ul_logins`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;