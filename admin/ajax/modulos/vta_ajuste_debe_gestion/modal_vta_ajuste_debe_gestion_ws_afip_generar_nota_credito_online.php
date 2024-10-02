<?php
include "_autoload.php";

$vta_ajuste_debe_id = Gral::getVars(Gral::VARS_GET, 'vta_ajuste_debe_id', 0);

$vta_ajuste_debe = VtaAjusteDebe::getOxId($vta_ajuste_debe_id);

$vta_ajuste_debe_vta_orden_ventas = $vta_ajuste_debe->getVtaAjusteDebeVtaOrdenVentas(null, null, true);
$vta_ajuste_debe_items = $vta_ajuste_debe->getVtaAjusteDebeItems(null, null, true);

$vta_tipo_origen_ajuste_debe = $vta_ajuste_debe->getVtaTipoOrigenAjusteDebe();

$cli_cliente = $vta_ajuste_debe->getCliCliente();
$gral_empresa = $vta_ajuste_debe->getGralEmpresa();
$vta_punto_venta = $vta_ajuste_debe->getVtaPuntoVenta();

$importe_total_neto = $vta_ajuste_debe->getVtaAjusteDebeSubtotal();
$importe_iva = $vta_ajuste_debe->getVtaAjusteDebeIva();
$importe_total = $importe_total_neto + $importe_iva;
$vta_ajuste_debe_vta_tributos = $vta_ajuste_debe->getVtaAjusteDebeVtaTributos(null, null, true);

// controla que no se seleccionen OV de distintos presupuestos
$control_presupuesto = 1;

$pan_panols_cmbfx_credencial = PanPanol::getPanPanolsCmbFxCredencial();

