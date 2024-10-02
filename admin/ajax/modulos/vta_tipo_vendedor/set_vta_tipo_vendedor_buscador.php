<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaTipoVendedor::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_tipo_vendedor.id', Gral::getVars(1, 'buscador_vta_tipo_vendedor_id'), Gral::getVars(1, 'buscador_vta_tipo_vendedor_id_comparador'));
	$criterio->add('vta_tipo_vendedor.descripcion', Gral::getVars(1, 'buscador_vta_tipo_vendedor_descripcion'), Gral::getVars(1, 'buscador_vta_tipo_vendedor_descripcion_comparador'));
	$criterio->add('vta_tipo_vendedor.codigo', Gral::getVars(1, 'buscador_vta_tipo_vendedor_codigo'), Gral::getVars(1, 'buscador_vta_tipo_vendedor_codigo_comparador'));
	$criterio->add('vta_tipo_vendedor.observacion', Gral::getVars(1, 'buscador_vta_tipo_vendedor_observacion'), Gral::getVars(1, 'buscador_vta_tipo_vendedor_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('vta_vendedor', 'vta_vendedor.vta_tipo_vendedor_id', 'vta_tipo_vendedor.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_sucursal', 'gral_sucursal.id', 'vta_vendedor.gral_sucursal_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_tipo_vendedor');
		$criterio->setCriterios();		
}
?>

