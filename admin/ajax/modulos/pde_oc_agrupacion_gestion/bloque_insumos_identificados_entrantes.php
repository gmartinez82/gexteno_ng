<table border="0" align="center">
    <tr>
        <th width="30" class="adm_tbl_encabezado">&nbsp;</th>
        <th width="150" class="adm_tbl_encabezado"><?php Lang::_lang('Cod Fabrica') ?></th>
        <th width="150" class="adm_tbl_encabezado"><?php Lang::_lang('Cod Int') ?></th>
        <th width="150" class="adm_tbl_encabezado"><?php Lang::_lang('Marca') ?></th>
        <th width="150" class="adm_tbl_encabezado"><?php Lang::_lang('Instancia') ?></th>
        <th width="100" class="adm_tbl_encabezado"><?php Lang::_lang('Km Instancia') ?></th>
        <th width="100" class="adm_tbl_encabezado"><?php Lang::_lang('Km Total') ?></th>
    </tr>
    <?php for ($i = 1; $i <= $cantidad; $i++) { ?>
        <?php
        if (!Gral::esPost()) {
            $cmb_ins_marca_id[$i] = $pde_oc_agrupacion->getInsMarcaId();
            $cmb_ins_insumo_instancia_id[$i] = $ins_insumo->getInsInsumoInstanciaInicial()->getId();
            $txt_km[$i] = 0;
            $txt_km_total[$i] = 0;
        }
        ?>
        <tr>
            <td align="center" class="adm_tbl_lineas"><?php Gral::_echo($i) ?></td>

            <td align="center" class="adm_tbl_lineas">
                <input type="text" id="txt_insumo_identificado_<?php $i ?>" name="txt_insumo_identificado[<?php echo $i ?>]" size="10" value="<?php Gral::_echo($txt_insumo_identificado[$i]) ?>" class="textbox">
                <div class="error"><?php Gral::_echo($txt_insumo_identificado_error[$i]) ?></div>
            </td>

            <td align="center" class="adm_tbl_lineas">
                <input type="text" id="txt_insumo_identificado_codigo_interno_<?php $i ?>" name="txt_insumo_identificado_codigo_interno[<?php echo $i ?>]" size="10" value="<?php Gral::_echo($txt_insumo_identificado_codigo_interno[$i]) ?>" class="textbox">
                <div class="error"><?php Gral::_echo($txt_insumo_identificado_codigo_interno_error[$i]) ?></div>
            </td>

            <td align="center" class="adm_tbl_lineas">
                <?php Html::html_dib_select(1, 'cmb_ins_marca_id', Gral::getCmbFiltro(InsMarca::getInsMarcasCmbXInsInsumo($insumo_id), '...'), $cmb_ins_marca_id[$i], 'textbox', '', '', 'cmb_ins_marca_id[' . $i . ']') ?>
                <div class="error"><?php Gral::_echo($cmb_ins_marca_id_error[$i]) ?></div>
            </td>

            <td align="center" class="adm_tbl_lineas">
                <?php Html::html_dib_select(1, 'cmb_ins_insumo_instancia_id', Gral::getCmbFiltro($ins_insumo->getInsInsumoInstanciasCmb(), '...'), $cmb_ins_insumo_instancia_id[$i], 'textbox', '', '', 'cmb_ins_insumo_instancia_id[' . $i . ']') ?>
                <div class="error"><?php Gral::_echo($cmb_ins_insumo_instancia_id_error[$i]) ?></div>
            </td>

            <td align="center" class="adm_tbl_lineas">
                <input type="text" id="txt_km_<?php $i ?>" name="txt_km[<?php echo $i ?>]" size="7" value="<?php Gral::_echo($txt_km[$i]) ?>" class="textbox spinner">
                <div class="error"><?php Gral::_echo($txt_km_error[$i]) ?></div>
            </td>

            <td align="center" class="adm_tbl_lineas">
                <input type="text" id="txt_km_total_<?php $i ?>" name="txt_km_total[<?php echo $i ?>]" size="7" value="<?php Gral::_echo($txt_km_total[$i]) ?>" class="textbox spinner">
                <div class="error"><?php Gral::_echo($txt_km_total_error[$i]) ?></div>
            </td>

        </tr>
    <?php } ?>
</table>
