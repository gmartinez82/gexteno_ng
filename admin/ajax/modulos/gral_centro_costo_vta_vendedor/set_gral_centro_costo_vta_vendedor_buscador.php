<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GralCentroCostoVtaVendedor::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('gral_centro_costo_vta_vendedor.id', Gral::getVars(1, 'buscador_gral_centro_costo_vta_vendedor_id'), Gral::getVars(1, 'buscador_gral_centro_costo_vta_vendedor_id_comparador'));
	$criterio->add('gral_centro_costo_vta_vendedor.descripcion', Gral::getVars(1, 'buscador_gral_centro_costo_vta_vendedor_descripcion'), Gral::getVars(1, 'buscador_gral_centro_costo_vta_vendedor_descripcion_comparador'));
	$criterio->add('gral_centro_costo_vta_vendedor.gral_centro_costo_id', Gral::getVars(1, 'buscador_gral_centro_costo_vta_vendedor_gral_centro_costo_id'), Gral::getVars(1, 'buscador_gral_centro_costo_vta_vendedor_gral_centro_costo_id_comparador'));
	$criterio->add('gral_centro_costo_vta_vendedor.vta_vendedor_id', Gral::getVars(1, 'buscador_gral_centro_costo_vta_vendedor_vta_vendedor_id'), Gral::getVars(1, 'buscador_gral_centro_costo_vta_vendedor_vta_vendedor_id_comparador'));
	$criterio->add('gral_centro_costo_vta_vendedor.codigo', Gral::getVars(1, 'buscador_gral_centro_costo_vta_vendedor_codigo'), Gral::getVars(1, 'buscador_gral_centro_costo_vta_vendedor_codigo_comparador'));
	$criterio->add('gral_centro_costo_vta_vendedor.observacion', Gral::getVars(1, 'buscador_gral_centro_costo_vta_vendedor_observacion'), Gral::getVars(1, 'buscador_gral_centro_costo_vta_vendedor_observacion_comparador'));
	$criterio->add('gral_centro_costo_vta_vendedor.estado', Gral::getVars(1, 'buscador_gral_centro_costo_vta_vendedor_estado'), Gral::getVars(1, 'buscador_gral_centro_costo_vta_vendedor_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('gral_centro_costo_vta_vendedor');
		$criterio->setCriterios();		
}
?>

