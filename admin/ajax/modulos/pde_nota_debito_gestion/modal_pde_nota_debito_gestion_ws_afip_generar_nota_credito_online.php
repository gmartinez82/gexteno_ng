<?php
include "_autoload.php";

$pde_nota_debito_id = Gral::getVars(Gral::VARS_GET, 'pde_nota_debito_id', 0);

$pde_nota_debito = PdeNotaDebito::getOxId($pde_nota_debito_id);

$prv_proveedor = $pde_nota_debito->getPrvProveedor();
$gral_empresa = $pde_nota_debito->getGralEmpresa();
$pde_centro_pedido = $pde_nota_debito->getPdeCentroPedido();

$importe_total_neto = $pde_nota_debito->getPdeNotaDebitoSubtotal();
$importe_iva = $pde_nota_debito->getPdeNotaDebitoIva();
$importe_total = $importe_total_neto + $importe_iva;
$pde_nota_debito_pde_tributos = $pde_nota_debito->getPdeNotaDebitoPdeTributos(null, null, true);
?>
<div class="div_modal">
    <div class="datos">
        <form id='form_generar_nota_credito_ws_fe_afip' name='form_generar_nota_credito_ws_fe_afip' method='POST' action='' >
            <div class="col col1">    
                <div class="par">
                    <div class="label"><?php Lang::_lang('Proveedor') ?></div>
                    <div class="dato"><?php Gral::_echo($prv_proveedor->getRazonSocial()) ?></div>
                </div>

                <div class="par">
                    <div class="label"><?php Lang::_lang('CUIT') ?></div>
                    <div class="dato"><?php Gral::_echo($prv_proveedor->getCuit()) ?></div>
                </div>

                <div class="par">
                    <div class="label"><?php Lang::_lang('Cond IVA') ?></div>
                    <div class="dato"><?php Gral::_echo($prv_proveedor->getGralCondicionIva()->getDescripcion()) ?></div>
                </div>

                <div class="par">
                    <div class="label"><?php Lang::_lang('Tipo') ?></div>
                    <div class="dato"><?php Gral::_echo(PdeNotaDebito::getDeterminacionTipoNotaDebito($prv_proveedor_id)->getDescripcion()) ?></div>
                </div>

                <div class="par">
                    <div class="label"><?php Lang::_lang('Localidad') ?></div>
                    <div class="dato"><?php Gral::_echo($prv_proveedor->getGeoLocalidad()->getDescripcionFull()) ?></div>
                </div>

                <div class="par">
                    <div class="label"><?php Gral::_echo("Facturadora") ?>: </div>
                    <div class="dato"><?php Gral::_echo($gral_empresa->getDescripcion()) ?></div>
                </div>

                <div class="par">
                    <div class="label"><?php Gral::_echo("Ctr Ped") ?>: </div>
                    <div class="dato"><?php Gral::_echo($pde_centro_pedido->getDescripcion()) ?></div>
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
                <table border='0' align='center' class='detalle_pde_comprobante_total' id='detalle_pde_nota_debito_total'>
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

                    <?php if (count($pde_nota_debito_pde_tributos) > 0) { ?>
                        <tr class="otros-tributos">
                            <td>
                                <?php Lang::_lang('Tributos') ?>:
                            </td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <?php foreach ($pde_nota_debito_pde_tributos as $pde_nota_debito_pde_tributo) { ?>
                            <tr class="otros-tributos">
                                <td>&nbsp;</td>
                                <td>
                                    <?php Lang::_lang($pde_nota_debito_pde_tributo->getPdeTributo()->getDescripcion()) ?>
                                </td>
                                <td align='right'>
                                    <?php Gral::_echoImp($pde_nota_debito_pde_tributo->getImporteTributo()) ?>              
                                </td>
                            </tr>
                            <?php $importe_total += $pde_nota_debito_pde_tributo->getImporteTributo(); ?>
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
        <button pde_nota_debito_id="<?php echo $pde_nota_debito_id ?>" class="boton" id='btn_generar_nota_credito' name='btn_generar_nota_credito' type='button' class='btn_generar_nota_credito'><?php Lang::_lang('Generar Nota de Credito Online AFIP') ?></button>
    </div>
</div>
<script>
    setInit();
    setInitPdeNotaDebitoGestion();
</script>