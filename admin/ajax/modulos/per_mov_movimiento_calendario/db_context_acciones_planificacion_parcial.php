<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$per_mov_planificacion_id = Gral::getVars(2, 'per_mov_planificacion_id', 0);
$persona_id               = Gral::getVars(2, 'persona_id', 0);
$fecha                    = Gral::getVars(2, 'fecha', '');

if($persona_id)
{
    $per_persona = PerPersona::getOxId($persona_id);
    if($per_persona)
    {
        $per_descripcion = $per_persona->getDescripcion();
        
        $per_mov_planificacion = PerMovPlanificacion::getOxId($per_mov_planificacion_id);
        if($per_mov_planificacion){
            $per_mov_planificacion_id = $per_mov_planificacion->getId();
            $gral_novedad = $per_mov_planificacion->getGralNovedad();
            if($gral_novedad){
                $gral_novedad_id                = $gral_novedad->getId();
                $gral_novedad_descripcion       = $gral_novedad->getDescripcion();
                $gral_novedad_descripcion_corta = $gral_novedad->getDescripcionCorta();
            }
        }
    }
}

?>

<div class="datos" 
     persona_id="<?php Gral::_echo($per_persona->getId()) ?>"
     fecha="<?php Gral::_echo($fecha) ?>"
     per_mov_planificacion_id="<?php Gral::_echo($per_mov_planificacion_id) ?>"
     gral_novedad_id="<?php Gral::_echo($gral_novedad_id) ?>">
     
    <div class="titulo">
        <?php Lang::_lang('Fecha') ?>: 
        <strong><?php Gral::_echo(Gral::getFechaToWEB($fecha)); ?></strong>
        <br />
        <?php Lang::_lang('Persona') ?>: 
        <strong><?php Gral::_echo($per_descripcion); ?></strong>
        <br />
        <?php Lang::_lang('Novedad') ?>: 
        <strong><?php Gral::_echo($gral_novedad_descripcion); ?> (<?php Gral::_echo($per_mov_planificacion_id); ?>)</strong>
    </div>
    
    <?php if(UsCredencial::getEsAcreditado('PER_MOV_MOVIMIENTO_CALENDARIO_FECHA_NOVEDAD_EDITAR')): ?>
    <div class="uno editar-novedad" title="Editar Novedad">
        <img src="imgs/btn_modi.gif" alt="img-editar-novedad" width="12"/>
        <?php Lang::_lang('Editar Novedad') ?>
    </div>
    <?php endif; ?>
    
    <?php if(UsCredencial::getEsAcreditado('PER_MOV_MOVIMIENTO_CALENDARIO_FECHA_COMENTARIO_EDITAR')): ?>
    <div class="uno agregar-comentario" title="Agregar Comentario">
        <img src="imgs/btn_nota.gif" align="absmiddle"  width="12"/>
        <?php Lang::_lang("Agregar Comentario"); ?>
    </div>
    <?php endif; ?>
    
    <?php if($gral_novedad->getPermiteConfirmacion() && $per_mov_planificacion->getConfirmado() == 0): ?>
    <?php if(UsCredencial::getEsAcreditado('PER_MOV_MOVIMIENTO_CALENDARIO_FECHA_NOVEDAD_CONFIRMAR')): ?>
    <div class="uno confirmar-novedad" title="Confirmar Novedad">
        <img src="imgs/_btn_estado_1.gif" align="absmiddle"  width="12"/>
        <?php Lang::_lang("Confirmar Novedad"); ?>
    </div>
    <?php endif; ?>
    <?php endif; ?>
    
    <?php if(UsCredencial::getEsAcreditado('PER_MOV_MOVIMIENTO_CALENDARIO_FECHA_NOVEDAD_PARCIAL_ELIMINAR')): ?>
    <div class="uno eliminar-novedad-parcial" title="Eliminar Novedad Parcial">
        <img src="imgs/_btn_elim.gif" alt="img-eliminar-novedad-parcial" width="12"/>
        <?php Lang::_lang('Eliminar Novedad Parcial') ?>
    </div>
    <?php endif; ?>
    
    <br/>
</div>