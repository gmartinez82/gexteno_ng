<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$eku_de_c001_g_timb = EkuDeC001GTimb::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($eku_de_c001_g_timb->getId()) ?>" modulo="eku_de_c001_g_timb">

    <div class="titulo">
        <?php Lang::_lang('EkuDeC001GTimb') ?>: 
        <strong><?php Gral::_echo($eku_de_c001_g_timb->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('EKU_DE_C001_G_TIMB_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('EkuDeC001GTimb') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

