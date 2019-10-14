CREATE TABLE `devices` (
	`id` INT(5) NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255) NOT NULL,
	`image` VARCHAR(255) NOT NULL,
	`serialNo` VARCHAR(255) NOT NULL,
	`availability` VARCHAR(255) NOT NULL,
	`notes` VARCHAR(255) NOT NULL,
	`category` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;


INSERT INTO `devices` (name, image, serialNo, availability, notes, category)
VALUES
("Macbook Pro", "https://m.media-amazon.com/images/I/31fD+NPpVqL._AC_UY436_FMwebp_QL65_.jpg", "C02TNIFCGTF1", "Available", "no notes", "macbook"),
("Macbook Air", "https://m.media-amazon.com/images/I/61UgnK1eN0L._AC_UY436_FMwebp_QL65_.jpg", "CO2KVCX7F6T6", "Available", "no notes", "macbook"),
("Macbook Pro", "https://m.media-amazon.com/images/I/31fD+NPpVqL._AC_UY436_FMwebp_QL65_.jpg", "C02PM70ZG3QC", "Available", "no notes", "macbook"),
("Macbook Pro", "https://m.media-amazon.com/images/I/31fD+NPpVqL._AC_UY436_FMwebp_QL65_.jpg", "C02HQ152DV7N", "Available", "no notes", "macbook"),
("Macbook Pro", "https://m.media-amazon.com/images/I/31fD+NPpVqL._AC_UY436_FMwebp_QL65_.jpg", "C02HV1PTFLG4", "Available", "no notes", "macbook"),
("Macbook Pro", "https://m.media-amazon.com/images/I/31fD+NPpVqL._AC_UY436_FMwebp_QL65_.jpg", "W80140UF64C", "Available", "no notes", "macbook"),
("Macbook Pro", "https://m.media-amazon.com/images/I/31fD+NPpVqL._AC_UY436_FMwebp_QL65_.jpg", "C02FV2CWDF91", "Available", "no notes", "macbook"),
("Asus", "https://m.media-amazon.com/images/I/6167WYHLHiL._AC_UY436_FMwebp_QL65_.jpg", "B12345", "Available", "no notes", "pc"),
("Dell", "https://m.media-amazon.com/images/I/41yH82J80wL._AC_UY436_FMwebp_QL65_.jpg", "TP9R362", "Available", "no notes", "pc"),
("Nexus", "https://m.media-amazon.com/images/I/418KVzHTenL._AC_UL320_SEARCH213888_FMwebp_QL75_.jpg", "10000", "Available", "WCD Tablet 2", "tablet"),
("iPad", "https://m.media-amazon.com/images/I/6162WMQWhVL._AC_UY218_SEARCH213888_FMwebp_QL75_.jpg", "10001", "Available", "WCD iPAD 1", "ipad"),
("iPad", "https://m.media-amazon.com/images/I/6162WMQWhVL._AC_UY218_SEARCH213888_FMwebp_QL75_.jpg", "10002", "Available", "WCD iPAD 2", "ipad"),
("iPad", "https://m.media-amazon.com/images/I/6162WMQWhVL._AC_UY218_SEARCH213888_FMwebp_QL75_.jpg", "10003", "Available", "WCD iPAD 4", "ipad"),
("Galaxy S9", "https://m.media-amazon.com/images/I/81+h9mpyQmL._AC_UL320_SEARCH213888_FMwebp_QL75_.jpg", "R25K31VW5K3", "Available", "WCD Android 9, Blue Glossy", "android"),
("Galaxy S10e", "https://m.media-amazon.com/images/I/5132X8MVZ2L._AC_UY218_SEARCH213888_FMwebp_QL75_.jpg", "SMG970U1ZBAX", "Available", "", "android"),
("Galaxy S10+", "https://m.media-amazon.com/images/I/61pJYa3506L._AC_UL320_SEARCH213888_FMwebp_QL75_.jpg", "SMG975U1ZKAX", "Available", "", "android"),
("Pixel 2", "https://m.media-amazon.com/images/I/71CDE9pG4hL._AC_UY218_SEARCH213888_FMwebp_QL75_.jpg", "10004", "Available", "WCD Android 7, Black Matte", "android"),
("Pixel 3 XL", "https://m.media-amazon.com/images/I/814bCP5oOsL._AC_UY218_SEARCH213888_FMwebp_QL75_.jpg", "10005", "Available", "Boxed, left inside the drawer", "android"),
("iPhone", "https://m.media-amazon.com/images/I/61+fbdrjtCL._AC_UY218_SEARCH213888_FMwebp_QL75_.jpg", "10006", "Available", "WCD iPhone 5", "ios"),
("iPhone 7", "https://m.media-amazon.com/images/I/61rIZ32kqEL._AC_UY218_SEARCH213888_FMwebp_QL75_.jpg","A1778", "Available", "WCD iPhone 2, Pink Matte", "ios"),
("iPhone 7", "https://m.media-amazon.com/images/I/61+fbdrjtCL._AC_UY218_SEARCH213888_FMwebp_QL75_.jpg", "A1660", "Available", "WCD iPhone 3", "ios"),
("iPhone 8", "https://m.media-amazon.com/images/I/61UYEl6lfKL._AC_UY218_SEARCH213888_FMwebp_QL75_.jpg", "10007", "Available", "No label, Black Glass", "ios"),
("iPhone XS Max", "https://m.media-amazon.com/images/I/71LNnMEDMyL._AC_SX200_SY200_.jpg", "FFWXRF81KPHC", "Available", "No label, Black Glass", "ios"),
("iPhone XR", "https://m.media-amazon.com/images/I/51sztXPLUyL._AC_UL320_SEARCH213888_FMwebp_QL75_.jpg", "G0NXW0L7KXKT", "Available", "No label, Orange Matte", "ios");
