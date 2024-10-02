<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GralMonedaTipoCambio::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('gral_moneda_tipo_cambio.id', Gral::getVars(1, 'buscador_gral_moneda_tipo_cambio_id'), Gral::getVars(1, 'buscador_gral_moneda_tipo_cambio_id_comparador'));
	$criterio->add('gral_moneda_tipo_cambio.descripcion', Gral::getVars(1, 'buscador_gral_moneda_tipo_cambio_descripcion'), Gral::getVars(1, 'buscador_gral_moneda_tipo_cambio_descripcion_comparador'));
	$criterio->add('gral_moneda_tipo_cambio.fecha', Gral::getFechaToDB(Gral::getVars(1, 'buscador_gral_moneda_tipo_cambio_fecha')), Gral::getVars(1, 'buscador_gral_moneda_tipo_cambio_fecha_comparador'));
	$criterio->add('gral_moneda_tipo_cambio.gral_moneda_id', Gral::getVars(1, 'buscador_gral_moneda_tipo_cambio_gral_moneda_id'), Gral::getVars(1, 'buscador_gral_moneda_tipo_cambio_gral_moneda_id_comparador'));
	$criterio->add('gral_moneda_tipo_cambio.gral_moneda_comparada', Gral::getVars(1, 'buscador_gral_moneda_tipo_cambio_gral_moneda_comparada'), Gral::getVars(1, 'buscador_gral_moneda_tipo_cambio_gral_moneda_comparada_comparador'));
	$criterio->add('gral_moneda_tipo_cambio.codigo', Gral::getVars(1, 'buscador_gral_moneda_tipo_cambio_codigo'), Gral::getVars(1, 'buscador_gral_moneda_tipo_cambio_codigo_comparador'));
	$criterio->add('gral_moneda_tipo_cambio.observacion', Gral::getVars(1, 'buscador_gral_moneda_tipo_cambio_observacion'), Gral::getVars(1, 'buscador_gral_moneda_tipo_cambio_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('gral_moneda_tipo_cambio');
		$criterio->setCriterios();		
}
?>

