<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PrvPreventista::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('prv_preventista.id', Gral::getVars(1, 'buscador_prv_preventista_id'), Gral::getVars(1, 'buscador_prv_preventista_id_comparador'));
	$criterio->add('prv_preventista.descripcion', Gral::getVars(1, 'buscador_prv_preventista_descripcion'), Gral::getVars(1, 'buscador_prv_preventista_descripcion_comparador'));
	$criterio->add('prv_preventista.prv_proveedor_id', Gral::getVars(1, 'buscador_prv_preventista_prv_proveedor_id'), Gral::getVars(1, 'buscador_prv_preventista_prv_proveedor_id_comparador'));
	$criterio->add('prv_preventista.apellido', Gral::getVars(1, 'buscador_prv_preventista_apellido'), Gral::getVars(1, 'buscador_prv_preventista_apellido_comparador'));
	$criterio->add('prv_preventista.nombre', Gral::getVars(1, 'buscador_prv_preventista_nombre'), Gral::getVars(1, 'buscador_prv_preventista_nombre_comparador'));
	$criterio->add('prv_preventista.email', Gral::getVars(1, 'buscador_prv_preventista_email'), Gral::getVars(1, 'buscador_prv_preventista_email_comparador'));
	$criterio->add('prv_preventista.telefono', Gral::getVars(1, 'buscador_prv_preventista_telefono'), Gral::getVars(1, 'buscador_prv_preventista_telefono_comparador'));
	$criterio->add('prv_preventista.celular', Gral::getVars(1, 'buscador_prv_preventista_celular'), Gral::getVars(1, 'buscador_prv_preventista_celular_comparador'));
	$criterio->add('prv_preventista.codigo', Gral::getVars(1, 'buscador_prv_preventista_codigo'), Gral::getVars(1, 'buscador_prv_preventista_codigo_comparador'));
	$criterio->add('prv_preventista.observacion', Gral::getVars(1, 'buscador_prv_preventista_observacion'), Gral::getVars(1, 'buscador_prv_preventista_observacion_comparador'));
	$criterio->add('prv_preventista.estado', Gral::getVars(1, 'buscador_prv_preventista_estado'), Gral::getVars(1, 'buscador_prv_preventista_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('pde_orden_pago_estado', 'pde_orden_pago_estado.prv_preventista_id', 'prv_preventista.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_orden_pago', 'pde_orden_pago.id', 'pde_orden_pago_estado.pde_orden_pago_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_orden_pago_tipo_estado', 'pde_orden_pago_tipo_estado.id', 'pde_orden_pago_estado.pde_orden_pago_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_empresa_transportadora', 'gral_empresa_transportadora.id', 'pde_orden_pago_estado.gral_empresa_transportadora_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('prv_preventista');
		$criterio->setCriterios();		
}
?>

