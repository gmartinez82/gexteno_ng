<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gral_sucursal_tipo = GralSucursalTipo::getOxId($id);
//Gral::prr($gral_sucursal_tipo);
?>

<div class="tabs ficha-gral_sucursal_tipo" identificador="<?php echo $gral_sucursal_tipo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gral_sucursal_tipo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal_tipo->getId()) ?>
            </div>
        </div>

	
        <div class="par gral_sucursal_tipo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal_tipo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_sucursal_tipo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal_tipo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gral_sucursal_tipo descripcion_corta">
            <div class="label"><?php Lang::_lang('Desc Corta') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal_tipo->getDescripcionCorta()) ?>
            </div>
        </div>
		
        <div class="par gral_sucursal_tipo color">
            <div class="label"><?php Lang::_lang('Color') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal_tipo->getColor()) ?>
            </div>
        </div>
		
        <div class="par gral_sucursal_tipo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal_tipo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gral_sucursal_tipo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal_tipo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gral_sucursal_tipo estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_sucursal_tipo->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

