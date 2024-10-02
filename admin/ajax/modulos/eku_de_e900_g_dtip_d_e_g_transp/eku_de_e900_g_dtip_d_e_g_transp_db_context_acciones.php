<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$eku_de_e900_g_dtip_d_e_g_transp = EkuDeE900GDtipDEGTransp::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($eku_de_e900_g_dtip_d_e_g_transp->getId()) ?>" modulo="eku_de_e900_g_dtip_d_e_g_transp">

    <div class="titulo">
        <?php Lang::_lang('EkuDeE900GDtipDEGTransp') ?>: 
        <strong><?php Gral::_echo($eku_de_e900_g_dtip_d_e_g_transp->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('EKU_DE_E900_G_DTIP_D_E_G_TRANSP_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('EkuDeE900GDtipDEGTransp') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

