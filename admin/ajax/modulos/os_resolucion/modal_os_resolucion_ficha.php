<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$os_resolucion = OsResolucion::getOxId($id);
//Gral::prr($os_resolucion);
?>

<div class="tabs ficha-os_resolucion" identificador="<?php echo $os_resolucion->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par os_resolucion id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_resolucion->getId()) ?>
            </div>
        </div>

	
        <div class="par os_resolucion os_orden_servicio_id">
            <div class="label"><?php Lang::_lang('OsOrdenServicio') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_resolucion->getOsOrdenServicio()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par os_resolucion os_tipo_resolucion_id">
            <div class="label"><?php Lang::_lang('OsTipoResolucion') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_resolucion->getOsTipoResolucion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par os_resolucion fecha">
            <div class="label"><?php Lang::_lang('Fecha') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($os_resolucion->getFecha())) ?>
            </div>
        </div>
		
        <div class="par os_resolucion descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_resolucion->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par os_resolucion codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_resolucion->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par os_resolucion nota_publica">
            <div class="label"><?php Lang::_lang('Nota Publica') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_resolucion->getNotaPublica()) ?>
            </div>
        </div>
		
        <div class="par os_resolucion observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_resolucion->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par os_resolucion orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_resolucion->getOrden()) ?>
            </div>
        </div>
		
        <div class="par os_resolucion estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($os_resolucion->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

