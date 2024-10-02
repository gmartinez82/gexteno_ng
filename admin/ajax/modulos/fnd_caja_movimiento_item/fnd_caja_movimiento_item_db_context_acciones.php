<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$fnd_caja_movimiento_item = FndCajaMovimientoItem::getOxId($id);

?>
<div class="datos" identificador="<?php Gral::_echo($fnd_caja_movimiento_item->getId()) ?>" modulo="fnd_caja_movimiento_item">

    <div class="titulo">
        <?php Lang::_lang('FndCajaMovimientoItem') ?>: 
        <strong><?php Gral::_echo($fnd_caja_movimiento_item->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('FND_CAJA_MOVIMIENTO_ITEM_ADM_ACCION_CONFIG_DUPLICAR')): ?>
        <div class="uno duplicar">
            <img class="icono" src="imgs/btn_add.png" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Duplicar') ?> <?php Lang::_lang('FndCajaMovimientoItem') ?>
        </div>
    <?php endif; ?>

    <br />
</div> 
<script>
    setInitAdm();
    setInit();
</script>

