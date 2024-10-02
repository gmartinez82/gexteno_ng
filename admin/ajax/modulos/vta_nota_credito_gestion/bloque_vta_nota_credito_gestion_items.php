<table border="0" class="tabla-modal">
    <tr>
        <td class="adm_tbl_encabezado" width="160" align='center'><?php Lang::_lang("Concepto"); ?></td>
        <td class="adm_tbl_encabezado" width="350" align='center'><?php Lang::_lang("Descripcion"); ?></td>
        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Cantidad"); ?></td>
        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Imp Unitario"); ?></td>
        <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang("Imp Total"); ?></td>
        <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang("Tipo IVA"); ?></td>
        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Perc IIBB"); ?></td>
    </tr>
    <?php
    $vta_nota_credito_items = $vta_nota_credito->getVtaNotaCreditoItems();
    if (!count($vta_nota_credito_items) > 0) {
        $vta_nota_credito_items = $vta_nota_credito->getVtaNotaCreditoVtaFacturaVtaOrdenVentas();
    }

    $cont = 0;
    foreach ($vta_nota_credito_items as $vta_nota_credito_item) {
        $cont++;
        $strong = ($cont == 1) ? 'strong' : '';

        $php_class = get_class($vta_nota_credito_item);
        if ($php_class == 'VtaNotaCreditoItem') {
            $vta_nota_credito_concepto = $vta_nota_credito_item->getVtaNotaCreditoConcepto();
        }
        $gral_tipo_iva = $vta_nota_credito_item->getGralTipoIva();
        ?>
        <tr>
            <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="concepto">	
                    <?php if ($vta_nota_credito_concepto) { ?>
                        <?php Gral::_echo($vta_nota_credito_concepto->getDescripcion()) ?>
                    <?php } ?>
                </div>
            </td>

            <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="descripcion">	
                    <?php Gral::_echo($vta_nota_credito_item->getDescripcion()) ?>
                </div>
            </td>

            <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="cantidad">
                    <?php $cantidad = $vta_nota_credito_item->getCantidad(); ?>
                    <?php Gral::_echo($cantidad) ?>
                </div>
            </td>

            <td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="importe-unitario">
                    <?php $importe_unitario = $vta_nota_credito_item->getImporteUnitario(); ?>
                    <?php Gral::_echoImp($importe_unitario) ?>
                </div>
            </td>

            <td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="importe-total">
                    <?php $importe_total = $importe_unitario * $cantidad; ?>
                    <?php Gral::_echoImp($importe_total) ?>
                </div>
            </td>
            
            <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="aplica_percepcion_iibb">
                    <?php Gral::_echo($gral_tipo_iva->getDescripcion()) ?> 
                    <br /><?php Gral::_echoImp(($gral_tipo_iva->getValorIva() / 100) * $importe_unitario) ?>
                </div>
            </td>

            <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="aplica_percepcion_iibb">
                    <?php if ($php_class == 'VtaNotaCreditoItem') { ?>
                        <?php $gral_si_no_aplica_percepcion_iibb = GralSiNo::getOxId($vta_nota_credito_item->getPercepcionIibbAplica()); ?>
                        <?php Gral::_echo($gral_si_no_aplica_percepcion_iibb->getDescripcion()) ?>
                    <?php } ?>
                </div>
            </td>

        </tr>
    <?php } ?>
</table>