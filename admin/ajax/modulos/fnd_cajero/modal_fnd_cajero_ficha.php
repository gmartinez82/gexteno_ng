<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$fnd_cajero = FndCajero::getOxId($id);
//Gral::prr($fnd_cajero);
?>

<div class="tabs ficha-fnd_cajero" identificador="<?php echo $fnd_cajero->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par fnd_cajero id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_cajero->getId()) ?>
            </div>
        </div>

	
        <div class="par fnd_cajero descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_cajero->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par fnd_cajero apellido">
            <div class="label"><?php Lang::_lang('Apellido') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_cajero->getApellido()) ?>
            </div>
        </div>
		
        <div class="par fnd_cajero nombre">
            <div class="label"><?php Lang::_lang('Nombre') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_cajero->getNombre()) ?>
            </div>
        </div>
		
        <div class="par fnd_cajero codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_cajero->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par fnd_cajero observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_cajero->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par fnd_cajero orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($fnd_cajero->getOrden()) ?>
            </div>
        </div>
		
        <div class="par fnd_cajero estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($fnd_cajero->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

