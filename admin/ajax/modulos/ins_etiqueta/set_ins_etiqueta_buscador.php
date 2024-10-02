<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(InsEtiqueta::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ins_etiqueta.id', Gral::getVars(1, 'buscador_ins_etiqueta_id'), Gral::getVars(1, 'buscador_ins_etiqueta_id_comparador'));
	$criterio->add('ins_etiqueta.descripcion', Gral::getVars(1, 'buscador_ins_etiqueta_descripcion'), Gral::getVars(1, 'buscador_ins_etiqueta_descripcion_comparador'));
	$criterio->add('ins_etiqueta.codigo', Gral::getVars(1, 'buscador_ins_etiqueta_codigo'), Gral::getVars(1, 'buscador_ins_etiqueta_codigo_comparador'));
	$criterio->add('ins_etiqueta.observacion', Gral::getVars(1, 'buscador_ins_etiqueta_observacion'), Gral::getVars(1, 'buscador_ins_etiqueta_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('ins_insumo_ins_etiqueta', 'ins_insumo_ins_etiqueta.ins_etiqueta_id', 'ins_etiqueta.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'ins_insumo_ins_etiqueta.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_vendedor_descuento', 'vta_vendedor_descuento.ins_etiqueta_id', 'ins_etiqueta.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_vendedor', 'vta_vendedor.id', 'vta_vendedor_descuento.vta_vendedor_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ins_etiqueta');
		$criterio->setCriterios();		
}
?>

