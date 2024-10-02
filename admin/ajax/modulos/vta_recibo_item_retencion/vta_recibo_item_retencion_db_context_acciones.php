<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$vta_recibo_item_retencion = VtaReciboItemRetencion::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($vta_recibo_item_retencion->getId()) ?>" modulo="vta_recibo_item_retencion">

    <div class="titulo">
        <?php Lang::_lang('VtaReciboItemRetencion') ?>: 
        <strong><?php Gral::_echo($vta_recibo_item_retencion->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('VTA_RECIBO_ITEM_RETENCION_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('VtaReciboItemRetencion') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

