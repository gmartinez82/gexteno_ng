<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ins_stock_resumen_estado = InsStockResumenEstado::getOxId($id);
//Gral::prr($ins_stock_resumen_estado);
?>

<div class="tabs ficha-ins_stock_resumen_estado" identificador="<?php echo $ins_stock_resumen_estado->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ins_stock_resumen_estado id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_resumen_estado->getId()) ?>
            </div>
        </div>

	
        <div class="par ins_stock_resumen_estado ins_stock_resumen_id">
            <div class="label"><?php Lang::_lang('InsStockResumen') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_resumen_estado->getInsStockResumen()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_resumen_estado ins_stock_resumen_tipo_estado_id">
            <div class="label"><?php Lang::_lang('InsStockResumenTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_resumen_estado->getInsStockResumenTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_resumen_estado inicial">
            <div class="label"><?php Lang::_lang('Inicial') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($ins_stock_resumen_estado->getInicial())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_resumen_estado actual">
            <div class="label"><?php Lang::_lang('Actual') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($ins_stock_resumen_estado->getActual())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_resumen_estado observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_resumen_estado->getObservacion()) ?>
            </div>
        </div>
	
    </div>    

</div>

