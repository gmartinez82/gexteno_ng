<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaPoliticaDescuentoInsInsumo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_politica_descuento_ins_insumo.id', Gral::getVars(1, 'buscador_vta_politica_descuento_ins_insumo_id'), Gral::getVars(1, 'buscador_vta_politica_descuento_ins_insumo_id_comparador'));
	$criterio->add('vta_politica_descuento_ins_insumo.vta_politica_descuento_id', Gral::getVars(1, 'buscador_vta_politica_descuento_ins_insumo_vta_politica_descuento_id'), Gral::getVars(1, 'buscador_vta_politica_descuento_ins_insumo_vta_politica_descuento_id_comparador'));
	$criterio->add('vta_politica_descuento_ins_insumo.ins_insumo_id', Gral::getVars(1, 'buscador_vta_politica_descuento_ins_insumo_ins_insumo_id'), Gral::getVars(1, 'buscador_vta_politica_descuento_ins_insumo_ins_insumo_id_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_politica_descuento_ins_insumo');
		$criterio->setCriterios();		
}
?>

