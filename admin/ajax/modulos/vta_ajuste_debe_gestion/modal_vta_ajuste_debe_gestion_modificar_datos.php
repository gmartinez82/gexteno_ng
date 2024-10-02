<?php
include "_autoload.php";

$vta_ajuste_debe_id = Gral::getVars(Gral::VARS_GET, 'vta_ajuste_debe_id', 0);
$vta_ajuste_debe = VtaAjusteDebe::getOxId($vta_ajuste_debe_id);
?>

<div class="datos modificar-datos" vta_ajuste_debe_id="<?php Gral::_echo($vta_ajuste_debe->getId()) ?>">
    <form id='form_modificar_datos' name='form_modificar_datos' method='post' action='' >
        <div class="label-error" id="error_general_error"></div>

        <div class="col c1"> 
            <div class="par">
                <div class="label"><?php Lang::_lang('AjusteDebe') ?></div>
                <div class="dato"><?php Gral::_echo('#' . $vta_ajuste_debe->getCodigo()) ?></div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Preventista') ?></div>
                <div class="dato">
                    <?php
                    Html::html_dib_select(1, 'cmb_vta_preventista_id', Gral::getCmbFiltro(VtaPreventista::getVtaPreventistasCmb(), '...'), $vta_ajuste_debe->getVtaPreventistaId(), 'textbox ' . $error_input_css);
                    ?>
                    <div class="label-error" id="cmb_vta_preventista_id_error"></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Comprador') ?></div>
                <div class="dato">
                    <?php
                    Html::html_dib_select(1, 'cmb_vta_comprador_id', Gral::getCmbFiltro(VtaComprador::getVtaCompradorsCmb(), '...'), $vta_ajuste_debe->getVtaCompradorId(), 'textbox ' . $error_input_css);
                    ?>
                    <div class="label-error" id="cmb_vta_comprador_id_error"></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Vendedor') ?></div>
                <div class="dato">
                    <?php
                    Html::html_dib_select(1, 'cmb_vta_vendedor_id', Gral::getCmbFiltro(VtaVendedor::getVtaVendedorsCmb(), '...'), $vta_ajuste_debe->getVtaVendedorId(), 'textbox ' . $error_input_css);
                    ?>
                    <div class="label-error" id="cmb_vta_vendedor_id_error"></div>
                </div>
            </div>


            <div class="par">
                <div class="label"><?php Lang::_lang('Fecha Vencimiento') ?></div>
                <div class="dato">
                    <input name='txt_fecha_vencimiento' type='text' class='textbox date' id='txt_fecha_vencimiento' value='<?php Gral::_echoTxt(Gral::getFechaToWeb($vta_ajuste_debe->getFechaVencimiento())) ?>' size='10' placeholder="dd/mm/aaaa" />
                    <input type='button' id='cal_txt_fecha_vencimiento' value='...' />

                    <script type='text/javascript'>
                        Calendar.setup({
                            inputField: 'txt_fecha_vencimiento', ifFormat: '%d/%m/%Y', button: 'cal_txt_fecha_vencimiento'
                        });
                    </script>
                    <div class="label-error" id="txt_fecha_vencimiento_error"><?php Gral::_echo($txt_fecha_vencimiento_error) ?></div>  
                </div>
            </div>
        

            <div class="par">
                <div class="label"><?php Lang::_lang('Porc Imp') ?></div>
                <div class="dato">
                    <?php Html::html_dib_select(1, 'cmb_porcentaje_iva', Gral::getCmbFiltro(Gral::getNumerosCmb(100, 0), '...'), $vta_ajuste_debe->getPorcentaje(), 'textbox') ?> %
                    <div class="label-error" id="cmb_porcentaje_iva_error"></div>
                </div>
            </div>

            <div class="par">
                <div class="label"><?php Lang::_lang('Observaciones') ?></div>
                <div class="dato">
                    <textarea name='txa_observacion' rows='3' cols='50' id='txa_observacion' class='textbox'><?php Gral::_echoTxt($vta_ajuste_debe->getObservacion()) ?></textarea>
                    <div class="label-error" id="txa_observacion_error"></div>
                </div>
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
    setInitVtaAjusteDebeGestion();
</script>