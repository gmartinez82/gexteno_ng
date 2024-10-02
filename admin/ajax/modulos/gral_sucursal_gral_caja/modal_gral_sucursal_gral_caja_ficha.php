<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gral_sucursal_gral_caja = GralSucursalGralCaja::getOxId($id);
//Gral::prr($gral_sucursal_gral_caja);
?>

<div class="tabs ficha-gral_sucursal_gral_caja" identificador="<?php echo $gral_sucursal_gral_caja->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gral_sucursal_gral_caja id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal_gral_caja->getId()) ?>
            </div>
        </div>

	
        <div class="par gral_sucursal_gral_caja gral_sucursal_id">
            <div class="label"><?php Lang::_lang('GralSucursal') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal_gral_caja->getGralSucursal()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_sucursal_gral_caja gral_caja_id">
            <div class="label"><?php Lang::_lang('GralCaja') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal_gral_caja->getGralCaja()->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

