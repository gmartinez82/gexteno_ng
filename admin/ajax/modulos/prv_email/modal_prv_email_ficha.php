<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$prv_email = PrvEmail::getOxId($id);
//Gral::prr($prv_email);
?>

<div class="tabs ficha-prv_email" identificador="<?php echo $prv_email->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par prv_email id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_email->getId()) ?>
            </div>
        </div>

	
        <div class="par prv_email prv_proveedor_id">
            <div class="label"><?php Lang::_lang('PrvProveedor') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_email->getPrvProveedor()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_email descripcion">
            <div class="label"><?php Lang::_lang('Email') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_email->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_email codigo">
            <div class="label"><?php Lang::_lang('codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_email->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par prv_email observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_email->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par prv_email orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_email->getOrden()) ?>
            </div>
        </div>
		
        <div class="par prv_email estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_email->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

