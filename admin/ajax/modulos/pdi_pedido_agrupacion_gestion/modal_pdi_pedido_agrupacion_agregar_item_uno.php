<?php
include_once "_autoload.php";


if ($ins_insumo) {
    // se consultan los pedidos PDI activos
}
?>
<td align="center">
    <div class="key">
        <?php echo $key ?>
    </div>
</td>

<td align="center">
    <div class="cantidad">
        <input step="1" min="1" max="" type="text" id="txt_cantidad_<?php echo $key ?>" name="txt_cantidad[<?php echo $key ?>]" value="<?php echo $txt_cantidad ?>" size="4" class="textbox txt_cantidad spinner spinner_cantidad" />
    </div>
    <div class="label-error" id="txt_cantidad_<?php echo $key ?>_error"></div>
</td>

<td align="left">
    <div class="ins-insumo">
        <?php echo Html::html_get_dbsuggest(1, 'dbsug_ins_insumo_' . $key, 'ajax/modulos/ins_insumo_gestion/ins_insumo_gestion_dbsuggest_custom.php?comprable=1', false, true, true, 'Ingrese ...', ($ins_insumo) ? $ins_insumo->getId() : null, ($ins_insumo) ? $ins_insumo->getDescripcion() : '', 40, 'dbsug_ins_insumo_id', ""); ?>
    </div>
    <div class="label-error" id="dbsug_ins_insumo_id_<?php echo $key ?>_error"></div>

    <?php if (count($pdi_pedidos_activos) > 0) { ?>
        <div class="pdi-pedido-activos">
            <?php foreach ($pdi_pedidos_activos as $pdi_pedido_activo) { ?>
                PDI: <label class="pdi-pedido-activo"><?php Gral::_echo($pdi_pedido_activo->getPdiPedidoDescripcionFull()) ?></label>
            <?php } ?>
        </div>
    <?php } ?>

     <?php if (count($pdi_pedido_agrupacion_items) > 0) { ?>
            <div class="pdi-pedido-agrupacion-item-activos">
                <?php foreach ($pdi_pedido_agrupacion_items as $pdi_pedido_agrupacion_item) { ?>
                    APDI: <label class="pdi-pedido-agrupacion-item-activo">x<?php Gral::_echo($pdi_pedido_agrupacion_item->getDescripcionFull()) ?> en preparacion</label>
                <?php } ?>
            </div>
    <?php } ?>

</td>

<td align="center">
    <div class="codigo-interno">
        <?php Gral::_echo(($ins_insumo) ? $ins_insumo->getCodigoInterno() : '') ?>
    </div>
</td>

<td align="center">
    <div class="marca">
        <?php Gral::_echo(($ins_insumo) ? $ins_insumo->getInsMarca()->getDescripcion() : '') ?>
    </div>
    <div class="codigo-marca">
        <?php //Gral::_echo(($ins_insumo) ? $ins_insumo->getCodigoInterno() : '') ?>
    </div>
</td>

<td align="center">
    <label class="boton quitar_item_oc" title="<?php Lang::_lang('Quitar Item') ?> #<?php echo $key ?>" key='<?php echo $key ?>'><img src="imgs/btn_cancelar.png" width="15"></label>
</td>