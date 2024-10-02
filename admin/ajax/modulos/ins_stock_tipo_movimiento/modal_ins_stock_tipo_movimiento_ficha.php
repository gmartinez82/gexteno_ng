<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ins_stock_tipo_movimiento = InsStockTipoMovimiento::getOxId($id);
//Gral::prr($ins_stock_tipo_movimiento);
?>

<div class="tabs ficha-ins_stock_tipo_movimiento" identificador="<?php echo $ins_stock_tipo_movimiento->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ins_stock_tipo_movimiento id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_tipo_movimiento->getId()) ?>
            </div>
        </div>

	
        <div class="par ins_stock_tipo_movimiento descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_tipo_movimiento->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_tipo_movimiento codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_tipo_movimiento->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_tipo_movimiento suma">
            <div class="label"><?php Lang::_lang('Suma') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($ins_stock_tipo_movimiento->getSuma())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_tipo_movimiento observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_tipo_movimiento->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_tipo_movimiento orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_tipo_movimiento->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_tipo_movimiento estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_tipo_movimiento->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

