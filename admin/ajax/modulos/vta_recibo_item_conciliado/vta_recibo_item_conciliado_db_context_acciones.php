<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$vta_recibo_item_conciliado = VtaReciboItemConciliado::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($vta_recibo_item_conciliado->getId()) ?>" modulo="vta_recibo_item_conciliado">

    <div class="titulo">
        <?php Lang::_lang('VtaReciboItemConciliado') ?>: 
        <strong><?php Gral::_echo($vta_recibo_item_conciliado->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('VTA_RECIBO_ITEM_CONCILIADO_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('VtaReciboItemConciliado') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

