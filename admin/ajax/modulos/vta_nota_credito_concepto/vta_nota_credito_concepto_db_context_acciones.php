<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$vta_nota_credito_concepto = VtaNotaCreditoConcepto::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($vta_nota_credito_concepto->getId()) ?>" modulo="vta_nota_credito_concepto">

    <div class="titulo">
        <?php Lang::_lang('VtaNotaCreditoConcepto') ?>: 
        <strong><?php Gral::_echo($vta_nota_credito_concepto->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_CONCEPTO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('VtaNotaCreditoConcepto') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

