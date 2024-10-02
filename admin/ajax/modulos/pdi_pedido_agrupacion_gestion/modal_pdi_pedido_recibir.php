<?php
include "_autoload.php";

$pdi_pedido_agrupacion = new PdiPedidoAgrupacion();

// -------------------------------------------------------------------------
// inicializacion masiva desde recepcion masiva
// -------------------------------------------------------------------------    
$pdi_pedido_agrupacion_id = Gral::getVars(Gral::VARS_GET, 'pdi_pedido_agrupacion_id', 0);
if ($pdi_pedido_agrupacion_id != 0)
{
    $pdi_pedido_agrupacion = PdiPedidoAgrupacion::getOxId($pdi_pedido_agrupacion_id);
    $pdi_pedidos = $pdi_pedido_agrupacion->getPdiPedidos();

    $prv_proveedor = true;
    
    foreach ($pdi_pedidos as $pdi_pedido)
    {
        $key++;
        $pdi_estado_actual = $pdi_pedido->getPdiEstadoActual();

        $arr_insumo_seleccionados[$key]['pdi_pedido_id'] = $pdi_pedido->getId();
        $arr_insumo_seleccionados[$key]['ins_insumo_id'] = $pdi_pedido->getInsInsumoId();
        $arr_insumo_seleccionados[$key]['cantidad'] = $pdi_estado_actual->getCantidad();
        $txt_cantidads[$key] = $pdi_estado_actual->getCantidad();

        $arr_pdi_pedidos[$key] = $pdi_pedido->getId();
    }
}
$pan_panol_origen = $pdi_pedido_agrupacion->getPanPanolOrigenObj();
$pan_panol_destino = $pdi_pedido_agrupacion->getPanPanolDestinoObj();

?>

<form id='form_div_modal' name='form_div_modal' method='post' >
    <div class="datos-masivo recibir-masivo" pdi_pedido_agrupacion_id="<?php echo ($pdi_pedido_agrupacion) ? $pdi_pedido_agrupacion->getId() : 0 ?>" >
        <div class="div_listado_pdi_pedido_agrupacion_items">
            <div class="div_listado_pdi_pedido_agrupacion_items" id="div_listado_pdi_pedido_agrupacion_items">
                <table class="listado_pdi_pedido_agrupacion_items" id="listado_pdi_pedido_agrupacion_items">
                    <thead>
                        <tr>
                            <th width='30' align='center'>#</th>
                            <th width='30' align='center'>
                                <div class="checkbox">
                                    <input type="checkbox" class="textbox chk_recibir_all" id="chk_recibir_all" name="chk_recibir_all" value="1" />
                                </div>
                            </th>
                            <th width='60' align='center'>Cant</th>
                            <th width='410' align='center'>Insumo</th>
                            <th width='100' align='center'>Cod Interno</th>
                            <th width='100' align='center'>Marca</th>
                            <th width='110' align='center'>Stock en <?php Gral::_echo($pan_panol_origen->getDescripcion()) ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($txt_cantidads as $key => $txt_cantidad_solicitado)
                        {
                            $pdi_pedido_id = $arr_insumo_seleccionados[$key]['pdi_pedido_id'];
                            $insumo_id = $arr_insumo_seleccionados[$key]['ins_insumo_id'];
                            $cantidad = $arr_insumo_seleccionados[$key]['cantidad'];
                            
                            $pdi_pedido = PdiPedido::getOxId($pdi_pedido_id);
                            $ins_insumo = InsInsumo::getOxId($insumo_id);

                            $pdi_tipo_estado = $pdi_pedido->getPdiTipoEstado();
                            $ins_unidad_medida = $ins_insumo->getInsUnidadMedida();
                            
                            $ins_stock_resumen_origen = $ins_insumo->getInsStockResumenEnPanol($pan_panol_origen);
                        ?>
                            <tr class="tr-item uno" id="tr_item_<?php echo $key ?>" key = "<?php echo $key ?>" pdi_pedido_id="<?php echo $pdi_pedido_id ?>">
                                <td align="center">
                                    <div class="key">
                                        <?php echo $key ?>
                                    </div>
                                </td>

                                <td align="center">
                                    <?php if ($txt_cantidad_solicitado > 0) { ?>
                                        <div class="checkbox">
                                            <?php if($pdi_tipo_estado->getCodigo() == PdiTipoEstado::TIPO_ESTADO_DESPACHADO){ ?>
                                            <input type="checkbox" class="textbox chk_recibir" id="chk_recibir_<?php echo $key ?>" name="chk_recibir[<?php echo $key ?>]" value="<?php echo $arr_pdi_pedidos[$key] ?>" />
                                            <?php } ?>
                                        </div>
                                    <?php } ?>
                                </td>

                                <td align="center">
                                    <div class="cantidad">
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
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th align='center'>&nbsp;</th>
                            <th align='center'>&nbsp;</th>
                            <th align='center'>&nbsp;</th>
                            <th align='center'>&nbsp;</th>
                            <th align='center'>&nbsp;</th>
                            <th align='center'>&nbsp;</th>
                            <th align='center'>&nbsp;</th>
                        </tr>
                    </tfoot>

                </table>
            </div>
        </div>
        <div class="par">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <textarea name='txa_observacion' rows='3' cols='35' id='txa_observacion' class='textbox '><?php Gral::_echoTxt($txa_observacion) ?></textarea>
                <div class="label-error" id="txa_observacion_error"></div>
            </div>
        </div>
        <div class="botonera">
            <div class="label-error" id="lbl_general_error"></div>
            <input id='btn_generar_recepcion_masivo' name='btn_generar_recepcion_masivo' class="boton" type='button'  value='<?php Lang::_lang('Generar Recepcion Masivo'); ?>' />
        </div>
    </div>
</form>
<script>
    setInitPdiPedidoAgrupacions();
    setInit();

    setInitDbSuggest();
    setInitDbSuggestBoton();
</script>