<?php ?>
<table class="listado_pde_orden_pago_items" id="listado_pde_orden_pago_items">
    <thead>
        <tr>
            <th width='250' align='center'>Forma de Pago</th>
            <th width='110' align='center'>Importe</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($cmb_gral_fp_forma_pago_ids as $i => $cmb_gral_fp_forma_pago_id) {
            $gral_fp_forma_pago = GralFpFormaPago::getOxId($cmb_gral_fp_forma_pago_id);

            $txt_descripcion = $txt_descripcions[$i];

            $txt_importe_unitario = $txt_importe_unitarios[$i];
            $txt_importe_unitario = Gral::getImporteDesdePriceFormatToDB($txt_importe_unitario);

            $txt_importe_total += $txt_importe_unitario;
            ?>
            <tr class="tr-item" key = "<?php echo $key ?>">

                <td align="left">
                    <div class="gral_fp_forma_pago">
                        <?php Gral::_echo($gral_fp_forma_pago->getDescripcion()) ?>
                    </div>
                    <div class="descripcion">
                        <?php Gral::_echo($txt_descripcion) ?>
                    </div>
                </td>

                <td align="right">
                    <div class="importe_unitario">
                        <?php Gral::_echoImp($txt_importe_unitario) ?>
                    </div>
                </td>

            </tr>
        <?php } ?>

        <?php
        foreach ($txt_tributo_importes as $i => $txt_tributo_importe) {
            if ($txt_tributo_importe != 0) {
                $pde_tributo = PdeTributo::getOxId($i);
                $txt_descripcion = $pde_tributo->getDescripcion();
                $txt_importe_unitario = $txt_tributo_importe;
                $txt_importe_unitario = Gral::getImporteDesdePriceFormatToDB($txt_importe_unitario);

                $txt_importe_total += $txt_importe_unitario;
                ?>
                <tr class="tr-item" key = "<?php echo $key ?>">
                    <td align="left">
                        <div class="gral_fp_forma_pago">
                        </div>
                        <div class="descripcion">
                            <?php Gral::_echo($txt_descripcion) ?>
                        </div>
                    </td>
                    <td align="right">
                        <div class="importe_unitario">
                            <?php Gral::_echoImp($txt_importe_unitario) ?>
                        </div>
                    </td>
                </tr>
                <?php
            }
        }
        ?>

    </tbody>
    <tfoot>
        <tr>
            <th align='left' class='adm_tbl_encabezado_gris'>Total Pago</th>
            <th align='right' class='adm_tbl_encabezado_gris'>
                <div id="div_p1_forma_pago_total_pago">
                    <?php Gral::_echoImp($txt_importe_total) ?>
                </div>
            </th>
        </tr>
    </tfoot>
</table>