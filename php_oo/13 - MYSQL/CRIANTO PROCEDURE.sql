-- USANDO O BANCO DE DADOS
USE `tichronoscom_sisnotas`;
DROP procedure IF EXISTS `NOTAS`;

USE `tichronoscom_sisnotas`;
DROP procedure IF EXISTS `tichronoscom_sisnotas`.`NOTAS`;
;

DELIMITER $$
USE `tichronoscom_sisnotas`$$
CREATE PROCEDURE `NOTAS`(OUT total varchar(255))
BEGIN
SELECT COUNT(chave) INTO total FROM notas;
END$$

DELIMITER ;
;



-- CHAMANDO UMA procedure
CALL NOTAS(@total);
select @total;
