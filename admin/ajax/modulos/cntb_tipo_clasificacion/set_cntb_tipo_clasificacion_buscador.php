<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(CntbTipoClasificacion::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('cntb_tipo_clasificacion.id', Gral::getVars(1, 'buscador_cntb_tipo_clasificacion_id'), Gral::getVars(1, 'buscador_cntb_tipo_clasificacion_id_comparador'));
	$criterio->add('cntb_tipo_clasificacion.descripcion', Gral::getVars(1, 'buscador_cntb_tipo_clasificacion_descripcion'), Gral::getVars(1, 'buscador_cntb_tipo_clasificacion_descripcion_comparador'));
	$criterio->add('cntb_tipo_clasificacion.codigo', Gral::getVars(1, 'buscador_cntb_tipo_clasificacion_codigo'), Gral::getVars(1, 'buscador_cntb_tipo_clasificacion_codigo_comparador'));
	$criterio->add('cntb_tipo_clasificacion.observacion', Gral::getVars(1, 'buscador_cntb_tipo_clasificacion_observacion'), Gral::getVars(1, 'buscador_cntb_tipo_clasificacion_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('cntb_tipo_cuenta', 'cntb_tipo_cuenta.cntb_tipo_clasificacion_id', 'cntb_tipo_clasificacion.id', 'LEFT JOIN');
	$criterio->addRealJoin('cntb_tipo_saldo', 'cntb_tipo_saldo.id', 'cntb_tipo_cuenta.cntb_tipo_saldo_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('cntb_tipo_clasificacion');
		$criterio->setCriterios();		
}
?>

