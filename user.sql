/*
SQLyog Trial v12.2.3 (32 bit)
MySQL - 10.1.19-MariaDB : Database - userbusiness
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`userbusiness` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `userbusiness`;

/*Table structure for table `user_account` */

DROP TABLE IF EXISTS `user_account`;

CREATE TABLE `user_account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL COMMENT '用户的ID',
  `user_name` int(11) NOT NULL DEFAULT '0' COMMENT '用户手机号',
  `order_ticket` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '订货券',
  `sales_ticket` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '优惠券',
  `share_num` int(11) NOT NULL DEFAULT '0' COMMENT '股票数',
  `share_price` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '股票金额',
  `pick_ticket` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '提货券',
  `activate_ticket` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '激活券',
  `create_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '创建时间',
  `update_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '修改时间',
  `status` tinyint(1) NOT NULL COMMENT '状态',
  `extention` varchar(50) DEFAULT NULL COMMENT '扩展字段',
  PRIMARY KEY (`id`),
  KEY `name` (`user_name`),
  KEY `uid` (`uid`),
  KEY `time` (`create_time`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='用户的账户类型';

/*Data for the table `user_account` */

insert  into `user_account`(`id`,`uid`,`user_name`,`order_ticket`,`sales_ticket`,`share_num`,`share_price`,`pick_ticket`,`activate_ticket`,`create_time`,`update_time`,`status`,`extention`) values 
(1,1,2147483647,'123456789.33','0.00',0,'0.00','0.00','0.00','0000-00-00 00:00:00','0000-00-00 00:00:00',0,NULL);

/*Table structure for table `user_account_banlance` */

DROP TABLE IF EXISTS `user_account_banlance`;

CREATE TABLE `user_account_banlance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` tinyint(2) NOT NULL DEFAULT '1' COMMENT '类型 1 存券 2 分红 3奖金 4转券 5换券',
  `teller_type` tinyint(2) NOT NULL DEFAULT '1' COMMENT '支出类型 1 出 2 入',
  `price` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '金额',
  `acount_price` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '对应账户余额',
  `account_id` tinyint(2) NOT NULL DEFAULT '1' COMMENT '账户类型 1订货券 2优惠券 3股权 4提货券 5激活券',
  `create_time` int(11) NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '创建时间',
  `note_info` tinyint(2) NOT NULL DEFAULT '0' COMMENT '备注',
  `uid` int(11) NOT NULL DEFAULT '0' COMMENT '用户ID',
  `user_name` int(11) NOT NULL DEFAULT '0' COMMENT '用户名',
  PRIMARY KEY (`id`),
  KEY `name` (`user_name`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='积分记录，记录所有的动账的log';

/*Data for the table `user_account_banlance` */

/*Table structure for table `user_change_account_log` */

DROP TABLE IF EXISTS `user_change_account_log`;

CREATE TABLE `user_change_account_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chage_price` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '换券金额',
  `tax_price` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '税金',
  `after_tax_price` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '被税后金额',
  `type` tinyint(2) NOT NULL DEFAULT '1' COMMENT '类型',
  `uid` int(11) NOT NULL COMMENT '用户ID',
  `user_name` int(11) NOT NULL COMMENT '用户名字',
  `create_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '创建时间',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `user` (`user_name`),
  KEY `user_time` (`uid`,`user_name`,`create_time`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='换券记录';

/*Data for the table `user_change_account_log` */

/*Table structure for table `user_give_ticker_log` */

DROP TABLE IF EXISTS `user_give_ticker_log`;

CREATE TABLE `user_give_ticker_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT '0' COMMENT '出账户uid',
  `user_name` int(11) NOT NULL DEFAULT '0' COMMENT '出账户',
  `to_uid` int(11) NOT NULL DEFAULT '0' COMMENT '入账户uid',
  `to_user_name` int(11) NOT NULL DEFAULT '0' COMMENT '入账户',
  `out_price` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '转账金额',
  `type` tinyint(2) NOT NULL DEFAULT '1' COMMENT '转账类型， 1激活券到优惠券',
  `create_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '转券时间',
  PRIMARY KEY (`id`),
  KEY `user_time` (`uid`,`user_name`,`create_time`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='转券激活券转到其他人账户';

/*Data for the table `user_give_ticker_log` */

/*Table structure for table `user_info` */

DROP TABLE IF EXISTS `user_info`;

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL DEFAULT '' COMMENT '用户手机号',
  `first_pw` varchar(50) NOT NULL DEFAULT '' COMMENT '一级密码',
  `second_pw` varchar(50) NOT NULL DEFAULT '' COMMENT '二级密码',
  `sex` tinyint(2) NOT NULL DEFAULT '1' COMMENT '性别 1男 2 女',
  `real_name` varchar(50) NOT NULL DEFAULT '' COMMENT '真实姓名',
  `level_id` tinyint(2) NOT NULL DEFAULT '1' COMMENT '会员等级',
  `team_num` int(11) NOT NULL DEFAULT '1' COMMENT '团队人数',
  `touch_num` int(11) NOT NULL DEFAULT '0' COMMENT '直推人数',
  `create_time` int(11) NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '创建时间',
  `update_time` int(11) NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '修改时间',
  `parent_id` int(11) NOT NULL DEFAULT '0' COMMENT '推荐人ID',
  `parent_user_name` varchar(50) NOT NULL DEFAULT '' COMMENT '推荐人手机号',
  `addr` varchar(250) NOT NULL DEFAULT '' COMMENT '收货地址',
  `bank_name` varchar(250) NOT NULL DEFAULT '' COMMENT '开户行',
  `bank_no` varchar(250) NOT NULL DEFAULT '' COMMENT '银行卡号',
  `bank_user_name` varchar(250) NOT NULL DEFAULT '' COMMENT '开户姓名',
  `bank_addr` varchar(250) NOT NULL DEFAULT '' COMMENT '开户行地址',
  `sell_level` tinyint(2) NOT NULL DEFAULT '1' COMMENT '销售级别',
  `status` tinyint(2) NOT NULL DEFAULT '1' COMMENT '状态 0无效 1有效',
  PRIMARY KEY (`id`),
  KEY `user_name` (`user_name`),
  KEY `parent_key` (`parent_id`,`parent_user_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户表';

/*Data for the table `user_info` */

/*Table structure for table `user_prize_log` */

DROP TABLE IF EXISTS `user_prize_log`;

CREATE TABLE `user_prize_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `share_red_price` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '分红奖',
  `distribu_price` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '分销奖',
  `leader_price` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '领导奖',
  `consume_price` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '消费奖',
  `type` tinyint(2) NOT NULL DEFAULT '0' COMMENT '类型 1分红奖 2分销奖 3领导奖 4消费奖',
  `uid` int(11) NOT NULL DEFAULT '0' COMMENT '用户id',
  `user_name` int(11) NOT NULL DEFAULT '0' COMMENT '用户名手机号',
  `create_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `note_info` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `user` (`user_name`),
  KEY `all` (`share_red_price`,`distribu_price`,`leader_price`,`consume_price`,`uid`,`user_name`,`create_time`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='奖金记录日志表\r\n奖励表 分红奖，分销奖 管理奖';

/*Data for the table `user_prize_log` */

/*Table structure for table `user_recharge` */

DROP TABLE IF EXISTS `user_recharge`;

CREATE TABLE `user_recharge` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recharge_no` varchar(50) NOT NULL DEFAULT '' COMMENT '充值流水',
  `price_num` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '充值金额',
  `pay_type` tinyint(2) NOT NULL DEFAULT '0' COMMENT '充值方式 0线下 1支付宝 2 微信 3 银联',
  `check_status` tinyint(2) NOT NULL DEFAULT '1' COMMENT '审核方式，1待审核 2审核成功',
  `pay_status` tinyint(2) NOT NULL DEFAULT '1' COMMENT '支付状态 1未支付 2 已支付',
  `check_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '审核时间',
  `create_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '创建时间',
  `user_name` int(11) NOT NULL DEFAULT '0' COMMENT '用户账号',
  `uid` int(11) NOT NULL DEFAULT '0' COMMENT '用户ID',
  `check_uid` int(11) NOT NULL DEFAULT '0' COMMENT '审核人ID',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='充值流水记录';

/*Data for the table `user_recharge` */

/*Table structure for table `user_recharge_log` */

DROP TABLE IF EXISTS `user_recharge_log`;

CREATE TABLE `user_recharge_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT '0' COMMENT '用户ID',
  `user_name` int(11) NOT NULL DEFAULT '0' COMMENT '用户名手机号',
  `price_cut` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '订货券账户',
  `price_add` decimal(12,2) NOT NULL DEFAULT '0.00' COMMENT '优惠券账户追加数',
  `create_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '创建时间',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `name` (`user_name`),
  KEY `user_time` (`uid`,`user_name`,`create_time`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='存券表，订货券到优惠券账户';

/*Data for the table `user_recharge_log` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
