<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ml_value_ins_marca = MlValueInsMarca::getOxId($id);
//Gral::prr($ml_value_ins_marca);
?>

<div class="tabs ficha-ml_value_ins_marca" identificador="<?php echo $ml_value_ins_marca->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ml_value_ins_marca id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_value_ins_marca->getId()) ?>
            </div>
        </div>

	
        <div class="par ml_value_ins_marca ml_value_id">
            <div class="label"><?php Lang::_lang('MlValue') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_value_ins_marca->getMlValue()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ml_value_ins_marca ins_marca_id">
            <div class="label"><?php Lang::_lang('InsMarca') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_value_ins_marca->getInsMarca()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ml_value_ins_marca observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_value_ins_marca->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ml_value_ins_marca orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_value_ins_marca->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ml_value_ins_marca estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_value_ins_marca->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

