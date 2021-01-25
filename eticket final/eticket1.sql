/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50508
Source Host           : localhost:3306
Source Database       : eticket1

Target Server Type    : MYSQL
Target Server Version : 50508
File Encoding         : 65001

Date: 2021-01-18 20:48:40
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `company`
-- ----------------------------
DROP TABLE IF EXISTS `company`;
CREATE TABLE `company` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `licence_no` varchar(50) NOT NULL,
  `owner_name` varchar(50) NOT NULL,
  `owner_email` varchar(50) NOT NULL,
  `owner_phone` varchar(50) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of company
-- ----------------------------
INSERT INTO `company` VALUES ('1', 'Abad Travels', 'Kochi ', '7845219865', 'abad@gmail.com', '54asdasd', 'Akash', 'akash@gmail.com', '6874123985');

-- ----------------------------
-- Table structure for `tbl_bookbus`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_bookbus`;
CREATE TABLE `tbl_bookbus` (
  `bkid` int(11) NOT NULL AUTO_INCREMENT,
  `bid` int(20) NOT NULL,
  `src` varchar(20) NOT NULL,
  `dest` varchar(20) NOT NULL,
  `jdate` date NOT NULL,
  `bdate` date NOT NULL,
  `uid` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`bkid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_bookbus
-- ----------------------------
INSERT INTO `tbl_bookbus` VALUES ('1', '1', 'Trivandrum', 'Kayamkulam', '2021-01-19', '2021-01-18', '1', '200');

-- ----------------------------
-- Table structure for `tbl_bookflight`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_bookflight`;
CREATE TABLE `tbl_bookflight` (
  `bkid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `src` varchar(20) NOT NULL,
  `dest` varchar(20) NOT NULL,
  `jdate` date NOT NULL,
  `bdate` date NOT NULL,
  `uid` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`bkid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_bookflight
-- ----------------------------
INSERT INTO `tbl_bookflight` VALUES ('1', 'qatar airways', '	 Trivandrum', '	 doha', '2021-01-20', '2021-01-18', '1', '3000');

-- ----------------------------
-- Table structure for `tbl_bus`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_bus`;
CREATE TABLE `tbl_bus` (
  `bid` int(11) NOT NULL AUTO_INCREMENT,
  `bregno` varchar(20) NOT NULL,
  `src` varchar(20) NOT NULL,
  `dest` varchar(20) NOT NULL,
  `seat_capacity` int(11) NOT NULL,
  `bus_type` varchar(20) NOT NULL,
  `cid` int(11) DEFAULT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_bus
-- ----------------------------
INSERT INTO `tbl_bus` VALUES ('1', 'KL 36 KF 5678', 'Trivandrum', 'Kasargod', '49', 'sleeper with A/C', '1');

-- ----------------------------
-- Table structure for `tbl_buspassenger`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_buspassenger`;
CREATE TABLE `tbl_buspassenger` (
  `bpid` int(11) NOT NULL AUTO_INCREMENT,
  `bkid` int(11) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `phno` varchar(20) NOT NULL,
  `amt` int(11) DEFAULT NULL,
  PRIMARY KEY (`bpid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_buspassenger
-- ----------------------------
INSERT INTO `tbl_buspassenger` VALUES ('1', '1', 'dsfds', 'male', '23', '2342342342', '200');

-- ----------------------------
-- Table structure for `tbl_flight`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_flight`;
CREATE TABLE `tbl_flight` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `fsrc` varchar(30) NOT NULL,
  `fdest` varchar(30) NOT NULL,
  `fcseat` int(11) NOT NULL,
  `fcticket` int(11) NOT NULL,
  `bcseat` int(11) NOT NULL,
  `bcticket` int(11) NOT NULL,
  `ecseat` int(11) NOT NULL,
  `ecticket` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_flight
-- ----------------------------
INSERT INTO `tbl_flight` VALUES ('1', 'qatar airways', 'Trivandrum', 'doha', '10', '1200', '10', '3000', '10', '1000', '1');
INSERT INTO `tbl_flight` VALUES ('2', 'jazeera airways', 'kochi', 'qatar', '10', '1900', '10', '2000', '10', '700', '1');

-- ----------------------------
-- Table structure for `tbl_flpassenger`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_flpassenger`;
CREATE TABLE `tbl_flpassenger` (
  `fpid` int(11) NOT NULL AUTO_INCREMENT,
  `bkid` int(11) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `phno` varchar(20) NOT NULL,
  `nation` varchar(20) NOT NULL,
  `class` varchar(20) NOT NULL,
  `amt` int(11) DEFAULT NULL,
  PRIMARY KEY (`fpid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_flpassenger
-- ----------------------------
INSERT INTO `tbl_flpassenger` VALUES ('1', '1', 'sdfsdf', 'male', '23', '3423423423', 'India', 'Buissness Class', '3000');

-- ----------------------------
-- Table structure for `tbl_fshedule`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_fshedule`;
CREATE TABLE `tbl_fshedule` (
  `fscid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `fstime` time NOT NULL,
  `fjdate` date NOT NULL,
  `fnot` int(11) DEFAULT NULL,
  `bnot` int(11) DEFAULT NULL,
  `enot` int(11) DEFAULT NULL,
  PRIMARY KEY (`fscid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_fshedule
-- ----------------------------
INSERT INTO `tbl_fshedule` VALUES ('1', 'qatar airways', '23:58:00', '2021-01-20', '10', '9', '10');
INSERT INTO `tbl_fshedule` VALUES ('2', 'qatar airways', '23:58:00', '2021-01-19', '10', '10', '10');
INSERT INTO `tbl_fshedule` VALUES ('3', 'jazeera airways', '04:44:00', '2021-01-28', '10', '10', '10');

-- ----------------------------
-- Table structure for `tbl_login`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_login`;
CREATE TABLE `tbl_login` (
  `uid` int(11) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `upass` varchar(20) NOT NULL,
  `utype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_login
-- ----------------------------
INSERT INTO `tbl_login` VALUES ('0', 'admin', 'admin', 'admin');
INSERT INTO `tbl_login` VALUES ('1', 'sneha@gmail.com', 'sneha@12345', 'cust');
INSERT INTO `tbl_login` VALUES ('1', 'abad@gmail.com', 'abadtravels', 'company');

-- ----------------------------
-- Table structure for `tbl_shedule`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_shedule`;
CREATE TABLE `tbl_shedule` (
  `scid` int(11) NOT NULL AUTO_INCREMENT,
  `bid` int(11) NOT NULL,
  `stime` time NOT NULL,
  `jdate` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `bnot` int(11) DEFAULT NULL,
  PRIMARY KEY (`scid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_shedule
-- ----------------------------
INSERT INTO `tbl_shedule` VALUES ('1', '1', '05:00:00', '2021-01-19', 'Not Started', '48');

-- ----------------------------
-- Table structure for `tbl_stop`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_stop`;
CREATE TABLE `tbl_stop` (
  `stid` int(11) NOT NULL AUTO_INCREMENT,
  `bid` int(20) DEFAULT NULL,
  `src` varchar(20) DEFAULT NULL,
  `stop` varchar(20) NOT NULL,
  `tprice` int(11) NOT NULL,
  PRIMARY KEY (`stid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_stop
-- ----------------------------
INSERT INTO `tbl_stop` VALUES ('3', '1', 'Trivandrum', 'Kayamkulam', '200');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `nationality` varchar(10) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'Sneha', 'kochi ', '8754215465', 'sneha@gmail.com', '1990-01-10', 'ind');
