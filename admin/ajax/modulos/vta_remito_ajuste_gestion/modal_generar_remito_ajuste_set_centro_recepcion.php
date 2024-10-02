<?php
include "_autoload.php";

$vta_orden_venta_ids = Gral::getVars(Gral::VARS_POST, "chk_vta_orden_venta", null);
$vta_orden_venta_cantidads = Gral::getVars(Gral::VARS_POST, "txt_vta_orden_venta_cantidad", null);

$cli_cliente_id = Gral::getVars(Gral::VARS_POST, 'cli_cliente_id', 0);
$vta_presupuesto_id = Gral::getVars(Gral::VARS_POST, 'vta_presupuesto_id', 0);

$cli_cliente = CliCliente::getOxId($cli_cliente_id);
$vta_presupuesto = VtaPresupuesto::getOxId($vta_presupuesto_id);

$array_cli_centro_recepcions_cmb = array();
if ($cli_cliente) {
    $array_cli_centro_recepcions_cmb = $cli_cliente->getCliCentroRecepcionsCmb();
} else {
    $array_cli_centro_recepcions_cmb[0]['cod'] = '';
    $array_cli_centro_recepcions_cmb[0]['descripcion'] = '';
}

$presupuesto_mueve_stock = true;
if($vta_presupuesto){
    $presupuesto_mueve_stock = $vta_presupuesto->getVtaPresupuestoMueveStock();
    
    // se presetea el centro de recepcion desde el determinado en el presupuesto
    $cli_centro_recepcion_id = $vta_presupuesto->getCliCentroRecepcionId();
    
    $vta_presupuesto_tipo_despacho = $vta_presupuesto->getVtaPresupuestoTipoDespacho();
    $vta_remito_ajuste_tipo_despacho = VtaRemitoAjusteTipoDespacho::getOxCodigo($vta_presupuesto_tipo_despacho->getCodigo());
    $vta_remito_ajuste_tipo_despacho_id = $vta_remito_ajuste_tipo_despacho->getId();
    
    $gral_sucursal_retiro = $vta_presupuesto->getGralSucursalRetiro();    
}

