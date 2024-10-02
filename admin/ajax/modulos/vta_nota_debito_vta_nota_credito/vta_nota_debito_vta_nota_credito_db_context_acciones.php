<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$vta_nota_debito_vta_nota_credito = VtaNotaDebitoVtaNotaCredito::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($vta_nota_debito_vta_nota_credito->getId()) ?>" modulo="vta_nota_debito_vta_nota_credito">

    <div class="titulo">
        <?php Lang::_lang('VtaNotaDebitoVtaNotaCredito') ?>: 
        <strong><?php Gral::_echo($vta_nota_debito_vta_nota_credito->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_VTA_NOTA_CREDITO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('VtaNotaDebitoVtaNotaCredito') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

