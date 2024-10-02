<?php
include "_autoload.php";

$vta_nota_debito_id = Gral::getVars(Gral::VARS_GET, 'vta_nota_debito_id', 0);

$vta_nota_debito = VtaNotaDebito::getOxId($vta_nota_debito_id);

$cli_cliente = $vta_nota_debito->getCliCliente();
$gral_empresa = $vta_nota_debito->getGralEmpresa();
$vta_punto_venta = $vta_nota_debito->getVtaPuntoVenta();

$importe_total_neto = $vta_nota_debito->getVtaNotaDebitoSubtotal();
$importe_iva = $vta_nota_debito->getVtaNotaDebitoIva();
$importe_total = $importe_total_neto + $importe_iva;
$vta_nota_debito_vta_tributos = $vta_nota_debito->getVtaNotaDebitoVtaTributos(null, null, true);
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
                <div class="dato"><?php Gral::_echo(VtaNotaDebito::getDeterminacionTipoNotaDebito($cli_cliente_id)->getDescripcion()) ?></div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Localidad') ?></div>
                <div class="dato"><?php Gral::_echo($cli_cliente->getGeoLocalidad()->getDescripcionFull()) ?></div>
            </div>

            <div class="par">
                <div class="label"><?php Gral::_echo("Facturadora") ?>: </div>
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
            <table border='0' align='center' class='detalle_vta_comprobante_total' id='detalle_vta_nota_debito_total'>
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

                <?php if (count($vta_nota_debito_vta_tributos) > 0) { ?>
                    <tr class="otros-tributos">
                        <td>
                            <?php Lang::_lang('Tributos') ?>:
                        </td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <?php foreach ($vta_nota_debito_vta_tributos as $vta_nota_debito_vta_tributo) { ?>
                        <tr class="otros-tributos">
                            <td>&nbsp;</td>
                            <td>
                                <?php Lang::_lang($vta_nota_debito_vta_tributo->getVtaTributo()->getDescripcion()) ?>
                            </td>
                            <td align='right'>
                                <?php Gral::_echoImp($vta_nota_debito_vta_tributo->getImporteTributo()) ?>              
                            </td>
                        </tr>
                        <?php $importe_total += $vta_nota_debito_vta_tributo->getImporteTributo(); ?>
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
    </form>
</div>
<div class="botonera">
    <button vta_nota_debito_id="<?php echo $vta_nota_debito_id ?>" class="boton" id='btn_generar_nota_credito' name='btn_generar_nota_credito' type='button' class='btn_generar_nota_credito'><?php Lang::_lang('Generar Nota de Credito Online AFIP') ?></button>
</div>
<script>
    setInit();
    setInitVtaNotaDebitoGestion();
</script>