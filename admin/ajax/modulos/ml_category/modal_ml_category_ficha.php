<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ml_category = MlCategory::getOxId($id);
//Gral::prr($ml_category);
?>

<div class="tabs ficha-ml_category" identificador="<?php echo $ml_category->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ml_category id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_category->getId()) ?>
            </div>
        </div>

	
        <div class="par ml_category descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_category->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ml_category codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_category->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ml_category codigo_ml">
            <div class="label"><?php Lang::_lang('Codigo ML') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_category->getCodigoMl()) ?>
            </div>
        </div>
		
        <div class="par ml_category ml_dimensions">
            <div class="label"><?php Lang::_lang('ML Dimensions') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_category->getMlDimensions()) ?>
            </div>
        </div>
		
        <div class="par ml_category observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_category->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ml_category orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_category->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ml_category estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_category->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

