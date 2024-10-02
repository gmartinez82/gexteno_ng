<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(CliTelefono::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('cli_telefono.id', Gral::getVars(1, 'buscador_cli_telefono_id'), Gral::getVars(1, 'buscador_cli_telefono_id_comparador'));
	$criterio->add('cli_telefono.cli_cliente_id', Gral::getVars(1, 'buscador_cli_telefono_cli_cliente_id'), Gral::getVars(1, 'buscador_cli_telefono_cli_cliente_id_comparador'));
	$criterio->add('cli_telefono.cli_telefono_tipo_id', Gral::getVars(1, 'buscador_cli_telefono_cli_telefono_tipo_id'), Gral::getVars(1, 'buscador_cli_telefono_cli_telefono_tipo_id_comparador'));
	$criterio->add('cli_telefono.descripcion', Gral::getVars(1, 'buscador_cli_telefono_descripcion'), Gral::getVars(1, 'buscador_cli_telefono_descripcion_comparador'));
	$criterio->add('cli_telefono.geo_pais_id', Gral::getVars(1, 'buscador_cli_telefono_geo_pais_id'), Gral::getVars(1, 'buscador_cli_telefono_geo_pais_id_comparador'));
	$criterio->add('cli_telefono.codigo', Gral::getVars(1, 'buscador_cli_telefono_codigo'), Gral::getVars(1, 'buscador_cli_telefono_codigo_comparador'));
	$criterio->add('cli_telefono.telefono', Gral::getVars(1, 'buscador_cli_telefono_telefono'), Gral::getVars(1, 'buscador_cli_telefono_telefono_comparador'));
	$criterio->add('cli_telefono.observacion', Gral::getVars(1, 'buscador_cli_telefono_observacion'), Gral::getVars(1, 'buscador_cli_telefono_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('cli_telefono');
		$criterio->setCriterios();		
}
?>

