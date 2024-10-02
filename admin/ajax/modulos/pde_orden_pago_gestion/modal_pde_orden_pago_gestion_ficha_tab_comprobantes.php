
<div class="titulo"><?php Lang::_lang('Comprobantes') ?></div>

<div class="bloque-historial-estados">
    <table border="0" class="tabla-modal">
        <tr>

            <td class="adm_tbl_encabezado" width="70" align="center">
                ID
            </td>
            
            <td class="adm_tbl_encabezado" width="100" align="center">
                Emision
            </td>

            <td class="adm_tbl_encabezado" width="100" align="center">
                Tipo
            </td>
            
            <td class="adm_tbl_encabezado" width="140" align="center">
                Nro Comprobante
            </td>

            <td class="adm_tbl_encabezado" width="100" align="center">
                Vencimiento
            </td>

            <td class="adm_tbl_encabezado" width="140" align="center">
                Importe en OP
            </td>
            
            <td class="adm_tbl_encabezado" width="140" align="center">
                Importe Total
            </td>
        </tr>
        <?php
        $cont = 0;
        foreach ($pde_orden_pago_pde_comprobantes as $pde_orden_pago_pde_comprobante) {
            $cont++;
            $strong = ($cont == 1) ? 'strong' : '';
            
            $pde_comprobante = $pde_orden_pago_pde_comprobante->getPdeComprobante();
            $importe_afectado = $pde_orden_pago_pde_comprobante->getImporteAfectado();
            $importe_comprobante = $pde_comprobante->getImporteTotalComprobante();
            ?>
            <tr id="tr_pde_orden_pago_pde_comprobante_gestion_uno_<?php echo $pde_orden_pago_pde_comprobante->getId() ?>" class="uno" identificador="<?php echo $pde_orden_pago_pde_comprobante->getId() ?>">

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                    <label class="id">
                        <?php Gral::_echo($pde_orden_pago_pde_comprobante->getId()) ?>
                    </label>
                </td>
                
                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                    <label class="fecha-emision">
                        <?php Gral::_echo(Gral::getFechaToWEB($pde_comprobante->getFechaEmision())) ?>
                    </label>
                </td>	
                
                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                    <label class="tipo">
                        <?php Gral::_echo($pde_comprobante->getTipoComprobanteSiglas()) ?>
                    </label>
                </td>
                
                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                    <label class="numero-comprobante">
                        <?php Gral::_echo($pde_comprobante->getTipoComprobanteMin()) ?>
                        <?php Gral::_echo($pde_comprobante->getNumeroComprobanteCompleto()) ?>
                    </label>
                </td>	

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                    <label class="fecha-vencimiento">
                        <?php Gral::_echo(Gral::getFechaToWEB($pde_comprobante->getFechaVencimiento())) ?>
                    </label>
                </td>	

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                    <label class="importe-total">
                        <?php Gral::_echoImp($importe_afectado) ?>
                    </label>
                </td>	

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                    <label class="importe-total">
                        <?php Gral::_echoImp($importe_comprobante) ?>
                    </label>
                </td>	
                
            </tr>
        <?php } ?>
    </table>
</div>
<br />

