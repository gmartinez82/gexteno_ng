<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ml_attribute_ml_value = MlAttributeMlValue::getOxId($id);
//Gral::prr($ml_attribute_ml_value);
?>

<div class="tabs ficha-ml_attribute_ml_value" identificador="<?php echo $ml_attribute_ml_value->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ml_attribute_ml_value id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_attribute_ml_value->getId()) ?>
            </div>
        </div>

	
        <div class="par ml_attribute_ml_value ml_attribute_id">
            <div class="label"><?php Lang::_lang('MlAttribute') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_attribute_ml_value->getMlAttribute()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ml_attribute_ml_value ml_value_id">
            <div class="label"><?php Lang::_lang('MlValue') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_attribute_ml_value->getMlValue()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ml_attribute_ml_value observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_attribute_ml_value->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ml_attribute_ml_value orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_attribute_ml_value->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ml_attribute_ml_value estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_attribute_ml_value->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

