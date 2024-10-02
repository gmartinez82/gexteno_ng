<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$presionado = Gral::getVars(1, 'presionado');

$criterio = new Criterio(CntbDiarioAsientoCuenta::SES_CRITERIOS);
$criterio->setAmbiguo(false);

if($presionado == 'btn_buscar'){

	
	// criterios agregados por buscadores
	
	// criterios agregados por atributos de clase
	$criterio->add('cntb_diario_asiento_cuenta.id', Gral::getVars(1, 'buscador_cntb_diario_asiento_cuenta_id'), Gral::getVars(1, 'buscador_cntb_diario_asiento_cuenta_id_comparador'));
	$criterio->add('cntb_diario_asiento_cuenta.descripcion', Gral::getVars(1, 'buscador_cntb_diario_asiento_cuenta_descripcion'), Gral::getVars(1, 'buscador_cntb_diario_asiento_cuenta_descripcion_comparador'));
	$criterio->add('cntb_diario_asiento_cuenta.cntb_diario_asiento_id', Gral::getVars(1, 'buscador_cntb_diario_asiento_cuenta_cntb_diario_asiento_id'), Gral::getVars(1, 'buscador_cntb_diario_asiento_cuenta_cntb_diario_asiento_id_comparador'));
	$criterio->add('cntb_diario_asiento_cuenta.cntb_tipo_saldo_id', Gral::getVars(1, 'buscador_cntb_diario_asiento_cuenta_cntb_tipo_saldo_id'), Gral::getVars(1, 'buscador_cntb_diario_asiento_cuenta_cntb_tipo_saldo_id_comparador'));
	$criterio->add('cntb_diario_asiento_cuenta.cntb_cuenta_id', Gral::getVars(1, 'buscador_cntb_diario_asiento_cuenta_cntb_cuenta_id'), Gral::getVars(1, 'buscador_cntb_diario_asiento_cuenta_cntb_cuenta_id_comparador'));
	$criterio->add('cntb_diario_asiento_cuenta.importe_debe', Gral::getVars(1, 'buscador_cntb_diario_asiento_cuenta_importe_debe'), Gral::getVars(1, 'buscador_cntb_diario_asiento_cuenta_importe_debe_comparador'));
	$criterio->add('cntb_diario_asiento_cuenta.importe_haber', Gral::getVars(1, 'buscador_cntb_diario_asiento_cuenta_importe_haber'), Gral::getVars(1, 'buscador_cntb_diario_asiento_cuenta_importe_haber_comparador'));
	$criterio->add('cntb_diario_asiento_cuenta.importe_saldo', Gral::getVars(1, 'buscador_cntb_diario_asiento_cuenta_importe_saldo'), Gral::getVars(1, 'buscador_cntb_diario_asiento_cuenta_importe_saldo_comparador'));
	$criterio->add('cntb_diario_asiento_cuenta.codigo', Gral::getVars(1, 'buscador_cntb_diario_asiento_cuenta_codigo'), Gral::getVars(1, 'buscador_cntb_diario_asiento_cuenta_codigo_comparador'));
	$criterio->add('cntb_diario_asiento_cuenta.codigo_comprobante', Gral::getVars(1, 'buscador_cntb_diario_asiento_cuenta_codigo_comprobante'), Gral::getVars(1, 'buscador_cntb_diario_asiento_cuenta_codigo_comprobante_comparador'));
	$criterio->add('cntb_diario_asiento_cuenta.observacion', Gral::getVars(1, 'buscador_cntb_diario_asiento_cuenta_observacion'), Gral::getVars(1, 'buscador_cntb_diario_asiento_cuenta_observacion_comparador'));
	
	// criterios agregados por dependencias
	
	// criterios agregados por relaciones con hijos
	$criterio->setCriterios();

}elseif($presionado == 'btn_limpiar'){
	// se limpia criterio de busqueda
		$criterio->setCriterios(false);
		$criterio->addTabla('cntb_diario_asiento_cuenta');
		$criterio->setCriterios();		
}
?>

