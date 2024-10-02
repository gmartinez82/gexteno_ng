<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$gral_actividad = GralActividad::getOxId($id);
//Gral::prr($gral_actividad);
?>

<div class="tabs ficha-gral_actividad" identificador="<?php echo $gral_actividad->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par gral_actividad id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_actividad->getId()) ?>
            </div>
        </div>

	
        <div class="par gral_actividad descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_actividad->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par gral_actividad codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_actividad->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par gral_actividad observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_actividad->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par gral_actividad orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_actividad->getOrden()) ?>
            </div>
        </div>
		
        <div class="par gral_actividad estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($gral_actividad->getOrden()) ?>
            </div>
        </div>
	
    </div>    

</div>

