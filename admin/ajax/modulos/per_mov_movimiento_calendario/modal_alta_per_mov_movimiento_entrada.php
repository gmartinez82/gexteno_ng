<?php
include "_autoload.php";

$hdn_fecha_ficha = Gral::getVars(2, "hdn_fecha", 0);
$hdn_per_persona_id = Gral::getVars(2, "hdn_per_persona_id", 0);


//Para controlar que si el ultimo movimiento es de entrada no deje hacer nada, se requiere que sea de salida el ultimo movimiento
$error = false;
$per_persona = PerPersona::getOxId($hdn_per_persona_id);
if ($per_persona) {
    //Se recuperan los ultimos movimientos
    $per_mov_movimientos = $per_persona->getPerMovMovimientosEnFecha($hdn_fecha_ficha, false, "DESC");
    foreach ($per_mov_movimientos as $per_mov_movimiento) {
        $tipo_movimiento_id_ultimo_movimiento = $per_mov_movimiento->getPerMovTipoMovimientoId();
        break;
    }

    //Si el ultimo movimiento es de entrada (debe ser de salida)
    $per_mov_tipo_movimiento = PerMovTipoMovimiento::getOxId($tipo_movimiento_id_ultimo_movimiento);
    if ($per_mov_tipo_movimiento) {
        if ($per_mov_tipo_movimiento->getCodigo() == PerMovTipoMovimiento::TIPO_ENTRADA) {
            $error = true;
        }
    }
}

//Para visualizar solo el tipo de Entrada y para guardar su id
$per_mov_tipo_movimiento = PerMovTipoMovimiento::getOxCodigo(PerMovTipoMovimiento::TIPO_ENTRADA); //$per_movimiento->getPerMovTipoMovimiento();
if ($per_mov_tipo_movimiento) {
    $per_mov_tipo_movimiento_id = $per_mov_tipo_movimiento->getId();
    $per_mov_tipo_movimiento_descripcion = $per_mov_tipo_movimiento->getDescripcion();

    //$txt_fecha_ficha = Gral::getFechaToWEB($hdn_fecha_ficha);
    $hora_actual = date('H:i');
    $txt_fecha_hora = Gral::getFechaToWEB($hdn_fecha_ficha) . " " . $hora_actual;
}
?>

<div class="div-modal-alta-movimiento-entrada">
    <form id="form_alta_movimiento_entrada" name="form_alta_movimiento_entrada">
        <input id="hdn_per_mov_tipo_movimiento_id" name="hdn_per_mov_tipo_movimiento_id" type="hidden" value="<?php Gral::_echo($per_mov_tipo_movimiento_id); ?>"/>
        <div class="datos per-mov-movimiento-entrada" >
            <?php if ($error): ?>
                <div class="par">
                    <div class="label"></div>
                    <div class="label-error">
                        El ultimo movimiento registrado debe ser de tipo SALIDA para poder dar de alta un nuevo movimiento de tipo ENTRADA
                    </div>
                </div>
            <?php endif; ?>

            <?php if (!$error): ?>
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
                    <div class="label"><?php Lang::_lang("Tipo Movimiento") ?></div>
                    <div class="dato">
                        <?php Gral::_echo($per_mov_tipo_movimiento_descripcion); ?>
                        <div id="txt_mov_tipo_movimiento_error" class="label-error" ><?php Gral::_echo($txt_mov_tipo_movimiento_error) ?></div>
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

                <!--<div class="par">
                    <div class="label"><?php Lang::_lang("Estado") ?></div>
                    <div class="dato">
                <?php Html::html_dib_select(1, "cmb_per_mov_estado", Gral::getCmbFiltro(GralSiNo::getGralSiNosCmb(true, true), "..."), true, "textbox") ?>
                        <div id="cmb_per_mov_estado_error" class="label-error" ><?php Gral::_echo($cmb_per_mov_estado_error); ?></div>
                    </div>
                </div>-->
                <div class="botonera">
                    <input class="boton" id='btn_movimiento_guardar' name='btn_movimiento_guardar' type='button' value='<?php Lang::_lang('Guardar') ?>' />
                </div>
            <?php endif; ?>
        </div>
    </form>
</div>