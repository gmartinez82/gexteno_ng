<?php
include "_autoload.php";
include_once Gral::getPathAbs() . "admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs() . "admin/control/init.php";

$vta_presupuesto_tipo_emision = VtaPresupuestoTipoEmision::getOxCodigo(VtaPresupuestoTipoEmision::TIPO_INMEDIATA_CTACTE);    
        
include "set_control_vta_presupuesto_venta_inmediata_ctacte.php";

if (!$arr["error"]) {

    $vta_presupuesto = VtaPresupuesto::getOxId($vta_presupuesto_id);

    if ($vta_presupuesto) {

        include "set_vta_presupuesto_guardar.php";

        // ---------------------------------------------------------------------
        // se registran las OV
        // ---------------------------------------------------------------------
        $vta_orden_ventas = $vta_presupuesto->setGenerarVtaOrdenVentas($chk_vta_presupuesto_ins_insumo);

        // ---------------------------------------------------------------------
        // Se genera el remito
        // ---------------------------------------------------------------------
        $cli_cliente_id= 0;
        $cli_cliente = $vta_presupuesto->getCliCliente();
        if($cli_cliente && $cli_cliente->getId() != 'null'){
            $cli_cliente_id = $cli_cliente->getId();
        }
        foreach($vta_orden_ventas as $vta_orden_venta){
            $vta_orden_venta_ids[$vta_orden_venta->getId()] = $vta_orden_venta->getId();
            $vta_orden_venta_cantidads[$vta_orden_venta->getId()] = $vta_orden_venta->getCantidad();
        }
        $vta_remito = VtaRemito::setInicializarVtaRemitoDesdeVentaInmediataCtacte($vta_presupuesto, $vta_orden_venta_ids, $vta_orden_venta_cantidads, $cli_cliente_id, $cli_centro_recepcion_id = 0, $en_domicilio = 0, $cmb_confirmacion_pan_panol_id, $observacion = 'Venta Inmediata en Cta Cte - '.$txa_confirmacion_nota_privada);

        // ---------------------------------------------------------------------
        // se abandona el presupuesto
        // ---------------------------------------------------------------------
        VtaPresupuesto::abandonarPresupuesto();
        
    } else {
        $arr["error_general"] = Lang::_lang("Ups! Ocurrio un error durante el proceso.", true);
        $arr["error"] = true;
    }
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>