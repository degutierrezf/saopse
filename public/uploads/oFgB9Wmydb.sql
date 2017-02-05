-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`sp_concesiones`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`sp_concesiones` (
  `id_conc` INT NOT NULL AUTO_INCREMENT,
  `nombre_conc` VARCHAR(45) NULL,
  PRIMARY KEY (`id_conc`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`sp_ruta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`sp_ruta` (
  `id_ruta` INT NOT NULL AUTO_INCREMENT,
  `nombre_ruta` VARCHAR(45) NULL,
  `sp_concesiones_id_conc` INT NOT NULL,
  PRIMARY KEY (`id_ruta`, `sp_concesiones_id_conc`),
  INDEX `fk_sp_ruta_sp_concesiones_idx` (`sp_concesiones_id_conc` ASC),
  CONSTRAINT `fk_sp_ruta_sp_concesiones`
    FOREIGN KEY (`sp_concesiones_id_conc`)
    REFERENCES `mydb`.`sp_concesiones` (`id_conc`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`sp_estados_inc`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`sp_estados_inc` (
  `id_estados` INT NOT NULL AUTO_INCREMENT,
  `estados` VARCHAR(45) NULL,
  PRIMARY KEY (`id_estados`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`sp_incidentes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`sp_incidentes` (
  `id_incidentes` INT NOT NULL AUTO_INCREMENT,
  `folio` INT NULL,
  `fecha` DATE NULL,
  `hora` TIME(1) NULL,
  `pk1` VARCHAR(10) NULL,
  `pk2` VARCHAR(10) NULL,
  `calzada` VARCHAR(45) NULL,
  `direccion` VARCHAR(45) NULL,
  `tipo` VARCHAR(45) NULL,
  `descripcion` VARCHAR(45) NULL,
  `nota` VARCHAR(45) NULL,
  `dannos` VARCHAR(2) NULL,
  `sp_ruta_id_ruta` INT NOT NULL,
  `sp_estados_inc_id_estados` INT NOT NULL,
  PRIMARY KEY (`id_incidentes`, `sp_ruta_id_ruta`, `sp_estados_inc_id_estados`),
  INDEX `fk_sp_incidentes_sp_ruta1_idx` (`sp_ruta_id_ruta` ASC),
  INDEX `fk_sp_incidentes_sp_estados_inc1_idx` (`sp_estados_inc_id_estados` ASC),
  CONSTRAINT `fk_sp_incidentes_sp_ruta1`
    FOREIGN KEY (`sp_ruta_id_ruta`)
    REFERENCES `mydb`.`sp_ruta` (`id_ruta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_sp_incidentes_sp_estados_inc1`
    FOREIGN KEY (`sp_estados_inc_id_estados`)
    REFERENCES `mydb`.`sp_estados_inc` (`id_estados`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`sp_aseguradoras`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`sp_aseguradoras` (
  `id_aseguradora` INT NOT NULL AUTO_INCREMENT,
  `nombre_aseg` VARCHAR(45) NULL,
  `nombre_contacto` VARCHAR(45) NULL,
  `fono_contacto` VARCHAR(15) NULL,
  `correo_contacto` VARCHAR(35) NULL,
  PRIMARY KEY (`id_aseguradora`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`sp_veh_inc`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`sp_veh_inc` (
  `id_veh_inc` INT NOT NULL AUTO_INCREMENT,
  `marca` VARCHAR(20) NULL,
  `modelo` VARCHAR(20) NULL,
  `placa` VARCHAR(10) NULL,
  `propietario` VARCHAR(45) NULL,
  `rut_prop` VARCHAR(12) NULL,
  `direccion` VARCHAR(45) NULL,
  `comuna` VARCHAR(25) NULL,
  `fono` VARCHAR(15) NULL,
  `celular` VARCHAR(15) NULL,
  `correo` VARCHAR(35) NULL,
  `num_poliza` VARCHAR(30) NULL,
  `danno_vehiculo` VARCHAR(2) NULL,
  `dannos_v` VARCHAR(200) NULL,
  `sp_aseguradoras_id_aseguradora` INT NOT NULL,
  `sp_incidentes_id_incidentes` INT NOT NULL,
  PRIMARY KEY (`id_veh_inc`, `sp_aseguradoras_id_aseguradora`, `sp_incidentes_id_incidentes`),
  INDEX `fk_sp_veh_inc_sp_aseguradoras1_idx` (`sp_aseguradoras_id_aseguradora` ASC),
  INDEX `fk_sp_veh_inc_sp_incidentes1_idx` (`sp_incidentes_id_incidentes` ASC),
  CONSTRAINT `fk_sp_veh_inc_sp_aseguradoras1`
    FOREIGN KEY (`sp_aseguradoras_id_aseguradora`)
    REFERENCES `mydb`.`sp_aseguradoras` (`id_aseguradora`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_sp_veh_inc_sp_incidentes1`
    FOREIGN KEY (`sp_incidentes_id_incidentes`)
    REFERENCES `mydb`.`sp_incidentes` (`id_incidentes`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`sp_doc_inc`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`sp_doc_inc` (
  `id_documento` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `tipo_doc` VARCHAR(45) NULL,
  `ruta` VARCHAR(200) NULL,
  `sp_incidentes_id_incidentes` INT NOT NULL,
  PRIMARY KEY (`id_documento`, `sp_incidentes_id_incidentes`),
  INDEX `fk_sp_doc_inc_sp_incidentes1_idx` (`sp_incidentes_id_incidentes` ASC),
  CONSTRAINT `fk_sp_doc_inc_sp_incidentes1`
    FOREIGN KEY (`sp_incidentes_id_incidentes`)
    REFERENCES `mydb`.`sp_incidentes` (`id_incidentes`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`sp_ft_inc`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`sp_ft_inc` (
  `id_foto` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `ruta` VARCHAR(200) NULL,
  `sp_incidentes_id_incidentes` INT NOT NULL,
  PRIMARY KEY (`id_foto`, `sp_incidentes_id_incidentes`),
  INDEX `fk_sp_ft_inc_sp_incidentes1_idx` (`sp_incidentes_id_incidentes` ASC),
  CONSTRAINT `fk_sp_ft_inc_sp_incidentes1`
    FOREIGN KEY (`sp_incidentes_id_incidentes`)
    REFERENCES `mydb`.`sp_incidentes` (`id_incidentes`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`sp_accidentes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`sp_accidentes` (
  `id_accidente` INT NOT NULL AUTO_INCREMENT,
  `fecha` DATE NULL,
  `hora` TIME(3) NULL,
  `pk1` VARCHAR(5) NULL,
  `pk2` VARCHAR(5) NULL,
  `r_o_t` INT NULL,
  `mag_1` INT NULL,
  `mag_2` INT NULL,
  `ct` INT NULL,
  `ct_ini` TIME(3) NULL,
  `ct_fin` TIME(3) NULL,
  `by_pass` VARCHAR(45) NULL,
  `sp_ruta_id_ruta` INT NOT NULL,
  `sp_estados_inc_id_estados` INT NOT NULL,
  PRIMARY KEY (`id_accidente`, `sp_ruta_id_ruta`, `sp_estados_inc_id_estados`),
  INDEX `fk_sp_accidentes_sp_ruta1_idx` (`sp_ruta_id_ruta` ASC),
  INDEX `fk_sp_accidentes_sp_estados_inc1_idx` (`sp_estados_inc_id_estados` ASC),
  CONSTRAINT `fk_sp_accidentes_sp_ruta1`
    FOREIGN KEY (`sp_ruta_id_ruta`)
    REFERENCES `mydb`.`sp_ruta` (`id_ruta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_sp_accidentes_sp_estados_inc1`
    FOREIGN KEY (`sp_estados_inc_id_estados`)
    REFERENCES `mydb`.`sp_estados_inc` (`id_estados`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`sp_gestiones_i`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`sp_gestiones_i` (
  `id_gestiones_i` INT NOT NULL AUTO_INCREMENT,
  `fecha` DATETIME NULL,
  `tipo_gestion` VARCHAR(15) NULL,
  `gestion` VARCHAR(200) NULL,
  `sp_incidentes_id_incidentes` INT NOT NULL,
  PRIMARY KEY (`id_gestiones_i`, `sp_incidentes_id_incidentes`),
  INDEX `fk_sp_gestiones_i_sp_incidentes1_idx` (`sp_incidentes_id_incidentes` ASC),
  CONSTRAINT `fk_sp_gestiones_i_sp_incidentes1`
    FOREIGN KEY (`sp_incidentes_id_incidentes`)
    REFERENCES `mydb`.`sp_incidentes` (`id_incidentes`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `mydb`.`sp_concesiones`
-- -----------------------------------------------------
START TRANSACTION;
USE `mydb`;
INSERT INTO `mydb`.`sp_concesiones` (`id_conc`, `nombre_conc`) VALUES (1, 'Concesión Valles del Biobío');

COMMIT;


-- -----------------------------------------------------
-- Data for table `mydb`.`sp_ruta`
-- -----------------------------------------------------
START TRANSACTION;
USE `mydb`;
INSERT INTO `mydb`.`sp_ruta` (`id_ruta`, `nombre_ruta`, `sp_concesiones_id_conc`) VALUES (1, 'Ruta Q-97-N', 1);
INSERT INTO `mydb`.`sp_ruta` (`id_ruta`, `nombre_ruta`, `sp_concesiones_id_conc`) VALUES (2, 'Ruta 146', 1);

COMMIT;


-- -----------------------------------------------------
-- Data for table `mydb`.`sp_estados_inc`
-- -----------------------------------------------------
START TRANSACTION;
USE `mydb`;
INSERT INTO `mydb`.`sp_estados_inc` (`id_estados`, `estados`) VALUES (1, 'Activo');
INSERT INTO `mydb`.`sp_estados_inc` (`id_estados`, `estados`) VALUES (2, 'Inactivo');

COMMIT;


-- -----------------------------------------------------
-- Data for table `mydb`.`sp_aseguradoras`
-- -----------------------------------------------------
START TRANSACTION;
USE `mydb`;
INSERT INTO `mydb`.`sp_aseguradoras` (`id_aseguradora`, `nombre_aseg`, `nombre_contacto`, `fono_contacto`, `correo_contacto`) VALUES (1, 'Prueba', 'Prueba', 'Prueba', 'Prueba');

COMMIT;

