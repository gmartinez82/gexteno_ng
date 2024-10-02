<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$fnd_cajero = FndCajero::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($fnd_cajero->getId()) ?>" modulo="fnd_cajero">

    <div class="titulo">
        <?php Lang::_lang('FndCajero') ?>: 
        <strong><?php Gral::_echo($fnd_cajero->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('FND_CAJERO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('FndCajero') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

