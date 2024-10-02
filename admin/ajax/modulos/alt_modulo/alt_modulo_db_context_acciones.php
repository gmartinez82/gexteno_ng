<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$alt_modulo = AltModulo::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($alt_modulo->getId()) ?>" modulo="alt_modulo">

    <div class="titulo">
        <?php Lang::_lang('AltModulo') ?>: 
        <strong><?php Gral::_echo($alt_modulo->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('ALT_MODULO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('AltModulo') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

