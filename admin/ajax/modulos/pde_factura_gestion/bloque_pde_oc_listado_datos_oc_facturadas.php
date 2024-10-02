<h3>OC Incluidas en Factura <?php Gral::_echo($pde_factura->getNumeroComprobanteCompleto()) ?></h3>

<table border='0' align='center' class='listado' id='listado_pde_factura_generar_factura' multiseleccion = "<?php echo $control_presupuesto ?>">
    <tr>
        <td align='center' class='adm_tbl_encabezado'>
            <?php if ($control_presupuesto) { ?>
                <input type="checkbox" name="chk_pde_oc_select_all" id="chk_pde_oc_select_all" >
            <?php } ?>
        </td>

        <td width='70' align='center' class='adm_tbl_encabezado'>
            <?php Lang::_lang('Codigo') ?>
        </td>

        <td width='' align='center' class='adm_tbl_encabezado'>
            <?php Lang::_lang('Insumo') ?>
        </td>

        <td width='120' align='center' class='adm_tbl_encabezado'>
            <?php Lang::_lang('Estado RCP') ?>
        </td>

        <td width='120' align='center' class='adm_tbl_encabezado'>
            <?php Lang::_lang('Estado FACT') ?>
        </td>

        <td width='85' align='center' class='adm_tbl_encabezado'>
            <?php Lang::_lang('Imp OC') ?>
        </td>

        <td width='60' align='center' class='adm_tbl_encabezado'>
            <?php Lang::_lang('Cant') ?>
        </td>

        <td width='85' align='center' class='adm_tbl_encabezado'>
            <?php Lang::_lang('Imp Unit') ?>
        </td>

        <td width='60' align='center' class='adm_tbl_encabezado'>
            % <?php Lang::_lang('Desc') ?>
        </td>

        <td width='85' align='center' class='adm_tbl_encabezado'>
            <?php Lang::_lang('Imp Uni') ?>
        </td>

        <td width='100' align='center' class='adm_tbl_encabezado'>
            <?php Lang::_lang('Imp Tot') ?>
        </td>
    </tr>

    <?php
    $inicio = true;
    $cont = 0;

    $arr_pde_ocs_propuesto = array();

    foreach ($pde_factura_pde_ocs as $pde_factura_pde_oc) {
        $cont++;
        $pde_oc = $pde_factura_pde_oc->getPdeOc();

        $arr_pde_ocs_propuesto[$pde_oc->getId()] = $pde_oc;
        ?>
        <tr id="tr_pde_factura_pde_oc_uno_<?php Gral::_echo($pde_factura_pde_oc->getId()) ?>" class="uno <?php echo $par ?> selected" pde_oc_id="<?php Gral::_echo($pde_oc->getId()) ?>" pde_factura_pde_oc_id="<?php Gral::_echo($pde_factura_pde_oc->getId()) ?>" cont="<?php Gral::_echo($cont) ?>" >
            <?php include "bloque_pde_oc_listado_uno_en_factura.php" ?>
        </tr>

    <?php } ?>

    <tr>
        <td align='center' class='adm_tbl_encabezado_gris'>&nbsp;</td>
        <td align='center' class='adm_tbl_encabezado_gris'>&nbsp;</td>
        <td align='center' class='adm_tbl_encabezado_gris'>&nbsp;</td>
        <td align='center' class='adm_tbl_encabezado_gris'>&nbsp;</td>
        <td align='center' class='adm_tbl_encabezado_gris'>&nbsp;</td>
        <td align='center' class='adm_tbl_encabezado_gris'>&nbsp;</td>
        <td align='center' class='adm_tbl_encabezado_gris'>&nbsp;</td>
        <td align='center' class='adm_tbl_encabezado_gris'>&nbsp;</td>
        <td align='center' class='adm_tbl_encabezado_gris'>&nbsp;</td>
        <td align='center' class='adm_tbl_encabezado_gris'>&nbsp;</td>
        <td align='right' class='adm_tbl_encabezado_gris'>
            <div id="div_p1_comprobante_subtotal_con_descuento">
                <?php Gral::_echoImp($importe_subtotal_factura) ?>
            </div>
        </td>
    </tr>
    <?php if ($pde_factura) { ?>
        <tr>
            <td align='center' class='' colspan="8">&nbsp;</td>
            <td align='right' class='adm_tbl_encabezado_gris' colspan="2">
                IVA &nbsp;
            </td>
            <td align='right' class='adm_tbl_encabezado_gris'>
                <div id="div_p1_comprobante_iva">
                    <?php Gral::_echoImp($pde_factura->getImporteIvaImporte()) ?>
                </div>
            </td>
        </tr>

        <?php foreach ($pde_factura->getArrPdeTributosAplicados() as $pde_tributo_id => $arr_tributo) { ?>
            <tr>
                <td align='center' class='' colspan="8">&nbsp;</td>
                <td align='right' class='adm_tbl_encabezado_gris' colspan="2">
                    <?php Gral::_echo($arr_tributo['pde_tributo_descripcion']) ?>&nbsp;
                </td>
                <td align='right' class='adm_tbl_encabezado_gris'>
                    <div id="div_p1_comprobante_tributos">
                        <?php Gral::_echoImp($arr_tributo['importe']) ?>
                    </div>
                </td>
            </tr>
        <?php } ?>
        <tr>
            <td align='center' class='' colspan="8">&nbsp;</td>
            <td align='right' class='adm_tbl_encabezado_gris' colspan="2">
                TOTAL&nbsp;
            </td>
            <td align='right' class='adm_tbl_encabezado_gris'>
                <div id="div_p1_comprobante_total">
                    <?php Gral::_echoImp($pde_factura->getPdeFacturaTotal()) ?>
                </div>
            </td>
        </tr>
    <?php } ?>

</table>

