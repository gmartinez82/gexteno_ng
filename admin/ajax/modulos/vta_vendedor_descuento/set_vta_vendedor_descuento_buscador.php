<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaVendedorDescuento::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_vendedor_descuento.id', Gral::getVars(1, 'buscador_vta_vendedor_descuento_id'), Gral::getVars(1, 'buscador_vta_vendedor_descuento_id_comparador'));
	$criterio->add('vta_vendedor_descuento.descripcion', Gral::getVars(1, 'buscador_vta_vendedor_descuento_descripcion'), Gral::getVars(1, 'buscador_vta_vendedor_descuento_descripcion_comparador'));
	$criterio->add('vta_vendedor_descuento.vta_vendedor_id', Gral::getVars(1, 'buscador_vta_vendedor_descuento_vta_vendedor_id'), Gral::getVars(1, 'buscador_vta_vendedor_descuento_vta_vendedor_id_comparador'));
	$criterio->add('vta_vendedor_descuento.ins_etiqueta_id', Gral::getVars(1, 'buscador_vta_vendedor_descuento_ins_etiqueta_id'), Gral::getVars(1, 'buscador_vta_vendedor_descuento_ins_etiqueta_id_comparador'));
	$criterio->add('vta_vendedor_descuento.descuento_maximo', Gral::getVars(1, 'buscador_vta_vendedor_descuento_descuento_maximo'), Gral::getVars(1, 'buscador_vta_vendedor_descuento_descuento_maximo_comparador'));
	$criterio->add('vta_vendedor_descuento.codigo', Gral::getVars(1, 'buscador_vta_vendedor_descuento_codigo'), Gral::getVars(1, 'buscador_vta_vendedor_descuento_codigo_comparador'));
	$criterio->add('vta_vendedor_descuento.observacion', Gral::getVars(1, 'buscador_vta_vendedor_descuento_observacion'), Gral::getVars(1, 'buscador_vta_vendedor_descuento_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_vendedor_descuento');
		$criterio->setCriterios();		
}
?>

