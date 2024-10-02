<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ins_insumo_costo = InsInsumoCosto::getOxId($id);
//Gral::prr($ins_insumo_costo);
?>

<div class="tabs ficha-ins_insumo_costo" identificador="<?php echo $ins_insumo_costo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ins_insumo_costo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_costo->getId()) ?>
            </div>
        </div>

	
        <div class="par ins_insumo_costo ins_insumo_id">
            <div class="label"><?php Lang::_lang('InsInsumo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_costo->getInsInsumo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_costo prv_proveedor_id">
            <div class="label"><?php Lang::_lang('PrvProveedor') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_costo->getPrvProveedor()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_costo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_costo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_costo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_costo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_costo fecha">
            <div class="label"><?php Lang::_lang('Fecha') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaHoraToWeb($ins_insumo_costo->getFecha())) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_costo costo">
            <div class="label"><?php Lang::_lang('Costo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_costo->getCosto()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_costo inicial">
            <div class="label"><?php Lang::_lang('Inicial') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($ins_insumo_costo->getInicial())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_costo actual">
            <div class="label"><?php Lang::_lang('Actual') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($ins_insumo_costo->getActual())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_costo prv_importacion_id">
            <div class="label"><?php Lang::_lang('PrvImportacion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_costo->getPrvImportacion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_costo ins_stock_transformacion_id">
            <div class="label"><?php Lang::_lang('InsStockTransformacion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_costo->getInsStockTransformacion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_costo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_costo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_costo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_costo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ins_insumo_costo estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_insumo_costo->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

