<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$alt_control_us_usuario = AltControlUsUsuario::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($alt_control_us_usuario->getId()) ?>" modulo="alt_control_us_usuario">

    <div class="titulo">
        <?php Lang::_lang('AltControlUsUsuario') ?>: 
        <strong><?php Gral::_echo($alt_control_us_usuario->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('ALT_CONTROL_US_USUARIO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('AltControlUsUsuario') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

