<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$eku_de_g050_g_cam_gen_g_cam_carg = EkuDeG050GCamGenGCamCarg::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getId()) ?>" modulo="eku_de_g050_g_cam_gen_g_cam_carg">

    <div class="titulo">
        <?php Lang::_lang('EkuDeG050GCamGenGCamCarg') ?>: 
        <strong><?php Gral::_echo($eku_de_g050_g_cam_gen_g_cam_carg->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('EKU_DE_G050_G_CAM_GEN_G_CAM_CARG_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('EkuDeG050GCamGenGCamCarg') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

