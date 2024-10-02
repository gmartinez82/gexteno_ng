<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(InsVentaWebInfo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ins_venta_web_info.id', Gral::getVars(1, 'buscador_ins_venta_web_info_id'), Gral::getVars(1, 'buscador_ins_venta_web_info_id_comparador'));
	$criterio->add('ins_venta_web_info.ins_insumo_id', Gral::getVars(1, 'buscador_ins_venta_web_info_ins_insumo_id'), Gral::getVars(1, 'buscador_ins_venta_web_info_ins_insumo_id_comparador'));
	$criterio->add('ins_venta_web_info.descripcion', Gral::getVars(1, 'buscador_ins_venta_web_info_descripcion'), Gral::getVars(1, 'buscador_ins_venta_web_info_descripcion_comparador'));
	$criterio->add('ins_venta_web_info.codigo', Gral::getVars(1, 'buscador_ins_venta_web_info_codigo'), Gral::getVars(1, 'buscador_ins_venta_web_info_codigo_comparador'));
	$criterio->add('ins_venta_web_info.badge', Gral::getVars(1, 'buscador_ins_venta_web_info_badge'), Gral::getVars(1, 'buscador_ins_venta_web_info_badge_comparador'));
	$criterio->add('ins_venta_web_info.descripcion_breve', Gral::getVars(1, 'buscador_ins_venta_web_info_descripcion_breve'), Gral::getVars(1, 'buscador_ins_venta_web_info_descripcion_breve_comparador'));
	$criterio->add('ins_venta_web_info.descripcion_ext', Gral::getVars(1, 'buscador_ins_venta_web_info_descripcion_ext'), Gral::getVars(1, 'buscador_ins_venta_web_info_descripcion_ext_comparador'));
	$criterio->add('ins_venta_web_info.observacion', Gral::getVars(1, 'buscador_ins_venta_web_info_observacion'), Gral::getVars(1, 'buscador_ins_venta_web_info_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ins_venta_web_info');
		$criterio->setCriterios();		
}
?>

