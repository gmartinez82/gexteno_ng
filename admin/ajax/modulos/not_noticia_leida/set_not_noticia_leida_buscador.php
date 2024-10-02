<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(NotNoticiaLeida::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('not_noticia_leida.id', Gral::getVars(1, 'buscador_not_noticia_leida_id'), Gral::getVars(1, 'buscador_not_noticia_leida_id_comparador'));
	$criterio->add('not_noticia_leida.descripcion', Gral::getVars(1, 'buscador_not_noticia_leida_descripcion'), Gral::getVars(1, 'buscador_not_noticia_leida_descripcion_comparador'));
	$criterio->add('not_noticia_leida.not_noticia_id', Gral::getVars(1, 'buscador_not_noticia_leida_not_noticia_id'), Gral::getVars(1, 'buscador_not_noticia_leida_not_noticia_id_comparador'));
	$criterio->add('not_noticia_leida.codigo', Gral::getVars(1, 'buscador_not_noticia_leida_codigo'), Gral::getVars(1, 'buscador_not_noticia_leida_codigo_comparador'));
	$criterio->add('not_noticia_leida.sesion', Gral::getVars(1, 'buscador_not_noticia_leida_sesion'), Gral::getVars(1, 'buscador_not_noticia_leida_sesion_comparador'));
	$criterio->add('not_noticia_leida.numero_ip', Gral::getVars(1, 'buscador_not_noticia_leida_numero_ip'), Gral::getVars(1, 'buscador_not_noticia_leida_numero_ip_comparador'));
	$criterio->add('not_noticia_leida.observacion', Gral::getVars(1, 'buscador_not_noticia_leida_observacion'), Gral::getVars(1, 'buscador_not_noticia_leida_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('not_noticia_leida');
		$criterio->setCriterios();		
}
?>

