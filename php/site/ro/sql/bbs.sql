CREATE TABLE `board` (
  `board_id` int(11) NOT NULL AUTO_INCREMENT,
  `board_name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `board_detail` text CHARACTER SET latin1 NOT NULL,
  `creater` varchar(255) CHARACTER SET latin1 NOT NULL,
  `create_at` int(11) NOT NULL,
  PRIMARY KEY (`board_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

CREATE TABLE `user` (
  `user_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `mail` text,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `message` (
  `serial_id` int(11) NOT NULL AUTO_INCREMENT,
  `board_id` int(11) NOT NULL,
  `post_at` int(11) NOT NULL,
  `poster` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`serial_id`,`board_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
