<?php
include_once "_autoload.php";

?>
<td align="center">
    <div class="key">
        <?php echo $key ?>
    </div>
</td>

<td align="center">
    <?php if ($txt_cantidad_solicitado > 0) { ?>
        <div class="checkbox" >
            <?php if($pdi_tipo_estado->getCodigo() == PdiTipoEstado::TIPO_ESTADO_SOLICITADO){ ?>
            <input type="checkbox" class="textbox chk_aceptar" id="chk_aceptar_<?php echo $key ?>" name="chk_aceptar[<?php echo $key ?>]" value="<?php echo $arr_pdi_pedidos[$key] ?>" />
            <?php } ?>
        </div>
    <?php } ?>
</td>

<td align="center">
    <div class="cantidad" >
        <?php if ($txt_cantidad_solicitado > 0) { ?>
            <?php echo $txt_cantidad_solicitado ?> <?php Gral::_echo($ins_unidad_medida->getDescripcion()) ?>
            <input step="1" min="0" max="" type="text" id="txt_cantidad_solicitado_<?php echo $key ?>" name="txt_cantidad_solicitado[<?php echo $key ?>]" value="<?php echo $txt_cantidad_solicitado ?>" size="4" class="textbox txt_cantidad_solicitado spinner spinner_cantidad_recibir" />
        <?php } ?>
    </div>
    <div class="label-error" id="txt_cantidad_solicitado_<?php echo $key ?>_error"></div>
</td>

<td align="left">
    <div class="ins-insumo">
        <?php Gral::_echo($ins_insumo->getDescripcion()) ?>
    </div>

    <div class="tipo-estado">
        <img src='imgs/pdi_estado/<?php Gral::_echo($pdi_tipo_estado->getCodigo()) ?>.png' width='12' align='absmiddle' />
        <?php Gral::_echo($pdi_tipo_estado->getDescripcion()) ?>
    </div>    

    <div class="label-error" id="dbsug_ins_insumo_id_<?php echo $key ?>_error"></div>
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
        <?php Gral::_echo(($ins_insumo) ? $ins_insumo->getCodigoInterno() : '') ?>
    </div>
</td>

<td align="center">
    <div class="stock stock-origen">
        <?php Gral::_echo(($ins_stock_resumen_origen) ? $ins_stock_resumen_origen->getCantidad() : 'N/I') ?>
    </div>
</td>

<td align="center">
    <div class="stock stock-destino">
        <?php Gral::_echo(($ins_stock_resumen_destino) ? $ins_stock_resumen_destino->getCantidad() : 'N/I') ?>
    </div>
</td>
