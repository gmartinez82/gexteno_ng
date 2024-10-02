<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ins_stock_transformacion_destino = InsStockTransformacionDestino::getOxId($id);
//Gral::prr($ins_stock_transformacion_destino);
?>

<div class="tabs ficha-ins_stock_transformacion_destino" identificador="<?php echo $ins_stock_transformacion_destino->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ins_stock_transformacion_destino id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_transformacion_destino->getId()) ?>
            </div>
        </div>

	
        <div class="par ins_stock_transformacion_destino descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_transformacion_destino->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_transformacion_destino ins_stock_transformacion_id">
            <div class="label"><?php Lang::_lang('InsStockTransformacion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_transformacion_destino->getInsStockTransformacion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_transformacion_destino ins_insumo_id">
            <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_transformacion_destino->getInsInsumo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_transformacion_destino pan_panol_id">
            <div class="label"><?php Lang::_lang('PanPanol') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_transformacion_destino->getPanPanol()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_transformacion_destino codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_transformacion_destino->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_transformacion_destino cantidad">
            <div class="label"><?php Lang::_lang('Cantidad') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_transformacion_destino->getCantidad()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_transformacion_destino observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_transformacion_destino->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_transformacion_destino orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_transformacion_destino->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_transformacion_destino estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_transformacion_destino->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

