<table border="0" class="tabla-modal" id="tbl_insumo_gestion_ficha_compras">
    <tr>
        <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang('Fecha') ?></td>
        <td class="adm_tbl_encabezado" width="300" align='center'><?php Lang::_lang('Proveedor') ?></td>
        <td class="adm_tbl_encabezado" width="60" align='center'><?php Lang::_lang('Cant') ?></td>
        <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang('Importe OC') ?></td>
        <td class="adm_tbl_encabezado" width="150" align='center'><?php Lang::_lang('Estado RCP') ?></td>
        <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang('Importe RCP') ?></td>
        <td class="adm_tbl_encabezado" width="150" align='center'><?php Lang::_lang('Estado FACT') ?></td>
        <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang('Importe FACT') ?></td>
        <td class="adm_tbl_encabezado" width="60" align='center'><?php Lang::_lang('Desc') ?></td>
    </tr>
    <?php
    $cont = 0;
    foreach ($pde_ocs_ultimos as $pde_oc_ultimo) {
        $cont++;
        $strong = ($cont == 1) ? 'strong' : '';

        $pde_recepcion = $pde_oc_ultimo->getPdeRecepcion();
        $pde_factura_pde_oc = $pde_oc_ultimo->getPdeFacturaPdeOc();
        ?>
        <tr class="uno" pde_oc_id="<?php Gral::_echo($pde_oc_ultimo->getId()) ?>">
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="creado">
                    <?php Gral::_echo(Gral::getFechaHoraToWEB($pde_oc_ultimo->getCreado())) ?>
                </div>
                <div class="codigo">
                    <?php Gral::_echo($pde_oc_ultimo->getCodigo()) ?>
                </div>
                <div class="creado-por">
                    <?php Gral::_echo($pde_oc_ultimo->getCreadoPorDescripcion()) ?>
                </div>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                <div class="descripcion">
                    <?php Gral::_echo($pde_oc_ultimo->getPrvProveedor()->getDescripcion()) ?>
                </div>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="cantidad">
                    <?php Gral::_echo($pde_oc_ultimo->getCantidad()) ?>
                </div>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="right">
                <div class="importe_unitario">
                    <?php Gral::_echoImp($pde_oc_ultimo->getImporteUnidad()) ?>
                </div>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                <div class="pde_oc_tipo_estado_remision">
                    <img src="imgs/pde_oc_tipo_estado_recepcion/<?php Gral::_echo($pde_oc_ultimo->getPdeOcTipoEstadoRecepcion()->getCodigo()) ?>.png" alt="tipo-estado" width="10" />
                    <?php Gral::_echo($pde_oc_ultimo->getPdeOcTipoEstadoRecepcion()->getDescripcion()) ?>
                </div>
                <div class="cantidad-recibida">
                    <?php Gral::_echo($pde_oc_ultimo->getCantidadTotalRecibida()) ?> / <?php Gral::_echo($pde_oc_ultimo->getCantidad()) ?>
                </div>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="right">
                <?php if ($pde_recepcion) { ?>
                    <div class="importe_unitario">
                        <?php Gral::_echoImp($pde_recepcion->getImporteUnidad()) ?>
                    </div>
                <?php } ?>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                <div class="pde_oc_tipo_estado_facturacion">	
                    <img src="imgs/pde_oc_tipo_estado_facturacion/<?php Gral::_echo($pde_oc_ultimo->getPdeOcTipoEstadoFacturacion()->getCodigo()) ?>.png" alt="tipo-estado" width="10" />
                    <?php Gral::_echo($pde_oc_ultimo->getPdeOcTipoEstadoFacturacion()->getDescripcion()) ?>
                </div>
                <div class="cantidad-facturada">
                    <?php Gral::_echo($pde_oc_ultimo->getCantidadTotalFacturada()) ?> / <?php Gral::_echo($pde_oc_ultimo->getCantidad()) ?>
                </div>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="right">
                <?php if ($pde_factura_pde_oc) { ?>
                    <div class="nro-factura">
                        <?php Gral::_echo($pde_factura_pde_oc->getPdeFactura()->getNumeroComprobanteCompleto()) ?>
                    </div>
                    <div class="importe_unitario">
                        <?php Gral::_echoImp($pde_factura_pde_oc->getImporteUnitarioConDescuento()) ?>
                    </div>
                    <div class="prv_descuento_financiero">
                        <?php Gral::_echo($pde_factura_pde_oc->getPdeFactura()->getPrvDescuentoFinanciero()->getDescripcion()) ?>
                    </div>
                <?php } ?>                
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <?php if ($pde_factura_pde_oc && $pde_factura_pde_oc->getPorcentajeDescuento()) { ?>
                    <div class="descuento">
                        <?php Gral::_echoFloat($pde_factura_pde_oc->getPorcentajeDescuento()) ?> %
                    </div>
                <?php } ?>
                
            </td>

        </tr>
    <?php } ?>
</table>