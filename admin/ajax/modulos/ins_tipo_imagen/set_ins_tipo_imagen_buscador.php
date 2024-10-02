<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(InsTipoImagen::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ins_tipo_imagen.id', Gral::getVars(1, 'buscador_ins_tipo_imagen_id'), Gral::getVars(1, 'buscador_ins_tipo_imagen_id_comparador'));
	$criterio->add('ins_tipo_imagen.descripcion', Gral::getVars(1, 'buscador_ins_tipo_imagen_descripcion'), Gral::getVars(1, 'buscador_ins_tipo_imagen_descripcion_comparador'));
	$criterio->add('ins_tipo_imagen.codigo', Gral::getVars(1, 'buscador_ins_tipo_imagen_codigo'), Gral::getVars(1, 'buscador_ins_tipo_imagen_codigo_comparador'));
	$criterio->add('ins_tipo_imagen.observacion', Gral::getVars(1, 'buscador_ins_tipo_imagen_observacion'), Gral::getVars(1, 'buscador_ins_tipo_imagen_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('ins_insumo_imagen', 'ins_insumo_imagen.ins_tipo_imagen_id', 'ins_tipo_imagen.id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'ins_insumo_imagen.ins_insumo_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ins_tipo_imagen');
		$criterio->setCriterios();		
}
?>