$pan_panols_cmbfx_credencial = PanPanol::getPanPanolsCmbFxCredencial();
?>
<form id='form_generar_remito_ajuste_centro_recepcion' name='form_generar_remito_ajuste_centro_recepcion' method='POST' action=''>
    <div class="datos generar-remito-ajuste-set-centro-recepcion">
        <div class="label-error" id="error_general"></div>

        <div class="par">
            <div class="label"><?php Gral::_echo("Tipo Despacho") ?>: </div>
            <div class="dato gen-refresh-action" gen-refresh-file="ajax/modulos/vta_remito_ajuste_gestion/refresh_bloque_vta_remito_ajuste_gestion_datos_despacho.php?cli_cliente_id=<?php echo $cli_cliente->getId() ?>" gen-refresh-content="#bloque_vta_remito_ajuste_gestion_datos_despacho" gen-refresh-callback="setInit()">
                <?php
                Html::html_dib_select(1, 'cmb_vta_remito_ajuste_tipo_despacho_id', Gral::getCmbFiltro(VtaRemitoTipoDespacho::getVtaRemitoTipoDespachosCmb(true), '...'), $vta_remito_ajuste_tipo_despacho_id, 'textbox ' . $error_input_css);
                ?>
                <div class="label-error" id="cmb_vta_remito_ajuste_tipo_despacho_id_error"></div>
            </div>
        </div>

        <div id="bloque_vta_remito_ajuste_gestion_datos_despacho">
            <?php include 'bloque_vta_remito_ajuste_gestion_datos_despacho.php'; ?>  
        </div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Nota Interna') ?></div>
            <div class="dato">
                <textarea name='txa_nota_interna' rows='1' cols='80' id='txa_nota_interna' class='textbox'></textarea>
                <div class="label-error" id="txa_nota_interna_error"></div>
                <div class="comentario">Solo lo visualizarán los usuarios de la empresa a este comentario.</div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Nota Publica') ?></div>
            <div class="dato">
                <textarea name='txa_nota_publica' rows='1' cols='80' id='txa_nota_publica' class='textbox'></textarea>
                <div class="label-error" id="txa_nota_publica_error"></div>
                <div class="comentario">Este comentario se imprime en el comprobante. Agregar aquí comentarios para el cliente.</div>
            </div>
        </div>

        <?php if(VtaRemito::REMITIR_SIN_AUTORIZAR){ ?>
            <div class="par">
                <div class="label"><?php Lang::_lang('Mover Stock') ?></div>
                <div class="dato">
                    <?php
                        Html::html_dib_select(1, 'cmb_registrar_movimiento_stock', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(true), '...'), $cmb_registrar_movimiento_stock, 'textbox ' . $error_input_css);
                    ?>
                    <div class="label-error" id="cmb_registrar_movimiento_stock_error"></div>
                    <div class="comentario">
                        NO: Inicializa el remito sin mover el stock. <br /> SI:  Inicializa el remito ya moviendo el stock.
                    </div>
                </div>
            </div>  

            <div class="par">
                <div class="label"><?php Lang::_lang('Deposito') ?></div>
                <div class="dato">
                    <?php
                    if (count($pan_panols_cmbfx_credencial) > 1) {
                        Html::html_dib_select(1, 'cmb_pan_panol_id', Gral::getCmbFiltro($pan_panols_cmbfx_credencial, '...'), $cmb_pan_panol_id, 'textbox ' . $error_input_css);
                    } else { 
                        Html::html_dib_select(1, 'cmb_pan_panol_id', $pan_panols_cmbfx_credencial, $cmb_pan_panol_id, 'textbox ' . $error_input_css);
                    }
                    ?>
                    <label class="comentario">
                        Deposito desde donde se descontara el STOCK
                    </label>
                    <div class="label-error" id="cmb_pan_panol_id_error"></div>
                </div>
            </div>        

            <?php if(VtaRemito::REMITIR_SIMPLIFICADO){ ?>
                <div class="par">
                    <div class="label"><?php Lang::_lang('Finalizar Remito') ?></div>
                    <div class="dato">
                        <?php
                            Html::html_dib_select(1, 'cmb_finalizar_remito', Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(true), '...'), $cmb_finalizar_remito, 'textbox ' . $error_input_css);
                        ?>
                        <label class="comentario">
                            Finalizar Remision Registrando Entrega al Cliente (Procedimiento Simplificado)
                        </label>
                        <div class="label-error" id="cmb_finalizar_remito_error"></div>
                    </div>
                </div>  
            <?php } ?>  

            <?php if ($presupuesto_mueve_stock) { ?>
                <div class="stock-movimiento-alerta">
                    Se realizara el movimiento de stock de los siguientes productos:

                    <ul>
                        <?php
                        foreach ($vta_orden_venta_ids as $vta_orden_venta_id) {
                            $vta_orden_venta = VtaOrdenVenta::getOxId($vta_orden_venta_id);
                            $ins_insumo = $vta_orden_venta->getInsInsumo();
                            $cantidad = $vta_orden_venta_cantidads[$vta_orden_venta_id];
                            if ($ins_insumo->getControlStock()) {
                                ?>
                                <li>
                                    <label class="cantidad"><?php Gral::_echo($cantidad) ?></label> 
                                    <label class="unidad-medida"><?php Gral::_echo($ins_insumo->getInsUnidadMedida()->getDescripcion()) ?>/s</label>
                                    de 
                                    <label class="insumo"><?php Gral::_echo($ins_insumo->getDescripcion()) ?></label>

                                    <label class="label-error" id="div_bloque_stock_<?php Gral::_echo($vta_orden_venta->getId()) ?>_error"></label>
                                </li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                </div>
            <?php } ?>  
        <?php } ?> 
        
        <div class="par">
            <div class="label"><?php Gral::_echo("Tipo Remito Ajuste") ?>: </div>
            <div class="dato">
                <?php
                Html::html_dib_select(1, 'cmb_vta_tipo_remito_ajuste_id', Gral::getCmbFiltro(VtaTipoRemitoAjuste::getVtaTipoRemitoAjustesCmb(true), '...'), $cmb_vta_tipo_remito_ajuste_id, 'textbox ' . $error_input_css);
                ?>
                <div class="label-error" id="cmb_vta_tipo_remito_ajuste_id_error"></div>
            </div>
        </div>
        
        <div class="par">
            <div class="label"><?php Gral::_echo("Facturadora") ?></div>
            <div class="dato">
                <?php
                Html::html_dib_select(1, 'cmb_gral_empresa_id', Gral::getCmbFiltro(GralEmpresa::getGralEmpresasCmb(), '...'), $gral_empresa_id, 'textbox ' . $error_input_css);
                ?>
                <div class="label-error" id="cmb_gral_empresa_id_error"></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Gral::_echo("Pto Vta") ?></div>
            <div class="dato">
                <?php
                if ($vta_punto_venta) {
                    Html::html_dib_select(1, 'cmb_vta_punto_venta_id', Gral::getCmbFiltro($gral_empresa->getVtaPuntoVentasCmb(), '...'), $vta_punto_venta_id, 'textbox ' . $error_input_css);
                } else {
                    Html::html_dib_select(1, 'cmb_vta_punto_venta_id', Gral::getCmbFiltro(array(), '...'), $vta_punto_venta_id, 'textbox ' . $error_input_css);
                }
                ?>
                <div class="label-error" id="cmb_vta_punto_venta_id_error"></div>
            </div>
        </div>

        <div class="botonera">
            <button class="boton" id='btn_generar_remito_ajuste_centro_recepcion' name='btn_generar_remito_ajuste_centro_recepcion' type='button' class='btn_generar_remito_ajuste'><?php Lang::_lang('Generar Remito Ajuste') ?></button>
        </div>
    </div>
</form>