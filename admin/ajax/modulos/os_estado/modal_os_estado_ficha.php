<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$os_estado = OsEstado::getOxId($id);
//Gral::prr($os_estado);
?>

<div class="tabs ficha-os_estado" identificador="<?php echo $os_estado->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par os_estado id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_estado->getId()) ?>
            </div>
        </div>

	
        <div class="par os_estado os_orden_servicio_id">
            <div class="label"><?php Lang::_lang('OsOrdenServicio') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_estado->getOsOrdenServicio()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par os_estado os_tipo_estado_id">
            <div class="label"><?php Lang::_lang('OsTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_estado->getOsTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par os_estado actual">
            <div class="label"><?php Lang::_lang('Actual') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($os_estado->getActual())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par os_estado fecha">
            <div class="label"><?php Lang::_lang('Fecha') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($os_estado->getFecha())) ?>
            </div>
        </div>
		
        <div class="par os_estado descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_estado->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par os_estado codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_estado->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par os_estado observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_estado->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par os_estado orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_estado->getOrden()) ?>
            </div>
        </div>
		
        <div class="par os_estado estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($os_estado->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

