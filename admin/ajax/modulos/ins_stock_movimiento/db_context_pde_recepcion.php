<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$ins_stock_movimiento_id = Gral::getVars(2, 'ins_stock_movimiento_id');
$ins_stock_movimiento = InsStockMovimiento::getOxId($ins_stock_movimiento_id);
$pde_recepcion = $ins_stock_movimiento->getPdeRecepcion();

?>
<div class="datos" id="<?php Gral::_echo($pde_recepcion->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('PdeRecepcion') ?>: 
        <strong><?php Gral::_echo($pde_recepcion->getId()) ?> - <?php Gral::_echo($pde_recepcion->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="pde_recepcion_alta.php?id=<?php echo($pde_recepcion->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('PdeRecepcion') ?>: <strong><?php Gral::_echo($pde_recepcion->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo InsStockMovimiento::getFiltrosArrGral() ?>&arr=<?php echo $ins_stock_movimiento->getFiltrosArrXCampo('PdeRecepcion', 'pde_recepcion_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('InsStockMovimientos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($pde_recepcion->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

