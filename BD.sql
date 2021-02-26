-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.21 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para burnout
DROP DATABASE IF EXISTS `burnout`;
CREATE DATABASE IF NOT EXISTS `burnout` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `burnout`;

-- Volcando estructura para tabla burnout.burnout
DROP TABLE IF EXISTS `burnout`;
CREATE TABLE IF NOT EXISTS `burnout` (
  `O1` int NOT NULL,
  `O2` int NOT NULL,
  `O3` int NOT NULL,
  `O4` int NOT NULL,
  `O5` int NOT NULL,
  `O6` int NOT NULL,
  `O7` int NOT NULL,
  `O8` int NOT NULL,
  `O9` int NOT NULL,
  `O10` int NOT NULL,
  `O11` int NOT NULL,
  `O12` int NOT NULL,
  `O13` int NOT NULL,
  `O14` int NOT NULL,
  `O15` int NOT NULL,
  `O16` int NOT NULL,
  `consentimiento_folio` int NOT NULL,
  PRIMARY KEY (`consentimiento_folio`),
  CONSTRAINT `fk_burnout_consentimiento1` FOREIGN KEY (`consentimiento_folio`) REFERENCES `consentimiento` (`folio`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla burnout.confusoras
DROP TABLE IF EXISTS `confusoras`;
CREATE TABLE IF NOT EXISTS `confusoras` (
  `G6` int NOT NULL,
  `G7` int NOT NULL,
  `G8` int NOT NULL,
  `G9` int NOT NULL,
  `G10` int NOT NULL,
  `EPL14_1` varchar(10) NOT NULL,
  `EPL14_2` varchar(10) NOT NULL,
  `EPL13` int NOT NULL,
  `G4` int NOT NULL,
  `G5` int NOT NULL,
  `EPL15` int NOT NULL,
  `G1` int NOT NULL,
  `G2` int NOT NULL,
  `G3` int NOT NULL,
  `G11` int NOT NULL,
  `G12` int NOT NULL,
  `G13` int NOT NULL,
  `consentimiento_folio` int NOT NULL,
  PRIMARY KEY (`consentimiento_folio`),
  CONSTRAINT `fk_confusoras_consentimiento1` FOREIGN KEY (`consentimiento_folio`) REFERENCES `consentimiento` (`folio`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla burnout.consentimiento
DROP TABLE IF EXISTS `consentimiento`;
CREATE TABLE IF NOT EXISTS `consentimiento` (
  `fecha` date NOT NULL,
  `folio` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`folio`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla burnout.exigencia
DROP TABLE IF EXISTS `exigencia`;
CREATE TABLE IF NOT EXISTS `exigencia` (
  `EPL1` int NOT NULL,
  `EPL2` int NOT NULL,
  `EPL3` int NOT NULL,
  `EPL4` int NOT NULL,
  `EPL5` int NOT NULL,
  `EPL6` int NOT NULL,
  `EPL7` int NOT NULL,
  `EPL8` int NOT NULL,
  `EPL9` int NOT NULL,
  `EPL10` int NOT NULL,
  `EPL11` int NOT NULL,
  `EPL12` int NOT NULL,
  `consentimiento_folio` int NOT NULL,
  PRIMARY KEY (`consentimiento_folio`),
  CONSTRAINT `fk_exigencia_consentimiento` FOREIGN KEY (`consentimiento_folio`) REFERENCES `consentimiento` (`folio`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla burnout.gwestres
DROP TABLE IF EXISTS `gwestres`;
CREATE TABLE IF NOT EXISTS `gwestres` (
  `E1` int NOT NULL,
  `E2` int NOT NULL,
  `E3` int NOT NULL,
  `E4` int NOT NULL,
  `E5` int NOT NULL,
  `E6` int NOT NULL,
  `E7` int NOT NULL,
  `E8` int NOT NULL,
  `E9` int NOT NULL,
  `consentimiento_folio` int NOT NULL,
  PRIMARY KEY (`consentimiento_folio`),
  CONSTRAINT `fk_gwestres_consentimiento1` FOREIGN KEY (`consentimiento_folio`) REFERENCES `consentimiento` (`folio`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla burnout.iac
DROP TABLE IF EXISTS `iac`;
CREATE TABLE IF NOT EXISTS `iac` (
  `C1` int NOT NULL,
  `C2` int NOT NULL,
  `C3` int NOT NULL,
  `C4` int NOT NULL,
  `C5` int NOT NULL,
  `C6` int NOT NULL,
  `C7` int NOT NULL,
  `C8` int NOT NULL,
  `C9` int NOT NULL,
  `C10` int NOT NULL,
  `C11` int NOT NULL,
  `C12` int NOT NULL,
  `C13` int NOT NULL,
  `C14` int NOT NULL,
  `C15` int NOT NULL,
  `C16` int NOT NULL,
  `C17` int NOT NULL,
  `C18` int NOT NULL,
  `C19` int NOT NULL,
  `consentimiento_folio` int NOT NULL,
  PRIMARY KEY (`consentimiento_folio`),
  CONSTRAINT `fk_iac_consentimiento1` FOREIGN KEY (`consentimiento_folio`) REFERENCES `consentimiento` (`folio`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla burnout.personalidad
DROP TABLE IF EXISTS `personalidad`;
CREATE TABLE IF NOT EXISTS `personalidad` (
  `P1` int NOT NULL,
  `P2` int NOT NULL,
  `P3` int NOT NULL,
  `P4` int NOT NULL,
  `P5` int NOT NULL,
  `P6` int NOT NULL,
  `P7` int NOT NULL,
  `P8` int NOT NULL,
  `P9` int NOT NULL,
  `P10` int NOT NULL,
  `P11` int NOT NULL,
  `P12` int NOT NULL,
  `P13` int NOT NULL,
  `P14` int NOT NULL,
  `P15` int NOT NULL,
  `P16` int NOT NULL,
  `P17` int NOT NULL,
  `P18` int NOT NULL,
  `P19` int NOT NULL,
  `P20` int NOT NULL,
  `P21` int NOT NULL,
  `P22` int NOT NULL,
  `P23` int NOT NULL,
  `P24` int NOT NULL,
  `consentimiento_folio` int NOT NULL,
  PRIMARY KEY (`consentimiento_folio`),
  CONSTRAINT `fk_personalidad_consentimiento1` FOREIGN KEY (`consentimiento_folio`) REFERENCES `consentimiento` (`folio`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- La exportación de datos fue deseleccionada.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
