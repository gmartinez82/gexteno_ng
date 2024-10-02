<?php
include '_autoload.php';
$user = UsUsuario::autenticado();

$ins_stock_resumen_id = Gral::getVars(2, 'ins_stock_resumen_id');
$ins_stock_resumen = InsStockResumen::getOxId($ins_stock_resumen_id);
$pan_panol = $ins_stock_resumen->getPanPanol();

?>
<div class="datos" id="<?php Gral::_echo($pan_panol->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PanPanol') ?>: 
        <strong><?php Gral::_echo($pan_panol->getId()) ?> - <?php Gral::_echo($pan_panol->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="pan_panol_alta.php?id=<?php echo($pan_panol->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PanPanol') ?>: <strong><?php Gral::_echo($pan_panol->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo InsStockResumen::getFiltrosArrGral() ?>&arr=<?php echo $ins_stock_resumen->getFiltrosArrXCampo('PanPanol', 'pan_panol_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('InsStockResumens') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($pan_panol->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

