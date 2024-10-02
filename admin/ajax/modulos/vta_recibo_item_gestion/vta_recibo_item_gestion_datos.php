
<?php //include Gral::getPathAbs().'admin/parciales/buscadores/activos/vta_recibo_item.php';    ?>

<?php
if (count($vta_recibo_items) > 0) {
    ?>

    <table id='listado_adm_vta_recibo_item_gestion' class='listado' border='0' align='center'>
        <tr>

            <td width='60' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('#'); ?>
            </td>

            <td width='340' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Info'); ?>
            </td>
            
            <td width='80' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Generado'); ?>
            </td>

            <td width='120' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Forma Pago'); ?>
            </td>

            <td width='120' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Imp Unitario'); ?>
            </td>
            
            <td width='120' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Codigo'); ?>
            </td>

            <td width='100' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Conciliar'); ?>
            </td>

            <td width='85' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Imp Conciliado'); ?>
            </td>

            <td width='120' align='center' class='adm_tbl_encabezado'>
                <?php Lang::_lang('Diferencia'); ?>
            </td>

            <td width='90' align='center' class='adm_tbl_encabezado'>
                %
            </td>
        </tr>

        <?php
        foreach ($vta_recibo_items as $vta_recibo_item) {
            $estado = ($vta_recibo_item->getEstado()) ? 'habilitado' : 'deshabilitado';
            $vta_recibo_item_conciliado = $vta_recibo_item->getVtaReciboItemConciliadoActivo();
            ?>
            <tr id="tr_vta_recibo_item_gestion_uno_<?php Gral::_echo($vta_recibo_item->getId()) ?>" class="uno" identificador="<?php Gral::_echo($vta_recibo_item->getId()) ?>" vta_recibo_item_conciliado_id="<?php Gral::_echo(($vta_recibo_item_conciliado) ? $vta_recibo_item_conciliado->getId() : 0) ?>">
                <?php include "vta_recibo_item_gestion_uno.php"; ?>
            </tr>

            <?php
            // auto hash de mas info de acuerdo al id recibido por url
            $id = Gral::getVars(2, 'id');
            $mi_display = "style='display:none;'";
            if (trim($id) == $vta_recibo_item->getId()) {
                $mi_display = '';
                $mi_hash = "location.hash = 'mi_" . $id . "';";
            }
            ?>
            <tr id='tr_mi_<?php Gral::_echo($vta_recibo_item->getId()) ?>' <?php Gral::_echo($mi_display) ?>>
                <td colspan='11' align='center' class='adm_tbl_lineas'>
                    <div class="masinfo">
                        <?php
                        if (trim($id) == $vta_recibo_item->getId()) {
                            include "vta_recibo_item_adm_masinfo.php";
                        }
                        ?>
                    </div>
                </td>
                <td align='center'></td>
            </tr>
            <?php
        }
        ?>
        <tr>
            <td align='center' class="adm_tbl_pie" >&nbsp;</td>
            <td align='center' class="adm_tbl_pie" >&nbsp;</td>
            <td align='center' class="adm_tbl_pie" >&nbsp;</td>
            <td align='center' class="adm_tbl_pie" >&nbsp;</td>
            <td align='center' class="adm_tbl_pie" >&nbsp;</td>
            <td align='center' class="adm_tbl_pie" >&nbsp;</td>
            <td align='center' class="adm_tbl_pie" >&nbsp;</td>
            <td align='center' class="adm_tbl_pie" >&nbsp;</td>
            <td align='center' class="adm_tbl_pie" >&nbsp;</td>
            <td align='center' class="adm_tbl_pie" >&nbsp;</td>
        </tr>
        <tr>
            <td colspan='11' align='center'><?php include Gral::getPathAbs() . 'admin/parciales/paginador_adm.php'; ?></td>
        </tr>
    </table>
    <?php
} else {
    ?>
    <div class="mensaje-sin-resultado">
        <div class="mensaje"><?php Lang::_lang('No se encontraron datos para los criterios elegidos') ?></div>
        <div class="paginador-oculto"><?php include Gral::getPathAbs() . 'admin/parciales/paginador_adm.php' ?></div>
    </div>

    <?php
}
?>