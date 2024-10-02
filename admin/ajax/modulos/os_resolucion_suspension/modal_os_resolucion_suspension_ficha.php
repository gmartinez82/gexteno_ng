<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$os_resolucion_suspension = OsResolucionSuspension::getOxId($id);
//Gral::prr($os_resolucion_suspension);
?>

<div class="tabs ficha-os_resolucion_suspension" identificador="<?php echo $os_resolucion_suspension->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par os_resolucion_suspension id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_resolucion_suspension->getId()) ?>
            </div>
        </div>

	
        <div class="par os_resolucion_suspension os_resolucion_id">
            <div class="label"><?php Lang::_lang('OsResolucion') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_resolucion_suspension->getOsResolucion()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par os_resolucion_suspension dias_suspension">
            <div class="label"><?php Lang::_lang('Dias Suspension') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_resolucion_suspension->getDiasSuspension()) ?>
            </div>
        </div>
		
        <div class="par os_resolucion_suspension fecha_inicio">
            <div class="label"><?php Lang::_lang('Fecha Inicio') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($os_resolucion_suspension->getFechaInicio())) ?>
            </div>
        </div>
		
        <div class="par os_resolucion_suspension fecha_fin">
            <div class="label"><?php Lang::_lang('Fecha Fin') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($os_resolucion_suspension->getFechaFin())) ?>
            </div>
        </div>
		
        <div class="par os_resolucion_suspension fecha_reintegro">
            <div class="label"><?php Lang::_lang('Fecha Reintegro') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($os_resolucion_suspension->getFechaReintegro())) ?>
            </div>
        </div>
		
        <div class="par os_resolucion_suspension descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_resolucion_suspension->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par os_resolucion_suspension codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_resolucion_suspension->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par os_resolucion_suspension afecta_haberes">
            <div class="label"><?php Lang::_lang('Afecta Haberes') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($os_resolucion_suspension->getAfectaHaberes())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par os_resolucion_suspension nota_publica">
            <div class="label"><?php Lang::_lang('Nota Publica') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_resolucion_suspension->getNotaPublica()) ?>
            </div>
        </div>
		
        <div class="par os_resolucion_suspension observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_resolucion_suspension->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par os_resolucion_suspension orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_resolucion_suspension->getOrden()) ?>
            </div>
        </div>
		
        <div class="par os_resolucion_suspension estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($os_resolucion_suspension->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

