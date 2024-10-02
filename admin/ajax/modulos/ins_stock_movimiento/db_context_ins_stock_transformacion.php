<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$ins_stock_movimiento_id = Gral::getVars(2, 'ins_stock_movimiento_id');
$ins_stock_movimiento = InsStockMovimiento::getOxId($ins_stock_movimiento_id);
$ins_stock_transformacion = $ins_stock_movimiento->getInsStockTransformacion();

?>
<div class="datos" id="<?php Gral::_echo($ins_stock_transformacion->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('InsStockTransformacion') ?>: 
        <strong><?php Gral::_echo($ins_stock_transformacion->getId()) ?> - <?php Gral::_echo($ins_stock_transformacion->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="ins_stock_transformacion_alta.php?id=<?php echo($ins_stock_transformacion->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('InsStockTransformacion') ?>: <strong><?php Gral::_echo($ins_stock_transformacion->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo InsStockMovimiento::getFiltrosArrGral() ?>&arr=<?php echo $ins_stock_movimiento->getFiltrosArrXCampo('InsStockTransformacion', 'ins_stock_transformacion_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('InsStockMovimientos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($ins_stock_transformacion->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

