CREATE OR REPLACE VIEW view_proyectos_clientes AS 
SELECT
p.id as id_proyecto,p.titulo,p.descripcion,p.rango,p.habilidades,p.informacion_adicional,p.herramientas,p.plazo,p.requerimientos 
,u.id as id_cliente,u.nombre as cliente,u.correo 
,per.perfil
FROM proyecto as p
INNER JOIN usuarios AS u ON u.id = p.id_cliente
INNER JOIN perfil AS per ON per.id = u.id_perfil