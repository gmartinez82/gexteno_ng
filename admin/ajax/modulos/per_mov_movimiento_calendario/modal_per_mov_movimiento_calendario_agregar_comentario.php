<?php
include_once "_autoload.php";


$per_mov_planificacion_id = Gral::getVars(2, "per_mov_planificacion_id", 0);
$hdn_per_persona_id       = Gral::getVars(2, "hdn_per_persona_id", 0);
$hdn_fecha                = Gral::getVars(2, "hdn_fecha", 0);

$per_mov_planificacion = PerMovPlanificacion::getOxId($per_mov_planificacion_id);
if($per_mov_planificacion)
{
    $per_mov_planificacion_id = $per_mov_planificacion->getId();
    $fecha                    = $per_mov_planificacion->getFecha();
    $gral_novedad             = $per_mov_planificacion->getGralNovedad();
    $txa_observacion          = $per_mov_planificacion->getObservacion();
    //$gral_novedad_motivo              = $per_mov_planificacion->getGralNovedadMotivo();
    //$gral_novedad_motivo_extendido    = $per_mov_planificacion->getGralNovedadMotivoExtendido();
    $gral_novedad_motivo_id           = $per_mov_planificacion->getGralNovedadMotivoId();
    $gral_novedad_motivo_extendido_id = $per_mov_planificacion->getGralNovedadMotivoExtendidoId();

    if($gral_novedad)
    {
        $gral_novedad_descripcion = $gral_novedad->getDescripcion();
        
        if(!empty($gral_novedad_motivo_id))
        {
            $gral_novedad_motivo_descripcion = $per_mov_planificacion->getGralNovedadMotivo()->getDescripcion();
            
            if(!empty($gral_novedad_motivo_extendido_id))
            {
                $gral_novedad_motivo_extendido_descripcion = $per_mov_planificacion->getGralNovedadMotivoExtendido()->getDescripcion();
            }
        }
    }
}
?>

<div class="div-modal-agregar-comentario">
    <form id="form_agregar_comentario" name="form_agregar_comentario">
        <input id="hdn_per_mov_planificacion_id" name="hdn_per_mov_planificacion_id" type="hidden" value="<?php Gral::_echo($per_mov_planificacion_id); ?>"/>        <div class="datos alta-novedad">
        <input id="hdn_fecha"                    name="hdn_fecha"                    type="hidden" value="<?php Gral::_echo($hdn_fecha); ?>"/>
        <input id="hdn_per_persona_id"           name="hdn_per_persona_id"           type="hidden" value="<?php Gral::_echo($hdn_per_persona_id); ?>"/>
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
            
            <?php if($gral_novedad_motivo_descripcion): ?>
            <div class="par">
                <div class="col gral-novedad-motivo">
                    <div class="label">
                        <?php Lang::_lang("Motivo"); ?>
                    </div>
                    <div class="dato">
                        <?php Gral::_echo($gral_novedad_motivo_descripcion); ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php if($gral_novedad_motivo_extendido_descripcion): ?>
            <div class="par">
                <div class="col gral-novedad-motivo">
                    <div class="label">
                        <?php Lang::_lang("Motivo Ext"); ?>
                    </div>
                    <div class="dato">
                        <?php Gral::_echo($gral_novedad_motivo_extendido_descripcion); ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
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
                <input id='btn_novedad_guardar_comentario' name='btn_novedad_guardar_comentario' class="boton" type='button' value='<?php Lang::_lang('Guardar') ?>' />
            </div>
        </div>
    </form>
</div>