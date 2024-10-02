<td colspan="1">
    <div class="vta-presupuesto-info">
         <div class="tipo-emision <?php Gral::_echo($vta_presupuesto->getVtaPresupuestoTipoEmision()->getCodigo()) ?>" title="<?php Gral::_echo($vta_presupuesto->getVtaPresupuestoTipoEmision()->getDescripcion()) ?>">
             <?php Gral::_echo($vta_presupuesto->getVtaPresupuestoTipoEmision()->getCodigoMin()) ?>
         </div>
         <div class="tipo-venta <?php Gral::_echo($vta_presupuesto->getVtaPresupuestoTipoVenta()->getCodigo()) ?>" title="<?php Gral::_echo($vta_presupuesto->getVtaPresupuestoTipoVenta()->getDescripcion()) ?>">
             <?php Gral::_echo($vta_presupuesto->getVtaPresupuestoTipoVenta()->getDescripcion()) ?>
         </div>
    </div>
</td>
<td colspan="1">
    <div class="vta-presupuesto-info">
        <div class="codigo">
            <?php Gral::_echo($vta_presupuesto->getCodigo()) ?>
        </div>
        <div class="fecha">
            <?php Gral::_echo(Gral::getFechaHoraToWeb($vta_presupuesto->getCreado(), true)) ?> 
        </div>
        <div class="creado-por">
            <?php Gral::_echo($vta_presupuesto->getCreadoPorDescripcion()) ?>
        </div>        
    </div>
</td>
<td colspan="2">
    <div class="vta-presupuesto-info">
        <div class="cli-cliente">
            <?php Gral::_echo($vta_orden_venta->getPersonaDescripcion()) ?>
        </div>
        <div class="cli-email">
            <?php Gral::_echo($vta_orden_venta->getCliCliente()->getEmail()) ?> 
        </div>
        <div class="cli-telefono">
            <?php Gral::_echo($vta_orden_venta->getCliCliente()->getTelefono()) ?> 
        </div>                            
    </div>
</td>
<td colspan="2">
    <div class="vta-presupuesto-info">
        <div class="vta-presupuesto-tipo-despacho">
            <?php Gral::_echo($vta_presupuesto->getVtaPresupuestoTipoDespacho()->getDescripcion()) ?>
        </div>
        <?php if($vta_presupuesto->getVtaPresupuestoTipoEmision()->getCodigo() == VtaPresupuestoTipoEmision::TIPO_DIFERIDO){ ?>
            <?php if($vta_presupuesto->getGralSucursalRetiro() != 'null'){ ?>
            <div class="sucursal-retiro">
                Retira en <?php Gral::_echo($vta_presupuesto->getGralSucursalRetiroObj()->getDescripcion()) ?>
            </div>
            <?php } ?>

            <?php if($vta_presupuesto->getCliCentroRecepcionId() != 'null'){ ?>
            <div class="centro-recepcion">
                Entregar en <?php Gral::_echo($vta_presupuesto->getCliCentroRecepcion()->getDescripcion()) ?> - 
                <?php Gral::_echo($vta_presupuesto->getCliCentroRecepcion()->getDomicilio()) ?> - 
                (<?php Gral::_echo($vta_presupuesto->getCliCentroRecepcion()->getGeoLocalidad()->getDescripcion()) ?>)
            </div>
            <?php } ?>
        <?php } ?>                           
    </div>
</td>
<td colspan="2">
    <div class="vta-presupuesto-info">
        <div class="gral-sucursal">
            <?php Gral::_echo($vta_presupuesto->getGralSucursal()->getDescripcion()) ?> 
        </div>
        <div class="vta-vendedor">
            <?php Gral::_echo($vta_presupuesto->getVtaVendedor()->getDescripcion()) ?> 
        </div>
        <div class="ins_tipo_lista_precio">
            <?php Gral::_echo($vta_presupuesto->getInsTipoListaPrecio()->getDescripcion()) ?>
        </div>
    </div>
</td>
<td align="center">
    <ul class="adm_botones_acciones" vta_orden_venta_id="<?php echo $vta_orden_venta->getId() ?>">

        <div class="bloque-acciones-x-tipo-venta venta-a" style="display: inline; padding: 2px 3px;">
            <?php if (UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_GESTION_ACCION_GENERAR_REMITO')) { ?>
                <li class='adm_botones_accion vta-presupuesto-vta-remitir'>
                    <img src='imgs/btn_remitir.png' width='20' border='0' title="Remitir Presupuesto"/>
                </li>
            <?php } ?>
            <?php if (UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_GESTION_ACCION_GENERAR_FACTURA')) { ?>
                <li class='adm_botones_accion vta-presupuesto-vta-facturar'>
                    <img src='imgs/btn_facturar.png' width='20' border='0' title="Facturar Presupuesto"/>
                </li>
            <?php } ?>
        </div>
        
        <div class="bloque-acciones-x-tipo-venta venta-z" style="display: inline; padding: 2px 3px; background-color: #999;">
            <?php if (UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_GESTION_ACCION_GENERAR_REMITO_AJUSTE')) { ?>
                <li class='adm_botones_accion vta-presupuesto-vta-remitir-ajuste'>
                    <img src='imgs/btn_remitir.png' width='20' border='0' title="Remitir Presupuesto (Z)"/>
                </li>
            <?php } ?>
            <?php if (UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_GESTION_ACCION_GENERAR_AJUSTE_DEBE')) { ?>
                <li class='adm_botones_accion vta-presupuesto-vta-facturar-ajuste'>
                    <img src='imgs/btn_facturar.png' width='20' border='0' title="Facturar Presupuesto (Z)"/>
                </li>
            <?php } ?>
        </div>


    </ul>
</td>
