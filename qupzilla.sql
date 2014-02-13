SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


DROP TABLE IF EXISTS `downloads`;
CREATE TABLE IF NOT EXISTS `downloads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `platform` varchar(100) CHARACTER SET utf32 NOT NULL,
  `count` bigint(20) NOT NULL,
  `last_download` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `platform` (`platform`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

INSERT INTO `downloads` (`id`, `platform`, `count`, `last_download`) VALUES
(1, 'windows', 0, '0000-00-00 00:00:00'),
(2, 'windows_portable', 0, '0000-00-00 00:00:00'),
(3, 'debian32', 0, '0000-00-00 00:00:00'),
(4, 'debian64', 0, '0000-00-00 00:00:00'),
(5, 'linux32', 0, '0000-00-00 00:00:00'),
(6, 'linux64', 0, '0000-00-00 00:00:00'),
(7, 'mac', 0, '0000-00-00 00:00:00'),
(8, 'os2', 0, '0000-00-00 00:00:00'),
(9, 'haiku', 0, '0000-00-00 00:00:00'),
(10, 'viewsource', 0, '0000-00-00 00:00:00'),
(11, 'source', 0, '0000-00-00 00:00:00');

DROP TABLE IF EXISTS `users_info`;
CREATE TABLE IF NOT EXISTS `users_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(20) NOT NULL,
  `count` bigint(20) NOT NULL,
  `version` varchar(20) NOT NULL,
  `last_visit` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ip` (`ip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
