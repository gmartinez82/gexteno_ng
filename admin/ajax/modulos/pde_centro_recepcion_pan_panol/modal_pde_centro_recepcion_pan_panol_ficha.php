<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pde_centro_recepcion_pan_panol = PdeCentroRecepcionPanPanol::getOxId($id);
//Gral::prr($pde_centro_recepcion_pan_panol);
?>

<div class="tabs ficha-pde_centro_recepcion_pan_panol" identificador="<?php echo $pde_centro_recepcion_pan_panol->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pde_centro_recepcion_pan_panol id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_centro_recepcion_pan_panol->getId()) ?>
            </div>
        </div>

	
        <div class="par pde_centro_recepcion_pan_panol pde_centro_recepcion_id">
            <div class="label"><?php Lang::_lang('PdeCentroRecepcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_centro_recepcion_pan_panol->getPdeCentroRecepcion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pde_centro_recepcion_pan_panol pan_panol_id">
            <div class="label"><?php Lang::_lang('PanPanol') ?></div>
            <div class="dato">
                <?php Gral::_echo($pde_centro_recepcion_pan_panol->getPanPanol()->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

