<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(PrvTelefono::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('prv_telefono.id', Gral::getVars(1, 'buscador_prv_telefono_id'), Gral::getVars(1, 'buscador_prv_telefono_id_comparador'));
	$criterio->add('prv_telefono.prv_proveedor_id', Gral::getVars(1, 'buscador_prv_telefono_prv_proveedor_id'), Gral::getVars(1, 'buscador_prv_telefono_prv_proveedor_id_comparador'));
	$criterio->add('prv_telefono.prv_telefono_tipo_id', Gral::getVars(1, 'buscador_prv_telefono_prv_telefono_tipo_id'), Gral::getVars(1, 'buscador_prv_telefono_prv_telefono_tipo_id_comparador'));
	$criterio->add('prv_telefono.descripcion', Gral::getVars(1, 'buscador_prv_telefono_descripcion'), Gral::getVars(1, 'buscador_prv_telefono_descripcion_comparador'));
	$criterio->add('prv_telefono.geo_pais_id', Gral::getVars(1, 'buscador_prv_telefono_geo_pais_id'), Gral::getVars(1, 'buscador_prv_telefono_geo_pais_id_comparador'));
	$criterio->add('prv_telefono.codigo', Gral::getVars(1, 'buscador_prv_telefono_codigo'), Gral::getVars(1, 'buscador_prv_telefono_codigo_comparador'));
	$criterio->add('prv_telefono.telefono', Gral::getVars(1, 'buscador_prv_telefono_telefono'), Gral::getVars(1, 'buscador_prv_telefono_telefono_comparador'));
	$criterio->add('prv_telefono.observacion', Gral::getVars(1, 'buscador_prv_telefono_observacion'), Gral::getVars(1, 'buscador_prv_telefono_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('prv_telefono');
		$criterio->setCriterios();		
}
?>

