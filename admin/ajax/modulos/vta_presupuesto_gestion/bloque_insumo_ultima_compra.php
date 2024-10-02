<?php 
if (UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_EDICION_GESTION_VER_ULTIMAS_VENTAS_INSUMO')) {
    // -----------------------------------------------------------------------------
    // se consultan ultimas ventas al cliente del mismo insumo
    // -----------------------------------------------------------------------------
    $vta_orden_ventas_ultimos_del_cliente = $ins_insumo->getVtaOrdenVentasUltimos($vta_presupuesto->getCliClienteId(), 2);
    //Gral::prr($vta_orden_ventas_ultimos_del_cliente);

    if(count($vta_orden_ventas_ultimos_del_cliente) > 0){ ?>
        <div class="vta-orden-venta-ultimas-del-cliente">
            <?php foreach($vta_orden_ventas_ultimos_del_cliente as $vta_orden_venta_ultimo_del_cliente ){ ?>
            <div class="vta-orden-venta-ultima-del-cliente" title="<?php Gral::_echo($vta_orden_venta_ultimo_del_cliente->getCodigo()) ?> creada por <?php Gral::_echo($vta_orden_venta_ultimo_del_cliente->getCreadoPorDescripcion()) ?>">
                    El <?php Gral::_echo(Gral::getFechaToWEB($vta_orden_venta_ultimo_del_cliente->getCreado())) ?>
                    compró <?php Gral::_echo($vta_orden_venta_ultimo_del_cliente->getCantidad()) ?> 
                    <?php Gral::_echo($vta_orden_venta_ultimo_del_cliente->getInsInsumo()->getInsUnidadMedida()->getDescripcionCorta()) ?> 
                    a <?php Gral::_echoImp($vta_orden_venta_ultimo_del_cliente->getImporteUnitario()) ?> 
                    con lista <?php Gral::_echo($vta_orden_venta_ultimo_del_cliente->getVtaPresupuesto()->getInsTipoListaPrecio()->getDescripcionCorta()) ?>
                </div>
            <?php } ?>
        </div>
    <?php } ?>
<?php } ?>