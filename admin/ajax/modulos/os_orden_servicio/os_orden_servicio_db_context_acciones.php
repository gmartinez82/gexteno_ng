<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$os_orden_servicio = OsOrdenServicio::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($os_orden_servicio->getId()) ?>" modulo="os_orden_servicio">

    <div class="titulo">
        <?php Lang::_lang('OsOrdenServicio') ?>: 
        <strong><?php Gral::_echo($os_orden_servicio->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('OS_ORDEN_SERVICIO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('OsOrdenServicio') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

