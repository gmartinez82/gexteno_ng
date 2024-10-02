<?php

include "_autoload.php";

$ins_insumo_id = Gral::getVars(Gral::VARS_POST, 'ins_insumo_id', 0, Gral::TIPO_INTEGER);
$ins_insumo = InsInsumo::getOxId($ins_insumo_id);

// -----------------------------------------------------------------
// Se instancia el presupuesto activo
// -----------------------------------------------------------------       
$vta_presupuesto = VtaPresupuesto::getOxId(Gral::getSes(VtaPresupuesto::PRESUPUESTO_ACTIVO));
$ins_tipo_lista_precio = $vta_presupuesto->getInsTipoListaPrecio();

// -----------------------------------------------------------------------------
// Se verifica si el producto tiene precio de venta activo en el tipo de lista
// -----------------------------------------------------------------------------
$importe_venta = $ins_insumo->getInsInsumoImporteVentaActual($ins_tipo_lista_precio);        

if($importe_venta){
    // -----------------------------------------------------------------
    // Se verifica si el insumo esta actualmente incluido en el presupuesto o no
    // -----------------------------------------------------------------
    $vta_presupuesto_ins_insumo = $vta_presupuesto->getVtaPresupuestoInsInsumoXInsInsumoId($ins_insumo_id);
    if ($vta_presupuesto_ins_insumo) {
        $cantidad = $vta_presupuesto_ins_insumo->getCantidad();
        $cantidad++;

        // -----------------------------------------------------------------
        // Si existe el insumo en el presupuesto, se modifica la cantidad
        // -----------------------------------------------------------------
        $vta_presupuesto->setInsumoExistenteAPresupuesto($vta_presupuesto_ins_insumo, $cantidad, $ins_tipo_lista_precio->getId(), $cli_cliente_id = false);
    } else {

        // -----------------------------------------------------------------
        // si no existe producto en el presupuesto, se incializa el producto en el presupuesto
        // -----------------------------------------------------------------
        $vta_presupuesto->setInsumoAPresupuesto($ins_insumo_id, $cantidad = 1, $ins_tipo_lista_precio->getId(), $cli_cliente_id = false);
    }
}