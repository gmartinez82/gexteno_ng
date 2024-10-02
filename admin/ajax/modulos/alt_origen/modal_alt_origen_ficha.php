<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$alt_origen = AltOrigen::getOxId($id);
//Gral::prr($alt_origen);
?>

<div class="tabs ficha-alt_origen" identificador="<?php echo $alt_origen->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par alt_origen id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_origen->getId()) ?>
            </div>
        </div>

	
        <div class="par alt_origen descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_origen->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par alt_origen codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_origen->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par alt_origen observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_origen->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par alt_origen orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_origen->getOrden()) ?>
            </div>
        </div>
		
        <div class="par alt_origen estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($alt_origen->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

