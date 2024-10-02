
<div class="titulo"><?php Lang::_lang('Comprobantes') ?></div>

<div class="bloque-historial-estados">
    <table border="0" class="tabla-modal">
        <tr>
            <td class="adm_tbl_encabezado" width="100" align="center">
                Emision
            </td>

            <td class="adm_tbl_encabezado" width="40" align="center">
                Tipo
            </td>
            
            <td class="adm_tbl_encabezado" width="120" align="center">
                Nro Comprobante
            </td>

            <td class="adm_tbl_encabezado" width="240" align="center">
                Cliente
            </td>
            
            <td class="adm_tbl_encabezado" width="90" align="center">
                Vencimiento
            </td>

            <td class="adm_tbl_encabezado" width="90" align="center">
                Base Comisionable
            </td>
            
            <td class="adm_tbl_encabezado" width="90" align="center">
                % Comision
            </td>
            
            <td class="adm_tbl_encabezado" width="90" align="center">
                Importe Comision
            </td>
        </tr>
        <?php
        $cont = 0;
        foreach ($vta_comision_vta_comprobantes as $vta_comision_vta_comprobante) {
            $cont++;
            $strong = ($cont == 1) ? 'strong' : '';
            
            $vta_comprobante = $vta_comision_vta_comprobante->getVtaComprobante();
            $base_comisionable = $vta_comision_vta_comprobante->getBaseComisionable();
            $importe_afectado = $vta_comision_vta_comprobante->getImporteAfectado();
            $porcentaje_comision = $vta_comision_vta_comprobante->getPorcentajeComision();
            $importe_comision = $vta_comision_vta_comprobante->getImporteComision();
            $importe_comprobante = $vta_comprobante->getImporteTotalComprobante();
            ?>
            <tr id="tr_vta_comision_vta_comprobante_gestion_uno_<?php echo $vta_comision_vta_comprobante->getId() ?>" class="uno" identificador="<?php echo $vta_comision_vta_comprobante->getId() ?>">

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                    <label class="fecha-emision">
                        <?php Gral::_echo(Gral::getFechaToWEB($vta_comprobante->getFechaEmision())) ?>
                    </label>
                </td>	
                
                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                    <label class="tipo">
                        <?php Gral::_echo($vta_comprobante->getTipoComprobanteSiglas()) ?>
                    </label>
                </td>
                
                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                    <label class="numero-comprobante">
                        <?php Gral::_echo($vta_comprobante->getTipoComprobanteMin()) ?>
                        <?php Gral::_echo($vta_comprobante->getNumeroComprobanteCompleto()) ?>
                    </label>
                </td>

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="left">
                    <label class="cliente">
                        <?php Gral::_echo($vta_comprobante->getPersonaDescripcion()) ?>
                    </label>
                </td>	
                
                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                    <label class="fecha-vencimiento">
                        <?php Gral::_echo(Gral::getFechaToWEB($vta_comprobante->getFechaVencimiento())) ?>
                    </label>
                </td>	

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                    <label class="importe-total">
                        <?php Gral::_echoImp($base_comisionable) ?>
                    </label>
                </td>	

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="center">
                    <label class="importe-total">
                        <?php Gral::_echoFloat($porcentaje_comision) ?> %
                    </label>
                </td>	

                <td class="adm_tbl_lineas <?php echo $css_bg ?>" align="right">
                    <label class="importe-total">
                        <?php Gral::_echoImp($importe_comision) ?>
                    </label>
                </td>	
                
            </tr>
        <?php } ?>
    </table>
</div>
<br />

