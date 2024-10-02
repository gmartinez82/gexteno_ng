<?php
include_once "_autoload.php";


$per_mov_planificacion_id = Gral::getVars(2, "per_mov_planificacion_id", '');
$per_mov_planificacion = PerMovPlanificacion::getOxId($per_mov_planificacion_id);
if($per_mov_planificacion)
{
    $per_mov_planificacion_id = $per_mov_planificacion->getId();
    $fecha                    = $per_mov_planificacion->getFecha();
    $gral_novedad             = $per_mov_planificacion->getGralNovedad();
    $txa_observacion          = $per_mov_planificacion->getObservacion();
    if($gral_novedad){
        $gral_novedad_descripcion = $gral_novedad->getDescripcion();
    }
}
?>

<div class="div-modal-agregar-comentario">
    <form id="form_agregar_comentario" name="form_agregar_comentario">
        <input id="hdn_per_mov_planificacion_id" name="hdn_per_mov_planificacion_id" type="hidden" value="<?php Gral::_echo($per_mov_planificacion_id); ?>"/>
        <div class="datos alta-novedad">
            <div class="par">
                <div class="label">
                    <?php Lang::_lang("Fecha"); ?>
                </div>
                <div class="dato">
                    <?php Gral::_echo(Gral::getFechaToWEB($fecha)); ?>
                </div>
            </div>
            <div class="par">
                <div class="col gral-novedad">
                    <div class="label">
                        <?php Lang::_lang("Novedad"); ?>
                    </div>
                    <div class="dato">
                        <?php Gral::_echo($gral_novedad_descripcion); ?>
                    </div>
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
                <input class="boton" id='btn_novedad_guardar' name='btn_novedad_guardar' type='button' value='<?php Lang::_lang('Guardar') ?>' />
            </div>
        </div>
    </form>
</div>