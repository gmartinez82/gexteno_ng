<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(InsInsumoSimilar::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ins_insumo_similar.id', Gral::getVars(1, 'buscador_ins_insumo_similar_id'), Gral::getVars(1, 'buscador_ins_insumo_similar_id_comparador'));
	$criterio->add('ins_insumo_similar.ins_insumo_id', Gral::getVars(1, 'buscador_ins_insumo_similar_ins_insumo_id'), Gral::getVars(1, 'buscador_ins_insumo_similar_ins_insumo_id_comparador'));
	$criterio->add('ins_insumo_similar.ins_insumo_similar', Gral::getVars(1, 'buscador_ins_insumo_similar_ins_insumo_similar'), Gral::getVars(1, 'buscador_ins_insumo_similar_ins_insumo_similar_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ins_insumo_similar');
		$criterio->setCriterios();		
}
?>

