<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ins_stock_resumen = InsStockResumen::getOxId($id);
//Gral::prr($ins_stock_resumen);
?>

<div class="tabs ficha-ins_stock_resumen" identificador="<?php echo $ins_stock_resumen->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ins_stock_resumen id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_resumen->getId()) ?>
            </div>
        </div>

	
        <div class="par ins_stock_resumen descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_resumen->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_resumen ins_stock_resumen_tipo_estado_id">
            <div class="label"><?php Lang::_lang('InsStockResumenTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_resumen->getInsStockResumenTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_resumen ins_insumo_id">
            <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_resumen->getInsInsumo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_resumen pan_panol_id">
            <div class="label"><?php Lang::_lang('PanPanol') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_resumen->getPanPanol()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_resumen codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_resumen->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_resumen cantidad">
            <div class="label"><?php Lang::_lang('Cantidad') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_resumen->getCantidad()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_resumen cantidad_real">
            <div class="label"><?php Lang::_lang('Cantidad Real') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_resumen->getCantidadReal()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_resumen cantidad_comprometida">
            <div class="label"><?php Lang::_lang('Cantidad Comprometida') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_resumen->getCantidadComprometida()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_resumen cantidad_pasivo">
            <div class="label"><?php Lang::_lang('Cant Pasivo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_resumen->getCantidadPasivo()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_resumen observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_resumen->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_resumen orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_resumen->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_resumen estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_resumen->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

