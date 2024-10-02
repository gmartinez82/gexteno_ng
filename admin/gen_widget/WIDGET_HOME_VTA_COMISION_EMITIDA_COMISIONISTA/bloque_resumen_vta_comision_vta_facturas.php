<!-- Tabla de Resumen de Comisiones y Facturas -->
<table border="0" align="center">
    
    <!--------------------------------------------------------------------------
    -- Titulo
    --------------------------------------------------------------------------->
    <tr>
        <td class="adm_tbl_encabezado" align="center" colspan="6">
            <?php Gral::_echo('Factura') ?>
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
    $totalizador_importe_afectado_facturas = 0;
    $totalizador_importe_comision_facturas = 0;
    foreach ($vta_facturas as $vta_factura) {
        $cliente_razon_social = $vta_factura->getPersonaDescripcion();
        $cliente_descripcion = $vta_factura->getCliCliente()->getDescripcion();
        
        $vta_factura_tipo_estado = $vta_factura->getVtaFacturaTipoEstado();
        $gral_fp_cuota_descripcion_completa_vta_factura = $vta_factura->getGralFpCuota()->getDescripcionCompleta();
        
        $cantidad_items = $vta_factura->getCantidadItems(true);
        
        $vta_factura_importe = $vta_factura->getResumenComprobante();
        $importe_total_vta_factura_importe = $vta_factura_importe->getImporteTotal();
        
        $vta_comision = false;
        $vta_comision_vta_factura = $vta_factura->getVtaComisionVtaFacturaXComisionista($widget_cmb_vta_vendedor_id, $widget_cmb_vta_preventista_id, $widget_cmb_vta_comprador_id);
        if ($vta_comision_vta_factura) {
            $vta_comision = $vta_comision_vta_factura->getVtaComision();
            $vta_comision_tipo_estado = $vta_comision->getVtaComisionTipoEstado();
            
            $vta_comision_vta_factura_importe_afectado = $vta_comision_vta_factura->getImporteAfectado();
            $vta_comision_vta_factura_importe_comision = $vta_comision_vta_factura->getImporteComision();
            
            $totalizador_importe_afectado_facturas = $totalizador_importe_afectado_facturas + $vta_comision_vta_factura_importe_afectado;
            $totalizador_importe_comision_facturas = $totalizador_importe_comision_facturas + $vta_comision_vta_factura_importe_comision;
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
                <div class="items">
                    <?php Gral::_echo($cantidad_items) ?>
                </div>
            </td>
            
            <td class="adm_tbl_lineas" align="center">
                <div class="importe-total">
                    <?php Gral::_echoImp($importe_total_vta_factura_importe) ?>
                </div>
                <div class="forma-pago" title="<?php Gral::_echo(substr($gral_fp_cuota_descripcion_completa_vta_factura, 0, 100)) ?>">
                    <?php Gral::_echo(substr($gral_fp_cuota_descripcion_completa_vta_factura, 0, 15)) ?>
                </div>
                <div class="tipo-lista-precio">
                    <?php Gral::_echo($vta_factura->getVtaPresupuesto()->getInsTipoListaPrecio()->getDescripcion()) ?>
                </div>
            </td>
            
            <td class="adm_tbl_lineas" align="center">
                <div class="estado">
                    <img src="imgs/vta_factura_tipo_estado/<?php Gral::_echo($vta_factura_tipo_estado->getCodigo()) ?>.png" alt="tipo-estado" width="12" />
                    <?php Gral::_echo($vta_factura_tipo_estado->getDescripcion()) ?>
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
                    <?php if ($vta_comision_vta_factura) { ?>
                        <?php Gral::_echoImp($vta_comision_vta_factura_importe_afectado) ?>
                    <?php } ?>
                </div>
            </td>
            
            <td class="adm_tbl_lineas" align="center">
                <div class="porcentaje-comisionable">
                    <?php if ($vta_comision_vta_factura) { ?>
                        <?php Gral::_echo($vta_comision_vta_factura->getPorcentajeComision()) ?>%
                    <?php } ?>
                </div>
            </td>
            
            <td class="adm_tbl_lineas" align="center">
                <div class="importe-comisionable">
                    <?php if ($vta_comision_vta_factura) { ?>
                        <?php Gral::_echoImp($vta_comision_vta_factura_importe_comision) ?>
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
                <?php Gral::_echoImp($totalizador_importe_afectado_facturas) ?>
            </div>
        </td>
        <td></td>
        <td class="adm_tbl_encabezado" align="center" width="50">
            <div class="totalizador">
                <?php Gral::_echoImp($totalizador_importe_comision_facturas) ?>
            </div>
        </td>
        <td></td>
    </tr>
</table>
