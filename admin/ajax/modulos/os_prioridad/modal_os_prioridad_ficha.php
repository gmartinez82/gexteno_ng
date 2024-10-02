<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$os_prioridad = OsPrioridad::getOxId($id);
//Gral::prr($os_prioridad);
?>

<div class="tabs ficha-os_prioridad" identificador="<?php echo $os_prioridad->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par os_prioridad id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_prioridad->getId()) ?>
            </div>
        </div>

	
        <div class="par os_prioridad descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_prioridad->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par os_prioridad codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_prioridad->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par os_prioridad observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_prioridad->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par os_prioridad orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_prioridad->getOrden()) ?>
            </div>
        </div>
		
        <div class="par os_prioridad estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($os_prioridad->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

