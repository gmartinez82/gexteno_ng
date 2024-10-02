<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ml_attribute_ins_atributo = MlAttributeInsAtributo::getOxId($id);
//Gral::prr($ml_attribute_ins_atributo);
?>

<div class="tabs ficha-ml_attribute_ins_atributo" identificador="<?php echo $ml_attribute_ins_atributo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ml_attribute_ins_atributo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_attribute_ins_atributo->getId()) ?>
            </div>
        </div>

	
        <div class="par ml_attribute_ins_atributo ml_attribute_id">
            <div class="label"><?php Lang::_lang('MlAttribute') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_attribute_ins_atributo->getMlAttribute()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ml_attribute_ins_atributo ins_atributo_id">
            <div class="label"><?php Lang::_lang('InsAtributo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_attribute_ins_atributo->getInsAtributo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ml_attribute_ins_atributo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_attribute_ins_atributo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ml_attribute_ins_atributo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_attribute_ins_atributo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ml_attribute_ins_atributo estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_attribute_ins_atributo->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

