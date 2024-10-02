<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(CliTelefonoTipo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('cli_telefono_tipo.id', Gral::getVars(1, 'buscador_cli_telefono_tipo_id'), Gral::getVars(1, 'buscador_cli_telefono_tipo_id_comparador'));
	$criterio->add('cli_telefono_tipo.descripcion', Gral::getVars(1, 'buscador_cli_telefono_tipo_descripcion'), Gral::getVars(1, 'buscador_cli_telefono_tipo_descripcion_comparador'));
	$criterio->add('cli_telefono_tipo.codigo', Gral::getVars(1, 'buscador_cli_telefono_tipo_codigo'), Gral::getVars(1, 'buscador_cli_telefono_tipo_codigo_comparador'));
	$criterio->add('cli_telefono_tipo.observacion', Gral::getVars(1, 'buscador_cli_telefono_tipo_observacion'), Gral::getVars(1, 'buscador_cli_telefono_tipo_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->addRealJoin('cli_telefono', 'cli_telefono.cli_telefono_tipo_id', 'cli_telefono_tipo.id', 'LEFT JOIN');
	$criterio->addRealJoin('cli_cliente', 'cli_cliente.id', 'cli_telefono.cli_cliente_id', 'LEFT JOIN');
	$criterio->addRealJoin('geo_pais', 'geo_pais.id', 'cli_telefono.geo_pais_id', 'LEFT JOIN');
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('cli_telefono_tipo');
		$criterio->setCriterios();		
}
?>

