<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pan_ubi_pasillo = PanUbiPasillo::getOxId($id);
//Gral::prr($pan_ubi_pasillo);
?>

<div class="tabs ficha-pan_ubi_pasillo" identificador="<?php echo $pan_ubi_pasillo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pan_ubi_pasillo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_ubi_pasillo->getId()) ?>
            </div>
        </div>

	
        <div class="par pan_ubi_pasillo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_ubi_pasillo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pan_ubi_pasillo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_ubi_pasillo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pan_ubi_pasillo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_ubi_pasillo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pan_ubi_pasillo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_ubi_pasillo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pan_ubi_pasillo estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_ubi_pasillo->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

