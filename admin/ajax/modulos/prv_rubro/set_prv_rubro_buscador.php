<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PrvRubro::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	$criterio->add('prv_proveedor_prv_rubro.prv_proveedor_id', Gral::getVars(1, 'buscador_prv_proveedor_prv_rubro_prv_proveedor_id'), Gral::getVars(1, 'buscador_prv_proveedor_prv_rubro_prv_proveedor_id_comparador'));
	
	// criterios agregados por atributos de clase
	$criterio->add('prv_rubro.id', Gral::getVars(1, 'buscador_prv_rubro_id'), Gral::getVars(1, 'buscador_prv_rubro_id_comparador'));
	$criterio->add('prv_rubro.descripcion', Gral::getVars(1, 'buscador_prv_rubro_descripcion'), Gral::getVars(1, 'buscador_prv_rubro_descripcion_comparador'));
	$criterio->add('prv_rubro.codigo', Gral::getVars(1, 'buscador_prv_rubro_codigo'), Gral::getVars(1, 'buscador_prv_rubro_codigo_comparador'));
	$criterio->add('prv_rubro.observacion', Gral::getVars(1, 'buscador_prv_rubro_observacion'), Gral::getVars(1, 'buscador_prv_rubro_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('prv_proveedor_prv_rubro', 'prv_proveedor_prv_rubro.prv_rubro_id', 'prv_rubro.id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'prv_proveedor_prv_rubro.prv_proveedor_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('prv_rubro');
		$criterio->setCriterios();		
}
?>

