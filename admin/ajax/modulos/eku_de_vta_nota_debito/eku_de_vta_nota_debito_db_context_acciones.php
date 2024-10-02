<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$eku_de_vta_nota_debito = EkuDeVtaNotaDebito::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($eku_de_vta_nota_debito->getId()) ?>" modulo="eku_de_vta_nota_debito">

    <div class="titulo">
        <?php Lang::_lang('EkuDeVtaNotaDebito') ?>: 
        <strong><?php Gral::_echo($eku_de_vta_nota_debito->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('EKU_DE_VTA_NOTA_DEBITO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('EkuDeVtaNotaDebito') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

