<table border="0" class="tabla-modal">
    <tr>
        <td class="adm_tbl_encabezado" width="160" align='center'><?php Lang::_lang("Concepto"); ?></td>
        <td class="adm_tbl_encabezado" width="400" align='center'><?php Lang::_lang("Descripcion"); ?></td>
        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Cantidad"); ?></td>
        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Imp Unitario"); ?></td>
        <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang("Imp Total"); ?></td>
        <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang("Tipo IVA"); ?></td>
        <td class="adm_tbl_encabezado" width="160" align='center'><?php Lang::_lang("Forma Pago"); ?></td>
    </tr>
    <?php
    $vta_ajuste_haber_items = $vta_ajuste_haber->getVtaAjusteHaberItems();
    if (!count($vta_ajuste_haber_items) > 0) {
        $vta_ajuste_haber_items = $vta_ajuste_haber->getVtaAjusteHaberVtaAjusteDebeVtaOrdenVentas();
    }
    $cont = 0;
    foreach ($vta_ajuste_haber_items as $vta_ajuste_haber_item) {
        $cont++;
        $strong = ($cont == 1) ? 'strong' : '';

        $php_class = get_class($vta_nota_credito_item);
        if ($php_class == 'VtaAjusteHaberItem') {
            $vta_ajuste_haber_concepto = $vta_ajuste_haber_item->getVtaAjusteHaberConcepto();
            $gral_fp_forma_pago = $vta_ajuste_haber_item->getGralFpFormaPago();
            
            $vta_ajuste_haber_item_cheque = $vta_ajuste_haber_item->getVtaAjusteHaberItemCheque();
            $vta_ajuste_haber_item_retencion = $vta_ajuste_haber_item->getVtaAjusteHaberItemRetencion();
        }        

        $cantidad = $vta_ajuste_haber_item->getCantidad();
        $importe_unitario = $vta_ajuste_haber_item->getImporteUnitario();
        $importe_total = $importe_unitario * $cantidad;
        $gral_tipo_iva = $vta_ajuste_haber_item->getGralTipoIva();
        
        ?>
        <tr>

            <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="concepto">	
                    <?php if ($vta_nota_credito_concepto) { ?>
                        <?php Gral::_echo($vta_ajuste_haber_concepto->getDescripcion()) ?>
                    <?php } ?>
                </div>
            </td>

            <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="descripcion">	
                    <?php Gral::_echo($vta_ajuste_haber_item->getDescripcion()) ?>
                </div>
                
                <?php if($vta_ajuste_haber_item_cheque){ ?>
                <div class="info-cheque">
                    Descripcion: <strong><?php Gral::_echo($vta_ajuste_haber_item_cheque->getDescripcion()) ?></strong><br />
                    Numero Cheque: <strong><?php Gral::_echo($vta_ajuste_haber_item_cheque->getNumeroCheque()) ?></strong><br />
                    Fecha Emision: <strong><?php Gral::_echo(Gral::getFechaToWeb($vta_ajuste_haber_item_cheque->getFechaEmision())) ?></strong><br />
                    Fecha Cobro: <strong><?php Gral::_echo(Gral::getFechaToWeb($vta_ajuste_haber_item_cheque->getFechaCobro())) ?></strong><br />
                    Entregador: <strong><?php Gral::_echo($vta_ajuste_haber_item_cheque->getEntregador()) ?></strong><br />
                    Firmante: <strong><?php Gral::_echo($vta_ajuste_haber_item_cheque->getFirmante()) ?></strong><br />
                    Banco: <strong><?php Gral::_echo($vta_ajuste_haber_item_cheque->getGralBanco()->getDescripcion()) ?></strong><br />
                </div>
                <?php } ?>

                <?php if($vta_ajuste_haber_item_retencion){ ?>
                <div class="info-retencion">
                    Descripcion: <strong><?php Gral::_echo($vta_ajuste_haber_item_retencion->getDescripcion()) ?></strong><br />
                    Numero Comprobante: <strong><?php Gral::_echo($vta_ajuste_haber_item_retencion->getNumeroComprobante()) ?></strong><br />
                    Fecha Emision: <strong><?php Gral::_echo(Gral::getFechaToWeb($vta_ajuste_haber_item_retencion->getFechaEmision())) ?></strong><br />
                    Base Imponible: <strong><?php Gral::_echo($vta_ajuste_haber_item_retencion->getImporteBaseImponible()) ?></strong><br />
                    Importe Retencion: <strong><?php Gral::_echo($vta_ajuste_haber_item_retencion->getImporteRetencion()) ?></strong><br />
                </div>
                <?php } ?>
                
            </td>

            <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="cantidad">
                    <?php Gral::_echo($cantidad) ?>
                </div>
            </td>

            <td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="importe-unitario">
                    <?php Gral::_echoImp($importe_unitario) ?>
                </div>
            </td>

            <td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="importe-total">
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
                <?php if($gral_fp_forma_pago){ ?>
                <div class="forma-pago">	
                    <?php Gral::_echo($gral_fp_forma_pago->getDescripcion()) ?>
                </div>
                <?php } ?>
            </td>

        </tr>
    <?php } ?>
</table>