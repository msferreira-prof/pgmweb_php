-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema academia
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema academia
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `academia` DEFAULT CHARACTER SET utf8 ;
USE `academia` ;

-- -----------------------------------------------------
-- Table `academia`.`alunos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `academia`.`alunos` (
  `matricula` INT(6) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(70) NOT NULL,
  `endereco` VARCHAR(100) NOT NULL,
  `telefone` VARCHAR(13) NOT NULL,
  `data_nascimento` DATE NOT NULL,
  `peso` FLOAT NOT NULL,
  `altura` FLOAT NOT NULL,
  PRIMARY KEY (`matricula`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `academia`.`atividades`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `academia`.`atividades` (
  `codigo` INT(11) NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`codigo`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `academia`.`instrutores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `academia`.`instrutores` (
  `rg` CHAR(12) NOT NULL,
  `nome` VARCHAR(70) NOT NULL,
  `data_nascimento` DATE NOT NULL,
  `titulacao` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`rg`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `academia`.`telefones_instrutor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `academia`.`telefones_instrutor` (
  `instrutor_rg` CHAR(12) NOT NULL,
  `id_telefone` INT(11) NOT NULL AUTO_INCREMENT,
  `telefone` VARCHAR(13) NOT NULL,
  PRIMARY KEY (`id_telefone`, `instrutor_rg`),
  CONSTRAINT `fk_table1_instrutor1`
    FOREIGN KEY (`instrutor_rg`)
    REFERENCES `academia`.`instrutores` (`rg`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE INDEX `fk_table1_instrutor1_idx` ON `academia`.`telefones_instrutor` (`instrutor_rg` ASC);


-- -----------------------------------------------------
-- Table `academia`.`turmas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `academia`.`turmas` (
  `numero` CHAR(3) NOT NULL,
  `horario` TIME NOT NULL,
  `data_inicial` DATE NOT NULL,
  `data_final` DATE NOT NULL,
  `qtd_alunos` INT(11) NOT NULL,
  `atividades_codigo` INT(11) NOT NULL,
  `instrutores_rg` CHAR(12) NOT NULL,
  PRIMARY KEY (`numero`),
  CONSTRAINT `fk_turmas_atividades1`
    FOREIGN KEY (`atividades_codigo`)
    REFERENCES `academia`.`atividades` (`codigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_turmas_instrutores1`
    FOREIGN KEY (`instrutores_rg`)
    REFERENCES `academia`.`instrutores` (`rg`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE INDEX `fk_turmas_atividades1_idx` ON `academia`.`turmas` (`atividades_codigo` ASC);

CREATE INDEX `fk_turmas_instrutores1_idx` ON `academia`.`turmas` (`instrutores_rg` ASC);


-- -----------------------------------------------------
-- Table `academia`.`turmas_alunos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `academia`.`turmas_alunos` (
  `turmas_numero` CHAR(3) NOT NULL,
  `alunos_matricula` INT(6) NOT NULL,
  `data_matricula` DATE NOT NULL,
  `qtd_ausencias` INT(3) NOT NULL DEFAULT 0,
  `monitor` CHAR(1) NOT NULL DEFAULT 'N',
  PRIMARY KEY (`turmas_numero`, `alunos_matricula`),
  CONSTRAINT `fk_turmas_has_alunos_alunos1`
    FOREIGN KEY (`alunos_matricula`)
    REFERENCES `academia`.`alunos` (`matricula`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_turmas_has_alunos_turmas1`
    FOREIGN KEY (`turmas_numero`)
    REFERENCES `academia`.`turmas` (`numero`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE INDEX `fk_turmas_has_alunos_alunos1_idx` ON `academia`.`turmas_alunos` (`alunos_matricula` ASC);

CREATE INDEX `fk_turmas_has_alunos_turmas1_idx` ON `academia`.`turmas_alunos` (`turmas_numero` ASC);


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
