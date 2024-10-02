<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ml_category_ml_attribute = MlCategoryMlAttribute::getOxId($id);
//Gral::prr($ml_category_ml_attribute);
?>

<div class="tabs ficha-ml_category_ml_attribute" identificador="<?php echo $ml_category_ml_attribute->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ml_category_ml_attribute id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_category_ml_attribute->getId()) ?>
            </div>
        </div>

	
        <div class="par ml_category_ml_attribute ml_category_id">
            <div class="label"><?php Lang::_lang('MlCategory') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_category_ml_attribute->getMlCategory()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ml_category_ml_attribute ml_attribute_id">
            <div class="label"><?php Lang::_lang('MlAttribute') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_category_ml_attribute->getMlAttribute()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ml_category_ml_attribute ml_relevance">
            <div class="label"><?php Lang::_lang('ML Relevance') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_category_ml_attribute->getMlRelevance()) ?>
            </div>
        </div>
		
        <div class="par ml_category_ml_attribute observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_category_ml_attribute->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ml_category_ml_attribute orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_category_ml_attribute->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ml_category_ml_attribute estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_category_ml_attribute->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

