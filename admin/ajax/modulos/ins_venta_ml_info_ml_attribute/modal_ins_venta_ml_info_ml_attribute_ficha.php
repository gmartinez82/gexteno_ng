<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ins_venta_ml_info_ml_attribute = InsVentaMlInfoMlAttribute::getOxId($id);
//Gral::prr($ins_venta_ml_info_ml_attribute);
?>

<div class="tabs ficha-ins_venta_ml_info_ml_attribute" identificador="<?php echo $ins_venta_ml_info_ml_attribute->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ins_venta_ml_info_ml_attribute id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_ml_info_ml_attribute->getId()) ?>
            </div>
        </div>

	
        <div class="par ins_venta_ml_info_ml_attribute ins_venta_ml_info_id">
            <div class="label"><?php Lang::_lang('InsVentaMlInfo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_ml_info_ml_attribute->getInsVentaMlInfo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_venta_ml_info_ml_attribute ml_attribute_id">
            <div class="label"><?php Lang::_lang('MlAttribute') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_ml_info_ml_attribute->getMlAttribute()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_venta_ml_info_ml_attribute ml_value_id">
            <div class="label"><?php Lang::_lang('MlValue') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_ml_info_ml_attribute->getMlValue()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ins_venta_ml_info_ml_attribute ml_value_valor">
            <div class="label"><?php Lang::_lang('ML Value Valor') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_ml_info_ml_attribute->getMlValueValor()) ?>
            </div>
        </div>
		
        <div class="par ins_venta_ml_info_ml_attribute observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_ml_info_ml_attribute->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ins_venta_ml_info_ml_attribute orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_ml_info_ml_attribute->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ins_venta_ml_info_ml_attribute estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ins_venta_ml_info_ml_attribute->getObservacion()) ?>
            </div>
        </div>
	
    </div>    

</div>

