<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(GralCondicionIvaPdeTipoNotaDebito::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('gral_condicion_iva_pde_tipo_nota_debito.id', Gral::getVars(1, 'buscador_gral_condicion_iva_pde_tipo_nota_debito_id'), Gral::getVars(1, 'buscador_gral_condicion_iva_pde_tipo_nota_debito_id_comparador'));
	$criterio->add('gral_condicion_iva_pde_tipo_nota_debito.descripcion', Gral::getVars(1, 'buscador_gral_condicion_iva_pde_tipo_nota_debito_descripcion'), Gral::getVars(1, 'buscador_gral_condicion_iva_pde_tipo_nota_debito_descripcion_comparador'));
	$criterio->add('gral_condicion_iva_pde_tipo_nota_debito.gral_condicion_iva_id', Gral::getVars(1, 'buscador_gral_condicion_iva_pde_tipo_nota_debito_gral_condicion_iva_id'), Gral::getVars(1, 'buscador_gral_condicion_iva_pde_tipo_nota_debito_gral_condicion_iva_id_comparador'));
	$criterio->add('gral_condicion_iva_pde_tipo_nota_debito.pde_tipo_nota_debito_id', Gral::getVars(1, 'buscador_gral_condicion_iva_pde_tipo_nota_debito_pde_tipo_nota_debito_id'), Gral::getVars(1, 'buscador_gral_condicion_iva_pde_tipo_nota_debito_pde_tipo_nota_debito_id_comparador'));
	$criterio->add('gral_condicion_iva_pde_tipo_nota_debito.codigo', Gral::getVars(1, 'buscador_gral_condicion_iva_pde_tipo_nota_debito_codigo'), Gral::getVars(1, 'buscador_gral_condicion_iva_pde_tipo_nota_debito_codigo_comparador'));
	$criterio->add('gral_condicion_iva_pde_tipo_nota_debito.observacion', Gral::getVars(1, 'buscador_gral_condicion_iva_pde_tipo_nota_debito_observacion'), Gral::getVars(1, 'buscador_gral_condicion_iva_pde_tipo_nota_debito_observacion_comparador'));
	$criterio->add('gral_condicion_iva_pde_tipo_nota_debito.estado', Gral::getVars(1, 'buscador_gral_condicion_iva_pde_tipo_nota_debito_estado'), Gral::getVars(1, 'buscador_gral_condicion_iva_pde_tipo_nota_debito_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('gral_condicion_iva_pde_tipo_nota_debito');
		$criterio->setCriterios();		
}
?>

