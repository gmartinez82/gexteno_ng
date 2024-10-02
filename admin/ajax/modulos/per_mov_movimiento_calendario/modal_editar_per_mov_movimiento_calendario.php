<?php
include "_autoload.php";

$per_movimiento_id = Gral::getVars(2, 'per_movimiento_id', 0);
$per_persona_id = Gral::getVars(2, 'per_persona_id', 0);

$per_movimiento = PerMovMovimiento::getOxId($per_movimiento_id);

if ($per_movimiento) {
    $per_movimiento_id = $per_movimiento->getId();
    $cmb_per_mov_estado = $per_movimiento->getEstado();
    $txa_observacion = $per_movimiento->getObservacion();
    $per_persona = $per_movimiento->getPerPersona();
    if ($per_persona) {
        $per_persona_id = $per_persona->getId();
    }

    $txt_fecha_hora = $per_movimiento->getFechaHora();
    $txt_fecha_hora = Gral::getFechaHoraToWEB($txt_fecha_hora);
    $per_mov_tipo_movimiento = $per_movimiento->getPerMovTipoMovimiento();
    if ($per_mov_tipo_movimiento) {
        $cmb_per_mov_tipo_movimiento_id = $per_mov_tipo_movimiento->getId();
        $per_mov_tipo_movimiento_descripcion = $per_mov_tipo_movimiento->getDescripcion();
    }
}
?>

<div class="div-modal-editar-movimiento">
    <form id="form_editar_movimiento" name="form_editar_movimiento">
        <input id="hdn_per_mov_movimiento_id" name="hdn_per_mov_movimiento_id" type="hidden" value="<?php Gral::_echo($per_movimiento_id); ?>"/>
        <div class="datos per_mov_movimiento editar" >
            <div class="par">
                <div class="label"><?php Lang::_lang("Movimiento"); ?></div>
                <div class="dato">
                    <div class="label"><?php echo $per_movimiento_id; ?></div>
                </div>
            </div>
            <div class="par">
                <div class="label"><?php Lang::_lang("Tipo Mov") ?></div>
                <div class="dato">
                    <?php Gral::_echo($per_mov_tipo_movimiento_descripcion); ?>
                </div>
            </div>
            <div class="par">
                <div class="label"><?php Lang::_lang("Fecha"); ?></div>
                <div class="dato">
                    <input id="txt_fecha_hora" name="txt_fecha_hora" type="text" class="textbox datex" size="20" value="<?php Gral::_echoTxt($txt_fecha_hora); ?>">
                    <input id='cal_txt_fecha_hora' type='button' value='...' class="boton_calendario" />
                    <script type='text/javascript'>
                        Calendar.setup({
                            inputField: 'txt_fecha_hora', ifFormat: '%d/%m/%Y %H:%M', button: 'cal_txt_fecha_hora', onUpdate: function () {
                                setAdmBuscadorTop('per_mov_movimiento_calendario')
                            }
                        });
                    </script>
                    <div id="txt_fecha_hora_error" class="label-error" ><?php Gral::_echo($txt_fecha_hora_error) ?></div>
                </div>
            </div>
            <div class="par">
                <div class="label"><?php Lang::_lang("Estado") ?></div>
                <div class="dato">
                    <?php Html::html_dib_select(1, "cmb_per_mov_estado", Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(true, true), "..."), $cmb_per_mov_estado, "textbox") ?>

                    <div id="cmb_per_mov_estado_error" class="label-error" ><?php Gral::_echo($cmb_per_mov_estado_error); ?></div>
                </div>
            </div>

            <div class="par">
                <div class="label">
                    <?php Lang::_lang('Observaciones') ?>
                </div>
                <div class="dato">
                    <textarea id="txa_observacion" name="txa_observacion" rows="4" cols="50" class="textbox"><?php Gral::_echo($txa_observacion); ?></textarea>
                    <div id="txa_observacion_error" class="error label-error"><?php Gral::_echo($txa_observacion_error); ?></div>
                </div>
            </div>

            <div class="botonera">
                <input class="boton" id='btn_movimiento_guardar' name='btn_movimiento_guardar' type='button' value='<?php Lang::_lang('Guardar') ?>' />
            </div>
        </div>
    </form>
</div>