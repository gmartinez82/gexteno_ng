<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$app_mov_version = AppMovVersion::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($app_mov_version->getId()) ?>" modulo="app_mov_version">

    <div class="titulo">
        <?php Lang::_lang('AppMovVersion') ?>: 
        <strong><?php Gral::_echo($app_mov_version->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('APP_MOV_VERSION_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('AppMovVersion') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

