
<div class="titulo"><?php Lang::_lang('Items de Recibo') ?></div>

<div class="bloque-pde-recibo">

    <table border="0" class="tabla-modal">
        <tr>
            <td class="adm_tbl_encabezado" width="160" align='center'><?php Lang::_lang("Concepto"); ?></td>
            <td class="adm_tbl_encabezado" width="400" align='center'><?php Lang::_lang("Descripcion"); ?></td>
            <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Cantidad"); ?></td>
            <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Imp Unitario"); ?></td>
            <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang("Imp Total"); ?></td>
            <td class="adm_tbl_encabezado" width="160" align='center'><?php Lang::_lang("Forma Pago"); ?></td>
        </tr>
        <?php
        $cont = 0;
        foreach ($pde_recibo_items as $pde_recibo_item) {
            $cont++;
            $strong = ($cont == 1) ? 'strong' : '';

            $pde_recibo_concepto = $pde_recibo_item->getPdeReciboConcepto();
            $gral_fp_forma_pago = $pde_recibo_item->getGralFpFormaPago();

            $cantidad = $pde_recibo_item->getCantidad();
            $importe_unitario = $pde_recibo_item->getImporteUnitario();
            $importe_total = $importe_unitario * $cantidad;

            $pde_recibo_item_cheque = $pde_recibo_item->getPdeReciboItemCheque();
            ?>
            <tr>

                <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="concepto">	
                        <?php Gral::_echo($pde_recibo_concepto->getDescripcion()) ?>
                    </div>
                </td>

                <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="descripcion">	
                        <?php Gral::_echo($pde_recibo_item->getDescripcion()) ?>
                    </div>

                    <?php if ($pde_recibo_item_cheque) { ?>
                        <div class="info-cheque">
                            Descripcion: <strong><?php Gral::_echo($pde_recibo_item_cheque->getDescripcion()) ?></strong><br />
                            Numero Cheque: <strong><?php Gral::_echo($pde_recibo_item_cheque->getNumeroCheque()) ?></strong><br />
                            Fecha Emision: <strong><?php Gral::_echo(Gral::getFechaToWeb($pde_recibo_item_cheque->getFechaEmision())) ?></strong><br />
                            Fecha Cobro: <strong><?php Gral::_echo(Gral::getFechaToWeb($pde_recibo_item_cheque->getFechaCobro())) ?></strong><br />
                            Entregador: <strong><?php Gral::_echo($pde_recibo_item_cheque->getEntregador()) ?></strong><br />
                            Firmante: <strong><?php Gral::_echo($pde_recibo_item_cheque->getFirmante()) ?></strong><br />
                            Banco: <strong><?php Gral::_echo($pde_recibo_item_cheque->getGralBanco()->getDescripcion()) ?></strong><br />
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
                    <div class="forma-pago">	
                        <?php Gral::_echo($gral_fp_forma_pago->getDescripcion()) ?>
                    </div>
                </td>

            </tr>
        <?php } ?>
    </table>

</div>
<br />
