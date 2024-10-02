<!-- Tabla de Resumen de Ordenes de Venta -->
<table border="0" align="center">
    
    <!--------------------------------------------------------------------------
    // Tabla Resumen
    --------------------------------------------------------------------------->
    <tr>
        <td class="adm_tbl_encabezado" align="center" colspan="3">
            <?php Gral::_echo('Resumen') ?>
        </td>
    </tr>

    <tr>
        <td class="adm_tbl_encabezado" align="center" width="40">Cantidad</td>
        <td class="adm_tbl_lineas" align="center" colspan="2">
            
            <div class="cantidad" style="font-size: 24px; font-weight: bold;">
             <?php Gral::_echoInt(count($vta_orden_ventas)) ?>
            </div>
            
            <div class="concepto" style="font-size: 13px; font-weight: normal;">
                OV Remitidas sin Facturacion Total
            </div>
            
        </td>
    </tr>
    
    <!--------------------------------------------------------------------------
    // Tabla Detalle
    --------------------------------------------------------------------------->

    <tr>
        <td class="adm_tbl_encabezado" align="center" width="90">Fecha RMT</td>
        <td class="adm_tbl_encabezado" align="center" width="90">Fecha OV</td>
        <td class="adm_tbl_encabezado" align="center" width="120">Deposito Remitio</td>
        <td class="adm_tbl_encabezado" align="center" width="140">Cliente</td>
        <td class="adm_tbl_encabezado" align="center" width="200">Producto</td>
        <td class="adm_tbl_encabezado" align="center" width="60">Cant</td>
        <td class="adm_tbl_encabezado" align="center" width="110">Remision</td>
        <td class="adm_tbl_encabezado" align="center" width="110">Facturacion</td>
        <td class="adm_tbl_encabezado" align="center" width="100">Importe IVA Incl</td>
    </tr>
    
    <?php
    foreach ($vta_orden_ventas as $vta_orden_venta) {
        $vta_presupuesto = $vta_orden_venta->getVtaPresupuesto();
        $vta_remito = $vta_orden_venta->getVtaRemito();
        $vta_remito_ajuste = $vta_orden_venta->getVtaRemitoAjuste();
        
        $cantidad_remitida = $vta_orden_venta->getCantidadEnRemito();
        $cantidad_facturada = $vta_orden_venta->getCantidadEnFactura();
        $importe_ov = $vta_orden_venta->getImporteTotal();
        
        $importe_ov_total+= $importe_ov;
    ?>
        <tr>
            <td class="adm_tbl_lineas" align="center">
                <?php if($vta_remito){ ?>
                    <div class="vta-remito-fecha">
                        <?php Gral::_echo(Gral::getFechaToWEB($vta_remito->getFecha())) ?>
                    </div>
                    <div class="vta-remito-fecha-diferencia-dias">
                        <?php Gral::_echo($vta_remito->getFechaDiferenciaDiasDescripcion()) ?>
                    </div>
                    <div class="vta-remito-codigo">
                        <?php Gral::_echo($vta_remito->getCodigo()) ?>
                    </div>
                <?php } ?>
            </td>

            <td class="adm_tbl_lineas" align="center">
                <div class="vta-orden-venta-fecha">
                    <?php Gral::_echo(Gral::getFechaToWEB($vta_orden_venta->getCreado())) ?>
                </div>
                <div class="vta-orden-venta-codigo">
                    <?php Gral::_echo($vta_orden_venta->getCodigo()) ?>
                </div>
                <div class="vta-presupuesto-codigo">
                    <?php Gral::_echo($vta_presupuesto->getCodigo()) ?>
                    <a href="_init.php?arr_gral=<?php echo VtaOrdenVenta::getFiltrosArrGral() ?>&arr=<?php echo $vta_orden_venta->getFiltrosArrXCampo('VtaPresupuesto', 'vta_presupuesto_id') ?>" target="_blank">
                        <img src='imgs/btn_importe.png' width='9' border='0' align="absmiddle" title="<?php Gral::_echo('Ver Ordenes de Venta') ?>"/>
                    </a>
                </div>
            </td>
            
            <td class="adm_tbl_lineas" align="center">
                <div class="pan-panol-descripcion">
                    <?php if($vta_remito){ ?>
                        <?php Gral::_echo($vta_remito->getPanPanol()->getDescripcion()) ?>
                    <?php } ?>
                    <?php if($vta_remito_ajuste){ ?>
                        <?php Gral::_echo($vta_remito_ajuste->getPanPanol()->getDescripcion()) ?>
                    <?php } ?>
                </div>
                <div class="vta-remito-creado-por-descripcion">
                    <?php if($vta_remito){ ?>
                        <?php Gral::_echo($vta_remito->getCreadoPorDescripcion()) ?>
                    <?php } ?>
                    <?php if($vta_remito_ajuste){ ?>
                        <?php Gral::_echo($vta_remito_ajuste->getCreadoPorDescripcion()) ?>
                    <?php } ?>
                </div>                
            </td>
            
            <td class="adm_tbl_lineas" align="center">
                <div class="cli-cliente-descripcion">
                    <?php Gral::_echo($vta_presupuesto->getCliCliente()->getDescripcion()) ?>
                </div>
            </td>
            
            <td class="adm_tbl_lineas" align="left">
                <div class="vta-orden-venta-descripcion">
                    <?php Gral::_echo($vta_orden_venta->getDescripcion()) ?>
                </div>
            </td>

            <td class="adm_tbl_lineas" align="center">
                <div class="vta-orden-venta-cantidad">
                    <?php Gral::_echoFloatDyn($vta_orden_venta->getCantidad()) ?>
                </div>
            </td>
            
            <td class="adm_tbl_lineas" align="center">
                <div class="vta-orden-venta-cantidad-remitida">
                    <?php Gral::_echoFloatDyn($cantidad_remitida) ?>
                </div>
                <div class="vta-orden-venta-tipo-estado-remision">	
                    <img src="imgs/vta_orden_venta_tipo_estado_remision/<?php Gral::_echo($vta_orden_venta->getVtaOrdenVentaTipoEstadoRemision()->getCodigo()) ?>.png" alt="tipo-estado" width="9" />
                    <?php Gral::_echo($vta_orden_venta->getVtaOrdenVentaTipoEstadoRemision()->getDescripcion()) ?>
                </div>
            </td>
            
            <td class="adm_tbl_lineas" align="center">
                <div class="vta-orden-venta-cantidad-facturada">
                    <?php Gral::_echoFloatDyn($cantidad_facturada) ?>
                </div>
                <div class="vta-orden-venta-tipo-estado-facturacion">	
                    <img src="imgs/vta_orden_venta_tipo_estado_facturacion/<?php Gral::_echo($vta_orden_venta->getVtaOrdenVentaTipoEstadoFacturacion()->getCodigo()) ?>.png" alt="tipo-estado" width="9" />
                    <?php Gral::_echo($vta_orden_venta->getVtaOrdenVentaTipoEstadoFacturacion()->getDescripcion()) ?>
                </div>
            </td>

            <td class="adm_tbl_lineas" align="center">
                <div class="vta-orden-venta-importe">
                    <?php Gral::_echoImp($importe_ov) ?>
                </div>
            </td>
            
        </tr>
    <?php } ?>
        <tr>
            <td class="adm_tbl_encabezado" align="center" colspan="8">
            </td>            
            <td class="adm_tbl_encabezado" align="center">
                <div class="vta_orden_venta-importe-total">
                    <?php Gral::_echoImp($importe_ov_total) ?>
                </div>
            </td>            
        </tr>
