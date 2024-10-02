<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaPuntoVentaActual::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_punto_venta_actual.id', Gral::getVars(1, 'buscador_vta_punto_venta_actual_id'), Gral::getVars(1, 'buscador_vta_punto_venta_actual_id_comparador'));
	$criterio->add('vta_punto_venta_actual.descripcion', Gral::getVars(1, 'buscador_vta_punto_venta_actual_descripcion'), Gral::getVars(1, 'buscador_vta_punto_venta_actual_descripcion_comparador'));
	$criterio->add('vta_punto_venta_actual.vta_punto_venta_id', Gral::getVars(1, 'buscador_vta_punto_venta_actual_vta_punto_venta_id'), Gral::getVars(1, 'buscador_vta_punto_venta_actual_vta_punto_venta_id_comparador'));
	$criterio->add('vta_punto_venta_actual.vta_tipo_punto_venta_id', Gral::getVars(1, 'buscador_vta_punto_venta_actual_vta_tipo_punto_venta_id'), Gral::getVars(1, 'buscador_vta_punto_venta_actual_vta_tipo_punto_venta_id_comparador'));
	$criterio->add('vta_punto_venta_actual.serie', Gral::getVars(1, 'buscador_vta_punto_venta_actual_serie'), Gral::getVars(1, 'buscador_vta_punto_venta_actual_serie_comparador'));
	$criterio->add('vta_punto_venta_actual.numero_actual', Gral::getVars(1, 'buscador_vta_punto_venta_actual_numero_actual'), Gral::getVars(1, 'buscador_vta_punto_venta_actual_numero_actual_comparador'));
	$criterio->add('vta_punto_venta_actual.observacion', Gral::getVars(1, 'buscador_vta_punto_venta_actual_observacion'), Gral::getVars(1, 'buscador_vta_punto_venta_actual_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_punto_venta_actual');
		$criterio->setCriterios();		
}
?>

