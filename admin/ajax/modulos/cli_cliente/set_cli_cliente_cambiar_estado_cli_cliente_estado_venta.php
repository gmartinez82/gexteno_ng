<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

// -----------------------------------------------------------------------------
// se controla la credencial para realizar la accion
// -----------------------------------------------------------------------------
if(UsCredencial::getEsAcreditado('CLI_CLIENTE_ADM_ACCION_CONFIG_CAMBIAR_CLI_CLIENTE_ESTADO_VENTA')){
    $id = Gral::getVars(1, 'id', 0);
    $cmb_cli_cliente_tipo_estado_venta_id = Gral::getVars(Gral::VARS_POST, 'cmb_cli_cliente_tipo_estado_venta_id', 0);
    $txa_observacion = Gral::getVars(Gral::VARS_POST, 'txa_observacion');

    $cli_cliente = CliCliente::getOxId($id);

    // control de datos
    $arr["error"] = false;

    if ($cmb_cli_cliente_tipo_estado_venta_id == 0){
        $arr["error"] = true;
        $arr["cmb_cli_cliente_tipo_estado_venta_id"] = Lang::_lang("Debe ingresar un tipo de estado", true);
    }

    if (Ctrl::esVacio($txa_observacion)){
        $arr["error"] = true;
        $arr["txa_observacion"] = Lang::_lang("Debe ingresar una observacion", true);
    }

    if (!$arr["error"]){
        $cli_cliente_tipo_estado_venta = CliClienteTipoEstadoVenta::getOxId($cmb_cli_cliente_tipo_estado_venta_id);
        $cli_cliente_estado_venta = $cli_cliente->setCliClienteEstadoVentaDesdeBackend($cli_cliente_tipo_estado_venta->getCodigo(), $txa_observacion);
    }

    // se retornan datos
    $arr_json = json_encode($arr);
    echo $arr_json;
}

