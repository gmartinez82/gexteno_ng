<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(InsInsumoComposicion::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ins_insumo_composicion.id', Gral::getVars(1, 'buscador_ins_insumo_composicion_id'), Gral::getVars(1, 'buscador_ins_insumo_composicion_id_comparador'));
	$criterio->add('ins_insumo_composicion.descripcion', Gral::getVars(1, 'buscador_ins_insumo_composicion_descripcion'), Gral::getVars(1, 'buscador_ins_insumo_composicion_descripcion_comparador'));
	$criterio->add('ins_insumo_composicion.ins_insumo_id', Gral::getVars(1, 'buscador_ins_insumo_composicion_ins_insumo_id'), Gral::getVars(1, 'buscador_ins_insumo_composicion_ins_insumo_id_comparador'));
	$criterio->add('ins_insumo_composicion.ins_insumo_composicion', Gral::getVars(1, 'buscador_ins_insumo_composicion_ins_insumo_composicion'), Gral::getVars(1, 'buscador_ins_insumo_composicion_ins_insumo_composicion_comparador'));
	$criterio->add('ins_insumo_composicion.codigo', Gral::getVars(1, 'buscador_ins_insumo_composicion_codigo'), Gral::getVars(1, 'buscador_ins_insumo_composicion_codigo_comparador'));
	$criterio->add('ins_insumo_composicion.cantidad', Gral::getVars(1, 'buscador_ins_insumo_composicion_cantidad'), Gral::getVars(1, 'buscador_ins_insumo_composicion_cantidad_comparador'));
	$criterio->add('ins_insumo_composicion.observacion', Gral::getVars(1, 'buscador_ins_insumo_composicion_observacion'), Gral::getVars(1, 'buscador_ins_insumo_composicion_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ins_insumo_composicion');
		$criterio->setCriterios();		
}
?>

