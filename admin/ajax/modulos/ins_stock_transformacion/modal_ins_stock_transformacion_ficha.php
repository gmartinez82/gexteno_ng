<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ins_stock_transformacion = InsStockTransformacion::getOxId($id);
//Gral::prr($ins_stock_transformacion);
?>

<div class="tabs ficha-ins_stock_transformacion" identificador="<?php echo $ins_stock_transformacion->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ins_stock_transformacion id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_transformacion->getId()) ?>
            </div>
        </div>

	
        <div class="par ins_stock_transformacion descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_transformacion->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_transformacion ins_insumo_id">
            <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_transformacion->getInsInsumo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_transformacion pan_panol_id">
            <div class="label"><?php Lang::_lang('PanPanol') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_transformacion->getPanPanol()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_transformacion codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_transformacion->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_transformacion cantidad">
            <div class="label"><?php Lang::_lang('Cantidad') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_transformacion->getCantidad()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_transformacion observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_transformacion->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_transformacion orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_transformacion->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_transformacion estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_transformacion->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

