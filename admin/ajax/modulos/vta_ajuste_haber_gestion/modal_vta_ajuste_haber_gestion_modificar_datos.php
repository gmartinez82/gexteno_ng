<?php
include "_autoload.php";

$vta_ajuste_haber_id = Gral::getVars(Gral::VARS_GET, 'vta_ajuste_haber_id', 0);
$vta_ajuste_haber = VtaAjusteHaber::getOxId($vta_ajuste_haber_id);
$cli_cliente = $vta_ajuste_haber->getCliCliente();
?>

<div class="datos modificar-datos" vta_ajuste_haber_id="<?php Gral::_echo($vta_ajuste_haber->getId()) ?>">
    <form id='form_modificar_datos' name='form_modificar_datos' method='post' action='' >
        <div class="label-error" id="error_general_error"></div>


        <div class="par">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato"><?php Gral::_echo('#' . $vta_ajuste_haber->getCodigo()) ?></div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Cliente') ?></div>
            <div class="dato">
                <div class="dato"><?php Gral::_echo($vta_ajuste_haber->getPersonaDescripcion()) ?></div>
                <?php //Html::html_dib_select(1, 'cmb_cli_cliente_id', Gral::getCmbFiltro(CliCliente::getCliClientesCmb(), '...'), $vta_ajuste_haber->getCliClienteId(), 'textbox ' . $error_input_css); ?>
                <div class="label-error" id="cmb_cli_cliente_id_error"></div>
            </div>
        </div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Tipo') ?></div>
            <div class="dato">
                <?php
                Html::html_dib_select(1, 'cmb_vta_tipo_ajuste_haber_id', Gral::getCmbFiltro(VtaTipoAjusteHaber::getVtaTipoAjusteHabersCmb(), '...'), $vta_ajuste_haber->getVtaTipoAjusteHaberId(), 'textbox ' . $error_input_css);
                ?>
                <div class="label-error" id="cmb_vta_tipo_ajuste_haber_id_error"></div>
            </div>
        </div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Preventista') ?></div>
            <div class="dato">
                <?php
                Html::html_dib_select(1, 'cmb_vta_preventista_id', Gral::getCmbFiltro(VtaPreventista::getVtaPreventistasCmb(true), '...'), $vta_ajuste_haber->getVtaPreventistaId(), 'textbox ' . $error_input_css);
                ?>
                <div class="label-error" id="cmb_vta_preventista_id_error"></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Condicion Pago') ?></div>
            <div class="dato">
                <?php
                Html::html_dib_select(1, 'cmb_vta_ajuste_haber_condicion_pago_id', Gral::getCmbFiltro(VtaAjusteHaberCondicionPago::getVtaAjusteHaberCondicionPagosCmb(true), '...'), $vta_ajuste_haber->getVtaAjusteHaberCondicionPagoId(), 'textbox ' . $error_input_css);
                ?>
                <div class="label-error" id="cmb_vta_ajuste_haber_condicion_pago_id_error"></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Tipo Pago') ?></div>
            <div class="dato">
                <?php
                Html::html_dib_select(1, 'cmb_vta_ajuste_haber_tipo_pago_id', Gral::getCmbFiltro(VtaAjusteHaberTipoPago::getVtaAjusteHaberTipoPagosCmb(true), '...'), $vta_ajuste_haber->getVtaAjusteHaberTipoPagoId(), 'textbox ' . $error_input_css);
                ?>
                <div class="label-error" id="cmb_vta_ajuste_haber_tipo_pago_id_error"></div>
            </div>
        </div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Fecha AJT') ?></div>
            <div class="dato">
                <input name='txt_fecha' type='text' class='textbox date' id='txt_fecha' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($vta_ajuste_haber->getFechaEmision())) ?>' size='10' placeholder="dd/mm/aaaa" />
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
            <div class="label"><?php Lang::_lang('Nro OP Cliente') ?></div>
            <div class="dato">
                <input name='txt_codigo_op_cliente' type='text' class='textbox' id='txt_codigo_op_cliente' value='<?php Gral::_echoTxt($vta_ajuste_haber->getCodigoOpCliente()) ?>' size='20' />
                </script>
                <div class="label-error" id="txt_codigo_op_cliente_error"><?php Gral::_echo($txt_codigo_op_cliente_error) ?></div>  
            </div>
        </div>
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Nota Interna') ?></div>
            <div class="dato">
                <div class="comentario">Solo lo visualizarán los usuarios de la empresa a este comentario.</div>
                <textarea name='txa_nota_interna' rows='1' cols='70' id='txa_nota_interna' class='textbox'><?php Gral::_echoTxt($vta_ajuste_haber->getNotaInterna()) ?></textarea>
                <div class="label-error" id="txa_nota_interna_error"></div>
            </div>
        </div>

        <div class="par">
            <div class="label"><?php Lang::_lang('Nota Publica') ?></div>
            <div class="dato">
                <div class="comentario">Este comentario se imprime en el comprobante. Agregar aquí comentarios para el cliente.</div>
                <textarea name='txa_nota_publica' rows='1' cols='70' id='txa_nota_publica' class='textbox'><?php Gral::_echoTxt($vta_ajuste_haber->getNotaPublica()) ?></textarea>
                <div class="label-error" id="txa_nota_publica_error"></div>
            </div>
        </div>        
        
        <div class="par">
            <div class="label"><?php Lang::_lang('Otras Observaciones') ?></div>
            <div class="dato">
                <textarea name='txa_observacion' rows='1' cols='50' id='txa_observacion' class='textbox'><?php Gral::_echoTxt($vta_ajuste_haber->getObservacion()) ?></textarea>
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
    setInitVtaAjusteHaberGestion();
</script>