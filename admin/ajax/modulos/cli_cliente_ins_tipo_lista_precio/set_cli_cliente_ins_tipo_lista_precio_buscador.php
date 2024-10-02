<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(CliClienteInsTipoListaPrecio::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('cli_cliente_ins_tipo_lista_precio.id', Gral::getVars(1, 'buscador_cli_cliente_ins_tipo_lista_precio_id'), Gral::getVars(1, 'buscador_cli_cliente_ins_tipo_lista_precio_id_comparador'));
	$criterio->add('cli_cliente_ins_tipo_lista_precio.descripcion', Gral::getVars(1, 'buscador_cli_cliente_ins_tipo_lista_precio_descripcion'), Gral::getVars(1, 'buscador_cli_cliente_ins_tipo_lista_precio_descripcion_comparador'));
	$criterio->add('cli_cliente_ins_tipo_lista_precio.cli_cliente_id', Gral::getVars(1, 'buscador_cli_cliente_ins_tipo_lista_precio_cli_cliente_id'), Gral::getVars(1, 'buscador_cli_cliente_ins_tipo_lista_precio_cli_cliente_id_comparador'));
	$criterio->add('cli_cliente_ins_tipo_lista_precio.ins_tipo_lista_precio_id', Gral::getVars(1, 'buscador_cli_cliente_ins_tipo_lista_precio_ins_tipo_lista_precio_id'), Gral::getVars(1, 'buscador_cli_cliente_ins_tipo_lista_precio_ins_tipo_lista_precio_id_comparador'));
	$criterio->add('cli_cliente_ins_tipo_lista_precio.predeterminado', Gral::getVars(1, 'buscador_cli_cliente_ins_tipo_lista_precio_predeterminado'), Gral::getVars(1, 'buscador_cli_cliente_ins_tipo_lista_precio_predeterminado_comparador'));
	$criterio->add('cli_cliente_ins_tipo_lista_precio.codigo', Gral::getVars(1, 'buscador_cli_cliente_ins_tipo_lista_precio_codigo'), Gral::getVars(1, 'buscador_cli_cliente_ins_tipo_lista_precio_codigo_comparador'));
	$criterio->add('cli_cliente_ins_tipo_lista_precio.observacion', Gral::getVars(1, 'buscador_cli_cliente_ins_tipo_lista_precio_observacion'), Gral::getVars(1, 'buscador_cli_cliente_ins_tipo_lista_precio_observacion_comparador'));
	$criterio->add('cli_cliente_ins_tipo_lista_precio.estado', Gral::getVars(1, 'buscador_cli_cliente_ins_tipo_lista_precio_estado'), Gral::getVars(1, 'buscador_cli_cliente_ins_tipo_lista_precio_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('cli_cliente_ins_tipo_lista_precio');
		$criterio->setCriterios();		
}
?>

