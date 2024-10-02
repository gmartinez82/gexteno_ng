<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(CntbDiarioAsientoVtaNotaDebito::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('cntb_diario_asiento_vta_nota_debito.id', Gral::getVars(1, 'buscador_cntb_diario_asiento_vta_nota_debito_id'), Gral::getVars(1, 'buscador_cntb_diario_asiento_vta_nota_debito_id_comparador'));
	$criterio->add('cntb_diario_asiento_vta_nota_debito.cntb_periodo_id', Gral::getVars(1, 'buscador_cntb_diario_asiento_vta_nota_debito_cntb_periodo_id'), Gral::getVars(1, 'buscador_cntb_diario_asiento_vta_nota_debito_cntb_periodo_id_comparador'));
	$criterio->add('cntb_diario_asiento_vta_nota_debito.cntb_diario_asiento_id', Gral::getVars(1, 'buscador_cntb_diario_asiento_vta_nota_debito_cntb_diario_asiento_id'), Gral::getVars(1, 'buscador_cntb_diario_asiento_vta_nota_debito_cntb_diario_asiento_id_comparador'));
	$criterio->add('cntb_diario_asiento_vta_nota_debito.vta_nota_debito_id', Gral::getVars(1, 'buscador_cntb_diario_asiento_vta_nota_debito_vta_nota_debito_id'), Gral::getVars(1, 'buscador_cntb_diario_asiento_vta_nota_debito_vta_nota_debito_id_comparador'));
	$criterio->add('cntb_diario_asiento_vta_nota_debito.estado', Gral::getVars(1, 'buscador_cntb_diario_asiento_vta_nota_debito_estado'), Gral::getVars(1, 'buscador_cntb_diario_asiento_vta_nota_debito_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('cntb_diario_asiento_vta_nota_debito');
		$criterio->setCriterios();		
}
?>

