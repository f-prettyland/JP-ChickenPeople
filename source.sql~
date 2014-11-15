create database if not exists data;

use data;

DROP TABLE IF EXISTS `mentees`;

CREATE TABLE `mentees` (
  `menteeId` int,
  `menteeName` varchar(50),
  `city` varchar(50),
  `country` varchar(50),
  `product` varchar(50),
  `tag` varchar(50),
  `gmail` varchar(50),
  `phone` varchar(50),
  `privacyBit` int(2),
  `picName` varchar(50),
  `story` varchar(2000),
  PRIMARY KEY (`menteeId`),
  FOREIGN KEY (`menteeId`) REFERENCES users(`userId`)
);

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `userId` varchar(100),
  `password` varchar(50),
  PRIMARY KEY (`userId`),
  FOREIGN KEY (`userId`) REFERENCES mentees(`menteeId`)
);


# empty the table
DELETE FROM mentees;

DELETE FROM users;

# load new records into it
LOAD DATA LOCAL INFILE 'menteeinfo.txt' INTO TABLE mentees;
LOAD DATA LOCAL INFILE 'usersinfo.txt' INTO TABLE users;

