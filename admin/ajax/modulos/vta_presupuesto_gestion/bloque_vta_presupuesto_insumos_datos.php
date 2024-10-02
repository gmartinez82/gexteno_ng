<?php if ($vta_presupuesto_ins_insumos) { ?>
    <div class="bloque-tablas-insumos-items insumos">

        <table border='0' align='center' class='listado' id='listado_adm_vta_presupuesto_gestion_edicion'>

        <tr>

            <td width='30' align='center' class='adm_tbl_encabezado'>
                #
            </td>

            <td width='30' align='center' class='adm_tbl_encabezado'>
                <input type="checkbox" name="chk_vta_presupuesto_ins_insumo_all" id="chk_vta_presupuesto_ins_insumo_all" class="chk_vta_presupuesto_ins_insumo_all" checked="checked" />
            </td>

            <td width='60' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Cantidad') ?>
            </td>

            <td width='100' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Cod Int') ?>
            </td>

            <td width='430' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Producto') ?>
            </td>

            <td width='80' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Descuento') ?>
            </td>

            <td width='115' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Unitario') ?>
            </td>

            <td width='90' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Subtotal') ?>
            </td>

            <td width='90' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Total') ?>
            </td>
            
            <td width='50' align='center' class='adm_tbl_encabezado'>
                <?php Html::html_dib_select(1, 'cmb_filtro_pan_panol_id', Gral::getCmbFiltro(PanPanol::getPanPanolsCmbFxCredencial(), '...'), $cmb_filtro_pan_panol_id, 'textbox') ?>
            </td>

            <td width="30" align='center' class='adm_tbl_encabezado'>&nbsp;</td>
            
            <td width="100" align='center' class='adm_tbl_encabezado'>&nbsp;</td>
        </tr>

        <?php
        foreach ($vta_presupuesto_ins_insumos as $vta_presupuesto_ins_insumo) {
            ++$cont;
            ?>
            <tr id="tr_vta_presupuesto_ins_insumo_gestion_uno_<?php Gral::_echo($vta_presupuesto_ins_insumo->getId()) ?>" class="uno" identificador="<?php Gral::_echo($vta_presupuesto_ins_insumo->getId()) ?>" cont="<?php echo $cont ?>">
                <?php include "vta_presupuesto_gestion_edicion_uno.php" ?>
            </tr>

        <?php } ?>

    </table>
        
    </div>

<?php } ?>