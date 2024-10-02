<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdeTipoEstado::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pde_tipo_estado.id', Gral::getVars(1, 'buscador_pde_tipo_estado_id'), Gral::getVars(1, 'buscador_pde_tipo_estado_id_comparador'));
	$criterio->add('pde_tipo_estado.descripcion', Gral::getVars(1, 'buscador_pde_tipo_estado_descripcion'), Gral::getVars(1, 'buscador_pde_tipo_estado_descripcion_comparador'));
	$criterio->add('pde_tipo_estado.codigo', Gral::getVars(1, 'buscador_pde_tipo_estado_codigo'), Gral::getVars(1, 'buscador_pde_tipo_estado_codigo_comparador'));
	$criterio->add('pde_tipo_estado.activo', Gral::getVars(1, 'buscador_pde_tipo_estado_activo'), Gral::getVars(1, 'buscador_pde_tipo_estado_activo_comparador'));
	$criterio->add('pde_tipo_estado.publico', Gral::getVars(1, 'buscador_pde_tipo_estado_publico'), Gral::getVars(1, 'buscador_pde_tipo_estado_publico_comparador'));
	$criterio->add('pde_tipo_estado.descripcion_publica', Gral::getVars(1, 'buscador_pde_tipo_estado_descripcion_publica'), Gral::getVars(1, 'buscador_pde_tipo_estado_descripcion_publica_comparador'));
	$criterio->add('pde_tipo_estado.observacion_publica', Gral::getVars(1, 'buscador_pde_tipo_estado_observacion_publica'), Gral::getVars(1, 'buscador_pde_tipo_estado_observacion_publica_comparador'));
	$criterio->add('pde_tipo_estado.observacion', Gral::getVars(1, 'buscador_pde_tipo_estado_observacion'), Gral::getVars(1, 'buscador_pde_tipo_estado_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('pde_pedido', 'pde_pedido.pde_tipo_estado_id', 'pde_tipo_estado.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_pedido', 'pde_centro_pedido.id', 'pde_pedido.pde_centro_pedido_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'pde_pedido.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_urgencia', 'pde_urgencia.id', 'pde_pedido.pde_urgencia_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_estado', 'pde_estado.pde_tipo_estado_id', 'pde_tipo_estado.id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pde_tipo_estado');
		$criterio->setCriterios();		
}
?>

