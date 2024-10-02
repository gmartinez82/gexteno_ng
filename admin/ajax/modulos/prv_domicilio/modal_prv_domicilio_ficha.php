<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$prv_domicilio = PrvDomicilio::getOxId($id);
//Gral::prr($prv_domicilio);
?>

<div class="tabs ficha-prv_domicilio" identificador="<?php echo $prv_domicilio->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par prv_domicilio id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_domicilio->getId()) ?>
            </div>
        </div>

	
        <div class="par prv_domicilio prv_proveedor_id">
            <div class="label"><?php Lang::_lang('PrvProveedor') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_domicilio->getPrvProveedor()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_domicilio descripcion">
            <div class="label"><?php Lang::_lang('Domicilio') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_domicilio->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_domicilio codigo">
            <div class="label"><?php Lang::_lang('codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_domicilio->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par prv_domicilio observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_domicilio->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par prv_domicilio orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_domicilio->getOrden()) ?>
            </div>
        </div>
		
        <div class="par prv_domicilio estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_domicilio->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

