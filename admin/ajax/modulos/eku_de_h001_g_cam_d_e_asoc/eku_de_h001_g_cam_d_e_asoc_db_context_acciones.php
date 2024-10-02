<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$eku_de_h001_g_cam_d_e_asoc = EkuDeH001GCamDEAsoc::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getId()) ?>" modulo="eku_de_h001_g_cam_d_e_asoc">

    <div class="titulo">
        <?php Lang::_lang('EkuDeH001GCamDEAsoc') ?>: 
        <strong><?php Gral::_echo($eku_de_h001_g_cam_d_e_asoc->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('EKU_DE_H001_G_CAM_D_E_ASOC_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('EkuDeH001GCamDEAsoc') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

