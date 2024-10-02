<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(InsMarcaImagen::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ins_marca_imagen.id', Gral::getVars(1, 'buscador_ins_marca_imagen_id'), Gral::getVars(1, 'buscador_ins_marca_imagen_id_comparador'));
	$criterio->add('ins_marca_imagen.ins_marca_id', Gral::getVars(1, 'buscador_ins_marca_imagen_ins_marca_id'), Gral::getVars(1, 'buscador_ins_marca_imagen_ins_marca_id_comparador'));
	$criterio->add('ins_marca_imagen.descripcion', Gral::getVars(1, 'buscador_ins_marca_imagen_descripcion'), Gral::getVars(1, 'buscador_ins_marca_imagen_descripcion_comparador'));
	$criterio->add('ins_marca_imagen.codigo', Gral::getVars(1, 'buscador_ins_marca_imagen_codigo'), Gral::getVars(1, 'buscador_ins_marca_imagen_codigo_comparador'));
	$criterio->add('ins_marca_imagen.observacion', Gral::getVars(1, 'buscador_ins_marca_imagen_observacion'), Gral::getVars(1, 'buscador_ins_marca_imagen_observacion_comparador'));
	$criterio->add('ins_marca_imagen.archivo', Gral::getVars(1, 'buscador_ins_marca_imagen_archivo'), Gral::getVars(1, 'buscador_ins_marca_imagen_archivo_comparador'));
	$criterio->add('ins_marca_imagen.peso', Gral::getVars(1, 'buscador_ins_marca_imagen_peso'), Gral::getVars(1, 'buscador_ins_marca_imagen_peso_comparador'));
	$criterio->add('ins_marca_imagen.tipo', Gral::getVars(1, 'buscador_ins_marca_imagen_tipo'), Gral::getVars(1, 'buscador_ins_marca_imagen_tipo_comparador'));
	$criterio->add('ins_marca_imagen.alto', Gral::getVars(1, 'buscador_ins_marca_imagen_alto'), Gral::getVars(1, 'buscador_ins_marca_imagen_alto_comparador'));
	$criterio->add('ins_marca_imagen.ancho', Gral::getVars(1, 'buscador_ins_marca_imagen_ancho'), Gral::getVars(1, 'buscador_ins_marca_imagen_ancho_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ins_marca_imagen');
		$criterio->setCriterios();		
}
?>

