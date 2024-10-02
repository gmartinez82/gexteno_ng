<?php
include "_autoload.php";
include Gral::getPathAbs() . 'admin/control/seguridad_modulo.php';

$vta_hoja_ruta_id = Gral::getVars(Gral::VARS_GET, 'identificador', 0, Gral::TIPO_INTEGER);

$boton_titulo = 'Cargar';
$refresh_js = "refreshAdmAll('vta_hoja_ruta_gestion', 1);";

$vta_hoja_ruta = VtaHojaRuta::getOxId($vta_hoja_ruta_id);
if ($vta_hoja_ruta) {
    $gral_ruta_id = $vta_hoja_ruta->getGralRutaId();
    $ope_chofer_id = $vta_hoja_ruta->getOpeChoferId();
    $fecha_despacho = $vta_hoja_ruta->getFechaDespacho();
    $fecha_maxima_pedido = $vta_hoja_ruta->getFechaMaximaPedido();
    $observacion = $vta_hoja_ruta->getObservacion();
    $boton_titulo = 'Modificar';

    $refresh_js = "refreshAdmUno('vta_hoja_ruta_gestion', " . $vta_hoja_ruta_id . ");";
}
else {
    $fecha_despacho = Date::sumarDias(date('Y-m-d'), 0);
    $fecha_maxima_pedido = Date::sumarDias(date('Y-m-d'), -1);
}
?>

<form id='form_hoja_ruta' name='form_hoja_ruta' method='post' action='' >
    <div class='datos hoja_ruta' >
        <div id='error_general_error' class='label-error'></div>

        <?php if ($vta_hoja_ruta): ?>
            <div class="par">
                <div class="label"><?php Lang::_lang('Codigo') ?></div>
                <div class="dato">
                    <?php Gral::_echo($vta_hoja_ruta->getCodigo()); ?>
                </div>
            </div>
        <?php endif; ?>

        <div class='par'>
            <div class='label'>
                <?php Lang::_lang('Ruta'); ?>
            </div>
            <div class='dato'>
                <?php Html::html_dib_select(1, 'cmb_gral_ruta_id', Gral::getCmbFiltro(GralRuta::getGralRutasCmb(true), '...'), $gral_ruta_id, 'textbox'); ?>
                <div id='cmb_gral_ruta_id_error' class='label-error'></div>
            </div>
        </div>

        <div class='par'>
            <div class='label'>
                <?php Lang::_lang('Chofer'); ?>
            </div>
            <div class='dato'>
                <?php Html::html_dib_select(1, 'cmb_ope_chofer_id', Gral::getCmbFiltro(OpeChofer::getOpeChofersCmb(true), '...'), $ope_chofer_id, 'textbox '); ?>
                <div id='cmb_ope_chofer_id_error' class='label-error'></div>
            </div>
        </div>

        <div class='par'>
            <div class='label'>
                <?php Lang::_lang('Fecha Despacho'); ?>
            </div>
            <div class='dato'>
                <input id="txt_fecha_despacho" name="txt_fecha_despacho" type="text" class="textbox date" value='<?php Gral::_echoTxt(Gral::getFechaToWeb($fecha_despacho)) ?>' size="10" title="<?php Lang::_lang('Ingrese la fecha de despacho') ?>" />
                <input type="button" id="cal_txt_fecha_despacho" value=" ... ">
                <script type='text/javascript'>
                    Calendar.setup({
                        inputField: 'txt_fecha_despacho', ifFormat: '%d/%m/%Y', button: 'cal_txt_fecha_despacho', onUpdate: function () {
                        }
                    });
                </script>
                <div id='txt_fecha_despacho_error' class='label-error'></div>
            </div>
        </div>

        <div class='par'>
            <div class='label'>
                <?php Lang::_lang('Fecha Max Pedido'); ?>
            </div>
            <div class='dato'>
                <input id="txt_fecha_maxima_pedido" name="txt_fecha_maxima_pedido" type="text" class="textbox date" value='<?php Gral::_echoTxt(Gral::getFechaToWeb($fecha_maxima_pedido)) ?>' size="10" title="<?php Lang::_lang('Ingrese la fecha maxima para pedidos') ?>" />
                <input type="button" id="cal_txt_fecha_maxima_pedido" value=" ... ">
                <script type='text/javascript'>
                    Calendar.setup({
                        inputField: 'txt_fecha_maxima_pedido', ifFormat: '%d/%m/%Y', button: 'cal_txt_fecha_maxima_pedido', onUpdate: function () {
                        }
                    });
                </script>
                <div id='txt_fecha_maxima_pedido_error' class='label-error'></div>
            </div>
        </div>

        <div class='par'>
            <div class='label'>
                <?php Lang::_lang('Observacion'); ?>
            </div>
            <div class='dato'>
                <textarea id='txa_observacion' name='txa_observacion' rows='10' cols='50' class='textbox'><?php Gral::_echoTxt($observacion); ?></textarea>
                <div id='txa_observacion_error' class='label-error'></div>
            </div>
        </div>

        <div class='botonera'>
            <button class='boton gen-modal-btn-confirmar' id='btn_registrar' name='btn_registrar' type='button' gen-modal-file-post='ajax/modulos/vta_hoja_ruta_gestion/set_modal_hoja_ruta.php?identificador=<?php echo $vta_hoja_ruta_id; ?>' gen-modal-content='.div_modal' gen-modal-callback="setInitVtaHojaRutaGestion(); <?php echo $refresh_js; ?>"><?php Lang::_lang($boton_titulo . ' hoja de ruta') ?></button>
        </div>

    </div>
</form>
<script>
    setInit();
    setInitVtaHojaRutaGestion();
</script>