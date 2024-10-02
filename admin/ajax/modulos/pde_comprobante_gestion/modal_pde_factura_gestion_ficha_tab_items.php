
<div class="titulo"><?php Lang::_lang('Items de Factura') ?></div>

<div class="bloque-pde-factura">

    <table border="0" class="tabla-modal">
        <tr>
            <td class="adm_tbl_encabezado" width="160" align='center'><?php Lang::_lang("Concepto"); ?></td>
            <td class="adm_tbl_encabezado" width="350" align='center'><?php Lang::_lang("Descripcion"); ?></td>
            <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Cantidad"); ?></td>
            <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang("Imp Unitario"); ?></td>
            <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang("Tipo IVA"); ?></td>
            <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang("Imp Total"); ?></td>
        </tr>
        <?php
        $cont = 0;
        foreach ($pde_factura_items as $pde_factura_item) {
            $cont++;
            $strong = ($cont == 1) ? 'strong' : '';

            $pde_factura_concepto = $pde_factura_item->getPdeFacturaConcepto();
            $gral_tipo_iva = $pde_factura_item->getGralTipoIva();
            ?>
            <tr>
                <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="descripcion-pde-factura-concepto">	
                        <?php Gral::_echo($pde_factura_concepto->getDescripcion()) ?>
                    </div>
                </td>

                <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="descripcion">	
                        <?php Gral::_echo($pde_factura_item->getDescripcion()) ?>
                    </div>
                </td>

                <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="cantidad">
                        <?php $cantidad = $pde_factura_item->getCantidad(); ?>
                        <?php Gral::_echo($cantidad) ?>
                    </div>
                </td>

                <td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="importe-unitario">
                        <?php $importe_unitario = $pde_factura_item->getImporteUnitario(); ?>
                        <?php Gral::_echoImp($importe_unitario) ?>
                    </div>
                </td>

                <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="aplica_percepcion_iibb">
                        <?php Gral::_echo($gral_tipo_iva->getDescripcion()) ?> 
                        <br /><?php Gral::_echoImp(($gral_tipo_iva->getValorIva() / 100) * $importe_unitario) ?>
                    </div>
                </td>

                <td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="importe-total">
                        <?php $importe_total = $importe_unitario * $cantidad; ?>
                        <?php Gral::_echoImp($importe_total) ?>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </table>

</div>
<br />
