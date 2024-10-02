<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(InsInsumoDestinoTransformacion::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ins_insumo_destino_transformacion.id', Gral::getVars(1, 'buscador_ins_insumo_destino_transformacion_id'), Gral::getVars(1, 'buscador_ins_insumo_destino_transformacion_id_comparador'));
	$criterio->add('ins_insumo_destino_transformacion.ins_insumo_id', Gral::getVars(1, 'buscador_ins_insumo_destino_transformacion_ins_insumo_id'), Gral::getVars(1, 'buscador_ins_insumo_destino_transformacion_ins_insumo_id_comparador'));
	$criterio->add('ins_insumo_destino_transformacion.ins_insumo_destino', Gral::getVars(1, 'buscador_ins_insumo_destino_transformacion_ins_insumo_destino'), Gral::getVars(1, 'buscador_ins_insumo_destino_transformacion_ins_insumo_destino_comparador'));
	$criterio->add('ins_insumo_destino_transformacion.cantidad', Gral::getVars(1, 'buscador_ins_insumo_destino_transformacion_cantidad'), Gral::getVars(1, 'buscador_ins_insumo_destino_transformacion_cantidad_comparador'));
	$criterio->add('ins_insumo_destino_transformacion.descripcion', Gral::getVars(1, 'buscador_ins_insumo_destino_transformacion_descripcion'), Gral::getVars(1, 'buscador_ins_insumo_destino_transformacion_descripcion_comparador'));
	$criterio->add('ins_insumo_destino_transformacion.codigo', Gral::getVars(1, 'buscador_ins_insumo_destino_transformacion_codigo'), Gral::getVars(1, 'buscador_ins_insumo_destino_transformacion_codigo_comparador'));
	$criterio->add('ins_insumo_destino_transformacion.observacion', Gral::getVars(1, 'buscador_ins_insumo_destino_transformacion_observacion'), Gral::getVars(1, 'buscador_ins_insumo_destino_transformacion_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ins_insumo_destino_transformacion');
		$criterio->setCriterios();		
}
?>

