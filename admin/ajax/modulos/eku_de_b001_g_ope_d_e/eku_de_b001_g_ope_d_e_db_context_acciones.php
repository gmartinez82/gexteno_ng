<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$eku_de_b001_g_ope_d_e = EkuDeB001GOpeDE::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($eku_de_b001_g_ope_d_e->getId()) ?>" modulo="eku_de_b001_g_ope_d_e">

    <div class="titulo">
        <?php Lang::_lang('EkuDeB001GOpeDE') ?>: 
        <strong><?php Gral::_echo($eku_de_b001_g_ope_d_e->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('EKU_DE_B001_G_OPE_D_E_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('EkuDeB001GOpeDE') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

