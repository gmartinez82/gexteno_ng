<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pan_ubi_celda = PanUbiCelda::getOxId($id);
//Gral::prr($pan_ubi_celda);
?>

<div class="tabs ficha-pan_ubi_celda" identificador="<?php echo $pan_ubi_celda->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pan_ubi_celda id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_ubi_celda->getId()) ?>
            </div>
        </div>

	
        <div class="par pan_ubi_celda descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_ubi_celda->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pan_ubi_celda codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_ubi_celda->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pan_ubi_celda observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_ubi_celda->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pan_ubi_celda orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_ubi_celda->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pan_ubi_celda estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_ubi_celda->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

