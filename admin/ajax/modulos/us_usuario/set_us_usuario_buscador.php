<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(UsUsuario::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	$criterio->add('us_agrupado.us_grupo_id', Gral::getVars(1, 'buscador_us_agrupado_us_grupo_id'), Gral::getVars(1, 'buscador_us_agrupado_us_grupo_id_comparador'));
	$criterio->add('us_acreditado.us_credencial_id', Gral::getVars(1, 'buscador_us_acreditado_us_credencial_id'), Gral::getVars(1, 'buscador_us_acreditado_us_credencial_id_comparador'));
	
	// criterios agregados por atributos de clase
	$criterio->add('us_usuario.id', Gral::getVars(1, 'buscador_us_usuario_id'), Gral::getVars(1, 'buscador_us_usuario_id_comparador'));
	$criterio->add('us_usuario.gral_lenguaje_id', Gral::getVars(1, 'buscador_us_usuario_gral_lenguaje_id'), Gral::getVars(1, 'buscador_us_usuario_gral_lenguaje_id_comparador'));
	$criterio->add('us_usuario.descripcion', Gral::getVars(1, 'buscador_us_usuario_descripcion'), Gral::getVars(1, 'buscador_us_usuario_descripcion_comparador'));
	$criterio->add('us_usuario.apellido', Gral::getVars(1, 'buscador_us_usuario_apellido'), Gral::getVars(1, 'buscador_us_usuario_apellido_comparador'));
	$criterio->add('us_usuario.nombre', Gral::getVars(1, 'buscador_us_usuario_nombre'), Gral::getVars(1, 'buscador_us_usuario_nombre_comparador'));
	$criterio->add('us_usuario.usuario', Gral::getVars(1, 'buscador_us_usuario_usuario'), Gral::getVars(1, 'buscador_us_usuario_usuario_comparador'));
	$criterio->add('us_usuario.codigo', Gral::getVars(1, 'buscador_us_usuario_codigo'), Gral::getVars(1, 'buscador_us_usuario_codigo_comparador'));
	$criterio->add('us_usuario.hash', Gral::getVars(1, 'buscador_us_usuario_hash'), Gral::getVars(1, 'buscador_us_usuario_hash_comparador'));
	$criterio->add('us_usuario.email', Gral::getVars(1, 'buscador_us_usuario_email'), Gral::getVars(1, 'buscador_us_usuario_email_comparador'));
	$criterio->add('us_usuario.telefono', Gral::getVars(1, 'buscador_us_usuario_telefono'), Gral::getVars(1, 'buscador_us_usuario_telefono_comparador'));
	$criterio->add('us_usuario.celular', Gral::getVars(1, 'buscador_us_usuario_celular'), Gral::getVars(1, 'buscador_us_usuario_celular_comparador'));
	$criterio->add('us_usuario.observacion', Gral::getVars(1, 'buscador_us_usuario_observacion'), Gral::getVars(1, 'buscador_us_usuario_observacion_comparador'));
	$criterio->add('us_usuario.estado', Gral::getVars(1, 'buscador_us_usuario_estado'), Gral::getVars(1, 'buscador_us_usuario_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('us_agrupado', 'us_agrupado.us_usuario_id', 'us_usuario.id', 'LEFT JOIN');
	$criterio->addRealJoin('us_grupo', 'us_grupo.id', 'us_agrupado.us_grupo_id', 'LEFT JOIN');
	$criterio->addRealJoin('us_acreditado', 'us_acreditado.us_usuario_id', 'us_usuario.id', 'LEFT JOIN');
	$criterio->addRealJoin('us_credencial', 'us_credencial.id', 'us_acreditado.us_credencial_id', 'LEFT JOIN');
	$criterio->addRealJoin('us_usuario_dato', 'us_usuario_dato.us_usuario_id', 'us_usuario.id', 'LEFT JOIN');
	$criterio->addRealJoin('us_usuario_auditoria', 'us_usuario_auditoria.us_usuario_id', 'us_usuario.id', 'LEFT JOIN');
	$criterio->addRealJoin('us_mensaje', 'us_mensaje.us_usuario_id', 'us_usuario.id', 'LEFT JOIN');
	$criterio->addRealJoin('us_memo', 'us_memo.us_usuario_id', 'us_usuario.id', 'LEFT JOIN');
	$criterio->addRealJoin('us_memo_tipo_estado', 'us_memo_tipo_estado.id', 'us_memo.us_memo_tipo_estado_id', 'LEFT JOIN');
	$criterio->addRealJoin('us_memo_tipo', 'us_memo_tipo.id', 'us_memo.us_memo_tipo_id', 'LEFT JOIN');
	$criterio->addRealJoin('us_clave', 'us_clave.us_usuario_id', 'us_usuario.id', 'LEFT JOIN');
	$criterio->addRealJoin('us_login', 'us_login.us_usuario_id', 'us_usuario.id', 'LEFT JOIN');
	$criterio->addRealJoin('us_navegacion', 'us_navegacion.us_usuario_id', 'us_usuario.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_sucursal_us_usuario', 'gral_sucursal_us_usuario.us_usuario_id', 'us_usuario.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_sucursal', 'gral_sucursal.id', 'gral_sucursal_us_usuario.gral_sucursal_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_zona_us_usuario', 'gral_zona_us_usuario.us_usuario_id', 'us_usuario.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_zona', 'gral_zona.id', 'gral_zona_us_usuario.gral_zona_id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_centro_costo_us_usuario', 'gral_centro_costo_us_usuario.us_usuario_id', 'us_usuario.id', 'LEFT JOIN');
	$criterio->addRealJoin('gral_centro_costo', 'gral_centro_costo.id', 'gral_centro_costo_us_usuario.gral_centro_costo_id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_proveedor_us_usuario', 'prv_proveedor_us_usuario.us_usuario_id', 'us_usuario.id', 'LEFT JOIN');
	$criterio->addRealJoin('prv_proveedor', 'prv_proveedor.id', 'prv_proveedor_us_usuario.prv_proveedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('pan_panol_us_usuario', 'pan_panol_us_usuario.us_usuario_id', 'us_usuario.id', 'LEFT JOIN');
	$criterio->addRealJoin('pan_panol', 'pan_panol.id', 'pan_panol_us_usuario.pan_panol_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_vendedor_us_usuario', 'vta_vendedor_us_usuario.us_usuario_id', 'us_usuario.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_vendedor', 'vta_vendedor.id', 'vta_vendedor_us_usuario.vta_vendedor_id', 'LEFT JOIN');
	$criterio->addRealJoin('pdi_pedido_destinatario', 'pdi_pedido_destinatario.us_usuario_id', 'us_usuario.id', 'LEFT JOIN');
	$criterio->addRealJoin('pdi_pedido', 'pdi_pedido.id', 'pdi_pedido_destinatario.pdi_pedido_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_pedido_destinatario', 'pde_pedido_destinatario.us_usuario_id', 'us_usuario.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_pedido', 'pde_pedido.id', 'pde_pedido_destinatario.pde_pedido_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_cotizacion_destinatario', 'pde_cotizacion_destinatario.us_usuario_id', 'us_usuario.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_cotizacion', 'pde_cotizacion.id', 'pde_cotizacion_destinatario.pde_cotizacion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_destinatario', 'pde_oc_destinatario.us_usuario_id', 'us_usuario.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc', 'pde_oc.id', 'pde_oc_destinatario.pde_oc_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion_destinatario', 'pde_recepcion_destinatario.us_usuario_id', 'us_usuario.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_recepcion', 'pde_recepcion.id', 'pde_recepcion_destinatario.pde_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_recepcion_us_usuario', 'pde_centro_recepcion_us_usuario.us_usuario_id', 'us_usuario.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_recepcion', 'pde_centro_recepcion.id', 'pde_centro_recepcion_us_usuario.pde_centro_recepcion_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_pedido_us_usuario', 'pde_centro_pedido_us_usuario.us_usuario_id', 'us_usuario.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_centro_pedido', 'pde_centro_pedido.id', 'pde_centro_pedido_us_usuario.pde_centro_pedido_id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_reclamo_destinatario', 'pde_oc_reclamo_destinatario.us_usuario_id', 'us_usuario.id', 'LEFT JOIN');
	$criterio->addRealJoin('pde_oc_reclamo', 'pde_oc_reclamo.id', 'pde_oc_reclamo_destinatario.pde_oc_reclamo_id', 'LEFT JOIN');
	$criterio->addRealJoin('nov_novedad_destinatario', 'nov_novedad_destinatario.us_usuario_id', 'us_usuario.id', 'LEFT JOIN');
	$criterio->addRealJoin('nov_novedad', 'nov_novedad.id', 'nov_novedad_destinatario.nov_novedad_id', 'LEFT JOIN');
	$criterio->addRealJoin('nov_novedad_observado', 'nov_novedad_observado.us_usuario_id', 'us_usuario.id', 'LEFT JOIN');
	$criterio->addRealJoin('nov_novedad_leido', 'nov_novedad_leido.us_usuario_id', 'us_usuario.id', 'LEFT JOIN');
	$criterio->addRealJoin('alt_alerta_us_usuario', 'alt_alerta_us_usuario.us_usuario_id', 'us_usuario.id', 'LEFT JOIN');
	$criterio->addRealJoin('alt_alerta', 'alt_alerta.id', 'alt_alerta_us_usuario.alt_alerta_id', 'LEFT JOIN');
	$criterio->addRealJoin('alt_control_us_usuario', 'alt_control_us_usuario.us_usuario_id', 'us_usuario.id', 'LEFT JOIN');
	$criterio->addRealJoin('alt_control', 'alt_control.id', 'alt_control_us_usuario.alt_control_id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_cajero_us_usuario', 'fnd_cajero_us_usuario.us_usuario_id', 'us_usuario.id', 'LEFT JOIN');
	$criterio->addRealJoin('fnd_cajero', 'fnd_cajero.id', 'fnd_cajero_us_usuario.fnd_cajero_id', 'LEFT JOIN');
	$criterio->addRealJoin('app_mov_instalacion', 'app_mov_instalacion.us_usuario_id', 'us_usuario.id', 'LEFT JOIN');
	$criterio->addRealJoin('app_mov_dispositivo', 'app_mov_dispositivo.id', 'app_mov_instalacion.app_mov_dispositivo_id', 'LEFT JOIN');
	$criterio->addRealJoin('app_mov_modulo', 'app_mov_modulo.id', 'app_mov_instalacion.app_mov_modulo_id', 'LEFT JOIN');
	$criterio->addRealJoin('gen_api_token', 'gen_api_token.id', 'app_mov_instalacion.gen_api_token_id', 'LEFT JOIN');
	$criterio->addRealJoin('app_mov_version', 'app_mov_version.id', 'app_mov_instalacion.app_mov_version_id', 'LEFT JOIN');
	$criterio->addRealJoin('ope_chofer_us_usuario', 'ope_chofer_us_usuario.us_usuario_id', 'us_usuario.id', 'LEFT JOIN');
	$criterio->addRealJoin('ope_chofer', 'ope_chofer.id', 'ope_chofer_us_usuario.ope_chofer_id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto_mensaje', 'vta_presupuesto_mensaje.us_usuario_id', 'us_usuario.id', 'LEFT JOIN');
	$criterio->addRealJoin('vta_presupuesto', 'vta_presupuesto.id', 'vta_presupuesto_mensaje.vta_presupuesto_id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente_tienda', 'cli_cliente_tienda.id', 'vta_presupuesto_mensaje.cli_cliente_tienda_id', 'LEFT JOIN');
	$criterio->addRealJoin('per_persona_us_usuario', 'per_persona_us_usuario.us_usuario_id', 'us_usuario.id', 'LEFT JOIN');
	$criterio->addRealJoin('per_persona', 'per_persona.id', 'per_persona_us_usuario.per_persona_id', 'LEFT JOIN');
	$criterio->addRealJoin('pln_jornada_us_usuario', 'pln_jornada_us_usuario.us_usuario_id', 'us_usuario.id', 'LEFT JOIN');
	$criterio->addRealJoin('pln_jornada', 'pln_jornada.id', 'pln_jornada_us_usuario.pln_jornada_id', 'LEFT JOIN');
	$criterio->addRealJoin('ope_operario_us_usuario', 'ope_operario_us_usuario.us_usuario_id', 'us_usuario.id', 'LEFT JOIN');
	$criterio->addRealJoin('ope_operario', 'ope_operario.id', 'ope_operario_us_usuario.ope_operario_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('us_usuario');
		$criterio->setCriterios();		
}
?>

