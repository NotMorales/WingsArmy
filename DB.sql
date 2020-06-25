-- -----------------------------------------------------
-- Schema WingsArmy
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `WingsArmy` DEFAULT CHARACTER SET utf8 ;
USE `WingsArmy` ;

-- -----------------------------------------------------
-- Table `WingsArmy`.`mesero`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `WingsArmy`.`mesero` (
  `meseroId` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NOT NULL,
  `telefono` VARCHAR(15) NOT NULL,
  `correo` VARCHAR(100) NOT NULL,
  `direccion` VARCHAR(10) NOT NULL,
  `avatar` VARCHAR(255) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`meseroId`))
;


-- -----------------------------------------------------
-- Table `WingsArmy`.`mesa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `WingsArmy`.`mesa` (
  `mesaId` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NOT NULL,
  `descripcion` VARCHAR(100) NULL,
  `estado` INT NULL,
  `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`mesaId`))
;


-- -----------------------------------------------------
-- Table `WingsArmy`.`cola`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `WingsArmy`.`cola` (
  `colaId` INT NOT NULL AUTO_INCREMENT,
  `meseroId` INT NOT NULL,
  `posicion` INT NOT NULL,
  `contador` INT NULL,
  `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`colaId`),
  INDEX `meseroIdFK_cola_idx` (`meseroId` ASC),
  CONSTRAINT `meseroIdFK_cola`
    FOREIGN KEY (`meseroId`)
    REFERENCES `WingsArmy`.`mesero` (`meseroId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
;


-- -----------------------------------------------------
-- Table `WingsArmy`.`checador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `WingsArmy`.`checador` (
  `checadorId` INT NOT NULL AUTO_INCREMENT,
  `meseroId` INT NOT NULL,
  `fecha` DATE NOT NULL,
  `entrada` TIME NULL,
  `salida` TIME NULL,
  `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`checadorId`),
  INDEX `meseroIdFK_checador_idx` (`meseroId` ASC),
  CONSTRAINT `meseroIdFK_checador`
    FOREIGN KEY (`meseroId`)
    REFERENCES `WingsArmy`.`mesero` (`meseroId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
;


-- -----------------------------------------------------
-- Table `WingsArmy`.`asignacion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `WingsArmy`.`asignacion` (
  `asignacionId` INT NOT NULL AUTO_INCREMENT,
  `mesaId` INT NOT NULL,
  `meseroId` INT NOT NULL,
  `fecha` DATETIME NOT NULL,
  `total` DOUBLE NULL,
  `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`asignacionId`),
  INDEX `mesaIdFK_asignacion_idx` (`mesaId` ASC),
  INDEX `meseroIdFK_asignacion_idx` (`meseroId` ASC),
  CONSTRAINT `mesaIdFK_asignacion`
    FOREIGN KEY (`mesaId`)
    REFERENCES `WingsArmy`.`mesa` (`mesaId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `meseroIdFK_asignacion`
    FOREIGN KEY (`meseroId`)
    REFERENCES `WingsArmy`.`mesero` (`meseroId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
;
