<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$vta_vendedor_valoracion_tipo_item = VtaVendedorValoracionTipoItem::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($vta_vendedor_valoracion_tipo_item->getId()) ?>" modulo="vta_vendedor_valoracion_tipo_item">

    <div class="titulo">
        <?php Lang::_lang('VtaVendedorValoracionTipoItem') ?>: 
        <strong><?php Gral::_echo($vta_vendedor_valoracion_tipo_item->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('VTA_VENDEDOR_VALORACION_TIPO_ITEM_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('VtaVendedorValoracionTipoItem') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

