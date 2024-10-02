<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuDeVtaFactura::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_de_vta_factura.id', Gral::getVars(1, 'buscador_eku_de_vta_factura_id'), Gral::getVars(1, 'buscador_eku_de_vta_factura_id_comparador'));
	$criterio->add('eku_de_vta_factura.descripcion', Gral::getVars(1, 'buscador_eku_de_vta_factura_descripcion'), Gral::getVars(1, 'buscador_eku_de_vta_factura_descripcion_comparador'));
	$criterio->add('eku_de_vta_factura.eku_de_id', Gral::getVars(1, 'buscador_eku_de_vta_factura_eku_de_id'), Gral::getVars(1, 'buscador_eku_de_vta_factura_eku_de_id_comparador'));
	$criterio->add('eku_de_vta_factura.vta_factura_id', Gral::getVars(1, 'buscador_eku_de_vta_factura_vta_factura_id'), Gral::getVars(1, 'buscador_eku_de_vta_factura_vta_factura_id_comparador'));
	$criterio->add('eku_de_vta_factura.codigo', Gral::getVars(1, 'buscador_eku_de_vta_factura_codigo'), Gral::getVars(1, 'buscador_eku_de_vta_factura_codigo_comparador'));
	$criterio->add('eku_de_vta_factura.observacion', Gral::getVars(1, 'buscador_eku_de_vta_factura_observacion'), Gral::getVars(1, 'buscador_eku_de_vta_factura_observacion_comparador'));
	$criterio->add('eku_de_vta_factura.estado', Gral::getVars(1, 'buscador_eku_de_vta_factura_estado'), Gral::getVars(1, 'buscador_eku_de_vta_factura_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_de_vta_factura');
		$criterio->setCriterios();		
}
?>

