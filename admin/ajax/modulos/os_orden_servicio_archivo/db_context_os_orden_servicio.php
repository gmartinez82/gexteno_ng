<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$os_orden_servicio_archivo_id = Gral::getVars(2, 'os_orden_servicio_archivo_id');
$os_orden_servicio_archivo = OsOrdenServicioArchivo::getOxId($os_orden_servicio_archivo_id);
$os_orden_servicio = $os_orden_servicio_archivo->getOsOrdenServicio();

?>
<div class="datos" id="<?php Gral::_echo($os_orden_servicio->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('OsOrdenServicio') ?>: 
        <strong><?php Gral::_echo($os_orden_servicio->getId()) ?> - <?php Gral::_echo($os_orden_servicio->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="os_orden_servicio_alta.php?id=<?php echo($os_orden_servicio->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('OsOrdenServicio') ?>: <strong><?php Gral::_echo($os_orden_servicio->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo OsOrdenServicioArchivo::getFiltrosArrGral() ?>&arr=<?php echo $os_orden_servicio_archivo->getFiltrosArrXCampo('OsOrdenServicio', 'os_orden_servicio_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('OsOrdenServicioArchivos') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($os_orden_servicio->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