</table>
<style>
    #cuerpo_widget_WIDGET_HOME_VTA_ORDEN_VENTA_REMITIDA_NO_FACTURADA{}
    
    #cuerpo_widget_WIDGET_HOME_VTA_ORDEN_VENTA_REMITIDA_NO_FACTURADA .vta-remito-fecha-diferencia-dias{
        color: #666;
        font-size: 11px;        
    }
    #cuerpo_widget_WIDGET_HOME_VTA_ORDEN_VENTA_REMITIDA_NO_FACTURADA .vta-remito-codigo,
    #cuerpo_widget_WIDGET_HOME_VTA_ORDEN_VENTA_REMITIDA_NO_FACTURADA .vta-orden-venta-codigo,
    #cuerpo_widget_WIDGET_HOME_VTA_ORDEN_VENTA_REMITIDA_NO_FACTURADA .vta-presupuesto-codigo{
        color: #000;
        font-size: 11px;
    }
    #cuerpo_widget_WIDGET_HOME_VTA_ORDEN_VENTA_REMITIDA_NO_FACTURADA .vta-presupuesto-codigo{
        font-weight: bold;
    }    
    #cuerpo_widget_WIDGET_HOME_VTA_ORDEN_VENTA_REMITIDA_NO_FACTURADA .vta-remito-creado-por-descripcion{
        color: #666;
        font-size: 11px;
    }
    #cuerpo_widget_WIDGET_HOME_VTA_ORDEN_VENTA_REMITIDA_NO_FACTURADA .cli-cliente-descripcion{        
        color: #000;
        font-size: 10px;
        font-weight: bold;
    }
    #cuerpo_widget_WIDGET_HOME_VTA_ORDEN_VENTA_REMITIDA_NO_FACTURADA .vta-orden-venta-descripcion{        
        font-size: 11px;
    }
    #cuerpo_widget_WIDGET_HOME_VTA_ORDEN_VENTA_REMITIDA_NO_FACTURADA .vta-orden-venta-cantidad-remitida,
    #cuerpo_widget_WIDGET_HOME_VTA_ORDEN_VENTA_REMITIDA_NO_FACTURADA .vta-orden-venta-cantidad-facturada{
        font-size: 13px;
        font-weight: bold;
    }
    #cuerpo_widget_WIDGET_HOME_VTA_ORDEN_VENTA_REMITIDA_NO_FACTURADA .vta-orden-venta-tipo-estado-remision,
    #cuerpo_widget_WIDGET_HOME_VTA_ORDEN_VENTA_REMITIDA_NO_FACTURADA .vta-orden-venta-tipo-estado-facturacion{
        color: #666;
        font-size: 10px;
    }    
</style>