<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdeFacturaPdeTributo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pde_factura_pde_tributo.id', Gral::getVars(1, 'buscador_pde_factura_pde_tributo_id'), Gral::getVars(1, 'buscador_pde_factura_pde_tributo_id_comparador'));
	$criterio->add('pde_factura_pde_tributo.descripcion', Gral::getVars(1, 'buscador_pde_factura_pde_tributo_descripcion'), Gral::getVars(1, 'buscador_pde_factura_pde_tributo_descripcion_comparador'));
	$criterio->add('pde_factura_pde_tributo.pde_factura_id', Gral::getVars(1, 'buscador_pde_factura_pde_tributo_pde_factura_id'), Gral::getVars(1, 'buscador_pde_factura_pde_tributo_pde_factura_id_comparador'));
	$criterio->add('pde_factura_pde_tributo.pde_tributo_id', Gral::getVars(1, 'buscador_pde_factura_pde_tributo_pde_tributo_id'), Gral::getVars(1, 'buscador_pde_factura_pde_tributo_pde_tributo_id_comparador'));
	$criterio->add('pde_factura_pde_tributo.importe_imponible', Gral::getVars(1, 'buscador_pde_factura_pde_tributo_importe_imponible'), Gral::getVars(1, 'buscador_pde_factura_pde_tributo_importe_imponible_comparador'));
	$criterio->add('pde_factura_pde_tributo.importe_tributo', Gral::getVars(1, 'buscador_pde_factura_pde_tributo_importe_tributo'), Gral::getVars(1, 'buscador_pde_factura_pde_tributo_importe_tributo_comparador'));
	$criterio->add('pde_factura_pde_tributo.alicuota_porcentual', Gral::getVars(1, 'buscador_pde_factura_pde_tributo_alicuota_porcentual'), Gral::getVars(1, 'buscador_pde_factura_pde_tributo_alicuota_porcentual_comparador'));
	$criterio->add('pde_factura_pde_tributo.alicuota_decimal', Gral::getVars(1, 'buscador_pde_factura_pde_tributo_alicuota_decimal'), Gral::getVars(1, 'buscador_pde_factura_pde_tributo_alicuota_decimal_comparador'));
	$criterio->add('pde_factura_pde_tributo.codigo', Gral::getVars(1, 'buscador_pde_factura_pde_tributo_codigo'), Gral::getVars(1, 'buscador_pde_factura_pde_tributo_codigo_comparador'));
	$criterio->add('pde_factura_pde_tributo.observacion', Gral::getVars(1, 'buscador_pde_factura_pde_tributo_observacion'), Gral::getVars(1, 'buscador_pde_factura_pde_tributo_observacion_comparador'));
	$criterio->add('pde_factura_pde_tributo.estado', Gral::getVars(1, 'buscador_pde_factura_pde_tributo_estado'), Gral::getVars(1, 'buscador_pde_factura_pde_tributo_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('pde_nota_credito_pde_factura_pde_tributo', 'pde_nota_credito_pde_factura_pde_tributo.pde_factura_pde_tributo_id', 'pde_factura_pde_tributo.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_nota_credito', 'pde_nota_credito.id', 'pde_nota_credito_pde_factura_pde_tributo.pde_nota_credito_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pde_factura_pde_tributo');
		$criterio->setCriterios();		
}
?>

