


/*super consulta */


select inventario.id as inventarioOrigina, inventario.codigo, inventario.instrumento_id,
 inventario.activo,acta_instrumentos_ceye_id, inventario.extra,
 acta_instrumentos_ceye.id, acta_instrumentos_ceye.codigo, acta_ceye.id, 
 acta_ceye.fecha, acta_ceye.hora, instrumentos.instrumentos
 from inventario, acta_instrumentos_ceye, acta_ceye, instrumentos
 where inventario.instrumento_id = 2 and inventario.activo = 1 and 
 inventario.acta_instrumentos_ceye_id  = acta_instrumentos_ceye.id and
 acta_instrumentos_ceye.acta_ceye_id = acta_ceye.id and inventario.instrumento_id = instrumentos.id;


