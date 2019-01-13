-- ########## PROFESOR ##########

-- == Clases para el dia corriente (curdate) == 
-- **
-- Cambiar fecha 2019-01-01 por curdate() para que sea un calendario dinamico
-- Para eso es neceario tener clases agregadas para ese dia
-- **
select id_clase, id_pista, hora_inicio, hora_fin 
from clase 
where fecha = curdate();

-- == Clases para esta seamana (yearweek)== 
-- **
--     Test:
--         select yearweek(curdate()) from dual;
--         select month(curdate()) from dual where curdate(); //mes actual
-- **
select id_clase, id_pista fecha, hora_inicio, hora_fin 
from clase 
where yearweek(curdate());

-- == Modificar / Cancelar clases == 
-- **
--     Mostrar datos
-- **
select id_clase, id_pista, hora_inicio, hora_fin
from clase
where fecha = curdate();
-- **
--     Actualizacion de los datos cuando se cancele la clase
-- **
delete from clase where id_clase = "id_clase obtenido del form";

-- ########## FIN PROFESOR ##########