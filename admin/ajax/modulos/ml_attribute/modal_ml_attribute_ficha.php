<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ml_attribute = MlAttribute::getOxId($id);
//Gral::prr($ml_attribute);
?>

<div class="tabs ficha-ml_attribute" identificador="<?php echo $ml_attribute->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ml_attribute id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_attribute->getId()) ?>
            </div>
        </div>

	
        <div class="par ml_attribute descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_attribute->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ml_attribute ml_attribute_type_id">
            <div class="label"><?php Lang::_lang('Ml Attrib Type') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_attribute->getMlAttributeType()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ml_attribute codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_attribute->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ml_attribute codigo_ml">
            <div class="label"><?php Lang::_lang('Codigo ML') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_attribute->getCodigoMl()) ?>
            </div>
        </div>
		
        <div class="par ml_attribute tooltip">
            <div class="label"><?php Lang::_lang('Tooltip') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_attribute->getTooltip()) ?>
            </div>
        </div>
		
        <div class="par ml_attribute observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_attribute->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ml_attribute orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_attribute->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ml_attribute estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_attribute->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

