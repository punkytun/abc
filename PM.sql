CREATE DATABASE website CHARSET utf8 COLLATE utf8_unicode_ci; 
USE website;
/*Table structure cho admin*/ 
CREATE TABLE IF NOT EXISTS `admin` (
    `id` int(20) NOT NULL AUTO_INCREMENT,
    `username` varchar(69)  CHARSET utf8 COLLATE utf8_general_ci NOT NULL UNIQUE,
    `password` varchar(69)  CHARSET utf8 COLLATE utf8_general_ci NOT NULL,
    `name` varchar(30) CHARSET utf8 COLLATE utf8_general_ci NOT NULL,
    PRIMARY KEY (`id`)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci AUTO_INCREMENT=1000;
/*MyISAM= Storage Engine; */
/*INSERT INTO .....*/ 

CREATE TABLE IF NOT EXISTS `user` ( 
    `id` int(69) NOT NULL AUTO_INCREMENT, 
    `username` varchar(50) COLLATE utf8_general_ci NOT NULL UNIQUE,
    `password` varchar(40) COLLATE utf8_general_ci NOT NULL,
    `name` varchar(100) COLLATE utf8_general_ci NOT NULL,
    `status` tinyint(1) NOT NULL,
    `email` varchar(50) COLLATE utf8_general_ci NOT NULL UNIQUE,
    `phone` int (30) NOT NULL,
    PRIMARY KEY (`id`)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci AUTO_INCREMENT=1000;

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1000 ;


CREATE TABLE IF NOT EXISTS `product` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_general_ci NOT NULL,
  `price` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `detail` text COLLATE utf8_general_ci NOT NULL,
  `image` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `size` text NOT NULL,
  `size1` text NOT NULL,
  `size2` text NOT NULL,
  `long-detail` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci AUTO_INCREMENT=16 ;

/*Bảng giao dịch lưu thông tin giao dịch của web(transaction)*/
CREATE TABLE IF NOT EXISTS `transaction` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `status` tinyint(4) NOT NULL DEFAULT '0',
    /*1: Pass, 2:chưa làm*/
  `user_id` int(11) NOT NULL DEFAULT '0',
  `user_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `user_email` varchar(50) COLLATE utf8_bin NOT NULL,
  `user_phone` varchar(20) COLLATE utf8_bin NOT NULL,
  `amount` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `payment` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `payment_info` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1000 ;

/*Đơn hàng*/
CREATE TABLE IF NOT EXISTS `order` (
  `transaction_id` int(255) NOT NULL,
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `product_id` int(255) NOT NULL,
  `sl` int(11) NOT NULL DEFAULT '0',
    /*sl=số lượng*/
  `amount` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `data` text COLLATE utf8_bin NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;
/*Feedback*/
CREATE TABLE IF NOT EXISTS `feedback` ( 
`feedback_id`int (225) NOT NULL AUTO_INCREMENT, 
`content` char(225) NOT NULL DEFAULT '',
PRIMARY KEY (`feedback_id`)    
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;
