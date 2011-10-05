
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- Cliente
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `Cliente`;

CREATE TABLE `Cliente`
(
	`id` INTEGER NOT NULL AUTO_INCREMENT,
	`nome` TEXT,
	`cognome` TEXT,
	`email` TEXT,
	`username` TEXT,
	`password` VARCHAR(40),
	PRIMARY KEY (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- Dipendenti
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `Dipendenti`;

CREATE TABLE `Dipendenti`
(
	`id` INTEGER NOT NULL AUTO_INCREMENT,
	`nome` TEXT,
	`cognome` TEXT,
	`email` TEXT,
	`username` TEXT,
	`password` VARCHAR(40),
	PRIMARY KEY (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- Ticket
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `Ticket`;

CREATE TABLE `Ticket`
(
	`id` INTEGER NOT NULL AUTO_INCREMENT,
	`Area_id` INTEGER NOT NULL,
	`Cliente_id` INTEGER NOT NULL,
	`nomeReferente` TEXT,
	`emailRiferimento` TEXT,
	`stato` DOUBLE,
	PRIMARY KEY (`id`),
	INDEX `FI__08` (`Cliente_id`),
	INDEX `FI__09` (`Area_id`),
	CONSTRAINT `Rel_08`
		FOREIGN KEY (`Cliente_id`)
		REFERENCES `Cliente` (`id`),
	CONSTRAINT `Rel_09`
		FOREIGN KEY (`Area_id`)
		REFERENCES `Area` (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- Area
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `Area`;

CREATE TABLE `Area`
(
	`id` INTEGER NOT NULL AUTO_INCREMENT,
	`nome` TEXT,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- Messaggio
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `Messaggio`;

CREATE TABLE `Messaggio`
(
	`id` INTEGER NOT NULL AUTO_INCREMENT,
	`Ticket_id` INTEGER NOT NULL,
	`titolo` TEXT,
	`testo` TEXT,
	PRIMARY KEY (`id`),
	INDEX `FI__07` (`Ticket_id`),
	CONSTRAINT `Rel_07`
		FOREIGN KEY (`Ticket_id`)
		REFERENCES `Ticket` (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- AreaCliente
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `AreaCliente`;

CREATE TABLE `AreaCliente`
(
	`Cliente_id` INTEGER NOT NULL,
	`Area_id` INTEGER NOT NULL,
	PRIMARY KEY (`Cliente_id`,`Area_id`),
	INDEX `FI__02` (`Area_id`),
	CONSTRAINT `Rel_01`
		FOREIGN KEY (`Cliente_id`)
		REFERENCES `Cliente` (`id`),
	CONSTRAINT `Rel_02`
		FOREIGN KEY (`Area_id`)
		REFERENCES `Area` (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- AreaDipendente
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `AreaDipendente`;

CREATE TABLE `AreaDipendente`
(
	`Dipendenti_id` INTEGER NOT NULL,
	`Area_id` INTEGER NOT NULL,
	PRIMARY KEY (`Dipendenti_id`,`Area_id`),
	INDEX `FI__06` (`Area_id`),
	CONSTRAINT `Rel_05`
		FOREIGN KEY (`Dipendenti_id`)
		REFERENCES `Dipendenti` (`id`),
	CONSTRAINT `Rel_06`
		FOREIGN KEY (`Area_id`)
		REFERENCES `Area` (`id`)
) ENGINE=MyISAM;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
