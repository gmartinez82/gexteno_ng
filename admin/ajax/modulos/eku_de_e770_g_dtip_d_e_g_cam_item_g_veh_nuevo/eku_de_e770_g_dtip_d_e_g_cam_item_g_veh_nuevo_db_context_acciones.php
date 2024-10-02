<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo = EkuDeE770GDtipDEGCamItemGVehNuevo::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getId()) ?>" modulo="eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo">

    <div class="titulo">
        <?php Lang::_lang('EkuDeE770GDtipDEGCamItemGVehNuevo') ?>: 
        <strong><?php Gral::_echo($eku_de_e770_g_dtip_d_e_g_cam_item_g_veh_nuevo->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('EKU_DE_E770_G_DTIP_D_E_G_CAM_ITEM_G_VEH_NUEVO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('EkuDeE770GDtipDEGCamItemGVehNuevo') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

