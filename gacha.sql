SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


CREATE TABLE IF NOT EXISTS `gacha` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `eName` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `jName` varchar(255) CHARACTER SET utf8 NOT NULL,
  `type` CHAR(50) COLLATE utf8_unicode_ci NOT NULL,
  `boxGachaDays` CHAR(255) COLLATE utf8_unicode_ci NULL,
  `dateStart` datetime NOT NULL,
  `dateFinish` datetime NOT NULL,
  `pic` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

INSERT INTO `gacha` (`id`, `eName`, `jName`, `type`, `boxGachaDays`, `dateStart`, `dateFinish`, `pic`) VALUES
(1, 'Made with Love Valentines Day Gacha', 'メイド with LOVE バレンタインデーガシャ', 'Limited', NULL , '2016-01-31 15:00:00', '2016-02-10 14:59:59', 'Made with Love Valentines Day Gacha.png'),
(2, 'Starry Moments Nighttime Gacha', '星々のひととき ナイトタイムガシャ', 'Limited', NULL, '2016-02-29 15:00:00', '2016-03-11 14:59:59', 'Starry Moments Nighttime Gacha.png'),
(3, 'Happy New Year Gacha', 'ハッピーニューイヤーガシャ','Limited', NULL,'2015-12-30 15:00:00', '2016-01-16 14:59:59', 'Happy New Year Gacha.png'),
(4, 'Present for you! Chrismas Gift Gacha', 'キミに届け！クリスマスプレゼントガシャ', 'Limited',  NULL, '2015-11-30 15:00:00', '2015-12-14 14:59:59', 'Present for you! Chrismas Gift Gacha.png'),
(5, 'Laid Back and Relaxing, Cosy Hot Springs Gacha', 'まったりのんびりぽかぽか温泉ガシャ', 'Limited',  NULL,'2015-10-31 15:00:00', '2015-11-13 14:59:59', 'Laid Back and Relaxing, Cosy Hot Springs Gacha.png'),
(6, 'Sweet Moments Sweet Halloween Gacha', '甘いひととき スウィートハロウィンガシャ', 'Limited', NULL, '2015-09-30 15:00:00', '2015-10-13 14:59:59', 'Sweet Moments Sweet Halloween Gacha.png'),
(7, 'Platinum Gacha (Non-Limited) (Cute Day)', 'プラチナガシャ', 'Regular',  NULL,'2016-04-20 00:00:00', '2016-04-20 23:59:59', NULL),
(8, 'Springtime After School Gacha', '春うららか放課後タイムガシャ', 'Limited', NULL, '2016-03-31 15:00:00', '2016-04-08 14:59:59', 'Springtime After School Gacha.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
