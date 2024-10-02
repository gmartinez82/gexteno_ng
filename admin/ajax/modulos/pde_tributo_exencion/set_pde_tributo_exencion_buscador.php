<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdeTributoExencion::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pde_tributo_exencion.id', Gral::getVars(1, 'buscador_pde_tributo_exencion_id'), Gral::getVars(1, 'buscador_pde_tributo_exencion_id_comparador'));
	$criterio->add('pde_tributo_exencion.descripcion', Gral::getVars(1, 'buscador_pde_tributo_exencion_descripcion'), Gral::getVars(1, 'buscador_pde_tributo_exencion_descripcion_comparador'));
	$criterio->add('pde_tributo_exencion.pde_tributo_id', Gral::getVars(1, 'buscador_pde_tributo_exencion_pde_tributo_id'), Gral::getVars(1, 'buscador_pde_tributo_exencion_pde_tributo_id_comparador'));
	$criterio->add('pde_tributo_exencion.prv_proveedor_id', Gral::getVars(1, 'buscador_pde_tributo_exencion_prv_proveedor_id'), Gral::getVars(1, 'buscador_pde_tributo_exencion_prv_proveedor_id_comparador'));
	$criterio->add('pde_tributo_exencion.fecha_inicio', Gral::getFechaToDB(Gral::getVars(1, 'buscador_pde_tributo_exencion_fecha_inicio')), Gral::getVars(1, 'buscador_pde_tributo_exencion_fecha_inicio_comparador'));
	$criterio->add('pde_tributo_exencion.fecha_fin', Gral::getFechaToDB(Gral::getVars(1, 'buscador_pde_tributo_exencion_fecha_fin')), Gral::getVars(1, 'buscador_pde_tributo_exencion_fecha_fin_comparador'));
	$criterio->add('pde_tributo_exencion.codigo', Gral::getVars(1, 'buscador_pde_tributo_exencion_codigo'), Gral::getVars(1, 'buscador_pde_tributo_exencion_codigo_comparador'));
	$criterio->add('pde_tributo_exencion.observacion', Gral::getVars(1, 'buscador_pde_tributo_exencion_observacion'), Gral::getVars(1, 'buscador_pde_tributo_exencion_observacion_comparador'));
	$criterio->add('pde_tributo_exencion.estado', Gral::getVars(1, 'buscador_pde_tributo_exencion_estado'), Gral::getVars(1, 'buscador_pde_tributo_exencion_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pde_tributo_exencion');
		$criterio->setCriterios();		
}
?>

