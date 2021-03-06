CREATE TABLE `users` (
	`id` INT(5) NOT NULL AUTO_INCREMENT,
	`image` VARCHAR(255) NOT NULL,
	`name` VARCHAR(255) NOT NULL,
	`email` VARCHAR(255) NOT NULL,
	`passphrase` VARCHAR(255) NOT NULL,
	`signupDate` DATE,
	`isAdmin` TINYINT(1),
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

INSERT INTO `users` (image, name, email, passphrase, signupDate, isAdmin)
VALUES ("https://png.pngtree.com/svg/20170602/0db185fb9c.png", "Admin", "admin@admin.com", "password", "2019-09-30", 0),
("https://png.pngtree.com/svg/20170602/0db185fb9c.png", "Jane Doe", "someone@email.com", "password", "2019-09-30", 1),
("https://png.pngtree.com/svg/20170602/0db185fb9c.png", "John Doe", "somebody@email.com", "password", "2019-09-30", 0);
