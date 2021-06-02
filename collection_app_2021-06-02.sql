# ************************************************************
# Sequel Pro SQL dump
# Version 5446
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.34)
# Database: collection_app
# Generation Time: 2021-06-02 09:25:02 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table artist
# ------------------------------------------------------------

DROP TABLE IF EXISTS `artist`;

CREATE TABLE `artist` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `artist` WRITE;
/*!40000 ALTER TABLE `artist` DISABLE KEYS */;

INSERT INTO `artist` (`id`, `name`)
VALUES
	(1,'Salvador Dali'),
	(2,'Gustav Klimt'),
	(3,'James Abbott McNeill Whistler'),
	(4,'Rene Magritte'),
	(5,'Sandro Botticelli'),
	(6,'Leonardo da Vinci');

/*!40000 ALTER TABLE `artist` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table painting
# ------------------------------------------------------------

DROP TABLE IF EXISTS `painting`;

CREATE TABLE `painting` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `artist_name` int(11) DEFAULT NULL,
  `painting_title` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `description` varchar(10000) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `painting` WRITE;
/*!40000 ALTER TABLE `painting` DISABLE KEYS */;

INSERT INTO `painting` (`id`, `artist_name`, `painting_title`, `type`, `description`, `image`)
VALUES
	(1,1,'The Persistence of Memory','Oil painting','This artwork is also one of the very famous paintings by the artist Salvador Dali completed in 1931. The painting is a depiction of Melting clocks and is one of the most recognized works. This Surreal piece of work is the representation of Dali’s theory of Softness and Hardness which is central to the thinking of the time. This modern work of art was very much appreciated by everyone and now this sits in the museum of modern art, New York City.','the-persistence-of-memory.jpeg'),
	(2,2,'The Kiss','Oil painting','This perfect depiction of early modern art was made by the Austrian Painter Gustav Klimt between 1907 and 1908. This painting is also a beautiful depiction of the chemistry of a couple tangled in the silver and gold sheet and embracing each other by making love and kissing. It is one of the most popular Klimt\'s work.','the-kiss.jpeg'),
	(3,3,'Whistler\'s Mother','Oil painting','The Whistler’s Mother is a renowned painting made by the American born Painter Jame McNeill Whistler in 1871. The picture is of James’s Mother Anna McNeill Whistler displayed in also McNeill’s own designed frame. This is one of the most famous paintings made outside of America. This painting is known as the American Icon and also as the Victorian Mona Lisa.','whistlers-mother.jpeg'),
	(4,4,'The Son of A Man','Oil painting','This painting is so unique in its known because of the feature of Self-portrait made by the astounding Belgian painter Rene Magritte in 1964. This painting portrays a young man donning a formal suit with a sea, sky background and a hovering green apple also covering his face but still his eyes peeking from aside. This picture tells a deep message of a conflicting opinion of what is visible and what is hidden.','the-son-of-a-man.jpg'),
	(5,5,'The Birth of Venus','Tempera painting','The Birth of Venus is a painting made by the Italian artist Sandro Botticelli which delineates the emergence of Goddess Venus in a nude outlook as a gorgeous woman. This mythological and also very famous painting housed in Florence’s Uffizi Valley. The painting became well known because of the lady’s beautiful face and also the coy posture while standing gracefully in a shell and other people celebrating her modesty.','the-birth-of-venus.jpeg'),
	(6,6,'The Last Supper','Tempera painting','Paragon of Art Leonardo da Vinci made this painting in the late 15th century as one of the most recognized paintings of that era. This famous painting also depicts the live scene of the Last Supper of Jesus in Church with his twelve apostles after which Jesus announced that one of them betrayed him. So the interesting fact is he painted the last supper on drywall rather than on wet plaster also.','the_last_supper.jpeg'),
	(7,6,'Mona Lisa','Oil painting','Leonardo Da Vinci also made the Mona Lisa is in some time between 1503-1509. The Government of France owns it. It is on the wall of Louvre in Paris, France. The million dollars Mona Lisa’s Smile is the visual representation of the idea of happiness. People also say that Mona also smiles with you being happy and the smile fades away when you are full of sorrow too.','mona-lisa.jpeg');

/*!40000 ALTER TABLE `painting` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
