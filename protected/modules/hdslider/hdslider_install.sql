-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping structure for table hdslider_images
DROP TABLE IF EXISTS `hdslider_images`;
CREATE TABLE IF NOT EXISTS `hdslider_images` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `slider_id` int(10) NOT NULL,
  `name` varchar(150) NOT NULL,
  `path` varchar(150) DEFAULT NULL,
  `link` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `sort` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_hdslider_images_hdslider_slider` (`slider_id`),
  CONSTRAINT `FK_yupe_hdslider_images_yupe_hdslider_slider` FOREIGN KEY (`slider_id`) REFERENCES `hdslider_slider` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- Dumping data for table hdslider_images: ~3 rows (approximately)
DELETE FROM `hdslider_images`;
/*!40000 ALTER TABLE `hdslider_images` DISABLE KEYS */;
INSERT INTO `hdslider_images` (`id`, `slider_id`, `name`, `path`, `link`, `description`, `sort`) VALUES
	(9, 1, 'Первый слайд', '1.png', 'http://helldog.net', 'Прикольная чашечка =) ', 1),
	(10, 1, 'Второй слайд', '2.png', 'http://helldog.net', 'Это описание второго слайда', 2),
	(11, 1, 'Это третий слайд', '3.png', 'http://helldog.net', 'Описание для третьего слайда =) ', 3);
/*!40000 ALTER TABLE `hdslider_images` ENABLE KEYS */;


-- Dumping structure for table hdslider_slider
DROP TABLE IF EXISTS `hdslider_slider`;
CREATE TABLE IF NOT EXISTS `hdslider_slider` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `params` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table hdslider_slider: ~1 rows (approximately)
DELETE FROM `hdslider_slider`;
/*!40000 ALTER TABLE `hdslider_slider` DISABLE KEYS */;
INSERT INTO `hdslider_slider` (`id`, `name`, `params`, `status`) VALUES
	(1, 'Test', '{"bgincrement":450,"autoplay":"true"}', 0);
/*!40000 ALTER TABLE `hdslider_slider` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
