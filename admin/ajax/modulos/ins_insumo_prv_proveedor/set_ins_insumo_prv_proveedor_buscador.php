<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(InsInsumoPrvProveedor::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ins_insumo_prv_proveedor.id', Gral::getVars(1, 'buscador_ins_insumo_prv_proveedor_id'), Gral::getVars(1, 'buscador_ins_insumo_prv_proveedor_id_comparador'));
	$criterio->add('ins_insumo_prv_proveedor.ins_insumo_id', Gral::getVars(1, 'buscador_ins_insumo_prv_proveedor_ins_insumo_id'), Gral::getVars(1, 'buscador_ins_insumo_prv_proveedor_ins_insumo_id_comparador'));
	$criterio->add('ins_insumo_prv_proveedor.prv_proveedor_id', Gral::getVars(1, 'buscador_ins_insumo_prv_proveedor_prv_proveedor_id'), Gral::getVars(1, 'buscador_ins_insumo_prv_proveedor_prv_proveedor_id_comparador'));
	$criterio->add('ins_insumo_prv_proveedor.codigo', Gral::getVars(1, 'buscador_ins_insumo_prv_proveedor_codigo'), Gral::getVars(1, 'buscador_ins_insumo_prv_proveedor_codigo_comparador'));
	$criterio->add('ins_insumo_prv_proveedor.observacion', Gral::getVars(1, 'buscador_ins_insumo_prv_proveedor_observacion'), Gral::getVars(1, 'buscador_ins_insumo_prv_proveedor_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ins_insumo_prv_proveedor');
		$criterio->setCriterios();		
}
?>

