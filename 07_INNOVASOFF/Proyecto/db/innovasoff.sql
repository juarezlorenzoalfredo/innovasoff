-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-04-2019 a las 04:06:40
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `innovasoff`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_AddAcercaDe` (IN `titulo` VARCHAR(100), `informacion` VARCHAR(350))  BEGIN
   DECLARE EXIT HANDLER FOR SQLEXCEPTION 
                BEGIN
                    SHOW ERRORS LIMIT 1;
                    RESIGNAL;
                    ROLLBACK;
				END;
             DECLARE EXIT HANDLER FOR SQLWARNING 
                BEGIN
                    SHOW WARNINGS LIMIT 1;
                    RESIGNAL;
                    ROLLBACK;
				END;
	START TRANSACTION;
    
    
	IF TRIM(titulo) ="" THEN SELECT "Campo vacío";
		ELSE 
	IF TRIM(informacion) ="" THEN SELECT "Campo vacío";
		ELSE 
			INSERT INTO acercaDe VALUES(null, titulo, informacion);
            SELECT ("Agregado con exito");  
		END IF;
        END IF;
	COMMIT;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_AddDudas` (IN `nombre` VARCHAR(30), `email` VARCHAR(50), `asunto` VARCHAR(50), `mensaje` VARCHAR(350))  BEGIN
   DECLARE EXIT HANDLER FOR SQLEXCEPTION 
                BEGIN
                    SHOW ERRORS LIMIT 1;
                    RESIGNAL;
                    ROLLBACK;
				END;

             DECLARE EXIT HANDLER FOR SQLWARNING 
                BEGIN
                    SHOW WARNINGS LIMIT 1;
                    RESIGNAL;
                    ROLLBACK;
				END;
                
	START TRANSACTION;
    
	IF TRIM(nombre) ="" THEN SELECT "Campo vacío";
		ELSE 
        IF TRIM(email) ="" THEN SELECT "Campo vacío";
		ELSE 
        IF TRIM(asunto) ="" THEN SELECT "Campo vacío";
		ELSE 
        IF TRIM(mensaje) ="" THEN SELECT "Campo vacío";
		ELSE 
       
			INSERT INTO dudas VALUES(null, nombre, email, asunto, mensaje);
            SELECT ("Se agrego exitosamente");  
            
		END IF;
        END IF;
        END IF;
        END IF;
        
	COMMIT;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_AddFaq` (IN `nombre` VARCHAR(100), `url` VARCHAR(250), `descripcion` VARCHAR(350))  BEGIN
	
   DECLARE EXIT HANDLER FOR SQLEXCEPTION 
                BEGIN
                    SHOW ERRORS LIMIT 1;
                    RESIGNAL;
                    ROLLBACK;
				END;

             DECLARE EXIT HANDLER FOR SQLWARNING 
                BEGIN
                    SHOW WARNINGS LIMIT 1;
                    RESIGNAL;
                    ROLLBACK;
				END;
                
	START TRANSACTION;
    
	IF TRIM(nombre) ="" THEN SELECT "Campo vacío";
		ELSE 
        IF TRIM(url) ="" THEN SELECT "Campo vacío";
		ELSE 
        IF TRIM(descripcion) ="" THEN SELECT "Campo vacío";
		ELSE 
        
			INSERT INTO faq VALUES(null, nombre, url, descripcion);
            SELECT ("Se agrego exitosamente");  
            
		END IF;
        END IF;
        END IF;
        
	COMMIT;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_AddGaleria` (IN `nombre` VARCHAR(100), `url` VARCHAR(250), `descripcion` VARCHAR(350))  BEGIN
	
   DECLARE EXIT HANDLER FOR SQLEXCEPTION 
                BEGIN
                    SHOW ERRORS LIMIT 1;
                    RESIGNAL;
                    ROLLBACK;
				END;

             DECLARE EXIT HANDLER FOR SQLWARNING 
                BEGIN
                    SHOW WARNINGS LIMIT 1;
                    RESIGNAL;
                    ROLLBACK;
				END;
                
	START TRANSACTION;
    
	IF TRIM(nombre) ="" THEN SELECT "Campo vacío";
		ELSE 
        IF TRIM(url) ="" THEN SELECT "Campo vacío";
		ELSE 
        IF TRIM(descripcion) ="" THEN SELECT "Campo vacío";
		ELSE 
       
			INSERT INTO galeria VALUES(null, nombre, url, descripcion);
            SELECT ("Se agrego exitosamente");  
            
		END IF;
        END IF;
        END IF;
     
	COMMIT;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_AddUsuarios` (IN `nombre` VARCHAR(30), `telefono` VARCHAR(20), `email` VARCHAR(35), `password` VARCHAR(50), `privilegios` VARCHAR(15))  BEGIN
	
   DECLARE EXIT HANDLER FOR SQLEXCEPTION 
                BEGIN
                    SHOW ERRORS LIMIT 1;
                    RESIGNAL;
                    ROLLBACK;
				END;

             DECLARE EXIT HANDLER FOR SQLWARNING 
                BEGIN
                    SHOW WARNINGS LIMIT 1;
                    RESIGNAL;
                    ROLLBACK;
				END;
                
	START TRANSACTION;
    
	IF TRIM(nombre) ="" THEN SELECT "Campo vacío";
		ELSE 
        IF TRIM(telefono) ="" THEN SELECT "Campo vacío";
		ELSE 
        IF TRIM(email) ="" THEN SELECT "Campo vacío";
		ELSE 
        IF TRIM(password) ="" THEN SELECT "Campo vacío";
		ELSE 
        IF TRIM(privilegios) ="" THEN SELECT "Campo vacío";
		ELSE 
        
			INSERT INTO usuarios VALUES(null, nombre, telefono, email, password,privilegios);
            SELECT ("Se agrego exitosamente");  
            
		END IF;
        END IF;
        END IF;
        END IF;
		END IF;
	
	COMMIT;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_DelAcercaDe` (IN `idAcercaDeD` INT)  BEGIN   
            DECLARE EXIT HANDLER FOR SQLEXCEPTION 
                BEGIN
                    SHOW ERRORS LIMIT 1;
                    RESIGNAL;
                    ROLLBACK;
				END;
             DECLARE EXIT HANDLER FOR SQLWARNING 
                BEGIN
                    SHOW WARNINGS LIMIT 1;
                    RESIGNAL;
                    ROLLBACK;
				END;
    START TRANSACTION ;
           DELETE FROM acercaDe WHERE idAcercaDe=idAcercaDeD;
            SELECT ("Eliminado con exito");  
        COMMIT;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_DelDudas` (IN `idDudasD` INT)  BEGIN   
			DECLARE EXIT HANDLER FOR SQLEXCEPTION 
                BEGIN
                    SHOW ERRORS LIMIT 1;
                    RESIGNAL;
                    ROLLBACK;
				END;

             DECLARE EXIT HANDLER FOR SQLWARNING 
                BEGIN
                    SHOW WARNINGS LIMIT 1;
                    RESIGNAL;
                    ROLLBACK;
				END;
    
    START TRANSACTION ;
        
           DELETE FROM dudas WHERE idDudas=idDudasD;
            SELECT ("Se elimino exitosamente");  

        COMMIT;

    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_DelFaq` (IN `idFaqD` INT)  BEGIN   
			DECLARE EXIT HANDLER FOR SQLEXCEPTION 
                BEGIN
                    SHOW ERRORS LIMIT 1;
                    RESIGNAL;
                    ROLLBACK;
				END;

             DECLARE EXIT HANDLER FOR SQLWARNING 
                BEGIN
                    SHOW WARNINGS LIMIT 1;
                    RESIGNAL;
                    ROLLBACK;
				END;
    
    START TRANSACTION ;
        		        
           DELETE FROM faq WHERE idFaq=idFaqD;
           SELECT ("Se elimino exitosamente");  

        COMMIT;

    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_DelGaleria` (IN `idGaleriaD` INT)  BEGIN   
			DECLARE EXIT HANDLER FOR SQLEXCEPTION 
                BEGIN
                    SHOW ERRORS LIMIT 1;
                    RESIGNAL;
                    ROLLBACK;
				END;

             DECLARE EXIT HANDLER FOR SQLWARNING 
                BEGIN
                    SHOW WARNINGS LIMIT 1;
                    RESIGNAL;
                    ROLLBACK;
				END;
    
    START TRANSACTION ;
        
           DELETE FROM galeria WHERE idGaleria=idGaleriaD;
            SELECT ("Se elimino exitosamente");  

        COMMIT;

    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_DelUsuarios` (IN `idUsuarioD` INT)  BEGIN   
			DECLARE EXIT HANDLER FOR SQLEXCEPTION 
                BEGIN
                    SHOW ERRORS LIMIT 1;
                    RESIGNAL;
                    ROLLBACK;
				END;

             DECLARE EXIT HANDLER FOR SQLWARNING 
                BEGIN
                    SHOW WARNINGS LIMIT 1;
                    RESIGNAL;
                    ROLLBACK;
				END;
    
    START TRANSACTION ;
        
           DELETE FROM usuarios WHERE idUsuario=idUsuarioD;
            SELECT ("Se elimino exitosamente");  

        COMMIT;

    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_UpdAcercaDe` (IN `idAcercaDeU` INT, IN `tituloU` VARCHAR(100), IN `informacionU` VARCHAR(350))  BEGIN   
            DECLARE EXIT HANDLER FOR SQLEXCEPTION 
                BEGIN
                    SHOW ERRORS LIMIT 1;
                    RESIGNAL;
                    ROLLBACK;
				END;
             DECLARE EXIT HANDLER FOR SQLWARNING 
                BEGIN
                    SHOW WARNINGS LIMIT 1;
                    RESIGNAL;
                    ROLLBACK;
				END;
    START TRANSACTION ;
			IF TRIM(tituloU) = " " THEN SELECT "Campo vacio";
            ELSE 
            IF TRIM(informacionU) = " " THEN SELECT "Campo vacio";
            ELSE 
            UPDATE acercaDe SET titulo=tituloU, informacion=informacionU where idAcercaDe=idAcercaDeU;
            SELECT CONCAT("Actualizado con exito");  
     END IF;
      END IF;
        COMMIT;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_UpdFaq` (IN `idFaqU` INT, IN `nombreU` VARCHAR(100), IN `urlU` VARCHAR(250), `descripcionU` VARCHAR(350))  BEGIN
	
   DECLARE EXIT HANDLER FOR SQLEXCEPTION 
                BEGIN
                    SHOW ERRORS LIMIT 1;
                    RESIGNAL;
                    ROLLBACK;
				END;

             DECLARE EXIT HANDLER FOR SQLWARNING 
                BEGIN
                    SHOW WARNINGS LIMIT 1;
                    RESIGNAL;
                    ROLLBACK;
				END;
                
	START TRANSACTION;
    
	IF TRIM(nombreU) ="" THEN SELECT "Campo vacío";
		ELSE 
        IF TRIM(urlU) ="" THEN SELECT "Campo vacío";
		ELSE 
        IF TRIM(descripcionU) ="" THEN SELECT "Campo vacío";
		ELSE 
	
			 UPDATE faq SET nombre=nombreU, url=urlU, descripcion= descripcionU  where idFaq=idFaqU;
            SELECT ("Se actualizo exitosamente");  
            
		END IF;
        END IF;
        END IF;
	
	COMMIT;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_UpdGaleria` (IN `idGaleriaU` INT, IN `nombreU` VARCHAR(100), IN `urlU` VARCHAR(250), `descripcionU` VARCHAR(350))  BEGIN
	
   DECLARE EXIT HANDLER FOR SQLEXCEPTION 
                BEGIN
                    SHOW ERRORS LIMIT 1;
                    RESIGNAL;
                    ROLLBACK;
				END;

             DECLARE EXIT HANDLER FOR SQLWARNING 
                BEGIN
                    SHOW WARNINGS LIMIT 1;
                    RESIGNAL;
                    ROLLBACK;
				END;
                
	START TRANSACTION;
    
	IF TRIM(nombreU) ="" THEN SELECT "Campo vacío";
		ELSE 
        IF TRIM(urlU) ="" THEN SELECT "Campo vacío";
		ELSE 
        IF TRIM(descripcionU) ="" THEN SELECT "Campo vacío";
		ELSE 
	
			UPDATE galeria SET nombre=nombreU, url=urlU, descripcion= descripcionU  where idGaleria=idGaleriaU;
            SELECT ("Se actualizo exitosamente");  
            
		END IF;
        END IF;
        END IF;
      
	COMMIT;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_UpdUsuarios` (IN `idUsuarioU` INT, IN `nombreU` VARCHAR(30), IN `telefonoU` VARCHAR(20), `emailU` VARCHAR(35), `passwordU` VARCHAR(50), `privilegiosU` VARCHAR(15))  BEGIN
	
   DECLARE EXIT HANDLER FOR SQLEXCEPTION 
                BEGIN
                    SHOW ERRORS LIMIT 1;
                    RESIGNAL;
                    ROLLBACK;
				END;

             DECLARE EXIT HANDLER FOR SQLWARNING 
                BEGIN
                    SHOW WARNINGS LIMIT 1;
                    RESIGNAL;
                    ROLLBACK;
				END;
                
	START TRANSACTION;
    
	IF TRIM(nombreU) ="" THEN SELECT "Campo vacío";
		ELSE 
        IF TRIM(telefonoU) ="" THEN SELECT "Campo vacío";
		ELSE 
        IF TRIM(emailU) ="" THEN SELECT "Campo vacío";
		ELSE 
		IF TRIM(passwordU) ="" THEN SELECT "Campo vacío";
		else
        IF TRIM(privilegiosU) ="" THEN SELECT "Campo vacío";
		else
        
			 UPDATE usuarios SET nombre=nombreU, telefono=telefonoU, email= emailU, password=passwordU
				,privilegios=privilegiosU  where idUsuario=idUsuarioU;
            SELECT ("Se actualizo exitosamente");  
            
		END IF;
        END IF;
        END IF;
        END IF;
         END IF;
      
	COMMIT;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acercade`
--

CREATE TABLE `acercade` (
  `idAcercaDe` int(11) NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `informacion` varchar(350) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `acercade`
--

INSERT INTO `acercade` (`idAcercaDe`, `titulo`, `informacion`) VALUES
(1, 'Evaluacion', 'INNOVASOFF siempre piensa que la satisfacción de los clientes es su mayor prioridad, es por eso que realizan muebles que satisfagan una de las necesidades básicas de su hogar, que es la reducción de espacios, debido a que, en la actualidad, las nuevas familias viven en hogares pequeños.'),
(4, 'SILLA ESCRITORIO 3F', 'La nueva silla-escritorio, la cual consiste en una silla multifuncional desarmable, que cumple 3 funciones: Banca compuesta por 2 asientos, escritorio con 2 asientos y silla con mesa y asiento.'),
(5, 'AMOR A NUESTRAS RAÍCES', 'La mayoría de los integrantes que conforman esta empresa son originarios de Maravatío, Michoacán por lo tanto la empresa está establecida en este lugar.');

--
-- Disparadores `acercade`
--
DELIMITER $$
CREATE TRIGGER `agregadoAcercaDe` AFTER INSERT ON `acercade` FOR EACH ROW BEGIN

        INSERT INTO acercaDeAgre(idAcercaDe,titulo,informacion,modificado)
        VALUES (NEW.idAcercaDe, NEW.titulo, NEW.informacion, now());


    END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `respaldoAcercaDe` AFTER UPDATE ON `acercade` FOR EACH ROW BEGIN

        INSERT INTO acercaDeRes(idAcercaDe,titulo,informacion, hora_fecha)
        VALUES (OLD.idAcercaDe, OLD.titulo, OLD.informacion, now());

    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acercadeagre`
