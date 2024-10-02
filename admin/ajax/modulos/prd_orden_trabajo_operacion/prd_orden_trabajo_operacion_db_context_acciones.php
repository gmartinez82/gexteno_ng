<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$prd_orden_trabajo_operacion = PrdOrdenTrabajoOperacion::getOxId($id);

$prd_orden_trabajo_operacion_tipo_estado = $prd_orden_trabajo_operacion->getPrdOrdenTrabajoOperacionTipoEstado();

?>
<div class="datos" identificador="<?php Gral::_echo($prd_orden_trabajo_operacion->getId()) ?>" modulo="prd_orden_trabajo_operacion">

    <div class="titulo">
        <?php Lang::_lang('PrdOrdenTrabajoOperacion') ?>: 
        <strong><?php Gral::_echo($prd_orden_trabajo_operacion->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_OPERACION_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('PrdOrdenTrabajoOperacion') ?>
        </div>
    <?php endif; ?>

    <?php if (UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_OPERACION_ADM_ACCION_CONFIG_CAMBIAR_PRD_ORDEN_TRABAJO_OPERACION_ESTADO')): ?>
        <div class="uno cambiar-estado" modulo_estado="prd_orden_trabajo_operacion_estado">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Cambiar') ?> <?php Lang::_lang('PrdOrdenTrabajoOperacionEstado') ?>
        </div>
    <?php endif; ?>
    
    <?php 
    // -------------------------------------------------------------------------
    // acciones personalizadas
    // -------------------------------------------------------------------------    
    if(file_exists("prd_orden_trabajo_operacion_db_context_acciones_custom.php")){
        include "prd_orden_trabajo_operacion_db_context_acciones_custom.php";
    } 
    ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

