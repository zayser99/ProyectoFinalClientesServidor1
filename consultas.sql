
-- consumo de aparatos de un historial 
SELECT nombre_aparato,cantidad, dias, horas, comsumo_ind, (cantidad * dias * horas *comsumo_ind) AS TOTAL  FROM aparato NATURAL JOIN  aparato_historial where id_historial=1;

-- historiales de un usuario
SELECT id_historial FROM historial NATURAL JOIN  usuario where id_usuario=3;

-- recibos de un usuario

SELECT id_recibo FROM recibo NATURAL JOIN  usuario where id_usuario=3;

-- historial de aparatos de un usuario
MariaDB [energiaslimpias]> SELECT DISTINCT  nombre_aparato, comsumo_ind FROM aparato NATURAL JOIN  (aparato_historial NATURAL JOIN usuario ) where id_usuario=3;