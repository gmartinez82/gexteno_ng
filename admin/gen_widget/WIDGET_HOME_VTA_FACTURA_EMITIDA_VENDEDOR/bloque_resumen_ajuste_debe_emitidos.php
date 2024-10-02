<!-- Tabla de Resumen de Ajuste Debe Emitidos -->
<table border="0" align="center">
    
    <!--------------------------------------------------------------------------
    -- Titulo
    --------------------------------------------------------------------------->
    <tr>
        <td class="adm_tbl_encabezado" align="center" colspan="7">
            <?php //Gral::_echo('Factura Z') ?>
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
    foreach ($vta_ajuste_debes as $vta_ajuste_debe) {
        $cliente_razon_social = $vta_ajuste_debe->getPersonaDescripcion();
        $cliente_descripcion = $vta_ajuste_debe->getCliCliente()->getDescripcion();
        
        $vta_presupuesto = $vta_ajuste_debe->getVtaPresupuesto();
        $importe_total_presupuesto = $vta_presupuesto->getImporteTotalPresupuestoConIva(false, 0);
        $vta_ajuste_debe_tipo_estado = $vta_ajuste_debe->getVtaAjusteDebeTipoEstado();
        $gral_fp_cuota_descripcion_completa_vta_ajuste_debe = $vta_ajuste_debe->getGralFpCuota()->getDescripcionCompleta();
        $gral_fp_cuota_descripcion_completa_vta_presupuesto = $vta_presupuesto->getGralFpCuota()->getDescripcionCompleta();
        $vta_orden_venta = $vta_presupuesto->getVtaOrdenVenta();
        
        $cantidad_items = $vta_ajuste_debe->getCantidadItems(true);
        $cantidad_items_presupuesto = $vta_presupuesto->getCantidadItems();
        
        $importe_total = $vta_ajuste_debe->getVtaAjusteDebeTotal();
        $importe_total_saldo_imputable = $vta_ajuste_debe->getSaldoImputable();
        $totalizador_importe_total_facturas = $totalizador_importe_total_facturas + $importe_total;
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
                    <?php Gral::_echo(Gral::getFechaToWEB($vta_ajuste_debe->getFechaEmision())) ?>
                </div>
                
                <div class="comprobante">
                    <?php Gral::_echo($vta_ajuste_debe->getNumeroComprobanteCompleto()) ?>
                    <br />
                    
                    <?php if (UsCredencial::getEsAcreditado('VTA_AJUSTE_DEBE_GESTION_ACCION_COMPROBANTE')) { ?>
                        <a href="ajax/modulos/vta_ajuste_debe_gestion/pdf_ajuste_debe.php?vta_ajuste_debe_id=<?php echo $vta_ajuste_debe->getId() ?>&hash=<?php echo $vta_ajuste_debe->getHash() ?>" target="_blank">
                            <img src='imgs/btn_pdf.png' width='16' border='0' title="Ver AjusteDebe" />
                        </a>
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
                    <?php Gral::_echoImp($importe_total) ?>
                </div>
                <div class="forma-pago" title="<?php Gral::_echo($gral_fp_cuota_descripcion_completa_vta_ajuste_debe) ?>">
                    <?php Gral::_echo(substr($gral_fp_cuota_descripcion_completa_vta_ajuste_debe, 0, 15)) ?>
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
                    <img src="imgs/vta_ajuste_debe_tipo_estado/<?php Gral::_echo($vta_ajuste_debe_tipo_estado->getCodigo()) ?>.png" alt="tipo-estado" width="12" />
                    <?php Gral::_echo($vta_ajuste_debe_tipo_estado->getDescripcion()) ?>
                </div>
            </td>
            
            <td class="adm_tbl_lineas" align="center">
                <div class="fecha">
                    <?php Gral::_echo(Gral::getFechaToWEB($vta_presupuesto->getFecha())) ?>
                </div>
                
                <div class="presupuesto">
                    <?php Gral::_echo($vta_presupuesto->getCodigo()) ?>
                    <br />
                    
                    <?php if (UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_GESTION_ACCION_COMPROBANTE')) { ?>
                        <a href="ajax/modulos/vta_presupuesto_gestion/pdf_presupuesto.php?vta_presupuesto_id=<?php echo $vta_presupuesto->getId() ?>&hash=<?php echo $vta_presupuesto->getHash() ?>" target="_blank">
                            <img src='imgs/btn_pdf.png' width='16' border='0' title="<?php Gral::_echo('Ver PDF de Presupuesto') ?>"/>
                        </a>
                    <?php } ?>
                    <?php if (UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_GESTION_ACCION_VER_OV') && false) { ?>
                    <a href="_init.php?arr_gral=<?php echo VtaOrdenVenta::getFiltrosArrGral() ?>&arr=<?php echo $vta_orden_venta->getFiltrosArrXCampo('VtaPresupuesto', 'vta_presupuesto_id') ?>" target="_blank">
                        <img src='imgs/btn_importe.png' width='12' border='0' align="absmiddle" title="<?php Gral::_echo('Ver Ordenes de Venta') ?>"/>
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
