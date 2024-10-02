<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(CntbDiarioAsientoPdeRecibo::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('cntb_diario_asiento_pde_recibo.id', Gral::getVars(1, 'buscador_cntb_diario_asiento_pde_recibo_id'), Gral::getVars(1, 'buscador_cntb_diario_asiento_pde_recibo_id_comparador'));
	$criterio->add('cntb_diario_asiento_pde_recibo.cntb_periodo_id', Gral::getVars(1, 'buscador_cntb_diario_asiento_pde_recibo_cntb_periodo_id'), Gral::getVars(1, 'buscador_cntb_diario_asiento_pde_recibo_cntb_periodo_id_comparador'));
	$criterio->add('cntb_diario_asiento_pde_recibo.cntb_diario_asiento_id', Gral::getVars(1, 'buscador_cntb_diario_asiento_pde_recibo_cntb_diario_asiento_id'), Gral::getVars(1, 'buscador_cntb_diario_asiento_pde_recibo_cntb_diario_asiento_id_comparador'));
	$criterio->add('cntb_diario_asiento_pde_recibo.pde_recibo_id', Gral::getVars(1, 'buscador_cntb_diario_asiento_pde_recibo_pde_recibo_id'), Gral::getVars(1, 'buscador_cntb_diario_asiento_pde_recibo_pde_recibo_id_comparador'));
	$criterio->add('cntb_diario_asiento_pde_recibo.estado', Gral::getVars(1, 'buscador_cntb_diario_asiento_pde_recibo_estado'), Gral::getVars(1, 'buscador_cntb_diario_asiento_pde_recibo_estado_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('cntb_diario_asiento_pde_recibo');
		$criterio->setCriterios();		
}
?>

