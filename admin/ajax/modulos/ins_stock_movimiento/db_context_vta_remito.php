<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$ins_stock_movimiento_id = Gral::getVars(2, 'ins_stock_movimiento_id');
$ins_stock_movimiento = InsStockMovimiento::getOxId($ins_stock_movimiento_id);
$vta_remito = $ins_stock_movimiento->getVtaRemito();

?>
<div class="datos" id="<?php Gral::_echo($vta_remito->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('VtaRemito') ?>: 
        <strong><?php Gral::_echo($vta_remito->getId()) ?> - <?php Gral::_echo($vta_remito->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="vta_remito_alta.php?id=<?php echo($vta_remito->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('VtaRemito') ?>: <strong><?php Gral::_echo($vta_remito->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo InsStockMovimiento::getFiltrosArrGral() ?>&arr=<?php echo $ins_stock_movimiento->getFiltrosArrXCampo('VtaRemito', 'vta_remito_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('InsStockMovimientos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($vta_remito->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

