
/*PROCEDIMIENTOS ALMACENADOS
==============================================================================================================
*/
DELIMITER ;;
CREATE PROCEDURE SP_SuperficieRodadura()
BEGIN
    SELECT  ru.codigo,
        tra.numero_tramo,
        tra.progresiva_inicial,
        tra.progresiva_final,
        tra.coor_x_inicial,
        tra.coor_y_inicial,
        tra.altitud_inicial,
        tra.coor_x_final,
        tra.coor_y_final,
        tra.altitud_final,
        tra.tipo_superficie,
        tra.created_at
    FROM rutas  ru
    INNER JOIN tramos tra
    ON ru.id = tra.rutas_id;
END ;;

-- ==============================================================================================================
DELIMITER ;;
CREATE PROCEDURE SP_plataforma()
BEGIN
	SELECT ru.codigo,
    	tra.numero_tramo,
        tra.coor_x_inicial,
        tra.coor_y_inicial,
        tra.altitud_inicial,
        tra.coor_x_final,
        tra.coor_y_final,
        tra.altitud_final,
        tra.numero_carriles,
        tra.ancho_calzada,
        tra.ancho_berma_izquierda,
        tra.ancho_berma_derecha,
        convert(tra.created_at, date) as fecha,
        tra.progresiva_inicial,
        tra.progresiva_final
    FROM tramos tra
    INNER JOIN rutas ru
    ON ru.id = tra.rutas_id;
END ;;

-- ==============================================================================================================
DELIMITER ;;
CREATE PROCEDURE SP_ItinerarioRutas()
BEGIN
	SELECT dep.nombre AS departamentos,
    	pro.nombre as provincias,
        ru.codigo as ruta,
        tra.numero_tramo,
        dis.ubigeo,
        tra.tipo_terreno,
        tra.tipo_superficie,
        (tra.ancho_calzada + tra.ancho_berma_izquierda + tra.ancho_berma_derecha) as ancho_plataforma,
        tra.estado_via,
        tra.progresiva_inicial,
        tra.coor_x_inicial,
        tra.coor_y_inicial,
        tra.altitud_inicial,
        tra.progresiva_final,
        tra.coor_x_final,
        tra.coor_y_final,
        tra.altitud_final,
        tra.zona,
        totalKilometros(tra.progresiva_inicial, tra.progresiva_final) as longitud_km,
        tra.punto_notable,
        tra.codigo_imagen,
        tra.observaciones,
        convert(tra.created_at, date) as fecha
    FROM tramos tra
    INNER JOIN rutas ru
    ON ru.id = tra.rutas_id
    INNER JOIN distritos dis
    ON dis.id = ru.distritos_id
    INNER JOIN provincias pro
    ON pro.id = dis.provincias_id
    INNER JOIN departamentos dep
    ON dep.id = pro.departamentos_id;
END ;;

--==============================================================================================================
DELIMITER ;;
CREATE PROCEDURE SP_FormatoReferenciamiento()
BEGIN
	SELECT dis.ubigeo,
    	ru.codigo,
        ru.punto_inicio,
        ru.progresiva_punto_inicial,
        dep.zona,
        ru.coordenada_x_inicio,
        ru.coordenada_y_inicio,
        ru.altitud_punto_inicial,
        ru.punto_final,
        ru.progresiva_punto_final,
        dep.zona as zona_final,
        ru.coordenada_x_final,
        ru.coordenada_y_final,
        ru.altitud_punto_final,
        CONVERT(ru.created_at, date ) as fecha
    FROM rutas ru
    INNER JOIN distritos dis
    ON dis.id = ru.distritos_id
    INNER JOIN provincias pro
    ON pro.id = dis.provincias_id
    INNER JOIN departamentos dep
    ON dep.id = pro.departamentos_id;
END ;;

-- ==============================================================================================================
DELIMITER ;;
CREATE PROCEDURE SP_EstadoTransitabilidad()
BEGIN
    SELECT  ru.codigo,
        tra.numero_tramo,
        tra.progresiva_inicial,
        tra.progresiva_final,
        tra.coor_x_inicial,
        tra.coor_y_inicial,
        tra.altitud_inicial,
        tra.coor_x_final,
        tra.coor_y_final,
        tra.altitud_final,
        tra.estado_via,
        tra.identificacion_calzada,
        convert(tra.created_at, date) as fecha
    FROM rutas  ru
    INNER JOIN tramos tra
    ON ru.id = tra.rutas_id;
