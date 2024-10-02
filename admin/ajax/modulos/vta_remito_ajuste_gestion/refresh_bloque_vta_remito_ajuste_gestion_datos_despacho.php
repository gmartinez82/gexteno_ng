<?php
include "_autoload.php";
include_once Gral::getPathAbs() . "admin/control/init.php";

$cli_cliente_id = Gral::getVars(Gral::VARS_GET, 'cli_cliente_id', 0);
$tipo_despacho_id = Gral::getVars(Gral::VARS_GET, 'id', 0);

if($cli_cliente_id != 0){
    $cli_cliente = CliCliente::getOxId($cli_cliente_id);
}

$vta_remito_ajuste_tipo_despacho = VtaRemitoAjusteTipoDespacho::getOxId($tipo_despacho_id);

//$vta_presupuesto_tipo_despachos_cmb = Gral::getCmbFiltro(VtaPresupuestoTipoDespacho::getVtaPresupuestoTipoDespachosCmb(true), '...');
//$gral_sucursal_retiro = $vta_presupuesto->getGralSucursalRetiro();

if($gral_sucursal_retiro == 'null'){
    // se setea por default la sucursal del vendedor autenticado
    //$gral_sucursal_retiro = $gral_sucursal_autenticada->getId();
}

include 'bloque_vta_remito_ajuste_gestion_datos_despacho.php';
