DROP DATABASE IF EXISTS `ProjektopgaveM-belpolstren_database`;
CREATE DATABASE IF NOT EXISTS `ProjektopgaveM-belpolstren_database`;

USE `ProjektopgaveM-belpolstren_database`;

DROP TABLE IF EXISTS `frontpage`;
CREATE TABLE IF NOT EXISTS `frontpage` (
  `header_title` varchar(255) NOT NULL,
  `header_description` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `frontpage` (`header_title`, `header_description`) VALUES
('Møbelpolstreren', 'Velkomen til vores møbelpolstrer hjemmeside');

DROP TABLE IF EXISTS `priceCalculatorPage`;
CREATE TABLE IF NOT EXISTS `priceCalculatorPage` (
    `header_title` varchar(255) NOT NULL,
    `header_description` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `priceCalculatorPage` (`header_title`, `header_description`) VALUES
('Møbelhandel', 'Har du et møbel som du ønsker at sægle.');

DROP TABLE IF EXISTS `beforeAfterImageBanner`;
CREATE TABLE IF NOT EXISTS `beforeAfterImageBanner` (
    `header_title` varchar(255) NOT NULL,
    `header_description` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `beforeAfterImageBanner` (`header_title`, `header_description`) VALUES
('Før Efter Billeder', 'Her kan du se nogen før efter billeder af arbjede som jeg har udført.');

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(50) NOT NULL,
  `highPrice` varchar(50) NOT NULL,
  `lowPrice` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `products` (`id`, `title`, `description`, `image`, `highPrice`, `lowPrice`) VALUES
(1, 'Hans J Wenger Bamsestol', 'Hans J Wegner Bamsestol fra år 1951.', '', '30000', '20000'),
(2, 'Hans J Wegner Designet Ox Chair', 'Hans J Wegner designet Ox Chair Stolen For Erik Jørgensen i 1960.', '', '30000', '25000'),
(3, 'Wing Chair', 'Wing Chair er designet i 1060. Den blev dengang kun fremstillet i ganske få eksemplarer, og kom således først i egentlig produktion da Carl Hansen & Sen relancerde den i 2006. CH445 Wing Chair fæs med den matchende Ch446 fodskammel for ekstra komfort.', '', '15000', '10000');

COMMIT;