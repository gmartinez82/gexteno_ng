<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaVendedorGralEscenario::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_vendedor_gral_escenario.id', Gral::getVars(1, 'buscador_vta_vendedor_gral_escenario_id'), Gral::getVars(1, 'buscador_vta_vendedor_gral_escenario_id_comparador'));
	$criterio->add('vta_vendedor_gral_escenario.descripcion', Gral::getVars(1, 'buscador_vta_vendedor_gral_escenario_descripcion'), Gral::getVars(1, 'buscador_vta_vendedor_gral_escenario_descripcion_comparador'));
	$criterio->add('vta_vendedor_gral_escenario.vta_vendedor_id', Gral::getVars(1, 'buscador_vta_vendedor_gral_escenario_vta_vendedor_id'), Gral::getVars(1, 'buscador_vta_vendedor_gral_escenario_vta_vendedor_id_comparador'));
	$criterio->add('vta_vendedor_gral_escenario.gral_escenario_id', Gral::getVars(1, 'buscador_vta_vendedor_gral_escenario_gral_escenario_id'), Gral::getVars(1, 'buscador_vta_vendedor_gral_escenario_gral_escenario_id_comparador'));
	$criterio->add('vta_vendedor_gral_escenario.codigo', Gral::getVars(1, 'buscador_vta_vendedor_gral_escenario_codigo'), Gral::getVars(1, 'buscador_vta_vendedor_gral_escenario_codigo_comparador'));
	$criterio->add('vta_vendedor_gral_escenario.observacion', Gral::getVars(1, 'buscador_vta_vendedor_gral_escenario_observacion'), Gral::getVars(1, 'buscador_vta_vendedor_gral_escenario_observacion_comparador'));
	$criterio->add('vta_vendedor_gral_escenario.estado', Gral::getVars(1, 'buscador_vta_vendedor_gral_escenario_estado'), Gral::getVars(1, 'buscador_vta_vendedor_gral_escenario_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_vendedor_gral_escenario');
		$criterio->setCriterios();		
}
?>

