<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent = EkuDeE940GDtipDEGTranspGCamEnt::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getId()) ?>" modulo="eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent">

    <div class="titulo">
        <?php Lang::_lang('EkuDeE940GDtipDEGTranspGCamEnt') ?>: 
        <strong><?php Gral::_echo($eku_de_e940_g_dtip_d_e_g_transp_g_cam_ent->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('EKU_DE_E940_G_DTIP_D_E_G_TRANSP_G_CAM_ENT_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('EkuDeE940GDtipDEGTranspGCamEnt') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

