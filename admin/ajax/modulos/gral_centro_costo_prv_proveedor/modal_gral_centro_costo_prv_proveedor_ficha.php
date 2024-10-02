<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gral_centro_costo_prv_proveedor = GralCentroCostoPrvProveedor::getOxId($id);
//Gral::prr($gral_centro_costo_prv_proveedor);
?>

<div class="tabs ficha-gral_centro_costo_prv_proveedor" identificador="<?php echo $gral_centro_costo_prv_proveedor->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gral_centro_costo_prv_proveedor id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_centro_costo_prv_proveedor->getId()) ?>
            </div>
        </div>

	
        <div class="par gral_centro_costo_prv_proveedor descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_centro_costo_prv_proveedor->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_centro_costo_prv_proveedor gral_centro_costo_id">
            <div class="label"><?php Lang::_lang('GralCentroCosto') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_centro_costo_prv_proveedor->getGralCentroCosto()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_centro_costo_prv_proveedor prv_proveedor_id">
            <div class="label"><?php Lang::_lang('PrvProveedor') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_centro_costo_prv_proveedor->getPrvProveedor()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_centro_costo_prv_proveedor codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_centro_costo_prv_proveedor->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gral_centro_costo_prv_proveedor observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_centro_costo_prv_proveedor->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gral_centro_costo_prv_proveedor orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_centro_costo_prv_proveedor->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gral_centro_costo_prv_proveedor estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($gral_centro_costo_prv_proveedor->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

