<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ins_stock_resumen_tipo_estado = InsStockResumenTipoEstado::getOxId($id);
//Gral::prr($ins_stock_resumen_tipo_estado);
?>

<div class="tabs ficha-ins_stock_resumen_tipo_estado" identificador="<?php echo $ins_stock_resumen_tipo_estado->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ins_stock_resumen_tipo_estado id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_resumen_tipo_estado->getId()) ?>
            </div>
        </div>

	
        <div class="par ins_stock_resumen_tipo_estado descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_resumen_tipo_estado->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_resumen_tipo_estado codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_resumen_tipo_estado->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_resumen_tipo_estado requiere_reabastecimiento">
            <div class="label"><?php Lang::_lang('Req Reabast') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($ins_stock_resumen_tipo_estado->getRequiereReabastecimiento())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_resumen_tipo_estado observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_resumen_tipo_estado->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_resumen_tipo_estado orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_resumen_tipo_estado->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ins_stock_resumen_tipo_estado estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_stock_resumen_tipo_estado->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

