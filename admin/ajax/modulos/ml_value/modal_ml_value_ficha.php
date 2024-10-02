<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ml_value = MlValue::getOxId($id);
//Gral::prr($ml_value);
?>

<div class="tabs ficha-ml_value" identificador="<?php echo $ml_value->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ml_value id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_value->getId()) ?>
            </div>
        </div>

	
        <div class="par ml_value descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_value->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ml_value codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_value->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ml_value codigo_ml">
            <div class="label"><?php Lang::_lang('Codigo ML') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_value->getCodigoMl()) ?>
            </div>
        </div>
		
        <div class="par ml_value observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_value->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ml_value orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_value->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ml_value estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_value->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

