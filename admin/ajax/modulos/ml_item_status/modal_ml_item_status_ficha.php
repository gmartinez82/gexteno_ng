<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$ml_item_status = MlItemStatus::getOxId($id);
//Gral::prr($ml_item_status);
?>

<div class="tabs ficha-ml_item_status" identificador="<?php echo $ml_item_status->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par ml_item_status id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_item_status->getId()) ?>
            </div>
        </div>

	
        <div class="par ml_item_status descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_item_status->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ml_item_status codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_item_status->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par ml_item_status codigo_ml">
            <div class="label"><?php Lang::_lang('Codigo ML') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_item_status->getCodigoMl()) ?>
            </div>
        </div>
		
        <div class="par ml_item_status activo">
            <div class="label"><?php Lang::_lang('Activo') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($ml_item_status->getActivo())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ml_item_status inactivo">
            <div class="label"><?php Lang::_lang('Inactivo') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($ml_item_status->getInactivo())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ml_item_status requiere_atencion">
            <div class="label"><?php Lang::_lang('Req Atencion') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($ml_item_status->getRequiereAtencion())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par ml_item_status observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_item_status->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par ml_item_status orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_item_status->getOrden()) ?>
            </div>
        </div>
		
        <div class="par ml_item_status estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($ml_item_status->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

