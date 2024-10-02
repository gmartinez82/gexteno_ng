<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(FndCajeroGralCaja::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('fnd_cajero_gral_caja.id', Gral::getVars(1, 'buscador_fnd_cajero_gral_caja_id'), Gral::getVars(1, 'buscador_fnd_cajero_gral_caja_id_comparador'));
	$criterio->add('fnd_cajero_gral_caja.fnd_cajero_id', Gral::getVars(1, 'buscador_fnd_cajero_gral_caja_fnd_cajero_id'), Gral::getVars(1, 'buscador_fnd_cajero_gral_caja_fnd_cajero_id_comparador'));
	$criterio->add('fnd_cajero_gral_caja.gral_caja_id', Gral::getVars(1, 'buscador_fnd_cajero_gral_caja_gral_caja_id'), Gral::getVars(1, 'buscador_fnd_cajero_gral_caja_gral_caja_id_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('fnd_cajero_gral_caja');
		$criterio->setCriterios();		
}
?>

