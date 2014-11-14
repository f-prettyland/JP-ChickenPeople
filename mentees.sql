DROP TABLE IF EXISTS `mentees`;

CREATE TABLE `mentees` (
  `menteeId` int,
  `menteeName` int(50),
  `city` varchar(50),
  `country` varchar(50),
  `product` varchar(50),
  `tag` varchar(50),
  `gmail` varchar(50),
  `phone` varchar(50),
  `privacyBit` int(2),
  PRIMARY KEY (`menteeId`)
);
