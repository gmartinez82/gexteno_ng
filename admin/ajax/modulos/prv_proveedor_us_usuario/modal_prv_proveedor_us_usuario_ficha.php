<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$prv_proveedor_us_usuario = PrvProveedorUsUsuario::getOxId($id);
//Gral::prr($prv_proveedor_us_usuario);
?>

<div class="tabs ficha-prv_proveedor_us_usuario" identificador="<?php echo $prv_proveedor_us_usuario->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par prv_proveedor_us_usuario id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_proveedor_us_usuario->getId()) ?>
            </div>
        </div>

	
        <div class="par prv_proveedor_us_usuario prv_proveedor_id">
            <div class="label"><?php Lang::_lang('PrvProveedor') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_proveedor_us_usuario->getPrvProveedor()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par prv_proveedor_us_usuario us_usuario_id">
            <div class="label"><?php Lang::_lang('UsUsuario') ?></div>
            <div class="dato">
                <?php Gral::_echo($prv_proveedor_us_usuario->getUsUsuario()->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

