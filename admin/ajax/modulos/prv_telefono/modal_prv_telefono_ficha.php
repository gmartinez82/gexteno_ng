<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$prv_telefono = PrvTelefono::getOxId($id);
//Gral::prr($prv_telefono);
?>

<div class="tabs ficha-prv_telefono" identificador="<?php echo $prv_telefono->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par prv_telefono id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_telefono->getId()) ?>
            </div>
        </div>

	
        <div class="par prv_telefono prv_proveedor_id">
            <div class="label"><?php Lang::_lang('PrvProveedor') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_telefono->getPrvProveedor()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_telefono prv_telefono_tipo_id">
            <div class="label"><?php Lang::_lang('PrvTelefonoTipo') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_telefono->getPrvTelefonoTipo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_telefono descripcion">
            <div class="label"><?php Lang::_lang('descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_telefono->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_telefono geo_pais_id">
            <div class="label"><?php Lang::_lang('GeoPais') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_telefono->getGeoPais()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_telefono codigo">
            <div class="label"><?php Lang::_lang('Cod Area') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_telefono->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par prv_telefono telefono">
            <div class="label"><?php Lang::_lang('Telefono') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_telefono->getTelefono()) ?>
            </div>
        </div>
		
        <div class="par prv_telefono observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_telefono->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par prv_telefono orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_telefono->getOrden()) ?>
            </div>
        </div>
		
        <div class="par prv_telefono estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_telefono->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

