-- MySQL Script generated by MySQL Workbench
-- Tue May 31 09:39:16 2022
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema world_happiness
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema world_happiness
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `world_happiness` DEFAULT CHARACTER SET utf8 ;
USE `world_happiness` ;




-- -----------------------------------------------------
-- Table `world_happiness`.`regions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `world_happiness`.`regions` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `region` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `world_happiness`.`countries`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `world_happiness`.`countries` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `country` VARCHAR(45) NOT NULL,
  `regions_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_countries_regions1_idx` (`regions_id` ASC) VISIBLE,
  CONSTRAINT `fk_countries_regions1`
    FOREIGN KEY (`regions_id`)
    REFERENCES `world_happiness`.`regions` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `world_happiness`.`values`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `world_happiness`.`values` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `value` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `world_happiness`.`years`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `world_happiness`.`years` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `year` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `world_happiness`.`countries_has_years`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `world_happiness`.`countries_has_years` (
  `countries_id` INT NOT NULL,
  `years_id` INT NOT NULL,
  `happiness_score` INT NOT NULL,
  `happiness_rank` INT NOT NULL,
  `health` INT NOT NULL,
  PRIMARY KEY (`countries_id`, `years_id`),
  INDEX `fk_countries_has_years_years1_idx` (`years_id` ASC) VISIBLE,
  INDEX `fk_countries_has_years_countries1_idx` (`countries_id` ASC) VISIBLE,
  INDEX `fk_countries_has_years_values1_idx` (`happiness_score` ASC) VISIBLE,
  INDEX `fk_countries_has_years_values2_idx` (`happiness_rank` ASC) VISIBLE,
  INDEX `fk_countries_has_years_values3_idx` (`health` ASC) VISIBLE,
  CONSTRAINT `fk_countries_has_years_countries1`
    FOREIGN KEY (`countries_id`)
    REFERENCES `world_happiness`.`countries` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_countries_has_years_years1`
    FOREIGN KEY (`years_id`)
    REFERENCES `world_happiness`.`years` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_countries_has_years_values1`
    FOREIGN KEY (`happiness_score`)
    REFERENCES `world_happiness`.`values` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_countries_has_years_values2`
    FOREIGN KEY (`happiness_rank`)
    REFERENCES `world_happiness`.`values` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_countries_has_years_values3`
    FOREIGN KEY (`health`)
    REFERENCES `world_happiness`.`values` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
