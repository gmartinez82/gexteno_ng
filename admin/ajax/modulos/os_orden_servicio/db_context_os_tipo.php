<?php
include_once "_autoload.php";
include_once Gral::getPathAbs()."admin/control/seguridad_modulo.php";
include_once Gral::getPathAbs()."admin/control/init.php";

$user = UsUsuario::autenticado();

$os_orden_servicio_id = Gral::getVars(2, 'os_orden_servicio_id');
$os_orden_servicio = OsOrdenServicio::getOxId($os_orden_servicio_id);
$os_tipo = $os_orden_servicio->getOsTipo();

?>
<div class="datos" id="<?php Gral::_echo($os_tipo->getId()) ?>">
	<div class="titulo">
		<?php Lang::_lang('OsTipo') ?>: 
        <strong><?php Gral::_echo($os_tipo->getId()) ?> - <?php Gral::_echo($os_tipo->getDescripcion()) ?></strong>
    </div>
	
    <div class="uno editar">
		<a href="os_tipo_alta.php?id=<?php echo($os_tipo->getId()) ?>">
            <img class="icono" src="imgs/btn_modi.gif" width="16" align="absmiddle" title="" />
            <?php Lang::_lang('Editar') ?> <?php Lang::_lang('OsTipo') ?>: <strong><?php Gral::_echo($os_tipo->getDescripcion()) ?></strong>
        </a>
    </div>

    <div class="uno filtrar">
        <a href="_init.php?arr_gral=<?php echo OsOrdenServicio::getFiltrosArrGral() ?>&arr=<?php echo $os_orden_servicio->getFiltrosArrXCampo('OsTipo', 'os_tipo_id') ?>">
            <img class="icono" src="imgs/lupa.png" width="18" align="absmiddle" title="" />
            <?php Lang::_lang('Ver') ?> <?php Lang::_lang('OsOrdenServicios') ?> <?php Lang::_lang('de') ?>: <strong><?php Gral::_echo($os_tipo->getDescripcion()) ?></strong>
        </a>
    </div>

	<br />
</div>

