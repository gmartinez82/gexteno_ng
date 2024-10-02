<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$pan_ubi_altura = PanUbiAltura::getOxId($id);
//Gral::prr($pan_ubi_altura);
?>

<div class="tabs ficha-pan_ubi_altura" identificador="<?php echo $pan_ubi_altura->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par pan_ubi_altura id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_ubi_altura->getId()) ?>
            </div>
        </div>

	
        <div class="par pan_ubi_altura descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_ubi_altura->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par pan_ubi_altura codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_ubi_altura->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par pan_ubi_altura observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_ubi_altura->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par pan_ubi_altura orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_ubi_altura->getOrden()) ?>
            </div>
        </div>
		
        <div class="par pan_ubi_altura estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($pan_ubi_altura->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

