<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(MlCategoryMlShippingMode::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('ml_category_ml_shipping_mode.id', Gral::getVars(1, 'buscador_ml_category_ml_shipping_mode_id'), Gral::getVars(1, 'buscador_ml_category_ml_shipping_mode_id_comparador'));
	$criterio->add('ml_category_ml_shipping_mode.ml_category_id', Gral::getVars(1, 'buscador_ml_category_ml_shipping_mode_ml_category_id'), Gral::getVars(1, 'buscador_ml_category_ml_shipping_mode_ml_category_id_comparador'));
	$criterio->add('ml_category_ml_shipping_mode.ml_shipping_mode_id', Gral::getVars(1, 'buscador_ml_category_ml_shipping_mode_ml_shipping_mode_id'), Gral::getVars(1, 'buscador_ml_category_ml_shipping_mode_ml_shipping_mode_id_comparador'));
	$criterio->add('ml_category_ml_shipping_mode.observacion', Gral::getVars(1, 'buscador_ml_category_ml_shipping_mode_observacion'), Gral::getVars(1, 'buscador_ml_category_ml_shipping_mode_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('ml_category_ml_shipping_mode');
		$criterio->setCriterios();		
}
?>

