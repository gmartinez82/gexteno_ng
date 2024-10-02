<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(InsInsumoPanPanol::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ins_insumo_pan_panol.id', Gral::getVars(1, 'buscador_ins_insumo_pan_panol_id'), Gral::getVars(1, 'buscador_ins_insumo_pan_panol_id_comparador'));
	$criterio->add('ins_insumo_pan_panol.ins_insumo_id', Gral::getVars(1, 'buscador_ins_insumo_pan_panol_ins_insumo_id'), Gral::getVars(1, 'buscador_ins_insumo_pan_panol_ins_insumo_id_comparador'));
	$criterio->add('ins_insumo_pan_panol.pan_panol_id', Gral::getVars(1, 'buscador_ins_insumo_pan_panol_pan_panol_id'), Gral::getVars(1, 'buscador_ins_insumo_pan_panol_pan_panol_id_comparador'));
	$criterio->add('ins_insumo_pan_panol.pan_ubi_piso_id', Gral::getVars(1, 'buscador_ins_insumo_pan_panol_pan_ubi_piso_id'), Gral::getVars(1, 'buscador_ins_insumo_pan_panol_pan_ubi_piso_id_comparador'));
	$criterio->add('ins_insumo_pan_panol.pan_ubi_pasillo_id', Gral::getVars(1, 'buscador_ins_insumo_pan_panol_pan_ubi_pasillo_id'), Gral::getVars(1, 'buscador_ins_insumo_pan_panol_pan_ubi_pasillo_id_comparador'));
	$criterio->add('ins_insumo_pan_panol.pan_ubi_estante_id', Gral::getVars(1, 'buscador_ins_insumo_pan_panol_pan_ubi_estante_id'), Gral::getVars(1, 'buscador_ins_insumo_pan_panol_pan_ubi_estante_id_comparador'));
	$criterio->add('ins_insumo_pan_panol.pan_ubi_altura_id', Gral::getVars(1, 'buscador_ins_insumo_pan_panol_pan_ubi_altura_id'), Gral::getVars(1, 'buscador_ins_insumo_pan_panol_pan_ubi_altura_id_comparador'));
	$criterio->add('ins_insumo_pan_panol.pan_ubi_casillero_id', Gral::getVars(1, 'buscador_ins_insumo_pan_panol_pan_ubi_casillero_id'), Gral::getVars(1, 'buscador_ins_insumo_pan_panol_pan_ubi_casillero_id_comparador'));
	$criterio->add('ins_insumo_pan_panol.pan_ubi_celda_id', Gral::getVars(1, 'buscador_ins_insumo_pan_panol_pan_ubi_celda_id'), Gral::getVars(1, 'buscador_ins_insumo_pan_panol_pan_ubi_celda_id_comparador'));
	$criterio->add('ins_insumo_pan_panol.ins_clasificacion_id', Gral::getVars(1, 'buscador_ins_insumo_pan_panol_ins_clasificacion_id'), Gral::getVars(1, 'buscador_ins_insumo_pan_panol_ins_clasificacion_id_comparador'));
	$criterio->add('ins_insumo_pan_panol.punto_minimo', Gral::getVars(1, 'buscador_ins_insumo_pan_panol_punto_minimo'), Gral::getVars(1, 'buscador_ins_insumo_pan_panol_punto_minimo_comparador'));
	$criterio->add('ins_insumo_pan_panol.punto_pedido', Gral::getVars(1, 'buscador_ins_insumo_pan_panol_punto_pedido'), Gral::getVars(1, 'buscador_ins_insumo_pan_panol_punto_pedido_comparador'));
	$criterio->add('ins_insumo_pan_panol.punto_maximo', Gral::getVars(1, 'buscador_ins_insumo_pan_panol_punto_maximo'), Gral::getVars(1, 'buscador_ins_insumo_pan_panol_punto_maximo_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ins_insumo_pan_panol');
		$criterio->setCriterios();		
}
?>

