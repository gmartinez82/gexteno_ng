<?php
include "_autoload.php";

$prd_orden_trabajo_operacion_id = Gral::getVars(Gral::VARS_GET, 'identificador', 0);
$prd_orden_trabajo_operacion = PrdOrdenTrabajoOperacion::getOxId($prd_orden_trabajo_operacion_id);

$prd_prd_orden_trabajo_operacion_estado = $prd_orden_trabajo_operacion->getPrdOrdenTrabajoOperacionEstadoActual();
?>

<div class="datos operacion-comentario" prd_orden_trabajo_operacion_id="<?php Gral::_echo($prd_orden_trabajo_operacion->getId()) ?>">
    <form id='form_operacion_comentario' name='form_operacion_comentario' method='post' action='' >
        <div class="label-error" id="error_general_error"></div>


        <div class="par">
            <div class="label"><?php Lang::_lang('Operacion') ?></div>
            <div class="dato"><?php Gral::_echo('#' . $prd_orden_trabajo_operacion->getDescripcion()) ?></div>
        </div>
        <div class="par">
            <div class="label"><?php Lang::_lang('Comentario') ?></div>
            <div class="dato">
                <textarea name='txa_observacion' rows='3' cols='50' id='txa_observacion' class='textbox'><?php Gral::_echo($prd_prd_orden_trabajo_operacion_estado->getObservacion()) ?></textarea>
                <div class="label-error" id="txa_observacion_error"></div>
            </div>
        </div>
        <div class="botonera">
            <button class="boton gen-modal-btn-confirmar" id='btn_guardar' name='btn_guardar' type='button' gen-modal-file-post="ajax/modulos/prd_orden_trabajo_gestion/set_modal_orden_trabajo_operacion_comentario.php?prd_orden_trabajo_operacion_id=<?php echo $prd_orden_trabajo_operacion_id; ?>" gen-modal-content=".div_modal" gen-modal-callback="setInitPrdOrdenTrabajoGestion();"><?php Lang::_lang('Guardar') ?></button>
        </div>

    </form>
</div>
<script>
    setInit();
    setInitPrdOrdenTrabajoGestion();
</script>