if ($vta_tipo_origen_ajuste_debe->getCodigo() == VtaTipoOrigenAjusteDebe::ORIGEN_ORDEN_VENTA) {
    if (count($vta_ajuste_debe_vta_orden_ventas) > 0) {
        ?>
        <form id='form_generar_nota_credito' name='form_generar_nota_credito' method='POST' action='' >

            <table border='0' align='center' class='listado' id='listado_vta_ajuste_debe_generar_nota_credito' multiseleccion = "<?php echo $control_presupuesto ?>">
                <tr>
                    <td align='center' class='adm_tbl_encabezado'>
                        <?php if ($control_presupuesto) { ?>
                            <input type="checkbox" name="chk_vta_ajuste_debe_vta_orden_venta_select_all" id="chk_vta_ajuste_debe_vta_orden_venta_select_all" >
                        <?php } ?>
                    </td>

                    <td width='70' align='center' class='adm_tbl_encabezado'>
                        <?php Lang::_lang('Presupuesto') ?>
                    </td>

                    <td width='' align='center' class='adm_tbl_encabezado'>
                        <?php Lang::_lang('Insumo') ?>
                    </td>

                    <td width='80' align='center' class='adm_tbl_encabezado'>
                        <?php Lang::_lang('Estado') ?>
                    </td>

                    <td width='100' align='center' class='adm_tbl_encabezado'>
                        <?php Lang::_lang('Estado Remision') ?>
                    </td>

                    <td width='100' align='center' class='adm_tbl_encabezado'>
                        <?php Lang::_lang('Estado Facturacion') ?>
                    </td>

                    <td width='50' align='center' class='adm_tbl_encabezado'>
                        <?php Lang::_lang('Cant Fact') ?>
                    </td>

                    <td width='90' align='center' class='adm_tbl_encabezado'>
                        <?php Lang::_lang('Imp Unitario') ?>
                        </a>
                    </td>

                    <td width='90' align='center' class='adm_tbl_encabezado'>
                        <?php Lang::_lang('Imp Total') ?>
                    </td>

                    <td width='70' align='center' class='adm_tbl_encabezado'>
                        <?php Lang::_lang('IVA') ?>
                    </td>

                    <!--td width='70' align='center' class='adm_tbl_encabezado'>
                    <?php //Lang::_lang('AjusteDebe') ?>
                    </td-->
                </tr>

                <?php
                $inicio = true;
                $vta_presupuesto_id_agrupacion = 0;
                $par = 'par';

                $existe_orden_venta_disponible_para_nc = false;

                foreach ($vta_ajuste_debe_vta_orden_ventas as $vta_ajuste_debe_vta_orden_venta) {
                    $vta_orden_venta = $vta_ajuste_debe_vta_orden_venta->getVtaOrdenVenta();
                    $vta_presupuesto = $vta_orden_venta->getVtaPresupuesto();

                    if ($inicio) {
                        $inicio = false;
                        $vta_presupuesto_id_agrupacion = $vta_presupuesto->getId();
                    }

                    $hay_cambio = ($vta_presupuesto_id_agrupacion != $vta_presupuesto->getId()) ? true : false;
                    if ($hay_cambio) {
                        $par = ($par != 'par') ? 'par' : 'impar';
                    }
                    $vta_presupuesto_id_agrupacion = $vta_presupuesto->getId();

                    if ($vta_ajuste_debe_vta_orden_venta->getCantidadDisponibleNotaCredito() > 0) {
                        $existe_orden_venta_disponible_para_nc = true;
                        ?>

                        <tr id="tr_vta_ajuste_debe_vta_orden_venta_uno_<?php Gral::_echo($vta_ajuste_debe_vta_orden_venta->getId()) ?>" class="uno <?php echo $par ?>" vta_ajuste_debe_vta_orden_venta_id="<?php Gral::_echo($vta_ajuste_debe_vta_orden_venta->getId()) ?>">
                            <?php include "bloque_vta_nota_credito_listado_uno.php" ?>
                        </tr>

                    <?php } ?>
                <?php } ?>
            </table>

            <div class="par">
                <div class="label"><?php Lang::_lang('Observaciones') ?>: </div>
                <div class="dato">
                    <textarea name='txa_observacion' rows='3' cols='70' id='txa_observacion' class='textbox'></textarea>
                    <div class="label-error" id="txa_observacion_error"></div>
                </div>
            </div>

            <?php if ($existe_orden_venta_disponible_para_nc) { ?>
                <div class="afectar-stock">
                    <input type="checkbox" id="chk_afectar_stock" name="chk_afectar_stock" value="1" checked="checked" />
                    <label for="chk_afectar_stock">
                        <?php Lang::_lang('Reingresar el STOCK de los insumos que conforman la NC afectando a') ?>
                        <br />
                        <?php
                        Html::html_dib_select(1, 'cmb_pan_panol_id', Gral::getCmbFiltro($pan_panols_cmbfx_credencial, '...'), $cmb_pan_panol_id, 'textbox ' . $error_input_css);
                        ?>
                        <div class="label-error" id="cmb_pan_panol_id_error"></div>
                    </label>
                </div>
            <?php } ?>

            <div class="label-error" id="error_general"></div>

            <div class="botonera">
                <button class="boton" id='btn_generar_nota_credito' name='btn_generar_nota_credito' type='button' vta_ajuste_debe_id="<?php echo $vta_ajuste_debe_id ?>"><?php Lang::_lang('Generar Nota de Credito') ?></button>
            </div>

        </form>
    <?php } else { ?>
        <div class="mensaje-sin-resultado">
            <div class="mensaje"><?php Lang::_lang('No se encontraron Ordenes de Venta') ?></div>
        </div>
    <?php } ?>
<?php } ?>

