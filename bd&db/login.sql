DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `idlog` int(11) NOT NULL auto_increment,
  `user` varchar(15) NOT NULL default '',
  `password` varchar(15) NOT NULL default '',
  `premium` char(1) NOT NULL default 0,
  
  PRIMARY KEY  (`idlog`)
)
;

INSERT INTO `login` VALUES (1, 'Enzo', '123', '0'),
(2, 'Bart', '123', '0')
;


