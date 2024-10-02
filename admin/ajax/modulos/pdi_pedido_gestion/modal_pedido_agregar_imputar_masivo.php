<?php
include '_autoload.php';

$array = array();
Gral::setSes('PDI_PEDIDO_IMPUTAR_MASIVO', $array);

if (Gral::esPost()) {
    
} else {
    $pdi_pedido_entrega_cmb_pan_panol_origen_id = PanPanol::getOxCodigo('GARUPA')->getId();
    $glp_galpon = GlpGalpon::getOxId($pdi_pedido_entrega_cmb_pan_panol_origen_id);
}

//Gral::setSes('PDI_PEDIDO_IMPUTAR_MASIVO', $array = array());
$array_imputar_masivo = Gral::getSes('PDI_PEDIDO_IMPUTAR_MASIVO');
?>
<form id='form_pedido' name='form_pedido' method='post' action='ajax/modulos/pdi_pedido_gestion/modal_pedido_agregar_imputar_masivo.php' >

    <div class="datos pdi-imputar-masivo" tabindex="1">

        <div class="top">

            <div class="par">
                <div class="label"><?php Lang::_lang('Panol Origen') ?></div>
                <div class="dato">
                    <?php Html::html_dib_select(1, 'pdi_pedido_imputar_masivo_cmb_pan_panol_origen_id', Gral::getCmbFiltro(PanPanol::getPanPanolsCmbFxCredencial(), '...'), $pdi_pedido_imputar_masivo_cmb_pan_panol_origen_id, 'textbox') ?>
                    <div class="error insumo-identificado-label-error pdi_pedido_imputar_masivo_cmb_pan_panol_origen_id_error"><?php Gral::_echo($pdi_pedido_imputar_masivo_cmb_pan_panol_origen_id_error) ?></div>
                </div>
            </div>


            <div class="par">
                <div class="label"><?php Lang::_lang('Coche') ?></div>
                <div class="dato">
                    <?php Html::html_dib_select(1, 'pdi_pedido_imputar_masivo_cmb_veh_coche_id', Gral::getCmbFiltro($glp_galpon->getVehCochesCmb(), '...'), $pdi_pedido_imputar_masivo_cmb_veh_coche_id, 'textbox') ?>
                    <input type="checkbox" id="chk_imputar_masivo_coches_ver_todos" name="chk_imputar_masivo_coches_ver_todos" value="1" title="Ver Todos los Coches" />

                    <div class="error insumo-identificado-label-error pdi_pedido_imputar_masivo_cmb_veh_coche_id_error"><?php Gral::_echo($pdi_pedido_imputar_masivo_cmb_veh_coche_id_error) ?></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Operario') ?></div>
                <div class="dato">
                    <?php Html::html_dib_select(1, 'pdi_pedido_imputar_masivo_cmb_ope_operario_id', Gral::getCmbFiltro(($glp_galpon) ? $glp_galpon->getOpeOperariosOrdenadosCmb(true) : OpeOperario::getOpeOperariosOrdenadosCmb(), '...'), $pdi_pedido_imputar_masivo_cmb_ope_operario_id, 'textbox') ?>
                    <input type="checkbox" id="chk_imputar_masivo_operarios_ver_todos" name="chk_imputar_masivo_operarios_ver_todos" value="1" title="Ver Todos los Operarios" />

                    <div class="error insumo-identificado-label-error pdi_pedido_imputar_masivo_cmb_ope_operario_id_error"><?php Gral::_echo($pdi_pedido_entrega_cmb_ope_operario_id_error) ?></div>
                </div>
            </div>            

        </div>

        <div class="detalle">
            <?php include "bloque_imputar_masivo_detalle.php" ?>
        </div>

        <div class="div_modal_modal_x"></div>
    </div>
</form>