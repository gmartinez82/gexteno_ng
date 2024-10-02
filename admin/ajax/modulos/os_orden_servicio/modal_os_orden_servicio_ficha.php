<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$id = Gral::getVars(2, 'id', 0);
$os_orden_servicio = OsOrdenServicio::getOxId($id);
//Gral::prr($os_orden_servicio);
?>

<div class="tabs ficha-os_orden_servicio" identificador="<?php echo $os_orden_servicio->getId() ?>">

    <ul>
        <li><a href="#tab_general"><?php Lang::_lang('General') ?></a></li>

    </ul>

    <!-- Tab General -->
    <div id="tab_general" class="datos">

        <div class="par os_orden_servicio id">
            <div class="label"><?php Lang::_lang('Id') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_orden_servicio->getId()) ?>
            </div>
        </div>

	
        <div class="par os_orden_servicio os_tipo_id">
            <div class="label"><?php Lang::_lang('OsTipo') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_orden_servicio->getOsTipo()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par os_orden_servicio per_persona_id">
            <div class="label"><?php Lang::_lang('PerPersona') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_orden_servicio->getPerPersona()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par os_orden_servicio os_prioridad_id">
            <div class="label"><?php Lang::_lang('OsPrioridad') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_orden_servicio->getOsPrioridad()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par os_orden_servicio os_tipo_estado_id">
            <div class="label"><?php Lang::_lang('OsTipoEstado') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_orden_servicio->getOsTipoEstado()->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par os_orden_servicio notificacion">
            <div class="label"><?php Lang::_lang('Notificacion') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_orden_servicio->getNotificacion()) ?>
            </div>
        </div>
		
        <div class="par os_orden_servicio notificacion_mecano">
            <div class="label"><?php Lang::_lang('Not Mec') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($os_orden_servicio->getNotificacionMecano())->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par os_orden_servicio fecha">
            <div class="label"><?php Lang::_lang('Fecha') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($os_orden_servicio->getFecha())) ?>
            </div>
        </div>
		
        <div class="par os_orden_servicio fecha_hecho">
            <div class="label"><?php Lang::_lang('Fecha Hecho') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($os_orden_servicio->getFechaHecho())) ?>
            </div>
        </div>
		
        <div class="par os_orden_servicio fecha_notificacion">
            <div class="label"><?php Lang::_lang('Fecha Notif') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($os_orden_servicio->getFechaNotificacion())) ?>
            </div>
        </div>
		
        <div class="par os_orden_servicio dias_para_descargo">
            <div class="label"><?php Lang::_lang('Dias Descargo') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_orden_servicio->getDiasParaDescargo()) ?>
            </div>
        </div>
		
        <div class="par os_orden_servicio fecha_limite_descargo">
            <div class="label"><?php Lang::_lang('Fecha Limite Descargo') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($os_orden_servicio->getFechaLimiteDescargo())) ?>
            </div>
        </div>
		
        <div class="par os_orden_servicio fecha_descargo">
            <div class="label"><?php Lang::_lang('Fecha Descargo') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($os_orden_servicio->getFechaDescargo())) ?>
            </div>
        </div>
		
        <div class="par os_orden_servicio fecha_notificado_sin_descargo">
            <div class="label"><?php Lang::_lang('Fecha Noti sin Descargo') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($os_orden_servicio->getFechaNotificadoSinDescargo())) ?>
            </div>
        </div>
		
        <div class="par os_orden_servicio fecha_limite_resolucion">
            <div class="label"><?php Lang::_lang('Fecha Limite Resolucion') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($os_orden_servicio->getFechaLimiteResolucion())) ?>
            </div>
        </div>
		
        <div class="par os_orden_servicio fecha_resolucion">
            <div class="label"><?php Lang::_lang('Fecha Resolucion') ?></div>
            <div class="dato">
                <?php Gral::_echo(Gral::getFechaToWeb($os_orden_servicio->getFechaResolucion())) ?>
            </div>
        </div>
		
        <div class="par os_orden_servicio descripcion">
            <div class="label"><?php Lang::_lang('Descripcion') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_orden_servicio->getDescripcion()) ?>
            </div>
        </div>
		
        <div class="par os_orden_servicio codigo">
            <div class="label"><?php Lang::_lang('Codigo') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_orden_servicio->getCodigo()) ?>
            </div>
        </div>
		
        <div class="par os_orden_servicio observacion">
            <div class="label"><?php Lang::_lang('Observaciones') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_orden_servicio->getObservacion()) ?>
            </div>
        </div>
		
        <div class="par os_orden_servicio orden">
            <div class="label"><?php Lang::_lang('orden') ?></div>
            <div class="dato">
                <?php Gral::_echo($os_orden_servicio->getOrden()) ?>
            </div>
        </div>
		
        <div class="par os_orden_servicio estado">
            <div class="label"><?php Lang::_lang('Estado') ?></div>
            <div class="dato">
                <?php Gral::_echo(GralSiNo::getOxId($os_orden_servicio->getEstado())->getDescripcion()) ?>
            </div>
        </div>
	
    </div>    

</div>

