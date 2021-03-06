SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `magazinedb` ;
CREATE SCHEMA IF NOT EXISTS `magazinedb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `magazinedb` ;

-- -----------------------------------------------------
-- Table `magazinedb`.`discipline`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `magazinedb`.`discipline` ;

CREATE TABLE IF NOT EXISTS `magazinedb`.`discipline` (
  `iddiscipline` INT NOT NULL AUTO_INCREMENT,
  `disciplineName` VARCHAR(100) NOT NULL,
  `description` VARCHAR(250) NULL,
  PRIMARY KEY (`iddiscipline`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `magazinedb`.`specialism`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `magazinedb`.`specialism` ;

CREATE TABLE IF NOT EXISTS `magazinedb`.`specialism` (
  `idspecialism` INT NOT NULL AUTO_INCREMENT,
  `specialismName` VARCHAR(100) NOT NULL,
  `description` VARCHAR(250) NULL,
  PRIMARY KEY (`idspecialism`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `magazinedb`.`subDiscipline`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `magazinedb`.`subDiscipline` ;

CREATE TABLE IF NOT EXISTS `magazinedb`.`subDiscipline` (
  `idsubDiscipline` INT NOT NULL AUTO_INCREMENT,
  `subdisciplineName` VARCHAR(100) NOT NULL,
  `description` VARCHAR(250) NULL,
  PRIMARY KEY (`idsubDiscipline`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `magazinedb`.`user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `magazinedb`.`user` ;

CREATE TABLE IF NOT EXISTS `magazinedb`.`user` (
  `iduser` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `lastname` VARCHAR(100) NOT NULL,
  `phone` VARCHAR(45) NOT NULL,
  `institution` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `academicGrade` VARCHAR(45) NOT NULL,
  `areaInterest` VARCHAR(45) NOT NULL,
  `sniLevel` VARCHAR(1) NOT NULL,
  `lastFiveArticles` LONGTEXT NOT NULL,
  `lastFiveResearch` LONGTEXT NOT NULL,
  `moreInformation` LONGTEXT NULL,
  `cv` VARCHAR(100) NOT NULL,
  `iddiscipline` INT NOT NULL,
  `idspecialism` INT NOT NULL,
  `idsubDiscipline` INT NOT NULL,
  `userName` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `status` INT(1) NULL DEFAULT 1 COMMENT '1 : es usuario activo\n0 : es usuario inactivo',
  `rol` INT(1) NULL DEFAULT 1 COMMENT '1 : autor\n2 : arbitro\n3 : editor\n4 : administrador',
  PRIMARY KEY (`iduser`),
  INDEX `fk_user_discipline_idx` (`iddiscipline` ASC),
  INDEX `fk_user_specialism1_idx` (`idspecialism` ASC),
  INDEX `fk_user_subDiscipline1_idx` (`idsubDiscipline` ASC),
  CONSTRAINT `fk_user_discipline`
    FOREIGN KEY (`iddiscipline`)
    REFERENCES `magazinedb`.`discipline` (`iddiscipline`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_user_specialism1`
    FOREIGN KEY (`idspecialism`)
    REFERENCES `magazinedb`.`specialism` (`idspecialism`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_user_subDiscipline1`
    FOREIGN KEY (`idsubDiscipline`)
    REFERENCES `magazinedb`.`subDiscipline` (`idsubDiscipline`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `magazinedb`.`magazine`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `magazinedb`.`magazine` ;

CREATE TABLE IF NOT EXISTS `magazinedb`.`magazine` (
  `idmagazine` INT NOT NULL AUTO_INCREMENT,
  `isbn` VARCHAR(45) NULL,
  `magazineNumber` VARCHAR(45) NULL,
  `mounth` VARCHAR(45) NULL,
  PRIMARY KEY (`idmagazine`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `magazinedb`.`article`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `magazinedb`.`article` ;

CREATE TABLE IF NOT EXISTS `magazinedb`.`article` (
  `idarticle` INT NOT NULL AUTO_INCREMENT,
  `articleName` TEXT NOT NULL,
  `articleBody` LONGTEXT NOT NULL,
  `status` INT(1) NOT NULL DEFAULT 1 COMMENT '1: activo\n2 : elimiando o inactivo\n3 : activo borrador',
  `idmagazine` INT NULL,
  `review1` INT(1) NULL,
  `review2` INT(1) NULL,
  PRIMARY KEY (`idarticle`),
  INDEX `fk_article_magazine1_idx` (`idmagazine` ASC),
  CONSTRAINT `fk_article_magazine1`
    FOREIGN KEY (`idmagazine`)
    REFERENCES `magazinedb`.`magazine` (`idmagazine`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `magazinedb`.`catalogue`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `magazinedb`.`catalogue` ;

CREATE TABLE IF NOT EXISTS `magazinedb`.`catalogue` (
  `iduser` INT NOT NULL,
  `idarticle` INT NOT NULL,
  `idcatalogue` INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idcatalogue`, `idarticle`, `iduser`),
  INDEX `fk_user_has_article_article1_idx` (`idarticle` ASC),
  INDEX `fk_user_has_article_user1_idx` (`iduser` ASC),
  CONSTRAINT `fk_user_has_article_user1`
    FOREIGN KEY (`iduser`)
    REFERENCES `magazinedb`.`user` (`iduser`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_user_has_article_article1`
    FOREIGN KEY (`idarticle`)
    REFERENCES `magazinedb`.`article` (`idarticle`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `magazinedb`.`article_has_user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `magazinedb`.`article_has_user` ;

CREATE TABLE IF NOT EXISTS `magazinedb`.`article_has_user` (
  `article_idarticle` INT NOT NULL,
  `user_iduser` INT NOT NULL,
  `idarticle_user` INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idarticle_user`, `article_idarticle`, `user_iduser`),
  INDEX `fk_article_has_user_user1_idx` (`user_iduser` ASC),
  INDEX `fk_article_has_user_article1_idx` (`article_idarticle` ASC),
  CONSTRAINT `fk_article_has_user_article1`
    FOREIGN KEY (`article_idarticle`)
    REFERENCES `magazinedb`.`article` (`idarticle`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_article_has_user_user1`
    FOREIGN KEY (`user_iduser`)
    REFERENCES `magazinedb`.`user` (`iduser`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
