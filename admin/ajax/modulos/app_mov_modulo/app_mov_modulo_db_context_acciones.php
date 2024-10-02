<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$app_mov_modulo = AppMovModulo::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($app_mov_modulo->getId()) ?>" modulo="app_mov_modulo">

    <div class="titulo">
        <?php Lang::_lang('AppMovModulo') ?>: 
        <strong><?php Gral::_echo($app_mov_modulo->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('APP_MOV_MODULO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('AppMovModulo') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

