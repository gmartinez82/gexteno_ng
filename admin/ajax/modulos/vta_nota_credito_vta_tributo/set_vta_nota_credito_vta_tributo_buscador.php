<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaNotaCreditoVtaTributo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_nota_credito_vta_tributo.id', Gral::getVars(1, 'buscador_vta_nota_credito_vta_tributo_id'), Gral::getVars(1, 'buscador_vta_nota_credito_vta_tributo_id_comparador'));
	$criterio->add('vta_nota_credito_vta_tributo.descripcion', Gral::getVars(1, 'buscador_vta_nota_credito_vta_tributo_descripcion'), Gral::getVars(1, 'buscador_vta_nota_credito_vta_tributo_descripcion_comparador'));
	$criterio->add('vta_nota_credito_vta_tributo.vta_nota_credito_id', Gral::getVars(1, 'buscador_vta_nota_credito_vta_tributo_vta_nota_credito_id'), Gral::getVars(1, 'buscador_vta_nota_credito_vta_tributo_vta_nota_credito_id_comparador'));
	$criterio->add('vta_nota_credito_vta_tributo.vta_tributo_id', Gral::getVars(1, 'buscador_vta_nota_credito_vta_tributo_vta_tributo_id'), Gral::getVars(1, 'buscador_vta_nota_credito_vta_tributo_vta_tributo_id_comparador'));
	$criterio->add('vta_nota_credito_vta_tributo.importe_imponible', Gral::getVars(1, 'buscador_vta_nota_credito_vta_tributo_importe_imponible'), Gral::getVars(1, 'buscador_vta_nota_credito_vta_tributo_importe_imponible_comparador'));
	$criterio->add('vta_nota_credito_vta_tributo.importe_tributo', Gral::getVars(1, 'buscador_vta_nota_credito_vta_tributo_importe_tributo'), Gral::getVars(1, 'buscador_vta_nota_credito_vta_tributo_importe_tributo_comparador'));
	$criterio->add('vta_nota_credito_vta_tributo.alicuota_porcentual', Gral::getVars(1, 'buscador_vta_nota_credito_vta_tributo_alicuota_porcentual'), Gral::getVars(1, 'buscador_vta_nota_credito_vta_tributo_alicuota_porcentual_comparador'));
	$criterio->add('vta_nota_credito_vta_tributo.alicuota_decimal', Gral::getVars(1, 'buscador_vta_nota_credito_vta_tributo_alicuota_decimal'), Gral::getVars(1, 'buscador_vta_nota_credito_vta_tributo_alicuota_decimal_comparador'));
	$criterio->add('vta_nota_credito_vta_tributo.codigo', Gral::getVars(1, 'buscador_vta_nota_credito_vta_tributo_codigo'), Gral::getVars(1, 'buscador_vta_nota_credito_vta_tributo_codigo_comparador'));
	$criterio->add('vta_nota_credito_vta_tributo.observacion', Gral::getVars(1, 'buscador_vta_nota_credito_vta_tributo_observacion'), Gral::getVars(1, 'buscador_vta_nota_credito_vta_tributo_observacion_comparador'));
	$criterio->add('vta_nota_credito_vta_tributo.estado', Gral::getVars(1, 'buscador_vta_nota_credito_vta_tributo_estado'), Gral::getVars(1, 'buscador_vta_nota_credito_vta_tributo_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_nota_credito_vta_tributo');
		$criterio->setCriterios();		
}
?>

