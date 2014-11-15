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
  PRIMARY KEY (`menteeId`)
);

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `userId` int,
  `password` varchar(50),
  PRIMARY KEY (`userId`)
);


DROP TABLE IF EXISTS `timeline`;

CREATE TABLE `timeline` (
  `userId` int,
  `id` int,
  `date` varchar(50),
  `title` varchar(50),
  `description` varchar(1000),
  `photo1` varchar(50),
  `photo2` varchar(50),
  `photo3` varchar(50),
  `photo4` varchar(50),
  `photo5` varchar(50),
  PRIMARY KEY (`id`)
);


# empty the table
DELETE FROM mentees;

DELETE FROM users;
DELETE FROM timeline;

# load new records into 
LOAD DATA LOCAL INFILE 'menteeinfo.txt' INTO TABLE mentees;
LOAD DATA LOCAL INFILE 'usersinfo.txt' INTO TABLE users;
LOAD DATA LOCAL INFILE 'timelineinfo.txt' INTO TABLE timeline;


#ALTER TABLE `users`
#ADD FOREIGN KEY (`userId`) REFERENCES mentees(`menteeId`);


