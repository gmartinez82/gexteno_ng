<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$fnd_cajero_gral_caja = FndCajeroGralCaja::getOxId($id);
//Gral::prr($fnd_cajero_gral_caja);
?>

<div class="tabs ficha-fnd_cajero_gral_caja" identificador="<?php echo $fnd_cajero_gral_caja->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par fnd_cajero_gral_caja id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_cajero_gral_caja->getId()) ?>
            </div>
        </div>

	
        <div class="par fnd_cajero_gral_caja fnd_cajero_id">
            <div class="label"><?php Lang::_lang('FndCajero') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_cajero_gral_caja->getFndCajero()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_cajero_gral_caja gral_caja_id">
            <div class="label"><?php Lang::_lang('GralCaja') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_cajero_gral_caja->getGralCaja()->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

