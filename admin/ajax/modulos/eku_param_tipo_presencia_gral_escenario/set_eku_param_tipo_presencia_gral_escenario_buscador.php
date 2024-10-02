<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(EkuParamTipoPresenciaGralEscenario::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('eku_param_tipo_presencia_gral_escenario.id', Gral::getVars(1, 'buscador_eku_param_tipo_presencia_gral_escenario_id'), Gral::getVars(1, 'buscador_eku_param_tipo_presencia_gral_escenario_id_comparador'));
	$criterio->add('eku_param_tipo_presencia_gral_escenario.eku_param_tipo_presencia_id', Gral::getVars(1, 'buscador_eku_param_tipo_presencia_gral_escenario_eku_param_tipo_presencia_id'), Gral::getVars(1, 'buscador_eku_param_tipo_presencia_gral_escenario_eku_param_tipo_presencia_id_comparador'));
	$criterio->add('eku_param_tipo_presencia_gral_escenario.gral_escenario_id', Gral::getVars(1, 'buscador_eku_param_tipo_presencia_gral_escenario_gral_escenario_id'), Gral::getVars(1, 'buscador_eku_param_tipo_presencia_gral_escenario_gral_escenario_id_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('eku_param_tipo_presencia_gral_escenario');
		$criterio->setCriterios();		
}
?>

