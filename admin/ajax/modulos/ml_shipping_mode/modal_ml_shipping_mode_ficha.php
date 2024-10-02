<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ml_shipping_mode = MlShippingMode::getOxId($id);
//Gral::prr($ml_shipping_mode);
?>

<div class="tabs ficha-ml_shipping_mode" identificador="<?php echo $ml_shipping_mode->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ml_shipping_mode id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_shipping_mode->getId()) ?>
            </div>
        </div>

	
        <div class="par ml_shipping_mode descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_shipping_mode->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ml_shipping_mode codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_shipping_mode->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ml_shipping_mode codigo_ml">
            <div class="label"><?php Lang::_lang('Codigo ML') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_shipping_mode->getCodigoMl()) ?>
            </div>
        </div>
		
        <div class="par ml_shipping_mode observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_shipping_mode->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ml_shipping_mode orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_shipping_mode->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ml_shipping_mode estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_shipping_mode->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

