<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$vta_factura_vta_nota_credito = VtaFacturaVtaNotaCredito::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($vta_factura_vta_nota_credito->getId()) ?>" modulo="vta_factura_vta_nota_credito">

    <div class="titulo">
        <?php Lang::_lang('VtaFacturaVtaNotaCredito') ?>: 
        <strong><?php Gral::_echo($vta_factura_vta_nota_credito->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('VTA_FACTURA_VTA_NOTA_CREDITO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('VtaFacturaVtaNotaCredito') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

