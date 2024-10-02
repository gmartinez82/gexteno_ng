<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$os_tipo = OsTipo::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($os_tipo->getId()) ?>" modulo="os_tipo">

    <div class="titulo">
        <?php Lang::_lang('OsTipo') ?>: 
        <strong><?php Gral::_echo($os_tipo->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('OS_TIPO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('OsTipo') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

