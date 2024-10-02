<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$eku_de_j001_g_cam_fu_f_d = EkuDeJ001GCamFuFD::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($eku_de_j001_g_cam_fu_f_d->getId()) ?>" modulo="eku_de_j001_g_cam_fu_f_d">

    <div class="titulo">
        <?php Lang::_lang('EkuDeJ001GCamFuFD') ?>: 
        <strong><?php Gral::_echo($eku_de_j001_g_cam_fu_f_d->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('EKU_DE_J001_G_CAM_FU_F_D_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('EkuDeJ001GCamFuFD') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

