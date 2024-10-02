<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$ctrl_sector = CtrlSector::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($ctrl_sector->getId()) ?>" modulo="ctrl_sector">

    <div class="titulo">
        <?php Lang::_lang('CtrlSector') ?>: 
        <strong><?php Gral::_echo($ctrl_sector->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('CTRL_SECTOR_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('CtrlSector') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

