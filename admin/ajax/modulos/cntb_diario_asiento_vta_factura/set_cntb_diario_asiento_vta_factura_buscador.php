<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(CntbDiarioAsientoVtaFactura::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('cntb_diario_asiento_vta_factura.id', Gral::getVars(1, 'buscador_cntb_diario_asiento_vta_factura_id'), Gral::getVars(1, 'buscador_cntb_diario_asiento_vta_factura_id_comparador'));
	$criterio->add('cntb_diario_asiento_vta_factura.cntb_periodo_id', Gral::getVars(1, 'buscador_cntb_diario_asiento_vta_factura_cntb_periodo_id'), Gral::getVars(1, 'buscador_cntb_diario_asiento_vta_factura_cntb_periodo_id_comparador'));
	$criterio->add('cntb_diario_asiento_vta_factura.cntb_diario_asiento_id', Gral::getVars(1, 'buscador_cntb_diario_asiento_vta_factura_cntb_diario_asiento_id'), Gral::getVars(1, 'buscador_cntb_diario_asiento_vta_factura_cntb_diario_asiento_id_comparador'));
	$criterio->add('cntb_diario_asiento_vta_factura.vta_factura_id', Gral::getVars(1, 'buscador_cntb_diario_asiento_vta_factura_vta_factura_id'), Gral::getVars(1, 'buscador_cntb_diario_asiento_vta_factura_vta_factura_id_comparador'));
	$criterio->add('cntb_diario_asiento_vta_factura.estado', Gral::getVars(1, 'buscador_cntb_diario_asiento_vta_factura_estado'), Gral::getVars(1, 'buscador_cntb_diario_asiento_vta_factura_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('cntb_diario_asiento_vta_factura');
		$criterio->setCriterios();		
}
?>

