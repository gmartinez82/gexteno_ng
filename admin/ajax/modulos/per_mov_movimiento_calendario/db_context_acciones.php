<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$persona_id = Gral::getVars(2, 'persona_id', 0);
$fecha      = Gral::getVars(2, 'fecha', '');

if($persona_id)
{
    $per_persona = PerPersona::getOxId($persona_id);
    if($per_persona){
        $per_descripcion = $per_persona->getDescripcion();
    }
}

?>

<div class="datos" persona_id="<?php Gral::_echo($per_persona->getId()) ?>" fecha="<?php Gral::_echo($fecha) ?>" >
    <div class="titulo">
        <?php Lang::_lang('Fecha') ?>: 
        <strong><?php Gral::_echo(Gral::getFechaToWEB($fecha)); ?></strong>
        <br />
        <?php Lang::_lang('Persona') ?>: 
        <strong><?php Gral::_echo($per_descripcion); ?></strong>
    </div>
    
    <?php if(UsCredencial::getEsAcreditado('PER_MOV_MOVIMIENTO_CALENDARIO_FECHA_VER_FICHA')){ ?>
    <div class="uno ver-ficha" title="Ver Ficha">
        <img src="imgs/btn_ficha.png" alt="img-ficha" width="12" />
        <?php Lang::_lang('Ver Ficha del Dia') ?>
    </div>
    <?php } ?>
    
    <?php if(UsCredencial::getEsAcreditado('PER_MOV_MOVIMIENTO_CALENDARIO_FECHA_REFRESH')){ ?>
    <div class="uno refresh" title="Refresh">
        <img src="imgs/btn_refresh.png" alt="img-refresh" />
        <?php Lang::_lang('Actualizar el Dia') ?>
    </div>
    <?php } ?>
    
    <?php if(UsCredencial::getEsAcreditado('PER_MOV_MOVIMIENTO_CALENDARIO_FECHA_NOVEDAD_AGREGAR') && false){ ?>
    <div class="uno agregar-novedad" title="Agregar Novedad">
        <img src="imgs/btn_add.png" alt="img-agregar-novedad" width="12"/>
        <?php Lang::_lang('Agregar Novedad') ?>
    </div>
    <?php } ?>
    
    <?php if(UsCredencial::getEsAcreditado('PER_MOV_MOVIMIENTO_CALENDARIO_FECHA_NOVEDAD_PARCIAL_AGREGAR') && false){ ?>
    <div class="uno agregar-novedad-parcial" title="Agregar Novedad Parcial">
        <img src="imgs/btn_add.gif" alt="img-agregar-novedad-parcial" width="12"/>
        <?php Lang::_lang('Agregar Novedad Parcial') ?>
    </div>
    <?php } ?>
    
    <?php if(UsCredencial::getEsAcreditado('PER_MOV_MOVIMIENTO_CALENDARIO_FECHA_NOVEDAD_ELIMINAR') && false){ ?>
    <div class="uno eliminar-novedad" title="Eliminar Novedad">
        <img src="imgs/_btn_elim.gif" alt="img-eliminar-novedad" width="12"/>
        <?php Lang::_lang('Eliminar Novedad') ?>
    </div>
    <?php } ?>
    
    <br/>
</div>