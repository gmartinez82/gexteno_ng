<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PanTipoPanol::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pan_tipo_panol.id', Gral::getVars(1, 'buscador_pan_tipo_panol_id'), Gral::getVars(1, 'buscador_pan_tipo_panol_id_comparador'));
	$criterio->add('pan_tipo_panol.descripcion', Gral::getVars(1, 'buscador_pan_tipo_panol_descripcion'), Gral::getVars(1, 'buscador_pan_tipo_panol_descripcion_comparador'));
	$criterio->add('pan_tipo_panol.codigo', Gral::getVars(1, 'buscador_pan_tipo_panol_codigo'), Gral::getVars(1, 'buscador_pan_tipo_panol_codigo_comparador'));
	$criterio->add('pan_tipo_panol.observacion', Gral::getVars(1, 'buscador_pan_tipo_panol_observacion'), Gral::getVars(1, 'buscador_pan_tipo_panol_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('pan_panol', 'pan_panol.pan_tipo_panol_id', 'pan_tipo_panol.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_pedido', 'pde_centro_pedido.id', 'pan_panol.pde_centro_pedido_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pan_tipo_panol');
		$criterio->setCriterios();		
}
?>

