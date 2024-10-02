<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$eku_de_e300_g_dtip_d_e_g_cam_a_e = EkuDeE300GDtipDEGCamAE::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getId()) ?>" modulo="eku_de_e300_g_dtip_d_e_g_cam_a_e">

    <div class="titulo">
        <?php Lang::_lang('EkuDeE300GDtipDEGCamAE') ?>: 
        <strong><?php Gral::_echo($eku_de_e300_g_dtip_d_e_g_cam_a_e->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('EKU_DE_E300_G_DTIP_D_E_G_CAM_A_E_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('EkuDeE300GDtipDEGCamAE') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

