<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$os_orden_servicio_archivo = OsOrdenServicioArchivo::getOxId($id);
//Gral::prr($os_orden_servicio_archivo);
?>

<div class="tabs ficha-os_orden_servicio_archivo" identificador="<?php echo $os_orden_servicio_archivo->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par os_orden_servicio_archivo id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_orden_servicio_archivo->getId()) ?>
            </div>
        </div>

	
        <div class="par os_orden_servicio_archivo descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_orden_servicio_archivo->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par os_orden_servicio_archivo os_orden_servicio_id">
            <div class="label"><?php Lang::_lang('OsOrdenServicio') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_orden_servicio_archivo->getOsOrdenServicio()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par os_orden_servicio_archivo codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_orden_servicio_archivo->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par os_orden_servicio_archivo observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_orden_servicio_archivo->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par os_orden_servicio_archivo orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_orden_servicio_archivo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par os_orden_servicio_archivo estado">
            <div class="label"><?php Lang::_lang('estado') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_orden_servicio_archivo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par os_orden_servicio_archivo archivo">
            <div class="label"><?php Lang::_lang('Archivo') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_orden_servicio_archivo->getOrden()) ?>
            </div>
        </div>
		
        <div class="par os_orden_servicio_archivo peso">
            <div class="label"><?php Lang::_lang('Peso') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_orden_servicio_archivo->getPeso()) ?>
            </div>
        </div>
		
        <div class="par os_orden_servicio_archivo tipo">
            <div class="label"><?php Lang::_lang('Tipo') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_orden_servicio_archivo->getTipo()) ?>
            </div>
        </div>
	
    </div>    

</div>

