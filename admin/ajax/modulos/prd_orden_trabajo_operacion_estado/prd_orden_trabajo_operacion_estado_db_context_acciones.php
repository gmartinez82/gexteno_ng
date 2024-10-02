<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$prd_orden_trabajo_operacion_estado = PrdOrdenTrabajoOperacionEstado::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($prd_orden_trabajo_operacion_estado->getId()) ?>" modulo="prd_orden_trabajo_operacion_estado">

    <div class="titulo">
        <?php Lang::_lang('PrdOrdenTrabajoOperacionEstado') ?>: 
        <strong><?php Gral::_echo($prd_orden_trabajo_operacion_estado->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('PRD_ORDEN_TRABAJO_OPERACION_ESTADO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('PrdOrdenTrabajoOperacionEstado') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

