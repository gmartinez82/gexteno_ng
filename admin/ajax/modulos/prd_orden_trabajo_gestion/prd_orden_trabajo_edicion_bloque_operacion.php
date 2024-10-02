<?php

?>

<div class="operacion" style="background-color: <?php echo $prd_orden_trabajo_operacion->getPrdOrdenTrabajoOperacionTipoEstado()->getColor() ?>" prd_orden_trabajo_operacion_id=<?php echo $prd_orden_trabajo_operacion->getId(); ?>>
    
    <div class="operacion-info">
        <div class="operacion-numero">
            <?php Gral::_echo($operacion_numero); ?>
        </div>
        <div class="operacion-nombre">
            <?php Gral::_echo($operacion); ?>
        </div>
    </div>
    
    <?php
    foreach ( $prd_orden_trabajo_operacion_prd_equipos as $prd_orden_trabajo_operacion_prd_equipo )
    {
        $prd_equipo = $prd_orden_trabajo_operacion_prd_equipo->getPrdEquipo();
        $equipo_descripcion = $prd_equipo->getDescripcionCorta();
        $equipo_descripcion_corta = $prd_equipo->getDescripcion();
    ?>
    <div class="equipo-info">
        <div class="equipo-icono">
            ICN
        </div>
        <div class="equipo-nombre">
            <?php Gral::_echo($equipo_descripcion); ?>
        </div>
    </div>
    <?php
    }
    ?>
    
    <?php
    foreach ( $prd_orden_trabajo_operacion_ope_operarios as $prd_orden_trabajo_operacion_ope_operario )
    {
        $ope_operario = $prd_orden_trabajo_operacion_ope_operario->getOpeOperario();
        $operario_descripcion = $ope_operario->getDescripcion();
        $operario_nombre = $ope_operario->getPerPersona()->getDescripcion();
    ?>
    <div class="operario-info">
        <div class="operario-icono">
            ICN
        </div>
        <div class="operario-nombre">
            <?php Gral::_echo($operario_descripcion); ?>
        </div>
    </div>

    <div class="operario-info">
        <div class="operario-icono">
            Estado
        </div>
        <div class="operario-nombre">
            <?php Gral::_echo($prd_orden_trabajo_operacion->getPrdOrdenTrabajoOperacionTipoEstado()->getDescripcion()); ?>
        </div>
    </div>
    <?php
    }
    ?>
    
    <div class="botonera">
        
        <?php if ( $prd_orden_trabajo_operacion->getPrdOrdenTrabajoOperacionTipoEstado()->getCodigo() == PrdOrdenTrabajoOperacionTipoEstado::TIPO_NO_INICIADA ): ?>
        <button type="button" class="boton btn_comenzar" id="btn_comenzar_<?php echo $prd_orden_trabajo_operacion->getId(); ?>" name="btn_comenzar_<?php echo $prd_orden_trabajo_operacion->getId(); ?>" prd_orden_trabajo_operacion_tipo_estado_codigo="<?php echo PrdOrdenTrabajoOperacionTipoEstado::TIPO_EN_CURSO; ?>">Comenzar</button>
        <?php endif; ?>
        
        <?php if ( $prd_orden_trabajo_operacion->getPrdOrdenTrabajoOperacionTipoEstado()->getCodigo() == PrdOrdenTrabajoOperacionTipoEstado::TIPO_EN_CURSO ):?>
        <button type="button" class="boton btn_finalizar" id="btn_finalizar_<?php echo $prd_orden_trabajo_operacion->getId(); ?>" name="btn_finalizar_<?php echo $prd_orden_trabajo_operacion->getId(); ?>" prd_orden_trabajo_operacion_tipo_estado_codigo="<?php echo PrdOrdenTrabajoOperacionTipoEstado::TIPO_FINALIZADA; ?>">Finalizar</button>
        <?php endif; ?>

        <?php if ( $prd_orden_trabajo_operacion->getPrdOrdenTrabajoOperacionTipoEstado()->getCodigo() == PrdOrdenTrabajoOperacionTipoEstado::TIPO_FINALIZADA ): ?>
        <button type="button" class="boton btn_comenzar" id="btn_comenzar_<?php echo $prd_orden_trabajo_operacion->getId(); ?>" name="btn_comenzar_<?php echo $prd_orden_trabajo_operacion->getId(); ?>" prd_orden_trabajo_operacion_tipo_estado_codigo="<?php echo PrdOrdenTrabajoOperacionTipoEstado::TIPO_EN_CURSO; ?>">Volver a En Curso</button>
        <?php endif; ?>

        <?php if ( $prd_orden_trabajo_operacion->getPrdOrdenTrabajoOperacionTipoEstado()->getCodigo() == PrdOrdenTrabajoOperacionTipoEstado::TIPO_EN_CURSO ): ?>
        <button type="button" class="boton btn_comenzar" id="btn_comenzar_<?php echo $prd_orden_trabajo_operacion->getId(); ?>" name="btn_comenzar_<?php echo $prd_orden_trabajo_operacion->getId(); ?>" prd_orden_trabajo_operacion_tipo_estado_codigo="<?php echo PrdOrdenTrabajoOperacionTipoEstado::TIPO_NO_INICIADA; ?>">Volver a No Iniciada</button>
        <?php endif; ?>
        
        <button type="button" class="boton btn_comentario gen-modal-open" id="btn_comentario_<?php echo $prd_orden_trabajo_operacion->getId(); ?>" name="btn_comentario_<?php echo $prd_orden_trabajo_operacion->getId(); ?>" gen-modal-file="ajax/modulos/prd_orden_trabajo_gestion/modal_orden_trabajo_operacion_comentario.php?identificador=<?php echo $prd_orden_trabajo_operacion->getId() ?>" gen-modal-content=".div_modal" gen-modal-width="40%" gen-modal-height="300" gen-modal-titulo="Comentario de operacion" gen-modal-callback="setInitPrdOrdenTrabajoGestion();">Comentario</button>
        <button type="button" class="boton btn_refresh" id="btn_refresh_<?php echo $prd_orden_trabajo_operacion->getId(); ?>" name="btn_refresh_<?php echo $prd_orden_trabajo_operacion->getId(); ?>">Refresh</button>
        
        <div class='adm_botones_accion adm-ver-ficha' title='<?php Lang::_lang('Ver Ficha') ?>'>
            <img src='imgs/btn_ficha.png' width='15' border='0' />
	    </div>
    </div>
    
</div>