-- Ca c'est une table pour l'année 1993,

USE GOOGLE_TREND5;

CREATE TABLE IF NOT EXISTS `A3` (
  
  `pays` varchar(20) default null,
  `Champions` int(11) default null
  
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO `A3` (`pays`, `champions`) VALUES

('Brazil',2),
('USA',0),
('Cameroun',0),
('Japon',0),
('Pologne',0),
('Angleterre',0),
('Nigeria',0),
('Australie',0),
('Canada',0),
('Pays-Bas',0),
('Ireland',0),
('Biélorussie',0),
('Kyrgyzstan',0),
('Nouvelle-Zélande',0),
('Russie',0),
('Chine',0),
('Mexique',0);