<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(InsInsumoVehModelo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ins_insumo_veh_modelo.id', Gral::getVars(1, 'buscador_ins_insumo_veh_modelo_id'), Gral::getVars(1, 'buscador_ins_insumo_veh_modelo_id_comparador'));
	$criterio->add('ins_insumo_veh_modelo.ins_insumo_id', Gral::getVars(1, 'buscador_ins_insumo_veh_modelo_ins_insumo_id'), Gral::getVars(1, 'buscador_ins_insumo_veh_modelo_ins_insumo_id_comparador'));
	$criterio->add('ins_insumo_veh_modelo.veh_modelo_id', Gral::getVars(1, 'buscador_ins_insumo_veh_modelo_veh_modelo_id'), Gral::getVars(1, 'buscador_ins_insumo_veh_modelo_veh_modelo_id_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ins_insumo_veh_modelo');
		$criterio->setCriterios();		
}
?>

