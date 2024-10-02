<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdiComentario::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pdi_comentario.id', Gral::getVars(1, 'buscador_pdi_comentario_id'), Gral::getVars(1, 'buscador_pdi_comentario_id_comparador'));
	$criterio->add('pdi_comentario.descripcion', Gral::getVars(1, 'buscador_pdi_comentario_descripcion'), Gral::getVars(1, 'buscador_pdi_comentario_descripcion_comparador'));
	$criterio->add('pdi_comentario.pdi_pedido_id', Gral::getVars(1, 'buscador_pdi_comentario_pdi_pedido_id'), Gral::getVars(1, 'buscador_pdi_comentario_pdi_pedido_id_comparador'));
	$criterio->add('pdi_comentario.codigo', Gral::getVars(1, 'buscador_pdi_comentario_codigo'), Gral::getVars(1, 'buscador_pdi_comentario_codigo_comparador'));
	$criterio->add('pdi_comentario.observacion', Gral::getVars(1, 'buscador_pdi_comentario_observacion'), Gral::getVars(1, 'buscador_pdi_comentario_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pdi_comentario');
		$criterio->setCriterios();		
}
?>

