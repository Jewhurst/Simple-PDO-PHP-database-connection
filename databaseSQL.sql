CREATE TABLE IF NOT EXISTS `site_options` (
  `optionid` int(11) NOT NULL AUTO_INCREMENT,
  `optionName` varchar(255) NOT NULL,
  `optionValue` text,
  PRIMARY KEY (`optionid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

INSERT INTO `site_options` (`optionid`, `optionName`, `optionValue`) VALUES
(2, 'site_name', 'My database connection!');