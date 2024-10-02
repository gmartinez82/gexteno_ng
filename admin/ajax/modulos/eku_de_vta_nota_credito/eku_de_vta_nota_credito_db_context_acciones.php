<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$eku_de_vta_nota_credito = EkuDeVtaNotaCredito::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($eku_de_vta_nota_credito->getId()) ?>" modulo="eku_de_vta_nota_credito">

    <div class="titulo">
        <?php Lang::_lang('EkuDeVtaNotaCredito') ?>: 
        <strong><?php Gral::_echo($eku_de_vta_nota_credito->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('EKU_DE_VTA_NOTA_CREDITO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('EkuDeVtaNotaCredito') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

