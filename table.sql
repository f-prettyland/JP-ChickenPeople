CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `qazi_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `description` text NOT NULL,
  `url` text NOT NULL,
  `date` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
)