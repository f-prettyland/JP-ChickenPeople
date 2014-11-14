DROP TABLE IF EXISTS `mentees`;

CREATE TABLE `mentees` (
  `menteeId` int() NOT NULL,
  `menteeName` int(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `product` varchar(50) NOT NULL,
  `tag` varchar(50) NOT NULL,
  `gmail` varchar(50) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `privacyBit` int(2) DEFAULT 0,
  PRIMARY KEY (`menteeId`),
);