--

CREATE TABLE `acercadeagre` (
  `idAcercaDe` int(11) NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `informacion` varchar(350) DEFAULT NULL,
  `modificado` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `acercadeagre`
--

INSERT INTO `acercadeagre` (`idAcercaDe`, `titulo`, `informacion`, `modificado`) VALUES
(10, 'HOLA', 'JEJE', '2019-03-27 10:01:44'),
(11, 'Ma', 'Juana', '2019-03-28 11:13:37'),
(12, 'Moda', 'Es chido', '2019-03-28 15:00:28'),
(6, 'Moda', 'Es chido', '2019-03-29 05:32:45'),
(7, 'Moda', 'Es chido', '2019-03-29 05:41:36'),
(8, 'SILLA-ESCRITORIO 3F', 'Es chido', '2019-03-29 05:41:51'),
(9, 'Alfredo Juarez', 'xcxcxcx', '2019-03-29 06:33:32'),
(10, 'Alfredo Juarez', 'Es chido', '2019-03-29 06:41:36'),
(6, 'nnnnn', 'bbbbb', '2019-04-01 18:01:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acercaderes`
--

CREATE TABLE `acercaderes` (
  `idAcercaDe` int(11) NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `informacion` varchar(350) DEFAULT NULL,
  `hora_fecha` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `acercaderes`
--

INSERT INTO `acercaderes` (`idAcercaDe`, `titulo`, `informacion`, `hora_fecha`) VALUES
(10, 'HOLA', 'JEJE', '2019-03-27 10:34:35'),
(11, 'Ma', 'Juana', '2019-03-28 11:24:13'),
(12, 'Moda', 'Es chido', '2019-03-28 15:03:12'),
(12, 'Moda', 'jala perro', '2019-03-28 15:03:34'),
(4, 'SILLA-ESCRITORIO 3F', 'La nueva silla-escritorio, la cual consiste en una silla multifuncional desarmable, que cumple 3 funciones: Banca compuesta por 2 asientos, escritorio con 2 asientos y silla con mesa y asiento.', '2019-03-29 06:22:17'),
(10, 'Alfredo Juarez', 'Es chido', '2019-03-29 07:02:34'),
(1, 'CLIENTES FELICES', 'INNOVASOFF siempre piensa que la satisfacción de los clientes es su mayor prioridad, es por eso que realizan muebles que satisfagan una de las necesidades básicas de su hogar, que es la reducción de espacios, debido a que, en la actualidad, las nuevas familias viven en hogares pequeños.', '2019-03-29 10:35:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dudas`
--

CREATE TABLE `dudas` (
  `idDudas` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `asunto` varchar(50) NOT NULL,
  `mensaje` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `faq`
--

CREATE TABLE `faq` (
  `idFaq` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `url` varchar(250) NOT NULL,
  `descripcion` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `faq`
--

INSERT INTO `faq` (`idFaq`, `nombre`, `url`, `descripcion`) VALUES
(9, '¿Cuáles son las formas de pago?', 'WhatsApp_Image_2019-03-28_at_11_09_16_PM.jpeg', 'Puede pagarse de contado, con efectivo o tarjeta de crédito, o también puede obtenerse a crédito, dónde se aumenta el 9% del precio total del producto.'),
(10, '¿Cómo se envía el producto?', 'WhatsApp_Image_2019-03-28_at_11_09_17_PM(1).jpeg', 'El producto se envía en su embalaje en camiones de la empresa, dichos fletes van incluidos en el precio del producto.'),
(11, '¿Cuentan con sucursal en Guanajuato?', 'WhatsApp_Image_2019-03-28_at_11_09_17_PM.jpeg', 'Actualmente solo nos encontramos ubicados en Maravatío, Michoacán, pero dentro de unos meses ubicaremos sucursales en Acámbaro.');

--
-- Disparadores `faq`
--
DELIMITER $$
CREATE TRIGGER `agregadoFaq` AFTER INSERT ON `faq` FOR EACH ROW BEGIN

        INSERT INTO faqAgre(idFaq,nombre,url,descripcion,modificado)
        VALUES (NEW.idFaq, NEW.nombre, NEW.url, NEW.descripcion, now());


    END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `respaldoFaq` AFTER UPDATE ON `faq` FOR EACH ROW BEGIN

        INSERT INTO faqRes(idFaq,nombre,url,descripcion, fecha_hora)
        VALUES (OLD.idFaq, OLD.nombre, OLD.url, OLD.descripcion, now());

    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `faqagre`
--

CREATE TABLE `faqagre` (
  `idFaq` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `url` varchar(250) DEFAULT NULL,
  `descripcion` varchar(350) DEFAULT NULL,
  `modificado` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `faqagre`
--

INSERT INTO `faqagre` (`idFaq`, `nombre`, `url`, `descripcion`, `modificado`) VALUES
(6, 'qwerty', 'ma.png', 'es jaja', '2019-03-27 10:07:04'),
(7, 'Luis MIguel', 'jdjfsj', 'ola k ase', '2019-03-28 13:45:34'),
(8, 'Juarez Lorenzo', 'face-with-cowboy-hat_1f9202.png', 'Es perron ', '2019-03-28 15:08:29'),
(9, '¿Cuáles son las formas de pago?', 'WhatsApp_Image_2019-03-28_at_11_09_16_PM.jpeg', 'Puede pagarse de contado, con efectivo o tarjeta de crédito, o también puede obtenerse a crédito, dónde se aumenta el 9% del precio total del producto.', '2019-03-28 23:17:17'),
(10, '¿Cómo se envía el producto?', 'WhatsApp_Image_2019-03-28_at_11_09_17_PM(1).jpeg', 'El producto se envía en su embalaje en camiones de la empresa, dichos fletes van incluidos en el precio del producto.', '2019-03-28 23:18:39'),
(11, '¿Cuentan con sucursal en Guanajuato?', 'WhatsApp_Image_2019-03-28_at_11_09_17_PM.jpeg', 'Actualmente solo nos encontramos ubicados en Maravatío, Michoacán, pero dentro de unos meses ubicaremos sucursales en Acámbaro.', '2019-03-28 23:21:38'),
(12, 'dkfskfkdskf', 'WhatsApp_Image_2019-03-10_at_1_32_29_PM1.jpeg', 'mmzdmamsdm', '2019-04-01 18:03:12'),
(13, 'Alfredo', 'WhatsApp_Image_2019-03-28_at_11_09_17_PM(1)2.jpeg', 'Es perron ', '2019-04-01 19:00:28'),
(14, 'EarPods', 'WhatsApp_Image_2019-03-28_at_11_09_17_PM(1)3.jpeg', 'Audifonos Inalambricos', '2019-04-01 19:01:37'),
(15, 'EarPods', 'WhatsApp_Image_2019-03-28_at_11_09_17_PM(1)4.jpeg', 'Se remplazo el chasis', '2019-04-01 19:03:07'),
(16, 'Juarez Lorenzo', 'WhatsApp_Image_2019-03-28_at_11_09_17_PM(1)10.jpeg', 'asasa', '2019-04-01 20:00:29'),
(17, 'Alfredo', 'WhatsApp_Image_2019-03-28_at_11_09_17_PM1.jpeg', 'Es perron ', '2019-04-02 20:15:06'),
(18, 'Alfredo', 'D_NP_623503-MLM28886918629_122018-Q.jpg', 'Es perron ', '2019-04-05 16:18:40'),
(19, 'Alfredo', 'ab893f9074d536e3e940d61f0fc62b39-los-usuarios-firman-en-rojo-by-vexels2.png', 'Es perron ', '2019-04-05 16:21:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `faqres`
--

CREATE TABLE `faqres` (
  `idFaq` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `url` varchar(250) DEFAULT NULL,
  `descripcion` varchar(350) DEFAULT NULL,
  `fecha_hora` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `faqres`
--

INSERT INTO `faqres` (`idFaq`, `nombre`, `url`, `descripcion`, `fecha_hora`) VALUES
(1, 'de que material', 'pic2.jpg', 'de madera', '2019-03-27 10:37:05'),
(7, 'Luis MIguel', 'jdjfsj', 'ola k ase', '2019-03-28 13:50:19'),
(8, 'Juarez Lorenzo', 'face-with-cowboy-hat_1f9202.png', 'Es perron ', '2019-03-28 15:10:20'),
(8, 'Miranda', 'face-with-cowboy-hat_1f9202.png', 'Es perron ', '2019-03-28 15:10:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE `galeria` (
  `idGaleria` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `url` varchar(250) DEFAULT NULL,
  `descripcion` varchar(350) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `galeria`
--

INSERT INTO `galeria` (`idGaleria`, `nombre`, `url`, `descripcion`) VALUES
(4, 'Es desarmable', '1picture.jpg', 'Practico de guardar '),
(5, 'Diseño artesanal', '2picture.jpg', 'Cuenta con un diseño impecable tradicional de Maravatío Michoacán.'),
(6, 'Silla escritorio', '3picture.jpg', 'También se puede utilizar como escritorio, para poder trabajar en el.'),
(7, 'Para dos personas', '4picture.jpg', 'La silla también puede interactuar como una sala para dos personas. ');

--
-- Disparadores `galeria`
--
DELIMITER $$
CREATE TRIGGER `agregadoGaleria` AFTER INSERT ON `galeria` FOR EACH ROW BEGIN

        INSERT INTO galeriaAgre(idGaleria,nombre,url,descripcion,modificado)
        VALUES (NEW.idGaleria, NEW.nombre, NEW.url, NEW.descripcion, now());


    END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `respaldoGaleria` AFTER UPDATE ON `galeria` FOR EACH ROW BEGIN

        INSERT INTO galeriaRes(idGaleria,nombre,url,descripcion,fecha_hora)
        VALUES (OLD.idGaleria, OLD.nombre, OLD.url, OLD.descripcion, now());

    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeriaagre`
--

CREATE TABLE `galeriaagre` (
  `idGaleria` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `url` varchar(250) DEFAULT NULL,
  `descripcion` varchar(350) DEFAULT NULL,
  `modificado` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `galeriaagre`
--

INSERT INTO `galeriaagre` (`idGaleria`, `nombre`, `url`, `descripcion`, `modificado`) VALUES
(9, 'por', 'mana.png', 'orale que padre', '2019-03-27 10:12:51'),
(10, 'Luis MIguel', 'jaja', 'ola k ase', '2019-03-28 14:13:05'),
(11, 'Juarez Lorenzo', '1f9242.png', 'Es perron ', '2019-03-28 15:26:29'),
(8, 'Juarez Lorenzo', 'WhatsApp_Image_2019-03-28_at_11_09_17_PM(1)1.jpeg', 'nnnnnnn', '2019-04-01 18:02:24'),
(9, 'mmxcmz', 'WhatsApp_Image_2019-03-10_at_1_32_29_PM.jpeg', 'mmmmmm', '2019-04-01 18:02:55'),
(8, 'Alfredo', 'ab893f9074d536e3e940d61f0fc62b39-los-usuarios-firman-en-rojo-by-vexels.png', 'Es perron ', '2019-04-03 16:28:41'),
(9, 'Soporte tecnico ', 'ab893f9074d536e3e940d61f0fc62b39-los-usuarios-firman-en-rojo-by-vexels1.png', 'Es perron ', '2019-04-03 16:41:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeriares`
--

CREATE TABLE `galeriares` (
  `idGaleria` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `url` varchar(250) DEFAULT NULL,
  `descripcion` varchar(350) DEFAULT NULL,
  `fecha_hora` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `galeriares`
--

INSERT INTO `galeriares` (`idGaleria`, `nombre`, `url`, `descripcion`, `fecha_hora`) VALUES
(4, 'Silla', '1picture.jpg', 'mm', '2019-03-27 10:38:53'),
(10, 'Luis MIguel', 'jaja', 'ola k ase', '2019-03-28 14:15:26'),
(11, 'Juarez Lorenzo', '1f9242.png', 'Es perron ', '2019-03-28 15:26:41'),
(5, '2', '2picture.jpg', 'qq', '2019-03-28 23:58:53'),
(6, '3', '3picture.jpg', 'ww', '2019-03-29 00:01:42'),
(6, 'Silla escritorio', '3picture.jpg', 'También se puede utilizar como escritorio, para poder trabajar en el, ademas de que se puede sentar una persona más.', '2019-03-29 00:07:21'),
(4, 'Mole', '1picture.jpg', 'mm', '2019-03-29 00:09:40'),
(5, 'Para dos personas', '2picture.jpg', 'La silla también puede interactuar como una sala para dos personas.', '2019-03-29 00:10:35'),
(7, '4', '4picture.jpg', 'rr', '2019-03-29 00:11:24'),
(5, 'x', '2picture.jpg', 'x', '2019-03-29 00:14:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `privilegios`
--

CREATE TABLE `privilegios` (
  `idPrivilegio` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `privilegios` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombre`, `telefono`, `email`, `password`, `privilegios`) VALUES
(1, 'Alfredo Juarez', '4471205422', 'juarezlorenzoalfredo@gmail.com', '12345', '1'),
(5, 'Paola Troncoso', '4176789087', 'paolatroncoso@gmail.com', '12345', '1'),
(8, 'Ana Luz', '4178908967', 'analuz@gmail.com', '12345', '2');

--
-- Disparadores `usuarios`
--
DELIMITER $$
CREATE TRIGGER `agregadoUsuarios` AFTER INSERT ON `usuarios` FOR EACH ROW BEGIN

        INSERT INTO usuariosAgre(idUsuario,nombre,telefono, email, password, privilegios, modificado)
        VALUES (NEW.idUsuario, NEW.nombre, NEW.telefono, NEW.email, NEW.password, NEW.privilegios, now());

    END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `respaldoUsuarios` AFTER UPDATE ON `usuarios` FOR EACH ROW BEGIN

        INSERT INTO usuariosRes(idUsuario,nombre,telefono, email, password, privilegios,fecha_hora)
        VALUES (OLD.idUsuario, OLD.nombre, OLD.telefono, OLD.email, OLD.password, OLD.privilegios, now());

    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariosagre`
--

CREATE TABLE `usuariosagre` (
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `privilegios` varchar(15) DEFAULT NULL,
  `modificado` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuariosagre`
--

INSERT INTO `usuariosagre` (`idUsuario`, `nombre`, `telefono`, `email`, `password`, `privilegios`, `modificado`) VALUES
(7, 'Maria', '123456789', 'maria@manta.com', '12345', '1', '2019-03-27 09:40:05'),
(8, 'Ana Luz', '4178908967', 'analuz@gmail.com', '12345', '2', '2019-03-28 00:45:25'),
(9, 'Luis MIguel', '123456789', 'juan@juan.com', '1345', '2', '2019-03-28 13:56:48'),
(10, 'Renato Ibarr', '45', 'renato@gmail.com', '12345', '2', '2019-03-28 15:17:05'),
(9, 'Alfredo Juarez Lorenzo', '4471205422', 'natalycisneros003@gmail.com', '12345', '2', '2019-04-05 17:18:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariosres`
--

CREATE TABLE `usuariosres` (
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `privilegios` varchar(15) DEFAULT NULL,
  `fecha_hora` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuariosres`
--

INSERT INTO `usuariosres` (`idUsuario`, `nombre`, `telefono`, `email`, `password`, `privilegios`, `fecha_hora`) VALUES
(1, 'Alfredo Juarez', '4471205422', 'juarezlorenzoalfredo@gmail.com', '9696', '1', '2019-03-27 10:40:50'),
(1, 'Nat', '4471205422', 'juarezlorenzoalfredo@gmail.com', '9696', '1', '2019-03-28 00:29:21'),
(1, 'Nat', '4471205422', 'juarezlorenzoalfredo@gmail.com', '9696', '2', '2019-03-28 00:38:50'),
(5, 'Paola Troncoso', '4176789087', 'paolatroncoso@gmail.com', '12345', '1', '2019-03-28 00:38:50'),
(1, 'Alfredo Juarez', '4471205422', 'juarezlorenzoalfredo@gmail.com', '12345', '0', '2019-03-28 00:41:23'),
(5, 'Paola Troncoso', '4176789087', 'paolatroncoso@gmail.com', '12345', '2', '2019-03-28 00:44:50'),
(9, 'Luis MIguel', '123456789', 'juan@juan.com', '1345', '2', '2019-03-28 14:01:02'),
(10, 'Renato Ibarr', '45', 'renato@gmail.com', '12345', '2', '2019-03-28 15:18:56'),
(8, 'Ana Luz', '4178908967', 'analuz@gmail.com', '12345', '2', '2019-03-29 09:14:46'),
(8, 'Ana Luz', '4178908967', 'analuz@gmail.com', '12345', '2', '2019-03-29 09:16:16'),
(8, 'Ana Luz', '4178908967', 'analuz@gmail.com', '12345', '2', '2019-04-03 17:38:29');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acercade`
--
ALTER TABLE `acercade`
  ADD PRIMARY KEY (`idAcercaDe`);

--
-- Indices de la tabla `dudas`
--
ALTER TABLE `dudas`
  ADD PRIMARY KEY (`idDudas`);

--
-- Indices de la tabla `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`idFaq`);

--
-- Indices de la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`idGaleria`);

--
-- Indices de la tabla `privilegios`
--
ALTER TABLE `privilegios`
  ADD PRIMARY KEY (`idPrivilegio`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acercade`
--
ALTER TABLE `acercade`
  MODIFY `idAcercaDe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `dudas`
--
ALTER TABLE `dudas`
  MODIFY `idDudas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `faq`
--
ALTER TABLE `faq`
  MODIFY `idFaq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `galeria`
--
ALTER TABLE `galeria`
  MODIFY `idGaleria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `privilegios`
--
ALTER TABLE `privilegios`
  MODIFY `idPrivilegio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;


--
-- Metadatos
--
USE `phpmyadmin`;

--
-- Metadatos para la tabla acercade
--

--
-- Metadatos para la tabla acercadeagre
--

--
-- Metadatos para la tabla acercaderes
--

--
-- Metadatos para la tabla dudas
--

--
-- Metadatos para la tabla faq
--

--
-- Metadatos para la tabla faqagre
--

--
-- Metadatos para la tabla faqres
--

--
-- Metadatos para la tabla galeria
--

--
-- Metadatos para la tabla galeriaagre
--

--
-- Metadatos para la tabla galeriares
--

--
-- Metadatos para la tabla privilegios
--

--
-- Metadatos para la tabla usuarios
--

--
-- Metadatos para la tabla usuariosagre
--

--
-- Metadatos para la tabla usuariosres
--

--
-- Metadatos para la base de datos innovasoff
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
