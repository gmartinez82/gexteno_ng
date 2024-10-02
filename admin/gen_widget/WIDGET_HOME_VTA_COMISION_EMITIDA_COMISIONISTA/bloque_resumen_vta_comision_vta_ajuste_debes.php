<!-- Tabla de Resumen de Comisiones y Facturas -->
<table border="0" align="center">
    
    <!--------------------------------------------------------------------------
    -- Titulo
    --------------------------------------------------------------------------->
    <tr>
        <td class="adm_tbl_encabezado" align="center" colspan="6">
            <?php //Gral::_echo('Factura Z') ?>
        </td>
        <td class="adm_tbl_encabezado" align="center" colspan="5">
            <?php Gral::_echo('Comision') ?>
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
        <td class="adm_tbl_encabezado" align="center" width="90">Estado</td>
        <td class="adm_tbl_encabezado" align="center" width="220">Comisionista</td>
        <td class="adm_tbl_encabezado" align="center" width="100">Base Com.</td>
        <td class="adm_tbl_encabezado" align="center" width="60">% Com.</td>
        <td class="adm_tbl_encabezado" align="center" width="90">Importe Com.</td>
        <td class="adm_tbl_encabezado" align="center" width="90">Estado</td>
    </tr>
    
    <!--------------------------------------------------------------------------
    -- Cuerpo
    --------------------------------------------------------------------------->
    <?php
    $cont = 0;
    $totalizador_importe_afectado_ajuste_debes = 0;
    $totalizador_importe_comision_ajuste_debes = 0;
    foreach ($vta_ajuste_debes as $vta_ajuste_debe) {
        $cliente_razon_social = $vta_ajuste_debe->getPersonaDescripcion();
        $cliente_descripcion = $vta_ajuste_debe->getCliCliente()->getDescripcion();
        
        $vta_ajuste_debe_tipo_estado = $vta_ajuste_debe->getVtaAjusteDebeTipoEstado();
        $gral_fp_cuota_descripcion_completa_vta_ajuste_debe = $vta_ajuste_debe->getGralFpCuota()->getDescripcionCompleta();
        
        $cantidad_items = $vta_ajuste_debe->getCantidadItems(true);
        
        $vta_ajuste_debe_importe = $vta_ajuste_debe->getResumenComprobante();
        $importe_total_vta_ajuste_debe_importe = $vta_ajuste_debe_importe->getImporteTotal();
        
        $vta_comision = false;
        $vta_comision_vta_ajuste_debe = $vta_ajuste_debe->getVtaComisionVtaAjusteDebeXComisionista($widget_cmb_vta_vendedor_id, $widget_cmb_vta_preventista_id, $widget_cmb_vta_comprador_id);
        
        if ($vta_comision_vta_ajuste_debe) {
            $vta_comision = $vta_comision_vta_ajuste_debe->getVtaComision();
            $vta_comision_tipo_estado = $vta_comision->getVtaComisionTipoEstado();
            
            $vta_comision_vta_ajuste_debe_importe_afectado = $vta_comision_vta_ajuste_debe->getImporteAfectado();
            $vta_comision_vta_ajuste_debe_importe_comision = $vta_comision_vta_ajuste_debe->getImporteComision();
            
            $totalizador_importe_afectado_ajuste_debes = $totalizador_importe_afectado_ajuste_debes + $vta_comision_vta_ajuste_debe_importe_afectado;
            $totalizador_importe_comision_ajuste_debes = $totalizador_importe_comision_ajuste_debes + $vta_comision_vta_ajuste_debe_importe_comision;
        }
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
                
                <div class="nro-comprobante">
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
                <div class="items">
                    <?php Gral::_echo($cantidad_items) ?>
                </div>
            </td>
            
            <td class="adm_tbl_lineas" align="center">
                <div class="importe-total">
                    <?php Gral::_echoImp($importe_total_vta_ajuste_debe_importe) ?>
                </div>
                <div class="forma-pago" title="<?php Gral::_echo($gral_fp_cuota_descripcion_completa_vta_ajuste_debe) ?>">
                    <?php Gral::_echo(substr($gral_fp_cuota_descripcion_completa_vta_ajuste_debe, 0, 15)) ?>
                </div>
                <div class="tipo-lista-precio">
                    <?php Gral::_echo($vta_ajuste_debe->getVtaPresupuesto()->getInsTipoListaPrecio()->getDescripcion()) ?>
                </div>
            </td>
            
            <td class="adm_tbl_lineas" align="center">
                <div class="estado">
                    <img src="imgs/vta_ajuste_debe_tipo_estado/<?php Gral::_echo($vta_ajuste_debe_tipo_estado->getCodigo()) ?>.png" alt="tipo-estado" width="12" />
                    <?php Gral::_echo($vta_ajuste_debe_tipo_estado->getDescripcion()) ?>
                </div>
            </td>
            
            <td class="adm_tbl_lineas" align="center">
                <div class="codigo">
                    <?php if ($vta_comision) { ?>
                        <?php Gral::_echo($vta_comision->getCodigo()) ?>
                    <?php } ?>
                </div>
                <div class="fecha">
                    <?php if ($vta_comision) { ?>
                        <?php Gral::_echo(Gral::getFechaToWEB($vta_comision->getFechaEmision())) ?>
                    <?php } ?>
                </div>
                <div class="comisionista">
                    <?php if ($vta_comision) { ?>
                        <?php Gral::_echo($vta_comision->getPersonaDescripcion()) ?>
                    <?php } ?>
                </div>
            </td>
            
            <td class="adm_tbl_lineas" align="center">
                <div class="importe-base-comisionable">
                    <?php if ($vta_comision_vta_ajuste_debe) { ?>
                        <?php Gral::_echoImp($vta_comision_vta_ajuste_debe_importe_afectado) ?>
                    <?php } ?>
                </div>
            </td>
            
            <td class="adm_tbl_lineas" align="center">
                <div class="porcentaje-comisionable">
                    <?php if ($vta_comision_vta_ajuste_debe) { ?>
                        <?php Gral::_echo($vta_comision_vta_ajuste_debe->getPorcentajeComision()) ?>%
                    <?php } ?>
                </div>
            </td>
            
            <td class="adm_tbl_lineas" align="center">
                <div class="importe-comisionable">
                    <?php if ($vta_comision_vta_ajuste_debe) { ?>
                        <?php Gral::_echoImp($vta_comision_vta_ajuste_debe_importe_comision) ?>
                    <?php } ?>
                </div>
            </td>
            
            <td class="adm_tbl_lineas" align="center">
                <div class="estado">
                    <?php if ($vta_comision) { ?>
                        <img src="imgs/vta_comision_tipo_estado/<?php Gral::_echo($vta_comision_tipo_estado->getCodigo()) ?>.png" alt="tipo-estado" width="12" />
                        <?php Gral::_echo($vta_comision_tipo_estado->getDescripcion()) ?>
                    <?php } ?>
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
        <td></td>
        <td></td>
        <td></td>
        <td class="adm_tbl_encabezado" align="center" width="50">
            <div class="totalizador">
                <?php Gral::_echoImp($totalizador_importe_afectado_ajuste_debes) ?>
            </div>
        </td>
        <td></td>
        <td class="adm_tbl_encabezado" align="center" width="50">
            <div class="totalizador">
                <?php Gral::_echoImp($totalizador_importe_comision_ajuste_debes) ?>
            </div>
        </td>
        <td></td>
    </tr>
</table>
