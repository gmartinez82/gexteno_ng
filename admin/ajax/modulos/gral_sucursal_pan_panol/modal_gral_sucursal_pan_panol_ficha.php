<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gral_sucursal_pan_panol = GralSucursalPanPanol::getOxId($id);
//Gral::prr($gral_sucursal_pan_panol);
?>

<div class="tabs ficha-gral_sucursal_pan_panol" identificador="<?php echo $gral_sucursal_pan_panol->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gral_sucursal_pan_panol id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal_pan_panol->getId()) ?>
            </div>
        </div>

	
        <div class="par gral_sucursal_pan_panol descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal_pan_panol->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_sucursal_pan_panol gral_sucursal_id">
            <div class="label"><?php Lang::_lang('GralSucursal') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal_pan_panol->getGralSucursal()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_sucursal_pan_panol pan_panol_id">
            <div class="label"><?php Lang::_lang('PanPanol') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal_pan_panol->getPanPanol()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_sucursal_pan_panol codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal_pan_panol->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gral_sucursal_pan_panol observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal_pan_panol->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gral_sucursal_pan_panol orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal_pan_panol->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gral_sucursal_pan_panol estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_sucursal_pan_panol->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

