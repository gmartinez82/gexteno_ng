<?php
include_once '_autoload.php';

$pde_orden_pago_id = Gral::getVars(Gral::VARS_GET, 'pde_orden_pago_id', 0);
$pde_orden_pago = PdeOrdenPago::getOxId($pde_orden_pago_id);

$prv_proveedor = $pde_orden_pago->getPrvProveedor();
?>
<form id='form_datos_pago_recibido_orden_pago' name='form_datos_autorizar_orden_pago' method='post' >
    <div class='datos pago-recibido-orden-pago' pde_orden_pago_id="<?php echo $pde_orden_pago_id ?>">

        <?php include "pde_orden_pago_gestion_modal_top.php" ?>   

        <div class="par">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_orden_pago->getCodigo()) ?>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Proveedor') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_proveedor->getDescripcion()) ?>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Condicion Pago') ?></div>
            <div class="dato">
                <?php
                Html::html_dib_select(1, 'cmb_pde_recibo_condicion_pago_id', Gral::getCmbFiltro(PdeReciboCondicionPago::getPdeReciboCondicionPagosCmb(true), '...'), 0, 'textbox ' . $error_input_css);
                ?>
                <div class="label-error" id="cmb_pde_recibo_condicion_pago_id_error"></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Tipo Pago') ?></div>
            <div class="dato">
                <?php
                Html::html_dib_select(1, 'cmb_pde_recibo_tipo_pago_id', Gral::getCmbFiltro(PdeReciboTipoPago::getPdeReciboTipoPagosCmb(true), '...'), 0, 'textbox ' . $error_input_css);
                ?>
                <div class="label-error" id="cmb_pde_recibo_tipo_pago_id_error"></div>
            </div>
        </div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Fecha Recibo') ?></div>
            <div class="dato">
                <input name='txt_fecha' type='text' class='textbox date' id='txt_fecha' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($txt_fecha)) ?>' size='10' placeholder="dd/mm/aaaa" />
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
                <input name='txt_nro_punto_venta' type='text' class='textbox nro-punto-venta' id='txt_nro_punto_venta' value='<?php Gral::_echo($txt_nro_punto_venta) ?>' size='6' placeholder="000-000" />
                <input name='txt_nro_comprobante' type='text' class='textbox nro-comprobante' id='txt_nro_comprobante' value='<?php Gral::_echo($txt_nro_comprobante) ?>' size='10' placeholder="00000000" />

                <div class="label-error" id="txt_nro_punto_venta_error"><?php Gral::_echo($txt_nro_punto_venta_error) ?></div>  
                <div class="label-error" id="txt_nro_comprobante_error"><?php Gral::_echo($txt_nro_comprobante_error) ?></div>  
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <textarea name='txa_observacion' rows='3' cols='50' id='txa_observacion' class='textbox'></textarea>
                <div class="error label-error" id="txa_observacion_error"><?php Gral::_echo($txa_observacion_error) ?></div>
            </div>
        </div>

        <div class="mensaje-genera-recibo">
            Se registrara un nuevo Recibo de Venta con los datos ingresados en la Orden de Pago.
        </div>

        <div class="botonera">
            <input id="btn_registrar" name='btn_registrar' type='button' class='boton' value='<?php Lang::_lang('Registrar Pago Efectuado') ?>' />
        </div>

    </div>
</form>
