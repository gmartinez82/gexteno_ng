<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PdeUrgencia::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('pde_urgencia.id', Gral::getVars(1, 'buscador_pde_urgencia_id'), Gral::getVars(1, 'buscador_pde_urgencia_id_comparador'));
	$criterio->add('pde_urgencia.descripcion', Gral::getVars(1, 'buscador_pde_urgencia_descripcion'), Gral::getVars(1, 'buscador_pde_urgencia_descripcion_comparador'));
	$criterio->add('pde_urgencia.codigo', Gral::getVars(1, 'buscador_pde_urgencia_codigo'), Gral::getVars(1, 'buscador_pde_urgencia_codigo_comparador'));
	$criterio->add('pde_urgencia.observacion', Gral::getVars(1, 'buscador_pde_urgencia_observacion'), Gral::getVars(1, 'buscador_pde_urgencia_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('pde_pedido', 'pde_pedido.pde_urgencia_id', 'pde_urgencia.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_pedido', 'pde_centro_pedido.id', 'pde_pedido.pde_centro_pedido_id', 'LEFT JOIN');
	$criterio->addRealJoin('ins_insumo', 'ins_insumo.id', 'pde_pedido.ins_insumo_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_tipo_estado', 'pde_tipo_estado.id', 'pde_pedido.pde_tipo_estado_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('pde_urgencia');
		$criterio->setCriterios();		
}
?>

