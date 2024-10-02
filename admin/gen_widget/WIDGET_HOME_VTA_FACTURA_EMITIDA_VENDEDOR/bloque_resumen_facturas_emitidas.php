<!-- Tabla de Resumen de Facturas Emitidas -->
<table border="0" align="center">
    
    <!--------------------------------------------------------------------------
    -- Titulo
    --------------------------------------------------------------------------->
    <tr>
        <td class="adm_tbl_encabezado" align="center" colspan="7">
            <?php Gral::_echo('Factura') ?> emitidas entre el <?php echo Gral::getFechaToWEB($txt_desde) ?> y <?php echo Gral::getFechaToWEB($txt_hasta) ?>
        </td>
        <td class="adm_tbl_encabezado" align="center" colspan="3">
            <?php Gral::_echo('Presupuesto') ?>
        </td>
    </tr>
    
    <!--------------------------------------------------------------------------
    -- Cabeceras
    --------------------------------------------------------------------------->
    <tr>
        <td class="adm_tbl_encabezado" align="center" width="50">#</td>
        <td class="adm_tbl_encabezado" align="center" width="160">Cliente</td>
        <td class="adm_tbl_encabezado" align="center" width="130">N° Comprobante</td>
        <td class="adm_tbl_encabezado" align="center" width="40">Items</td>
        <td class="adm_tbl_encabezado" align="center" width="100">Imp. Total</td>
        <td class="adm_tbl_encabezado" align="center" width="100">Saldo</td>
        <td class="adm_tbl_encabezado" align="center" width="80">Estado</td>
        <td class="adm_tbl_encabezado" align="center" width="120">Presupuesto</td>
        <td class="adm_tbl_encabezado" align="center" width="40">Items</td>
        <td class="adm_tbl_encabezado" align="center" width="130">Imp. Total</td>
    </tr>
    
    <!--------------------------------------------------------------------------
    -- Cuerpo
    --------------------------------------------------------------------------->
    <?php
    $cont = 0;
    $totalizador_importe_total_facturas = 0;
    $totalizador_saldo_facturas = 0;
    foreach ($vta_facturas as $vta_factura) {
        $cliente_razon_social = $vta_factura->getPersonaDescripcion();
        $cliente_descripcion = $vta_factura->getCliCliente()->getDescripcion();
        
        $vta_presupuesto = $vta_factura->getVtaPresupuesto();
        $importe_total_presupuesto = $vta_presupuesto->getImporteTotalPresupuestoConIva(false, 0);
        $vta_factura_tipo_estado = $vta_factura->getVtaFacturaTipoEstado();
        $gral_fp_cuota_descripcion_completa_vta_factura = $vta_factura->getGralFpCuota()->getDescripcionCompleta();
        $gral_fp_cuota_descripcion_completa_vta_presupuesto = $vta_presupuesto->getGralFpCuota()->getDescripcionCompleta();
        $vta_orden_venta = $vta_presupuesto->getVtaOrdenVenta();
        
        $cantidad_items = $vta_factura->getCantidadItems(true);
        $cantidad_items_presupuesto = $vta_presupuesto->getCantidadItems();
        
        $vta_factura_importe = $vta_factura->getResumenComprobante();
        $importe_total_vta_factura_importe = $vta_factura_importe->getImporteTotal();
        $importe_total_saldo_imputable = $vta_factura->getSaldoImputable();
        $totalizador_importe_total_facturas = $totalizador_importe_total_facturas + $importe_total_vta_factura_importe;
        $totalizador_saldo_facturas = $totalizador_saldo_facturas + $importe_total_saldo_imputable;
    ?>
        <tr>
            <td class="adm_tbl_lineas" align="center">
                <div class="contador">
                    <?php Gral::_echoInt(++$cont) ?>
                </div>
            </td>
            
            <td class="adm_tbl_lineas" align="left">
                <div class="cliente-razon-social">
                    <?php Gral::_echo($cliente_razon_social) ?>
                </div>
                <?php if ($cliente_razon_social != $cliente_descripcion) { ?>
                    <div class="cliente-descripcion">
                        <?php Gral::_echo($cliente_descripcion) ?>
                    </div>
                <?php } ?>
            </td>
                        
            <td class="adm_tbl_lineas" align="center">
                <div class="fecha">
                    <?php Gral::_echo(Gral::getFechaToWEB($vta_factura->getFechaEmision())) ?>
                </div>
                
                <div class="nro-comprobante">
                    <?php Gral::_echo($vta_factura->getNumeroComprobanteCompleto()) ?>
                    <br />
                    
                    <?php if (UsCredencial::getEsAcreditado('VTA_FACTURA_GESTION_ACCION_COMPROBANTE')) { ?>
                        <?php if ($vta_factura->getCae() != '') { ?>
                            <a href="ajax/modulos/vta_factura_gestion/pdf_factura.php?vta_factura_id=<?php echo $vta_factura->getId() ?>&hash=<?php echo $vta_factura->getHash() ?>" target="_blank">
                                <img src='imgs/btn_pdf.png' width='16' border='0' title="Ver Factura" />
                            </a>
                        <?php } ?>
                    <?php } ?>       
                </div>
            </td>
            
            <td class="adm_tbl_lineas" align="center">
                <div class="items <?php echo ($cantidad_items < $cantidad_items_presupuesto) ? 'diferencia' : '' ?>" title="<?php echo ($cantidad_items != $cantidad_items_presupuesto) ? 'Diferencia con lo presupuestado' : '' ?>">
                    <?php Gral::_echo($cantidad_items) ?>
                </div>
            </td>
            
            <td class="adm_tbl_lineas" align="center">
                <div class="importe-total">
                    <?php Gral::_echoImp($importe_total_vta_factura_importe) ?>
                </div>
                <div class="forma-pago" title="<?php Gral::_echo($gral_fp_cuota_descripcion_completa_vta_factura) ?>">
                    <?php Gral::_echo(substr($gral_fp_cuota_descripcion_completa_vta_factura, 0, 15)) ?>
                </div>
            </td>
            
            <td class="adm_tbl_lineas" align="center">
                <div class="importe-saldo">
                    <?php if ($importe_total_saldo_imputable == 0) { ?>
                        <?php Gral::_echo('-') ?>
                    <?php } else { ?>
                        <?php Gral::_echoImp($importe_total_saldo_imputable) ?>
                    <?php } ?>
                </div>
            </td>
            
            <td class="adm_tbl_lineas" align="center">
                <div class="estado">
                    <img src="imgs/vta_factura_tipo_estado/<?php Gral::_echo($vta_factura_tipo_estado->getCodigo()) ?>.png" alt="tipo-estado" width="12" />
                    <?php Gral::_echo($vta_factura_tipo_estado->getDescripcion()) ?>
                </div>
            </td>
            
            <td class="adm_tbl_lineas" align="center">
                <div class="fecha">
                    <?php Gral::_echo(Gral::getFechaToWEB($vta_presupuesto->getFecha())) ?>
                </div>
                
                <div class="nro-comprobante">
                    <?php Gral::_echo($vta_presupuesto->getCodigo()) ?>
                    <br />
                    
                    <?php if (UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_GESTION_ACCION_COMPROBANTE')) { ?>
                        <a href="ajax/modulos/vta_presupuesto_gestion/pdf_presupuesto.php?vta_presupuesto_id=<?php echo $vta_presupuesto->getId() ?>&hash=<?php echo $vta_presupuesto->getHash() ?>" target="_blank">
                            <img src='imgs/btn_pdf.png' width='16' border='0' title="<?php Gral::_echo('Ver Presupuesto') ?>"/>
                        </a>
                    <?php } ?>
                    <?php if (UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_GESTION_ACCION_VER_OV') && false) { ?>
                        <a href="_init.php?arr_gral=<?php echo VtaOrdenVenta::getFiltrosArrGral() ?>&arr=<?php echo $vta_orden_venta->getFiltrosArrXCampo('VtaPresupuesto', 'vta_presupuesto_id') ?>" target="_blank">
                            <img src='imgs/btn_importe.png' width='10' border='0' align="absmiddle" title="<?php Gral::_echo('Ver Ordenes de Venta') ?>"/>
                        </a>
                    <?php } ?>
                </div>
            </td>
            
            <td class="adm_tbl_lineas" align="center">
                <div class="items">
                    <?php Gral::_echo($cantidad_items_presupuesto) ?>
                </div>
            </td>
            
            <td class="adm_tbl_lineas" align="center">
                <div class="importe-total">
                    <?php Gral::_echoImp($importe_total_presupuesto) ?>
                </div>
                <div class="forma-pago" title="<?php Gral::_echo($gral_fp_cuota_descripcion_completa_vta_presupuesto) ?>">
                    <?php Gral::_echo(substr($gral_fp_cuota_descripcion_completa_vta_presupuesto, 0, 15)) ?>
                </div>
            </td>
        </tr>
    <?php } ?>
        
    <!--------------------------------------------------------------------------
    -- Totalizadores
    --------------------------------------------------------------------------->
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td class="adm_tbl_encabezado" align="center" width="50">
            <div class="totalizador">
                <?php Gral::_echoImp($totalizador_importe_total_facturas) ?>
            </div>
        </td>
        <td class="adm_tbl_encabezado" align="center" width="50">
            <div class="totalizador">
                <?php Gral::_echoImp($totalizador_saldo_facturas) ?>
            </div>
        </td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
</table>
