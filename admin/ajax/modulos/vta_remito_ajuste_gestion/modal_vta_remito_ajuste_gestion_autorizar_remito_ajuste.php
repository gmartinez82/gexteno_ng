<?php
include "_autoload.php";

$vta_remito_ajuste_id = Gral::getVars(Gral::VARS_GET, 'vta_remito_ajuste_id', null);
$vta_remito_ajuste = VtaRemitoAjuste::getOxId($vta_remito_ajuste_id);

$vta_remito_ajuste_estado = $vta_remito_ajuste->getVtaRemitoAjusteEstadoActual();
$vta_remito_ajuste_tipo_estado = $vta_remito_ajuste->getVtaRemitoAjusteTipoEstadoActual();
$vta_presupuesto = $vta_remito_ajuste->getVtaPresupuesto();
$vta_remito_ajuste_vta_orden_ventas = $vta_remito_ajuste->getVtaRemitoAjusteVtaOrdenVentas();

$remito_mueve_stock = $vta_remito_ajuste->getVtaRemitoAjusteMueveStock();

$pan_panols_cmbfx_credencial = PanPanol::getPanPanolsCmbFxCredencial();
?>

<div class="datos autorizar-remito-ajuste" vta_remito_ajuste_id="<?php Gral::_echo($vta_remito_ajuste->getId()) ?>">
    <form id='form_autorizar_remito_ajuste' name='form_autorizar_remito_ajuste' method='post' action='' >
        <div class="label-error" id="error_general_error"></div>

        <div class="par">
            <div class="label"><?php Lang::_lang('RemitoAjuste') ?></div>
            <div class="dato"><?php Gral::_echo($vta_remito_ajuste->getCodigo()) ?></div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Presupuesto') ?></div>
            <div class="dato"><?php Gral::_echo($vta_presupuesto->getCodigo()) ?></div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Cliente') ?></div>
            <div class="dato"><?php Gral::_echo($vta_remito_ajuste->getPersonaDescripcion()) ?></div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Cantidad') ?></div>
            <div class="dato"><?php Gral::_echo($vta_remito_ajuste->getCantidadItemsRemitoAjuste()) ?> Items</div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato"><?php Gral::_echo($vta_remito_ajuste_tipo_estado->getDescripcion()) ?></div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Fecha') ?></div>
            <div class="dato"><?php Gral::_echo(Gral::getFechaHoraToWEB($vta_remito_ajuste_estado->getCreado())) ?></div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Nota Interna') ?></div>
            <div class="dato">
                <textarea name='txa_nota_interna' rows='2' cols='60' id='txa_nota_interna' class='textbox'></textarea>
                <div class="label-error" id="txa_nota_interna_error"></div>
            </div>
        </div>

        <?php if (count($pan_panols_cmbfx_credencial) > 1) { ?>
            <div class="par">
                <div class="label"><?php Lang::_lang('PanPanol') ?></div>
                <div class="dato">
                    <?php
                    Html::html_dib_select(1, 'cmb_pan_panol_id', Gral::getCmbFiltro($pan_panols_cmbfx_credencial, '...'), $cmb_pan_panol_id, 'textbox ' . $error_input_css);
                    ?>
                    Deposito desde donde se descontara el STOCK
                    <div class="label-error" id="cmb_pan_panol_id_error"></div>
                </div>
            </div>        
        <?php } else { ?>
            <div class="par">
                <div class="label"><?php Lang::_lang('PanPanol') ?></div>
                <div class="dato">
                    <?php
                    Html::html_dib_select(1, 'cmb_pan_panol_id', $pan_panols_cmbfx_credencial, $cmb_pan_panol_id, 'textbox ' . $error_input_css);
                    ?>
                    Deposito desde donde se descontara el STOCK
                    <div class="label-error" id="cmb_pan_panol_id_error"></div>
                </div>
            </div>        
        <?php } ?>

        <?php if ($remito_mueve_stock) { ?>
            <div class="stock-movimiento-alerta">
                Se realizara el movimiento de stock de los siguientes insumos remitidos:

                <ul>
                    <?php
                    foreach ($vta_remito_ajuste_vta_orden_ventas as $vta_remito_ajuste_vta_orden_venta) {
                        $vta_orden_venta = $vta_remito_ajuste_vta_orden_venta->getVtaOrdenVenta();
                        $ins_insumo = $vta_orden_venta->getInsInsumo();
                        $cantidad = $vta_remito_ajuste_vta_orden_venta->getCantidad();
                        if ($ins_insumo->getControlStock()) {
                            ?>
                            <li>
                                <label class="cantidad"><?php Gral::_echo($cantidad) ?></label> 
                                <label class="unidad-medida"><?php Gral::_echo($ins_insumo->getInsUnidadMedida()->getDescripcion()) ?>/s</label>
                                de 
                                <label class="insumo"><?php Gral::_echo($ins_insumo->getDescripcion()) ?></label>
                            </li>
                        <?php } ?>
                    <?php } ?>
                </ul>
            </div>
        <?php } ?>

        <div class="botonera">
            <button class="boton" id='btn_autorizar' name='btn_autorizar' type='button' class='btn_autorizar'><?php Lang::_lang('Preparado') ?></button>
        </div>

    </form>
</div>
<script>
    setInit();
</script>