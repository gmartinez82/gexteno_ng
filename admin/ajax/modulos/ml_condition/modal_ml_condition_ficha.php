<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ml_condition = MlCondition::getOxId($id);
//Gral::prr($ml_condition);
?>

<div class="tabs ficha-ml_condition" identificador="<?php echo $ml_condition->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ml_condition id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_condition->getId()) ?>
            </div>
        </div>

	
        <div class="par ml_condition descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_condition->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ml_condition codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_condition->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ml_condition codigo_ml">
            <div class="label"><?php Lang::_lang('Codigo ML') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_condition->getCodigoMl()) ?>
            </div>
        </div>
		
        <div class="par ml_condition observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_condition->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ml_condition orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_condition->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ml_condition estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_condition->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

