<?php

include "_autoload.php";

$vta_presupuesto = VtaPresupuesto::getPresupuestoActivo();

$cli_cliente_id = Gral::getVars(Gral::VARS_GET, 'cli_cliente_id', 0);

if($cli_cliente_id != '-1'){
    $cli_cliente = CliCliente::getOxId($cli_cliente_id);
}else{
    $vta_presupuesto->setPersonaDescripcion(""); // solamente para borrar el texto por default CONSUMIDOR FINAL
}

$gral_tipo_documentos_cmb = Gral::getCmbFiltro(GralTipoDocumento::getGralTipoDocumentosCmb(), '...');
$vta_presupuesto_tipo_despachos_cmb = Gral::getCmbFiltro(VtaPresupuestoTipoDespacho::getVtaPresupuestoTipoDespachosCmb(true), '...');

include 'bloque_vta_presupuesto_gestion_pie_datos_cliente.php';
