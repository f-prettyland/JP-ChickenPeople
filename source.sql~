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
  PRIMARY KEY (`menteeId`)
);

CREATE TABLE `users` (
  `userId` varchar(100),
  `password` varchar(50),
  PRIMARY KEY (`userId`)
);


# empty the table
DELETE FROM mentees;

# load new records into it
LOAD DATA LOCAL INFILE 'menteeinfo.txt' INTO TABLE mentees;
LOAD DATA LOCAL INFILE 'usersinfo.txt' INTO TABLE users;

