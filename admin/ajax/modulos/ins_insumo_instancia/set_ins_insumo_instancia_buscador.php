<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(InsInsumoInstancia::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ins_insumo_instancia.id', Gral::getVars(1, 'buscador_ins_insumo_instancia_id'), Gral::getVars(1, 'buscador_ins_insumo_instancia_id_comparador'));
	$criterio->add('ins_insumo_instancia.descripcion', Gral::getVars(1, 'buscador_ins_insumo_instancia_descripcion'), Gral::getVars(1, 'buscador_ins_insumo_instancia_descripcion_comparador'));
	$criterio->add('ins_insumo_instancia.ins_insumo_id', Gral::getVars(1, 'buscador_ins_insumo_instancia_ins_insumo_id'), Gral::getVars(1, 'buscador_ins_insumo_instancia_ins_insumo_id_comparador'));
	$criterio->add('ins_insumo_instancia.vida_util', Gral::getVars(1, 'buscador_ins_insumo_instancia_vida_util'), Gral::getVars(1, 'buscador_ins_insumo_instancia_vida_util_comparador'));
	$criterio->add('ins_insumo_instancia.margen', Gral::getVars(1, 'buscador_ins_insumo_instancia_margen'), Gral::getVars(1, 'buscador_ins_insumo_instancia_margen_comparador'));
	$criterio->add('ins_insumo_instancia.codigo', Gral::getVars(1, 'buscador_ins_insumo_instancia_codigo'), Gral::getVars(1, 'buscador_ins_insumo_instancia_codigo_comparador'));
	$criterio->add('ins_insumo_instancia.observacion', Gral::getVars(1, 'buscador_ins_insumo_instancia_observacion'), Gral::getVars(1, 'buscador_ins_insumo_instancia_observacion_comparador'));
	$criterio->add('ins_insumo_instancia.orden', Gral::getVars(1, 'buscador_ins_insumo_instancia_orden'), Gral::getVars(1, 'buscador_ins_insumo_instancia_orden_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ins_insumo_instancia');
		$criterio->setCriterios();		
}
?>