END ;;

-- ==============================================================================================================
DELIMITER ;;
CREATE PROCEDURE SP_Senializacion()
BEGIN
	SELECT dep.nombre as departamento,
    	pro.nombre as provincia,
        dis.ubigeo,
        ru.codigo,
        sen.senial,
        sen.clasificacion,
        sen.progresiva,
        sen.lado,
        sen.soporte,
        sen.material,
        sen.zona,
        sen.coordenada_x,
        sen.coordenada_y,
        sen.altitud,
        convert(sen.created_at, date) as fecha
    FROM departamentos dep
    INNER JOIN provincias pro
    ON pro.departamentos_id = dep.id
    INNER JOIN distritos dis
    ON dis.provincias_id = pro.id
    INNER JOIN rutas ru
    ON ru.distritos_id = dis.id
    INNER JOIN senializaciones sen
    ON sen.rutas_id = ru.id;
END ;;

-- ==============================================================================================================
DELIMITER ;;
CREATE PROCEDURE SP_TipoSuperficie()
BEGIN
	SELECT dep.nombre as departamento,
    	pro.nombre as provincia,
        dis.ubigeo,
        ru.codigo,
        CONCAT(ru.punto_inicio, ' - ', ru.punto_final) AS TRAYECTORIA,
        tra.estado_via,
        tra.tipo_superficie,
        (tra.ancho_calzada + tra.ancho_berma_izquierda + tra.ancho_berma_derecha) AS ANCHO_PLATAFORMA,
        tra.progresiva_inicial,
        tra.coor_x_inicial,
        tra.coor_y_inicial,
        tra.altitud_inicial,
        tra.progresiva_final,
        tra.coor_x_final,
        tra.coor_y_final,
        tra.altitud_final,
        tra.zona,
        convert(tra.created_at, date) as fecha,
        totalKilometros(tra.progresiva_inicial, tra.progresiva_final) as longitud_km

        FROM departamentos dep
    INNER JOIN provincias pro
    ON pro.departamentos_id = dep.id
    INNER JOIN distritos dis
    ON dis.provincias_id = pro.id
    INNER JOIN rutas ru
    ON ru.distritos_id = dis.id
    INNER JOIN tramos tra
    ON tra.rutas_id = ru.id;
END ;;

-- ==============================================================================================================

DELIMITER ;;
CREATE PROCEDURE SP_Puentes()
BEGIN
	SELECT ru.codigo,
    	pu.progresiva,
        pu.coordenada_x,
        pu.coordenada_y,
        pu.altitud,
        cla.nombre as clase,
        ti.nombre as tipo,
        pu.numero_vias,
        pu.tablero_rodadura,
        pu.longitud,
        pu.ancho_calzada,
        pu.condicion_funcional,
        pu.hidrografia,
        convert(pu.created_at, date) as fecha
    FROM rutas ru
    INNER JOIN puentes pu
    ON ru.id = pu.rutas_id
    INNER JOIN tipos ti
    ON pu.tipos_id = ti.id
    INNER JOIN clases cla
    ON cla.id = ti.clases_id;
END ;;

-- ============================================================================================================
DELIMITER $$
CREATE FUNCTION totalKilometros(progInicial VARCHAR(20), progFinal VARCHAR(20)) RETURNS double(8,6)
BEGIN
	DECLARE metrosProgInicial VARCHAR(15);
    DECLARE kmProgInicial VARCHAR(15);
    DECLARE metrosProgFinal VARCHAR(15);
    DECLARE kmProgFinal VARCHAR(15);
    DECLARE totalMetrosProgInicial DOUBLE;
    DECLARE totalMetrosProgFinal DOUBLE;
    DECLARE totalDistancia DOUBLE;

    SET metrosProgInicial = substring_index(progInicial, '+', -1);
    SET kmProgInicial = substring_index(progInicial, '+', 1);
    SET metrosProgFinal = substring_index(progFinal, '+', -1);
    SET kmProgFinal = substring_index(progFinal, '+', 1);

    SET totalMetrosProgInicial = CONVERT( metrosProgInicial, double)+ (CONVERT(kmProgInicial, double) * 1000);
    SET totalMetrosProgFinal = CONVERT(metrosProgFinal , double) + (CONVERT(kmProgFinal, double) * 1000);

    SET totalDistancia =  convert( (totalMetrosProgFinal - totalMetrosProgInicial ) / 1000, double);

    RETURN totalDistancia;
END$$
