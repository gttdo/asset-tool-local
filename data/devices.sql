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
("Macbook Pro", "https://m.media-amazon.com/images/I/31fD+NPpVqL._AC_UY436_FMwebp_QL65_.jpg", "C02TNIFCGTF1", "Available", "no notes", "laptop"),
("Macbook Air", "https://m.media-amazon.com/images/I/61UgnK1eN0L._AC_UY436_FMwebp_QL65_.jpg", "CO2KVCX7F6T6", "Available", "no notes", "laptop"),
("Macbook Pro", "https://m.media-amazon.com/images/I/31fD+NPpVqL._AC_UY436_FMwebp_QL65_.jpg", "C02PM70ZG3QC", "Available", "no notes", "laptop"),
("Macbook Pro", "https://m.media-amazon.com/images/I/31fD+NPpVqL._AC_UY436_FMwebp_QL65_.jpg", "C02HQ152DV7N", "Available", "no notes", "laptop"),
("Macbook Pro", "https://m.media-amazon.com/images/I/31fD+NPpVqL._AC_UY436_FMwebp_QL65_.jpg", "C02HV1PTFLG4", "Available", "no notes", "laptop"),
("Macbook Pro", "https://m.media-amazon.com/images/I/31fD+NPpVqL._AC_UY436_FMwebp_QL65_.jpg", "W80140UF64C", "Available", "no notes", "laptop"),
("Macbook Pro", "https://m.media-amazon.com/images/I/31fD+NPpVqL._AC_UY436_FMwebp_QL65_.jpg", "C02FV2CWDF91", "Available", "no notes", "laptop"),
("Asus", "https://m.media-amazon.com/images/I/6167WYHLHiL._AC_UY436_FMwebp_QL65_.jpg", "B12345", "Available", "no notes", "laptop"),
("Dell", "https://m.media-amazon.com/images/I/41yH82J80wL._AC_UY436_FMwebp_QL65_.jpg", "TP9R362", "Available", "no notes", "laptop"),
("Nexus", "https://m.media-amazon.com/images/I/418KVzHTenL._AC_UL320_SEARCH213888_FMwebp_QL75_.jpg", "10000", "Not Available", "WCD Tablet 2, Not Charged", "tablet"),
("iPad", "https://m.media-amazon.com/images/I/6162WMQWhVL._AC_UY218_SEARCH213888_FMwebp_QL75_.jpg", "10001", "Not Available", "WCD iPAD 1, Not Charged", "tablet"),
("iPad", "https://m.media-amazon.com/images/I/6162WMQWhVL._AC_UY218_SEARCH213888_FMwebp_QL75_.jpg", "10002", "Not Available", "WCD iPAD 2, Not Charged", "tablet"),
("iPad", "https://m.media-amazon.com/images/I/6162WMQWhVL._AC_UY218_SEARCH213888_FMwebp_QL75_.jpg", "10003", "Not Available", "WCD iPAD 4 Not Charged", "tablet"),
("Galaxy S9", "https://m.media-amazon.com/images/I/81+h9mpyQmL._AC_UL320_SEARCH213888_FMwebp_QL75_.jpg", "R25K31VW5K3", "Available", "WCD Android 9, Charged, Blue Glossy", "mobile"),
("Galaxy S10e", "https://m.media-amazon.com/images/I/5132X8MVZ2L._AC_UY218_SEARCH213888_FMwebp_QL75_.jpg", "SMG970U1ZBAX", "Available", "Charging", "mobile"),
("Galaxy S10+", "https://m.media-amazon.com/images/I/61pJYa3506L._AC_UL320_SEARCH213888_FMwebp_QL75_.jpg", "SMG975U1ZKAX", "Available", "Charging", "mobile"),
("Pixel 2", "https://m.media-amazon.com/images/I/71CDE9pG4hL._AC_UY218_SEARCH213888_FMwebp_QL75_.jpg", "10004", "Available", "WCD Android 7, Charged, Black Matte", "mobile"),
("Pixel 3 XL", "https://m.media-amazon.com/images/I/814bCP5oOsL._AC_UY218_SEARCH213888_FMwebp_QL75_.jpg", "10005", "Available", "Boxed, left inside the drawer", "mobile"),
("iPhone", "https://m.media-amazon.com/images/I/61+fbdrjtCL._AC_UY218_SEARCH213888_FMwebp_QL75_.jpg", "10006", "Available", "WCD iPhone 5, Charging", "mobile"),
("iPhone 7", "https://m.media-amazon.com/images/I/61rIZ32kqEL._AC_UY218_SEARCH213888_FMwebp_QL75_.jpg","A1778", "Not Available", "WCD iPhone 2, Not Charged, Pink Matte", "mobile"),
("iPhone 7", "https://m.media-amazon.com/images/I/61+fbdrjtCL._AC_UY218_SEARCH213888_FMwebp_QL75_.jpg", "A1660", "Not Available", "WCD iPhone 3, Charging", "mobile"),
("iPhone 8", "https://m.media-amazon.com/images/I/61UYEl6lfKL._AC_UY218_SEARCH213888_FMwebp_QL75_.jpg", "10007", "Not Available", "No label, Black Glass, Not Charged", "mobile"),
("iPhone XS Max", "https://m.media-amazon.com/images/I/71LNnMEDMyL._AC_SX200_SY200_.jpg", "FFWXRF81KPHC", "Not Available", "No label, Black Glass, Not Charged", "mobile"),
("iPhone XR", "https://m.media-amazon.com/images/I/51sztXPLUyL._AC_UL320_SEARCH213888_FMwebp_QL75_.jpg", "G0NXW0L7KXKT", "Not Available", "No label, Not Charged, Orange Matte", "mobile");
