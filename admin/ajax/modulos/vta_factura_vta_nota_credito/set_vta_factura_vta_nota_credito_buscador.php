<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(VtaFacturaVtaNotaCredito::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('vta_factura_vta_nota_credito.id', Gral::getVars(1, 'buscador_vta_factura_vta_nota_credito_id'), Gral::getVars(1, 'buscador_vta_factura_vta_nota_credito_id_comparador'));
	$criterio->add('vta_factura_vta_nota_credito.descripcion', Gral::getVars(1, 'buscador_vta_factura_vta_nota_credito_descripcion'), Gral::getVars(1, 'buscador_vta_factura_vta_nota_credito_descripcion_comparador'));
	$criterio->add('vta_factura_vta_nota_credito.vta_factura_id', Gral::getVars(1, 'buscador_vta_factura_vta_nota_credito_vta_factura_id'), Gral::getVars(1, 'buscador_vta_factura_vta_nota_credito_vta_factura_id_comparador'));
	$criterio->add('vta_factura_vta_nota_credito.vta_nota_credito_id', Gral::getVars(1, 'buscador_vta_factura_vta_nota_credito_vta_nota_credito_id'), Gral::getVars(1, 'buscador_vta_factura_vta_nota_credito_vta_nota_credito_id_comparador'));
	$criterio->add('vta_factura_vta_nota_credito.importe_afectado', Gral::getVars(1, 'buscador_vta_factura_vta_nota_credito_importe_afectado'), Gral::getVars(1, 'buscador_vta_factura_vta_nota_credito_importe_afectado_comparador'));
	$criterio->add('vta_factura_vta_nota_credito.codigo', Gral::getVars(1, 'buscador_vta_factura_vta_nota_credito_codigo'), Gral::getVars(1, 'buscador_vta_factura_vta_nota_credito_codigo_comparador'));
	$criterio->add('vta_factura_vta_nota_credito.observacion', Gral::getVars(1, 'buscador_vta_factura_vta_nota_credito_observacion'), Gral::getVars(1, 'buscador_vta_factura_vta_nota_credito_observacion_comparador'));
	$criterio->add('vta_factura_vta_nota_credito.estado', Gral::getVars(1, 'buscador_vta_factura_vta_nota_credito_estado'), Gral::getVars(1, 'buscador_vta_factura_vta_nota_credito_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('vta_factura_vta_nota_credito');
		$criterio->setCriterios();		
}
?>

