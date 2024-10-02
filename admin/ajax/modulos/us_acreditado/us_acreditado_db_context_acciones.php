<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$us_acreditado = UsAcreditado::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($us_acreditado->getId()) ?>" modulo="us_acreditado">

    <div class="titulo">
        <?php Lang::_lang('UsAcreditado') ?>: 
        <strong><?php Gral::_echo($us_acreditado->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('US_ACREDITADO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('UsAcreditado') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

