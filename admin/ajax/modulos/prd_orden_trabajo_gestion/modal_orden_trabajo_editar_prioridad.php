<?php
include "_autoload.php";
include Gral::getPathAbs().'admin/control/seguridad_modulo.php';

$prd_orden_trabajo_id = Gral::getVars(Gral::VARS_GET, 'identificador', 0, Gral::TIPO_INTEGER);
$prd_orden_trabajo = PrdOrdenTrabajo::getOxId($prd_orden_trabajo_id);

if ( $prd_orden_trabajo )
{
    $cmb_prd_prioridad_id = $prd_orden_trabajo->getPrdPrioridadId();
}
?>

<form id='form_orden_trabajo_editar_prioridad' name='form_orden_trabajo_editar_prioridad' method='post' action='' prd_orden_trabajo_id="<?php echo $prd_orden_trabajo_id?>"  >
    <div class="datos editar-prioridad-ot" >                
        <div class="label-error" id="error_general_error"></div>
        <div class="par">
            <div class="label">
                <?php Lang::_lang('Codigo') ?>
            </div>
            <div class="dato">
                <div class="label"><?php Gral::_echo($prd_orden_trabajo->getCodigo()) ?></div>
            </div>
        </div>
        <div class="par">
            <div class="label">
                <?php Lang::_lang('Prioridad') ?>
            </div>
            <div class="dato">
                <?php Html::html_dib_select(1, 'cmb_prd_prioridad_id', Gral::getCmbFiltro(PrdPrioridad::getPrdPrioridadsCmb(), '...'), $cmb_prd_prioridad_id, 'textbox') ?>
                <div class="label-error" id="cmb_prd_prioridad_id_error"></div>
            </div>
        </div>
        <div class="par">
            <div class="label"><?php Lang::_lang('Observacion') ?></div>
            <div class="dato">
                <textarea name='txa_observacion' rows='3' cols='50' id='txa_observacion' class='textbox'><?php Gral::_echo($txt_observacion) ?></textarea>
                <div class="label-error" id="txa_observacion_error"></div>
            </div>
        </div>
        <div class="botonera">
            <button class="boton gen-modal-btn-confirmar" id='btn_guardar' name='btn_guardar' type='button' gen-modal-file-post="ajax/modulos/prd_orden_trabajo_gestion/set_modal_orden_trabajo_editar_prioridad.php?prd_orden_trabajo_id=<?php echo $prd_orden_trabajo_id; ?>" gen-modal-content=".div_modal" gen-modal-callback="setInitPrdOrdenTrabajoGestion(); refreshAdmAll('prd_orden_trabajo_gestion', 1);"><?php Lang::_lang('Guardar') ?></button>
        </div>
    </div>
</form>
<script>
    setInit();
    setInitPrdOrdenTrabajoGestion();
</script>