<?php
if ($vta_tipo_origen_ajuste_debe->getCodigo() == VtaTipoOrigenAjusteDebe::ORIGEN_ITEM) {
    if (count($vta_ajuste_debe_items) > 0) {
        ?>
        <div class="datos">
            <form id='form_generar_nota_credito_item' name='form_generar_nota_credito_item' method='POST' action='' >
                <div class="col col1">    
                    <div class="par">
                        <div class="label"><?php Lang::_lang('Cliente') ?></div>
                        <div class="dato"><?php Gral::_echo($cli_cliente->getRazonSocial()) ?></div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('CUIT') ?></div>
                        <div class="dato"><?php Gral::_echo($cli_cliente->getCuit()) ?></div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Cond IVA') ?></div>
                        <div class="dato"><?php Gral::_echo($cli_cliente->getGralCondicionIva()->getDescripcion()) ?></div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Tipo') ?></div>
                        <div class="dato"><?php Gral::_echo(VtaAjusteDebe::getDeterminacionTipoAjusteDebe($cli_cliente_id)->getDescripcion()) ?></div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Localidad') ?></div>
                        <div class="dato"><?php Gral::_echo($cli_cliente->getGeoLocalidad()->getDescripcionFull()) ?></div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Gral::_echo("AjusteDebedora") ?>: </div>
                        <div class="dato"><?php Gral::_echo($gral_empresa->getDescripcion()) ?></div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Gral::_echo("Pto Vta") ?>: </div>
                        <div class="dato"><?php Gral::_echo($vta_punto_venta->getDescripcion()) ?></div>
                    </div>

                    <div class="par">
                        <div class="label"><?php Lang::_lang('Observaciones') ?>: </div>
                        <div class="dato">
                            <textarea name='txa_observacion' rows='3' cols='40' id='txa_observacion' class='textbox'></textarea>
                            <div class="label-error" id="txa_observacion_error"></div>
                        </div>
                    </div>
                </div>

                <div class="col col2">
                    <table border='0' align='center' class='detalle_vta_comprobante_total' id='detalle_vta_ajuste_debe_total'>
                        <tr class="subtotal">
                            <td width='70' align='left'>
                                <?php Lang::_lang('Subtotal') ?>:
                            </td>
                            <td width='150' align='left'>&nbsp;</td>
                            <td width='140' align='right'>
                                <?php Gral::_echoImp($importe_total_neto) ?>                
                            </td>
                        </tr>

                        <tr class="iva">
                            <td>
                                <?php Lang::_lang('IVA') ?>:
                            </td>
                            <td>&nbsp;</td>
                            <td align='right'><?php Gral::_echoImp($importe_iva) ?>  </td>
                        </tr>

                        <?php if (count($vta_ajuste_debe_vta_tributos) > 0) { ?>
                            <tr class="otros-tributos">
                                <td>
                                    <?php Lang::_lang('Tributos') ?>:
                                </td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <?php foreach ($vta_ajuste_debe_vta_tributos as $vta_ajuste_debe_vta_tributo) { ?>
                                <tr class="otros-tributos">
                                    <td>&nbsp;</td>
                                    <td>
                                        <?php Lang::_lang($vta_ajuste_debe_vta_tributo->getVtaTributo()->getDescripcion()) ?>
                                    </td>
                                    <td align='right'>
                                        <?php Gral::_echoImp($vta_ajuste_debe_vta_tributo->getImporteTributo()) ?>              
                                    </td>
                                </tr>
                                <?php $importe_total += $vta_ajuste_debe_vta_tributo->getImporteTributo(); ?>
                            <?php } ?>
                        <?php } ?>

                        <tr class="total">
                            <td>
                                <?php Lang::_lang('Total:') ?>
                            </td>
                            <td>&nbsp;</td>
                            <td align='right'>
                                <?php Gral::_echoImp($importe_total) ?>                
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="label-error" id="error_general"></div>

                <div class="botonera">
                    <button class="boton" id='btn_generar_nota_credito_item' name='btn_generar_nota_credito_item' type='button' vta_ajuste_debe_id="<?php echo $vta_ajuste_debe_id ?>"><?php Lang::_lang('Generar Nota de Credito') ?></button>
                </div>

            </form>
        </div>
    <?php } else { ?>
        <div class="mensaje-sin-resultado">
            <div class="mensaje"><?php Lang::_lang('No se encontraron Ordenes de Venta') ?></div>
        </div>
    <?php } ?>
<?php } ?>

<script>
    setInit();
    setInitVtaAjusteDebeGestion();
</script>