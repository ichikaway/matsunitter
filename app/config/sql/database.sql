CREATE USER 'findtwitter'@'localhost' IDENTIFIED BY 'findtwitter';

GRANT USAGE ON * . * TO 'findtwitter'@'localhost' IDENTIFIED BY 'findtwitter' WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0 ;

CREATE DATABASE IF NOT EXISTS `findtwitter` ;

GRANT ALL PRIVILEGES ON `findtwitter` . * TO 'findtwitter'@'localhost';

ALTER DATABASE `findtwitter` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
