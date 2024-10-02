<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gral_centro_costo_gral_sucursal = GralCentroCostoGralSucursal::getOxId($id);
//Gral::prr($gral_centro_costo_gral_sucursal);
?>

<div class="tabs ficha-gral_centro_costo_gral_sucursal" identificador="<?php echo $gral_centro_costo_gral_sucursal->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gral_centro_costo_gral_sucursal id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_centro_costo_gral_sucursal->getId()) ?>
            </div>
        </div>

	
        <div class="par gral_centro_costo_gral_sucursal descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_centro_costo_gral_sucursal->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_centro_costo_gral_sucursal gral_centro_costo_id">
            <div class="label"><?php Lang::_lang('GralCentroCosto') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_centro_costo_gral_sucursal->getGralCentroCosto()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_centro_costo_gral_sucursal gral_sucursal_id">
            <div class="label"><?php Lang::_lang('GralSucursal') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_centro_costo_gral_sucursal->getGralSucursal()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_centro_costo_gral_sucursal codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_centro_costo_gral_sucursal->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gral_centro_costo_gral_sucursal observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_centro_costo_gral_sucursal->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gral_centro_costo_gral_sucursal orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_centro_costo_gral_sucursal->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gral_centro_costo_gral_sucursal estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_centro_costo_gral_sucursal->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

