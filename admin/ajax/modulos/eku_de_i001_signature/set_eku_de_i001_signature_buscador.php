<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuDeI001Signature::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_de_i001_signature.id', Gral::getVars(1, 'buscador_eku_de_i001_signature_id'), Gral::getVars(1, 'buscador_eku_de_i001_signature_id_comparador'));
	$criterio->add('eku_de_i001_signature.descripcion', Gral::getVars(1, 'buscador_eku_de_i001_signature_descripcion'), Gral::getVars(1, 'buscador_eku_de_i001_signature_descripcion_comparador'));
	$criterio->add('eku_de_i001_signature.eku_de_id', Gral::getVars(1, 'buscador_eku_de_i001_signature_eku_de_id'), Gral::getVars(1, 'buscador_eku_de_i001_signature_eku_de_id_comparador'));
	$criterio->add('eku_de_i001_signature.eku_i002_signature', Gral::getVars(1, 'buscador_eku_de_i001_signature_eku_i002_signature'), Gral::getVars(1, 'buscador_eku_de_i001_signature_eku_i002_signature_comparador'));
	$criterio->add('eku_de_i001_signature.codigo', Gral::getVars(1, 'buscador_eku_de_i001_signature_codigo'), Gral::getVars(1, 'buscador_eku_de_i001_signature_codigo_comparador'));
	$criterio->add('eku_de_i001_signature.observacion', Gral::getVars(1, 'buscador_eku_de_i001_signature_observacion'), Gral::getVars(1, 'buscador_eku_de_i001_signature_observacion_comparador'));
	$criterio->add('eku_de_i001_signature.estado', Gral::getVars(1, 'buscador_eku_de_i001_signature_estado'), Gral::getVars(1, 'buscador_eku_de_i001_signature_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_de_i001_signature');
		$criterio->setCriterios();		
}
?>

