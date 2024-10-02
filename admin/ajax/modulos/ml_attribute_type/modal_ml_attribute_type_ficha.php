<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ml_attribute_type = MlAttributeType::getOxId($id);
//Gral::prr($ml_attribute_type);
?>

<div class="tabs ficha-ml_attribute_type" identificador="<?php echo $ml_attribute_type->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ml_attribute_type id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_attribute_type->getId()) ?>
            </div>
        </div>

	
        <div class="par ml_attribute_type descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_attribute_type->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ml_attribute_type codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_attribute_type->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ml_attribute_type codigo_ml">
            <div class="label"><?php Lang::_lang('Codigo ML') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_attribute_type->getCodigoMl()) ?>
            </div>
        </div>
		
        <div class="par ml_attribute_type observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_attribute_type->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ml_attribute_type orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_attribute_type->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ml_attribute_type estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_attribute_type->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

