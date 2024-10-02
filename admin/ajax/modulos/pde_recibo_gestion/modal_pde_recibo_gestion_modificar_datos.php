<?php
include "_autoload.php";

$pde_recibo_id = Gral::getVars(Gral::VARS_GET, 'pde_recibo_id', 0);
$pde_recibo = PdeRecibo::getOxId($pde_recibo_id);
$prv_proveedor = $pde_recibo->getPrvProveedor();
?>

<div class="datos modificar-datos" pde_recibo_id="<?php Gral::_echo($pde_recibo->getId()) ?>">
    <form id='form_modificar_datos' name='form_modificar_datos' method='post' action='' >
        <div class="label-error" id="error_general_error"></div>


        <div class="par">
            <div class="label"><?php Lang::_lang('Recibo') ?></div>
            <div class="dato"><?php Gral::_echo('#' . $pde_recibo->getCodigo()) ?></div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Tipo') ?></div>
            <div class="dato">
                <?php
                Html::html_dib_select(1, 'cmb_pde_tipo_recibo_id', Gral::getCmbFiltro(PdeTipoRecibo::getPdeTipoRecibosCmb(), '...'), $pde_recibo->getPdeTipoReciboId(), 'textbox ' . $error_input_css);
                ?>
                <div class="label-error" id="cmb_pde_tipo_recibo_id_error"></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Nota de Debito de') ?></div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_prv_proveedor_id', Gral::getCmbFiltro(PrvProveedor::getPrvProveedorsCmb(), '...'), $pde_recibo->getPrvProveedorId(), 'textbox ' . $error_input_css); ?>
                <div class="label-error" id="cmb_prv_proveedor_id_error"></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Condicion Pago') ?></div>
            <div class="dato">
                <?php
                Html::html_dib_select(1, 'cmb_pde_recibo_condicion_pago_id', Gral::getCmbFiltro(PdeReciboCondicionPago::getPdeReciboCondicionPagosCmb(true), '...'), $pde_recibo->getPdeReciboCondicionPagoId(), 'textbox ' . $error_input_css);
                ?>
                <div class="label-error" id="cmb_pde_recibo_condicion_pago_id_error"></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Tipo Pago') ?></div>
            <div class="dato">
                <?php
                Html::html_dib_select(1, 'cmb_pde_recibo_tipo_pago_id', Gral::getCmbFiltro(PdeReciboTipoPago::getPdeReciboTipoPagosCmb(true), '...'), $pde_recibo->getPdeReciboTipoPagoId(), 'textbox ' . $error_input_css);
                ?>
                <div class="label-error" id="cmb_pde_recibo_tipo_pago_id_error"></div>
            </div>
        </div>
                
        <div class="par">
            <div class="label"><?php Lang::_lang('Fecha ND') ?></div>
            <div class="dato">
                <input name='txt_fecha' type='text' class='textbox date' id='txt_fecha' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($pde_recibo->getFechaEmision())) ?>' size='10' placeholder="dd/mm/aaaa" />
                <input type='button' id='cal_txt_fecha' value='...' />

                <script type='text/javascript'>
                    Calendar.setup({
                        inputField: 'txt_fecha', ifFormat: '%d/%m/%Y', button: 'cal_txt_fecha'
                    });
                </script>
                <div class="label-error" id="txt_fecha_error"><?php Gral::_echo($txt_fecha_error) ?></div>  
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Nro Recibo') ?></div>
            <div class="dato">
                <input name='txt_nro_punto_venta' type='text' class='textbox nro-punto-venta' id='txt_nro_punto_venta' value='<?php Gral::_echo($pde_recibo->getNumeroPuntoVenta()) ?>' size='6' placeholder="000-000" />
                <input name='txt_nro_comprobante' type='text' class='textbox nro-comprobante' id='txt_nro_comprobante' value='<?php Gral::_echo($pde_recibo->getNumeroRecibo()) ?>' size='10' placeholder="0000000" />

                <div class="label-error" id="txt_nro_punto_venta_error"><?php Gral::_echo($txt_nro_punto_venta_error) ?></div>  
                <div class="label-error" id="txt_nro_comprobante_error"><?php Gral::_echo($txt_nro_comprobante_error) ?></div>  
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <textarea name='txa_observacion' rows='3' cols='50' id='txa_observacion' class='textbox'><?php Gral::_echoTxt($pde_recibo->getObservacion()) ?></textarea>
                <div class="label-error" id="txa_observacion_error"></div>
            </div>
        </div>
        <div class="label-error" id="envio_mail_error"></div>
        <div class="botonera">
            <button class="boton" id='btn_registrar' name='btn_registrar' type='button' class='btn_registrar'><?php Lang::_lang('Guardar') ?></button>
        </div>

    </form>
</div>
<script>
    setInit();
    setInitPdeReciboGestion();
</script>