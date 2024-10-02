<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$id = Gral::getVars(2, 'id');
$ins_stock_resumen = InsStockResumen::getOxId($id);

$ins_insumo = $ins_stock_resumen->getInsInsumo();
$pan_panol = $ins_stock_resumen->getPanPanol();
$ins_stock_resumen_tipo_estado = $ins_stock_resumen->getInsStockResumenTipoEstado();
?>
<div class="datos" ins_stock_resumen_id="<?php Gral::_echo($ins_stock_resumen->getId()) ?>">

    <div class="titulo">
        <?php Lang::_lang('InsInsumo') ?>: <br />
        <strong><?php Gral::_echo($ins_insumo->getDescripcion()) ?></strong>
        <br />
        <?php Lang::_lang('PanPanol') ?>: 
        <strong><?php Gral::_echo($pan_panol->getDescripcion()) ?></strong>
    </div>

    <?php if (UsCredencial::getEsAcreditado('INS_STOCK_RESUMEN_GESTION_ACCION_CONFIG_REGISTRAR_SOLICITUD')) { ?>
        <div class="uno registrar-solicitud">
            <img class="icono" src="imgs/btn_add.png" width="20" align="absmiddle" title="" />
            <?php Lang::_lang('Registrar Solicitud de Stock') ?>
        </div>
    <?php } ?>
    
    <?php if (UsCredencial::getEsAcreditado('INS_STOCK_RESUMEN_GESTION_ACCION_CONFIG_REGISTRAR_AJUSTE')) { ?>
        <div class="uno registrar-ajuste">
            <img class="icono" src="imgs/btn_ajuste.png" width="20" align="absmiddle" title="" />
            <?php Lang::_lang('Registrar Ajuste de Stock') ?>
        </div>
    <?php } ?>


    <br />
</div>