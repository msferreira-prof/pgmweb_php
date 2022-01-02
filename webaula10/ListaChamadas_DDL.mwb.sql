-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema lista_chamadas
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `lista_chamadas` ;

-- -----------------------------------------------------
-- Schema lista_chamadas
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `lista_chamadas` DEFAULT CHARACTER SET utf8 ;
USE `lista_chamadas` ;

-- -----------------------------------------------------
-- Table `lista_chamadas`.`professores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lista_chamadas`.`professores` (
  `matricula` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`matricula`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lista_chamadas`.`turmas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lista_chamadas`.`turmas` (
  `codigo` CHAR(3) NOT NULL,
  `serie` CHAR(10) NOT NULL,
  `sala` INT NOT NULL,
  `hora_inicial` TIME NOT NULL,
  `hora_final` TIME NOT NULL,
  `professores_matricula` INT NOT NULL,
  PRIMARY KEY (`codigo`),
  CONSTRAINT `fk_turmas_professores`
    FOREIGN KEY (`professores_matricula`)
    REFERENCES `lista_chamadas`.`professores` (`matricula`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lista_chamadas`.`alunos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lista_chamadas`.`alunos` (
  `matricula` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(50) NOT NULL,
  `turmas_codigo` CHAR(3) NOT NULL,
  PRIMARY KEY (`matricula`, `turmas_codigo`),
  INDEX `fk_alunos_turmas1_idx` (`turmas_codigo` ASC),
  CONSTRAINT `fk_alunos_turmas1`
    FOREIGN KEY (`turmas_codigo`)
    REFERENCES `lista_chamadas`.`turmas` (`codigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
