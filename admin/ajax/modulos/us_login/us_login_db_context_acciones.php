<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$us_login = UsLogin::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($us_login->getId()) ?>" modulo="us_login">

    <div class="titulo">
        <?php Lang::_lang('UsLogin') ?>: 
        <strong><?php Gral::_echo($us_login->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('US_LOGIN_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('UsLogin') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

