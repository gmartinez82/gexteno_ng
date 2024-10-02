<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$prd_orden_trabajo = PrdOrdenTrabajo::getOxId($id);

$prd_orden_trabajo_tipo_estado = $prd_orden_trabajo->getPrdOrdenTrabajoTipoEstado();

?>
<div class="datos" identificador="<?php Gral::_echo($prd_orden_trabajo->getId()) ?>" modulo="prd_orden_trabajo">

    <div class="titulo">
        <?php Lang::_lang('PrdOrdenTrabajo') ?>: 
        <strong><?php Gral::_echo($prd_orden_trabajo->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('PrdOrdenTrabajo') ?>
        </div>
    <?php endif; ?>

    <?php if (UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_ADM_ACCION_CONFIG_CAMBIAR_PRD_ORDEN_TRABAJO_ESTADO')): ?>
        <div class="uno cambiar-estado" modulo_estado="prd_orden_trabajo_estado">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Cambiar') ?> <?php Lang::_lang('PrdOrdenTrabajoEstado') ?>
        </div>
    <?php endif; ?>
    
    <?php 
    // -------------------------------------------------------------------------
    // acciones personalizadas
    // -------------------------------------------------------------------------    
    if(file_exists("prd_orden_trabajo_db_context_acciones_custom.php")){
        include "prd_orden_trabajo_db_context_acciones_custom.php";
    } 
    ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

