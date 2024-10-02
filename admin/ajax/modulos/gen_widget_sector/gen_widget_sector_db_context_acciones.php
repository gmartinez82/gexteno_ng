<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$gen_widget_sector = GenWidgetSector::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($gen_widget_sector->getId()) ?>" modulo="gen_widget_sector">

    <div class="titulo">
        <?php Lang::_lang('GenWidgetSector') ?>: 
        <strong><?php Gral::_echo($gen_widget_sector->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('GEN_WIDGET_SECTOR_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('GenWidgetSector') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

