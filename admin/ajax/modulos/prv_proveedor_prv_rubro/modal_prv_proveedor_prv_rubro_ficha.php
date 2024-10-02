<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$prv_proveedor_prv_rubro = PrvProveedorPrvRubro::getOxId($id);
//Gral::prr($prv_proveedor_prv_rubro);
?>

<div class="tabs ficha-prv_proveedor_prv_rubro" identificador="<?php echo $prv_proveedor_prv_rubro->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par prv_proveedor_prv_rubro id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_proveedor_prv_rubro->getId()) ?>
            </div>
        </div>

	
        <div class="par prv_proveedor_prv_rubro prv_proveedor_id">
            <div class="label"><?php Lang::_lang('PrvProveedor') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_proveedor_prv_rubro->getPrvProveedor()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_proveedor_prv_rubro prv_rubro_id">
            <div class="label"><?php Lang::_lang('PrvRubro') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_proveedor_prv_rubro->getPrvRubro()->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

