<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GralCondicionIvaPdeTipoNotaCredito::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('gral_condicion_iva_pde_tipo_nota_credito.id', Gral::getVars(1, 'buscador_gral_condicion_iva_pde_tipo_nota_credito_id'), Gral::getVars(1, 'buscador_gral_condicion_iva_pde_tipo_nota_credito_id_comparador'));
	$criterio->add('gral_condicion_iva_pde_tipo_nota_credito.descripcion', Gral::getVars(1, 'buscador_gral_condicion_iva_pde_tipo_nota_credito_descripcion'), Gral::getVars(1, 'buscador_gral_condicion_iva_pde_tipo_nota_credito_descripcion_comparador'));
	$criterio->add('gral_condicion_iva_pde_tipo_nota_credito.gral_condicion_iva_id', Gral::getVars(1, 'buscador_gral_condicion_iva_pde_tipo_nota_credito_gral_condicion_iva_id'), Gral::getVars(1, 'buscador_gral_condicion_iva_pde_tipo_nota_credito_gral_condicion_iva_id_comparador'));
	$criterio->add('gral_condicion_iva_pde_tipo_nota_credito.pde_tipo_nota_credito_id', Gral::getVars(1, 'buscador_gral_condicion_iva_pde_tipo_nota_credito_pde_tipo_nota_credito_id'), Gral::getVars(1, 'buscador_gral_condicion_iva_pde_tipo_nota_credito_pde_tipo_nota_credito_id_comparador'));
	$criterio->add('gral_condicion_iva_pde_tipo_nota_credito.codigo', Gral::getVars(1, 'buscador_gral_condicion_iva_pde_tipo_nota_credito_codigo'), Gral::getVars(1, 'buscador_gral_condicion_iva_pde_tipo_nota_credito_codigo_comparador'));
	$criterio->add('gral_condicion_iva_pde_tipo_nota_credito.observacion', Gral::getVars(1, 'buscador_gral_condicion_iva_pde_tipo_nota_credito_observacion'), Gral::getVars(1, 'buscador_gral_condicion_iva_pde_tipo_nota_credito_observacion_comparador'));
	$criterio->add('gral_condicion_iva_pde_tipo_nota_credito.estado', Gral::getVars(1, 'buscador_gral_condicion_iva_pde_tipo_nota_credito_estado'), Gral::getVars(1, 'buscador_gral_condicion_iva_pde_tipo_nota_credito_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('gral_condicion_iva_pde_tipo_nota_credito');
		$criterio->setCriterios();		
}
?>

